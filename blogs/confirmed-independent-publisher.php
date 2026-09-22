<?php
$post_meta = [
  'image'   => '/img/librarian.jpg',
  'slug'    => 'confirmed-independent-publisher',
  'title'   => 'Confirmed Independent Publisher',
  'excerpt' => 'A librarian-turned-writer looks back at how a bookmobile patron, a fake reptilian finance book, and five years of false starts led to becoming a confirmed independent publisher.',
  'date'    => '2016-06-01',
  'added'   => '2026-08-28',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => 'selfpublishing'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($post_meta['title']); ?> – Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css">
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/blogposting-schema.php'; ?>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
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
      alt="Illustration of a librarian paging through a book beside towering shelves, under a night sky full of stars, moons, and planets"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Self-Publishing & Identity</p>
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
      <p>I'm a confirmed independent publisher. I knew I was more attracted to making books than fame and fortune before I started, but I lived a justified lie about my writing for years.</p>

      <p>In truth, I'm a librarian. Or I was when I started. One of the patrons of the rural bookmobile-as-showpiece I drove for a campaign to create a new service district in the backwoods of my home state brought her writing to me. I blew past the first pages trying to imagine how not to hurt her feelings and I was shocked to see by the third page, she'd created a scene every bit as good as the sort of romantic fiction I respect, but couldn't be forced to read.</p>

      <p>That happened in 2008.</p>
    </section>

    <section>
      <h2>Learning the Writing World</h2>

      <p>By 2010, I'd worked my way across forums and social networks posing as a writer to make contacts and figure out how to get her published. And the guilt set in.</p>

      <p>The writing community doesn't ignore anyone. Someone will be positive. Someone will be negative. Someone will ignore. And if you keep writing, you'll probably get stalked a little, too. I still chat with the people I met online that supported me when I was a fraud. In a uncoordinated huddle, they changed the course of my life. I began to organize them so we could write joint publications and form online writing communities. I knew a passion I had only ever felt before while drinking coffee even if I went months without working on own fiction.</p>

      <p>My artistic skills never involved language. I've earned significantly more money as a painter than a writer. And as a librarian, I repeated this conversation daily:</p>

      <p>Everyone, "So, you must like to read a lot, huh?"</p>

      <p>Me, "No, I read nonfiction sometimes. Online. Librarianship requires database management skills more than anything else."</p>
    </section>

    <section>
      <h2>New Zealand and a Reptile in a Business Suit</h2>

      <p>I published my first novella after moving to New Zealand from Oregon to study my Masters in Information. My confusion about identity, writer or librarian, deepened quickly. I began to add insightful footnotes to my work in progress while quoting humorous popular fiction in an academic context. Professors were not amused.</p>

      <p>Thirty thousand words of nonsense cobbled together from Star Trek's Ferengi culture, Ayn Rand and Machiavelli appeared on Amazon before I completed my thesis. On a whim, I'd made a fake book cover for a reptilian personal finance book to amuse my sister and then, for practice, wrote the book to go with it.</p>

      <p>That barcode has been viewed MILLIONS of times, because someone liked the idea, borrowed the code and put his own false covers on books in actual bookstores. He went viral. I saw no increase in sales. I had a good idea, but someone else executed it better. At least, he used my ISBN.</p>
    </section>

    <section>
      <h2>Five Years, Four Boyfriends, Six Apartments</h2>

      <p>Five years, four boyfriends and six apartments on three continents later, I finished my novel and rather than query and I find a small press that wanted it. I released it on Amazon. I earned a 100 USD per month for the first six months, which were most pleasantly, the last six months of my writing career. Then, over the holiday, still intensely pleased with myself, I opened a physical copy to take notes for the second book in the series and discovered every single version I'd created had been a draft complete with typos and an unrevised ending where two critical characters had the wrong background.</p>

      <p>I ignored everyone who said that it read like a draft, because I thought they were just being negative. Writers have to be positive. We can't network with the naysayers.</p>
    </section>

    <section>
      <h2>This Is 2016</h2>

      <p>I love writing. I made a Jurassic Park-style world with extinct Pliocene-like megafauna, because post apocalyptic genetic engineers needed something better to eat. I killed 13 million people with two sentences. I have people obsessed over finding a specific strain of coffee. The entire biblical hierarchy of angels has gotten a knowledgeable if irreverent fantasy world make over worthy of a Final Fantasy game. I wove in some Chippewa mythology to honor my father. And I've just started to realize my great vision to coordinate a choose-your-own story where one man searches for coffee and dies multiple horrible deaths as contributed by other writers and delivered via website.*</p>

      <p>No, I know who I am now. I never wanted to just write books or catalog them. I wanted to make the books. Format and feel their spine. Carry them to the post and mail them. And absolutely love it.</p>

      <p>Everything I wish someone had handed me back in 2008—instead of five years, four boyfriends, and six apartments of figuring it out the hard way—went into the free <a href="/pages/writer-secret-society">Writer Secret Society Handbook</a>.</p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
