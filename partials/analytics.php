<?php
// Pages that answer "not found" set $ppm_ga_not_found = true before
// including this, so the Pages report in Google Analytics lists each
// missing URL (and the site that linked to it) by name instead of
// lumping every 404 under one "Page Not Found" title.
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PJTW8FGPV8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
<?php if (!empty($ppm_ga_not_found)): ?>
  (function () {
    var title = '404: ' + location.pathname + location.search;
    try {
      if (document.referrer) {
        title += ' (from ' + new URL(document.referrer).hostname + ')';
      }
    } catch (e) {}
    gtag('config', 'G-PJTW8FGPV8', { page_title: title });
  })();
<?php else: ?>
  gtag('config', 'G-PJTW8FGPV8');
<?php endif; ?>
</script>
