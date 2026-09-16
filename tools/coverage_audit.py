#!/usr/bin/env python3
"""
coverage_audit.py — reproduce Google's index-coverage buckets locally.

The GSC spreadsheet export only gives you counts. This crawls your own
sitemap and tells you WHICH url landed in each bucket, so you can fix it.

Usage:
    python3 coverage_audit.py https://peevishpenman.com/sitemap.xml
    python3 coverage_audit.py https://peevishpenman.com/sitemap.xml --out report.csv
    python3 coverage_audit.py https://peevishpenman.com/sitemap.xml --ua googlebot

Stdlib only. No pip install.
"""

import argparse
import csv
import gzip
import re
import sys
import time
import urllib.error
import urllib.parse
import urllib.request
import xml.etree.ElementTree as ET
from html.parser import HTMLParser

UA_BROWSER = "Mozilla/5.0 (compatible; coverage-audit/1.0)"
UA_GOOGLEBOT = (
    "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)"
)


class NoRedirect(urllib.request.HTTPRedirectHandler):
    """Stop urllib from silently following 301/302 — the redirect IS the finding."""

    def redirect_request(self, req, fp, code, msg, headers, newurl):
        return None


def fetch(url, ua, follow=False, timeout=20):
    """Return (status, headers, body_text, error_string)."""
    req = urllib.request.Request(url, headers={"User-Agent": ua})
    handlers = [] if follow else [NoRedirect]
    opener = urllib.request.build_opener(*handlers)
    try:
        with opener.open(req, timeout=timeout) as resp:
            raw = resp.read(400_000)
            if resp.headers.get("Content-Encoding") == "gzip":
                try:
                    raw = gzip.decompress(raw)
                except OSError:
                    pass
            return resp.status, dict(resp.headers), raw.decode("utf-8", "replace"), ""
    except urllib.error.HTTPError as e:
        raw = e.read(400_000) if e.fp else b""
        return e.code, dict(e.headers or {}), raw.decode("utf-8", "replace"), ""
    except Exception as e:  # timeouts, DNS, TLS
        return 0, {}, "", f"{type(e).__name__}: {e}"


class HeadScan(HTMLParser):
    """Pull robots meta + rel=canonical out of <head>. Stops at <body>."""

    def __init__(self):
        super().__init__(convert_charrefs=True)
        self.robots = ""
        self.canonical = ""
        self.title = ""
        self._in_title = False
        self.done = False

    def handle_starttag(self, tag, attrs):
        if self.done:
            return
        a = {k.lower(): (v or "") for k, v in attrs}
        if tag == "body":
            self.done = True
        elif tag == "meta":
            name = a.get("name", "").lower()
            if name in ("robots", "googlebot"):
                self.robots = (self.robots + "," + a.get("content", "")).strip(",")
        elif tag == "link" and "canonical" in a.get("rel", "").lower():
            self.canonical = a.get("href", "").strip()
        elif tag == "title":
            self._in_title = True

    def handle_data(self, data):
        if self._in_title and not self.title:
            self.title = data.strip()[:120]

    def handle_endtag(self, tag):
        if tag == "title":
            self._in_title = False


def norm(url):
    """Normalise for canonical comparison: drop fragment, trailing slash, default port."""
    p = urllib.parse.urlsplit(url)
    host = p.hostname or ""
    path = re.sub(r"/index\.(php|html?)$", "/", p.path) or "/"
    if len(path) > 1:
        path = path.rstrip("/")
    return f"{p.scheme}://{host}{path}" + (f"?{p.query}" if p.query else "")


def load_sitemap(url, ua, seen=None):
    """Recursively expand a sitemap or sitemap index into a flat url list."""
    seen = seen if seen is not None else set()
    if url in seen:
        return []
    seen.add(url)
    status, _, body, err = fetch(url, ua, follow=True)
    if status != 200 or not body.strip():
        print(f"  ! sitemap {url} -> {status or err}", file=sys.stderr)
        return []
    try:
        root = ET.fromstring(body)
    except ET.ParseError as e:
        print(f"  ! sitemap {url} is not valid XML: {e}", file=sys.stderr)
        return []
    ns = "{http://www.sitemaps.org/schemas/sitemap/0.9}"
    out = []
    if root.tag.endswith("sitemapindex"):
        for loc in root.iter(f"{ns}loc"):
            out += load_sitemap(loc.text.strip(), ua, seen)
    else:
        for u in root.iter(f"{ns}url"):
            loc = u.find(f"{ns}loc")
            if loc is not None and loc.text:
                out.append(loc.text.strip())
    return out


