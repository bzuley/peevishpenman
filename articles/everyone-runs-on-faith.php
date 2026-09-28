<?php
$post_meta = [
  'image'   => '/img/general/the_alter_of_science.png',
  'slug'    => 'everyone-runs-on-faith',
  'title'   => 'Everyone Runs on Faith, Even Scientists',
  'excerpt' => 'Ancient people weren\'t less intelligent, just less informed. On volcanoes, the problem of induction, and why faith in science resembles medieval faith.',
  'date'    => '2016-10-26',
  'added'   => '2026-09-27',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'worldbuilding, consciousness, writing',
  'author'  => 'OA Allen'
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
  <meta name="author" content="<?php echo htmlspecialchars($post_meta['author']); ?>">

  <link rel="canonical" href="https://peevishpenman.com/articles/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/articles/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">

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
      width="1536" height="1024"
      alt="A scientist in a lab coat and safety goggles kneels with raised arms before a candlelit altar holding a glowing blue flask, beneath a golden sunburst atom symbol and DNA banners"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">History, Belief &amp; Worldbuilding</p>
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
        I model a lot of my writing on Bronze Age and Stone Age mythology. People living today may have changed
        considerably on a physical level, but I believe the biggest difference between us and our ancestors lies in
        our ability to store information outside of our own minds.
      </p>

      <p>Writing. Records. Books. Decent filing systems. Databases.</p>

      <p>
        Otherwise, we very much resemble the people who lived at the beginning of recorded history, although most
        of us want to believe that our intelligence, our humanity, our civilization outshines cultures that
        practiced human sacrifice or cannibalism. We're much better than that, right? Not biologically. No. We
        aren't superior; we just communicate better. We can share photos of our cats anywhere. Instantly. Ancient
        Egyptians would be SO jealous.
      </p>

      <p>
        As a writer, I like to challenge myself to imagine how people without our access to information reasoned
        about the world around them. I have one main guideline: I assume that people living then were as
        intelligent as people living today. You can take that however you want.
      </p>
    </section>

    <section>
      <h2>No One Is Objective About the Origins of Civilization</h2>

      <p>
        While researching <a href="/pages/bright-dark">The Bright Dark</a>, a post-apocalyptic story, I was ravenously
        devouring documentaries about Mesopotamia, and I kept running into the same problem.
      </p>

      <p>
        On one end of the spectrum, you find archeologists asserting that what cannot be proven didn't happen. On
        the other, you find laypeople, sometimes with degrees attached, trying to show that the evidence supports
        the events in their religious texts. Everyone has an agenda. Objectivity is rare when it comes to this
        region, because its early myths and cultures gave rise to Judaism, Christianity, and Islam.
      </p>

      <p>
        The academics interviewed in documentaries tend to maintain complete skepticism and avoid acknowledging
        any historical value in the writings later collected into religious texts. They're quick to cry
        "Confirmation bias!" at anyone who connects an event in the Bible or Quran to archeological evidence in
        the Middle East.
      </p>

      <p>
        Both sides are guilty of treating these writings as something other than what they are: documents from an
        early era of human history. Ignoring those records is as bad as relying on them entirely. And the biases
        show up in odd places. Writing was invented in Mesopotamia around 3200 BCE, in China around 1200 BCE, and
        in Mesoamerica around 600 BCE. People readily accept that ancient Mexico invented writing independently,
        but just as quickly assume China must have been taught. It had two thousand years to filter over there, but
        the distance between Asia and Alaska? Impassable!
      </p>
    </section>

    <section>
      <h2>If You'd Never Seen a Volcano</h2>

      <p>
        I was watching the British series <em>Secrets of the Bible</em>, which, refreshingly, lacked the American
        passion for either fundamentalist interpretation or aggressive debunking. It focused less on conclusions and
        more on the journey each layperson and archeologist took. Most episodes proposed contradictory solutions.
        It seems everyone wants the story of Exodus to be true—unless you're an academic, in which case the
        Israelites borrowed it from another culture.
      </p>

      <p>
        As a child, I remember being amazed by the poor special effects in Cecil B. DeMille's <em>The Ten
        Commandments</em> (1956), where a pillar of fire appears out of nowhere and somehow keeps Egyptian chariots
        from steering around it. A man with the staff and robe of a wizard performs some magic. I could hardly tell
        Moses from Merlin or Gandalf.
      </p>

      <p>
        The actual text of Exodus describes a god leading the freed Hebrews with a pillar of cloud by day and a
        pillar of fire by night. DeMille gave us fire in the daytime. No smoke. No leading. A better reading might
        be that the people in the story were following a massive volcanic eruption. Why not? If you'd never seen or
        heard of a volcano, wouldn't you take it for something incredibly awesome, possibly worth following?
      </p>

      <p>
        Natural wonders are sublime because they force us into a higher awareness of our own insignificance. Even
        the destructive forces of floods, tornadoes, and earthquakes demand respect. They pull us out of our petty
        disputes and place our lives in a broader context. People without seismology or geology would have
        reasoned about that experience with the best tools they had. So do we.
      </p>
    </section>

    <section>
      <h2>The Problem of Induction</h2>

      <p>I believe we all rely on faith to interpret what we cannot explain.</p>

      <p>
        Many people firmly believe that the scientific method can and will explain everything eventually. That
        sounds like good reasoning, but it's actually inductive reasoning: science has provided many explanations in
        the past, so we induce that it will keep doing so. Unfortunately, the only way to prove that induction is
        valid is with induction, which philosophers call the problem of induction. Some argue that science doesn't
        really rely on induction, but those arguments lean heavily on semantics.
      </p>

      <p>
        And no matter—induction works. It just isn't perfect. Most people happily accept that current scientific
        theories don't represent perfect knowledge of the world. What's much harder to accept is that the belief
        that science will eventually answer everything is a strong conviction, derived from induction, and similar
        in almost every meaningful way to religious faith.
      </p>

      <p>
        I'm not trying to undermine science in favor of religion. I'm trying to show that all belief systems
        depend on rational thinking, creative insight, and faith in uncertain theories, operating within the
        information available to them.
      </p>
    </section>

    <section>
      <h2>Science Is Our Medieval Christianity</h2>

      <p>
        Today, old religions are typically viewed as quaint traditions or irritatingly backward thinking. Faith in a
        god is up for debate. Questioning faith in the scientific method, or in the community of scientists who are
        venerated much like the saints of medieval Europe, is far more likely to cause a controversy. Science makes
        room for older religions under the umbrella of psychology, as something good for mental health, but there is
        an intense unwillingness to consider that science itself could someday be replaced as the most
        unquestioned philosophy. Replaced by something new. Not something old.
      </p>

      <p>
        Let's face it. Science does make better technology, and it explains things better than religion. It's a bit
        weak on morality, but it beats monotheism for life-saving technology. Besides, if you really need some
        spirituality, most scientists don't feel threatened by archaic religions.
      </p>

      <p>
        That is exactly what believing in Christianity must have felt like a thousand years ago. No cannibalism. No
        human sacrifice. The weak and the poor had an honored position. Christianity brought a code of laws and
        behavior that required a stable social order. And it wasn't typically threatened by pagan beliefs and
        practices; it absorbed them to make people comfortable.
      </p>

      <p>
        So we shouldn't compare the faith of a medieval knight to the faith of a Christian today. We should compare
        it to our faith in science. When someone who believes in science runs into something that challenges it,
        they don't reject it; they try to make sense of it within science. A medieval Christian would have done the
        same. Christianity was progress. It was the framework of their civilization, and they would have assumed
        that anything and everything could be explained within it.
      </p>

      <p>
        People have always been more flexible than they claim. Scientists pray when their car crashes. Churchgoers
        attend services out of habit while quietly trusting science and rationalizing it with humanism. Agnostics
        find spiritual community in neo-pagan movements. We are, if anything, very complicated—and so was humanity
        at the beginning of history.
      </p>

      <p>
        That's the rule I try to follow when I write about the ancient world: the people there weren't dumber than
        us. They were just working with less information, and a lot of faith. Same as us.
      </p>

      <p>Political ideology runs on the same fuel. I watched that particular flavor of belief take hold in real time and wrote about it in <a href="/articles/tell-me-a-big-lie">Tell Me a Big Lie</a>.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
