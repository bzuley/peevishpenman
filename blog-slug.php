<?php
$post_meta = [
  'image'   => '/img/PLACEHOLDER.png',
  'slug'    => 'post-slug-here',
  'title'   => 'Post Title Here',
  'excerpt' => 'Brief excerpt or description of the post content goes here.',
  'date'    => 'YYYY-MM-DD',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => ''
  // Optional 'added' => 'YYYY-MM-DD': the day the post goes live on the
  // site. A future date schedules the post; it stays hidden until then.
];
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
ppm_require_published($post_meta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($post_meta['title']); ?> – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css">
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/blogposting-schema.php'; ?>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner">

    <header class="ppm-article-header">
      <p class="ppm-article-kicker">Category or Theme</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>

      <figure class="ppm-article-hero">
        <img src="<?php echo htmlspecialchars($post_meta['image']); ?>"
             alt="Description of hero image">
      </figure>
    </header>

    <!-- Optional: Lead/intro paragraph -->
    <section>
      <p>
        Optional introductory paragraph that can be different from the excerpt.
      </p>
    </section>

    <!-- Main content sections -->
    <section>
      <h2>First Section Heading</h2>

      <p>
        Paragraph content goes here.
      </p>

      <p>
        Additional paragraphs as needed.
      </p>
    </section>

    <section>
      <h2>Second Section Heading</h2>

      <p>
        More content here.
      </p>
    </section>

    <!-- Add more sections as needed -->

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>