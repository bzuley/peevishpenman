<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => 'break-it-down-to-build-it-up',
  'title'   => 'Break It Down to Build It Up',
  'excerpt' => 'Molly Field on getting unstuck: write what you mean in short hits, let it flow, step away to draw something, and fall back on the five Ws.',
  'date'    => '2013-01-07',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'Molly Field',
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
  <p class="ppm-article-kicker">Getting Unstuck</p>
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
      <p>When our fearless leader, Carrie Bailey suggested a prompt for any willing and able and (in my case head-cold -afflicted Peevish Penman), I was all in.</p>

      <p>The prompt however, left me thinking more about how to consider it than to actually write to it. The prompt, which I going to chew up as many words as I can by referencing it here is this: "think of a problem you've encountered as a writer and then detail a solution for it."</p>

      <p>This head-cold really stinks, but it has come in amazingly handy for this prompt because while NyQuil gives you audacious and coo-coo dreams, DayQuil gives you the confidence to make you think you can achieve them. For instance, writing this piece on solving a problem in my writing.</p>
    </section>

    <section>
      <h2>When You're Too Close to Your Own Writing</h2>

      <p>Here's where my flip attitude about this topic ends. Despite the genré (humor, suspense, fiction, non-fiction), writing is serious business: a writer's word choice, phrasing, tempo and skill tells a reader a lot more about the writer than a casual conversation. We wear our hearts on our fingertips and readers get the gist of who we are rather quickly.</p>

      <p>That said, sometimes we don't want to be so obvious. My "encountered problem" would be my relationship with what I've written. Sometimes I'm too close and I get stuck. Every writer experiences a problem in what they're writing. Even non-writers. Consider the note to a child's teacher or a friend you're visiting.</p>

      <p>For the note to the teacher, sometimes it's not so simple and I can tell you as a parent with full access to any manner of writing tools, a paper and pen is always best when it comes to those missives. When I sit at the computer, I am suddenly Jane Austen and Leo Tolstoy: wanting to sound intent but clever and engaging.</p>

      <p>To wit:</p>

      <blockquote>
        <p>"Dear Mrs. Hausenfraussenagle, It is always believed that a child who comes to school sleepy is one wont of more... sleep, of course! Therefore, I regret to impart to you my dear educator, that Mortimer slept past the rooster's crow this dusky Monday morn and I beg your pardon for the inconvenience. We are a happy family..."</p>
      </blockquote>

      <p>A paper and pencil solves this immediately:</p>

      <blockquote>
        <p>"Dear Mrs. H: Mort slept in this morning. We all did. Long, fun weekend. Please accept our regrets. Have a great day."</p>
      </blockquote>
    </section>

    <section>
      <h2>Start With Short Hits</h2>

      <p>Still with me?</p>

      <p>Grrr....Yes, but Molly, why are you talking about a tardy note...?</p>

      <p>Here's what I'm getting at: when I am stuck...really stuck, I take a pen to paper. I write out what I mean to say in short hits. Consider the tardy note as a piece of a story:</p>

      <p>Kid sleeps in.<br>
      Late to school.<br>
      Family reference.<br>
      Regret.</p>

      <p>Now, what you do with that is up to you: if we're talking about a fictional work, some sort of <a href="/article-tag?tag=archetypes">character development</a>, then you write in / include your modifiers: mother is hungover; father is sick or on travel; older sibling left for job before school without waking anyone else. I decided, because I'm so happy-go-lucky, that we'd have a family-in-crisis scenario.</p>

      <p>Color it in... (this is all off the top of my OTC-grade cold remedy -influenced head, so keep your rotten vegetables at bay):</p>

      <blockquote>
        <p>When Susan awoke in the morning, her head was the heaviest piece of her body. The bedsheets and blankets were twisted by her feet. A bout of crying and fighting with her bottle demons stole precious hours from her otherwise typical night's sleep. Her little boy, Mort, was in his hoodie, snoring on the tattered sofa, his mouth open to the page in the library book he'd fallen asleep upon. The sun was barely cresting the scant treetops on the reservation, but slivers of light made their way through the holes in the drawn blinds. It was going to be a bright day, Susan thought about her sunglasses, where were they? She ambled out of her bed, slipped into her flip-flops, and felt her way to the kitchen where she started a pan of hot water to cook for the coffee. The clanging of the silverware in the double-wide bounced off the prefab walls, rustled Morty, whose cherubic face popped over the back of the sofa to see what his mother was up to. A note on the counter from Mitch, her older son announced his departure for his job at the bagel shop. She needed to get Mort off to school, but he would be late, again.</p>
      </blockquote>

      <p>There. It obviously needs some editing, but...</p>

      <p>Break it down to build it up.</p>
    </section>

    <section>
      <h2>Let It Flow</h2>

      <p>Another tactic I've used is stream of consciousness writing. Where you just sit and write -- either with pen and paper or at the keyboard and just go. Oftentimes for me anyway, I've got a lot on my mind, so just letting it rip can be therapeutic. That piece about Susan and Morty just flowed out right now. I know this about me: I can't tell a story, but I can write a story.</p>
    </section>

    <section>
      <h2>Step Away and Draw Something</h2>

      <p>Another tip I can share is this: STOP. Get up and leave. Go for a walk. Listen to some music that isn't writerly; get a sheet of paper and a pencil and go to another room and MAKE YOURSELF draw a picture of what you're looking at. Pick your image and DO IT. You might surprise yourself with how good you might be or... you might confirm your opinion that you suck at illustration. I got an iPad for Christmas and last night I was feeling like fetid garbage and bored to tears so I drew this on it:</p>

      <!-- TODO: Molly's iPad drawing belongs here; the image was not included in the pasted text. -->

      <p>And here I am today, all OTC'd up and ready to go. Don't judge. The point is: you're trying something new and you're developing new synapses in your brain which will help you be more creative. Other than that or saying have a go at performance art, I'm out of suggestions.</p>
    </section>

    <section>
      <h2>Back to the Five Ws</h2>

      <p>Sometimes getting back to the elemental basics, the five Ws (Who, What, When, Where, Why) will get you unstuck. Sometimes a section might need to be written just to get you going again. To borrow from Stephen King, you might have to <a href="/articles/perfect-murder-editing-screenplay">kill the darlings on final edits</a>, but those moments of breaking down, those moments of distillation are essential to get you to move forward. I realize that I could've broken down this entire post to the very paragraph I'm closing right now, but then it wouldn't have been nearly as charming, now would it?</p>

      <p>I hope this helped. I'm going back to bed.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
