<?php
$post_meta = [
  'image'   => '/img/perfect-murder-editing-screenplay.webp',
  'slug'    => 'perfect-murder-editing-screenplay',
  'title'   => 'The Perfect Murder: Editing Your Screenplay',
  'excerpt' => 'Your script consultant says cut 25 pages. Screenwriter Jeanne V. Bowerman shares eleven ways to edit a screenplay with a serial killer\'s efficiency, and leave no fingerprints.',
  'date'    => '2010-09-12',
  'added'   => '2026-09-28',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writing, wordcraft',
  'author'  => 'Jeanne V. Bowerman',
  'guest_post'  => true,
  'author_link' => 'http://jeannevb.com'
];
require_once $_SERVER['DOCUMENT_ROOT'].'/blog-config.php';
ppm_require_published($post_meta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" type="application/rss+xml" title="Peevish Penman RSS Feed" href="https://peevishpenman.com/rss.xml">
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($post_meta['title']); ?> – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="author" content="<?php echo htmlspecialchars($post_meta['author']); ?>">

  <link rel="canonical" href="https://peevishpenman.com/articles/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/articles/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com/img/perfect-murder-editing-screenplay-social.jpg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/perfect-murder-editing-screenplay-social.jpg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/styles/main.css') ?>">
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/blogposting-schema.php'; ?>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/favicons.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="ppm-article">
  <article class="ppm-article-inner">

<header class="ppm-article-header">
  <!-- Hero image with overlaid content -->
  <figure class="ppm-article-hero">
    <img
      src="<?php echo htmlspecialchars($post_meta['image']); ?>"
      width="1672" height="941"
      alt="A grinning writer in cat-eye glasses stabs a red pen into a manuscript, red ink splattering like blood across crumpled pages and her desk"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Screenwriting &amp; Editing</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        by <?php echo htmlspecialchars($post_meta['author']); ?> &middot;
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>
    </div>
  </figure>
</header>

    <section>
      <p>The email pings. It’s your trusted script consultant. Yes! Maybe she loved your script. You open the message with hope and excitement.</p>

      <p>“Script is great… but cut 25 pages.”</p>

      <p>Slashing 25 words is one thing, but cutting 25 pages takes an entirely different approach. You’ll need Dexter for that killing spree. But when it’s done, your story will be free of everything that’s dragging it down.</p>

      <p>Often people interchange the words “editing” and “rewriting”. Rewriting requires major story analysis, challenging your character development, plot, conflicts and subplots. Editing is the process after the rewrites. With a few tips, you’ll be as efficient as a serial killer.</p>

      <p>To perform the perfect murder, you need to know how to clean up the crime scene. Start with the big stuff and wipe the fingerprints last. It’s the same for a script:.</p>
    </section>

    <section>
      <p><strong>1. Story structure:</strong> Have you hit all the turning points of the story? Have you pushed your protagonist to the point of torture? Is there too much fat and not enough action? Is your theme clear?</p>

      <p>Take a good look at the story foundation and be brutally honest. Often in a first draft, we beat the reader over the head. Have a writer or trusted advisor read it to identify holes. But to be honest, this step should happen long before you start the detailed editing. Just sayin’.</p>
    </section>

    <section>
      <p><strong>2. Scenes:</strong> Each scene has to be meaningful, and hopefully, serve more than one purpose. If all it does is provide exposition of a character or a single plot point, it’s not developed enough.</p>

      <p>Take each scene one at a time and ask:</p>

      <ul>
        <li>Does it advance the story?</li>
        <li>Does it add exposition?</li>
        <li>Does it create a new conflict?</li>
      </ul>

      <p>If the answer isn’t “yes” to two out of the three questions, sharpen that blade and kill the darling. But if there’s an important piece of exposition, find a way to add it to a different scene.</p>

      <p>Another trick for cutting scenes is to examine the flow of the story. Put each scene on an index card: plot A on blue, plot B on yellow, plot C on green, etc. Lay them on a table and switch up the order. Some scenes fall away naturally.</p>

      <p>*tip: put your dead scenes in a folder. You might need to revive them in later revisions… but ONLY if they work.</p>
    </section>

    <section>
      <p><strong>3. Start late and leave early:</strong> Now you have the scenes you want, make them late for the party. Once you think you’ve entered the room late enough, enter even later.</p>

      <p>Challenge each scene to serve its purpose in fewer words. Above all, choose the final line of the scene carefully. Does it leave the audience hanging, needing to know more? It should.</p>
    </section>

    <section>
      <p><strong>4. Action should mean action:</strong> Scripts are entirely different than novels. Less is more. No flowery, self-indulgent, garbage prose. Get to the point. Fast. Cut those adverbs and adjectives. Only write what the audience can see on screen. Period.</p>
    </section>

    <section>
      <p><strong>5. Talk ain’t cheap:</strong> Read every piece of dialogue out loud. Most people write rambling dialogue in early drafts. Make it sound natural in as few words as possible.<br>
      If you can convey in ACTION what the character is spewing from their mouth, do it.</p>
    </section>

    <section>
      <p><strong>6. Divide and conquer:</strong> Read every line of action and dialogue as a standalone to determine if it is imperative to either the subplot or the main plot. With a 120-page limit, there’s no room for fluff, except on the peanut butter sandwich.</p>

      <p>Script consultant, Marcus Leary, once wrote a post advising screenwriters to use the 140-character Twitter rule when writing action and dialogue. Great advice: <a href="http://readerproof.blogspot.com/2010/06/twitter-pacing.html" rel="noopener">http://readerproof.blogspot.com/2010/06/twitter-pacing.html</a></p>
    </section>

    <section>
      <p><strong>7. Simon says, “go backwards”:</strong> Screenwriter Holly Nault Pillar taught me the trick of reading the script backwards, one line at a time. This way, you don’t get distracted and pulled into the story. You simply are an editor of words. Ask yourself, “Can this story be told without this line?” The fat will rise to the top.</p>
    </section>

    <section>
      <p><strong>8. Make it a silent movie:</strong> Remove all the dialogue… every single word. Then read the action as if it were a silent movie. This will force you to avoid the “talking heads” problem of exposition via dialogue. See what you can remove from speech and replace with action.</p>

      <p>Once the script makes sense as a silent film, add back any dialogue that is needed. You’ll be shocked how much isn’t. Force yourself to be picky. Allow each character only one treat, e.g. a joke or throwaway line, but only one. Trust your audience to get it. Be careful not to use your only file of the script though! Create a new one just for this exercise. Tip credited to Doug Kissock.</p>
    </section>

    <section>
      <p><strong>9. Wordsmithing:</strong> ScreenwritingU, a top screenwriting instruction site, discussed rewrites in a recent teleconference. Their wordsmithing tips apply to editing too:</p>

      <p>Give more meaning with fewer words.</p>

      <p>This is the stage to pull out the thesaurus and change “runs quickly” to “dashes”. Or if you have a whole paragraph describing the setting, change it to a small descriptor, such as, “it’s red-neck heaven”.</p>
    </section>

    <section>
      <p><strong>10. Be quotable:</strong> Your script will pop if you create one or two lines an audience will be quoting for years. We’ve all heard Rhett Butler’s line, “Frankly, my dear, I don’t give a damn,” more times than Scarlett got married. You need to create that type of line in your own film.</p>

      <p>ScreenwritingU recommends finding that opportunity by looking in the most emotional moments of your script. At the height of a moving scene, examine the dialogue. There’s your sweet spot. Make sure the line was set up beforehand and offers perspective, as well as heightening the emotion.</p>
    </section>

    <section>
      <p><strong>11. You have one chance to make a first impression:</strong> The opening lines of your screenplay introduce you as a professional. That first page should show your voice, talent and ability to grab a reader. By “voice” I’m referring to the style of writing that sets you apart from others. What makes your voice different? Don’t imitate other styles, find one that flows from you naturally… and trust it.</p>
    </section>

    <section>
      <p>Every successful murderer has patience. If I’m too exhausted to edit, I put it down for a few days. It’s okay to walk away. In fact, I encourage it. I never edit a piece I’ve just finished. I’m amazed at the flaws I find a week later. If you are resistant to patience, remember, once a script is out the door and in a producer’s hands, you’ll be in their tracking system. Even if they pass on it, the company labels the quality of your writing. Don’t be a sloppy murderer. Impatience could cost you your career.</p>

      <p>By the way, four days after receiving the email, I had cut the 25 pages. The script is much tighter… and I didn’t leave fingerprints</p>
    </section>

    <section>
      <p><em>Jeanne has written several spec screenplays and adapted the 2009 Pulitzer Prize-winning book, Slavery by Another Name with its author, Douglas A. Blackmon, senior national correspondent of The Wall Street Journal.  Jeanne is an active blogger <a href="http://jeannevb.com" rel="noopener">http://jeannevb.com</a> and launched her freelance career with an upcoming article in Writer’s Digest Magazine on the value of Twitter for writers.   Her Twitter presence is (in)famous, as she is moderator and pimp of the screenwriting chat, #scritpchat.  Together with Rachel Langer, she created a blog, SMwriters.com, dedicated to social media and writers.  After being sidetracked by screenwriting, her novel is back in progress.</em></p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
