<?php
// Search and social metadata shared by every article: extra meta tags
// plus BlogPosting and BreadcrumbList JSON-LD for Google rich results.
// Expects $post_meta (see article-slug.php for the shape) to already be set,
// and is included inside <head> after the post's own title/OG/Twitter tags.
// Every post includes this partial, so it also counts the view that
// picks the homepage's featured post.
require_once __DIR__ . '/../blog-config.php';
ppm_record_view($post_meta['slug']);

$schema_site = 'https://peevishpenman.com';
$schema_url = $schema_site . '/articles/' . rawurlencode($post_meta['slug']);
// Posts without a hero image fall back to the site-wide share image.
$schema_image = ($post_meta['image'] ?? '') ?: '/img/peevish-penman-social-share-1200x630.png';
if (strpos($schema_image, 'http') !== 0) {
  $schema_image = $schema_site . $schema_image;
}
$schema_author_name = $post_meta['author'] ?? 'OA Allen';
$schema_author = ['@type' => 'Person', 'name' => $schema_author_name];
if ($schema_author_name === 'OA Allen') {
  $schema_author['url'] = $schema_site . '/pages/about';
}

// Full ISO 8601 timestamps (midnight in the site's publishing timezone),
// so Google doesn't have to guess the timezone of a bare date.
$schema_timestamp = function ($ymd) {
  $day = DateTimeImmutable::createFromFormat('!Y-m-d', (string) $ymd, new DateTimeZone(PPM_PUBLISH_TIMEZONE));
  return $day ? $day->format(DATE_ATOM) : $ymd;
};
$schema_published = $schema_timestamp($post_meta['date']);
$schema_modified = $schema_timestamp($post_meta['added'] ?? $post_meta['date']);
?>
<!-- Search appearance: allow large image thumbnails and full-length snippets -->
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:locale" content="en_US">
  <meta property="article:published_time" content="<?php echo htmlspecialchars($schema_published); ?>">
  <meta property="article:modified_time" content="<?php echo htmlspecialchars($schema_modified); ?>">
<?php if (isset($schema_author['url'])): ?>
  <meta property="article:author" content="<?php echo htmlspecialchars($schema_author['url']); ?>">
<?php endif; ?>
<?php foreach (ppm_normalize_tags($post_meta['tags'] ?? '') as $schema_tag): ?>
  <meta property="article:tag" content="<?php echo htmlspecialchars($schema_tag); ?>">
<?php endforeach; ?>
<script type="application/ld+json">
<?php echo json_encode([
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'BlogPosting',
      '@id' => $schema_url . '#article',
      'headline' => $post_meta['title'],
      'description' => $post_meta['excerpt'],
      'image' => [$schema_image],
      'datePublished' => $schema_published,
      'dateModified' => $schema_modified,
      'author' => $schema_author,
      'publisher' => [
        '@type' => 'Organization',
        'name' => 'Peevish Penman',
        'url' => $schema_site . '/',
      ],
      'url' => $schema_url,
      'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $schema_url],
      'isPartOf' => ['@type' => 'Blog', 'name' => 'Peevish Penman Articles', 'url' => $schema_site . '/articles'],
      'inLanguage' => 'en-US',
    ],
    [
      '@type' => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $schema_site . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Articles', 'item' => $schema_site . '/articles'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $post_meta['title'], 'item' => $schema_url],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_PRETTY_PRINT); ?>
</script>
