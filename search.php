<?php
require_once __DIR__ . '/blog-config.php';

$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = $query !== '' ? ppm_search_posts($query) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title><?php echo $query !== '' ? 'Search: ' . htmlspecialchars($query) : 'Search'; ?> &ndash; Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Search Peevish Penman for posts by OA Allen.">
  <meta name="author" content="OA Allen">
  <meta name="robots" content="noindex">

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
      <h1 class="bp-title">Search</h1>
    </div>

    <?php
    $ppm_search_query = $query;
    $ppm_search_autofocus = true;
    include $_SERVER['DOCUMENT_ROOT'].'/partials/search-form.php';
    ?>

    <div class="blog-container">
      <?php if ($query === ''): ?>
        <div>
          <p class="ppm-search-status">Try a title, a phrase, or a topic like &ldquo;worldbuilding&rdquo; or &ldquo;self-publishing,&rdquo; or browse by topic:</p>
          <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/topic-list.php'; ?>
        </div>
      <?php elseif (empty($results)): ?>
        <div>
          <p class="ppm-search-status">No articles found for &ldquo;<?php echo htmlspecialchars($query); ?>.&rdquo; Try another word, or browse by topic:</p>
          <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/topic-list.php'; ?>
        </div>
      <?php else: ?>
        <ul>
          <?php foreach ($results as $post): ?>
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
