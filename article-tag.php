<?php
require_once __DIR__ . '/blog-config.php';

$tag = isset($_GET['tag']) ? trim($_GET['tag']) : '';
$blog_items = $tag !== '' ? ppm_get_posts_by_tag($tag) : [];

$tag_key = strtolower($tag);
$tag_info = ppm_get_tags()[$tag_key] ?? null;
$tag_label = ppm_tag_label($tag);
$tag_intro = $tag_info['intro'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($tag_label); ?> Posts – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($tag_label); ?> posts from OA Allen at Peevish Penman.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/article-tag?tag=<?php echo urlencode($tag); ?>">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="<?php echo htmlspecialchars($tag_label); ?> Posts – Peevish Penman">
  <meta property="og:description" content="<?php echo htmlspecialchars($tag_label); ?> posts from OA Allen at Peevish Penman.">
  <meta property="og:url" content="https://peevishpenman.com/article-tag?tag=<?php echo urlencode($tag); ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Peevish Penman — OA Allen, metaphysical science fiction">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($tag_label); ?> Posts – Peevish Penman">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($tag_label); ?> posts from OA Allen at Peevish Penman.">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta name="twitter:image:alt" content="Peevish Penman — OA Allen, metaphysical science fiction">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<section class="ppm-blog-preview">
  <div class="blog-preview">
    <div class="bp-head">
      <h1 class="bp-title"><?php echo htmlspecialchars($tag_label); ?> Posts</h1>
      <?php if ($tag_intro !== ''): ?>
        <p class="bp-desc"><?php echo htmlspecialchars($tag_intro); ?></p>
      <?php endif; ?>
    </div>

    <div class="blog-container">

      <?php if (empty($blog_items)): ?>
        <p style="color:#B8C9C6; max-width:40rem; margin:2rem auto; text-align:center;">
          No posts tagged &ldquo;<?php echo htmlspecialchars($tag_label); ?>&rdquo; yet. Check back soon!
        </p>
      <?php else: ?>
        <ul>
          <?php foreach ($blog_items as $post): ?>
            <li class="blog-card">
              <a href="/articles/<?php echo htmlspecialchars($post['slug']); ?>">
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

                <?php if (!empty($post['tags'])): ?>
                  <ul class="bp-tags">
                    <?php foreach ($post['tags'] as $post_tag): ?>
                      <li class="bp-tag"><?php echo htmlspecialchars($post_tag); ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
