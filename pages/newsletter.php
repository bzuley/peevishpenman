<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Newsletter – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Join the Peevish Penman newsletter for chapters, secret extras, and release dates from OA Allen.">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/pages/newsletter">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner">
    <header class="ppm-article-header">
      <p class="ppm-article-kicker">Peevish Penman</p>
      <h1>Get the Drops First</h1>
    </header>

    <section>
      <p>Chapters, secret extras, and release dates—straight from the studio. No filler. No delay.</p>

      <form action="/partials/newsletter-signup.php" method="POST" id="newsletter-form">
        <div class="ppm-footer-newsletter-form">
          <input type="email" name="email" placeholder="Your email" required aria-label="Email address">
          <button type="submit" aria-label="Join the newsletter now">Join Now</button>
        </div>

        <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
          <p class="ppm-footer-message ppm-footer-message-success">Thanks—check your inbox.</p>
        <?php endif; ?>

        <?php if (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
          <p class="ppm-footer-message ppm-footer-message-error">Something went wrong. Please try again.</p>
        <?php endif; ?>
      </form>

      <p class="ppm-footer-newsletter-meta">One email when it matters. Unsubscribe anytime.</p>
    </section>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
