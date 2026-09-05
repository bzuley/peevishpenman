<?php
$post_meta = [
  'image'   => '/img/archetypes/everyman_archetype.png',
  'slug'    => 'the-everyman',
  'title'   => 'The Everyman: The Anchor of the Story',
  'excerpt' => 'From Pearson\'s "Realist" to medieval morality plays to Samwise Gamgee, a look at the archetype of continuity, and why writers keep mistaking ordinary for unimportant.',
  'date'    => '2026-08-28',
  'added'   => '2026-08-28',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => 'archetypes'
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

  <link rel="canonical" href="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>.php">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>.php">
  <meta property="og:image" content="<?php echo htmlspecialchars($post_meta['image']); ?>">

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
      alt="A man in a wool sweater sits on a porch step with his dog, holding a mug of coffee"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Character Archetypes & Craft</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>
    </div>
  </figure>
</header>

    <?php $archetype_name = 'Everyman'; include $_SERVER['DOCUMENT_ROOT'].'/partials/archetype-wheel.php'; ?>

    <section>
      <h2>The Archetype of Stability</h2>

      <p>The Everyman is the archetype of continuity and immediate human concerns. Rather than orienting himself toward distant power structures, the Everyman grounds himself in the practical world: people he knows, work that needs doing, and the family or community whose security depends on things continuing to function.</p>

      <p>Resistant to change, the Everyman values what already works and the systems that keep daily life functioning. While that resistance can become a weakness, it is also what makes the Everyman an anchor when other characters become unmoored by their ambitions.</p>

      <p>The Everyman often provides a moral reference point, giving the choices, ambitions, and values of other characters something against which they can be measured.</p>
    </section>

    <section>
      <h2>Origins of the Everyman</h2>

      <p>The modern twelve-archetype system is an extension of Carl Jung's work as developed by Carol S. Pearson. Originally, Pearson called the Everyman the "Realist."</p>

      <p>Experience teaches Pearson's Everyman to trust what is concrete and to focus on the problems that can actually be solved. This practical orientation is essential to survival. Without it, people might fail to work, store food for winter, shore up shelters, care for one another, or warn others about approaching threats. These are not glamorous acts. They are acts of continuity. The Everyman keeps the existing world viable.</p>

      <p>But the archetype's roots are much older. Medieval morality plays commonly used figures named Mankind, Everyman, or Humanum Genus. It is hard to fathom how Jung overlooked this iconic role.</p>
    </section>

    <section>
      <h2>Tolkien's Everyman</h2>

      <p>Quite possibly one of the most important Everyman characters in literature was Tolkien's Samwise Gamgee.</p>

      <p>Sam represented everything about home for Frodo that was good. He was practical, loyal, stubborn, affectionate, and deeply concerned with ordinary things. His importance was not that he occupied the dramatic center of the story, but that he became its anchor. Through Sam, Tolkien established the value of normal human life.</p>

      <p>And at the last moment, Tolkien's Everyman became the hero. But Sam did not suddenly reveal himself to be extraordinary. His loyalty became endurance. Affection became courage. Practicality became survival. Stubbornness became the refusal to abandon Frodo even as they journey into Mordor.</p>

      <p>Tolkien himself described one of Sam's limitations, his "mental myopia." The Everyman's field of attention can be deliberately narrow.</p>
    </section>

    <section>
      <h2>Why Writers Overlook the Everyman</h2>

      <p>Writers often mishandle the Everyman because they mistake ordinary for unimportant. A person who sees their own life as boring may want to write about something they value as better, larger, stranger, or more remarkable than themselves.</p>

      <p>Over the years, I've come to realize that the observations writers draw from their own lives, their own feelings, their own relationships, and their own experiences always have the greatest pull. They form the heart of anything we create.</p>

      <p>But our storytelling tradition itself trains us to notice: departure, conquest, transformation, discovery, revolution.</p>

      <p>It trains us not to notice: maintenance, continuity, repair, provision, repetition, keeping things alive.</p>

      <p>Creating something new is dramatic. Maintaining something is repetitive. Revolution creates a plot point while keeping the furnace working through another winter usually does not. A relationship that burns like a fireplace excites very few when fireworks are exploding over the horizon.</p>

      <p>We do the Everyman dirty, because this imbalance extends beyond fiction. We often describe the plumber, electrician, mechanic, or truck driver as working class, even when skilled trades require years of accumulated practical knowledge. At the same time, professions such as teaching or social work may be called middle class, because they require formal degrees and a basic mastery of associated theories. Often, trade work supports a family better than the gate kept degree-dependent professions, but our culture assigns prestige to the people who interpret or redesign systems more so than to the people who quietly keep them functioning.</p>

      <p>The Everyman occupies neglected territory. He repairs rather than reinvents, provisions rather than conquers, and preserves continuity while other characters pursue transformation.</p>
    </section>

    <section>
      <h2>My Father-in-law as the Everyman</h2>

      <p>I had an epiphany this summer on the day I lost my father-in-law after a two-year battle with cancer. The man kept the same job for decades, bought a home for his family when his children were young, never moved, and changed little. He was stability personified. My father-in-law liked conservative politics, but disliked friction and never argued. He was a listener. During an ordinary visit, he enjoyed catching up and kept things simple.</p>

      <p>Yet the moment there was a need unmet, he would appear. He might quietly press a wad of folded bills into my hand in private or arrive with his power drill and install whatever needed installing.</p>

      <p>He didn't travel. He didn't have aspirations that carried him outside the county. But he made legendary pancakes, and he maintained his lawn as though it were a sacred duty.</p>

      <p>Useful, reliable, and constant—much of what he contributed was easy to overlook until the day he was no longer there to provide it. He died quietly without reflecting aloud on the meaning of his life or his aspirations for his family once he was no longer there, but we felt the loss as if the earth had suddenly lost gravity itself.</p>

      <p>Our Everyman had been silently holding us together.</p>

      <p>He let us explore ideals as he allowed family conflicts to wash over him like weather. He did not need to correct every mistake or be the center of things. He was simply there—steady, practical, dependable.</p>

      <p>He never told me his diagnosis or admitted it was terminal. He just stopped by my house two years ago and told me that I was the best thing that had ever happened to his son and that he appreciated me being part of his family.</p>

      <p>That was his declaration.</p>

      <p>He never criticized me or said anything hurtful, but he left a hole in my life that none of my cantankerous family had ever filled.</p>
    </section>

    <section>
      <h2>Iconic Everymen</h2>

      <p>Some of our most enduring stories depend upon an Everyman to keep extraordinary circumstances tethered to reality.</p>

      <p>George Bailey in <em>It's a Wonderful Life</em> repeatedly sacrifices adventure for family and community, only to discover how thoroughly the lives around him have come to depend upon his presence.</p>

      <p>Arthur Dent begins <em>The Hitchhiker's Guide to the Galaxy</em> wanting little more than tea and to keep his house from being demolished. He spends the rest of the story carrying that stubbornly ordinary perspective into an increasingly absurd universe.</p>

      <p>I lean on the same instinct in <a href="/pages/ghost-trucker.php">Ghost Trucker</a>. Parker dies, wakes up still behind the wheel, and gets pulled into a whole afterlife bureaucracy—but he never once asks to understand the metaphysics of death. He wants to know who hired him, what the contract says, and how he gets out of it. The Everyman doesn't stop being the Everyman just because the freight route now runs through the Netherverse.</p>
    </section>

    <section>
      <h2>The Shadow of the Everyman</h2>

      <p>But stability can become unwillingness to change. Practicality can become suspicion of the unfamiliar. A desire to avoid friction can become passivity. Loyalty can keep someone attached to people, institutions, traditions, or ways of life long after they have become destructive.</p>

      <p>The Everyman should not be written simply as the sensible character who is always proven right. His limitations come from the same place as his virtues. The anchor that keeps everyone from drifting can also prevent the ship from moving.</p>

      <p>Necessary because he preserves what matters but dangerous when preservation becomes the goal, the Everyman archetype is grounded. Accentuate him to give your stories relatability. Use him to react to the supernatural, bizarre characters, contrast ambition, or build empathy.</p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
