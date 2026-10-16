<?php
// Cloudflare Turnstile "verify you're human" check for the newsletter forms.
//
// Site key (public):   set PPM_TURNSTILE_SITE_KEY below.
// Secret key (private): put it alone in partials/data/turnstile-secret.txt
//                       (git-ignored and blocked from the web), or set the
//                       PPM_TURNSTILE_SECRET environment variable.
// Until both are set, the check is off and sign-ups work as before.

const PPM_TURNSTILE_SITE_KEY = '0x4AAAAAAFYkke6hEGAljY6V';

function ppm_turnstile_secret() {
    $env = getenv('PPM_TURNSTILE_SECRET');
    if ($env) {
        return trim($env);
    }
    $file = __DIR__ . '/data/turnstile-secret.txt';
    return is_readable($file) ? trim((string) file_get_contents($file)) : '';
}

// Prints the widget (and, once per page, its script) inside a form.
function ppm_turnstile_widget() {
    static $script = false;
    if (PPM_TURNSTILE_SITE_KEY === '') {
        return;
    }
    if (!$script) {
        echo '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit" async defer></script>' . "\n";
        $script = true;
    }
    // Not drawn until the visitor clicks into the email box (js/main.js), so
    // the check never appears before they've started signing up.
    echo '<div class="ppm-turnstile" data-ppm-sitekey="' . htmlspecialchars(PPM_TURNSTILE_SITE_KEY) . '"></div>' . "\n";
}

// True if the visitor passed the check. Also true when the check isn't set
// up yet, or when Cloudflare can't be reached, so a Cloudflare outage never
// blocks real sign-ups.
function ppm_turnstile_ok($token, $ip) {
    $secret = ppm_turnstile_secret();
    if (PPM_TURNSTILE_SITE_KEY === '' || $secret === '') {
        return true;
    }
    if (!is_string($token) || $token === '') {
        return false;
    }
    $ch = curl_init('https://challenges.cloudflare.com/turnstile/v0/siteverify');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query(['secret' => $secret, 'response' => $token, 'remoteip' => $ip]),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 5,
    ]);
    $body = curl_exec($ch);
    curl_close($ch);
    $result = is_string($body) ? json_decode($body, true) : null;
    if (!is_array($result)) {
        return true;
    }
    return ($result['success'] ?? false) === true;
}
