<?php
// "Share this post" links shown at the end of an article. Expects $post_meta
// (see article-slug.php for the shape) to already be set.
//
// Every link carries UTM tags so Google Analytics can say where a visit came
// from even when the referrer is stripped (in-app browsers, messaging apps,
// email): utm_source is the network, utm_medium is "social" (or "share" for
// email and copied links), utm_campaign is "article_share" and utm_content
// is the post's slug. Clicks are also logged as GA4 "share" events (js/main.js).
$ppm_share_url   = 'https://peevishpenman.com/articles/' . $post_meta['slug'];
$ppm_share_title = $post_meta['title'];

$ppm_share_tagged = function ($source, $medium) use ($ppm_share_url, $post_meta) {
  return $ppm_share_url . '?' . http_build_query([
    'utm_source'   => $source,
    'utm_medium'   => $medium,
    'utm_campaign' => 'article_share',
    'utm_content'  => $post_meta['slug'],
  ], '', '&', PHP_QUERY_RFC3986);
};

$ppm_share_targets = [
  'facebook' => ['Facebook', 'https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode($ppm_share_tagged('facebook', 'social'))],
  'x'        => ['X', 'https://twitter.com/intent/tweet?text=' . rawurlencode($ppm_share_title) . '&url=' . rawurlencode($ppm_share_tagged('x', 'social'))],
  'bluesky'  => ['Bluesky', 'https://bsky.app/intent/compose?text=' . rawurlencode($ppm_share_title . ' ' . $ppm_share_tagged('bluesky', 'social'))],
  'linkedin' => ['LinkedIn', 'https://www.linkedin.com/sharing/share-offsite/?url=' . rawurlencode($ppm_share_tagged('linkedin', 'social'))],
  'reddit'   => ['Reddit', 'https://www.reddit.com/submit?url=' . rawurlencode($ppm_share_tagged('reddit', 'social')) . '&title=' . rawurlencode($ppm_share_title)],
  'email'    => ['Email', 'mailto:?subject=' . rawurlencode($ppm_share_title) . '&body=' . rawurlencode($ppm_share_tagged('email', 'share'))],
];
?>
<nav class="ppm-share" aria-label="Share this post" data-ppm-share-slug="<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <p class="ppm-share-label">Share this post</p>
  <ul class="ppm-share-list">
    <?php foreach ($ppm_share_targets as $ppm_share_key => [$ppm_share_name, $ppm_share_href]): ?>
      <li><a class="ppm-share-link" href="<?php echo htmlspecialchars($ppm_share_href); ?>" data-ppm-share="<?php echo $ppm_share_key; ?>"<?php echo $ppm_share_key === 'email' ? '' : ' target="_blank" rel="noopener"'; ?>><?php echo $ppm_share_name; ?></a></li>
    <?php endforeach; ?>
    <li><button type="button" class="ppm-share-link" data-ppm-share="copy_link" data-ppm-share-url="<?php echo htmlspecialchars($ppm_share_tagged('link', 'share')); ?>">Copy link</button></li>
  </ul>
</nav>
