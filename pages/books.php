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
  <meta property="og:image" content="https://peevishpenman.com/img/peevish-penman-social-share-1200x630.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Books – Peevish Penman">
  <meta name="twitter:description" content="Books and writing projects from OA Allen: the Delcath series, The Bright Dark, Ghost Trucker, and the free Writer Secret Society Handbook.">
  <meta name="twitter:image" content="https://peevishpenman.com/img/peevish-penman-social-share-1200x630.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/styles/main.css') ?>">

  <style>
    .ppm-books-grid {
      display: grid;
      gap: 1.25rem;
      margin-top: 2rem;
    }

    .ppm-book-card {
      display: block;
      background: var(--ppm-surface);
      border: 1px solid var(--ppm-border-soft);
      border-radius: var(--ppm-radius-md);
      padding: 1.5rem 1.75rem;
      text-decoration: none;
      transition: border-color var(--ppm-transition-fast), transform var(--ppm-transition-fast);
    }

    .ppm-book-card:hover {
      border-color: var(--ppm-hermes);
      transform: translateY(-2px);
    }

    .ppm-book-card-label {
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--ppm-hermes-shadow);
      margin: 0 0 0.5rem;
    }

    .ppm-book-card--has-cover {
      display: grid;
      grid-template-columns: 7.5rem 1fr;
      gap: 1.5rem;
      align-items: center;
    }

    .ppm-book-card-cover {
      aspect-ratio: 2 / 3;
      border-radius: var(--ppm-radius-sm);
      overflow: hidden;
    }

    .ppm-book-card-cover img {
      display: block;
      width: 100%;
      height: 100%;
      margin: 0; /* cancel .ppm-article img's vertical margin, which pushed the cover down and clipped its bottom */
      object-fit: cover;
    }

    .ppm-book-card-cover--inset img {
      object-fit: contain;
    }

    .ppm-book-card-cover--zoom img {
      transform: scale(1.3);
    }

    @media (max-width: 480px) {
      .ppm-book-card--has-cover {
        grid-template-columns: 1fr;
        gap: 1rem;
      }

      .ppm-book-card-cover {
        width: 7rem;
      }
    }

    .ppm-book-card h2 {
      margin: 0 0 0.5rem;
    }

    .ppm-book-card p {
      margin: 0;
      color: var(--ppm-text-muted);
    }
  </style>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner">
    <header class="ppm-article-header">
      <p class="ppm-article-kicker">Peevish Penman</p>
      <h1>Books &amp; Writing Projects</h1>
    </header>

    <section>
      <p>Everything OA Allen is writing, from finished novellas to what's coming next.</p>

      <div class="ppm-books-grid">
        <a class="ppm-book-card ppm-book-card--has-cover" href="/pages/delcath-series">
          <div class="ppm-book-card-cover ppm-book-card-cover--inset">
            <img src="/img/covers/wod-cover-3d.webp" alt="Waiting on Delcath — book cover" width="1086" height="1448" loading="lazy">
          </div>
          <div>
            <p class="ppm-book-card-label">Series &middot; Available Now</p>
            <h2>The Delcath Series</h2>
            <p>Asteroid miners, corporate dependence, and a tribute to Sartre&rsquo;s <em>No Exit</em>. Start with <em>Waiting on Delcath</em>.</p>
          </div>
        </a>

        <a class="ppm-book-card ppm-book-card--has-cover" href="/pages/writer-secret-society">
          <div class="ppm-book-card-cover ppm-book-card-cover--zoom">
            <img src="/img/wss-hardcover.webp" alt="The Handbook of the Writer Secret Society — book cover" width="480" height="720" loading="lazy">
          </div>
          <div>
            <p class="ppm-book-card-label">Free Download</p>
            <h2>The Handbook of the Writer Secret Society</h2>
            <p>Mystic wisdom, timeless methods, and practical inspiration for writers. Free PDF and EPUB.</p>
          </div>
        </a>

        <a class="ppm-book-card" href="/pages/bright-dark">
          <p class="ppm-book-card-label">Novel &middot; Coming Soon</p>
          <h2>The Bright Dark</h2>
          <p>A post-apocalyptic future built from myth, technology, and the assumptions people build afterward.</p>
        </a>

        <a class="ppm-book-card" href="/pages/ghost-trucker">
          <p class="ppm-book-card-label">Work in Progress</p>
          <h2>Ghost Trucker</h2>
          <p>Speculative fiction from the cab of a semi, in the territory between the rational and the uncanny.</p>
        </a>

        <a class="ppm-book-card ppm-book-card--has-cover" href="/pages/coloring-book">
          <div class="ppm-book-card-cover ppm-book-card-cover--inset">
            <img src="/img/covers/reptilian-cover-3d.webp" alt="Reptilian Conspiracy Coloring Book cover" width="1086" height="1448" loading="lazy">
          </div>
          <div>
            <p class="ppm-book-card-label">Art &middot; Available Now</p>
            <h2>The Reptilian Conspiracy Coloring Book</h2>
            <p>Conspiracy culture, art, philosophy, and a sense of humor, refusing to live in separate rooms.</p>
          </div>
        </a>
      </div>
    </section>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
