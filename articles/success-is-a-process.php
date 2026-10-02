<?php
$post_meta = [
  'image'   => '/img/success-is-a-process.webp',
  'slug'    => 'success-is-a-process',
  'title'   => 'Success Is a Process',
  'excerpt' => 'Why finishing a book can feel scarier than starting one, and how shy writers can turn the last page into a first step toward readers, with advice from Jody Aberdeen and Rob Hines.',
  'date'    => '2013-03-04',
  'added'   => '2026-09-28',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writing, selfpublishing',
  'author'  => 'OA Allen'
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
  <meta property="og:image" content="https://peevishpenman.com/img/success-is-a-process-social.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/success-is-a-process-social.jpg">
  <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
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
      alt="A frightened writer clutching her notebooks runs from a giant golden money bag with arms and sneakers, coins and loose pages flying behind her"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Writing, Fear &amp; Success</p>
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
      <p>When I was young, my mother told me that my father, though a talented artist, never finished anything he started. And if he did, he finished it too quickly. She considered him a failure, and her words grew into a phobia that clung to every creative project I ever started. I became convinced that I, too, would never know how or when to finish.</p>

      <p>Twenty years, one kid, two degrees, and a thousand different hairstyles later, I sat down to do the final edits on a novella called <em>Bungle of Oz</em> and fell apart. I wrote a long-overdue letter to an ex. I cried. I ate donuts. I called my sister. I tweeted. I cried at the part of <em>Harry Potter</em> where Harry walks into the forest. I ate a pineapple. I did everything except open the file.</p>

      <p>I wasn't stressed. My life was pretty good. So why was the finish line so terrifying?</p>
    </section>

    <section>
      <h2>The Fear at the Finish Line</h2>

      <p>Finishing is hard for the same reason ending a relationship or eating the last donut in the box is hard. It's hard to let go, especially if the donuts have coconut on them. But the real fear is what comes next. The end of a book is also a beginning: the moment you stop being only a writer and start being a bookseller.</p>

      <p>That's when the familiar monsters show up. <strong>Failure</strong>: the told-you-so crowd, the friends who might drift away, the people I'd never get to prove wrong. And <strong>success</strong>, which frankly scares me less than yachts do. Everyone knows the success committee eventually issues you a yacht, and mine would catch fire. The quieter fear is that success wouldn't fix anything. I'd still get pimples, still fill out forms, still lose people I love.</p>

      <p>Neither of those was the root, though. The root was a belief I picked up as a child: that finishing is harder than starting, and that creative people ruin things at the end. It isn't anyone's fault. But once you see a belief like that clearly, you can put it down.</p>
    </section>

    <section>
      <h2>Only Not Writing Is Failure</h2>

      <p>Here's the thing I knew all along but had to relearn: a writer can't really fail. The only failure is not writing. And there's no single day when a writer "arrives." Until I've outsold the authors of the Bible, a popular anthology with a few thousand years' head start on me, I can always set the bar higher.</p>

      <p><strong>Success is a process, not a destination.</strong> Finishing a book isn't a verdict on your worth. It's a step, and the next one is getting your work into the hands of people who'll love it. For a lot of us, that's where the fear comes back, wearing a name tag and holding a glass of cheap wine at a networking event.</p>
    </section>

    <section>
      <h2>Show Up as Yourself</h2>

      <p>Much of business culture assumes you have to be outgoing, charming, and charismatic to make it. For shy writers, that idea isn't just intimidating. It's repulsive, because it suggests we have to become someone else to succeed. Novelist Jody Aberdeen, a self-described shy writer, rejects that premise:</p>

      <blockquote>
        <p>Writers thrive most whenever they express themselves authentically. That's why it's important to walk into every networking event as yourself. If you're shy, be shy. If you hate small talk, don't do small talk.</p>
        <p>&mdash; Jody Aberdeen</p>
      </blockquote>

      <p>His practical advice is to learn networking the way you learned to ride a bike: by doing it. Find two open events a month, ideally two weeks apart so they become routine. Writers' groups, book clubs, and local marketing meetups are all good places to start. And the pressure is lower than you think:</p>

      <blockquote>
        <p>Show up without attachment to any particular outcome. Your only goal is to get in the room.</p>
        <p>&mdash; Jody Aberdeen</p>
      </blockquote>

      <p>You don't need a clever icebreaker, because everyone there came for the same reason you did. Say hi, or don't, and let people come to you. If you want to read up between events, Jody recommends Dale Carnegie's <em>How to Win Friends and Influence People</em> and Nicholas Boothman's <em>How to Make Someone Like You in 90 Seconds or Less</em>. Most of all, he says, be gentle with yourself.</p>
    </section>

    <section>
      <h2>Talk to Readers, Not Just Writers</h2>

      <p>Once you're in the room, or on the feed, the next question is who you're talking to. Rob Hines, who spent decades studying consumer habits in sales, media, and marketing, points out a trap many of us fall into. We follow other writers because they're our peers and they teach us things. But writers are busy writing. Readers are the ones who buy books.</p>

      <blockquote>
        <p>Following writers is great for learning. Following READERS is best for EARNING.</p>
        <p>&mdash; Rob Hines</p>
      </blockquote>

      <p>Rob's first move after deciding to write was to follow authors, and it paid off in knowledge and friendships. It's how he found Peevish Penman. But he knew that once a book came out, he'd need to shift his attention to people who list reading as their favorite pastime. Online, that means readers' communities. Offline, it means libraries, festivals, trade shows, and anywhere else readers gather.</p>

      <p>Then comes the harder part: finding <em>your</em> readers.</p>

      <blockquote>
        <p>Time to admit an uncomfortable truth. Not everyone is going to dig your work. At least, not right away.</p>
        <p>&mdash; Rob Hines</p>
      </blockquote>

      <p>Genre writers have an advantage here. There are forums, book clubs, and groups built around nearly every niche, full of fans thrilled to talk to an actual author of the thing they love. General fiction takes more conversations to find its crowd, but the crowd exists.</p>
    </section>

    <section>
      <h2>Luck Is a Bonus, Not a Benchmark</h2>

      <p>Readers' tastes shift constantly. Before zombies went mainstream, zombie fiction was a small, devoted niche. The writers who cashed in were the ones already writing it when the wave hit. That means the thing you love to write, which is probably the thing you write best, could catch on at any moment. Rob's caveat:</p>

      <blockquote>
        <p>Don't ever underestimate the chances of making new fans. It can happen in an instant. But this is not how you should measure your success.</p>
        <p>&mdash; Rob Hines</p>
      </blockquote>

      <p>That brings me back to where I started. If success were a single moment, whether a viral post, a bestseller list, or a flaming yacht, then every unfinished draft and every quiet book launch would count as failure. But success is a process. It's opening the file. It's walking into the room as yourself. It's finding one reader who gets it, and then another. In Rob's words, all you need is "a solid strategy, a little persistence (read: a crapload of persistence), and an undying love for what you do."</p>
    </section>

    <section>
      <h2>The Little Typewriter That Could</h2>

      <p>My sister's advice during my meltdown was simple, and wise the way only an older sister can be: take a break. Wrestle the neuroses into submission, then go back and finish. Starting a new project soon doesn't mean you can't relish the end of this one and give it the attention your readers deserve.</p>

      <p>My mother also read me <em>The Little Engine That Could</em>. I loved that book. But the train didn't have an artistic temperament. Where was <em>The Little Typewriter That Could</em>?</p>

      <p>I think I can. I think I can. I think I can.</p>

      <p>Nah, it's not working. I'll just reward myself with donuts when I finish. That's motivation.</p>

      <p>If you're at the stage where finishing turns into publishing, the free <a href="/pages/writer-secret-society">Writer Secret Society Handbook</a> collects what I wish I'd known. My own long, messy road to going independent is in <a href="/articles/confirmed-independent-publisher">Confirmed Independent Publisher</a>.</p>

      <p><em>With thanks to Jody Aberdeen, author of the sci-fi romance</em> Convergence<em>, and Rob Hines, whose advice first appeared as guest posts here on Peevish Penman.</em></p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
