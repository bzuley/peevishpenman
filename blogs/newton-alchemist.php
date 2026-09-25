<?php
$post_meta = [
  'image'   => '/img/newton-alchemist.webp',
  'slug'    => 'newton-alchemist',
  'title'   => 'Why Did We Forget Isaac Newton Was an Alchemist?',
  'excerpt' => 'The father of modern physics wrote about a million words on alchemy. Why we forgot, and what inner alchemy says about the parts of experience science still can’t measure.',
  'date'    => '2026-09-28',
  'tags'    => 'consciousness, anomalousphenomena, metaphysicalscifi, writing'
];
require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
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
  <meta name="author" content="OA Allen">

  <link rel="canonical" href="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/blogs/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com/img/newton-alchemist-social.jpg">

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
      width="1672" height="941"
      alt="Isaac Newton in a long curled wig, chin in hand, at a desk with an apple, old books, an armillary sphere and a flask of glowing violet liquid, beneath teal and purple planetary orbits"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Inner Alchemy &amp; History</p>
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
      <p>I’ve lived a life largely free from supernatural threats, and if you’d asked my school teachers why, it’s because the Enlightenment banished wanton superstition from the intellectual inquiry of education and science.</p>

      <p>And like most things we learn in school, that just isn’t quite true.</p>

      <p>First, phenomena we can’t explain or measure still exist. We still dream. We still see ghosts. Pilots still encounter glowing orbs over the ocean—people just lose their jobs if they talk about it anywhere except with a therapist.</p>

      <p>Second, from the Enlightenment onward, people of all walks of life have remained obsessed with inner alchemy.</p>
    </section>

    <section>
      <h2>Inner Alchemy and Outer Alchemy</h2>

      <p>Alchemy is usually divided into two broad forms. <strong>Outer alchemy</strong> concerns the transformation of matter: metals, minerals, medicines, tinctures, laboratory processes, and, most famously, the attempt to transform base metals into gold. <strong>Inner alchemy</strong> turns the same idea inward. The material being transformed is the practitioner. Mind, spirit, consciousness, character, perception and even the body become the laboratory. The goal is not merely to possess gold, but to become something more refined.</p>

      <p>The most interesting case of a secret alchemist was one of the earliest.</p>
    </section>

    <section>
      <h2>Isaac Newton, Secret Alchemist</h2>

      <p>Enter Isaac Newton (1643–1727), often dubbed the father of modern science. He was renowned for his groundbreaking work in physics and mathematics.</p>

      <p>We remember being taught about the apple that landed on his head. Of course we do. But it’s about as honest as George Washington chopping down a cherry tree.</p>

      <p>Force equals mass times acceleration? Real.</p>

      <p>Big, long wig? Real.</p>

      <p>And his obsession with alchemy was also real.</p>

      <p>The father of modern physics meticulously transcribed and experimented with alchemical texts, producing roughly a million words of material on the subject. Newton hoped to unlock the mysteries of the universe and understand the underlying principles that govern both matter and everything else. He sought the iconic alchemical substance, the Philosopher’s Stone, and translated the most notorious text associated with alchemy, the <em>Emerald Tablet</em>.</p>

      <p>Newton, the father of science, should also be remembered as an alchemist.</p>
    </section>

    <section>
      <h2>How Newton’s Alchemy Disappeared</h2>

      <p>None of Newton’s alchemical work was published during his lifetime. In 1936, a significant portion of his private papers, including his alchemical manuscripts, was auctioned and subsequently studied by historians.</p>

      <p>Even after they stopped burning Hermetic thinkers like Giordano Bruno, Newton’s heirs had reason not to advertise his alchemical work. Alchemy had gone underground into Hermetic societies, esoteric orders and private circles.</p>

      <p>Scientists, at least in the open, increasingly regarded Hermetic philosophy as superstition. Science requires observation and measurable data to understand the physical world. Inner alchemy concerns parts of human experience that do not submit nearly as neatly to measurement.</p>
    </section>

    <section>
      <h2>The Things We Still Can’t Measure</h2>

      <p>Science has made significant strides in understanding consciousness, and we’re not giving out lobotomies to everyone who sees a ghost—not anymore.</p>

      <p>But consciousness remains one of the most profound and challenging mysteries. We still don’t understand the neural mechanisms that generate our dreams. Our thoughts, ideas, dreams and emotions have no physical presence that we can point to, yet they combine to make up the bulk of our conscious experience.</p>

      <p>And talking about those things—that bulk of our human experience—requires us to pay a professional to tell us that it’s all in our head.</p>

      <p>But so is the stuff we can measure.</p>
    </section>

    <section>
      <h2>The Mind Builds the World We Experience</h2>

      <p>One of the stranger developments in modern neuroscience is the idea that perception is not a passive recording of an objective world. In predictive-processing models, the brain continuously constructs a working model of reality, compares that model against incoming sensory information, and adjusts it when the prediction and the signal disagree. What we consciously experience is therefore not raw reality arriving untouched through the senses. It is an internally constructed interpretation of whatever is out there.</p>

      <p>That leads many people to question whether “all is mind,” one of the foundational beliefs of inner alchemy and Hermetic philosophy.</p>

      <p>In other words, science has arrived at its own elaborate vocabulary for explaining that the world we consciously inhabit exists inside us.</p>
    </section>

    <section>
      <h2>Standing on the Shoulders of Giants</h2>

      <p>Without understanding alchemy’s spiritual dimension—inner alchemy—calling someone an alchemist might sound like a slight to anyone who believed their teachers.</p>

      <p>It’s not.</p>

      <p>Isaac Newton was not less credible as a scientist because he examined the whole of human experience. He was doing what humans had done for thousands of years: standing on the shoulders of giants, including the tradition attributed to Hermes Trismegistus.</p>

      <p>In <a href="/pages/bright-dark"><em>The Bright Dark</em></a>, I imagined a place the cities established specifically for talking about everything supernatural. It’s called an Oval House.</p>

      <p>It’s just there.</p>

      <p>People don’t think about it often. But when something happens that doesn’t fit neatly into ordinary life, they hold onto their questions until they can visit one.</p>

      <p>The more I think about it, the more familiar that seems.</p>

      <p>We have the therapist’s office. We have the church. We have a handful of officially designated places where people are permitted to discuss the parts of human experience that cannot be weighed, measured or reproduced on demand.</p>
    </section>

    <section>
      <h2>We Became Less Free to Wonder</h2>

      <p>Every time I really think about what my teachers told me—that alchemists were just trying to turn lead into gold, that Isaac Newton was too enlightened for alchemy, and that most of my biggest questions about existence belonged either in church or in a therapist’s office—I come back to the same uncomfortable thought.</p>

      <p>Maybe people in the ancient world weren’t simply more superstitious than we are.</p>

      <p>Maybe they were more free to admit what they didn’t know.</p>

      <p>And then just talk about it.</p>

      <p>Whenever.</p>

      <p>Wherever.</p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
