<?php
require_once __DIR__ . '/blog-config.php';
$blog_items = ppm_get_blog_posts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title>Articles – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Articles on writing, science fiction, history, consciousness, technology, publishing, and unusual questions worth investigating in the world of speculative fiction.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/articles">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="Articles – Peevish Penman">
  <meta property="og:description" content="Articles on writing, science fiction, history, consciousness, technology, publishing, and unusual questions worth investigating in the world of speculative fiction.">
  <meta property="og:url" content="https://peevishpenman.com/articles">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Articles – Peevish Penman">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Articles – Peevish Penman">
  <meta name="twitter:description" content="Articles on writing, science fiction, history, consciousness, technology, publishing, and unusual questions worth investigating in the world of speculative fiction.">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta name="twitter:image:alt" content="Articles – Peevish Penman">

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
      <h1 class="bp-title">Articles</h1>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/search-form.php'; ?>

    <section class="ppm-topic-explorer" aria-labelledby="ppm-topic-explorer-title">
      <h2 class="ppm-topic-explorer-title" id="ppm-topic-explorer-title">Explore by topic</h2>
      <ul class="ppm-topic-grid">
        <?php foreach (['speculativefiction', 'authorship', 'origins'] as $topic_key): ?>
          <?php $topic_count = count(ppm_get_posts_by_tag($topic_key)); ?>
          <li>
            <a class="ppm-topic-card" href="<?= htmlspecialchars(ppm_tag_url($topic_key)) ?>">
              <span class="ppm-topic-card-label"><?= htmlspecialchars(ppm_tag_label($topic_key)) ?></span>
              <span class="ppm-topic-card-intro"><?= htmlspecialchars(ppm_get_tags()[$topic_key]['intro']) ?></span>
              <span class="ppm-topic-card-count"><?= $topic_count ?> article<?= $topic_count === 1 ? '' : 's' ?> &rarr;</span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/topic-list.php'; ?>
    </section>

    <h2 class="ppm-topic-explorer-title">All articles</h2>

    <div class="blog-container">

      <?php if (empty($blog_items)): ?>
        <p style="color:#f88; max-width:40rem; margin:2rem auto; text-align:center;">
          No articles found.
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