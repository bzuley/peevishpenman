<?php
/**
 * Blog Configuration & Post Loader
 */

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
                
                if (preg_match("/'slug'\s*=>\s*'([^']+)'/", $array_string, $m)) {
                    $meta['slug'] = $m[1];
                }
                if (preg_match("/'title'\s*=>\s*'([^']+)'/", $array_string, $m)) {
                    $meta['title'] = $m[1];
                }
                if (preg_match("/'excerpt'\s*=>\s*'([^']+)'/", $array_string, $m)) {
                    $meta['excerpt'] = $m[1];
                }
                if (preg_match("/'date'\s*=>\s*'([^']+)'/", $array_string, $m)) {
                    $meta['date'] = $m[1];
                }
                if (preg_match("/'image'\s*=>\s*'([^']+)'/", $array_string, $m)) {
                    $meta['image'] = $m[1];
                }
                
                if (!empty($meta['slug']) && !empty($meta['title']) && !empty($meta['date'])) {
                    $blog_items[] = $meta;
                }
            }
        }

        usort($blog_items, function($a, $b) {
            return strtotime($b['date']) <=> strtotime($a['date']);
        });
    }

    return $blog_items;
}