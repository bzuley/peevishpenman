<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title>Reptilian Conspiracy Coloring Book – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A satirical adult coloring book for anyone who suspects the people in charge might not be entirely human. Available now on Amazon.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/pages/coloring-book">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Peevish Penman">
  <meta property="og:title" content="Reptilian Conspiracy Coloring Book – Peevish Penman">
  <meta property="og:description" content="A satirical adult coloring book for anyone who suspects the people in charge might not be entirely human. Available now on Amazon.">
  <meta property="og:url" content="https://peevishpenman.com/pages/coloring-book">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://peevishpenman.com/img/social/coloring-book.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Reptilian Conspiracy Coloring Book – Peevish Penman">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Reptilian Conspiracy Coloring Book – Peevish Penman">
  <meta name="twitter:description" content="A satirical adult coloring book for anyone who suspects the people in charge might not be entirely human. Available now on Amazon.">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/coloring-book.jpg">
  <meta name="twitter:image:alt" content="Reptilian Conspiracy Coloring Book – Peevish Penman">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/partials/assets.php'; ?>
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">

  <style>
    .rcb-page { max-width: 1500px; margin: 0 auto; padding: clamp(1.5rem, 4vw, 3rem) 5% 4rem; display: grid; gap: 1.25rem; }
    .rcb-card { background: var(--ppm-surface); border: 1px solid var(--ppm-border-soft); border-radius: var(--ppm-radius-md); padding: clamp(1.5rem, 3vw, 3rem); display: grid; gap: clamp(1.5rem, 3vw, 3rem); align-items: center; }
    .rcb-cover { text-align: center; }
    .rcb-cover img { width: min(300px, 70%); height: auto; margin: 0 auto; display: block; filter: drop-shadow(0 14px 28px rgba(0, 0, 0, 0.45)); }
    .rcb-label { font-family: "IBM Plex Mono", monospace; font-size: 0.75rem; font-weight: 500; letter-spacing: 0.24em; text-transform: uppercase; color: var(--ppm-hermes-shadow); margin: 0 0 0.6rem; }
    .rcb-copy h1, .rcb-copy h2 { font-family: Georgia, "Times New Roman", serif; font-weight: 700; line-height: 1.12; margin: 0 0 0.6em; }
    .rcb-copy h1 { font-size: clamp(2rem, 1.6vw + 1.4rem, 3rem); }
    .rcb-copy h2 { font-size: clamp(1.5rem, 1vw + 1.1rem, 2rem); }
    .rcb-hook { font-weight: 600; font-size: 1.15rem; color: var(--ppm-hermes-lumen); margin: 0 0 1.1rem; }
    .rcb-copy p { line-height: 1.65; }
    .rcb-buy { margin-top: 1.5rem; }
    .rcb-page .rcb-buy .ppm-button { color: #000; text-decoration: none; }
    .rcb-sample { margin: 0; text-align: center; }
    .rcb-sample img { width: auto; max-width: min(420px, 100%); max-height: 38rem; height: auto; margin: 0 auto; display: block; border-radius: var(--ppm-radius-sm); }
    .rcb-sample figcaption { margin-top: 0.75rem; font-style: italic; color: var(--ppm-text-muted); font-size: 0.9rem; }

    @media (min-width: 901px) {
      .rcb-card { grid-template-columns: minmax(220px, 1fr) minmax(0, 2.4fr); }
      .rcb-card--sample { grid-template-columns: minmax(0, 2.4fr) minmax(220px, 1fr); }
    }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Book",
    "name": "Reptilian Conspiracy Coloring Book",
    "author": { "@type": "Person", "name": "OA Allen" },
    "description": "A satirical adult coloring book for anyone who suspects the people in charge might not be entirely human.",
    "image": "https://peevishpenman.com/img/covers/reptilian-cover-3d.webp",
    "url": "https://peevishpenman.com/pages/coloring-book",
    "offers": {
      "@type": "Offer",
      "url": "https://www.amazon.com/dp/B09MYXZ71P",
      "availability": "https://schema.org/InStock"
    }
  }
  </script>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="rcb-page">
  <section class="rcb-card">
    <div class="rcb-cover">
      <img src="/img/reptilian_coloringbook_cover_dynamic.webp" alt="Reptilian Conspiracy: A Coloring Book cover" width="1086" height="1448" loading="lazy">
    </div>
    <div class="rcb-copy">
      <p class="rcb-label">Art &middot; Coloring Book</p>
      <h1>Reptilian Conspiracy Coloring Book</h1>
      <p class="rcb-hook">Scenes from the world&rsquo;s least convincing cover-up.</p>
      <p>
        They're already among us&mdash;running press conferences, presiding
        over kitchens, sitting for royal portraits&mdash;and somebody has to
        document it. <strong>The Reptilian Conspiracy Coloring Book</strong>
        is a hand-drawn collection of scenes from the world's least
        convincing cover-up, for anyone who has ever suspected the people in
        charge might not be entirely human.
      </p>
      <p>
        Conspiracy culture, art, and a sense of humor, refusing to live in
        separate rooms. Grab your colored pencils and get to the bottom of
        it.
      </p>
      <p class="rcb-buy">
        <a class="ppm-button" href="https://www.amazon.com/dp/B09MYXZ71P" target="_blank" rel="noopener noreferrer">
          Buy on Amazon
        </a>
      </p>
    </div>
  </section>

  <section class="rcb-card rcb-card--sample">
    <div class="rcb-copy">
      <p class="rcb-label">Inside the Book</p>
      <h2>A Page From the Book</h2>
      <p>
        The book started as a joke cover made to amuse a sister; read how it
        led to a publishing career in
        <a href="/articles/confirmed-independent-publisher">Confirmed Independent Publisher</a>.
      </p>
      <p>
        Want previews and release news for future titles? Join the
        <a href="#newsletter">newsletter</a>.
      </p>
    </div>
    <figure class="rcb-sample">
      <img src="/img/reptilian-juliachild.webp" alt="Coloring book page of a grinning reptilian chef in a retro kitchen, with a preserved head in a jar on the shelf behind her" width="2174" height="2820" loading="lazy">
      <figcaption>One of the illustrations you'll find inside.</figcaption>
    </figure>
  </section>
</main>

<?php $ppm_book_page = true; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
