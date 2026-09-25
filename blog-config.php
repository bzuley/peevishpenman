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