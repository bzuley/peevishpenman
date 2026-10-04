<?php
// Private newsletter dashboard: who's on the list, who left, and where
// people sign up. Password-protected with the password below.
require_once __DIR__ . '/partials/newsletter-lib.php';

header('X-Robots-Tag: noindex, nofollow');
header('Cache-Control: no-store');
header('Referrer-Policy: no-referrer');

const PPM_NEWSLETTER_ADMIN_PASSWORD = '4471';
$hash = password_hash(PPM_NEWSLETTER_ADMIN_PASSWORD, PASSWORD_DEFAULT);

session_name('ppm_admin');
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/newsletter-admin',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict',
]);
session_start();

// Wrong passwords across all visitors, kept in the blocked data folder.
// After too many in a short window, logins pause for everyone.
define('PPM_ADMIN_ATTEMPTS', PPM_NEWSLETTER_DIR . '/newsletter-admin-attempts.json');
const PPM_ADMIN_MAX_FAILS = 10;
const PPM_ADMIN_WINDOW = 900;

function ppm_admin_recent_fails() {
    $fails = json_decode((string) @file_get_contents(PPM_ADMIN_ATTEMPTS), true);
    if (!is_array($fails)) {
        return [];
    }
    $cutoff = time() - PPM_ADMIN_WINDOW;
    return array_values(array_filter($fails, function ($t) use ($cutoff) {
        return is_int($t) && $t > $cutoff;
    }));
}

function ppm_admin_record_fail() {
    if (!is_dir(PPM_NEWSLETTER_DIR)) {
        @mkdir(PPM_NEWSLETTER_DIR, 0755, true);
    }
    $fails = ppm_admin_recent_fails();
    $fails[] = time();
    @file_put_contents(PPM_ADMIN_ATTEMPTS, json_encode($fails), LOCK_EX);
}

function ppm_admin_csrf() {
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
    }
    return $_SESSION['csrf'];
}

$error = '';
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($method === 'POST' && ($_POST['action'] ?? '') === 'logout') {
    if (hash_equals(ppm_admin_csrf(), (string) ($_POST['csrf'] ?? ''))) {
        $_SESSION = [];
        session_destroy();
    }
    header('Location: /newsletter-admin', true, 303);
    exit;
}

if ($method === 'POST' && ($_POST['action'] ?? '') === 'login' && $hash !== '') {
    if (count(ppm_admin_recent_fails()) >= PPM_ADMIN_MAX_FAILS) {
        $error = 'Too many wrong passwords. Try again in 15 minutes.';
    } elseif (password_verify(trim((string) ($_POST['password'] ?? '')), $hash)) {
        session_regenerate_id(true);
        $_SESSION['admin'] = true;
        header('Location: /newsletter-admin', true, 303);
        exit;
    } else {
        ppm_admin_record_fail();
        sleep(1);
        $error = 'That password isn’t right.';
    }
}

$signed_in = $hash !== '' && !empty($_SESSION['admin']);

// Spreadsheet downloads, for signed-in visitors only.
if ($signed_in && isset($_GET['download'])) {
    $files = [
        'subscribers' => PPM_NEWSLETTER_SHEET,
        'unsubscribed' => PPM_NEWSLETTER_UNSUBSCRIBED,
    ];
    $which = (string) $_GET['download'];
    if (isset($files[$which])) {
        if ($which === 'subscribers') {
            // Opening the sheet folds in any old plain-text sign-ups first.
            $open = ppm_newsletter_open();
            if ($open !== null) {
                ppm_newsletter_close($open[0]);
            }
        }
        header('Content-Type: text/csv; charset=UTF-8');
        header('Content-Disposition: attachment; filename="newsletter-' . $which . '-' . date('Y-m-d') . '.csv"');
        if (is_readable($files[$which])) {
            readfile($files[$which]);
        }
        exit;
    }
}

$subscribers = [];
$unsubscribed = [];
$load_error = false;
if ($signed_in) {
    $open = ppm_newsletter_open();
    if ($open === null) {
        $load_error = true;
    } else {
        [$fh, $subscribers] = $open;
        ppm_newsletter_close($fh);
    }
    if (is_readable(PPM_NEWSLETTER_UNSUBSCRIBED) && ($log = fopen(PPM_NEWSLETTER_UNSUBSCRIBED, 'r')) !== false) {
        flock($log, LOCK_SH);
        $first = true;
        while (($row = fgetcsv($log, 0, ',', '"', '')) !== false) {
            if ($first) {
                $first = false;
                continue;
            }
            if (isset($row[1]) && $row[1] !== '') {
                $unsubscribed[] = $row;
            }
        }
        flock($log, LOCK_UN);
        fclose($log);
    }

    // Newest first. Dates are "Y-m-d H:i", so they sort as text.
    usort($subscribers, function ($a, $b) {
        return strcmp($b[0], $a[0]);
    });
    $unsubscribed = array_reverse($unsubscribed);

    $since = function ($days) use ($subscribers) {
        $cutoff = date('Y-m-d H:i', strtotime("-$days days"));
        return count(array_filter($subscribers, function ($row) use ($cutoff) {
            return $row[0] !== '' && $row[0] >= $cutoff;
        }));
    };
    $last7 = $since(7);
    $last30 = $since(30);

    $pages = [];
    foreach ($subscribers as $row) {
        $page = ($row[2] ?? '') !== '' ? $row[2] : '(unknown)';
        $pages[$page] = ($pages[$page] ?? 0) + 1;
    }
    arsort($pages);
}

