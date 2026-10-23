<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => 'clancy-gets-away-with-it',
  'title'   => 'Clancy Gets Away With It',
  'excerpt' => 'Linda Yezak, a huge Tom Clancy fan, on the writing rules The Bear and the Dragon breaks (too many settings, too many names, head-hopping) and why the ride is worth it anyway.',
  'date'    => '2010-07-12',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'Linda Yezak',
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
  <p class="ppm-article-kicker">Craft &amp; Reading</p>
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
      <p>I have now read one-fourth of the way through a thousand page novel. Four hundred pages into Tom Clancy's The Bear and the Dragon. And, other than in the first chapter, the action is just now beginning. Finally.</p>
    </section>

    <section>
      <h2>How Not to Write a Book</h2>

      <p>Clancy is the quintessential example of how not to write a book, at least according to all the how-to's I've read. He has far too many settings. In this one, we're dealing with the United States, of course, and China, Russia, and Siberia, with a little bit of England, Italy, and the Vatican thrown in, because, after all, if it's not confusing, it's not Clancy.</p>

      <p>Each setting has its own assortment of characters. I took the time to count the major characters in China alone. Ten. Ten complicated names and ranks to remember. Not to mention what he does with the American characters. Each one has a first and last name, a title, a nickname, a codename, and an interesting array alphabet soup after his title, or as his title. And Clancy calls each one by each handle he can think of. Jack Ryan, now the President, is aka, Jack, Ryan, POTUS, SWORDSMAN, Mr. President, and a few unmentionable names used by those not fond of his policies. He's the easy one. But in one dialogue, Clancy will call him by each of the titles. And Ryan could be talking to CincPac, SecNav, or FLOTUS, it doesn't matter--Clancy uses each of Ryan's titles, and the other people are called each of theirs. Which leads to another habit Clancy has: using the name of the person multiple times in a dialogue. Like this:</p>

      <blockquote>
        <p>"Well, Jack, it's like this . . .' CincPac said.</p>

        <p>"I realize that, Robby, . . ." SWORDSMAN pointed out.</p>
      </blockquote>

      <p>Even when Jack and Robby are the only ones involved in dialogue.</p>

      <p>Clancy writes in a distant third person, which means he gets his exercise head-hopping and editorializing. He is far more likely to tell than to show, and to explain what he does show, as if we wouldn't get the emotion he's trying to portray. Aside from that, he goes on for pages ad infinitum about a character's opinions and thoughts that may or may not be relevant--you won't know until you finish the book. By page four hundred, I still don't know whether Golovko's opinion of Anitoly is important.</p>

      <p>In other words, Clancy gets away with things most writers don't dare do.</p>
    </section>

    <section>
      <h2>So Why Do I Read Him?</h2>

      <p>So, why do I read him? I'm a huge Clancy fan. What books of his I don't have, I make up for in movies based on his books. And, I know that his roller coaster takes a bit longer than most to wind up, but once it gets moving, I'm in for a nail-biting ride. I know this. So do millions of other Clancy fans.</p>

      <p>I'd love to know how he got his <a href="/articles/confirmed-independent-publisher">first book published</a>. My first was long on prose and short on dialogue, too. I head-hopped, I kept the readers distant from the characters. The readers were ghosts roaming about through the pages watching the action happen, with me, the omnipotent one, explaining everything as they moved along.</p>
    </section>

    <section>
      <h2>Character-Driven Versus Action-Driven</h2>

      <p>The difference? My books are <a href="/article-tag?tag=archetypes">character-driven</a>.</p>

      <p>Even though I'm a quarter of the way through his novel, and there hasn't been a lot in the way of action, Clancy's book is action-driven. His novels are complex, taking on the world and creating crises of earth-shattering proportion. And he strives for realism as best he can, which means that he must have more than one or two characters, he must have multiple settings, and he must have time to familiarize his readers to the key characters, settings, and issues.</p>
    </section>

    <section>
      <h2>From Page to Screen</h2>

      <p>His books make great movies. Many of the things he spends pages introducing his readers to can be visualized in one simple scene of a movie. Which is why, once I've watched the movie, I can't then go back and read the book. Takes too long. Gets too confusing. And besides, those folks in Hollywood always <a href="/articles/perfect-murder-editing-screenplay">edit</a>. I tried reading The Hunt for Red October after seeing the film. It doesn't end where the movie does. I kept thinking I'd be reaching the conclusion soon, but the book went on forever compared to the movie.</p>

      <p>But since The Bear and the Dragon is an older book, I guess Hollywood isn't going to make it into a movie. And I'm not going to get it read sitting here fussing about it.</p>

      <p>Besides, I'm getting to the good part!</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/share.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
