<?php
// Byline shown at the end of every article. Expects $post_meta (see
// article-slug.php for the shape) to already be set. Defaults to OA Allen's
// author card (no portrait, by design); set $post_meta['author'] (and
// 'guest_post' => true, plus optionally 'author_image' / 'author_bio' /
// 'author_link') for a guest-written post.
$ppm_byline_author = $post_meta['author'] ?? 'OA Allen';
$ppm_byline_is_guest = !empty($post_meta['guest_post']);

if ($ppm_byline_author === 'OA Allen') {
  $ppm_byline_image = null;
  $ppm_byline_bio   = 'Science-fiction writer & painter, researching belief, power, and technology.';
  $ppm_byline_link  = ['href' => '/pages/about', 'text' => 'More about OA Allen'];
} else {
  $ppm_byline_image = $post_meta['author_image'] ?? null;
  $ppm_byline_bio   = $post_meta['author_bio'] ?? null;
  $ppm_byline_link  = !empty($post_meta['author_link'])
    ? ['href' => $post_meta['author_link'], 'text' => 'More from ' . $ppm_byline_author]
    : null;
}

?>
<footer class="ppm-article-byline">
  <div class="ppm-byline-card">
    <?php if ($ppm_byline_image): ?>
      <img class="ppm-byline-avatar" src="<?php echo htmlspecialchars($ppm_byline_image); ?>"
           alt="<?php echo htmlspecialchars($ppm_byline_author); ?>" width="56" height="56" loading="lazy">
    <?php endif; ?>
    <div class="ppm-byline-text">
      <p class="ppm-byline-label"><?php echo $ppm_byline_is_guest ? 'Guest Contributor' : 'Written by'; ?></p>
      <p class="ppm-byline-name"><?php echo htmlspecialchars($ppm_byline_author); ?></p>
      <?php if ($ppm_byline_bio || $ppm_byline_link): ?>
        <p class="ppm-byline-bio">
          <?php if ($ppm_byline_bio): ?><?php echo htmlspecialchars($ppm_byline_bio); ?><?php endif; ?>
          <?php if ($ppm_byline_link): ?>
            <a href="<?php echo htmlspecialchars($ppm_byline_link['href']); ?>"><?php echo htmlspecialchars($ppm_byline_link['text']); ?> &rarr;</a>
          <?php endif; ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</footer>
