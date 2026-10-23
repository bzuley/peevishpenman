<?php
$post_meta = [
  'image'   => '/img/general/astronaut_and_unicorn.webp',
  'slug'    => 'too-many-ideas',
  'title'   => 'Too Many Ideas',
  'excerpt' => 'Morgan Barnhart on suffering from Too Many Ideas, and the whiteboard trick that gets every idea out of your head and into plain sight so you can pick one and write.',
  'date'    => '2012-05-15',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'Morgan Barnhart',
  'guest_post' => true
];
require_once $_SERVER['DOCUMENT_ROOT'].'/blog-config.php';
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
  <meta name="author" content="<?php echo htmlspecialchars($post_meta['author']); ?>">

  <link rel="canonical" href="https://peevishpenman.com/articles/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/articles/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/blogposting-schema.php'; ?>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner">

<header class="ppm-article-header">
  <!-- Hero image with overlaid content -->
  <figure class="ppm-article-hero">
    <img
      src="<?php echo htmlspecialchars($post_meta['image']); ?>"
      width="1536" height="1024"
      alt="An astronaut on a rocky ridge fends off a rearing unicorn with its own horn, a huge moon behind them"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Writing Process</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
      by <strong class="ppm-article-author"><?php echo htmlspecialchars($post_meta['author']); ?></strong> &middot;
      <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
        <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
      </time>
      </div>
    </div>
  </figure>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/article-tags.php'; ?>
</header>

    <section>
      <p>Hello, my name is Morgan and I suffer from Too Many Ideas.</p>

      <p>Having too many ideas is like having ADD. We go back and forth between ideas on a daily basis, can never concentrate on one idea for too long and then eventually we just <a href="/articles/success-is-a-process">give up on the whole writing thing</a> because we want to write them all at the very same time but know that's impossible.</p>


    </section>

    <section>
      <h2>A Zillion Ideas at Once</h2>

      <p>We have about a zillion ideas running through our head at one time. We choose to focus in on the good ideas which usually means anywhere from 2-10 ideas at a time (if not more). Sometimes they're repeat ideas that we never really fleshed out, sometimes they're new, sometimes they're just something fun that we know will never come to fruition.</p>

      <p>But instead of distinguishing between the ideas or even really focusing on one idea to write, we end up thinking of every single one of them at the very same time. And our head explodes. You'll then be able to find us in the fetal position for a few hours.</p>
    </section>

    <section>
      <h2>Put Every Idea on a Whiteboard</h2>

      <p>What I do to quit thinking and <a href="/articles/break-it-down-to-build-it-up">get back to writing</a> is, I write every single idea I have for a story on a white board, even if I think it'll never come to fruition. I then mount that white bound above my writing area where I can see it at all times. I look at the board, pick an idea and start writing.</p>

      <p>The reason it's now so easy to just pick an idea and start writing about it is because it's right in front of me in an organized manner. I can physically see every single idea I have, instead of them just being one big incoherent jumble inside my head. I erase the ideas when I've finished writing them.</p>
    </section>

    <section>
      <h2>Use Any Method You Like</h2>

      <p>You can use any method you like. If you want to print them out on a piece of paper, display them on your TV (if you know how to do that sort of thing) or any other way you can think of. Just get those ideas out in front of you in plain sight. Then simply begin choosing the ideas one by one and get to work!</p>

      <p>Be sure to add new ideas to the board, too, don't let anymore ideas build up inside your head.</p>
    </section>

    <section>
      <p><em>from the PPM Archives Sept 2009</em></p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
