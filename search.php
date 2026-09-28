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
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/styles/main.css') ?>">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<section class="ppm-blog-preview">
  <div class="blog-preview">
    <div class="bp-head">
      <h2 class="bp-title">Search</h2>
    </div>

    <form class="ppm-search-form" action="/search.php" method="get" role="search">
      <input type="search" name="q" placeholder="Search posts&hellip;"
             value="<?php echo htmlspecialchars($query); ?>" aria-label="Search posts" autofocus>
      <button type="submit">Search</button>
    </form>

    <div class="blog-container">
      <?php if ($query === ''): ?>
        <p class="ppm-search-status">Try a topic, a title, or a tag like &ldquo;worldbuilding&rdquo; or &ldquo;self-publishing.&rdquo;</p>
      <?php elseif (empty($results)): ?>
        <p class="ppm-search-status">No posts found for &ldquo;<?php echo htmlspecialchars($query); ?>.&rdquo;</p>
      <?php else: ?>
        <ul>
          <?php foreach ($results as $post): ?>
            <li class="blog-card">
              <a href="/blogs/<?php echo htmlspecialchars($post['slug']); ?>">
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
                    <?php foreach ($post['tags'] as $tag): ?>
                      <li class="bp-tag"><?php echo htmlspecialchars($tag); ?></li>
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
