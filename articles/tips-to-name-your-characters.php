<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => 'tips-to-name-your-characters',
  'title'   => 'Tips to Name Your Characters',
  'excerpt' => 'C. Patrick Schulze shares fifteen tips for naming the characters in your novel, from medieval surnames and Civil War cemeteries to why you should skip the alliteration.',
  'date'    => '2009-12-01',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'C. Patrick Schulze',
  'guest_post' => true,
  'author_link' => 'http://cpatrickschulze.blogspot.com/'
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
  <p class="ppm-article-kicker">Characters &amp; Names</p>
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
      <p>One of the most common questions I hear on my blog involves the naming of a writer’s characters. With that in mind, I’d like to pass along some tips for naming your novel’s characters.</p>

      <p>As your character's names are as important as any other of those oh-so-many words over which we authors fret so here are some tips to keep you on track.</p>
    </section>

    <section>
      <h2>Choose a Name That Means Something</h2>

      <ol>
        <li><strong>First and foremost, serendipity is your friend. If it works, well then, it works.</strong><br>
        Trust your intuition.</li>
        <li><strong>If you’re clever, you can name them for <a href="/article-tag?tag=archetypes">what they represent</a>.</strong><br>
        “Butch” the butcher? Maybe, but be smart about it and check suggestion number ten.</li>
        <li><strong>Find a book of names and consider the symbolism within the name.</strong><br>
        Though I hope I never meet the nun named Chastity.</li>
        <li><strong>One syllable, two at most for men. On occasion, females can get away with more.</strong><br>
        Come on now, nobody wants to keep reading the name Bilbonicofillia.</li>
        <li><strong>Consider the name a snapshot of your character.</strong><br>
        Don’t name your killer Sally Jones. Think, Sal “The Blade” Jones.</li>
        <li><strong>Their name should roll off the tongue.</strong><br>
        See number 3.</li>
      </ol>
    </section>

    <section>
      <h2>Fit the Name to the Time Period</h2>

      <ol start="7">
        <li><strong>Remember there were no surnames prior to the 12th Century. Even then, people were named for their place of birth or profession. For example, my last name is, “Schulze”, meaning sheriff or lawman in medieval Germany.</strong></li>
        <li><strong>Insure their name is appropriate for the time period in which the story takes place.</strong>

          <p>There are ample websites to help you here. In my case, I write historical fiction set in the mid 19th century, so I walk Civil War cemeteries searching for names. I combine the first name from one marker and the last from another. Works every time. By the way, here’s a site that’ll help. <a href="https://www.ssa.gov/OACT/babynames" rel="noopener">www.ssa.gov/OACT/babynames</a>.</p>
        </li>
      </ol>
    </section>

    <section>
      <h2>Names to Avoid</h2>

      <ol start="9">
        <li><strong>Use only one exotic name per novel.</strong><br>
        They get real weird real fast.</li>
        <li><strong>Stay away from cute.</strong><br>
        Really, how many Bambi’s have you actually met?</li>
        <li><strong>Stay away from similar letters and spellings.</strong><br>
        Imagine Tom and Thom sword fighting – Tom swung! Thom ducked!</li>
        <li><strong>Avoid Alliteration. At least use it sparingly.</strong><br>
        Thomas Tompkins won’t encourage readers to buzz your book.<br>
        (Yes, Bilbo Baggins is an exception.)</li>
        <li><strong>Don’t name fictional characters after famous people or characters.</strong><br>
        Tom and Jerry will simply give your readers the wrong hook.</li>
        <li><strong>Stay away from names that end in “s.”</strong><br>
        Erasmus’s sour samples… See my point? See number six.</li>
      </ol>
    </section>

    <section>
      <h2>Keep a File of Names</h2>

      <ol start="15">
        <li><strong>Keep a file of names you run across that strike you.</strong><br>
        You’ll thank me for that one someday.</li>
      </ol>

      <p>I am certain there are a thousand other tips out there, but this should get you started.</p>

      <p>I wish you all good names and I hope all your books are <a href="/articles/love-of-money-self-publication">best-sellers</a>.</p>

      <p>Patrick</p>
    </section>

    <section>
      <p><em>Living in Richmond, VA, C. Patrick Schulze is married to the charming Kathryn and is the father of two lovely daughters. He is grandfather to six.</em></p>

      <p><em>A retired business coach, C. Patrick Schulze began writing quite late in life. In his mid forty’s, he first put pen to paper and to date has written for Williamsburg Living Magazine and has completed three manuscripts. His latest, “Born to be Brothers,” will be ready for querying in early 2010. He is the author of two blogs, <a href="http://thebusinessofwriting.wordpress.com/" rel="noopener">TheBusinessOfWriting.wordpress.com</a> and <a href="http://cpatrickschulze.blogspot.com/" rel="noopener">CPatrickSchulze.blogspot.com</a>. You can also find him at <a href="http://twitter.com/C.PatrickSchulze" rel="noopener">Twitter.com/C.PatrickSchulze</a>.</em></p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
