<?php
$post_meta = [
  'image'   => '/img/vr-writing-hero.jpg',
  'slug'    => 'i-wrote-this-post-in-vr',
  'title'   => 'I Wrote This Post in Virtual Reality',
  'excerpt' => 'A sci-fi author tries to write inside a Meta Quest 3, fails through every "obvious" input method, and ends up with a grudging respect for the tech—plus a blunt take on AI, ethics, and accessibility.',
  'date'    => '2025-12-29',
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

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta property="og:type" content="article">
  <meta property="og:image" content="<?php echo htmlspecialchars($post_meta['image']); ?>">

  <link rel="stylesheet" href="/styles/main.css">

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
      alt="Writing in virtual reality"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Technology & Accessibility</p>
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
        My husband bought me a VR headset for Christmas, so I did the only sensible thing a writer would do: I tried to use it to write. What followed was a tour of bad input methods, a surprising accessibility win, and a hard line on tech—especially AI—being optional, ethical, and nobody else's business.
      </p>
    </section>

    <section>
      <h2>Trying to write in VR: a comedy of input</h2>

      <p>
        My husband bought me a VR headset for Christmas, but I'm a writer. So, I did what comes naturally—I downloaded a word processing app. Microsoft Word wasn't my only option, I could use Word Weaver Pro through the VR browser. Within an hour, I had opened my work in progress and was trying to edit my work in progress—terrible idea. Painting white-out onto a page scrolled into Hermes 3000 makes more sense. The response is too poor, too slow, and I was better off using my thumbs. Why would they provide the app if it wasn't usable?
      </p>

      <p>
        I had to solve this mystery. I tried dictation. If you've ever opened Word and used the speech-to-text feature, you know the punctuation is atrocious. It might be great for writing hands-free, but you will be stuck editing hands-free. My dog could do a better job with a copy of my manuscript and an ink pad. Utterly futile.
      </p>

      <p>
        Still, as a sci-fi author, I wanted this option to work for me. To set the heavy visor perched on my head while I stare at the ceiling, build worlds with my words is the dream. Unfortunately, the Metaquest 3 controllers will not be the solution. I'm not writing Westerns. I don't need a trigger to shoot each letter.
      </p>

      <p>
        The last obvious option is the virtual keyboard. It offers the user the dexterity of a blind gorilla. Moving forward, I've ordered a handheld Bluetooth keyboard. It reminds me of the keypads on a cell phone I had 20 years ago and as I already type most of my novels on my phone with my thumbs, I believe I can make it work. This writer's thumbs are beastly, strong—like fierce little oxen dragging me sentence by sentence, line by line, to my final paragraph.
      </p>

      <p>
        Writing is just a form of communication, and the tools don't really matter—unless, for the writer personally, they do.
      </p>
    </section>

    <section>
      <h2>When tech is quietly life-changing</h2>

      <p>
        I've had a disorder of my equilibrium since I was 26 years old. I experience the constant illusion that my environment is moving whenever I move my head. It's an invisible disability caused by bilateral vestibular loss. After getting the VR headset, I had far less brain fog than after a few hours on my phone. Rather than wear reading glasses in the headset, I can position the screen at the optimal location and it moves with me. My hearing aids and my noise-canceling headphones both work with the Metaquest 3. No lies. I loathe Facebook and haven't updated my status for three years, but it's a decent little device they've made.
      </p>

      <p>
        Yet, how can I fully disassociate the clicking and clacking of keys from the process of writing? I remember the first time I held a Kindle, I was overcome by grief realizing my glorious bookshelves were now an altar for authors who had come before. They were options, not necessities.
      </p>
    </section>

    <section>
      <h2>Writers, AI, and the hypocrisy we pretend not to see</h2>

      <p>
        Most writers of my generation are bigots about technology. I get unfollowed every time I stick up for using ChatGPT. Artificial Intelligence is demonic, right? AI is stealing from creators while killing creativity. I realize all that, but I also see the hypocrisies we harbor behind our words.
      </p>

      <p>
        We don't deny disabled people technology that mitigates the effect of their conditions. We won't cancel someone who writes in visual reality if we know it helps their disability. We like technologies that level the playing field. We loathe ones that give people an advantage.
      </p>

      <p>
        I disagree.
      </p>

      <p>
        All the technologies should be optional for everyone. For example, I used dictation to write this article, then had ChatGPT correct the punctuation. It wasn't as quick as typing on my laptop and I sidestepped implementing all those eighth-grade grammar lessons in the proofreading process. The result was incomprehensible, but I made the minor corrections needed on a keyboard.
      </p>

      <p>
        AI isn't thinking—it's mimicking. If used ethically, it can help a person with arthritis finish their work without pain. It can help dyslexics find their errors. It can redirect a person with ADHD who has lost the plot.
      </p>

      <p>
        Any technology that allows you to express your unique voice, should be an option and you shouldn't have to justify your choice to use it. Just be original; don't mimic. Don't let AI mimic and claim its word salad as your own. Artificial Intelligence can be a superior search engine. You already use AI in Google. All. The. Time.
      </p>

      <p>
        I didn't have to explain my disability and no one would have known about it if I didn't, but if writers avoid judgement for our fellow creators—focus instead on creative ethics—then it won't matter if you use a pen or a prompt.
      </p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>