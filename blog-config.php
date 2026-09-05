<?php
/**
 * Blog Configuration & Post Loader
 */

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

                if (!empty($meta['slug']) && !empty($meta['title']) && !empty($meta['date'])) {
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