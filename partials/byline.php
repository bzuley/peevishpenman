<?php
// Byline shown at the end of every article. Expects $post_meta (see
// blog-slug.php for the shape) to already be set. Defaults to OA Allen;
// set $post_meta['author'] and $post_meta['guest_post'] = true for a
// guest-written post.
$ppm_byline_author = $post_meta['author'] ?? 'OA Allen';
$ppm_byline_label = !empty($post_meta['guest_post']) ? 'Guest post by ' : 'Written by ';
?>
<footer class="ppm-article-byline">
  <p><?php echo $ppm_byline_label; ?><strong><?php echo htmlspecialchars($ppm_byline_author); ?></strong></p>
</footer>
