<?php
// Shared helpers for the newsletter sign-up sheet.
//
// partials/data/newsletter-subscribers.csv  - who's on the list (date, email, page)
// partials/data/newsletter-unsubscribed.csv - who left, and when
//
// Both open directly in Excel, Numbers or Google Sheets. The data/ folder is
// blocked from the web by .htaccess; download the files through the hosting
// control panel.

define('PPM_NEWSLETTER_DIR', __DIR__ . '/data');
define('PPM_NEWSLETTER_SHEET', PPM_NEWSLETTER_DIR . '/newsletter-subscribers.csv');
define('PPM_NEWSLETTER_UNSUBSCRIBED', PPM_NEWSLETTER_DIR . '/newsletter-unsubscribed.csv');
// Sign-ups saved before the sheet existed, as "date | email" lines.
define('PPM_NEWSLETTER_LEGACY', PPM_NEWSLETTER_DIR . '/newsletter-subscribers.txt');

function ppm_newsletter_normalize_email($email) {
    $email = strtolower(trim((string) $email));
    // A leading =, + or - is technically allowed in an address but would make
    // a spreadsheet treat the cell as a formula, so turn those away.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match('/^[=+\-]/', $email)) {
        return null;
    }
    return $email;
}

// Strip characters that would make a spreadsheet run a cell as a formula.
function ppm_newsletter_cell($value) {
    return preg_replace('/^[=+\-@\t\r]+/', '', (string) $value);
}

// Opens the sheet with an exclusive lock and returns [handle, rows], where
// rows excludes the header. Returns null if the sheet can't be opened.
// Callers must pass the handle to ppm_newsletter_close().
function ppm_newsletter_open() {
    if (!is_dir(PPM_NEWSLETTER_DIR) && !mkdir(PPM_NEWSLETTER_DIR, 0755, true)) {
        return null;
    }
    $fh = fopen(PPM_NEWSLETTER_SHEET, 'c+');
    if ($fh === false) {
        return null;
    }
    if (!flock($fh, LOCK_EX)) {
        fclose($fh);
        return null;
    }

    $rows = [];
    $first = true;
    while (($row = fgetcsv($fh, 0, ',', '"', '')) !== false) {
        if ($first) {
            $first = false;
            continue;
        }
        if (isset($row[1]) && $row[1] !== '') {
            $rows[] = $row;
        }
    }

    // Fold the old plain-text list into the sheet once, then set it aside.
    if (is_readable(PPM_NEWSLETTER_LEGACY)) {
        $known = array_map('strtolower', array_column($rows, 1));
        foreach (file(PPM_NEWSLETTER_LEGACY, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $parts = explode(' | ', $line, 2);
            $email = ppm_newsletter_normalize_email(end($parts));
            if ($email !== null && !in_array($email, $known, true)) {
                $date = count($parts) === 2 ? substr(trim($parts[0]), 0, 16) : '';
                $rows[] = [ppm_newsletter_cell($date), $email, ''];
                $known[] = $email;
            }
        }
        if (ppm_newsletter_write($fh, $rows)) {
            rename(PPM_NEWSLETTER_LEGACY, PPM_NEWSLETTER_DIR . '/newsletter-subscribers.imported.txt');
        }
    }

    return [$fh, $rows];
}

// Rewrites the whole sheet (header plus rows) in place.
function ppm_newsletter_write($fh, $rows) {
    rewind($fh);
    ftruncate($fh, 0);
    $ok = fputcsv($fh, ['Signed up', 'Email', 'Page'], ',', '"', '') !== false;
    foreach ($rows as $row) {
        $ok = $ok && fputcsv($fh, $row, ',', '"', '') !== false;
    }
    return fflush($fh) && $ok;
}

function ppm_newsletter_close($fh) {
    flock($fh, LOCK_UN);
    fclose($fh);
}

function ppm_newsletter_has($rows, $email) {
    foreach ($rows as $row) {
        if (strtolower($row[1]) === $email) {
            return true;
        }
    }
    return false;
}

// Adds an email to the list. Returns true if it's on the list afterwards.
function ppm_newsletter_subscribe($email, $page) {
    $open = ppm_newsletter_open();
    if ($open === null) {
        return false;
    }
    [$fh, $rows] = $open;
    $ok = true;
    if (!ppm_newsletter_has($rows, $email)) {
        $rows[] = [date('Y-m-d H:i'), $email, ppm_newsletter_cell($page)];
        $ok = ppm_newsletter_write($fh, $rows);
    }
    ppm_newsletter_close($fh);
    return $ok;
}

// Removes an email from the list and records it in the unsubscribed sheet.
// Returns false only if the sheet couldn't be updated.
function ppm_newsletter_unsubscribe($email) {
    $open = ppm_newsletter_open();
    if ($open === null) {
        return false;
    }
    [$fh, $rows] = $open;
    $kept = array_values(array_filter($rows, function ($row) use ($email) {
        return strtolower($row[1]) !== $email;
    }));
    $ok = true;
    if (count($kept) !== count($rows)) {
        $ok = ppm_newsletter_write($fh, $kept);
        if ($ok) {
            $log = fopen(PPM_NEWSLETTER_UNSUBSCRIBED, 'a');
            if ($log !== false) {
                flock($log, LOCK_EX);
                clearstatcache(true, PPM_NEWSLETTER_UNSUBSCRIBED);
                if (filesize(PPM_NEWSLETTER_UNSUBSCRIBED) === 0) {
                    fputcsv($log, ['Unsubscribed', 'Email'], ',', '"', '');
                }
                fputcsv($log, [date('Y-m-d H:i'), $email], ',', '"', '');
                flock($log, LOCK_UN);
                fclose($log);
            }
        }
    }
    ppm_newsletter_close($fh);
    return $ok;
}
