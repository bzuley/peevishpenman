<?php
require_once __DIR__ . '/blog-config.php';

$tag = isset($_GET['tag']) ? trim($_GET['tag']) : '';
$blog_items = $tag !== '' ? ppm_get_posts_by_tag($tag) : [];

$tag_labels = [
  'selfpublishing' => 'Self-Publishing',
  'archetypes'     => 'Character Archetypes',
  'sciencefiction' => 'Science Fiction',
];
$tag_label = $tag_labels[strtolower($tag)] ?? ucwords(str_replace(['-', '_'], ' ', $tag));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($tag_label); ?> Posts – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($tag_label); ?> posts from OA Allen at Peevish Penman.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/blog-tag.php?tag=<?php echo urlencode($tag); ?>">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="<?php echo htmlspecialchars($tag_label); ?> Posts – Peevish Penman">
  <meta property="og:description" content="<?php echo htmlspecialchars($tag_label); ?> posts from OA Allen at Peevish Penman.">
  <meta property="og:url" content="https://peevishpenman.com/blog-tag.php?tag=<?php echo urlencode($tag); ?>">
  <meta property="og:type" content="website">

  <link rel="stylesheet" href="/styles/main.css">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<section class="ppm-blog-preview">
  <div class="blog-preview">
    <div class="bp-head">
      <h2 class="bp-title"><?php echo htmlspecialchars($tag_label); ?></h2>
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
