<?php
$post_meta = [
  'image'   => '/img/whirlwind.jpg',
  'slug'    => 'wasteland',
  'title'   => 'Wasteland',
  'excerpt' => 'Merriam-Webster says a wasteland is barren, ugly, and spiritually arid. So why does the word feel so good to write? A dig through etymology, Chernobyl, and the Wasteland Rules of 1838.',
  'date'    => '2016-08-01',
  'added'   => '2026-08-28',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => 'sciencefiction'
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
      alt="Illustration of an old writer at a typewriter, his words spiraling upward into a whirlwind of flying pages against a starry sky"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Post-Apocalyptic Worldbuilding</p>
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
      <p>Wasteland.</p>

      <ol>
        <li>Barren or uncultivated land: a desert wasteland</li>
        <li>An ugly, often devastated or barely inhabitable place or area</li>
        <li>Something, such as a way of life, that is spiritually and emotionally arid and unsatisfying</li>
      </ol>

      <p>That's what Merriam-Webster has to contribute to the world's collective understanding of the term that post-apocalyptic writers can't resist.</p>

      <p>To me, it appears the dictionary lacks a depth of understanding of wastelands.</p>

      <p>In my post-apocalyptic series, wasteland refers to a specific region of both jungle and desert. The people on the other end of the island call it a waste, a hopeless place full of hopeless people, whereas the inhabitants love their home as much as any post-apocalyptic writer loves typing the word:</p>

      <p>Wasteland.</p>

      <p>Do it again.</p>

      <p>Wasteland.</p>

      <p>Feels good for something barren, ugly, and arid. But why is that?</p>
    </section>

    <section>
      <h2>The Waste of Definitions</h2>

      <p>We can easily apply definition three to a Walmart, television, or my favorite pub in Wellington, New Zealand, which was strewn with motionless old men and barren, beer-soaked wood paneling. These sorts of horrors drain all spiritual and emotional essence from the strongest of us almost instantly.</p>

      <p>The metaphor certainly can't reveal how it inspires us.</p>

      <p>I suspect the second definition of wasteland is rooted in and popularized by early imaginings of worldwide nuclear destruction. Ugly is so harsh. Many of the best twentieth-century post-apocalyptic authors may have been misguided about how a wasteland could be created and how long it would last.</p>

      <p>When camera crews entered abandoned buildings twenty-five years after the incident at Chernobyl, they found healthy trees and a habitat where deer and other animals thrived undisturbed by human activity.</p>

      <p>Whatever we imagine causing environmental destruction, desert and wasteland are not interchangeable terms. A desert may be a wasteland, but a wasteland does not have to be a desert.</p>

      <p>So that still doesn't explain why a wasteland is so bad, but feels so good to write about.</p>

      <p>The first definition, deconstructed logically, may be inferred to suggest that a wasteland is either bad farmland OR land that has not yet been farmed.</p>

      <p>That would be awesome if it weren't contradictory.</p>

      <p>Applying "OR" as an operator in Boolean logic, it means it must be bad, unfarmed land.</p>

      <p>Thinking too deeply, it's clear the dictionary provides no firm vision of what is a waste and what is not. A desert may not be barren, while jungles can be torturous to cultivate.</p>

      <p>And while there is room in metaphor for me to justify calling a jungle a waste, none of it explains why we love to fantasize about wastelands.</p>

      <p>Where does this term come from?</p>
    </section>

    <section>
      <h2>Empty Etymology</h2>

      <p>A brief search of the internet about the origin of the term does not help as much as it should unless you want to buy <em>Wasteland: A History</em> for a solid $35, which does have some intriguing chapters on the human experience of wastelands.</p>

      <p>I skimmed the Google Books sample.</p>

      <p>Unfortunately, like most resources, it skips identifying the early uses of the term and separates waste from land, then traces their respective origins in English.</p>

      <p>As waste refers to useless and ruined things, this method of understanding wastelands supports the vision of a wasteland as impossible to cultivate.</p>

      <p>Empty.</p>

      <p>Barren.</p>

      <p>A wasteland is empty and barren because empty and barren things are a waste.</p>

      <p>Should we stop searching for answers now that we are hopelessly lost in a semantic wasteland?</p>

      <p>No.</p>

      <p>To find who coined the term waste + land, we have to dig.</p>

      <p>And we find many references to wastelands being cultivated.</p>

      <p>T. S. Eliot wrote <em>The Waste Land</em>—using two separate words—in 1922.</p>

      <p>However, if we stick to the English usage of wasteland as a combined term, we find multiple early uses surrounding Bengal, British imperialism, and the Wasteland Rules of 1838.</p>

      <p>Apparently, some early applications of the term wasteland had to do with cultivating tea.</p>

      <p>Assam tea.</p>

      <p>Along the Assam River.</p>

      <p>And, indirectly, denying Indigenous inhabitants access to the land by creating biased laws.</p>

      <p>As this region is rather tropical, green, prone to monsoons, and one of the most densely populated regions of the world, it can be argued that the original wasteland is the opposite of how we envision a wasteland today.</p>

      <p>A wasteland was land that invaders believed was being wasted because no one was using it.</p>

      <p>And they prized it highly enough to write laws staking their claim to it.</p>

      <p>While the first wasteland may have been morally arid rather than physically barren, it appears the readers and writers of post-apocalyptic fiction were right.</p>
    </section>

    <section>
      <h2>Miles of Possibility</h2>

      <p>A wasteland is, in its conception, a place of opportunity.</p>

      <p>A wasted land.</p>

      <p>A blank canvas of soil and air.</p>

      <p>Miles of possibility.</p>

      <p>A place to cultivate life, agriculturally or metaphorically.</p>

      <p>And that's the allure of the wasteland, whether it's a desert or a jungle.</p>

      <p>They are the acres that stimulate the imagination and inspire.</p>

      <p>It's the same territory—literal, this time—that I keep returning to in <a href="/pages/bright-dark">The Bright Dark</a>, where the Wastelands are a named place on the map, not just a mood. Enormous predators haunt them. Nobody remembers what they used to be. Miles of possibility, and most of it wants to eat you.</p>
    </section>

    <p class="ppm-article-disclaimer"><em>Carrie Bailey is the author of the Immortal Coffee Novels.</em></p>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
