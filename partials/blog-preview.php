<?php
require_once __DIR__ . '/../blog-config.php';

$ppm_blog_heading    = '';
$ppm_blog_subheading = '';
$ppm_post_limit      = 8;
$ppm_show_excerpt    = true;
$ppm_excerpt_len     = 100;

$blog_items = ppm_get_blog_posts();

// When the page has a featured post (see index.php), lead the list with it.
// Its card is hidden on desktop, where the featured block above shows it.
$ppm_featured_slug = isset($ppm_featured_post) ? $ppm_featured_post['slug'] : null;
if ($ppm_featured_slug !== null) {
    $blog_items = array_values(array_filter($blog_items, function ($post) use ($ppm_featured_slug) {
        return $post['slug'] !== $ppm_featured_slug;
    }));
    array_unshift($blog_items, $ppm_featured_post);
}

$blog_items = array_slice($blog_items, 0, $ppm_post_limit);

function ppm_truncate($text, $limit) {
    $text = strip_tags($text);
    if (mb_strlen($text) <= $limit) return $text;
    return mb_substr($text, 0, $limit - 1) . '…';
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
            <li class="blog-card<?= $post['slug'] === $ppm_featured_slug ? ' blog-card--featured' : '' ?>">
              <a href="/blogs/<?= htmlspecialchars($post['slug']) ?>">
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