def robots_rules(origin, ua):
    """Very small robots.txt reader: return list of Disallow paths for *."""
    status, _, body, _ = fetch(urllib.parse.urljoin(origin, "/robots.txt"), ua, True)
    if status != 200:
        return []
    rules, applies = [], False
    for line in body.splitlines():
        line = line.split("#")[0].strip()
        if not line or ":" not in line:
            continue
        field, _, value = line.partition(":")
        field, value = field.strip().lower(), value.strip()
        if field == "user-agent":
            applies = value == "*" or "googlebot" in value.lower()
        elif field == "disallow" and applies and value:
            rules.append(value)
    return rules


def classify(url, status, headers, body, err, disallows):
    """Map one url onto the bucket names Search Console uses."""
    path = urllib.parse.urlsplit(url).path or "/"
    blocked = [d for d in disallows if path.startswith(d)]

    if err:
        return "Server error / unreachable", err, ""
    if status in (301, 302, 303, 307, 308):
        return "Page with redirect", f"{status} -> {headers.get('Location', '?')}", ""
    if status == 404 or status == 410:
        return "Not found (404)", str(status), ""
    if status == 403:
        return "Blocked due to access forbidden (403)", "403", ""
    if status >= 500:
        return "Server error (5xx)", str(status), ""
    if status != 200:
        return f"Unexpected status {status}", str(status), ""

    xr = headers.get("X-Robots-Tag", "")
    scan = HeadScan()
    try:
        scan.feed(body)
    except Exception:
        pass
    robots = ",".join(x for x in (scan.robots, xr) if x).lower()

    if "noindex" in robots or "none" in robots:
        src = "X-Robots-Tag header" if "noindex" in xr.lower() else "meta robots"
        return "Excluded by 'noindex' tag", f"{src}: {robots}", scan.canonical

    if blocked:
        return "Blocked by robots.txt", f"Disallow: {blocked[0]}", scan.canonical

    if not scan.canonical:
        return "Duplicate without user-selected canonical", "no rel=canonical", ""

    if norm(scan.canonical) != norm(url):
        return (
            "Alternate page with proper canonical tag",
            f"points to {scan.canonical}",
            scan.canonical,
        )

    thin = len(re.sub(r"<[^>]+>", " ", body).split())
    if thin < 150:
        return "Indexable (thin: %d words)" % thin, scan.title, scan.canonical

    return "Indexable", scan.title, scan.canonical


def main():
    ap = argparse.ArgumentParser()
    ap.add_argument("sitemap", help="sitemap or sitemap-index URL")
    ap.add_argument("--out", default="coverage_report.csv")
    ap.add_argument("--ua", choices=["browser", "googlebot"], default="browser",
                    help="googlebot spoofs the Googlebot UA — use it to catch 403s "
                         "caused by bot-blocking rules")
    ap.add_argument("--delay", type=float, default=0.3, help="seconds between requests")
    args = ap.parse_args()

    ua = UA_GOOGLEBOT if args.ua == "googlebot" else UA_BROWSER
    origin = "{0.scheme}://{0.netloc}".format(urllib.parse.urlsplit(args.sitemap))

    print(f"Reading {args.sitemap} ...", file=sys.stderr)
    urls = list(dict.fromkeys(load_sitemap(args.sitemap, ua)))
    if not urls:
        sys.exit("No URLs found. Check the sitemap path.")
    disallows = robots_rules(origin, ua)
    print(f"{len(urls)} URLs, {len(disallows)} robots.txt disallow rules\n", file=sys.stderr)

    rows, tally = [], {}
    for i, url in enumerate(urls, 1):
        status, headers, body, err = fetch(url, ua)
        bucket, detail, canon = classify(url, status, headers, body, err, disallows)
        tally[bucket] = tally.get(bucket, 0) + 1
        rows.append({
            "url": url,
            "bucket": bucket,
            "http_status": status or "ERR",
            "detail": detail,
            "canonical": canon,
        })
        flag = " " if bucket.startswith("Indexable") else "*"
        print(f"{flag}[{i}/{len(urls)}] {status or 'ERR':>3} {bucket:<45} {url}",
              file=sys.stderr)
        time.sleep(args.delay)

    with open(args.out, "w", newline="", encoding="utf-8") as f:
        w = csv.DictWriter(f, fieldnames=["url", "bucket", "http_status", "detail",
                                          "canonical"])
        w.writeheader()
        w.writerows(rows)

    print("\n--- summary ---", file=sys.stderr)
    for bucket, n in sorted(tally.items(), key=lambda kv: -kv[1]):
        print(f"{n:>4}  {bucket}", file=sys.stderr)
    print(f"\nWrote {args.out}", file=sys.stderr)


if __name__ == "__main__":
    main()
