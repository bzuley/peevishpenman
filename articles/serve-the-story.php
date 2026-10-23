<?php
$post_meta = [
  'image'   => '/img/general/serve_story.webp',
  'slug'    => 'serve-the-story',
  'title'   => 'Serve the Story',
  'excerpt' => 'Clark Brooks delivers the best writing advice he ever got, from his acting days, with the speed, wit and candor of a stand-up comic: serve the story.',
  'date'    => '2010-07-19',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'Clark Brooks',
  'guest_post' => true,
  'author_link' => 'http://clarkjbrooks.blogspot.com/'
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
      alt="A smiling waiter in a vest and bow tie leans toward the camera, presenting a place card reading &quot;STORY&quot; on a silver serving tray in an elegant restaurant"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Writing Advice</p>
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
      <p><em>Clark delivers this advice to writers with the speed, wit, and candor of the stand up comic and demonstrates the impact of a defined writer's voice.</em></p>

      <p>The best advice I ever got for writing was actually given to me as an actor and that is to SERVE THE STORY. Don't waste your readers time with clever phrasing and <a href="/articles/nine-parts-of-speech-f-word">flowery speech</a> that doesn't move things along. That's not clever and flowery. It's self-indulgent and annoying. It's like a crop duster doing aerial loops. It might be fun for you but you're getting pesticide all over the place.</p>

      <p>Okay, maybe not, but you get the idea. Respect your readers; you come to them with a story to tell and they've given you their attention so you can tell it. So dust the damn crops already.</p>
    </section>

    <section>
      <h2>An Example From the Stage</h2>

      <p>Here's an example. It's from acting, but I think you'll see the relevance. I was in a community theatre production of a Neil Simon play with a guy who decided he was going to incorporate some business into a scene, a shout-out to his favorite college football team. If you're trying to think of a Neil Simon play that has anything at all to do with college football, don't bother because there aren't any. "Why would you do that?", I asked. "Because I have some buddies coming tonight and they'll get a kick out of it", he said. "That is a terrible idea. There's going to be a couple hundred people here and you're going to take them all out of the story so you can get a laugh out of a couple of your drinking buddies?" "Well, nobody said anything when Tanya added that bit where she has trouble sitting in a chair." "That's because it's funny. Her character is an idiot. Struggling to figure out how to sit in a chair illustrates that point. And everybody gets that. On stage in front of an audience is exactly not the place to share inside jokes with your pals." "Well, I'm doing it anyway." I knew he would. And he did. And if you've ever wondered what it sounds like when 200 people who are laughing at a Neil Simon romantic comedy are suddenly force-fed a line from the University of Michigan fight song for no reason whatsoever, it sounds a lot like the kind of complete silence you imagine exists in deep space. Cold, empty and dead. Nobody laughed, including the boob's buddies, who might have left early...if they even showed up.</p>
    </section>

    <section>
      <h2>Cut Anything That Doesn't Serve It</h2>

      <p>So SERVE THE STORY. Get rid of anything that doesn't fit that credo. It doesn't mean you have to boil everything down to the point that it reads like a police report of a minor traffic accident. Your audience wants to be entertained. By all means, take time in describing <a href="/article-tag?tag=worldbuilding">environments</a> in great detail. Give your characters quirky habits. Even make one of them a University of Michigan fan...as long as you SERVE THE STORY. If you come up with something that doesn't, even if you think it's the greatest thing you or anybody else has ever written, <a href="/articles/perfect-murder-editing-screenplay">get rid of it</a>. This will require you to be honest about your work, but that's a discipline you'll want to develop anyway and this is as good a way as any to do so.</p>

      <p>SERVE THE STORY!</p>

      <p>Visit Clark Brooks at the <a href="http://clarkjbrooks.blogspot.com/" rel="noopener">Ridiculously Inconsistent Trickle of Consciousness</a></p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
