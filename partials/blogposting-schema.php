<?php
// Emits BlogPosting JSON-LD for search rich results.
// Expects $post_meta (see blog-slug.php for the shape) to already be set.
$schema_url = 'https://peevishpenman.com/blogs/' . rawurlencode($post_meta['slug']);
$schema_image = $post_meta['image'];
if ($schema_image !== '' && strpos($schema_image, 'http') !== 0) {
  $schema_image = 'https://peevishpenman.com' . $schema_image;
}
?>
<script type="application/ld+json">
<?php echo json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'BlogPosting',
  'headline' => $post_meta['title'],
  'description' => $post_meta['excerpt'],
  'image' => $schema_image,
  'datePublished' => $post_meta['date'],
  'dateModified' => $post_meta['added'] ?? $post_meta['date'],
  'author' => ['@type' => 'Person', 'name' => 'OA Allen'],
  'publisher' => ['@type' => 'Organization', 'name' => 'Peevish Penman'],
  'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $schema_url],
], JSON_UNESCAPED_SLASHES); ?>
</script>
