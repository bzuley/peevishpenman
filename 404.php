<?php
// Site-wide "page not found" page. Apache serves it for any missing URL
// (ErrorDocument in .htaccess), and ppm_require_published() includes it
// for articles that aren't live yet. Always answers 404 with noindex.
require_once __DIR__ . '/blog-config.php';

http_response_code(404);
header('X-Robots-Tag: noindex');

$ppm_404_recent = array_slice(ppm_get_blog_posts(), 0, 3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Page Not Found &ndash; Peevish Penman</title>
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

<main class="ppm-404">
  <section class="blog-preview">
    <img class="ppm-404-art ppm-fade-mask"
         src="/img/404.webp"
         alt="404, page not found: a woman gazes out a spaceship window at a distant Earth"
         width="900" height="900">

    <div class="bp-head">
      <h1 class="bp-title">Lost in the Dark</h1>
      <p class="bp-desc">
        The page you were looking for isn&rsquo;t here. It may have moved,
        or the link may be mistyped. Try a search, pick a topic, or head
        back to <a href="/">the homepage</a>.
      </p>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/search-form.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/topic-list.php'; ?>

    <?php if (!empty($ppm_404_recent)): ?>
      <h2 class="bp-title ppm-404-subhead">Latest Articles</h2>
      <div class="blog-container">
        <ul>
          <?php foreach ($ppm_404_recent as $post): ?>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/post-card.php'; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
