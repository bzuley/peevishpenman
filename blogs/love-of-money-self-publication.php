<?php
$post_meta = [
  'image'   => '/img/love-of-money-self-publication.webp',
  'slug'    => 'love-of-money-self-publication',
  'title'   => 'For the Love of Money and/or Self-Publication',
  'excerpt' => 'From cash-paid pizza murals to Amazon candles, an indie author weighs what self-publishing earns per hour against what books keep: the fragments of a life, left for the people who come after.',
  'date'    => '2018-06-18',
  'added'   => '2026-09-25',
  'tags'    => 'selfpublishing, writing'
];
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
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
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com/img/love-of-money-self-publication-social.jpg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/love-of-money-self-publication-social.jpg">

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
      width="1672" height="941"
      alt="A raven reaching with beak and talon for a dollar bill baited on a spring-loaded trap set over an ornate red leather book, with mountains and blue sky behind"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Self-Publishing &amp; Legacy</p>
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
      <p>When I was eighteen, I painted murals for local pizza restaurants. People paid me in cash, and it took another decade before I made that much money again. I wore dingy overalls covered in acrylic paint, and at the end of the day my pockets bulged. I drove home to my infant son and emptied them into a shoebox in my dresser.</p>

      <p>I had more work than I could finish and a babysitter who apparently believed the shoebox was a community resource.</p>

      <p>Writing has never filled my pockets. It has, however, given me considerably more opportunities to explore philosophical concepts my university education ignored. It’s been the mirror that showed me my biases and the lingering pain left by unconventional friendships and bad choices.</p>

      <p>But when I started in 2008, I had hoped to make money.</p>
    </section>

    <section>
      <h2>A Perfectly Respectable Desire for Money</h2>

      <p>When I publish a book, I want people to buy it. I want the cover to catch someone’s eye. I want the description to persuade them. I want a reader to finish the last page and look for something else I’ve written. I want them to give me more money for more wordcraft with my name on it.</p>

      <p>I wish I could go back, grab my younger self by the shoulders, and shake her.</p>

      <p>“It’s a business, you fool.”</p>

      <p>By 2017, I was a very successful business owner, but not from selling my writing. I poured candles in my basement and sold them on Amazon. I bought Beanie Babies from people who had collected hundreds, repackaged them, and sold them on Amazon. I bought clearance items at Walmart and books from garage sales.</p>

      <p>And I—you’ll never guess—sold them on Amazon.</p>

      <p>I love being an independent author, and self-publishing is my favorite part. But just as I quit painting murals when it stopped feeling like art, I stopped trying to write books that might trend.</p>

      <p>Independent publishing offers a spectacular number of ways to work without getting paid. You can spend an afternoon fixing the spacing in a paperback. You can rewrite descriptions until every possible arrangement of the same forty words blurs together. You learn the difference between XML and HTML. You can <a href="/blogs/i-wrote-this-post-in-vr">write in virtual reality</a>.</p>

      <p>Even with assistance from artificial intelligence, self-publishing is a time hole.</p>

      <p>Measured against what I earn for the hours involved, it’s irrational. Measured against the pleasure of discovering that a stranger has entered the world I made, it’s the greatest thing ever.</p>
    </section>

    <section>
      <h2>The Business Plan</h2>

      <p>Here is a reasonably clear assignment: someone needs something, you make it, and an invoice is involved.</p>

      <p>For a writer, the market might be asking for hockey romance, dark romance, or another romantasy series in which falling in love presents a substantial risk of bodily harm.</p>

      <p>I just don’t have that in me.</p>

      <p>What I have is a post-apocalyptic world to build, genetically modified animals to release into it, and characters who keep making their small-scale governments everybody else’s problem. I have a need to make ancient philosophy feel rational.</p>

      <p>Somewhere, there may be a reader desperately waiting for all of that to happen in the same book. Finding that person has proved more difficult than finding someone who wants a candle.</p>

      <p>You can build a business around demand that already exists. Creating demand for the particular thing you wanted to make is much harder.</p>

      <p>I learned that lesson selling everything except my writing.</p>
    </section>

    <section>
      <h2>Books as a Store of Value</h2>

      <p>If I had never started publishing my own stories, I would still have earned and spent money. I would still have had friends, family, clothes, and socks that disappeared in the dryer. My coffee habit would have survived.</p>

      <p>But all the strange things I’ve noticed, the places I’ve lived, the mistakes I’ve made, and the questions I can’t leave alone at night might eventually be forgotten. I might mention them briefly in a telephone conversation across time zones, catching up with someone I can’t see in person anymore.</p>

      <p>My books give those things somewhere to stay.</p>

      <p>They’re a store of value. Other people don’t pay me for that value very often, but it’s where I collect the ideas, observations, and experiences that have mattered most to me. Fragments of my life end up in the fiction, sometimes disguised beyond recognition, sometimes barely wearing a hat.</p>

      <p>I picture my granddaughter dusting off one of my novels and feeling that she knows me better, long after I’m gone.</p>

      <p>It’s a family tradition.</p>

      <p>Years ago, I found a photograph of my grandfather walking out of a shed in North Dakota the year I was born. It was dim, with little detail. My mother would leave that flat state and fly back to Portland before I arrived, but I knew what was inside the shed: an old printing press.</p>

      <p>His self-published work sat on the shelves in every house in my family. I read his stories and poems. I never wondered how many copies he sold. I never calculated what he earned per hour setting the type.</p>

      <p>I just enjoyed knowing what the world looked like in the 1930s. Fragments of westward expansion, my grandmother’s tribe, and his work in a potato factory came to life in print long before computers. It felt like reading Steinbeck, except that lost time was inhabited by my grandparents, my father, and his siblings.</p>

      <p>He had made something I could hold. Something that survived long enough to reach me.</p>

      <p>What I’m making is mostly digital. But when I print those cheap Amazon copies and distribute them to my loved ones, I might get lucky.</p>

      <p>I might be remembered a little better by the people I love most.</p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
