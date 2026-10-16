<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => 'write-what-you-know',
  'title'   => 'Write What You Know Is the Wrong Advice',
  'excerpt' => 'Kendra Redman on why "write what you know" is limiting advice, and what to do instead: really live your life, add imagination, read everything, and write.',
  'date'    => '2009-10-13',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'Kendra Redman',
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
  <p class="ppm-article-kicker">Writing Advice</p>
  <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
  <div class="ppm-article-meta">
    by <?php echo htmlspecialchars($post_meta['author']); ?> &middot;
    <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
      <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
    </time>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/article-tags.php'; ?>
</header>

    <section>
      <p>As a writer you will often be told to ‘write what you know.’  This is the wrong advice.  I know; I was told this myself too many times.  Writing only what you know can be limiting for a lot of writers.  How many of us have lived the kind of life people will pay to read?  There are exceptions of course.  Some people have lived lives of terrible trauma and dysfunction and are able to take those experiences and cathartically release them into the pages of a novel.  In many cases, these writers didn’t plan to become a writer, and then cast about for what to write about, they became a writer because they had to in order to liberate their demons.  Augusten Borroughs said in an interview,  "My mother was a writer. I just associated writing with mental illness and unhappiness and poverty. But I always wrote because it was efficient. It was a way to remove the steam and the pressure. I can't imagine my life if I hadn't written. I wouldn't be functional."</p>
    </section>

    <section>
      <h2>Live a Life Worth Writing About</h2>

      <p>So what if you are luckier in your life?  You don’t have the rich soil of trauma from which to birth your short story, novel or autobiography.  How do you write ‘what you know’?  One way is to live a life.  What I mean by living your life is to really experience your life.   Most people hurtle through their life without noticing much.  Close your eyes.  Now describe out loud the day you had yesterday.  How did you do?  First, how much do you even remember about the day?  If you were able to remember, how did you describe the day?   Did you reel off a list, a series of tasks, encounters and actions?  Most people would.  A writer would be able to describe the details…. how the eggs smelled, what the sun looked like, how your neighbor laughs.  Think about the people you interacted with yesterday.  How did this person speak?  Rapidly?  With an accent? Explain what they meant or were thinking, not what they said.  Are you able to?  If this exercise was difficult, then you are not ready to write, not yet.  You need to start living words.  Have you lived salty, frigid, still, naked, bemused, regretful, sour or unbreakable.</p>
    </section>

    <section>
      <h2>Add a Spoonful of Imagination</h2>

      <p>The other problem with telling writers to ‘write what you know’ is that people think in literal terms.  There are some exceptions, Le Carre was a spy.  However, most writers don’t actually write what they know.  They take what they know, the tastes, emotions, smells, mannerisms, actions, expressions and people they observe and then add a spoonful of <a href="/article-tag?tag=worldbuilding">imagination</a> to the stew.  J.K. Rowling did not attend wizard school.  She did have some neighbors, a brother and sister whose last name, Potter, she preferred over her own.</p>
    </section>

    <section>
      <h2>Read Everything</h2>

      <p>Next, think about James Michener.  He was a meticulous researcher and spun his detailed notes into epics spanning geographies and generations.  If you were asking yourself a minute ago who James Michener was, well that’s the other thing about writing.  To write you must read.  So put down the pen, close the laptop and start <a href="/articles/10-modern-books-for-fans-of-isaac-asimov">reading</a>.  Read it all.  Read books, magazine articles, essays.   Read the cereal box.  Read Shakespeare, Oates, Alice Walker -  read people you have never heard of.</p>
    </section>

    <section>
      <h2>Experience, Observation, and Imagination</h2>

      <p>William Faulkner said, “A writer needs three things, experience, observation, and imagination, any two of which, at times any one of which, can supply the lack of the others.”</p>

      <p><a href="/articles/success-is-a-process">Write, write, write.</a>  Then write some more.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
