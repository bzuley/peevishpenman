<?php
// Row of links to every topic (tag) landing page.
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
?>
<nav class="ppm-topic-list" aria-label="Topics">
  <ul class="bp-tags">
    <?php foreach (ppm_get_tags() as $ppm_topic_tag => $ppm_topic_info): ?>
      <li class="bp-tag">
        <a href="<?php echo htmlspecialchars(ppm_tag_url($ppm_topic_tag)); ?>"><?php echo htmlspecialchars($ppm_topic_info['label']); ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>
