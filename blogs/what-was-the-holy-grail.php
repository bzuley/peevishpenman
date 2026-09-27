<?php
$post_meta = [
  'image'   => '/img/excalibur-closeup.jpg',
  'slug'    => 'what-was-the-holy-grail',
  'title'   => 'What Was the Holy Grail Before It Was Holy?',
  'excerpt' => 'The first Grail story never calls it holy or even clearly a cup. How a golden serving dish in an unfinished romance became the cup of Christ—and what that teaches writers about myth.',
  'date'    => '2016-10-26',
  'added'   => '2026-09-27',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => 'worldbuilding, wordcraft, writing'
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
      alt="Photograph of a vintage mint-green Hermes 3000 typewriter, open in its travel case with a blank sheet of paper loaded"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Myth, Legend &amp; Storytelling</p>
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
        In <em>The Da Vinci Code</em>, Dan Brown's extremely popular novel, the great secret of European
        Christianity is that the Grail was a woman. Mary Magdalene. She carried the bloodline of Jesus forward, and
        real, actual descendants of Jesus are alive today. That's, um, great.
      </p>

      <p>
        Other people will tell you the Grail was the cup of immortality that held wine at the Last Supper and
        caught the blood of Jesus at the crucifixion. Others say it was never an object at all, just a metaphor for
        spiritual enlightenment.
      </p>

      <p>
        So I went back to the first time anyone wrote the word down. The original Grail wasn't holy, wasn't
        clearly a cup, and wasn't even the most important object in the room.
      </p>
    </section>

    <section>
      <h2>A Graal in an Unfinished Romance</h2>

      <p>
        Jerusalem was captured by European crusaders in 1099. The first mention of a <em>graal</em> comes decades
        later, in an unfinished romance about a young knight named Perceval, written by Chrétien de Troyes sometime
        between 1135 and 1190—probably around 1180.
      </p>

      <p>
        It was clearly a fantasy story. A romantic fantasy set in the time of King Arthur, the fifth or sixth
        century CE, some five hundred years before the Crusades, during the Saxon invasions. Literacy wasn't the
        priority it is today, and a lot of time and distance separate that first mention from everything that came
        after it.
      </p>

      <p>From the original source, we can't even tell what the <em>graal</em> is supposed to be.</p>

      <p>
        In the story, Perceval is at a meal with the Fisher King. A squire brings in a white lance that is bleeding.
        He is followed by a beautiful young girl carrying an elaborately decorated golden <em>graal</em>, and another
        servant carrying a silver platter. The room is illuminated, and the procession passes by him again on its
        way out.
      </p>

      <p>
        The next day, a woman scolds Perceval for not asking why the lance bled or whom the <em>graal</em> served.
        It isn't called holy, and it isn't treated as more significant than the bleeding lance. The king has been
        wounded in the thigh, and it's implied that Perceval could have done something about it if only he'd asked.
        The woman then tells him she's his first cousin and that his mother is dead.
      </p>

      <p>
        That's it. In a popular romance full of sex and female characters, there is a single mention of a bleeding
        lance and a golden serving dish—the kind of vessel carried in procession at a feast. The beautiful woman is
        most likely bringing in food that had been tasted for poison, and perhaps the room lights up simply because
        the platter is gold.
      </p>
    </section>

    <section>
      <h2>How a Serving Dish Became Holy</h2>

      <p>
        The next known Grail story, Wolfram von Eschenbach's <em>Parzival</em>, was written around 1210. Now the
        hero has to go on a quest because he failed to ask the healing question. The Grail is assumed to have the
        power to heal, since the Fisher King would have been cured if the question had been asked. The Fisher King
        also gets a name, and his wound is explained as punishment for taking a wife, because the keeper of the
        Grail was supposed to remain chaste.
      </p>

      <p>
        The explicitly Christian version arrives later still, from Robert de Boron, who also wrote
        <em>Merlin</em>. He establishes the Grail as the vessel given to Joseph of Arimathea—the cup of Christ.
      </p>

      <p>
        So within a few decades, a golden dish in an unfinished adventure story picked up healing powers, a vow of
        chastity, and the blood of Jesus. Each writer took what was there and added what their audience wanted.
      </p>

      <p>
        These stories spread at exactly the same time the Knights Templar—formed around 1118, sworn to chastity,
        and suddenly very rich and very secret—were rising to prominence. It's no surprise people connected the
        two. But whatever the Templars may have found in Jerusalem, it wasn't in the possession of a Fisher King in
        the fifth or sixth century.
      </p>
    </section>

    <section>
      <h2>Writers Recycle</h2>

      <p>
        None of this is a criticism. It's what writers do. In the Chronicles of Narnia, Aslan sacrifices himself
        to save everyone, just like Jesus. In Harry Potter, Harry sacrifices himself to save everyone, just like
        Jesus. People continuously retell the same themes, adjusting them to suit their time, borrowing from new
        sources and reworking old ones. We don't work in isolation. We use stories, actual events, and theories
        like a palette of paint to create something original.
      </p>

      <p>
        We also use myth and legend to shield ourselves from the uncertainty of our own systems of thought and
        from the real horror of human existence. Birth. Conflict. Aging. Death. Stories help us cope. They keep us
        from overthinking the questions we can't answer, so we can get on with the business of life. We believe
        the impossible of our heroes, and of events we never witnessed, because it's practical to do so.
      </p>

      <p>
        The Grail is the perfect example. It started as a golden platter nobody bothered to explain, and every
        generation since has filled it with whatever it needed most: healing, purity, salvation, a secret
        bloodline, brotherhood.
      </p>

      <p>
        That's the real lesson for anyone building a world. Leave a mystery unexplained, and your readers will do
        the rest for the next eight hundred years.
      </p>
    </section>

    <section>
      <p class="ppm-article-disclaimer">
        <strong>Related reading:</strong>
        <a href="/blogs/what-the-knights-templar-found">What the Knights Templar Found</a> &middot;
        <a href="/blogs/everyone-runs-on-faith">Everyone Runs on Faith, Even Scientists</a>
      </p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
