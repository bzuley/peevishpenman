<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => 'the-four-ps-of-procrastination',
  'title'   => 'The Four P\'s of Procrastination',
  'excerpt' => 'Cecilia Dominic on why she puts off writing: personality, time perception, process issues and perfectionism, plus the four D\'s she uses to fight back.',
  'date'    => '2010-06-22',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'Cecilia Dominic',
  'guest_post' => true,
  'author_link' => 'http://ceciliadominic.blogspot.com'
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
  <p class="ppm-article-kicker">Procrastination</p>
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
      <p>I sat down at the beginning of May and mapped out short- and long-term writing goals. They were brilliant! They were ambitious! They were doable if I had a parallel life, a twenty-nine hour day, or more organizational skill than I actually possess.</p>

      <p>Of course, the question isn't really how to find time to write, but <a href="/articles/break-it-down-to-build-it-up">how to stop procrastinating</a>. I've come to realize that there are four things standing in my way, the four P's of Procrastination:</p>
    </section>

    <section>
      <h2>The Four P's</h2>

      <h3>1. Personality</h3>

      <p>I'm a Myers-Briggs INFJ, which means I'm introverted, see things in a big-picture, possibilities-oriented way, make decisions according to values, and like for things to be predictable. You can see how this personality type works for and against me. In essence, I get stuck because I prefer conceptualization and planning, e.g., "the fun stuff" to execution, or the nuts-and-bolts getting to whatever it is.</p>

      <h3>2. Time Perception</h3>

      <p>I like to finish what I start, and I want big chunks of time to do it. Fifteen minutes of free time to write? Ha, that's barely enough for me to get started with my pre-writing ritual. I feel like I need two hours to really get something done. That brings me to…</p>

      <h3>3. Process Issues</h3>

      <p>My pre-writing ritual goes like this:</p>

      <ul>
        <li>10 minutes looking at comics online to "relax my mind"</li>
        <li>10 minutes checking Twitter and following Favorites to blog posts by other people, but not the time-management ones that make me feel guilty</li>
        <li>5 minutes convincing the gray cat not to sit on the laptop keyboard and open windows…</li>
      </ul>

      <p>You get the idea. By then, it's time to move on to something else. I'm not going to say I'm ADD, but I have a problem with distractions. What are they distracting me from?</p>

      <h3>4. Feelings of overwhelm that come from Perfectionism.</h3>

      <p>I asked Hubby if he thinks I'm a perfectionist. He gave me that, "Oh, crap, there's no right answer to this question!" look, which likely means, "Uh, yeah. Duh."</p>

      <p>The problem is that I see what things could be – remember that N part of the personality type? – but they don't start out that way, and I lack patience. This causes me to set goals that are too high, which leads me to be overwhelmed and procrastinate.</p>
    </section>

    <section>
      <h2>The Four D's</h2>

      <p>Now that I've recognized these things, what am I going to do about them? The four D's:</p>

      <h3>1. Deadlines</h3>

      <p>Before I left on a recent vacation, I had a ton of stuff to do at work. That time perception problem, the one where ten minutes doesn't seem like enough to do anything, went out the window. I used every one of those minutes and was productive.</p>

      <p>Now I just need to figure out how to generate and apply deadlines, which brings me to...</p>

      <h3>2. Death Threats</h3>

      <p>Okay, not literally. Think external accountability.</p>

      <p>When I was in graduate school, I took an Adult Continuing Education creative writing class with Harriette Austin. I had to produce something, if not weekly, then every other week. It was one of the most productive writing times I've ever had. Harriette's encouragement didn't hurt, either.</p>

      <p>Now my deadlines are mostly self-imposed, and I've found great encouragement from the #amwriting, #Writers_Life, and #writechat communities on Twitter.</p>

      <h3>3. Doucement</h3>

      <p>My mother is Belgian, and when I was eleven-ish, her oldest sister as well as my late uncle came to visit. They lived in the French-speaking part of Belgium, and my very active toddler sister's antics were greeted with concerned, "Doucement, doucement!" or "Easy, easy!"</p>

      <p>When setting goals, I tend to think big but not realistically. It's good to remind myself that I'm only one person with 24 hours in my day, and sometimes I need to give myself a break.</p>

      <p>Once I get into it, the writing process goes Doucement, which means "sweetly." That brings me to…</p>

      <h3>4. Doing It</h3>

      <p>I forget that, at the end of a busy day when I'm emotionally and physically drained from work, I enjoy writing. <a href="/articles/success-is-a-process">The more I write, the less I procrastinate</a>, and the more I look forward to it. Sometimes the best solutions are simplest.</p>
    </section>

    <section>
      <p><em>Cecilia Dominic writes best with a cat perched on the back of her chair and a glass of wine or cup of coffee in front of her. She posts genre fiction, thoughts on writing, and reviews of self-published books at <a href="http://ceciliadominic.blogspot.com" rel="noopener">http://ceciliadominic.blogspot.com</a>, and she blogs about food and wine at <a href="http://random-oenophile.blogspot.com" rel="noopener">http://random-oenophile.blogspot.com</a> She has written three novels, revised two, and published none, but not for lack of trying. She also writes short stories and flash fiction and is a regular contributor to the Decatur News Online and The Penny Dreadful websites. Cecilia lives in Decatur, Georgia with two cats and a husband.</em></p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/share.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
