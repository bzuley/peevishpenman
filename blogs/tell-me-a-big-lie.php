<?php
$post_meta = [
  'image'   => '/img/whirlwind.png',
  'slug'    => 'tell-me-a-big-lie',
  'title'   => 'Tell Me a Big Lie',
  'excerpt' => 'A 2017 op-ed connecting "America First" rhetoric, The America We Deserve, and the Reform Party—daring readers to explain away what was standing in plain sight.',
  'date'    => '2017-01-22',
  'added'   => '2026-09-26',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => 'culture, politics, colonization'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($post_meta['title']); ?> – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
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
  <!-- Hero image with overlaid content -->
  <figure class="ppm-article-hero">
    <img
      src="<?php echo htmlspecialchars($post_meta['image']); ?>"
      alt="Illustration of an old writer at a typewriter, his words spiraling upward into a whirlwind of flying pages against a starry sky"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">A 2017 Op-Ed</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>
    </div>
  </figure>
</header>

    <section>
      <p>
        I don't blame anyone for wanting to hope that the current problem in the US isn't as big as it appears,
        but first go to the whitehouse.gov website and read the new list of "America First" policies.
      </p>

      <p>Then, read the history of the slogan "America First" from its use in 1944 and 2002.</p>

      <p>
        Then, go to americafirstparty.org and read their mission. Compare it to the current mission of
        whitehouse.gov.
      </p>

      <p>
        Then, read Trump's 2000 publication, <em>The America We Deserve</em>, where he makes statements about the
        Reform Party, saying it was poor company to keep as it contained a neo-Nazi, Pat Buchanan, and a Klansman,
        David Duke. Read how he campaigned for the Reform Party's nomination that year.
      </p>

      <p>Then, read about how the America First Party was established by former members of the Reform Party.</p>

      <p>
        Then, read some quotes about "America First" by Donald Trump. Read some quotes about Donald Trump by
        members of the "America First Party."
      </p>

      <p>
        Then, tell me Donald Trump doesn't know what he is doing or saying and that the problem isn't as big as
        it appears. Read what Donald Trump has said about his "winning DNA."
      </p>

      <p>
        And then tell me why Melanija Knavs, a Slovenian from a Roman Catholic family who converted to
        Episcopalianism and Germanized her name to Melania Knauss, appears so reluctant to be first lady.
      </p>

      <p>
        Tell me it makes sense that an immigrant, married to the son of an immigrant from Scotland, and the
        grandchild of two German immigrants, are the couple leading the country, because it "needs" to
        recalibrate its issues from civil rights to tightening immigration policies.
      </p>

      <p>Tell me the country hasn't just been taken over by exactly who appears to be in control.</p>

      <p>
        Tell me there is a good reason that stock in private prisons surged out of control the night Donald
        Trump was announced as President-Elect.
      </p>

      <p>
        Tell me the Nazis weren't so bad for Germany and that putting the US through a leadership based on the
        same ideals won't lead to the same results here and now.
      </p>

      <p><em>— US "America First" Foreign Policy Page, January 22, 2017</em></p>
    </section>

    <section>
      <p>
        I want to hear it from someone I know, because as Dr. Martin Luther King Jr. said, "There comes a time
        when silence is betrayal," and I think we're passing that point right now.
      </p>

      <p>Give me some "alternative facts." Tell me a "Big Lie," <em>Mein Kampf</em>.</p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
