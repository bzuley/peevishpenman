<?php
/**
 * Cache-busted URL for a local CSS/JS file, e.g.
 * ppm_asset('/styles/main.css') => '/styles/main.css?v=1727999999'.
 * .htaccess tells browsers to cache CSS and JS for a year, so the
 * file's modification time in the query string is what makes them
 * fetch the new copy after a deploy. A missing file gets its plain
 * path back rather than a PHP warning in the page.
 */
function ppm_asset($path) {
    $mtime = @filemtime($_SERVER['DOCUMENT_ROOT'] . $path);
    return $mtime ? $path . '?v=' . $mtime : $path;
}
