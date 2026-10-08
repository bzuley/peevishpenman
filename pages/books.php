<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title>Books – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Books and writing projects from OA Allen: the Delcath series, The Bright Dark, Ghost Trucker, and the free Writer Secret Society Handbook.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/pages/books">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="Books – Peevish Penman">
  <meta property="og:description" content="Books and writing projects from OA Allen: the Delcath series, The Bright Dark, Ghost Trucker, and the free Writer Secret Society Handbook.">
  <meta property="og:url" content="https://peevishpenman.com/pages/books">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Books – Peevish Penman">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Books – Peevish Penman">
  <meta name="twitter:description" content="Books and writing projects from OA Allen: the Delcath series, The Bright Dark, Ghost Trucker, and the free Writer Secret Society Handbook.">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/peevish-penman.jpg">
  <meta name="twitter:image:alt" content="Books – Peevish Penman">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/partials/assets.php'; ?>
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">

  <style>
    /* New-Scientist-style listing: wide page, dark panels with image left,
       gold-ish kicker, bold serif headlines. Single column on phones. */
    .bk-page { max-width: 1400px; margin: 0 auto; padding: clamp(1.5rem, 4vw, 3rem) 5% 4rem; }
    .bk-head { margin-bottom: 2rem; }
    .bk-head h1 { font-family: "Space Grotesk", system-ui, sans-serif; margin: 0 0 .4em; }
    .bk-head p { margin: 0; max-width: 60ch; color: var(--ppm-text-muted); }
    .bk-section { margin-top: 3rem; }
    .bk-section-head { display: flex; flex-wrap: wrap; align-items: baseline; gap: .25rem 1.5rem; margin: 0 0 1rem; }
    .bk-section-title { margin: 0; font-size: .85rem; letter-spacing: .2em; text-transform: uppercase; color: var(--ppm-hermes); font-family: "IBM Plex Mono", monospace; }
    .bk-section-note { margin: 0; color: var(--ppm-text-muted); }
    .bk-section-note a { color: var(--ppm-hermes-lumen); }
    .bk-grid { display: grid; gap: 1.25rem; grid-template-columns: 1fr; }
    .bk-card { display: grid; grid-template-columns: 1fr; background: var(--ppm-surface); border: 1px solid var(--ppm-border-soft); border-radius: var(--ppm-radius-md); overflow: hidden; text-decoration: none; color: inherit; transition: border-color var(--ppm-transition-fast), transform var(--ppm-transition-fast); }
    .bk-card:hover { border-color: var(--ppm-hermes); transform: translateY(-2px); }
    .bk-card-cover { display: flex; align-items: center; justify-content: center; padding: 1.5rem; }
    .bk-card-cover img { display: block; width: auto; max-width: 100%; max-height: 22rem; margin: 0; object-fit: contain; filter: drop-shadow(0 12px 22px rgba(0, 0, 0, 0.4)); }
    .bk-card-body { padding: 1.4rem 1.6rem 1.6rem; display: flex; flex-direction: column; }
    .bk-card-kicker { margin: 0 0 .5rem; font-family: "Cormorant Garamond", Georgia, serif; font-weight: 700; font-size: 1.05rem; color: var(--ppm-hermes-lumen); }
    .bk-card h2 { margin: 0 0 .6rem; font-family: Georgia, "Times New Roman", serif; font-weight: 700; font-size: clamp(1.4rem, 1vw + 1.1rem, 2rem); line-height: 1.15; color: var(--ppm-text-main); }
    .bk-card p { margin: 0 0 .75rem; color: var(--ppm-text-muted); line-height: 1.55; }
    .bk-card-cta { margin-top: auto; padding-top: .5rem; font-family: "Space Grotesk", system-ui, sans-serif; font-weight: 600; font-size: .85rem; letter-spacing: .08em; text-transform: uppercase; color: var(--ppm-hermes-lumen); }

    @media (min-width: 901px) {
      .bk-grid { grid-template-columns: repeat(12, 1fr); }
      .bk-card { grid-template-columns: minmax(0, 2fr) minmax(0, 3fr); }
      .bk-card--text { grid-template-columns: 1fr; }
      .bk-card--text .bk-card-body { padding: 1.25rem 1.5rem 1.4rem; }
      .bk-card--text h2 { font-size: 1.4rem; }
      .bk-card--lead { grid-column: span 12; grid-template-columns: minmax(0, 1fr) minmax(0, 2fr); }
      .bk-card--half { grid-column: span 6; }
      .bk-card--lead .bk-card-cover { padding: 2rem; }
            .bk-card--lead .bk-card-body { padding: 2rem 2.4rem; justify-content: center; }
      .bk-card--lead h2 { font-size: clamp(2rem, 1.6vw + 1.4rem, 2.8rem); }
    }
    @media (min-width: 901px) and (max-width: 1250px) {
      .bk-card--half { grid-template-columns: 1fr; }
    }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Books & Writing Projects by OA Allen",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "The Delcath Series", "url": "https://peevishpenman.com/pages/delcath-series" },
      { "@type": "ListItem", "position": 2, "name": "The Handbook of the Writer Secret Society", "url": "https://peevishpenman.com/pages/writer-secret-society" },
      { "@type": "ListItem", "position": 3, "name": "The Bright Dark", "url": "https://peevishpenman.com/pages/bright-dark" },
      { "@type": "ListItem", "position": 4, "name": "Ghost Trucker", "url": "https://peevishpenman.com/pages/ghost-trucker" },
      { "@type": "ListItem", "position": 5, "name": "The Reptilian Conspiracy Coloring Book", "url": "https://peevishpenman.com/pages/coloring-book" }
    ]
  }
  </script>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="bk-page">
  <header class="bk-head">
    <p class="ppm-article-kicker">Peevish Penman</p>
    <h1>Books &amp; Writing Projects</h1>
    <p>Everything OA Allen is writing, from finished novellas to what&rsquo;s coming next.</p>
  </header>

  <section class="bk-section">
    <div class="bk-section-head">
      <h2 class="bk-section-title">Available Now</h2>
      <p class="bk-section-note">Both Delcath novellas, the free Writer Secret Society handbook and the coloring book. <a href="/pages/delcath-series">About the Delcath series &rarr;</a></p>
    </div>
    <div class="bk-grid">
      <a class="bk-card bk-card--half" href="/pages/delcath-series#waiting-on-delcath">
        <div class="bk-card-cover">
          <img src="/img/covers/wod-cover-3d.webp" alt="Waiting on Delcath — book cover" width="1086" height="1448" loading="lazy">
        </div>
        <div class="bk-card-body">
          <p class="bk-card-kicker">Book One &middot; Novella</p>
          <h2>Waiting on Delcath</h2>
          <p><p>Three miners. One asteroid. Twelve months between them and retirement. A claustrophobic survival story about friendship, dependency and a system that planned for everything except being left terribly alone.</p></p>
          <span class="bk-card-cta">Read more &rarr;</span>
        </div>
      </a>
      <a class="bk-card bk-card--half" href="/pages/delcath-series#children-of-delcath">
        <div class="bk-card-cover">
          <img src="/img/covers/cod-cover-3d.webp" alt="Children of Delcath — book cover" width="1086" height="1448" loading="lazy">
        </div>
        <div class="bk-card-body">
          <p class="bk-card-kicker">Book Two &middot; Novella</p>
          <h2>Children of Delcath</h2>
          <p><p>Delcath does not merely employ miners. It makes them. On the unstable mining world of Kur, a young transmission worker begins to question why workers are designed the way they are.</p></p>
          <span class="bk-card-cta">Read more &rarr;</span>
        </div>
      </a>
      <a class="bk-card bk-card--half" href="/pages/writer-secret-society">
        <div class="bk-card-cover">
          <img src="/img/wss-hardcover.webp" alt="The Handbook of the Writer Secret Society — book cover" width="480" height="720" loading="lazy">
        </div>
        <div class="bk-card-body">
          <p class="bk-card-kicker">Free Download</p>
          <h2>The Handbook of the Writer Secret Society</h2>
          <p><p>Mystic wisdom, timeless methods, and practical inspiration for writers. Free PDF and EPUB.</p></p>
          <span class="bk-card-cta">Get the handbook &rarr;</span>
        </div>
      </a>
      <a class="bk-card bk-card--half" href="/pages/coloring-book">
        <div class="bk-card-cover">
          <img src="/img/covers/reptilian-cover-3d.webp" alt="Reptilian Conspiracy Coloring Book cover" width="1086" height="1448" loading="lazy">
        </div>
        <div class="bk-card-body">
          <p class="bk-card-kicker">Art &middot; Coloring Book</p>
          <h2>The Reptilian Conspiracy Coloring Book</h2>
          <p><p>Conspiracy culture, drawing, and a questionable sense of humor meet sleep deprivation and a drawing tablet.</p></p>
          <span class="bk-card-cta">See the book &rarr;</span>
        </div>
      </a>
    </div>
  </section>

  <section class="bk-section">
    <div class="bk-section-head">
      <h2 class="bk-section-title">In Progress</h2>
      <p class="bk-section-note">Coming soon from Peevish Penman Press.</p>
    </div>
    <div class="bk-grid">
      <a class="bk-card bk-card--half bk-card--text" href="/pages/bright-dark">
        <div class="bk-card-body">
          <p class="bk-card-kicker">Novel &middot; Coming Soon</p>
          <h2>The Bright Dark</h2>
          <p>A post-apocalyptic future built from myth, technology, and the assumptions people build afterward. It grew out of imagining a future shaped not just by catastrophe, but by its aftermath&mdash;and by the problem of understanding a civilization after much of its knowledge has been lost.</p>
          <span class="bk-card-cta">Read more &rarr;</span>
        </div>
      </a>
      <a class="bk-card bk-card--half bk-card--text" href="/pages/ghost-trucker">
        <div class="bk-card-body">
          <p class="bk-card-kicker">Work in Progress</p>
          <h2>Ghost Trucker</h2>
          <p>Speculative fiction from the cab of a semi, in the territory between the rational and the uncanny: artificial intelligence captures human consciousness at the moment of death and whisks them away to a universe run on indentured servitude and questionable truck-stop soda dispensers.</p>
          <span class="bk-card-cta">Read more &rarr;</span>
        </div>
      </a>
    </div>
  </section>

  <p style="margin-top: 2.5rem;">
    The research and craft behind the books lives in the articles:
    <a href="/article-tag?tag=worldbuilding">worldbuilding</a>,
    <a href="/article-tag?tag=archetypes">character archetypes</a>,
    <a href="/article-tag?tag=independentpublishing">self-publishing</a>, and
    <a href="/articles">everything else</a>.
  </p>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
