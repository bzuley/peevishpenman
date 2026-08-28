<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/blog-config.php';
$blog_items = ppm_get_blog_posts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/styles/main.css">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<!-- DEBUG INFO (view source to see) -->
<!-- POSTS FOUND: <?php echo count($blog_items); ?> -->

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
              <a href="/blogs/<?php echo htmlspecialchars($post['slug']); ?>.php">
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