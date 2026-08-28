<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reptilian Conspiracy Coloring Book – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Reptilian Conspiracy Coloring Book by OA Allen. Details coming soon.">
  <meta name="author" content="OA Allen">
  <meta name="robots" content="noindex, nofollow">

  <link rel="stylesheet" href="/styles/main.css">

  <style>
    .rcb-title-block {
      position: relative;
      padding: 0.5rem 0 1rem;
    }

    .rcb-hero-art {
      position: absolute;
      inset: -1.5rem -10% 0;
      z-index: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      pointer-events: none;
    }

    .rcb-hero-art img {
      width: min(380px, 100%);
      height: auto;
      opacity: 0.5;
      filter: saturate(0.9);
    }

    .rcb-hero-art::after {
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

    .rcb-title-block .ppm-article-kicker,
    .rcb-title-block h1 {
      position: relative;
      z-index: 1;
      text-shadow: 0 4px 18px rgba(5, 6, 8, 0.85);
    }
  </style>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner">
    <header class="ppm-article-header">
      <div class="rcb-title-block">
        <div class="rcb-hero-art" aria-hidden="true">
          <img src="/img/reptilian_coloringbook_cover_dynamic.webp" alt="" width="1086" height="1448">
        </div>
        <p class="ppm-article-kicker">Writing Project</p>
        <h1>Reptilian Conspiracy Coloring Book</h1>
      </div>
    </header>

    <section>
      <p>
        This page is under construction. Full details, previews, and
        ordering information for the Reptilian Conspiracy Coloring Book are
        coming soon.
      </p>
      <p>
        Want to know the moment it's ready? Join the
        <a href="/pages/newsletter.php">newsletter</a>.
      </p>
    </section>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
