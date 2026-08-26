<?php
require_once __DIR__ . '/../blog-config.php';

$ppm_blog_heading    = '';
$ppm_blog_subheading = '';
$ppm_post_limit      = 3;
$ppm_show_excerpt    = true;
$ppm_excerpt_len     = 100;

$blog_items = ppm_get_blog_posts();
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

    <?php if (empty($blog_items)) : ?>
      <p style="text-align:center;color:#B8C9C6;font-family:'IBM Plex Sans',system-ui,sans-serif;">
        Blog posts coming soon.
      </p>
    <?php else : ?>
      <div class="blog-container">
        <ul>
          <?php foreach ($blog_items as $post) : ?>
            <li class="blog-card">
              <a href="/blogs/<?= htmlspecialchars($post['slug']) ?>.php">
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