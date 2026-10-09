<?php
$post_meta = [
  'image'   => '/img/first_robots.png',
  'slug'    => 'first-robots-in-fiction',
  'title'   => 'First Robots in Fiction',
  'excerpt' => 'Was Frankenstein’s creature the first robot in science fiction? Tik-Tok, Čapek, the golem and a long line of automata say the answer is much older and messier.',
  'date'    => '2026-10-08',
  'added'   => '2026-10-08',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'speculativefiction, technology, origins',
  'author'  => 'OA Allen'
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
  <meta name="author" content="<?php echo htmlspecialchars($post_meta['author']); ?>">

  <link rel="canonical" href="https://peevishpenman.com/articles/<?php echo htmlspecialchars($post_meta['slug']); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://peevishpenman.com/articles/<?php echo htmlspecialchars($post_meta['slug']); ?>">
  <meta property="og:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">
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
      alt="Art deco illustration of a gleaming metal robot woman in the style of Metropolis, set against stylized skyscrapers"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Science Fiction History</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>
    </div>
  </figure>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/article-tags.php'; ?>
</header>

<section>
      <p>
        Everyone knows the concept of science fiction as a distinct genre of literature has evolved over time, but we probably envision different starting points—like <em>Frankenstein</em>. I’ve heard that claim a lot lately and as a woman, I worry that people are pushing Mary Shelley as a first for the sake of gender politics, not for the benefit of historical accuracy.
      </p>

      <p>
        But let’s examine these concepts: first, robots, and science fiction. We didn’t use the word “science” in the ancient world. In fact, some of the earliest works that could be loaded onto the science fiction pile include works by the philosopher Lucian of Samosata. His <em>True History</em> includes a voyage to the Moon and an interplanetary war. We didn’t have a genre called “natural philosophy fiction” or “episteme fiction” in the past. We inquired and explored the natural world, but we did not limit our exploration by what could be measured or the method we call science. This complicates our history of fiction.
      </p>

      <p>
        <strong>But I will maintain until my dying breath that most ancient Sumerian writing about the Anunnaki is science fiction.</strong>
      </p>

      <p>And I’m just not explaining that here.</p>

      <p>But it’s a human urge to take what is and project out to what it could be.</p>

      <p>
        So, let’s use robots as a metric to define a first in science fiction. Notable Victorian-era science fiction writers include Edgar Allan Poe, Jules Verne, and H. G. Wells, and while these authors were instrumental in establishing many of the themes and conventions that continue to be central to science fiction today, they didn't include characters that we might distinctly consider robots. They had machines without operators. Let’s get our semantics straight so we can explore this very interesting question: <strong>what was the first robot in science fiction?</strong>
      </p>
    </section>

    <section>
      <h2>What Makes a Robot?</h2>

      <p>
        “Robot” comes from the Czech <em>robota</em>, meaning “forced labor.” The term appeared in Karel Čapek’s 1920 play <em>R.U.R., or Rossum’s Universal Robots</em>, published in English in 1923. His brother Josef suggested the word.
      </p>

      <p>
        Right. That bodes well for people’s fears over a revolt by artificial intelligence. But what criteria determine whether a machine is a robot? Could we call Frankenstein’s creature a robot made of flesh? Would that make a homunculus basically a robot?
      </p>

      <p>
        Let’s back up. Tik-Tok of Oz is a great example of an automaton that essentially meets the definition of a robot, because he can <strong>sense, think, and act</strong>.
      </p>

      <p>
        Created by L. Frank Baum for <em>Ozma of Oz</em> in 1907, and later the title character of his eighth book in the Oz series, Tik-Tok is described as a mechanical man powered by clockwork. He is not a robot in the traditional sense according to many historians, but I think a scientist would say Tik-Tok has the ability to think, talk and act as a human. No one will tell you that anyone could actually build a robot with just gears and metal. Tik-Tok has clockwork inside of him that needs to be wound every now and then, but from the outside he worked. WALL-E worked. R2-D2 worked. Optimus Prime worked. We’ve always accepted that their tech worked even if it was a proposed science. Only chrono-bias prevents us from acknowledging Tik-Tok as a robot.
      </p>

      <p>
        Which means Karel Čapek's <em>Rossum's Universal Robots</em> introduced the word “robot” to the world in 1920, but his artificial people were not substantially different from Tik-Tok in what they could do. Čapek wrote about a company that created artificial biological people to do manual labor. They developed consciousness and turned against their human creators. Yikes. Tik-Tok was self-aware and he assisted his companions. Whew!
      </p>
    </section>

    <section>
      <h2>Do Robots Need Feelings?</h2>

      <p>
        Some people are preoccupied with whether artificial intelligence is conscious. I’m not. Consciousness involves awareness of our surroundings, thoughts, emotions, and experiences. We can break it into wakefulness, attention, perception, thought, and emotion, but science still doesn’t fully understand it in humans. <strong>If you can’t explain it in people, what definition are you using for the robots?</strong>
      </p>

      <p>
        We know consciousness because we experience it. We assume other people experience it largely the same way, but not so fast. Some people have no internal dialogue and no mind’s eye and they still operate forklifts and mow lawns and have opinions on the midterms. People are probably most divided over emotions in a robot. Tik-Tok cried oil in the 1985 movie <em>Return to Oz</em>. So, we know he had them in later renditions.
      </p>

      <p>
        The robots in Čapek's work eventually rise against humanity, with the ultimate goal of obtaining their freedom. As they become self-aware, they start to display the emotions of anger, resentment and the desire for autonomy and freedom. L. Frank Baum created his mechanical man in a fantasy book. So, even though Tik-Tok first appeared thirteen years earlier, it could be claimed that he was reliant on magic to function. Thus, disqualifying Baum’s robot in their eyes. But Baum wrote Tik-Tok as a manufactured being. It could be argued that his operation in a story with magic was incidental.
      </p>

      <p>But Čapek was just the first writer to introduce the word “robot.”</p>
    </section>

    <section>
      <h2>Working Backward from 1920</h2>

      <p>
        Working backward from 1920, the contenders for the first robot include the automated service and repair machinery in E. M. Forster’s “The Machine Stops” (1909), and Baum’s thinking, talking clockwork man Tik-Tok in <em>Ozma of Oz</em> (1907).
      </p>

      <p>
        Before them come the murderous chess-playing automaton in Ambrose Bierce’s “Moxon’s Master” (1899); Wells’s apparently autonomous excavating machine in <em>The War of the Worlds</em> (1898); the clockwork dancer in Jerome K. Jerome’s “The Dancing Partner” (1893); William Douglas O’Connor’s “The Brazen Android” (1891); Hadaly, the artificial woman in Villiers de l’Isle-Adam’s <em>The Future Eve</em> (1886); the mechanical man in Luis Senarens’s <em>Frank Reade and His Electric Man</em> (1885); the mechanical elephant in Jules Verne’s <em>The Steam House</em> (1880); the automata in Edward Bulwer-Lytton’s <em>The Coming Race</em> (1871); Edward S. Ellis’s <em>The Steam Man of the Prairies</em> (1868); the animated miniature figures in Fitz-James O’Brien’s “The Wondersmith” (1859); and the mechanical workman in Herman Melville’s “The Bell-Tower” (1855).
      </p>

      <p>
        Further back are the mechanical laborers in Mark Drinkwater’s <em>The United Worlds</em> (1834); Frankenstein’s creature (1818), if manufactured biological people count. I would not include Frankenstein’s creature, because then the homunculus, a miniature human being created through alchemy, would also count and we’d be going back to the 16th century. And there, we would need to start considering the golem. Though constructed of clay and animated by a divine name written in Hebrew and placed in his mouth, the workings of the golem were not explained. We would call it magic, because of the era of the writing, but it was based on the biblical description of making the first man. <strong>How do we know that language isn’t the source code of the universe?</strong>
      </p>

      <p>The line between science and magic is never clear. Often, it’s just a matter of style.</p>

      <p>
        Going further back, we have Hoffmann’s mechanical woman Olimpia in “The Sandman” (1816) and Talking Turk in “The Automata” (1814).
      </p>

      <p>
        And even earlier candidates include the musical automata in François-Félix Nogaret’s <em>The Mirror of Present Events</em> (1790), Spenser’s iron man Talus in Book V of <em>The Faerie Queene</em> (1596), and the talking brazen head in Robert Greene’s <em>Friar Bacon and Friar Bungay</em> (performed in 1589). Beyond those dated literary works, the chronology becomes less known: the artificial performer built by Yan Shi in the Chinese <em>Liezi</em>, the Greek accounts of Talos, Hephaestus’s golden servants, mechanical animals, and self-moving tripods all offer predecessors.
      </p>
    </section>

    <section>
      <h2>There Is No Single First</h2>

      <p>
        The urge to identify a single first robot in science fiction mirrors our human need to attribute the idea to a solitary genius. When we’re studying science in school, we learn who discovered an idea or developed a method as much as we learn about the knowledge revealed. Perhaps that helps people remember or it motivates the next generation to continue the search for new discoveries, but it’s not real. It’s oversimplified and there are always too many people to credit fairly.
      </p>

      <p>
        Mary Shelley was a giant among writers, but she was neither the first to write about robots nor the first science fiction writer. She was emblematic of early science fiction and a cultural force still relevant today. <strong>We don’t need to silence other voices for hers to be heard.</strong>
      </p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
