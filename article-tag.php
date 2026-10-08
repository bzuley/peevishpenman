<?php
require_once __DIR__ . '/blog-config.php';

$tag = isset($_GET['tag']) ? trim($_GET['tag']) : '';
$blog_items = $tag !== '' ? ppm_get_posts_by_tag($tag) : [];

$tag_key = strtolower($tag);
$tag_info = ppm_get_tags()[$tag_key] ?? null;
$tag_label = ppm_tag_label($tag);
$tag_intro = $tag_info['intro'] ?? '';

// Only tags in ppm_get_tags() have a landing page. Anything else (a typo,
// a made-up tag, or no tag at all) answers 404 with noindex, so search
// engines don't index empty or thin tag pages, and offers the real topics.
if ($tag_info === null):
  http_response_code(404);
  header('X-Robots-Tag: noindex');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Topic Not Found – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, follow">

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
      <h1 class="bp-title">Topic Not Found</h1>
      <p class="bp-desc">
        <?php if ($tag !== ''): ?>There's no topic page for &ldquo;<?php echo htmlspecialchars($tag); ?>.&rdquo;<?php endif; ?>
        Browse <a href="/articles">all articles</a> or pick a topic:
      </p>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/topic-list.php'; ?>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
<?php
  exit;
endif;
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

    <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/search-form.php'; ?>

    <div class="blog-container">

      <?php if (empty($blog_items)): ?>
        <p style="color:#B8C9C6; max-width:40rem; margin:2rem auto; text-align:center;">
          No posts tagged &ldquo;<?php echo htmlspecialchars($tag_label); ?>&rdquo; yet. Check back soon!
        </p>
      <?php else: ?>
        <ul>
          <?php foreach ($blog_items as $post): ?>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/post-card.php'; ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
