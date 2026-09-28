<?php
// "Keep Reading" strip shown near the end of an article. Expects
// $post_meta (see blog-slug.php for the shape) to already be set.
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
$ppm_related_posts = ppm_get_related_posts($post_meta, 3);
?>
<?php if (!empty($ppm_related_posts)): ?>
<aside class="ppm-related-posts" aria-label="Related posts">
  <h2 class="ppm-related-heading">Keep Reading</h2>
  <ul class="ppm-related-list">
    <?php foreach ($ppm_related_posts as $related): ?>
      <li class="ppm-related-item">
        <a href="/blogs/<?php echo htmlspecialchars($related['slug']); ?>">
          <?php if (!empty($related['image'])): ?>
            <img src="<?php echo htmlspecialchars($related['image']); ?>"
                 alt="<?php echo htmlspecialchars($related['title']); ?>"
                 width="96" height="96" loading="lazy">
          <?php endif; ?>
          <span class="ppm-related-item-text">
            <span class="ppm-related-item-title"><?php echo htmlspecialchars($related['title']); ?></span>
            <?php if (!empty($related['excerpt'])): ?>
              <span class="ppm-related-item-excerpt"><?php echo htmlspecialchars(ppm_truncate($related['excerpt'], 90)); ?></span>
            <?php endif; ?>
          </span>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</aside>
<?php endif; ?>
