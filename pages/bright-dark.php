<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title>The Bright Dark – OA Allen &amp; Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Bright Dark: a post-apocalyptic novel about lost technology, competing civilizations, and one truthseeker chasing the strangest relic of the old world.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/pages/bright-dark">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="The Bright Dark – OA Allen &amp; Peevish Penman">
  <meta property="og:description" content="The Bright Dark: a post-apocalyptic novel about lost technology, competing civilizations, and one truthseeker chasing the strangest relic of the old world.">
  <meta property="og:url" content="https://peevishpenman.com/pages/bright-dark">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="The Bright Dark – OA Allen &amp; Peevish Penman">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="The Bright Dark – OA Allen &amp; Peevish Penman">
  <meta name="twitter:description" content="The Bright Dark: a post-apocalyptic novel about lost technology, competing civilizations, and one truthseeker chasing the strangest relic of the old world.">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta name="twitter:image:alt" content="The Bright Dark – OA Allen &amp; Peevish Penman">

  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/partials/assets.php'; ?>
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">

  <style>
    .bd-page {
      --bd-glow: #8CFFEA;
      --bd-glow-soft: #C8FFF3;
      --bd-glow-shadow: #2E9D8B;
      --bd-ember: #D9A25C;
      --bd-ember-shadow: #8A5E28;
      background: var(--ppm-obsidian);
      color: var(--ppm-text-main);
      overflow-x: hidden;
    }

    .bd-page * { box-sizing: border-box; }

    /* ---------- Shared: fractured light rule ---------- */
    .bd-fractureline {
      width: 100%;
      height: 3px;
      background-image: repeating-linear-gradient(
        to right,
        var(--bd-glow-shadow) 0px,
        var(--bd-glow-shadow) 3px,
        transparent 3px,
        transparent 34px
      );
      opacity: 0.55;
    }

    /* ---------- Hero ---------- */
    .bd-hero {
      position: relative;
      padding: clamp(4rem, 12vw, 8rem) 5% clamp(3rem, 8vw, 5rem);
      text-align: center;
      overflow: hidden;
      background:
        radial-gradient(ellipse at 50% 0%, rgba(140, 255, 234, 0.14), transparent 62%),
        radial-gradient(ellipse at 85% 100%, rgba(217, 162, 92, 0.10), transparent 55%),
        var(--ppm-obsidian);
    }

    .bd-hero-content {
      position: relative;
      z-index: 1;
    }

    .bd-kicker {
      display: inline-flex;
      align-items: center;
      gap: 0.6em;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.78rem;
      font-weight: 500;
      letter-spacing: 0.32em;
      text-transform: uppercase;
      color: var(--bd-glow);
      margin: 0 0 1.5rem;
    }

    .bd-kicker::before,
    .bd-kicker::after {
      content: '';
      width: 1.5rem;
      height: 1px;
      background: var(--bd-glow-shadow);
      opacity: 0.6;
    }

    .bd-hero h1 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      font-size: clamp(2.6rem, 8vw, 5rem);
      line-height: 1.02;
      margin: 0 0 1.1rem;
      color: #ffffff;
      text-shadow: 0 0 40px rgba(140, 255, 234, 0.32);
    }

    .bd-tagline {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 500;
      font-size: clamp(1.1rem, 2.4vw, 1.5rem);
      letter-spacing: 0.02em;
      font-style: italic;
      color: var(--bd-glow-soft);
      margin: 0 0 2rem;
    }

    .bd-preview-link {
      margin: -1.25rem 0 2.25rem;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.8rem;
      letter-spacing: 0.04em;
    }

    .bd-preview-link a {
      color: var(--bd-ember);
      text-decoration: underline;
      text-underline-offset: 3px;
    }

    .bd-badge {
      display: inline-block;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--bd-ember);
      border: 1px solid var(--bd-ember);
      border-radius: var(--ppm-radius-sm);
      padding: 0.5em 1.1em;
      transform: rotate(-2deg);
      margin-bottom: 2.25rem;
    }

    .bd-hero-lede {
      max-width: 640px;
      margin: 0 auto;
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.75;
      color: var(--ppm-text-muted);
      text-align: left;
    }

    .bd-hero-lede p { margin: 0 0 1.1rem; }
    .bd-hero-lede p:last-child { margin-bottom: 0; }

    .bd-hero-lede strong {
      color: var(--ppm-text-main);
      font-weight: 600;
    }

    /* ---------- Statement dividers ---------- */
    /* ---------- Mission / arrival section ---------- */
    .bd-arrival {
      padding: clamp(3rem, 7vw, 4.5rem) 5%;
    }

    .bd-arrival-inner {
      max-width: 720px;
      margin: 0 auto;
    }

    .bd-arrival-inner p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.85;
      color: var(--ppm-text-main);
      margin: 0 0 1.1rem;
    }

    .bd-arrival-inner p:last-of-type { margin-bottom: 0; }

    /* ---------- Plasmoids / cover story panel sections ---------- */
    .bd-panel {
      padding: clamp(3rem, 7vw, 4.5rem) 5%;
      background:
        radial-gradient(ellipse at 15% 0%, rgba(140, 255, 234, 0.07), transparent 55%),
        var(--ppm-surface);
      border-top: 1px solid var(--ppm-border-soft);
      border-bottom: 1px solid var(--ppm-border-soft);
    }

    .bd-panel-inner {
      max-width: 720px;
      margin: 0 auto;
    }

    .bd-panel h2 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      font-size: clamp(1.5rem, 3.4vw, 2.1rem);
      color: #ffffff;
      margin: 0 0 1.25rem;
    }

    .bd-panel p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--ppm-text-main);
      margin: 0 0 1.1rem;
    }

    .bd-panel p:last-of-type { margin-bottom: 0; }

    .bd-panel .bd-belief-list {
      list-style: none;
      margin: 1.5rem 0;
      padding: 0;
      display: grid;
      gap: 0.6rem;
    }

    .bd-belief-list li {
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.98rem;
      color: var(--ppm-text-muted);
      padding-left: 1.6em;
      position: relative;
    }

    .bd-belief-list li::before {
      content: '▸';
      position: absolute;
      left: 0;
      color: var(--bd-glow);
    }

    .bd-belief-list li.bd-belief-strong {
      color: var(--bd-glow-soft);
    }

    .bd-cover-job {
      display: block;
      margin-top: 1.25rem;
      font-family: "IBM Plex Mono", monospace;
      font-weight: 600;
      letter-spacing: 0.04em;
      font-size: 1rem;
      color: var(--ppm-text-muted);
    }

    .bd-cover-truth {
      display: block;
      margin-top: 1rem;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      font-size: clamp(1.2rem, 2.8vw, 1.6rem);
      color: var(--bd-glow);
    }

    /* ---------- World section ---------- */
    .bd-world {
      padding: clamp(3.5rem, 8vw, 6rem) 5%;
      background:
        radial-gradient(ellipse at 50% 100%, rgba(217, 162, 92, 0.08), transparent 65%),
        var(--ppm-obsidian);
      border-top: 1px solid var(--ppm-border-soft);
    }

    .bd-world-inner {
      max-width: 680px;
      margin: 0 auto;
      text-align: center;
    }

    .bd-world h2 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      font-size: clamp(1.5rem, 3.4vw, 2.1rem);
      color: #ffffff;
      margin: 0 0 1.5rem;
    }

    .bd-world p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--ppm-text-muted);
      margin: 0 0 1.1rem;
    }

    .bd-world p:last-child { margin-bottom: 0; }

    .bd-world .bd-close-line {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 600;
      font-size: clamp(1.1rem, 2.4vw, 1.4rem);
      color: var(--bd-ember);
      margin-top: 1.75rem;
    }

    /* ---------- Closing lines ---------- */
    .bd-byline {
      display: block;
      margin-top: 1.75rem;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.85rem;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--ppm-text-muted);
    }
  </style>

  <!-- TODO(OA Allen): The Bright Dark isn't out yet, so this leaves out
       everything not on the page: cover image, ISBN, publication date,
       page count, book format and a purchase link (offers). Add them
       here when the book is published. -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Book",
    "name": "The Bright Dark",
    "author": { "@type": "Person", "name": "OA Allen", "url": "https://peevishpenman.com/pages/about" },
    "description": "A post-apocalyptic novel about lost technology, competing civilizations, and one truthseeker chasing the strangest relic of the old world.",
    "genre": "Post-Apocalyptic Science Fiction",
    "publisher": { "@type": "Organization", "name": "Peevish Penman Press" },
    "url": "https://peevishpenman.com/pages/bright-dark"
  }
  </script>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="bd-page">

  <section class="bd-hero">
    <div class="bd-hero-content">
      <p class="bd-kicker">OA Allen &middot; Post-Apocalyptic Science Fiction</p>
      <h1>The Bright Dark</h1>
      <p class="bd-tagline">The old world is gone. Nobody remembers it correctly.</p>
      <p class="bd-badge">Coming Soon</p>
      <p class="bd-preview-link"><a href="#newsletter">Read a preview first &mdash; join the newsletter</a></p>

      <div class="bd-hero-lede">
        <p>
          Centuries after the modern world collapsed, civilization has
          returned to New Zealand.
        </p>
        <p>Sort of.</p>
        <p>
          Electricity is poorly understood. Germs sound like a conspiracy
          theory. Ancient technology is excavated, catalogued and occasionally
          misunderstood. Three-horned livestock wander the roads. Enormous
          predators haunt the <a class="ppm-inline-link" href="/articles/wasteland">Wastelands</a>. History has become religion,
          folklore and badly remembered technical documentation.
        </p>
        <p>And Ren wants to understand all of it.</p>
      </div>
    </div>
  </section>

  <div class="bd-fractureline" aria-hidden="true"></div>

  <section class="bd-arrival">
    <div class="bd-arrival-inner">
      <p>
        Twenty years old, painfully curious and much better with a scroll
        than a weapon, Ren expects Recruitment Day to place him with the
        Yellow Guard, among the city&rsquo;s scribes.
      </p>
      <p>
        Instead, one bad decision destroys his dreams and leaves his future
        in the hands of a cantankerous old captain.
      </p>
      <p>
        Ren is offered something far more dangerous: to find the plasmoids
        his people call the Annuna.
      </p>
    </div>
  </section>

  <section class="bd-panel">
    <div class="bd-panel-inner">
      <h2>Plasmoids</h2>
      <p>
        The first settlers left behind stories of rarefication&mdash;a lost
        process by which human beings supposedly transformed themselves into
        plasmoids.
      </p>
      <ul class="bd-belief-list">
        <li>Most people treat the Annuna as history.</li>
        <li>Some treat them as gawds.</li>
        <li class="bd-belief-strong">Ren thinks they might be real.</li>
      </ul>
      <p>
        And with someone in the city opening portals, the old captain
        believes the vanished settlers may be the only ones who understand
        the lost tech enough to help.
      </p>
      <p>
        Ren is sent across the island toward remote Dunedin with an official
        rank near the bottom of society, a guard-issued knife he barely
        knows how to use, and an excellent cover story.
      </p>
      <span class="bd-cover-job">Official assignment: dig a cesspit.</span>
      <span class="bd-cover-truth">Actual mission: find sentient plasma beings no one can prove exist.</span>
    </div>
  </section>

  <section class="bd-world">
    <div class="bd-world-inner">
      <h2>A World That Moved On Without Us</h2>
      <p>
        The apocalypse is ancient history. Humanity has already rebuilt.
        New cultures have formed. Guilds feud. Guards maintain an uneasy
        order. The Administrator decides which pieces of the past they get
        back&mdash;and which should remain buried.
      </p>
      <p>
        Metal can be progress in one settlement and corruption in another.
        Science resembles mysticism. Mysticism sometimes behaves
        disturbingly like science.
      </p>
      <p>
        And in the Zubian Waste, impossible visions move across the
        landscape. Every day. Like dream weather.
      </p>
      <p>Ren goes looking for lost technology and sentient plasma.</p>
      <p>
        Instead, he finds people who can see more with their eyes closed,
        machines that remember more than their operators do, and a
        landscape where culture determines truth.
      </p>
      <p>And the Annuna may actually be real.</p>
      <p class="bd-close-line">
        Unfortunately, Ren was never prepared for this mission. No one was,
        and everything has to change before it even starts.
      </p>
      <span class="bd-byline">By OA Allen &middot; Coming Soon from Peevish Penman Press</span>
    </div>
  </section>

</main>

<?php $ppm_book_page = true; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
