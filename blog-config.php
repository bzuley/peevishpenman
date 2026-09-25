<?php
/**
 * Blog Configuration & Post Loader
 */

// Scheduled posts go live at midnight in this timezone on their 'added'
// date (or 'date', when 'added' isn't set).
const PPM_PUBLISH_TIMEZONE = 'America/New_York';

/**
 * Whether a post's publish date has arrived. Posts with a missing or
 * unreadable date are treated as unpublished, so a typo never leaks a
 * draft early.
 */
function ppm_is_published($meta) {
    $publish = $meta['added'] ?? $meta['date'] ?? '';
    $tz = new DateTimeZone(PPM_PUBLISH_TIMEZONE);
    $day = DateTimeImmutable::createFromFormat('!Y-m-d', $publish, $tz);
    if ($day === false || $day->format('Y-m-d') !== $publish) {
        return false;
    }
    return $day <= new DateTimeImmutable('now', $tz);
}

/**
 * Called from a post file right after $post_meta: if the post is scheduled
 * for later, answer 404 so its direct URL stays hidden until then.
 */
function ppm_require_published($meta) {
    if (ppm_is_published($meta)) {
        return;
    }
    http_response_code(404);
    header('X-Robots-Tag: noindex');
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Not Found – Peevish Penman</title>'
        . '<meta name="robots" content="noindex"><link rel="stylesheet" href="/styles/main.css">'
        . '<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">'
        . '<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">'
        . '<link rel="apple-touch-icon" href="/apple-touch-icon.png"></head>'
        . '<body><main class="ppm-article"><article class="ppm-article-inner">'
        . '<h1>Not Found</h1><p><a href="/blog">Back to the blog</a></p></article></main></body></html>';
    exit;
}

/**
 * Extract the value of a single-quoted PHP array entry like
 * 'key' => 'some value', correctly handling escaped quotes and
 * backslashes inside the value (e.g. 'Pearson\'s').
 */
function ppm_extract_quoted_field($array_string, $key) {
    $pattern = "/'" . preg_quote($key, '/') . "'\s*=>\s*'((?:[^'\\\\]|\\\\.)*)'/";
    if (!preg_match($pattern, $array_string, $m)) {
        return null;
    }
    return preg_replace_callback('/\\\\(.)/', function ($esc) {
        return ($esc[1] === "'" || $esc[1] === '\\') ? $esc[1] : $esc[0];
    }, $m[1]);
}

function ppm_get_blog_posts() {
    $candidate_dirs = [
        $_SERVER['DOCUMENT_ROOT'] . '/blogs',
        __DIR__ . '/blogs',
    ];

    $posts = [];

    foreach ($candidate_dirs as $dir) {
        if (is_dir($dir)) {
            $matches = glob($dir . '/*.php');
            if (!empty($matches)) {
                $posts = $matches;
                break;
            }
        }
    }

    $blog_items = [];

    if (!empty($posts)) {
        foreach ($posts as $post_file) {
            $file_contents = file_get_contents($post_file);
            
            if (preg_match('/\$post_meta\s*=\s*\[(.*?)\];/s', $file_contents, $matches)) {
                $array_string = $matches[1];
                
                $meta = [];

                foreach (['slug', 'title', 'excerpt', 'date', 'image'] as $field) {
                    $value = ppm_extract_quoted_field($array_string, $field);
                    if ($value !== null) {
                        $meta[$field] = $value;
                    }
                }

                $tags = ppm_extract_quoted_field($array_string, 'tags');
                $meta['tags'] = $tags !== null
                    ? array_filter(array_map('trim', explode(',', $tags)))
                    : [];

                // 'added' is when the post was added to the site, used to
                // decide display order/recency. It defaults to 'date' (the
                // post's own editorial date) for posts that don't set it.
                $added = ppm_extract_quoted_field($array_string, 'added');
                if ($added !== null) {
                    $meta['added'] = $added;
                } elseif (!empty($meta['date'])) {
                    $meta['added'] = $meta['date'];
                }

                if (!empty($meta['slug']) && !empty($meta['title']) && !empty($meta['date'])
                    && ppm_is_published($meta)) {
                    $blog_items[] = $meta;
                }
            }
        }

        usort($blog_items, function($a, $b) {
            return strtotime($b['added']) <=> strtotime($a['added']);
        });
    }

    return $blog_items;
}

