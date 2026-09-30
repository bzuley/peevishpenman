<?php
// Newsletter sign-up handler: adds the visitor to the sign-up sheet
// (see partials/newsletter-lib.php) and sends them back to the form.
require_once __DIR__ . '/newsletter-lib.php';

// The page the visitor signed up on, if the Referer is this site; else ''.
function ppm_signup_referer_path() {
    $referer = $_SERVER['HTTP_REFERER'] ?? '';
    $path = parse_url($referer, PHP_URL_PATH);
    $host = parse_url($referer, PHP_URL_HOST);
    $site = parse_url('http://' . ($_SERVER['HTTP_HOST'] ?? ''), PHP_URL_HOST);
    if (!is_string($path) || $path === '' || $path[0] !== '/' ||
        ($host !== null && strcasecmp($host, (string) $site) !== 0)) {
        return '';
    }
    return $path;
}

// Send the visitor back to the page they signed up on, scrolled to the form
// they used. Only same-site paths are used, so the Referer can't bounce
// anyone to another site.
function ppm_signup_redirect($status, $form) {
    $path = ppm_signup_referer_path() ?: '/';
    $anchor = $form === 'home' ? 'signup' : 'newsletter';
    header('Location: ' . $path . '?signup=' . $status . '&form=' . $form . '#' . $anchor, true, 303);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

$form = ($_POST['form'] ?? '') === 'home' ? 'home' : 'footer';

// Bots fill in every field, including this one hidden from people.
if (($_POST['website'] ?? '') !== '') {
    ppm_signup_redirect('success', $form);
}

$email = ppm_newsletter_normalize_email($_POST['email'] ?? '');
if ($email === null) {
    ppm_signup_redirect('error', $form);
}

$saved = ppm_newsletter_subscribe($email, ppm_signup_referer_path());
ppm_signup_redirect($saved ? 'success' : 'error', $form);