$h = function ($s) {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Newsletter Admin – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/partials/assets.php'; ?>
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner ppm-admin">
    <header class="ppm-article-header">
      <p class="ppm-article-kicker">Newsletter</p>
      <h1>Sign-ups</h1>
    </header>

<?php if ($hash === ''): ?>
    <section>
      <p>This page isn&rsquo;t set up yet. Add a <strong>NEWSLETTER_ADMIN_PASSWORD</strong>
        secret to the GitHub repository and deploy the site again.</p>
    </section>

<?php elseif (!$signed_in): ?>
    <section>
      <form action="/newsletter-admin" method="POST" class="ppm-admin-login">
        <input type="hidden" name="action" value="login">
        <input type="password" name="password" placeholder="Password" required
               aria-label="Password" autocomplete="current-password" autofocus>
        <button type="submit">Sign in</button>
      </form>
<?php if ($error !== ''): ?>
      <p class="ppm-footer-message ppm-footer-message-error ppm-admin-center" role="alert"><?= $h($error) ?></p>
<?php endif; ?>
    </section>

<?php else: ?>
<?php if ($load_error): ?>
    <p class="ppm-footer-message ppm-footer-message-error" role="alert">Couldn&rsquo;t open the sign-up sheet on the server.</p>
<?php endif; ?>
    <div class="ppm-admin-stats">
      <div><strong><?= count($subscribers) ?></strong><span>on the list</span></div>
      <div><strong><?= $last7 ?></strong><span>new this week</span></div>
      <div><strong><?= $last30 ?></strong><span>new in 30 days</span></div>
      <div><strong><?= count($unsubscribed) ?></strong><span>unsubscribed</span></div>
    </div>

    <p class="ppm-admin-actions">
      <a href="/newsletter-admin?download=subscribers">Download list (CSV)</a>
<?php if ($unsubscribed): ?>
      <a href="/newsletter-admin?download=unsubscribed">Download unsubscribes (CSV)</a>
<?php endif; ?>
    </p>

    <section>
      <h2>Subscribers</h2>
<?php if (!$subscribers): ?>
      <p>No one has signed up yet.</p>
<?php else: ?>
      <div class="ppm-admin-table-wrap">
        <table class="ppm-admin-table">
          <thead><tr><th>Signed up</th><th>Email</th><th>Page</th></tr></thead>
          <tbody>
<?php foreach ($subscribers as $row): ?>
            <tr><td><?= $h($row[0]) ?></td><td><?= $h($row[1]) ?></td><td><?= $h($row[2] ?? '') ?></td></tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
<?php endif; ?>
    </section>

<?php if ($subscribers): ?>
    <section>
      <h2>Where people sign up</h2>
      <div class="ppm-admin-table-wrap">
        <table class="ppm-admin-table">
          <thead><tr><th>Page</th><th>Sign-ups</th></tr></thead>
          <tbody>
<?php foreach ($pages as $page => $n): ?>
            <tr><td><?= $h($page) ?></td><td><?= $n ?></td></tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
<?php endif; ?>

<?php if ($unsubscribed): ?>
    <section>
      <h2>Unsubscribed</h2>
      <div class="ppm-admin-table-wrap">
        <table class="ppm-admin-table">
          <thead><tr><th>Left</th><th>Email</th></tr></thead>
          <tbody>
<?php foreach ($unsubscribed as $row): ?>
            <tr><td><?= $h($row[0]) ?></td><td><?= $h($row[1]) ?></td></tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
<?php endif; ?>

    <form action="/newsletter-admin" method="POST" class="ppm-admin-center">
      <input type="hidden" name="action" value="logout">
      <input type="hidden" name="csrf" value="<?= $h(ppm_admin_csrf()) ?>">
      <button type="submit" class="ppm-admin-signout">Sign out</button>
    </form>
<?php endif; ?>
  </article>
</main>

</body>
</html>
