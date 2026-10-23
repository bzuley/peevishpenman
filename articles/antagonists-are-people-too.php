<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => 'antagonists-are-people-too',
  'title'   => 'Antagonists Are People Too',
  'excerpt' => 'Ariel Ceylan shares six things to keep in mind when creating the most crucial character in your book: the antagonist, who is a real person too.',
  'date'    => '2009-10-29',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'Ariel Ceylan',
  'guest_post' => true,
  'author_link' => 'http://ceylanthewriter.wordpress.com/'
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
  <p class="ppm-article-kicker">Antagonists</p>
  <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
  <div class="ppm-article-meta">
    by <strong class="ppm-article-author"><?php echo htmlspecialchars($post_meta['author']); ?></strong> &middot;
    <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
      <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
    </time>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/article-tags.php'; ?>
</header>

    <section>
      <p>Every person who is familiar with stories whether they are movies, comics, or books know of the antagonist.  The antagonist is usually the "bad guy" in the story, and without the antagonist there is no story.</p>

      <p>As a writer, it is important to never forget this important line about antagonists, "They are people too".  This is probably the most vital maxim that a writer must live by other than "show don't tell".</p>

      <p>I put together a list of things to keep in mind while creating the most crucial character in your book.</p>
    </section>

    <section>
      <h2>Six Things to Keep in Mind</h2>

      <p><strong>1) Who is the antagonist?</strong></p>

      <p>Like <a href="/article-tag?tag=archetypes">building any other character</a>, one must create a detailed history of the antagonist.  The financial background, family life, favorite food, etc…</p>
    </section>

    <section>
      <p><strong>2) Why is the antagonist antagonizing the protagonist?</strong></p>

      <p>What is the <a href="/articles/tell-me-a-big-lie">ulterior motive</a>?  Did the "good guy" in the novel make fun of the "bad guy" in high school?  People don't just do things, there is a logic behind everything that is done, whether it is sound or not.</p>
    </section>

    <section>
      <p><strong>3) Give the antagonist a weakness.</strong></p>

      <p>No one wants to read a book that the antagonist completely overwhelms the protagonist, making no hope or point in the plot.</p>
    </section>

    <section>
      <p><strong>4) Make sure that the antagonist has a soft-spot</strong></p>

      <p>Does the antagonist have a thing for fluffy bunnies?  Make sure to keep in mind that the antagonist is a person.</p>
    </section>

    <section>
      <p><strong>5) Is there a chance at redemption for the antagonist?</strong></p>

      <p>As a writer, it is imperative to be clear of the antagonist's strengths, failings, and heart.  Does the antagonist deserve redemption?  Remember that this will not be in the eyes of you as a writer, but in the eyes of the protagonist.  The protagonist has the power to offer the "bad guy" a second chance if the "good guy" is really good.  Of course, the ball will then be in the "bad guy's" court, whether he or she will accept the offer.</p>
    </section>

    <section>
      <p><strong>6) Don't be afraid to let the tables turn</strong></p>

      <p>Let the story run its course when writing without cramping the style of the characters.  They may shock you with what they have done in their past and will do with their new experiences.  Be open to having a role reversal or having the reader understand the antagonist.</p>
    </section>

    <section>
      <h2>The Antagonist Is a Real Person</h2>

      <p>I think the most important thing in creating an effective antagonist is remembering that they are not just objects that make life more difficult for the protagonist, the antagonist is a real person.</p>

      <p>I wish you much luck!</p>

      <p>Check me out on: <a href="http://ceylanthewriter.wordpress.com/" target="_blank" rel="noopener">ceylanthewriter.wordpress.com</a></p>
    </section>

    <section>
      <p><em>Ariel Ceylan is a seventeen-year-old girl, a senior in high school, that has published her first book on September 24<sup>th</sup>, 2009 through Xlibris, a <a href="/articles/confirmed-independent-publisher">self-publishing</a> company.</em></p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/share.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
