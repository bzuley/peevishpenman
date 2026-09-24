<?php
$post_meta = [
  'image'   => '/img/cev-hero.jpg',
  'slug'    => 'closed-eye-visualizations',
  'title'   => 'Meditation - Closed Eye Visualizations',
  'excerpt' => 'Exploring the phenomenon of closed-eye visualizations in meditation—from subtle patterns to vivid imagery. A personal account of CEVs, their neuroscience, and their role in inner alchemy.',
  'date'    => '2024-12-20',
  'added'   => '2026-08-25'
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
      alt="Illustration of a woman meditating in lotus position with eyes closed, haloed by concentric art-deco rings of light"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Inner Alchemy & Meditation</p>
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
      <p>For people who meditate, closed-eye visualizations (CEVs) may become an integral part of their experience. The visions range from subtle patterns to wild catastrophic imagery. But they're a subjective experience, hard to document, and must be self-reported—so its rarely more than a footnote for scientists who study meditation.</p>

      <p>Still, I find the lack of information very odd. When my own meditation practice veered into more visual territory, I found little support and limited resources. I'm not a Buddhist. I don't ignore what my mind produces. I'm not wellness industry consumer. I'm not newly cautious about meditation producing an altered state of consciousness. Obviously, it does. But I feel alone trying to understand this phenomena.</p>

      <p>If you have never experienced a CEV, I understand. I meditated for years before they became a common feature of my practice. It's not like picturing an image with your mind's eye. CEVs may appear spontaneously during meditation or deep relaxation, but they often convey as much meaning as a scene in a dream, but you are awake.</p>

      <p>The few people that have studied this phenomena say that up to <strong>75% of people</strong> experience some form of closed-eye hallucination at some point in their lives. The more I study inner alchemy, the more I am convinced people have tuned their conscious minds by using meditation as their workspace all throughout history and I've wondered if CEVs weren't part of that method.</p>

      <p>I don't know that answer. But I am going to share my personal experience with the hope that I will have more knowledge at a later time.</p>
    </section>

    <section>
      <h2>The Mind's Eye vs. Closed-Eye Vizualizations</h2>

      <p>The difference between the<strong> mind's eye</strong> and closed-eye visualizations is essential to understand. Using the mind's eye involves deliberate visualization created by memory or imagination, primarily engaging the prefrontal cortex, temporal lobe, and higher cognitive areas. It synthesizes abstract thoughts and recalls visual memories.</p>

      <p>In contrast, the <strong>closed-eye visualizations </strong>arise spontaneously and rely heavily on the visual cortex and default mode network (DMN), with support from the thalamus and parietal lobe, reflecting the brain's intrinsic activity rather than conscious intent.</p>

      <p>You can find all that information on Wikipedia, but if I lost you there: <i>it basically means we can measure what part of the brain creates closed eye visualizations and what uses the mind's eye and they're different.</i></p>

      <p>Dreaming, however, arises during REM sleep. Even lucid dreaming uses different parts of the brain.</p>

      <!-- Neurostate Matrix: Parts of the brain (rows) × States (columns) -->
      <div style="overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0;">
      <table style="width: 100%; min-width: 600px; border-collapse: collapse; font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif; font-size: 15px;">
      <caption style="text-align: left; padding: 8px 0; font-weight: 600;">Neural engagement across inner-image states (✔ active · ◑ partial · ✖ inactive · — minimal/indirect)</caption>
      <thead>
      <tr>
      <th style="border-bottom: 2px solid #333; text-align: left; padding: 8px;">Brain Region</th>
      <th style="border-bottom: 2px solid #333; text-align: center; padding: 8px;">Mind's Eye</th>
      <th style="border-bottom: 2px solid #333; text-align: center; padding: 8px;">Memory</th>
      <th style="border-bottom: 2px solid #333; text-align: center; padding: 8px;">Dreaming</th>
      <th style="border-bottom: 2px solid #333; text-align: center; padding: 8px;">Lucid Dreaming</th>
      <th style="border-bottom: 2px solid #333; text-align: center; padding: 8px;">CEVs</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td style="border-bottom: 1px solid #ccc; padding: 8px;"><strong>Prefrontal cortex (DLPFC)</strong></td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✖</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      </tr>
      <tr>
      <td style="border-bottom: 1px solid #ccc; padding: 8px;"><strong>Temporal lobe (memory / language)</strong></td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      </tr>
      <tr>
      <td style="border-bottom: 1px solid #ccc; padding: 8px;"><strong>Parietal lobe (spatial awareness)</strong></td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✖</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      </tr>
      <tr>
      <td style="border-bottom: 1px solid #ccc; padding: 8px;"><strong>Visual cortex (V1, V2)</strong></td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      </tr>
      <tr>
      <td style="border-bottom: 1px solid #ccc; padding: 8px;"><strong>Thalamus (sensory relay)</strong></td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✖</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      </tr>
      <tr>
      <td style="border-bottom: 1px solid #ccc; padding: 8px;"><strong>Hippocampus (memory encoding)</strong></td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">◑</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      </tr>
      <tr>
      <td style="border-bottom: 1px solid #ccc; padding: 8px;"><strong>Pons (REM trigger / PGO)</strong></td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      </tr>
      <tr>
      <td style="border-bottom: 1px solid #ccc; padding: 8px;">
      <strong>Default Mode Network (DMN)</strong> (mPFC, PCC, angular gyrus)</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">—</td>
      <td style="text-align: center; border-bottom: 1px solid #ccc; padding: 8px;">✔</td>
      </tr>
      </tbody>
      </table>
      </div>
      <!-- Optional compact legend for inline reuse -->
      <p style="margin-top: 8px; font-size: 13px;"><strong>Legend:</strong> ✔ active  ·  ◑ partial  ·  ✖ inactive  ·  — minimal/indirect</p>

      <p>You can see from the lovely chart ChatGPT has made for me here, the unique parts of the brain activated to create the CEVs is the thalamus and the Default Mode Network (DMN).</p>

      <p>Now, I asked ChatGPT to explain what difference it makes that those two parts of the brain are active during CEVs and it responded:</p>

      <p>In closed-eye visuals, the <strong>Default Mode Network</strong> generates spontaneous imagery—memory fragments, symbolic forms, and associative patterns—while the <strong>thalamus</strong> begins routing those internal signals to the visual cortex as though they were external sensory input. The prefrontal cortex stays awake, observing the process without fully controlling it. What emerges is a liminal state in which consciousness perceives its own signal as vision: the mind, quite literally, <strong>seeing itself think.</strong></p>

      <p>In all honesty, I don't think that means anything until you experience it.</p>

      <p>But some people who experience CEVs worry that they've lost of control of their minds, and they are, in fact, witnessing something truly alien to most people. It's not insanity. In the same way that you wake up from dreams, the hallucinations end. The visualizations vanish. But unlike dreams, they can feel like living math has hijacked your brain for a joy ride.</p>
    </section>

    <section>
      <h2>The Five Levels of Closed-Eye Visualizations</h2>

      <p>Closed-eye visualizations are categorized into five progressive levels, each revealing a deeper interaction with the visual and subconscious systems:</p>

      <p><strong>1 Visual Noise:</strong> This foundational level appears as random specks, static, or faint lights. It is the baseline activity of the visual cortex and often observed when simply closing the eyes in a relaxed state.</p>

      <p>Generally, it's not black, but instead a sort of dark gray-violet that the Germans call <strong>eigengrau.</strong></p>

      <p><strong>2 Light or Dark Flashes:</strong> As relaxation deepens, flashes of light or dark patterns may overlay the visual noise. These flashes, also called phosphenes, are thought to reflect the spontaneous firing of neurons in the visual cortex. .</p>

<div style="text-align: center;"><video width="480" height="270" autoplay loop muted playsinline preload="none"><source src="/video/cev-noise-wild.webm" type="video/webm"><source src="/video/cev-noise-wild.mp4" type="video/mp4"></video></div>
      <div style="text-align: center;"><br></div>

      <p><strong>3 Patterns, Motion, and Color:</strong> Intricate geometric shapes, spirals, and vibrant colors emerge at this stage. The patterns often move rhythmically, resembling mandalas or tessellations, which can hold symbolic meaning in many spiritual traditions.</p>

      <p>Even my best reproduction of what I regularly see in longer meditation, cannot do the imagery justice. These 2D pictures lack form. The 3D visualizations move gracefully. I do not perceive much color, but they have depth and feel like a lidar image in virtual reality.</p>

      <div style="text-align: center;"><video width="480" height="270" autoplay loop muted playsinline preload="none"><source src="/video/cev-level-three.webm" type="video/webm"><source src="/video/cev-level-three.mp4" type="video/mp4"></video></div>
      <div style="text-align: center;"><video width="480" height="269" autoplay loop muted playsinline preload="none"><source src="/video/cev-fractals.webm" type="video/webm"><source src="/video/cev-fractals.mp4" type="video/mp4"></video></div>
      <div style="text-align: center;"><br></div>

      <p><strong>4 Objects and Scenes:</strong> Recognizable images or scenarios materialize, often carrying personal or archetypal significance. These visuals may feel like glimpses into the subconscious or symbolic narratives tied to the meditator's journey.</p>

 <div style="text-align: center;"><video width="480" height="270" autoplay loop muted playsinline preload="none"><source src="/video/cev-rabbit.webm" type="video/webm"><source src="/video/cev-rabbit.mp4" type="video/mp4"></video></div>
      <div style="text-align: center;"><br></div>

      <p><strong>5 Overriding Sensory Perception:</strong> In rare cases, closed-eye visualizations become immersive, temporarily overriding physical perception. E<span>xternal factors like sound or environmental vibrations can amplify the intensity of these visualizations. Chanting, rhythmic music, or binaural beats are known to influence the patterns and depth of imagery, creating a synergy between external stimuli and inner perception. </span></p>
    </section>

    <section>
      <h2>Mental Health and Meditation</h2>

      <p>Meditation produces altered states of conscious and CEVs may reveal hidden truths about the state of your subconscious mind. They can range from the trivial to the deeply profound. They amuse and they cause distress.</p>

      <p>What little advice I've found from experienced meditators, who do not ignore the imagery they experience, generally recommends allowing your own practice to build up over time. Don't force your experience and don't stop all meditation after distressing imagery. Return to a shortened version of your previous routine. I concur.</p>
    </section>

    <section>
      <h2>Closed-Eye Visualizations and Inner Alchemy</h2>

      <p><span>The parallels between closed-eye visualizations and dreams arise from the brain's ability to generate imagery independent of external stimuli, reflecting the mind's symbolic language. Alchemical meditators may have used CEVs as a bridge for communication between the conscious and subconscious, offering endless opportunities for growth and discovery. </span><span>For those practicing inner alchemy today, CEVs still offer a symbolic gateway for their inner work. Like a mechanic opening the hood of a vehicle, you need to see it, to transform it, whether that's an oil change or a complete rebuild.</span></p>

      <p>Unlike most forms of meditation, alchemical mediators emphasize transformation. I personally keep a journal and document how my CEVs evolve. I use dream interpretation and symbolism to understand what I encounter on a deeper level. I even know when to expect amusing imagery and imagery that distresses me, because I am more aware of my own mental state.</p>

      <p>Sometimes I wonder where we would be as a species if we hadn't suppressed exploration of the mind.</p>

      <p>It's a question I write into fiction, too. <a href="/pages/bright-dark">The Bright Dark</a> imagines a lost process called rarefication, where people shed their physical bodies and become luminous entities called plasmoids—a fictional exaggeration of exactly the kind of dissolving-into-light imagery I keep describing above. I didn't plan that overlap. It found me anyway.</p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>