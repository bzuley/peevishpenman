<?php
// Include from an archetype profile whose $post_meta sets 'archetype',
// e.g. 'archetype' => 'Everyman'. That field also lists the post in the
// "In the series" links below the wheel on every other profile.
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
$archetype_name   = $post_meta['archetype'];
$archetype_series = ppm_get_archetype_posts();
?>
<figure class="ppm-archetype-wheel">
  <img
    src="/img/archetypes/archetype_wheel.png"
    alt="A wheel diagram showing all twelve character archetypes arranged in a circle"
    loading="lazy"
  >
  <figcaption>
    The <?php echo htmlspecialchars($archetype_name); ?> is one of twelve character archetypes on the wheel.
    <a href="/article-tag?tag=authorship">Explore more on authorship</a>.
  </figcaption>
</figure>
<?php if (count($archetype_series) > 1): ?>
<nav class="ppm-archetype-series" aria-label="Character Archetypes series">
  <p class="ppm-archetype-series-label">In the series</p>
  <ul>
    <?php foreach ($archetype_series as $entry): ?>
      <li>
        <?php if ($entry['slug'] === $post_meta['slug']): ?>
          <span aria-current="page">The <?php echo htmlspecialchars($entry['archetype']); ?></span>
        <?php else: ?>
          <a href="/articles/<?php echo htmlspecialchars($entry['slug']); ?>">The <?php echo htmlspecialchars($entry['archetype']); ?></a>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>
<?php endif; ?>
