<?php
// One article card in a listing grid (/articles, tag pages, search).
// Expects $post as returned by ppm_get_blog_posts(). The tag chips sit
// outside the card's main link so each can link to its own topic page.
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
$ppm_card_tags = ppm_landing_tags($post['tags'] ?? []);
?>
<li class="blog-card">
  <a class="blog-card-link" href="/articles/<?php echo htmlspecialchars($post['slug']); ?>">
    <?php if (!empty($post['image'])): ?>
      <img class="bp-img"
           src="<?php echo htmlspecialchars($post['image']); ?>"
           alt="<?php echo htmlspecialchars($post['title']); ?>"
           loading="lazy">
    <?php endif; ?>

    <h2><?php echo htmlspecialchars($post['title']); ?></h2>

    <?php if (!empty($post['excerpt'])): ?>
      <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
    <?php endif; ?>
  </a>

  <?php if (!empty($ppm_card_tags)): ?>
    <ul class="bp-tags" aria-label="Topics">
      <?php foreach ($ppm_card_tags as $ppm_card_tag): ?>
        <li class="bp-tag"><a href="<?php echo htmlspecialchars(ppm_tag_url($ppm_card_tag)); ?>"><?php echo htmlspecialchars(ppm_tag_label($ppm_card_tag)); ?></a></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</li>
