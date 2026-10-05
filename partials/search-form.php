<?php
// Site search box. Set $ppm_search_query to prefill it (the search page
// does) and $ppm_search_autofocus = true to focus it on load.
$ppm_search_query = $ppm_search_query ?? '';
$ppm_search_autofocus = $ppm_search_autofocus ?? false;
?>
<form class="ppm-search-form" action="/search" method="get" role="search">
  <input type="search" name="q" placeholder="Search articles&hellip;"
         value="<?php echo htmlspecialchars($ppm_search_query); ?>" aria-label="Search articles"<?php echo $ppm_search_autofocus ? ' autofocus' : ''; ?>>
  <button type="submit">Search</button>
</form>
