<?php
require_once __DIR__ . '/../blog-config.php';

$ppm_blog_heading    = '';
$ppm_blog_subheading = '';
// Six fills whole rows at both the two- and three-column widths.
$ppm_post_limit      = 6;
$ppm_show_excerpt    = true;
$ppm_excerpt_len     = 100;

$blog_items = ppm_get_blog_posts();

// When the page has a featured post (see index.php), lead the list with it.
// Its card is hidden on desktop, where the featured block above shows it,
// so one extra card is rendered to keep the desktop grid full; that extra
// card (.blog-card--overflow) is hidden instead wherever the featured card
// shows, so every width gets the same, even number of cards.
$ppm_featured_slug = isset($ppm_featured_post) ? $ppm_featured_post['slug'] : null;
$ppm_overflow_slug = null;
if ($ppm_featured_slug !== null) {
    $blog_items = array_values(array_filter($blog_items, function ($post) use ($ppm_featured_slug) {
        return $post['slug'] !== $ppm_featured_slug;
    }));
    $blog_items = array_slice($blog_items, 0, $ppm_post_limit);
    if (count($blog_items) === $ppm_post_limit) {
        $ppm_overflow_slug = $blog_items[$ppm_post_limit - 1]['slug'];
    }
    array_unshift($blog_items, $ppm_featured_post);
} else {
    $blog_items = array_slice($blog_items, 0, $ppm_post_limit);
}
?>

<section class="ppm-blog-preview">
  <div class="blog-preview">
    <?php if (!empty($ppm_blog_heading) || !empty($ppm_blog_subheading)) : ?>
      <div class="bp-head">
        <?php if (!empty($ppm_blog_heading)) : ?>
          <h2 class="bp-title"><?= htmlspecialchars($ppm_blog_heading) ?></h2>
        <?php endif; ?>
        <?php if (!empty($ppm_blog_subheading)) : ?>
          <p class="bp-desc"><?= htmlspecialchars($ppm_blog_subheading) ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($blog_items)) : ?>
      <div class="blog-container">
        <ul>
          <?php foreach ($blog_items as $post) : ?>
            <li class="blog-card<?= $post['slug'] === $ppm_featured_slug ? ' blog-card--featured' : '' ?><?= $post['slug'] === $ppm_overflow_slug ? ' blog-card--overflow' : '' ?>">
              <a class="blog-card-link" href="/articles/<?= htmlspecialchars($post['slug']) ?>">
                <?php if (!empty($post['image'])) : ?>
                  <img class="bp-img"
                       src="<?= htmlspecialchars($post['image']) ?>"
                       alt="<?= htmlspecialchars($post['title']) ?>"
                       loading="lazy">
                <?php endif; ?>
                <h2><?= htmlspecialchars($post['title']) ?></h2>
                <?php if ($ppm_show_excerpt && !empty($post['excerpt'])) : ?>
                  <p><?= htmlspecialchars(ppm_truncate($post['excerpt'], $ppm_excerpt_len)) ?></p>
                <?php endif; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</section>