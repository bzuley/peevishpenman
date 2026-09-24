<?php
require_once __DIR__ . '/blog-config.php';
$blog_items = ppm_get_blog_posts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title>Blog – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Essays and dispatches from OA Allen on self-publishing, character archetypes, and metaphysical science fiction.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/blog">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="Blog – Peevish Penman">
  <meta property="og:description" content="Essays and dispatches from OA Allen on self-publishing, character archetypes, and metaphysical science fiction.">
  <meta property="og:url" content="https://peevishpenman.com/blog">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://peevishpenman.com/img/peevish-penman-social-share-1200x630.png">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Blog – Peevish Penman">
  <meta name="twitter:description" content="Essays and dispatches from OA Allen on self-publishing, character archetypes, and metaphysical science fiction.">
  <meta name="twitter:image" content="https://peevishpenman.com/img/peevish-penman-social-share-1200x630.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<section class="ppm-blog-preview">
  <div class="blog-preview">
    <div class="blog-container">

      <?php if (empty($blog_items)): ?>
        <p style="color:#f88; max-width:40rem; margin:2rem auto; text-align:center;">
          No blog posts found.
        </p>
      <?php else: ?>
        <ul>
          <?php foreach ($blog_items as $post): ?>
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