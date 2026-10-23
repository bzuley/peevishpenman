<?php
$post_meta = [
  'image'   => '/img/general/speculative_fiction_fellowship.webp',
  'slug'    => 'tips-to-name-your-characters',
  'title'   => 'Tips to Name Your Characters',
  'excerpt' => 'C. Patrick Schulze shares fifteen tips for naming the characters in your novel, from medieval surnames and Civil War cemeteries to why you should skip the alliteration.',
  'date'    => '2009-11-09',
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
  <!-- Hero image with overlaid content -->
  <figure class="ppm-article-hero">
    <img
      src="<?php echo htmlspecialchars($post_meta['image']); ?>"
      width="1536" height="1024"
      alt="A varied company of science-fiction and fantasy characters, including a robot, a lizard-like alien, a wizard, an elf, a detective, a tentacled reader and a wolf, posed together on steps before a moon and a rocket-lit city"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Characters &amp; Names</p>
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
      <p>One of the most common questions I hear on my blog involves the naming of a writer’s characters. With that in mind, I’d like to pass along some tips for naming your novel’s characters.</p>

      <p>As your character's names are as important as any other of those oh-so-many words over which we authors fret so here are some tips to keep you on track.</p>
    </section>

    <section>
      <h2>Choose a Name That Means Something</h2>

      <p><strong>1. First and foremost, serendipity is your friend. If it works, well then, it works.</strong></p>

      <p>Trust your intuition.</p>
    </section>

    <section>
      <p><strong>2. If you’re clever, you can name them for <a href="/article-tag?tag=archetypes">what they represent</a>.</strong></p>

      <p>“Butch” the butcher? Maybe, but be smart about it and check suggestion number ten.</p>
    </section>

    <section>
      <p><strong>3. Find a book of names and consider the symbolism within the name.</strong></p>

      <p>Though I hope I never meet the nun named Chastity.</p>
    </section>

    <section>
      <p><strong>4. One syllable, two at most for men. On occasion, females can get away with more.</strong></p>

      <p>Come on now, nobody wants to keep reading the name Bilbonicofillia.</p>
    </section>

    <section>
      <p><strong>5. Consider the name a snapshot of your character.</strong></p>

      <p>Don’t name your killer Sally Jones. Think, Sal “The Blade” Jones.</p>
    </section>

    <section>
      <p><strong>6. Their name should roll off the tongue.</strong></p>

      <p>See number 3.</p>
    </section>

    <section>
      <h2>Fit the Name to the Time Period</h2>

      <p><strong>7. Remember there were no surnames prior to the 12th Century. Even then, people were named for their place of birth or profession. For example, my last name is, “Schulze”, meaning sheriff or lawman in medieval Germany.</strong></p>
    </section>

    <section>
      <p><strong>8. Insure their name is appropriate for the time period in which the story takes place.</strong></p>

      <p>There are ample websites to help you here. In my case, I write historical fiction set in the mid 19th century, so I walk Civil War cemeteries searching for names. I combine the first name from one marker and the last from another. Works every time. By the way, here’s a site that’ll help. <a href="https://www.ssa.gov/OACT/babynames" rel="noopener">www.ssa.gov/OACT/babynames</a>.</p>
    </section>

    <section>
      <h2>Names to Avoid</h2>

      <p><strong>9. Use only one exotic name per novel.</strong></p>

      <p>They get real weird real fast.</p>
    </section>

    <section>
      <p><strong>10. Stay away from cute.</strong></p>

      <p>Really, how many Bambi’s have you actually met?</p>
    </section>

    <section>
      <p><strong>11. Stay away from similar letters and spellings.</strong></p>

      <p>Imagine Tom and Thom sword fighting – Tom swung! Thom ducked!</p>
    </section>

    <section>
      <p><strong>12. Avoid Alliteration. At least use it sparingly.</strong></p>

      <p>Thomas Tompkins won’t encourage readers to buzz your book.</p>

      <p>(Yes, Bilbo Baggins is an exception.)</p>
    </section>

    <section>
      <p><strong>13. Don’t name fictional characters after famous people or characters.</strong></p>

      <p>Tom and Jerry will simply give your readers the wrong hook.</p>
    </section>

    <section>
      <p><strong>14. Stay away from names that end in “s.”</strong></p>

      <p>Erasmus’s sour samples… See my point? See number six.</p>
    </section>

    <section>
      <h2>Keep a File of Names</h2>

      <p><strong>15. Keep a file of names you run across that strike you.</strong></p>

      <p>You’ll thank me for that one someday.</p>

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
