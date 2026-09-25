<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title>The Delcath Series – OA Allen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Delcath Series by OA Allen: science fiction about asteroid miners, labour and dependence, and the intelligence that watches over them.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/pages/delcath-series">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="The Delcath Series – OA Allen">
  <meta property="og:description" content="Science fiction about asteroid miners, labour and dependence, and the intelligence that watches over them.">
  <meta property="og:url" content="https://peevishpenman.com/pages/delcath-series">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://peevishpenman.com/img/covers/wod-cover-3d.webp">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="The Delcath Series – OA Allen">
  <meta name="twitter:description" content="Science fiction about asteroid miners, labour and dependence, and the intelligence that watches over them.">
  <meta name="twitter:image" content="https://peevishpenman.com/img/covers/wod-cover-3d.webp">

  <link rel="stylesheet" href="/styles/main.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/styles/main.css') ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    .dc-page {
      background: var(--ppm-obsidian);
      color: var(--ppm-text-main);
      overflow-x: hidden;
    }

    .dc-page * { box-sizing: border-box; }

    .dc-inner {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 5%;
    }

    /* ---------- Hero ---------- */
    .dc-hero {
      position: relative;
      padding: clamp(4rem, 12vw, 8rem) 5% clamp(3rem, 8vw, 5rem);
      text-align: center;
      overflow: hidden;
      background:
        repeating-linear-gradient(
          to bottom,
          rgba(255, 255, 255, 0.025) 0px,
          rgba(255, 255, 255, 0.025) 1px,
          transparent 1px,
          transparent 3px
        ),
        radial-gradient(ellipse at 50% 0%, rgba(124, 111, 175, 0.22), transparent 60%),
        var(--ppm-obsidian);
    }

    .dc-hero-content {
      position: relative;
      z-index: 1;
    }

    .dc-hero-title-block {
      position: relative;
      padding: 0.5rem 0 1rem;
    }

    .dc-hero-art {
      position: absolute;
      inset: -2rem -10% 0;
      z-index: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      pointer-events: none;
    }

    .dc-hero-art img {
      width: min(680px, 100%);
      height: auto;
      opacity: 0.5;
      filter: saturate(0.9);
    }

    .dc-hero-art::after {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(
        ellipse 65% 65% at 50% 45%,
        rgba(5, 6, 8, 0.1) 0%,
        rgba(5, 6, 8, 0.55) 55%,
        rgba(5, 6, 8, 0.88) 78%,
        var(--ppm-obsidian) 100%
      );
    }

    .dc-kicker {
      position: relative;
      z-index: 1;
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

    .dc-kicker::before,
    .dc-kicker::after {
      content: '';
      width: 1.5rem;
      height: 1px;
      background: var(--ppm-hermes-shadow);
      opacity: 0.6;
    }

    .dc-hero h1 {
      position: relative;
      z-index: 1;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.01em;
      font-size: clamp(2.4rem, 7vw, 4.6rem);
      line-height: 1.05;
      margin: 0 0 1.1rem;
      color: #ffffff;
      text-shadow: 0 0 40px rgba(117, 255, 232, 0.25), 0 4px 18px rgba(5, 6, 8, 0.85);
    }

    .dc-tagline {
      position: relative;
      z-index: 1;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 500;
      font-size: clamp(1.1rem, 2.4vw, 1.5rem);
      letter-spacing: 0.06em;
      color: var(--ppm-hermes-lumen);
      margin: 0 0 2.25rem;
      text-shadow: 0 2px 10px rgba(5, 6, 8, 0.85);
    }

    .dc-hero-lede {
      max-width: 640px;
      margin: 0 auto;
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.75;
      color: var(--ppm-text-muted);
    }

    .dc-hero-lede p { margin: 0 0 1.1rem; }
    .dc-hero-lede p:last-child { margin-bottom: 0; }

    .dc-hero-lede strong {
      color: var(--ppm-text-main);
      font-weight: 600;
    }

    /* ---------- Statement dividers ---------- */
    .dc-statement {
      padding: clamp(2.5rem, 6vw, 4rem) 5%;
      text-align: center;
      border-top: 1px solid var(--ppm-border-soft);
      border-bottom: 1px solid var(--ppm-border-soft);
    }

    .dc-statement p {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 600;
      font-size: clamp(1.3rem, 3.2vw, 1.9rem);
      letter-spacing: 0.02em;
      margin: 0;
      color: #ffffff;
    }

    .dc-statement p + p {
      margin-top: 0.5rem;
      color: var(--ppm-text-muted);
      font-weight: 500;
      font-size: clamp(1.05rem, 2.4vw, 1.3rem);
    }

    /* ---------- Series intro ---------- */
    .dc-intro {
      padding: clamp(3rem, 7vw, 4.5rem) 5%;
    }

    .dc-intro-inner {
      max-width: 720px;
      margin: 0 auto;
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.15rem;
      line-height: 1.85;
      color: var(--ppm-text-main);
    }

    .dc-intro-inner p { margin: 0 0 1.3rem; }
    .dc-intro-inner p:last-child { margin-bottom: 0; }

    /* ---------- Book showcase ---------- */
    .dc-books {
      padding: clamp(1rem, 4vw, 2rem) 5% clamp(3rem, 7vw, 5rem);
    }

    .dc-book {
      max-width: 1000px;
      margin: 0 auto clamp(3.5rem, 8vw, 5.5rem);
      display: grid;
      gap: clamp(1.75rem, 4vw, 3rem);
      align-items: center;
    }

    .dc-book:last-child { margin-bottom: 0; }

    @media (min-width: 860px) {
      .dc-book {
        grid-template-columns: 0.85fr 1.15fr;
      }

      .dc-book--alt .dc-book-cover { order: 2; }
      .dc-book--alt .dc-book-copy { order: 1; }
    }

    .dc-book-cover {
      position: relative;
      display: flex;
      justify-content: center;
      padding: 1rem 0;
    }

    .dc-book-cover::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 78%;
      aspect-ratio: 1;
      transform: translate(-50%, -50%);
      background: radial-gradient(circle, rgba(117, 255, 232, 0.18), transparent 70%);
      filter: blur(16px);
      z-index: 0;
    }

    .dc-book-cover-frame {
      position: relative;
      z-index: 1;
      width: min(300px, 100%);
      filter: drop-shadow(0 30px 40px rgba(0, 0, 0, 0.55));
    }

    .dc-book-cover-frame img {
      display: block;
      width: 100%;
      height: auto;
    }

    .dc-book-label {
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--ppm-hermes-shadow);
      margin: 0 0 0.6rem;
    }

    .dc-book h2 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.01em;
      font-size: clamp(1.7rem, 3.4vw, 2.3rem);
      color: #ffffff;
      margin: 0 0 0.9rem;
    }

    .dc-book-hook {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-weight: 600;
      font-size: 1.15rem;
      color: var(--ppm-hermes-lumen);
      margin: 0 0 1.1rem;
    }

    .dc-book-copy p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.05rem;
      line-height: 1.75;
      color: var(--ppm-text-muted);
      margin: 0 0 1rem;
    }

    .dc-book-copy p:last-of-type { margin-bottom: 1.5rem; }

    .dc-book-copy em {
      font-style: italic;
      color: var(--ppm-text-main);
    }

    .dc-buy {
      display: inline-flex;
      align-items: center;
      gap: 0.5em;
    }

    .dc-buy svg {
      width: 1em;
      height: 1em;
      transition: transform var(--ppm-transition-fast);
    }

    .dc-buy:hover svg { transform: translateX(3px); }

    /* ---------- World / closing manifesto ---------- */
    .dc-world {
      padding: clamp(3.5rem, 8vw, 6rem) 5%;
      text-align: center;
      background:
        radial-gradient(ellipse at 50% 100%, rgba(117, 255, 232, 0.08), transparent 65%),
        var(--ppm-surface);
      border-top: 1px solid var(--ppm-border-soft);
    }

    .dc-world-inner {
      max-width: 680px;
      margin: 0 auto;
    }

    .dc-world h2 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      font-size: clamp(1.5rem, 3.4vw, 2.1rem);
      color: #ffffff;
      margin: 0 0 1.5rem;
    }

    .dc-world p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--ppm-text-muted);
      margin: 0 0 1.1rem;
    }

    .dc-world p:last-child { margin-bottom: 0; }

    .dc-world .dc-close-line {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 600;
      font-size: clamp(1.1rem, 2.4vw, 1.4rem);
      color: var(--ppm-hermes-lumen);
      margin-top: 1.75rem;
    }

    .dc-world .dc-close-line em { font-style: italic; }
  </style>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="dc-page">

  <section class="dc-hero">
    <div class="dc-hero-content">
      <div class="dc-hero-title-block">
        <div class="dc-hero-art" aria-hidden="true">
          <img src="/img/delcath_geo_dome.webp" alt="" width="1254" height="1254">
        </div>
        <p class="dc-kicker">OA Allen &middot; Science Fiction</p>
        <h1>The Delcath Series</h1>
        <p class="dc-tagline">Asteroid Dominion. Human Cost.</p>
      </div>

      <div class="dc-hero-lede">
        <p>Delcath is a corporate nation built for the extraction of worlds.</p>
        <p>
          Its miners live beneath geodesic domes, inside white corridors and
          sealed colonies scattered across the dark. Robots dig. Computers
          watch. Every resource is measured, every worker has a function,
          and the artificial intelligence <strong>Alexandria</strong> is
          always there to advise, correct, calculate and keep the machinery
          of civilization moving.
        </p>
      </div>
    </div>
  </section>

  <section class="dc-statement">
    <p>Delcath works.</p>
    <p>The question is what it costs the people who belong to it.</p>
  </section>

  <section class="dc-intro">
    <div class="dc-intro-inner">
      <p>
        The Delcath Series follows ordinary workers living at the farthest
        reaches of a civilization engineered around survival, productivity
        and dependence. Its frontier is not empty. It is crowded with
        machines, rules, inherited assumptions and human beings trying to
        decide which parts of themselves cannot be reduced to a metric.
      </p>
      <p>
        This is science fiction about asteroid miners rather than admirals,
        labour rather than conquest, and the unsettling intimacy of living
        inside systems intelligent enough to know exactly what you need.
      </p>
      <p>
        Start with <em>Waiting on Delcath</em>, then <em>Children of
        Delcath</em>&mdash;though neither book unfolds in a straight line.
        Each is written to read out of order.
      </p>
    </div>
  </section>

  <section class="dc-books">

    <article class="dc-book" id="waiting-on-delcath">
      <div class="dc-book-cover">
        <div class="dc-book-cover-frame">
          <img src="/img/covers/wod-cover-3d.webp" alt="Waiting on Delcath — book cover" width="1086" height="1448">
        </div>
      </div>
      <div class="dc-book-copy">
        <p class="dc-book-label">Book One &middot; Novella</p>
        <h2>Waiting on Delcath</h2>
        <p class="dc-book-hook">Three miners. One asteroid. Twelve months between them and retirement.</p>
        <p>
          Ola, Sikat and Jennet accept a remote posting on asteroid 5AVB
          because Delcath has made the arithmetic irresistible: endure one
          dangerous year in deep space and they can earn enough to leave
          mining behind.
        </p>
        <p>Then a mining robot damages their water supply.</p>
        <p>
          Their distress signal has been sent. Somewhere across the enormous
          distances between corporate settlements, Delcath may already be
          responding. But the miners have no way to know when help will
          arrive.
        </p>
        <p>
          Inside their tiny habitat dome, the three childhood companions
          wait with diminishing water, an increasingly unreliable sense of
          hope, and Alexandria&mdash;the company intelligence designed to
          support them through almost anything. Almost.
        </p>
        <p>
          <em>Waiting on Delcath</em> is a claustrophobic survival story
          about friendship, dependency and what happens when people
          discover that a system capable of planning for nearly everything
          has left them terribly alone.
        </p>
        <a class="ppm-button dc-buy" href="#">
          Buy on Amazon
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </article>

    <article class="dc-book dc-book--alt" id="children-of-delcath">
      <div class="dc-book-cover">
        <div class="dc-book-cover-frame">
          <img src="/img/covers/cod-cover-3d.webp" alt="Children of Delcath — book cover" width="1086" height="1448">
        </div>
      </div>
      <div class="dc-book-copy">
        <p class="dc-book-label">Book Two &middot; Novella</p>
        <h2>Children of Delcath</h2>
        <p class="dc-book-hook">Delcath does not merely employ miners. It makes them.</p>
        <p>
          On the unstable mining world of Kur, young transmission worker
          Afrit occupies one of the least important posts in an enormous
          industrial colony. Alexandria measures her productivity. Officers
          outrank her. Robots perform most meaningful work. Advancement
          requires sponsorship, obedience and an understanding of rules
          nobody seems particularly interested in explaining.
        </p>
        <p>Afrit wants to become an officer.</p>
        <p>Instead, she is ordered home for nurture duty.</p>
        <p>
          As Kur begins to change around her, the assumptions underlying
          Delcathian life become harder to ignore: why workers are designed
          as they are, who determines their place, what the corporation
          expects from their bodies, and whether a civilization engineered
          for continuity has confused survival with control.
        </p>
        <p>
          <em>Children of Delcath</em> expands the world of the first
          novella from one isolated mining crew to the society that created
          them.
        </p>
        <a class="ppm-button dc-buy" href="#">
          Buy on Amazon
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </article>

  </section>

  <section class="dc-world">
    <div class="dc-world-inner">
      <h2>A Machine-Haunted Frontier</h2>
      <p>
        The Delcath stories take place in a human future where the frontier
        has been industrialized but never truly tamed.
      </p>
      <p>
        Asteroids become workplaces. Planets become company assets. Human
        beings are born into systems older than they are and surrounded
        from childhood by an intelligence that remembers, advises and
        quietly participates in nearly every part of their lives.
      </p>
      <p>There are no simple villains at the center of Delcath.</p>
      <p>There is a civilization.</p>
      <p>And civilizations are much harder to escape.</p>
      <p>
        Alexandria isn't a metaphor I invented from nothing. I wrote about
        living alongside a helpful, constant, not-quite-neutral intelligence
        of my own in
        <a class="ppm-inline-link" href="/blogs/i-wrote-this-post-in-vr">I Wrote This Post in Virtual Reality</a>.
      </p>
      <p class="dc-close-line">
        Begin with <em>Waiting on Delcath</em>, then continue with
        <em>Children of Delcath</em>.
      </p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
