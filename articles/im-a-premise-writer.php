<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => 'im-a-premise-writer',
  'title'   => 'I\'m a Premise Writer',
  'excerpt' => 'Rob Hines on being a Premise Writer, someone with a billion ideas and very few finished stories, and why outlining is the cure.',
  'date'    => '2013-08-22',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
  'author'  => 'Rob Hines',
  'guest_post' => true,
  'author_link' => 'http://www.twitter.com/robhineswriter'
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
  <p class="ppm-article-kicker">Planning &amp; Outlining</p>
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
      <p>That’s me. I’m a Premise Writer.</p>

      <p>It sounds like a real job, doesn't it? <strong><em>Premise Writer</em></strong>. It almost sounds like you could make money doing that.</p>

      <p>Nope. Not even remotely.</p>

      <p>Premise writing is what I've been doing since I decided to start writing fiction, and I've only recently come to grips with this label. It’s a sickness, kind of like rabies, I think. You can cure it, but it takes some gnarly treatment and you should probably avoid people for a month or so.</p>
    </section>

    <section>
      <h2>Are You a Premise Writer?</h2>

      <p>Are you a premise writer? Ask yourself these questions:</p>

      <ol>
        <li><strong>Do you have <a href="/articles/too-many-ideas">a billion ideas</a> written in piles of spiral notebooks and/or an incredibly cluttered note-taking app on your phone?</strong></li>
        <li><strong>Have you written any more than about a page or two of any one idea?</strong></li>
        <li><strong>Do you waste time at work organizing your ideas in fun Google Drive folders instead of actually turning them into thought-out stories?</strong></li>
        <li><strong>When you do write a story, do you tend to jump right to the “million dollar idea” and linger there for a while before jumping right to the end?</strong></li>
        <li><strong>Have you had a story about a problem gambler who acquires a golden touch rejected because an editor feels “it all comes too easily” meaning the premise happens with no real conflict or consequences?</strong></li>
      </ol>

      <p>Okay, that last one is pretty much exclusive to me, but if you feel any sympathy pains for the other four, you may be a Premise Writer too. Hope is not lost, though. You and I can break from a fate of being buried in an avalanche of hoarded notebooks full of neglected concepts. The key is (cue dramatic music) <em>OUTLINING!</em></p>
    </section>

    <section>
      <h2>Why I Plan Everything Else I Write</h2>

      <p>Yep, there they go. The artists are leaving now. The ones who want their writing to be an expression of their inner beings have given up on me.</p>

      <p>Okay, the rest of you? You’re professional writers. You’re the ones who know you have to plan a project to achieve consistent results (read: <a href="/articles/love-of-money-self-publication">get paid to write</a>)</p>

      <p>I’m not dissing anyone who doesn't plan their writing. Hell, until about a week or two ago, I WAS one of those people. At least, I was that way in my fiction writing. My revelation came when I realized that I’m more than just a fiction writer. I’m a corporate writer too. I write copy for advertising, corporate blog articles, web copy, and even <a href="https://www.3riversfcu.org/media/doc/CU3__Issue_1.pdf" rel="noopener">a corporate comic book!</a> And you wanna hear a secret? I plan each of those projects before I write them. Why? Because I like to eat horrible food and my paycheck allows me to continue buying said horrible food. If I'm that committed to horrible food, why shouldn't I be just as committed to fulfilling my writing dream?</p>

      <p>My cubicle-mate at the above-referenced day job is also a writer and he has published two non-fiction books (if you’re a baseball fan, you can buy one of them <a href="http://www.amazon.com/Baseball-Fort-Wayne-IN-Images/dp/073854129X/ref=sr_1_2?ie=UTF8&amp;qid=1377201046&amp;sr=8-2&amp;keywords=baseball+in+fort+wayne" rel="noopener">here</a>). He’s a relentless planner when he writes and I guess I thought there were different rules for non-fiction. There aren't. Well, except for the whole factual thing.</p>
    </section>

    <section>
      <h2>Put the Whole Story on the Page</h2>

      <p>No matter what you write, the best way to make writing more efficient and less torturous is to effectively outline your plot and your <a href="/article-tag?tag=archetypes">characters</a>. I’m not talking about the high school research paper method with Roman numerals and A’s and B’s and all that. All I’m suggesting is you know what’s going to happen from start to finish as well as the major events in between. It may be a bulleted list. It may be a detailed list of acts and scenes. It may even be a mind map that starts with a central theme and bursts in all different directions. The key is <a href="/articles/break-it-down-to-build-it-up">putting your whole story on the page</a> before you try to write 100,000 words around it.</p>

      <p>I’m not saying it’s for everyone. I know many great writers just sit and write. Good for them. I’m a Premise Writer. If I do that, I will do a fantastic job of writing down a plot with terribly boring characters and little to no exposition or resolution. In other words, I will suck.</p>

      <p>So now I’m outlining. I’m giving myself a chance to hear the story from start to finish and understand my characters so I have a blueprint to guide my actual writing. I’m giving myself a chance to not suck.</p>

      <p>Well, at least not suck as much.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/share.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
