<?php
// Topic links shown under an article's title. Expects $post_meta (see
// article-slug.php for the shape); only tags with a landing page are shown.
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
$ppm_title_tags = ppm_landing_tags($post_meta['tags'] ?? '');
?>
<?php if (!empty($ppm_title_tags)): ?>
  <nav class="ppm-article-tags ppm-article-tags--title" aria-label="Article topics">
    <ul>
      <?php foreach ($ppm_title_tags as $ppm_title_tag): ?>
        <li><a href="<?php echo htmlspecialchars(ppm_tag_url($ppm_title_tag)); ?>"><?php echo htmlspecialchars(ppm_tag_label($ppm_title_tag)); ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
<?php endif; ?>
