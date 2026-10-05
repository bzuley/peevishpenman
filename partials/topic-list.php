<?php
// Row of chips linking to every topic (tag) landing page. Set
// $ppm_topic_current to a tag key to mark that topic as the current page.
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
$ppm_topic_current = $ppm_topic_current ?? '';
?>
<nav class="ppm-topic-list" aria-label="Topics">
  <ul class="bp-tags">
    <?php foreach (ppm_get_tags() as $ppm_topic_tag => $ppm_topic_info): ?>
      <li class="bp-tag<?php echo $ppm_topic_tag === $ppm_topic_current ? ' bp-tag--current' : ''; ?>">
        <a href="<?php echo htmlspecialchars(ppm_tag_url($ppm_topic_tag)); ?>"<?php echo $ppm_topic_tag === $ppm_topic_current ? ' aria-current="page"' : ''; ?>><?php echo htmlspecialchars($ppm_topic_info['label']); ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>
