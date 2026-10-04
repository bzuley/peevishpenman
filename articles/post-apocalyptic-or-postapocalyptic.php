<?php
$post_meta = [
  'image'   => '/img/general/wasteland_alas_babylon.png',
  'slug'    => 'post-apocalyptic-or-postapocalyptic',
  'title'   => 'Post Apocalyptic or Post-Apocalyptic or Postapocalyptic?',
  'excerpt' => 'A tongue-in-cheek case for dropping the hyphen from "post-apocalyptic"—and why search engines and plain laziness might matter more than the rulebook.',
  'date'    => '2016-02-01',
  'added'   => '2026-09-26',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'wordcraft, writing, postapocalypticscifi',
  'author'  => 'OA Allen'
];
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
  <meta property="og:image" content="https://peevishpenman.com/img/social/post-apocalyptic-or-postapocalyptic.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/post-apocalyptic-or-postapocalyptic.jpg">
  <meta name="twitter:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=optional" rel="stylesheet">
  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/partials/assets.php'; ?>
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
      width="1672" height="941"
      alt="An abandoned roadside gas station and diner with rusted vintage cars, overgrown pavement, and a wildfire smoke plume on the horizon"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">A Grammar Rant</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>
    </div>
  </figure>
</header>

    <section>
      <p>
        I'm going to make an argument for doing the unthinkable. I'm going to suggest something so hideous and so
        horrible that some of you will stop reading this post and immediately rush to Twitter to tell me how
        wrong I am.
      </p>

      <p>I am prepared.</p>

      <p>
        Consider for a moment that "post apocalyptic" does not require a hyphen. I know! It does, but what if
        really, it doesn't? What if writing "post apocalyptic" or "postapocalyptic" will not bring on the
        apocalypse? What if the hyphen is not required? What if four distinctly colored horses and four
        personifications of factors of social collapse will not suddenly appear, travel to your house, and rush
        inside to punish you for your wicked, wicked ways?
      </p>
    </section>

    <section>
      <p>
        I understand why we hyphenate words. We're supposed to hyphenate "two or more words that come before a
        noun and act as a single idea." It's one of the rules. Another rule is to "only hyphenate words when it
        serves a purpose."
      </p>

      <p>I know what some of you are thinking.</p>

      <p>
        "Post" is a prefix. Those rules don't apply. It could be "postapocalyptic," but for some reason it's
        not. Why not? Because rules. A system of rules we need. We can't just write "post" and not connect it to
        "apocalyptic" without a hyphen. It's a prefix! It is not an independent word, and anyone who doesn't
        understand should have their computers taken away.
      </p>
    </section>

    <section>
      <p>
        Yeah, okay, but what about their phones? Have you considered how tedious it can be to write
        "post-apocalyptic" fiction half a dozen times when you're blogging about "post-apocalyptic" fiction while
        traveling? No, you only care about the rules.
      </p>

      <p>
        Search engines can read "post apocalyptic" as "post-apocalyptic" and "postapocalyptic"—if they're
        programmed to make that distinction, because it's a simple one. The hyphen does not change how we
        interpret the meaning.
      </p>
    </section>

    <section>
      <p>
        So what if the only reason to hyphenate "post-apocalyptic" is because we reject the
        post-as-a-preposition argument? Truly desperate people sometimes attempt to classify "post" in this
        context as a preposition just to avoid the hyphen.
      </p>

      <p>
        They argue that "post" indicates a position in time, just like the words "before" and "during." It's a
        valiant attempt to avoid switching screens from letters to symbols, but could we really substitute it
        for an actual preposition?
      </p>

      <p><em>"What are you doing post you finish your writing this morning?"</em></p>

      <p><em>"Did you want coffee during or post the movie?"</em></p>

      <p>
        It's post-modern grammar! Yay for grammar deconstruction. Now no one can be sure what to write.
      </p>
    </section>

    <section>
      <p>
        No, it just doesn't work, and it doesn't rule out "postapocalyptic" as the obvious evolution of the term
        for common use. In fact, I've noticed—many times—that my spell check doesn't recognize
        "postapocalyptic" without a space. And isn't that the real reason people cling to the hyphen? It can't be
        "post apocalyptic," because prefixes—and who can tolerate the red underline? A whole document with
        underlines, even if correct, pains some writers.
      </p>

      <p>
        Believe it or not, hyphen-lovers, but "postapocalyptic" is popping up all over more reputable
        publications for a good reason. It's indisputably more justifiable than "post apocalyptic" or
        "post-apocalyptic," given the almighty rules of grammar and the increased use of the term.
      </p>
    </section>

    <section>
      <p>
        And I'm sure if you've read this far, the logic behind dropping the hyphen is getting clearer. But I
        believe it's as much of a mistake as starting a sentence with a conjunction. Which I love. But let's
        discuss the rise of "postapocalyptic" as the most correct way to write what started as
        "post-apocalyptic."
      </p>

      <p>
        Not all search engines on all websites are created and maintained as meticulously as Google or Bing. In
        many instances, word substitutions have to be established. That applies to automated library systems,
        online databases, book vendors, sites for movie reviews—many online resources simply have not been
        programmed to recognize that "post apocalyptic" = "postapocalyptic" = "post-apocalyptic." Even when it's
        possible, site administrators may have higher priorities than sorting out the millions of interesting
        details of communication. Or worse, they may even assume the substitution has been established when it
        hasn't.
      </p>
    </section>

    <section>
      <p>
        Yet does the term "postapocalyptic" differ in use from the apocalyptic? NOT ENOUGH. Trust me. I write
        books that take place 500 years after the apocalypse. I've been told I should call them dystopian
        fiction, because too many people feel apocalyptic fiction starts five minutes before the end of the
        world and "post-apocalyptic" fiction starts five minutes after. And they do so because
        "postapocalyptic" sounds smarter. More mysterious. It's deeper. Ten minutes of profundity. In sum, people
        search for "postapocalyptic" books when they actually want apocalyptic work.
      </p>

      <p>
        If you'd rather argue about the word itself than the hyphen, I went down that hole already in
        <a href="/articles/wasteland">Wasteland</a>.
      </p>
    </section>

    <section>
      <p>
        Though no rules of grammar can support it, I typically use "post apocalyptic" rather than the spaceless
        and hyphenated alternatives. Though offensive and unjustifiable, it's the most technologically
        compatible expression of the term, as it accommodates the greatest number of fools. Also, it appeals to
        my rebellious, artistic side.
      </p>

      <p>
        I believe the rules of grammar should adjust to accommodate computational linguistics, laziness, and
        sloth. As the generation that never learned cursive matures, we need to create new rules to justify
        typing "post apocalyptic" rather than petitioning our software writers to remove the red lines.
      </p>

      <p>
        Surely if a species does not adapt, it's apt to perish in a blur of famine, pestilence, war, and death,
        right? So let's consider the unthinkable. Adopt one main rule:
      </p>

      <p><strong>The primary function of grammar is to improve communication.</strong></p>

      <p>
        Should we not consider how people communicate? Do we not communicate with the computer as well as
        through them?
      </p>

      <p>
        We can say no to a hyphen and leave the space. We don't have to spell "knight" with letters wholly and
        totally divorced from being able to read it aloud. We can make our language make sense. We're free to
        use our language for communication and not arbitrarily follow rules for the sake of rules…
      </p>

      <p>Or not…</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
