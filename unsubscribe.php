<?php
// Newsletter unsubscribe page. The "Unsubscribe" button in every newsletter
// links here (optionally with ?email= filled in); submitting the form
// removes the address from the sign-up sheet.
require_once __DIR__ . '/partials/newsletter-lib.php';

header('X-Robots-Tag: noindex, nofollow');

$state = 'form';
$prefill = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = ppm_newsletter_normalize_email($_POST['email'] ?? '');
    if ($email === null) {
        $state = 'invalid';
        $prefill = (string) ($_POST['email'] ?? '');
    } else {
        // Say the same thing whether or not the address was on the list, so
        // the page can't be used to check who's subscribed.
        $state = ppm_newsletter_unsubscribe($email) ? 'done' : 'error';
        $prefill = $email;
    }
} else {
    $prefill = (string) ($_GET['email'] ?? '');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title>Unsubscribe – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Unsubscribe from the Peevish Penman newsletter.">
  <meta name="author" content="OA Allen">
  <meta name="robots" content="noindex, nofollow">

  <link rel="canonical" href="https://peevishpenman.com/unsubscribe">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/styles/main.css') ?>">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner">
    <header class="ppm-article-header">
      <p class="ppm-article-kicker">Newsletter</p>
      <h1><?= $state === 'done' ? 'You&rsquo;re unsubscribed' : 'Unsubscribe' ?></h1>
    </header>

    <section>
<?php if ($state === 'done'): ?>
      <p role="status">
        <strong><?= htmlspecialchars($prefill) ?></strong> won&rsquo;t get any
        more newsletters from Peevish Penman. Sorry to see you go.
      </p>
      <p>Changed your mind? You can sign up again any time with the form at the bottom of this page.</p>
<?php else: ?>
      <p>Enter your email address to stop getting the Peevish Penman newsletter.</p>
<?php if ($state === 'invalid'): ?>
      <p class="ppm-footer-message ppm-footer-message-error" role="alert">That doesn&rsquo;t look like an email address. Please check it and try again.</p>
<?php elseif ($state === 'error'): ?>
      <p class="ppm-footer-message ppm-footer-message-error" role="alert">Something went wrong on our end. Please try again in a moment.</p>
<?php endif; ?>
      <form action="/unsubscribe" method="POST" class="ppm-search-form">
        <input type="email" name="email" placeholder="Your email" required aria-label="Email address"
               value="<?= htmlspecialchars($prefill) ?>" autocomplete="email">
        <button type="submit">Unsubscribe</button>
      </form>
<?php endif; ?>
    </section>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
