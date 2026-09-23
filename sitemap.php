<?php
/**
 * Generate the sitemap from the same post metadata used by the blog.
 */
require_once __DIR__ . '/blog-config.php';

$base_url = 'https://peevishpenman.com';

// Keep the existing sitemap's page and tag landing URLs.
$paths = [
    '/',
    '/pages/writer-secret-society',
    '/pages/delcath-series',
    '/pages/bright-dark',
    '/pages/ghost-trucker',
    '/pages/books',
    '/pages/coloring-book',
    '/blog',
    '/blog-tag?tag=sciencefiction',
    '/blog-tag?tag=selfpublishing',
    '/blog-tag?tag=archetypes',
    '/pages/about',
    '/pages/newsletter',
];

foreach (ppm_get_blog_posts() as $post) {
    $paths[] = '/blogs/' . rawurlencode($post['slug']);
}

// Publication dates and deployment mtimes are not reliable modification dates,
// so omit the optional lastmod field until editorial update dates are available.
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach (array_unique($paths) as $path) {
    $location = htmlspecialchars($base_url . $path, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    echo '  <url><loc>' . $location . '</loc></url>' . "\n";
}
echo '</urlset>' . "\n";
