<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title>About Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Peevish Penman is a writing resource for unconventional writers, created by science-fiction writer and former librarian Carrie Bailey Allen (OA Allen).">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/pages/about">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="About Peevish Penman">
  <meta property="og:description" content="Peevish Penman is a writing resource for unconventional writers, created by science-fiction writer and former librarian Carrie Bailey Allen (OA Allen).">
  <meta property="og:url" content="https://peevishpenman.com/pages/about">
  <meta property="og:type" content="profile">
  <meta property="og:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="About Peevish Penman">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="About Peevish Penman">
  <meta name="twitter:description" content="Peevish Penman is a writing resource for unconventional writers, created by science-fiction writer and former librarian Carrie Bailey Allen (OA Allen).">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta name="twitter:image:alt" content="About Peevish Penman">

  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/partials/assets.php'; ?>
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">

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

    .ab-portrait {
      display: block;
      width: clamp(10rem, 36vw, 14rem);
      height: auto;
      margin: 0 auto 1.75rem;
      border-radius: var(--ppm-radius-md);
      border: 1px solid var(--ppm-border-soft);
      box-shadow: var(--ppm-shadow-soft);
    }

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

    /* Desktop: portrait in a left column beside the intro text */
    @media (min-width: 901px) {
      .ab-hero-content {
        display: grid;
        grid-template-columns: auto minmax(0, 1fr);
        column-gap: clamp(2.5rem, 5vw, 4rem);
        align-items: center;
        max-width: 1000px;
        margin: 0 auto;
        text-align: left;
      }

      .ab-portrait {
        grid-row: 1 / span 4;
        width: clamp(15rem, 24vw, 19rem);
        margin: 0;
      }

      .ab-hero-content > :not(.ab-portrait) {
        grid-column: 2;
      }

      .ab-kicker { justify-self: start; }
      .ab-kicker::before { display: none; }

      .ab-hero-lede {
        max-width: none;
        margin: 0;
      }
    }

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

    .ab-statement p.ab-statement-lead {
      margin-bottom: 0.6rem;
      font-family: "IBM Plex Mono", monospace;
      font-weight: 500;
      font-size: 0.85rem;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--ppm-hermes);
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

    .ab-hero-lede a,
    .ab-panel p a {
      color: var(--ppm-hermes);
      text-decoration: underline;
      text-decoration-color: rgba(117, 255, 232, 0.4);
      text-underline-offset: 2px;
      transition: text-decoration-color var(--ppm-transition-fast);
    }

    .ab-hero-lede a:hover,
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

    .ab-works h2 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      font-size: clamp(1.4rem, 3.2vw, 1.9rem);
      color: #ffffff;
      margin: 1.5rem 0 0;
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

    .ab-work p + p { margin-top: 0.75rem; }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "OA Allen",
    "alternateName": "Carrie Bailey Allen",
    "url": "https://peevishpenman.com/pages/about",
    "description": "Carrie Bailey Allen, writing as OA Allen, is a science-fiction writer, former librarian, and the creator of Peevish Penman.",
    "sameAs": [
      "https://www.facebook.com/PeevishPenman",
      "https://www.instagram.com/peevishpenman/",
      "https://www.youtube.com/@peevishpenman",
      "https://tiktok.com/@peevishpenman",
      "https://x.com/PeevishPenman"
    ]
  }
  </script>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ab-page">

  <section class="ab-hero">
    <div class="ab-hero-content">
      <img class="ab-portrait" src="/img/oa-allen-portrait.webp" alt="Carrie Bailey Allen" width="720" height="965">
      <p class="ab-kicker">Peevish Penman &middot; About</p>
      <h1>About Peevish Penman</h1>
      <p class="ab-tagline">A writing resource for unconventional writers.</p>

      <div class="ab-hero-lede">
        <p>
          Peevish Penman is a writing resource for unconventional writers,
          with <a href="/articles">articles</a> on <strong>fiction, science fiction, publishing,
          editing, creativity</strong>, and the realities of the writing life.
        </p>
        <p>
          Created by writer and former librarian <strong>Carrie Bailey Allen</strong>,
          Peevish Penman has been encouraging writers to approach writing as
          both a craft and a profession since 2009. Carrie is also the editor
          of the <a href="/pages/writer-secret-society"><em>Handbook of the Writer Secret Society</em></a>.
        </p>
      </div>
    </div>
  </section>

  <section class="ab-statement">
    <p class="ab-statement-lead">Her personal motto?</p>
    <p>Insert Coffee. Repeat.</p>
  </section>

  <section class="ab-panel">
    <div class="ab-panel-inner">
      <h2>The Writer: OA Allen</h2>
      <p>
        Under the pen name OA Allen, Carrie writes science fiction and
        speculative fiction about the stranger systems where belief, power,
        history, and technology converge. She favors metaphysical idealism over materialism and
        stories about ordinary people over the chosen few.
      </p>
      <p>
        She studied philosophy before earning a graduate degree in
        information studies in New Zealand, where she lived for several
        years. She taught English in Chile and moved from Oregon to North
        Carolina, finally settling in Vermont.
      </p>
      <p>
        With a family history containing both sides of the
        <a href="/article-tag?tag=colonization">colonial story</a>, she is
        particularly interested in what happens when competing versions of
        reality are all, inconveniently, true.
      </p>
    </div>
  </section>

  <section class="ab-works">
    <div class="ab-works-inner">
      <h2>The Books</h2>
      <p class="ab-works-more">
        Novels, novellas, a coloring book, and the free Writer Secret Society
        handbook, all in one place:
        <a class="ppm-inline-link" href="/pages/books">see all of OA Allen&rsquo;s books &rarr;</a>
      </p>
    </div>
  </section>

  <section class="ab-panel ab-panel--shaded">
    <div class="ab-panel-inner">
      <h2>The Writer&rsquo;s Mission</h2>
      <p>
        Carrie spent years working as a librarian before a severe balance
        disorder and hearing loss changed the course of her career. She
        turned tragedy into opportunity, reclaiming control of her personal
        narrative through writing and publishing books with the support of
        her husband and children.
      </p>
      <p>
        Peevish Penman grew from the same impulse: to share what she has
        learned and encourage other writers to explore writing as both a
        craft and a profession.
      </p>
      <p>
        Carrie lives in Vermont, where she maintains a regimented schedule of
        coffee and creativity under the direction of her miniature schnauzer.
        When she isn&rsquo;t writing, she enjoys hiking, gardening, and
        meditation.
      </p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
