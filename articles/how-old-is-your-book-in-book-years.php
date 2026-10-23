<?php
$post_meta = [
  'image'   => '/img/general/book_bandit.webp',
  'slug'    => 'how-old-is-your-book-in-book-years',
  'title'   => 'How Old Is Your Book in Book Years?',
  'excerpt' => 'Carrie Bailey on the life of a book, from conception to immortality, and what raising a son taught her about being an author.',
  'date'    => '2013-04-09',
  'added'   => '2026-10-23',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft, independentpublishing',
  'author'  => 'Carrie Bailey',
  'guest_post' => true
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
  <meta property="og:image" content="https://peevishpenman.com/img/social/how-old-is-your-book-in-book-years.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/how-old-is-your-book-in-book-years.jpg">
  <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
  <link rel="stylesheet" href="<?= ppm_asset('/styles/main.css') ?>">
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
      width="1536" height="1024"
      alt="A cross toddler in overalls sitting on a study floor, tearing pages out of a large old book and scattering torn paper around them, in sepia light from a window"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Writing &amp; Parenting</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        by <strong class="ppm-article-author"><?php echo htmlspecialchars($post_meta['author']); ?></strong> &middot;
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>
    </div>
  </figure>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/article-tags.php'; ?>
</header>

    <section>
      <p>&ldquo;Hi, my name is Carrie and I am an independent author.&rdquo; I said nervously.</p>

      <p>&ldquo;Hi, Carrie,&rdquo; groaned the room full of supportive peers. That was when I broke into a frantic explanation of how wanting to get reviews of my books had caused my life to spiral out of control&hellip;</p>

      <p>&ldquo;&hellip;and then I blackmailed the guy, which I know is wrong, but&hellip;&rdquo;</p>

      <p>Every time I take my writing career to the next level, I feel like I need a support group to confess to. Maybe that&rsquo;s why I host this multi-author blog &ndash; to surround myself with other people who can and sometimes do look me straight in the eye and say, &ldquo;Yes, you&rsquo;re going too far. Put the gun down.&rdquo;</p>

      <p>That&rsquo;s just my overactive imagination talking. I AM FINE.</p>

      <p>Or am I? Last night, I had a Skype conference with Clark Brooks, a writer I&rsquo;ve long been convinced is a comedic genius and a favorite of mine to read. He was struggling with the late stages of assembling a book he&rsquo;d written, and he was finding the process incredibly discouraging. I&rsquo;d been there before, but I&rsquo;d gotten past that hurdle of frustration and doubt by publishing work I knew wasn&rsquo;t ready. In the Handbook of the Writers Secret Society it recommends seeking &ldquo;rejection gold.&rdquo;</p>

      <p>Let&rsquo;s go on a tangent into the details of my life for one moment&hellip; I&rsquo;m a single mother who, most of the time, was too young to be raising her child without the support of the deceased father. And the rest of my family were the right type of people to estrange yourself from. But, parenting is always a challenge even with support.</p>

      <p>Bringing a book to life is a lot like having a baby, because it&rsquo;s an incredible, overwhelming work of creation. Your blood, sweat, and tears will largely go unnoticed and you&rsquo;ll blame yourself for not always making the best choices. You&rsquo;ll make mistakes, which get entrenched and become the bane of your work while editing. Once finished, you&rsquo;ll realize your real work was a messy, loving, beautiful form of art and your creation now has a life of its own, which will have many relationships with other people entirely independent from you. In the end, you&rsquo;re a footnote on the back page and hopefully, you couldn&rsquo;t be prouder.</p>

      <p>Clark, my friend, is still pregnant. No wonder he is nervous. We authors have to support each other through this early stage.</p>

      <p>But, me? Yeah, as a frantic new author, I still don&rsquo;t know what I&rsquo;m doing or how to get meaningful reviews. I&rsquo;m so proud that I&rsquo;m over sharing on social media and bragging about each minor accomplishment my books have. I post photos. All. The. Time.</p>

      <p>&ldquo;Oh, isn&rsquo;t that so cute!&rdquo; I say to the other indie authors on Facebook.</p>

      <p>&ldquo;Someone has written a positive review for my book on their author blog. And look there! Three people have retweeted the link to it.&rdquo;</p>

      <p>&ldquo;And what&rsquo;s that? A sale. Author so proud of her amazing little book!&rdquo;</p>

      <p>&ldquo;Sob!! They grow up so fast don&rsquo;t they? Wail! Boo-hoo!&rdquo;</p>

      <p>You can slap me now, but here is something you may not have considered. Books age. If you&rsquo;ve been writing for a while, you may even wonder how old is your book in book years?</p>
    </section>

    <section>
      <h2>Pregnancy: Writing the First Draft</h2>

      <p>Your book has been conceived, and now you&rsquo;re carrying it around with you everywhere. It occupies your thoughts, interrupts your sleep, and demands attention at inconvenient moments.</p>

      <p>Some pregnancies are easy. Others involve months&mdash;or years&mdash;of discomfort, anxiety, and wondering what you&rsquo;ve gotten yourself into.</p>

      <p>And as the end approaches, the excitement is mixed with exhaustion. You&rsquo;re ready to meet this thing you&rsquo;ve been carrying around in your head for so long.</p>
    </section>

    <section>
      <h2>Birth: Finishing the Manuscript</h2>

      <p>The final stretch of writing a book is labour. You&rsquo;re exhausted, impatient, and desperate to get through those last few chapters. You know you&rsquo;re close, but somehow the final push seems to require more effort than everything that came before it.</p>

      <p>Then you write the last word.</p>

      <p>There it is. Your book is born.</p>

      <p>You experience that extraordinary mixture of relief, accomplishment, and disbelief. After all those months or years, you&rsquo;ve actually finished a book.</p>

      <p>It&rsquo;s beautiful. It&rsquo;s yours. And it&rsquo;s nowhere near ready for the world.</p>
    </section>

    <section>
      <h2>Toddlerhood: The First Round of Editing</h2>

      <p>Your book is on its feet, but it&rsquo;s stumbling around, making messes, and requiring constant supervision.</p>

      <p>This is when you discover everything that needs fixing. Plot holes, inconsistent characters, awkward dialogue, and entire chapters that wander off in the wrong direction.</p>

      <p>You&rsquo;ll spend an extraordinary amount of time correcting mistakes, cleaning up messes, and repeating lessons you thought you&rsquo;d already taught.</p>

      <p>There will be tantrums.</p>

      <p>Mostly yours.</p>

      <p>Your book isn&rsquo;t actually throwing a tantrum. You&rsquo;re the one threatening to throw it out the window because you&rsquo;ve rewritten the same paragraph seventeen times.</p>

      <p>Patience is essential. Eventually, your book begins to behave.</p>
    </section>

    <section>
      <h2>Preschool: Polishing and Preparation</h2>

      <p>Your book has developed some manners. It can communicate clearly, follow a logical sequence, and generally make a decent impression.</p>

      <p>Now you&rsquo;re preparing it for the outside world.</p>

      <p>You&rsquo;re polishing the prose, correcting the little things, arranging the formatting, and making sure it looks presentable. You&rsquo;re teaching it everything you can before strangers get involved.</p>

      <p>You fuss over its appearance. You straighten its collar. You check for mistakes one more time.</p>

      <p>You know it isn&rsquo;t perfect. Nothing ever is.</p>

      <p>But it&rsquo;s time to let it go.</p>
    </section>

    <section>
      <h2>The First Day of School: Publication</h2>

      <p>Publication day arrives.</p>

      <p>You&rsquo;ve packed its lunch, straightened its clothes, and given it every advantage you could manage.</p>

      <p>Now you&rsquo;re standing at the bus stop, watching your little book climb aboard.</p>

      <p>Will anyone like it? Will it make friends? Will someone be cruel to it? Will it find its place in the world?</p>

      <p>You wave goodbye, smiling bravely.</p>

      <p>And then you go home and obsessively check your sales dashboard.</p>
    </section>

    <section>
      <h2>Grade School: Marketing and Promotion</h2>

      <p>Your book is out in the world, but it still needs you.</p>

      <p>These are the years of school functions, extracurricular activities, and enthusiastic parental involvement.</p>

      <p>You&rsquo;re networking with other authors, arranging promotions, attending events, and introducing your book to anyone who might appreciate it.</p>

      <p>You&rsquo;re the proud parent showing everyone photographs.</p>

      <p>When your book receives a glowing review, you&rsquo;re in the audience applauding its performance. When it wins an award, you&rsquo;re practically climbing onto the stage beside it.</p>

      <p>And when someone misunderstands it or leaves a terrible review, every parental instinct tells you to rush to its defence.</p>

      <p>Sometimes you have to remind yourself that not everyone is going to like your child.</p>

      <p>You keep supporting it, encouraging it, and creating opportunities for it to succeed.</p>

      <p>But slowly, something begins to change.</p>
    </section>

    <section>
      <h2>Adolescence: Finding Its Own Identity</h2>

      <p>Your book is becoming something you didn&rsquo;t entirely anticipate.</p>

      <p>Readers are discovering meanings you never consciously intended. They&rsquo;re identifying with characters you considered minor, interpreting themes differently, and finding personal significance in passages you barely remember writing.</p>

      <p>Your book has begun forming relationships that have nothing to do with you.</p>

      <p>Like a teenager developing an identity beyond the family, it&rsquo;s becoming something more than an extension of its creator.</p>

      <p>You might occasionally want to correct someone&rsquo;s interpretation. You might even be tempted to insist that they haven&rsquo;t understood what you were trying to say.</p>

      <p>But that&rsquo;s part of growing up.</p>

      <p>Your book has acquired a value independent of your intentions. What it means to its readers is now just as real as what it meant to you.</p>

      <p>And there&rsquo;s something wonderful about discovering that the thing you created has become something you couldn&rsquo;t have created alone.</p>
    </section>

    <section>
      <h2>Adulthood: Independence</h2>

      <p>Your book has grown up and moved out.</p>

      <p>It no longer needs your constant attention, promotion, or protection. It has its own place in the world, its own reputation, and its own relationships with readers.</p>

      <p>People recommend it to friends you&rsquo;ve never met. Someone discovers it in a library or secondhand bookshop. A reader discusses it online without knowing anything about its author.</p>

      <p>You may still check in occasionally, celebrate its successes, or give it a little promotional help. But it has a life beyond your involvement.</p>

      <p>It&rsquo;s no longer simply something you wrote.</p>

      <p>It&rsquo;s something that exists.</p>
    </section>

    <section>
      <h2>Middle Age: Showing Its Years</h2>

      <p>Your book is getting older, and it&rsquo;s beginning to show.</p>

      <p>The slang that once sounded natural now seems quaint. The technology you described as cutting-edge has become obsolete. Cultural references that once needed no explanation may leave younger readers scratching their heads.</p>

      <p>Even the subjects people care about have shifted. What was fashionable when you published may no longer be fashionable now.</p>

      <p>And your book doesn&rsquo;t particularly care.</p>

      <p>It&rsquo;s comfortable with what it is. It may still have a loyal readership and earn a steady income, although sales are probably not what they once were.</p>

      <p>Some books reach middle age remarkably quickly. Others remain relevant for decades.</p>

      <p>Being dated doesn&rsquo;t necessarily make a book bad. It simply means that the world has continued changing around it.</p>
    </section>

    <section>
      <h2>Old Age: The Occasional Visitor</h2>

      <p>Your book has largely slipped out of public attention.</p>

      <p>The promotions stopped long ago. Reviews are rare. Sales have dwindled to an occasional copy, and you may go months or years without giving it much thought.</p>

      <p>Then one day, you notice a sale.</p>

      <p>Someone, somewhere, has bought your book.</p>

      <p>You find yourself looking at the title with a little surprise. Perhaps you check its listing, wondering whether anyone is still reading it.</p>

      <p>And there&rsquo;s something rather touching about that.</p>

      <p>Your book may no longer be fashionable, profitable, or widely discussed, but it&rsquo;s still out there. Still waiting to be discovered. Still capable of making a connection with someone.</p>

      <p>It&rsquo;s old, but it&rsquo;s alive.</p>
    </section>

    <section>
      <h2>Death: The Final Deletion</h2>

      <p>Eventually, a book can disappear altogether.</p>

      <p>The last edition goes out of print. The digital files are removed. The listings vanish from booksellers, and the remaining copies are lost, discarded, or destroyed.</p>

      <p>There are no more readers, no more sales, and no surviving copies waiting to be discovered.</p>

      <p>Of course, books can be remarkably difficult to kill. A forgotten paperback might survive in someone&rsquo;s attic for another fifty years. A digital copy might remain on an abandoned hard drive.</p>

      <p>But when the final copy disappears, the book&rsquo;s life has ended.</p>
    </section>

    <section>
      <h2>Immortality: The Classics</h2>

      <p>And then there are the books that refuse to grow old.</p>

      <p>They pass from one generation to another, finding new readers long after their authors have died. Their language may become archaic, their settings unfamiliar, and their cultural assumptions antiquated, yet something within them continues to resonate.</p>

      <p>They are rediscovered, reinterpreted, republished, and sometimes reinvented for entirely new audiences.</p>

      <p>These are the classics.</p>

      <p>They don&rsquo;t simply survive because someone keeps them in print. They survive because people keep finding reasons to read them.</p>

      <p>In a sense, they&rsquo;ve escaped the ordinary life cycle of a book. They may show their age, but they never quite become obsolete.</p>

      <p>They&rsquo;re immortal.</p>

      <p>And isn&rsquo;t that the secret ambition of most writers&mdash;and perhaps most people? To create something that continues to matter long after we&rsquo;re gone?</p>
    </section>

    <section>
      <h2>Raising Both</h2>

      <p>How many do you have? Has it gotten easier? Do you know what to expect now? Can you remember what it was like the first time?</p>

      <p>My books do not actually compare to my son. But just as with parenting him, I have learned a lot about life and what a person can achieve with time and patience. And he&rsquo;s brought me coffee when I slowed down. He&rsquo;s shared my work with his friends. He&rsquo;s been my number one fan.</p>

      <p>When I look at him today, I don&rsquo;t see the struggles anymore. There were times when I couldn&rsquo;t believe I could even keep him alive and safe and out of jail and still in school and free from tattoos for another month. I cried for help every other year, desperately and with a box of kleenex while hiding in my closet, but in the end I have a handsome, healthy, good natured son.</p>

      <p>Any worthwhile creation requires dedication. Seventeen years can go by incredibly fast. And I&rsquo;ve also learned that anything worthwhile will feel like hell 80% of the time until you arrive. My son has prepared me&hellip;for ANYTHING.</p>

      <p>Now, as I cradle my infant books in my file folders, I know if I can be a good parent to my son, I&rsquo;ve got a fair shot at being a good author, too.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
