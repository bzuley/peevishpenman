<?php
$post_meta = [
  // No hero image for this post; listings, cards and schema fall back.
  'image'   => '',
  'slug'    => '10-modern-books-for-fans-of-isaac-asimov',
  'title'   => '10 Modern Books for Fans of Isaac Asimov',
  'excerpt' => 'Robots, impossible civilizations, troublesome ideas, and a few independent authors who deserve a place on your bookshelf.',
  'date'    => '2026-10-12',
  'added'   => '2026-10-12',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'speculativefiction, writingcraft',
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
  <p class="ppm-article-kicker">Reading List</p>
  <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
  <div class="ppm-article-meta">
    <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
      <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
    </time>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/article-tags.php'; ?>
</header>

    <section>
      <p>Isaac Asimov is a difficult author to replace. Not because nobody else writes about robots or galactic empires, but because Asimov had a particular habit of turning an intellectual problem into a story and then letting the consequences become everyone else&rsquo;s problem.</p>

      <p>The Three Laws of Robotics are a perfect example. On paper, they&rsquo;re sensible safeguards. In practice, they&rsquo;re an invitation to discover how many different ways a sensible rule can go wrong.</p>

      <p>Asimov didn&rsquo;t invent the fictional robot, either. <a href="/articles/first-robots-in-fiction">The first robots in fiction</a> showed up long before he did.</p>

      <p>His <em>Foundation</em> stories perform a similar trick on a much larger scale. What happens when we treat civilization as something that can be studied, predicted, and perhaps manipulated? And what happens when actual people refuse to behave like the mathematics says they should?</p>

      <p>Independent science fiction is an excellent place to look for writers willing to ask equally inconvenient questions. Without the same commercial expectations as a major publishing imprint, indie authors can take their speculative premises in some wonderfully peculiar directions.</p>

      <p>For this list, I went looking for something more specific than books that happen to resemble Asimov&rsquo;s work. I wanted independent reviews that actually mention him. The results range from direct critical comparisons to acknowledged homages, with a few less certain connections worth discussing.</p>

      <p>And yes, there&rsquo;s one very famous former indie at the end. He earned his place.</p>
    </section>

    <section>
      <h2>1. <em>Homeland</em> by Joseph Love</h2>

      <p>Some science fiction authors introduce an intelligent robot and immediately begin planning the explosions. Others wonder whether the robot might have a point.</p>

      <p>Joseph Love&rsquo;s <em>Homeland</em>, published by Marble Books, belongs to the second tradition.</p>

      <p>The novel explores artificial intelligence and the relationship between human beings and their increasingly sophisticated creations. What makes it especially interesting for Asimov readers is its apparent preference for moral and intellectual problems over mechanical spectacle.</p>

      <p><a href="https://www.kirkusreviews.com/book-reviews/joseph-love/homeland-95/" rel="noopener">Kirkus Indie</a> draws a direct comparison to Asimov&rsquo;s Elijah Baley novels, the detective stories in which robots, human prejudice, and social organization become inseparable. That is a much more useful recommendation than merely saying a book contains robots.</p>

      <p>Asimov understood that the most interesting thing about a robot isn&rsquo;t necessarily what it can do. It&rsquo;s what its existence forces us to reconsider about ourselves.</p>

      <p><strong>The Asimov connection:</strong> The Elijah Baley robot mysteries, artificial intelligence, and problem-solving through reason.</p>
    </section>

    <section>
      <h2>2. <em>The Weave</em> by Nancy Jane Moore</h2>

      <p>One of the peculiar pleasures of Golden Age science fiction is watching writers attempt to imagine entire civilizations from a handful of technological assumptions.</p>

      <p>Sometimes the assumptions are brilliant. Sometimes they&rsquo;re revealingly limited. Often they&rsquo;re both.</p>

      <p>Nancy Jane Moore&rsquo;s <em>The Weave</em>, published by independent feminist science fiction publisher Aqueduct Press, invites that kind of examination. Its speculative world brings questions of culture, technology, and contact into conversation with the traditions of classic science fiction.</p>

      <p>A <a href="https://strangehorizons.com/wordpress/non-fiction/reviews/the-weave-by-nancy-jane-moore/" rel="noopener">review in <em>Strange Horizons</em></a> explicitly invokes Asimov and Arthur C. Clarke when discussing the book&rsquo;s relationship to Golden Age conventions. Not every aspect of the comparison is complimentary, which is actually useful. Literary criticism should tell us something more interesting than whether a reviewer liked a book.</p>

      <p>The pleasure here is in encountering a writer who works within a recognizable speculative tradition while bringing different assumptions to it.</p>

      <p><strong>The Asimov connection:</strong> Golden Age worldbuilding, technological civilization, and the assumptions hidden inside our imagined futures.</p>
    </section>

    <section>
      <h2>3. <em>Refraction</em> by Wick Welker</h2>

      <p>Mars has been a convenient laboratory for science fiction for well over a century. It&rsquo;s far enough away to require imagination, but close enough that we can pretend our plans for it are practical.</p>

      <p>Wick Welker&rsquo;s independently published <em>Refraction</em> makes use of that territory with a story involving ambitious science, terraforming, and intelligent machines.</p>

      <p>One <a href="https://www.goodreads.com/en/book/show/57944658-refraction" rel="noopener">Goodreads reviewer</a> described it as exceptionally reminiscent of Asimov, emphasizing its science-centered characters and large speculative ideas.</p>

      <p>That comparison points toward an important distinction. Some books use science as scenery. Others make scientific inquiry part of the narrative machinery. A character discovers something, follows its implications, and discovers that the implications are considerably less cooperative than expected.</p>

      <p>Asimov was particularly good at the latter.</p>

      <p><strong>The Asimov connection:</strong> Scientific investigation, Mars, robotics, and ideas that drive the plot.</p>
    </section>

    <section>
      <h2>4. <em>I, Robot Tessa</em> by Joel R. Dennstedt</h2>

      <p>Naming a science fiction book <em>I, Robot Tessa</em> is not a subtle way of acknowledging your literary ancestors.</p>

      <p>But subtlety isn&rsquo;t always the point.</p>

      <p>Joel R. Dennstedt&rsquo;s novel takes up familiar questions about artificial intelligence, memory, and personhood. Its robot-centered premise enters territory that Asimov helped establish: the uncomfortable possibility that creating an intelligent machine also creates responsibilities its makers would rather not recognize.</p>

      <p>A <a href="https://literarytitan.com/2026/06/24/i-robot-tessa/" rel="noopener">Literary Titan review</a> identifies the book as an homage to Asimov and also brings Martha Wells&rsquo;s Murderbot stories into the conversation.</p>

      <p>That combination is intriguing. Asimov&rsquo;s robots are frequently caught in logical and ethical dilemmas. Wells&rsquo;s artificial protagonists are often more concerned with autonomy, exploitation, and the exhausting behavior of human beings.</p>

      <p>There&rsquo;s plenty of room between those approaches for a robot to develop an interesting personality.</p>

      <p><strong>The Asimov connection:</strong> <em>I, Robot</em>, machine consciousness, and the ethics of artificial personhood.</p>
    </section>

    <section>
      <h2>5. <em>The Experimental Notebook</em> by C. S. Boyack</h2>

      <p>Asimov&rsquo;s novels tend to get the attention, but his short fiction deserves equal consideration.</p>

      <p>A speculative short story can be a remarkably efficient instrument. Introduce one impossible circumstance, allow a few people to react to it, and then turn the reader&rsquo;s understanding of the entire situation inside out.</p>

      <p>C. S. Boyack&rsquo;s <em>The Experimental Notebook</em> offers a collection of speculative stories ranging across science fiction and the uncanny.</p>

      <p>A <a href="https://rosieamber.wordpress.com/2015/10/17/rosies-bookreview-team-rbrt-the-experimental-notebook-by-c-s-boyack-virgilante/" rel="noopener">review from Rosie&rsquo;s Book Review Team</a> invokes both Edgar Allan Poe and Asimov. It&rsquo;s an interesting pairing: Poe for the strange atmosphere and Asimov for the speculative imagination.</p>

      <p>Readers who enjoy the compact ingenuity of Asimov&rsquo;s shorter work may find this a more natural starting point than another enormous interstellar saga.</p>

      <p><strong>The Asimov connection:</strong> Short-form speculative storytelling, robots, and idea-driven twists.</p>
    </section>

    <section>
      <h2>6. <em>Proteus Rising</em> by Peter Dingus</h2>

      <p>The year is 2331. Humanity has spread through the solar system, Mars is becoming increasingly unwilling to accept Earth&rsquo;s authority, and a scientist named George Mills has been working on two projects that could make the political situation considerably worse.</p>

      <p>One is a self-aware quantum intelligence called Will. The other is a group of genetically engineered children who may represent an evolutionary successor to humanity.</p>

      <p>Naturally, the authorities are delighted.</p>

      <p>Peter Dingus&rsquo;s <em>Proteus Rising</em> combines planetary politics with artificial intelligence, genetic engineering, and the sort of scientific ambition that tends to frighten governments.</p>

      <p>In its <a href="https://www.kirkusreviews.com/book-reviews/peter-dingus/proteus-rising/" rel="noopener">review</a>, Kirkus Indie explicitly compares Dingus to Asimov, Frederik Pohl, and Arthur C. Clarke, emphasizing the combination of scientific knowledge and speculative imagination. The review also notes that some of the scientific exposition slows the action.</p>

      <p>For certain Asimov readers, that may sound less like a warning than an invitation.</p>

      <p><strong>The Asimov connection:</strong> Hard science fiction, artificial intelligence, and the political consequences of technological progress.</p>
    </section>

    <section>
      <h2>7. <em>Bodies of Evidence</em> by Jefferson Smith</h2>

      <p>Not every speculative idea requires a trilogy, a galactic map, and an appendix explaining the political history of six alien civilizations.</p>

      <p>Sometimes a short story is enough.</p>

      <p>Jefferson Smith&rsquo;s <em>Bodies of Evidence</em> belongs to the shorter end of the speculative-fiction spectrum. Its inclusion here comes from a <a href="https://jparsonswrites.wordpress.com/2013/03/25/indie-review-bodies/" rel="noopener">book-blog review</a> that associates Smith&rsquo;s storytelling with Asimov&rsquo;s talent for building a narrative around a central idea.</p>

      <p>That is an interesting quality to look for in independent fiction. The shorter the story, the less room there is to disguise an uninteresting premise with elaborate scenery.</p>

      <p>Asimov understood the value of a carefully arranged revelation. A successful speculative story can leave the reader with the peculiar sensation that the conclusion was inevitable, despite never having considered it before.</p>

      <p><strong>The Asimov connection:</strong> Concept-driven short fiction and the intellectual payoff.</p>
    </section>

    <section>
      <h2>8. <em>I, Robot Alien</em> by Joel R. Dennstedt</h2>

      <p>Suppose an advanced civilization sends a robot to help humanity recover from a catastrophic war. The robot is intelligent, durable, patient, and sincerely interested in our welfare.</p>

      <p>Unfortunately, he&rsquo;s dealing with human beings.</p>

      <p>In <em>I, Robot Alien</em>, Joel R. Dennstedt follows an extraterrestrial machine attempting to guide humanity back toward civilization over many generations. His interventions don&rsquo;t always work as intended. Helpful innovations can produce greed, violence, or entirely new varieties of foolishness.</p>

      <p><a href="https://www.kirkusreviews.com/book-reviews/joel-r-dennstedt-1/i-robot-alien/" rel="noopener">Kirkus Indie</a> identifies the book&rsquo;s acknowledged debt to Asimov and Robert Heinlein, including the Three Laws of Robotics.</p>

      <p>This is one of the more entertaining possibilities raised by Asimov&rsquo;s work: even a machine with admirable intentions cannot guarantee admirable results. Human civilization is not a tidy engineering problem, no matter how much its engineers might wish otherwise.</p>

      <p>The book&rsquo;s episodic structure and sardonic humor also distinguish it from a conventional robot adventure.</p>

      <p><strong>The Asimov connection:</strong> The Three Laws of Robotics, ethical intervention, and the unintended consequences of trying to improve humanity.</p>
    </section>

    <section>
      <h2>9. <em>Eclipse</em> by Herman Steuernagel</h2>

      <p>Space opera has always been interested in what happens when individual human beings become entangled in systems too large for them to understand.</p>

      <p>Empires, technologies, political movements, and civilizations all have a tendency to develop their own momentum. The people caught inside them may imagine they&rsquo;re directing events when they&rsquo;re mostly trying not to be crushed.</p>

      <p>Herman Steuernagel&rsquo;s <em>Eclipse</em>, part of the Fractured Orbit series, enters that broad tradition of independently published space fiction.</p>

      <p>Its connection to Asimov is less direct than the other books on this list. A <a href="https://thefantasyreviews.com/2023/08/17/6-science-fiction-books-better-than-foundation/" rel="noopener">review in <em>The Fantasy Review</em></a> mentions <em>Foundation</em> as part of the reviewer&rsquo;s reading background, rather than making a specific claim that <em>Eclipse</em> resembles Asimov&rsquo;s work.</p>

      <p>That distinction matters. An author&rsquo;s work shouldn&rsquo;t be credited with a comparison a reviewer never actually made.</p>

      <p>Still, readers interested in independently published space opera may find it worth investigating alongside the more explicitly Asimov-inspired titles.</p>

      <p><strong>The Asimov connection:</strong> A broader space-opera association, rather than a documented direct comparison.</p>
    </section>

    <section>
      <h2>10. <em>Wool</em> by Hugh Howey</h2>

      <p>And finally, the indie book that probably doesn&rsquo;t need me to introduce it.</p>

      <p>Hugh Howey&rsquo;s <em>Wool</em> began as self-published fiction and became an extraordinary commercial success, eventually inspiring the television series <em>Silo</em>.</p>

      <p>Its premise is wonderfully simple: humanity lives underground in an enormous silo, the world outside is supposedly uninhabitable, and the rules governing life inside are not particularly receptive to questions.</p>

      <p>You can probably see why an Asimov reader might be interested.</p>

      <p>A sealed society, an inherited explanation of how the world works, and a growing suspicion that the explanation is incomplete: these are promising ingredients for speculative fiction.</p>

      <p>Indie author Steven Konkoly compared Howey&rsquo;s storytelling to the traditions of Asimov, Heinlein, and Bradbury in an <a href="https://thethrillermind.substack.com/p/hughhoweywool" rel="noopener">early review</a>. The comparison is not about robots or galactic empires. It&rsquo;s about science fiction&rsquo;s ability to turn a compelling mystery into a larger examination of civilization and human behavior.</p>

      <p><em>Wool</em> may be the most familiar title here, but it also demonstrates something worth remembering about independent publishing: a book doesn&rsquo;t have to begin with a major publisher to find an enormous audience.</p>

      <p><strong>The Asimov connection:</strong> Closed societies, hidden systems of control, and speculative mysteries with consequences for an entire civilization.</p>
    </section>

    <section>
      <h2>What These Books Have in Common</h2>

      <p>It would be easy to conclude that the answer is robots. Asimov certainly wrote enough of them.</p>

      <p>But robots aren&rsquo;t really the common denominator here.</p>

      <p>The more interesting resemblance is a willingness to take an idea seriously enough to investigate its consequences. What would happen if an artificial intelligence developed a conscience? If humanity engineered its own successor? If an entire civilization accepted a false account of its history? If a perfectly reasonable rule produced an unreasonable outcome?</p>

      <p>Those are not merely technological questions. They&rsquo;re questions about logic, ethics, political authority, history, and our rather persistent habit of believing that a system we invented must therefore be a system we understand.</p>

      <p>Asimov was fascinated by those problems. So are many independent science fiction writers.</p>

      <p>And while the publishing industry has changed dramatically since the days of the early science fiction magazines, the attraction remains much the same: somewhere, somebody has thought of something thoroughly unreasonable and is determined to find out what happens if it&rsquo;s true.</p>

      <p>That seems as good a reason to open a book as any.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
