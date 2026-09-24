<?php
/** RSS summaries generated from the same metadata as the blog. */
require_once __DIR__ . '/blog-config.php';

function ppm_rss_xml($value) {
    return htmlspecialchars($value, ENT_XML1 | ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$base_url = 'https://peevishpenman.com';
$posts = ppm_get_blog_posts();

header('Content-Type: application/rss+xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>Peevish Penman</title>
    <link>https://peevishpenman.com/blog</link>
    <description>Essays and dispatches from OA Allen on self-publishing, character archetypes, and metaphysical science fiction.</description>
    <language>en-us</language>
    <atom:link href="https://peevishpenman.com/rss.xml" rel="self" type="application/rss+xml" />
<?php foreach ($posts as $post):
    $url = $base_url . '/blogs/' . rawurlencode($post['slug']);
    // Use the date added to this site, matching the blog's ordering.
    $date = DateTimeImmutable::createFromFormat('!Y-m-d', $post['added'], new DateTimeZone('UTC'));
?>
    <item>
      <title><?= ppm_rss_xml($post['title']) ?></title>
      <link><?= ppm_rss_xml($url) ?></link>
      <guid isPermaLink="true"><?= ppm_rss_xml($url) ?></guid>
      <description><?= ppm_rss_xml(htmlspecialchars($post['excerpt'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')) ?></description>
<?php if ($date !== false && $date->format('Y-m-d') === $post['added']): ?>
      <pubDate><?= $date->format('D, d M Y H:i:s O') ?></pubDate>
<?php endif; ?>
<?php foreach ($post['tags'] as $tag): ?>
      <category><?= ppm_rss_xml($tag) ?></category>
<?php endforeach; ?>
    </item>
<?php endforeach; ?>
  </channel>
</rss>