/**
 * Return only the posts tagged with the given tag (case-insensitive).
 */
function ppm_get_posts_by_tag($tag) {
    $tag = strtolower(trim($tag));
    return array_values(array_filter(ppm_get_blog_posts(), function($post) use ($tag) {
        foreach ($post['tags'] as $post_tag) {
            if (strtolower($post_tag) === $tag) {
                return true;
            }
        }
        return false;
    }));
}

// Per-day view counts for posts, kept server-side so the homepage can
// feature the most-read post. Lives under partials/data/, which
// .htaccess blocks from direct access.
const PPM_VIEWS_FILE = __DIR__ . '/partials/data/post-views.json';
const PPM_POPULAR_WINDOW_DAYS = 30;

/**
 * Count one view of a post. Skips non-GET requests and obvious bots so
 * crawlers don't decide what's "popular". Never lets a storage problem
 * break the page.
 */
function ppm_record_view($slug) {
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'GET' || $slug === '') {
        return;
    }
    $agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    if ($agent === '' || preg_match('/bot|crawl|spider|slurp|preview|fetch|curl|wget|python|headless/i', $agent)) {
        return;
    }

    $dir = dirname(PPM_VIEWS_FILE);
    if (!is_dir($dir) && !@mkdir($dir, 0755, true)) {
        return;
    }
    $fh = @fopen(PPM_VIEWS_FILE, 'c+');
    if ($fh === false) {
        return;
    }
    if (flock($fh, LOCK_EX)) {
        $views = json_decode(stream_get_contents($fh), true);
        if (!is_array($views)) {
            $views = [];
        }

        $tz = new DateTimeZone(PPM_PUBLISH_TIMEZONE);
        $today = (new DateTimeImmutable('now', $tz))->format('Y-m-d');
        $views[$today][$slug] = ($views[$today][$slug] ?? 0) + 1;

        // Drop days that have aged out of the popularity window.
        $cutoff = (new DateTimeImmutable('now', $tz))
            ->modify('-' . PPM_POPULAR_WINDOW_DAYS . ' days')->format('Y-m-d');
        foreach (array_keys($views) as $day) {
            if ($day < $cutoff) {
                unset($views[$day]);
            }
        }

        ftruncate($fh, 0);
        rewind($fh);
        fwrite($fh, json_encode($views));
        fflush($fh);
        flock($fh, LOCK_UN);
    }
    fclose($fh);
}

/**
 * Total views per slug over the last PPM_POPULAR_WINDOW_DAYS days.
 */
function ppm_get_recent_views() {
    if (!is_readable(PPM_VIEWS_FILE)) {
        return [];
    }
    $views = json_decode((string) @file_get_contents(PPM_VIEWS_FILE), true);
    if (!is_array($views)) {
        return [];
    }

    $cutoff = (new DateTimeImmutable('now', new DateTimeZone(PPM_PUBLISH_TIMEZONE)))
        ->modify('-' . PPM_POPULAR_WINDOW_DAYS . ' days')->format('Y-m-d');
    $totals = [];
    foreach ($views as $day => $counts) {
        if ($day < $cutoff || !is_array($counts)) {
            continue;
        }
        foreach ($counts as $slug => $count) {
            $totals[$slug] = ($totals[$slug] ?? 0) + (int) $count;
        }
    }
    return $totals;
}

/**
 * The most-viewed published post of the last 30 days. Ties (and a site
 * with no view data yet) go to the newest post, since $posts arrives
 * newest-first.
 */
function ppm_get_featured_post($posts) {
    if (empty($posts)) {
        return null;
    }
    $views = ppm_get_recent_views();
    $featured = $posts[0];
    $best = $views[$featured['slug']] ?? 0;
    foreach ($posts as $post) {
        $count = $views[$post['slug']] ?? 0;
        if ($count > $best) {
            $featured = $post;
            $best = $count;
        }
    }
    return $featured;
}
