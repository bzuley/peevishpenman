<?php
require_once __DIR__ . '/blog-config.php';

$ppm_tag_labels = [
    'selfpublishing' => 'Self-Publishing',
    'archetypes'     => 'Character Archetypes',
    'sciencefiction' => 'Science Fiction',
];

$tag = isset($_GET['tag']) ? preg_replace('/[^a-z0-9]/', '', strtolower($_GET['tag'])) : '';
$tag_label = $ppm_tag_labels[$tag] ?? ucwords(str_replace(['-', '_'], ' ', $tag));

$blog_items = ppm_get_blog_posts();
$blog_items = array_values(array_filter($blog_items, function ($post) use ($tag) {
    return $tag !== '' && in_array($tag, $post['tags'], true);
}));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($tag_label); ?> Posts – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/styles/main.css">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<section class="ppm-blog-preview">
  <div class="blog-preview">
    <div class="bp-head">
      <h1 class="bp-title"><?php echo htmlspecialchars($tag_label); ?></h1>
    </div>

    <div class="blog-container">

      <?php if (empty($blog_items)): ?>
        <p style="color:#B8C9C6; max-width:40rem; margin:2rem auto; text-align:center;">
          No <?php echo htmlspecialchars($tag_label); ?> posts yet — check back soon, or
          <a href="/blog.php">browse all posts</a>.
        </p>
      <?php else: ?>
        <ul>
          <?php foreach ($blog_items as $post): ?>
            <li class="blog-card">
              <a href="/blogs/<?php echo htmlspecialchars($post['slug']); ?>.php">
                <?php if (!empty($post['image'])): ?>
                  <img class="bp-img"
                       src="<?php echo htmlspecialchars($post['image']); ?>"
                       alt="<?php echo htmlspecialchars($post['title']); ?>">
                <?php endif; ?>

                <h2><?php echo htmlspecialchars($post['title']); ?></h2>

                <?php if (!empty($post['excerpt'])): ?>
                  <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
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
