<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => 'reader-comments-honest-open-immediate',
  'title'   => 'Reader Comments: Honest, Open and Immediate',
  'excerpt' => 'Blogger Kelly DeBie on anonymous blog comments, Facebook debates, and why the instant, honest feedback of online publishing keeps her writing.',
  'date'    => '2013-04-30',
  'added'   => '2026-09-28',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writing, selfpublishing',
  'author'  => 'Kelly DeBie',
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
  <link rel="stylesheet" href="/styles/main.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/styles/main.css') ?>">
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/blogposting-schema.php'; ?>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner">

<header class="ppm-article-header">
  <p class="ppm-article-kicker">Blogging &amp; Readers</p>
  <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
  <div class="ppm-article-meta">
    by <?php echo htmlspecialchars($post_meta['author']); ?> &middot;
    <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
      <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
    </time>
  </div>
</header>

    <section>
      <p>Over the past month, all the contributors here at Peevish Penman have written about book reviews from every angle imaginable. They’ve discussed the accuracy of them, whether they are credible and whether they are something that writers should be concerned with at all.</p>

      <p>Many of them are published authors and have much more personal experience in the area than I do, so I’m deferring to their assessment of the topic. Instead, I thought I would take this time to write about what I am more familiar with, which are the comments left on my writing, both on the blog itself and through my social media connections.</p>

      <p>As I’ve gained more readers, I’ve also seen an increase in comments left. It’s an interesting dynamic sometimes, as I allow for anonymous comments to be left on my blog.  I’ve found that people tend to be far more bold with what they say when they are able to hide their identity. Sometimes this makes them more crass, more offensive, more obnoxious. As the blog owner I reserve the right to refuse to publish those comments that cross a line, particularly if left anonymously. I refuse to allow my site to be used as a platform for people to declare hatred, bigotry, or display any other unpalatable opinions.</p>

      <p>Though allowing anonymous comments comes with it’s drawbacks, I’ve found many times that anonymous comments tend to be more honest, probably because of the secret nature of them. On Blogger, anonymous comments are truly anonymous, and there is no connection to any profiles or any way for me to ever know who left them. This secretive nature may encourage people to be more critical of my writing, or of the topics I write about, because there is no fear of the message being connected to them.</p>

      <p>As a writer, I appreciate the honesty.</p>

      <p>The comment universe on Facebook and Twitter is very different than what occurs on the blog itself primarily because of the fact that every comment is attached to the user’s profile and it is visible to anyone who uses those platforms. While that attachment certainly tempers the comments left by many people, there are always a few who say what they want regardless of the connection to them.</p>

      <p>On my Facebook page, I very specifically say that I welcome all opinions and commentary, so long as people can remain respectful towards me and towards my other fans. For the most part, this request of respect works. I have only had to ban one fan for being disrespectful in over four years of page administration. (off to knock on wood now...)</p>

      <p>The discussions on Facebook often take unexpected turns, usually based on someone misinterpreting something someone else says, or their personal experience altering their impression of what I write. I have been blamed for what other people have commented on my writing before, as though I have any control over how they process it.</p>

      <p>The consequences of the comments on my writing on Facebook have been big ones for me personally at times. I’ve had friends get into arguments with one another. I’ve had friends and family get angry with me. I’ve had passionate debates with complete strangers. I’ve thought about giving it all up more than once.</p>

      <p>What keeps me going is the connections I make with my readers, my fans.</p>

      <p>The nature of any form of online self-publishing, blogging included, is that it allows me to have an immediate connection with my readers. Consequently, they can give me feedback on every single thing I ever write, for better or worse, in real time. There’s no time lag. There’s no editorial process to wait through. There’s not a long period of time between pushing the publish button and knowing what people think. If they love it, I know right away. If they hate it, I know that right away too.</p>

      <p>The immediate nature of Facebook, the impulsiveness with which people comment and post, tells me more often than not that they are being honest. Their first impression is the one they give. The anonymous comments left on my blog, often even more honest, even if brutally so at times.</p>

      <p>As writers, we want to be relevant. We want to make connections with our readers. We want to know that people read what we write, that they care enough to tell us what they think. We want them to be honest with us, to be critical of what we say and how we say it, and then we want them to come back for more.</p>

      <p>I’m happy to write in a medium that lets that all happen almost always openly, almost always honestly and almost always immediately.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
