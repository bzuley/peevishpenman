<?php
// Pages that answer "not found" set $ppm_ga_not_found = true before
// including this, so the Pages report in Google Analytics lists each
// missing URL (and the site that linked to it) by name instead of
// lumping every 404 under one "Page Not Found" title.
//
// Beyond the plain page view, this sends GA4 as much context as it can:
// for articles, the author, topics and publish date, where the visitor really came from (including shares
// whose referrer was stripped), a first-visit record for each browser,
// how far people read, what they click on, and how the page performed.
// Custom parameters only show in reports once they're registered as custom
// dimensions in GA (Admin > Custom definitions); see the list in
// the note at the bottom of this file.
$ppm_ga_script = $_SERVER['SCRIPT_NAME'] ?? '';
$ppm_ga_ctx = ['kind' => 'Other'];
if (!empty($ppm_ga_not_found)) {
  $ppm_ga_ctx['kind'] = 'Not found';
} elseif (strpos($ppm_ga_script, '/articles/') === 0 && !empty($post_meta['slug'])) {
  $ppm_ga_ctx = [
    'kind'              => 'Article',
    'content_id'        => $post_meta['slug'],
    'article_author'    => $post_meta['author'] ?? 'OA Allen',
    'article_type'      => !empty($post_meta['guest_post']) || ($post_meta['author'] ?? 'OA Allen') !== 'OA Allen' ? 'Guest post' : 'Own post',
    'article_tags'      => substr(preg_replace('/\s+/', '', (string)($post_meta['tags'] ?? '')), 0, 100),
    'article_published' => $post_meta['date'] ?? '',
    'article_has_image' => !empty($post_meta['image']) ? 'yes' : 'no',
  ];
} elseif ($ppm_ga_script === '/index.php') {
  $ppm_ga_ctx['kind'] = 'Home';
} elseif ($ppm_ga_script === '/articles.php') {
  $ppm_ga_ctx['kind'] = 'Articles list';
} elseif ($ppm_ga_script === '/article-tag.php') {
  $ppm_ga_ctx = ['kind' => 'Topic', 'content_id' => strtolower(trim((string)($_GET['tag'] ?? '')))];
} elseif ($ppm_ga_script === '/search.php') {
  $ppm_ga_ctx = ['kind' => 'Search', 'search_term' => trim((string)($_GET['q'] ?? ''))];
} elseif (strpos($ppm_ga_script, '/pages/') === 0) {
  $ppm_ga_ctx = ['kind' => 'Page', 'content_id' => basename($ppm_ga_script, '.php')];
}
$ppm_ga_ctx = array_filter($ppm_ga_ctx, fn($v) => $v !== '' && $v !== null);
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PJTW8FGPV8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  (function () {
    var ctx = <?php echo json_encode($ppm_ga_ctx, JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
    var config = {};
    var userProps = {};
    var key;
    // ctx.kind (what sort of page this is) steers the tracking below but is
    // not reported: the page path and title already say which page it is.
    for (key in ctx) { if (key !== 'kind') config[key] = ctx[key]; }

    function store(name, value) {
      try {
        if (value === undefined) return localStorage.getItem(name);
        localStorage.setItem(name, value);
      } catch (e) {}
      return null;
    }

    // ---- Where the visit came from ---------------------------------------
    var params = new URLSearchParams(location.search);
    var ref = null;
    try { if (document.referrer) ref = new URL(document.referrer); } catch (e) {}
    var refHost = '(none)';
    if (ref) refHost = ref.hostname === location.hostname ? '(internal)' : (ref.hostname || ref.protocol);
    config.referrer_host = refHost;

    // Visits that arrive without UTM tags: credit the network when the link
    // carries its click id, or when the referrer is an app (Android reports
    // the app's package name). GA's own source detection is left alone
    // whenever the link is already tagged or the referrer is a normal site.
    if (!params.has('utm_source') && !params.has('gclid') && refHost !== '(internal)') {
      var clickIds = {
        fbclid: ['facebook', 'social'], twclid: ['x', 'social'], igshid: ['instagram', 'social'],
        ttclid: ['tiktok', 'social'], li_fat_id: ['linkedin', 'social'], msclkid: ['bing', 'cpc'],
        mc_eid: ['mailchimp', 'email'], mc_cid: ['mailchimp', 'email']
      };
      var apps = {
        'com.google.android.gm': ['gmail', 'email'],
        'com.google.android.googlequicksearchbox': ['google', 'organic'],
        'com.twitter.android': ['x', 'social'], 'com.facebook.katana': ['facebook', 'social'],
        'com.facebook.lite': ['facebook', 'social'], 'com.facebook.orca': ['messenger', 'social'],
        'com.instagram.android': ['instagram', 'social'], 'com.reddit.frontpage': ['reddit', 'social'],
        'com.linkedin.android': ['linkedin', 'social'], 'com.whatsapp': ['whatsapp', 'social'],
        'org.telegram.messenger': ['telegram', 'social'], 'com.pinterest': ['pinterest', 'social'],
        'com.slack': ['slack', 'social'], 'com.discord': ['discord', 'social']
      };
      var hit = null;
      for (key in clickIds) { if (!hit && params.has(key)) hit = clickIds[key]; }
      if (!hit && ref && ref.protocol === 'android-app:') hit = apps[ref.hostname] || null;
      if (hit) {
        config.campaign_source = hit[0];
        config.campaign_medium = hit[1];
        config.campaign_name = '(untagged)';
      }
    }

    // ---- What we know about this browser ---------------------------------
    var first = null;
    try { first = JSON.parse(store('ppm-ga-first') || 'null'); } catch (e) {}
    if (!first) {
      first = {
        host: refHost,
        source: params.get('utm_source') || config.campaign_source || '',
        landing: location.pathname.slice(0, 100),
        date: new Date().toISOString().slice(0, 10)
      };
      store('ppm-ga-first', JSON.stringify(first));
    }
    var visits = parseInt(store('ppm-ga-visits'), 10) || 0;
    try {
      if (!sessionStorage.getItem('ppm-ga-counted')) {
        sessionStorage.setItem('ppm-ga-counted', '1');
        visits += 1;
        store('ppm-ga-visits', String(visits));
      }
    } catch (e) {}
    userProps.visitor_type = visits > 1 ? 'returning' : 'new';
    userProps.visit_count = Math.min(visits, 50);
    userProps.first_referrer_host = String(first.host).slice(0, 36);
    userProps.first_landing_page = String(first.landing).slice(0, 36);
    userProps.first_visit_date = first.date;
    if (first.source) userProps.first_source = String(first.source).slice(0, 36);
    userProps.color_theme = store('ppm-theme') === 'light' ? 'light' : 'dark';
    userProps.viewport_size = window.innerWidth < 600 ? 'phone' : window.innerWidth < 1024 ? 'tablet' : 'desktop';
    gtag('set', 'user_properties', userProps);

<?php if (!empty($ppm_ga_not_found)): ?>
    var title = '404: ' + location.pathname + location.search;
    if (ref) title += ' (from ' + (ref.hostname || ref.protocol) + ')';
    config.page_title = title;
<?php endif; ?>
    gtag('config', 'G-PJTW8FGPV8', config);

    // ---- Events ----------------------------------------------------------
    function send(name, extra) {
      var p = {};
      if (ctx.content_id) p.content_id = ctx.content_id;
      for (var k in extra) p[k] = extra[k];
      gtag('event', name, p);
    }

    if (ctx.search_term) send('search', { search_term: ctx.search_term });
    if (params.get('signup') === 'success') send('generate_lead', { method: 'newsletter', form_location: params.get('form') || 'unknown' });

    // How far down an article people read, and whether they actually read it.
    // (This script runs in the page head, so wait for the article to exist.)
    function trackReading() {
      var article = ctx.kind === 'Article' ? document.querySelector('.ppm-article-inner') : null;
      if (!article) return;
      var marks = [25, 50, 75, 100], sentMarks = {}, visibleSeconds = 0, readSent = false, ticking = false, deepest = 0;
      var progress = function () {
        var box = article.getBoundingClientRect();
        if (!box.height) return 0;
        return Math.max(0, Math.min(100, (window.innerHeight - box.top) / box.height * 100));
      };
      var check = function () {
        ticking = false;
        deepest = Math.max(deepest, progress());
        marks.forEach(function (m) {
          if (!sentMarks[m] && deepest >= (m === 100 ? 97 : m)) {
            sentMarks[m] = true;
            send('scroll_depth', { percent_scrolled: m, seconds_on_page: visibleSeconds });
          }
        });
        if (!readSent && deepest >= 75 && visibleSeconds >= 30) {
          readSent = true;
          send('article_read', { seconds_on_page: visibleSeconds });
        }
      };
      window.addEventListener('scroll', function () {
        if (!ticking) { ticking = true; requestAnimationFrame(check); }
      }, { passive: true });
      setInterval(function () {
        if (document.visibilityState === 'visible') { visibleSeconds += 1; if (!readSent && visibleSeconds >= 30) check(); }
      }, 1000);
      check();
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', trackReading);
    else trackReading();

    // What people click: related posts, topics, menus, footer, post links.
    document.addEventListener('click', function (event) {
      var link = event.target.closest && event.target.closest('a[href]');
      if (!link) return;
      var type = null;
      if (link.closest('.ppm-related-posts')) type = 'related_post';
      else if (link.closest('.ppm-article-tags, .ppm-topic-list') || /article-tag/.test(link.getAttribute('href'))) type = 'topic';
      else if (link.closest('footer')) type = 'footer';
      else if (link.closest('nav, .ppm-drawer')) type = 'menu';
      else if (/^\/articles\/[^/?#]+/.test(link.getAttribute('href'))) type = 'post_link';
      else if (link.closest('.ppm-article-byline')) type = 'byline';
      if (!type) return;
      send('select_content', {
        content_type: type,
        item_id: (link.getAttribute('href') || '').slice(0, 100),
        link_text: (link.textContent || '').trim().replace(/\s+/g, ' ').slice(0, 80)
      });
    });
    document.addEventListener('click', function (event) {
      if (!(event.target.closest && event.target.closest('.ppm-theme-toggle'))) return;
      setTimeout(function () {
        send('theme_change', { theme: document.documentElement.getAttribute('data-theme') === 'light' ? 'light' : 'dark' });
      }, 0);
    });

    // Problems visitors run into: script errors and images that failed.
    var problems = 0;
    window.addEventListener('error', function (event) {
      if (problems >= 5) return;
      problems += 1;
      var target = event.target;
      if (target && target !== window && target.nodeType === 1) {
        if (target.tagName === 'IMG') send('image_error', { image_url: String(target.currentSrc || target.src || '').slice(-100) });
      } else {
        send('js_error', {
          error_message: String(event.message || '').slice(0, 100),
          error_source: String(event.filename || '').slice(-80) + ':' + (event.lineno || 0)
        });
      }
    }, true);

    // Loading performance, sent once when the visitor leaves the page.
    var lcp = 0, cls = 0, vitalsSent = false;
    try {
      new PerformanceObserver(function (list) {
        var entries = list.getEntries();
        if (entries.length) lcp = entries[entries.length - 1].startTime;
      }).observe({ type: 'largest-contentful-paint', buffered: true });
      new PerformanceObserver(function (list) {
        list.getEntries().forEach(function (entry) { if (!entry.hadRecentInput) cls += entry.value; });
      }).observe({ type: 'layout-shift', buffered: true });
    } catch (e) {}
    document.addEventListener('visibilitychange', function () {
      if (document.visibilityState !== 'hidden' || vitalsSent || !lcp) return;
      vitalsSent = true;
      var nav = performance.getEntriesByType && performance.getEntriesByType('navigation')[0];
      send('web_vitals', {
        lcp_ms: Math.round(lcp),
        cls_x1000: Math.round(cls * 1000),
        ttfb_ms: nav ? Math.round(nav.responseStart) : undefined,
        transport_type: 'beacon'
      });
    });
  })();
</script>
<?php
// Custom dimensions to register in GA (Admin > Custom definitions), scope in
// brackets. Without this step the data is collected but not shown in reports.
//   Event:  content_id, article_author, article_type,
//           article_tags, article_published, article_has_image,
//           referrer_host, percent_scrolled, content_type, item_id,
//           link_text, theme, image_url, error_message, error_source
//   User:   visitor_type, first_referrer_host, first_landing_page,
//           first_source, color_theme, viewport_size
//   Metric (event): lcp_ms, cls_x1000, ttfb_ms, seconds_on_page,
//           visit_count (user)
