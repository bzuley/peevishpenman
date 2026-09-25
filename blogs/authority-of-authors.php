<?php
$post_meta = [
  'image'   => '/img/pig_and_goose.png',
  'slug'    => 'authority-of-authors',
  'title'   => 'The Authority of Authors',
  'excerpt' => 'Author and authority share a Latin root: someone who causes something to exist. A look at where that word comes from, who really controls the narrative, and how writers can question the power dynamics they put on the page.',
  'date'    => '2026-09-21',
  'added'   => '2026-09-21',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => 'writing, wordcraft, selfpublishing'
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
      alt="A pig and a goose facing off, an illustration of authority and power dynamics"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">On Writing &amp; Power</p>
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
      <p>&ldquo;Respect my authority!&rdquo;</p>

      <p>He's a cartoon dictator, but his tyranny made us laugh.</p>

      <p>Pure power dynamics are squarely inside the writer's wheelhouse, but how often do we step back and examine those systems? How often do we ask who or what bestows authority in the first place? What is authority?</p>
    </section>

    <section>
      <h2>Origin of Authors</h2>

      <p>I learned more from etymology, aka the origin of words, than from anything I studied when I was at university. Whenever I had to write a paper, I looked at where we got the main vocabulary words. France? Ancient Rome? I used those insights to write half my papers.</p>

      <p>My teachers thought I was so insightful, but actually I bought a dictionary of word origins at a used bookstore.</p>

      <p>Let's look at authority.</p>

      <p>Words carry histories with them. Their meanings develop, narrow, expand, and sometimes drift, but their origins often reveal the structure underneath the idea. Authority is a great example.</p>

      <p>Authority and author ultimately come from the same Latin root: <em>augere</em>, meaning &ldquo;to increase,&rdquo; &ldquo;to enlarge,&rdquo; or &ldquo;to cause to grow.&rdquo;</p>

      <p>From <em>augere</em> came <em>auctor</em>&mdash;an originator, creator, founder, promoter, or someone who causes something to come into being.</p>

      <p>From <em>auctor</em> we get author.</p>

      <p>An author, in its oldest sense, is therefore not merely someone who writes. An author is someone who causes something to exist.</p>

      <p>And from <em>auctor</em> also came <em>auctoritas</em>: the influence, standing, or authority possessed by the person who originates, establishes, or gives something weight.</p>

      <p>Authorship establishes authority.</p>

      <p>I feel so much more comfortable calling myself a writer.</p>

      <p>This isn't the first time a word's history has taken over one of these posts. If you like this sort of etymological rabbit hole, I went down a similar one in <a href="/blogs/wasteland">Wasteland</a>.</p>
    </section>

    <section>
      <h2>Under the Shadow of Authority</h2>

      <p>People associate authority with coercion, aggression, even violence. Power. You look at leadership today, and it's hard to see the mandate from the people. The institutional and financial power&mdash;the war machine behind them&mdash;is ever present.</p>

      <p>On the level of the individual, our world is shaped by influence and social reach, a more subtle authority.</p>

      <p>But we're living in a time when it's become ever more clear that the ones who control the narrative are the ones who set the rules for the game we all have to play. And while we speak of the almighty algorithm as if it exists without an author, its programmers have more influence over our lives than even our friends or family.</p>

      <p>How many times this year did you share a random video, but you sent it to someone who had already seen it?</p>

      <p>&ldquo;Lol, I saw that one.&rdquo;</p>

      <p>In a world of 8 billion people, we're all watching the same headbanging cockatoo.</p>
    </section>

    <section>
      <h2>Author of Your Life</h2>

      <p>For me, it was a paradigm shift when I became an author. I had been a skilled artist, and I hated English, but I wanted a broader palette to work upon the theater of the mind. Had I been a billionaire, that would have been a well-connected, well-financed paradigm shift.</p>

      <p>We have tiny lives. But one of the greatest things about being an author is when you realize that you can edit your own character sheet. You can't choose what you are, but you can decide who it makes you.</p>

      <p>And I've done this successfully&mdash;many times. I remember twenty years ago, I wrote in my journal that I am an organized person. It wasn't true. I was surrounded by negligence and dishes you had to soak. It became true because I chose it.</p>

      <p>We write the important chapters of our lives.</p>

      <p>And when we look at the authorities that control the algorithms on social media, the corporations and billionaires that set the tone for our insecurities, we realize these are people who chose less for us and more for them. We exist behind an invisible fence. We're managed in every stage of life.</p>

      <p>As much as you can, write your own story.</p>

      <p>I wrote about what that choice actually looked like for me in <a href="/blogs/confirmed-independent-publisher">Confirmed Independent Publisher</a>&mdash;five years of false starts before I let myself claim the title.</p>
    </section>

    <section>
      <h2>The Power of the Pen</h2>

      <p>But as authors, power structures exist in our writing whether we intended them to be visible or not. Sometimes, we assume dynamics between characters that readers accept because they feel so ordinary and invisible in our own lives.</p>

      <p>But they can be questioned to great effect.</p>

      <p>In <em>1984</em>, the Party's power does not rest only on police, prisons, and torture. It controls language, history, and even the boundaries of what can be thought. Authority becomes strongest when it can define reality itself.</p>

      <p>In <em>The Handmaid's Tale</em>, authority is distributed through religion, law, gender, clothing, ritual, and language. Gilead does not simply tell people what to do; it creates a world in which every social interaction reminds them who decided what they could be.</p>

      <p>In <em>Animal Farm</em>, the pigs begin with no special authority beyond their intelligence and ability to organize. Merit. Their power grows gradually through control of information, literacy, food, and eventually force.</p>

      <p>The interesting question is not simply why Napoleon becomes a dictator, but why everyone else continues to recognize his authority.</p>

      <p>Authority is quieter in <em>Pride and Prejudice</em>. Wealth, inheritance, gender, family reputation, and social rank determine who may speak freely, who must defer, and who has the luxury of ignoring convention.</p>

      <p>In <em>The Lord of the Rings</em>, Aragorn's authority is partly inherited, but inheritance alone is not enough. His kingship has to be recognized through conduct, sacrifice, competence, and the willingness of others to follow him. Tolkien distinguishes between possessing a claim to authority and actually being worthy of it.</p>

      <p>In <em>The Hunger Games</em>, the Capitol maintains authority through fear, spectacle, and control of the narrative. Katniss becomes dangerous when people begin reading her actions differently from the story the Capitol wants them to believe.</p>

      <p>In the <em>Foundation</em> television series, the Cleons embody authority through continuity. Their genetic dynasty turns one ruler into an institution, making power appear permanent, inevitable, and larger than any individual man. Dawn. Day. Dusk. Rinse and repeat.</p>

      <p>And in <em>Dune</em>, almost every major form of authority overlaps: religion, bloodline, wealth, control of resources, military power, prophecy, and narrative. Paul becomes the center of a story that other people begin telling about him, and that story acquires an authority of its own.</p>

      <p>This is the same territory I dig into in <a href="/blogs/the-magician">The Magician</a>: knowledge as power, and how quickly understanding a system curdles into believing you're entitled to run it.</p>
    </section>

    <section>
      <h2>The Evolution of Power Dynamics</h2>

      <p>The systems are often more interesting than the tyrant standing at the top of them. I've recently been watching <em>Orange Is the New Black</em> and <em>Game of Thrones</em>. No reason, but I enjoy characters whose authority is dispersed and changeable.</p>

      <p>It's been a trend in the 21st century to decentralize our examination of power. People are interested in mob dynamics and increasingly see the tyrant as a puppet rather than the puppet master.</p>

      <p>Maybe it's always been that way and we only now have access to view the evidence. Maybe there is only one author who hides and manipulates people in the shadows. Maybe it's our reptilian overlords.</p>

      <p>The only thing I know for sure is that we're never going to find out, but we can all be more deliberate about the stories we write.</p>

      <p>We can all be authors.</p>

      <p>If you want help writing your own story on the page, the free <a href="/pages/writer-secret-society">Writer Secret Society Handbook</a> is a good place to start.</p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
