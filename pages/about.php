<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About OA Allen – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="OA Allen is the pen name of Carrie Bailey Allen — science-fiction writer, artist, researcher, and former librarian whose work circles belief, power, technology, folklore, and conspiracy.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/pages/about.php">

  <link rel="stylesheet" href="/styles/main.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    .ab-page {
      background: var(--ppm-obsidian);
      color: var(--ppm-text-main);
      overflow-x: hidden;
    }

    .ab-page * { box-sizing: border-box; }

    /* ---------- Hero ---------- */
    .ab-hero {
      position: relative;
      padding: clamp(4rem, 12vw, 7rem) 5% clamp(3rem, 8vw, 5rem);
      text-align: center;
      overflow: hidden;
      background:
        radial-gradient(ellipse at 50% 0%, rgba(117, 255, 232, 0.14), transparent 60%),
        radial-gradient(ellipse at 85% 100%, rgba(124, 111, 175, 0.12), transparent 55%),
        var(--ppm-obsidian);
    }

    .ab-hero-content { position: relative; z-index: 1; }

    .ab-kicker {
      display: inline-flex;
      align-items: center;
      gap: 0.6em;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.78rem;
      font-weight: 500;
      letter-spacing: 0.32em;
      text-transform: uppercase;
      color: var(--ppm-hermes);
      margin: 0 0 1.5rem;
    }

    .ab-kicker::before,
    .ab-kicker::after {
      content: '';
      width: 1.5rem;
      height: 1px;
      background: var(--ppm-hermes-shadow);
      opacity: 0.6;
    }

    .ab-hero h1 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.02em;
      font-size: clamp(2.4rem, 7vw, 4.4rem);
      line-height: 1.05;
      margin: 0 0 1.1rem;
      color: #ffffff;
      text-shadow: 0 0 40px rgba(117, 255, 232, 0.25);
    }

    .ab-tagline {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 500;
      font-size: clamp(1.05rem, 2.2vw, 1.4rem);
      letter-spacing: 0.02em;
      font-style: italic;
      color: var(--ppm-hermes-lumen);
      margin: 0 0 2rem;
    }

    .ab-hero-lede {
      max-width: 640px;
      margin: 0 auto;
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.75;
      color: var(--ppm-text-muted);
      text-align: left;
    }

    .ab-hero-lede p { margin: 0 0 1.1rem; }
    .ab-hero-lede p:last-child { margin-bottom: 0; }

    .ab-hero-lede strong { color: var(--ppm-text-main); font-weight: 600; }

    /* ---------- Statement divider ---------- */
    .ab-statement {
      padding: clamp(2.5rem, 6vw, 4rem) 5%;
      text-align: center;
      border-top: 1px solid var(--ppm-border-soft);
      border-bottom: 1px solid var(--ppm-border-soft);
    }

    .ab-statement p {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 600;
      font-size: clamp(1.2rem, 3vw, 1.7rem);
      letter-spacing: 0.02em;
      margin: 0;
      color: #ffffff;
    }

    .ab-statement p + p {
      margin-top: 0.5rem;
      color: var(--ppm-hermes-lumen);
      font-weight: 500;
      font-size: clamp(1rem, 2.2vw, 1.2rem);
      font-style: italic;
    }

    /* ---------- Prose panels ---------- */
    .ab-panel {
      padding: clamp(3rem, 7vw, 4.5rem) 5%;
    }

    .ab-panel--shaded {
      background:
        radial-gradient(ellipse at 15% 0%, rgba(117, 255, 232, 0.06), transparent 55%),
        var(--ppm-surface);
      border-top: 1px solid var(--ppm-border-soft);
      border-bottom: 1px solid var(--ppm-border-soft);
    }

    .ab-panel-inner {
      max-width: 720px;
      margin: 0 auto;
    }

    .ab-panel h2 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      font-size: clamp(1.4rem, 3.2vw, 1.9rem);
      color: #ffffff;
      margin: 0 0 1.25rem;
    }

    .ab-panel p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--ppm-text-main);
      margin: 0 0 1.1rem;
    }

    .ab-panel p:last-of-type { margin-bottom: 0; }

    .ab-panel--shaded p { color: var(--ppm-text-muted); }

    .ab-panel p a {
      color: var(--ppm-hermes);
      text-decoration: underline;
      text-decoration-color: rgba(117, 255, 232, 0.4);
      text-underline-offset: 2px;
      transition: text-decoration-color var(--ppm-transition-fast);
    }

    .ab-panel p a:hover {
      text-decoration-color: var(--ppm-hermes);
    }

    /* ---------- The work list ---------- */
    .ab-works {
      padding: clamp(1rem, 4vw, 2rem) 5% clamp(3rem, 7vw, 5rem);
    }

    .ab-works-inner {
      max-width: 800px;
      margin: 0 auto;
      display: grid;
      gap: 1.25rem;
    }

    .ab-work {
      display: block;
      background: var(--ppm-surface);
      border: 1px solid var(--ppm-border-soft);
      border-radius: var(--ppm-radius-md);
      padding: 1.5rem 1.75rem;
      text-decoration: none;
      transition: border-color var(--ppm-transition-fast), transform var(--ppm-transition-fast);
    }

    .ab-work:hover {
      border-color: var(--ppm-hermes);
      transform: translateY(-2px);
    }

    .ab-work-label {
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--ppm-hermes-shadow);
      margin: 0 0 0.5rem;
    }

    .ab-work h3 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      font-size: 1.25rem;
      color: #ffffff;
      margin: 0 0 0.5rem;
    }

    .ab-work p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1rem;
      line-height: 1.65;
      color: var(--ppm-text-muted);
      margin: 0;
    }

    /* ---------- Closing CTA ---------- */
    .ab-cta {
      padding: clamp(3.5rem, 8vw, 5.5rem) 5%;
      text-align: center;
      background:
        radial-gradient(ellipse at 50% 100%, rgba(117, 255, 232, 0.08), transparent 65%),
        var(--ppm-surface);
      border-top: 1px solid var(--ppm-border-soft);
    }

    .ab-cta-title {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      font-size: clamp(1.4rem, 3.6vw, 2rem);
      color: #ffffff;
      margin: 0 0 0.75rem;
    }

    .ab-cta-sub {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.05rem;
      color: var(--ppm-text-muted);
      max-width: 560px;
      margin: 0 auto 2rem;
      line-height: 1.7;
    }
  </style>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ab-page">

  <section class="ab-hero">
    <div class="ab-hero-content">
      <p class="ab-kicker">Peevish Penman &middot; About</p>
      <h1>About OA Allen</h1>
      <p class="ab-tagline">Carrie Bailey Allen writes speculative fiction under the name OA Allen.</p>

      <div class="ab-hero-lede">
        <p>
          Carrie is a science-fiction writer, artist, researcher, and former
          librarian whose interests tend to gather around strange systems:
          <strong>belief, power, technology, folklore, conspiracy</strong>,
          and the stories people construct to explain a world that often
          appears to contradict itself.
        </p>
      </div>
    </div>
  </section>

  <section class="ab-statement">
    <p>Reality rarely agrees with itself.</p>
    <p>Carrie writes about what people do when it doesn&rsquo;t.</p>
  </section>

  <section class="ab-panel">
    <div class="ab-panel-inner">
      <h2>A Life That Kept Moving</h2>
      <p>
        She studied philosophy before earning a graduate degree in
        information studies in New Zealand, where she lived for several
        years. She taught English in Chile. She moved from Oregon to North
        Carolina and finally settled in Vermont. Living abroad&mdash;and
        moving through different countries&mdash;left a permanent mark on
        her fiction.
      </p>
      <p>
        With a family history that contains both sides of the colonial
        story, colonizer and colonized, she is particularly interested in
        what happens when competing versions of reality are all,
        inconveniently, true.
      </p>
    </div>
  </section>

  <section class="ab-panel ab-panel--shaded">
    <div class="ab-panel-inner">
      <h2>The Work</h2>
      <p>
        Her science-fiction novel <a href="/pages/bright-dark.php"><em>The Bright Dark</em></a> grew out of those
        interests, imagining a future shaped not just by catastrophe and
        technology but by the myths, institutions, class systems, and
        assumptions people build afterward. She asked what it might have
        been like to be Solon visiting Sais and learning about ancient
        civilizations.
      </p>
      <p>
        <a href="/pages/delcath-series.php">The Delcath series</a> started as a tribute to <em>No Exit</em> by
        Jean-Paul Sartre. Carrie asked what hell could look like for workers
        isolated in space.
      </p>
      <p>
        Her current work in progress, <a href="/pages/ghost-trucker.php"><em>Ghost Trucker</em></a>, moves further
        into the territory between the rational and the uncanny. After
        three years on the road with her husband, who worked as a long-haul
        truck driver during COVID, she returned with a miniature schnauzer
        and an appreciation for truck stops and audiobooks.
      </p>
    </div>
  </section>

  <section class="ab-works">
    <div class="ab-works-inner">
      <a class="ab-work" href="/pages/bright-dark.php">
        <p class="ab-work-label">Novel</p>
        <h3>The Bright Dark</h3>
        <p>A post-apocalyptic future built from myth, technology, and the assumptions people build afterward.</p>
      </a>
      <a class="ab-work" href="/pages/delcath-series.php">
        <p class="ab-work-label">Series</p>
        <h3>The Delcath Series</h3>
        <p>Asteroid miners, corporate dependence, and a tribute to Sartre&rsquo;s <em>No Exit</em>.</p>
      </a>
      <a class="ab-work" href="/pages/ghost-trucker.php">
        <p class="ab-work-label">Work in Progress</p>
        <h3>Ghost Trucker</h3>
        <p>Speculative fiction from the cab of a semi, in the territory between the rational and the uncanny.</p>
      </a>
      <a class="ab-work" href="/pages/coloring-book.php">
        <p class="ab-work-label">Art</p>
        <h3>The Reptilian Conspiracy Coloring Book</h3>
        <p>Conspiracy culture, art, philosophy, and a sense of humor, refusing to live in separate rooms.</p>
      </a>
    </div>
  </section>

  <section class="ab-panel">
    <div class="ab-panel-inner">
      <h2>Before the Page</h2>
      <p>
        She spent years working as a librarian before a severe balance
        disorder and hearing loss changed what that work could look like.
        She also writes with ADHD, which may explain both the sprawling
        research trails and her tendency to become intensely interested in
        questions other people have sensibly left alone.
      </p>
    </div>
  </section>

  <section class="ab-cta">
    <p class="ab-cta-title">Now in Vermont</p>
    <p class="ab-cta-sub">
      Carrie now lives in Vermont, where she writes speculative fiction
      about what humans believe, what they build from those beliefs, and
      what happens when reality turns out to be stranger than the official
      explanation.
    </p>
    <a class="ppm-button" href="/pages/newsletter.php">Join the Newsletter</a>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
