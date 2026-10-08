<?php
$post_meta = [
  'image'   => '/img/general/sunflowers_alchemy.png',
  'slug'    => 'on-being-happy',
  'title'   => 'On Being Happy',
  'excerpt' => 'A meditation on a father\'s turbulent past and peaceful present, painted in sailboats and calm seas, and what his happiness taught his daughter.',
  'date'    => '2016-06-20',
  'added'   => '2026-09-26',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'authorship',
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
  <meta property="og:image" content="https://peevishpenman.com/img/social/on-being-happy.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/on-being-happy.jpg">
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
      alt="Sunlit sunflowers in a field at golden hour, overlaid with a faint gold alchemical diagram of the sun and the four elements"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Family, Painting &amp; Letting Go</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>
    </div>
  </figure>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/article-tags.php'; ?>

  <p class="ppm-article-disclaimer">
    <strong>Content note:</strong> This post describes childhood physical abuse.
  </p>
</header>

    <section>
      <p>I got a card from my dad's girlfriend today, a simple blue hue with a line of sailing ships.</p>

      <p>
        A few weeks ago, I had sent my father a handful of Chinese paintbrushes. I'd bought fifty-seven and
        decided I needed to share the wealth. It took me a month to choose the ones I would send him, as I
        worried his eyesight might have begun to fail and they would not be used. My father's style has always
        been strong on composition and weak on proportions, with distorted hands, awkwardly set noses, and squat
        lines. The colors vary, but the palette always seemed dark and murky, over-mixed, over-dramatic, as if it
        were attempting to capture an audience by direct visual assault.
      </p>

      <p>
        I know the feeling from the other side of the easel—I'm a painter too, and I've written about
        <a href="/articles/buy-artwork-from-family-or-friends">what it's like being asked for free art by people who love you</a>.
      </p>

      <p>
        After reading the card, I closed it and realized the simple blue drawing was the docks in Portland where
        my father has been keeping his two sailboats. I didn't recognize it as his work. So cheerful. So serene.
        Even the sea lacked the turbulence I had come to associate with his inner world. Many people had
        described his life in Dakota running around the reservations in the sixties and seventies, angry and
        drunk, looking for solutions to the unfairness of life through the American Indian Movement, a marriage
        that didn't last, in work he couldn't maintain. He was a cursed man back then, but now, here he was,
        joyfully painting the docks in Oregon.
      </p>

      <p>
        Mary, his girlfriend, had enclosed photos of his other paintings. The interior of his boat. Sails. Blue
        skies. Happiness.
      </p>

      <p>
        The man I got to know as a young adult was not the man my mother said she knew years before. When her
        second husband dragged me down the wooden stairs by my arm and slapped my face over and over, I was
        eleven years old. He demanded to know if I thought I was abused. I had not made up my mind until that
        moment. I said yes. And he hit me. I said no and he hit me again. It kept going like that for a while. He
        was huge. He screamed in my face as I walked across the living room to the front door. He told me my
        father was an asshole. I wasn't angry. I was sad that I couldn't defend a man I didn't know. My
        stepfather had never met him either, but he knew my father did not pay the $75.00 per month for the
        support of my sister and me. Something he wanted to take from our skin.
      </p>

      <p>
        Whatever the man was like, I figured he could not be much worse than my stepfather. I had seen his
        paintings of old ships tilted in dark waters that raised up alongside toward the slightly tilted mast.
        Raised by the ocean, I knew the waters never looked so blue and brown at the same time. The ocean was
        gray or green or blue, but one should never take a pigment like raw umber straight from the tube and set
        it against a navy-toned mixture.
      </p>

      <p>
        As soon as I could drive, I came to his house demanding to know who he was, ready to show him that I'd
        exceeded his skill at art, his educational achievements—which were nil—and planned a decent life for
        myself, no thanks to him. The old man listened, smoked his pipe, and started debating philosophy. It
        worked. I came back. Again and again. All doubts that I was his daughter wafted away with the scent of
        tobacco. He told me stories of life on the plains that others had told him. I had heard some of them
        from my grandmother; they were stories of our ancestors, but I had never been old enough to recognize
        that the animals were metaphors, like Aesop's fables. Teachers read these stories to children. Animism.
        But the animals that talked in their stories, with vibrant drawings, were never animals that taught the
        lessons a specific individual needed at that moment, tailored and reworked from memory for the present.
        It was as if I had only ever seen snake skins and never snakes.
      </p>

      <p>I found him easy to forgive.</p>

      <p>
        Mary always hovered around him with lunch or ready to interrupt if he was overwhelmed by the
        conversations with his estranged daughter. She focused him. Her mother had come to the states from
        Northern India and met her father on a reservation in California. She appeared to be the only person in
        the world with whom he was entirely vulnerable, although his version of how their relationship worked
        sounded archaic and misogynistic, and left the woman's eyes rolling where he could not see. They
        separated for a while when I was in my twenties, but she often came around during that time, and they
        reunited within a year or two, resuming their very simple life together. He asked me once, while she was
        away, if he should take her back. I believe he would have found a reason, but he needed to know I would
        not respect him less. I think I respected him more.
      </p>

      <p>
        I have often wondered how a person so vilified by my mother and so destructive in his youth could find
        so much peace in the second half of his life. It's in his paintings, his voice, his letters, and on his
        face. The calm seas. The cheerful primary colors. I doubt he even used a tube of brown paint on the card
        I held.
      </p>
    </section>

    <section>
      <p>
        I suppose what I learned from my father about happiness is that it has nothing to do with the material
        world. It cannot be found in advancing up the ladders of social hierarchies. It's not in a bottle. It
        doesn't come with success or prosperity of any kind, although happiness can precede success and
        financial stability. Fairness and equality do not create an environment of happiness. No matter how much
        faith we put in the political process, it cannot change our state of mind. Happiness begins inside and
        radiates outward. Friends cannot make us happy. It isn't given or received by others. Although happiness
        often accompanies love, love is also attracted to happiness, making it impossible to tell which actually
        comes first in a person's life. Sometimes we can't be happy until we reject people we love and turn away
        the needs of others we cannot meet.
      </p>

      <p>
        I think my father found happiness more easily than other people, because he always was a bit contrary
        and naturally rejected popular wisdom and the status quo.
      </p>

      <p>
        Popular wisdom will tell you that meaningful relationships are the foundation of mental health, but they
        never tell you that it's okay to just walk away from people who are bringing you down, or generally
        reject the parts of society that aren't working for you. The definition of mental health isn't being
        happy, but more like not being so unhappy that you burden other people with it. Those are some
        exceptionally low standards.
      </p>

      <p>
        Today, thirteen percent of Americans are on antidepressants. And I personally suspect the medical
        community knows as little about helping people find happiness as they do about turning the tide on the
        obesity epidemic. <a href="/articles/everyone-runs-on-faith">Science, which I love but do not reduce to dogma</a>, can give us facts gleaned from
        studies of multiple variables in people's lives that coexist with happiness, but they do not easily
        account for the complexity of our consciousness or the murky social world, where the filters of our
        perception and the corrosion of stored and retrieved memories confuse the process of understanding our
        own emotional experiences.
      </p>

      <p>
        We know the brain is matter, and that thoughts and feelings have chemical and electrical processes, but
        you cannot find happiness during an autopsy, and the complex consciousness that accompanies it is
        similarly missing in the physical body when it's alive. Western thought has not been able to explain
        this phenomenon for many centuries, although the new insight in physics that the world itself is like a
        hologram echoes <a href="/articles/newton-alchemist">many non-Western views about reality</a> that help our consciousness make more sense.
      </p>

      <p>
        Earlier this year, I gave up trying to reconcile with my more difficult family members and protect what
        happiness I could create in my life. I had sought therapy for the process like a good citizen, but I
        found myself directed to accept mistreatment from other people. I've heard so many people subtly imply
        that their ability to get along with an ex for the sake of their kids, or reconcile with a difficult
        family member, or manage their jealousy with an unfaithful partner, or cope with an abusive boss, is
        proof that they are mature and well-adjusted people. The message is always the same. The problem is not
        how people treat you, but how well you handle it. Having worked in schools, I was familiar with the
        process, because I'd seen the children who reacted most strongly to bullying disciplined. The
        instigators were only noticed if they failed to cover up their behavior with proper repentance or
        general subterfuge.
      </p>

      <p>
        I told my therapist I was satisfied. I'd started therapy to help with a personal crisis over a year
        before, but he threw a tantrum and yelled at me for firing him. In retrospect, I should have expected
        it. People encourage quiet suffering and praise us for denying pain, because it keeps the boat from
        rocking. It feels safe even if you're slowly sinking. Deny it. You're up to your ankles in seawater. Grab
        a bucket and start bailing. Don't swim. You don't know if you can swim. Don't even look at the water.
        Don't rock the boat.
      </p>

      <p>
        If there is one thing I learned from my father about how he went from turbulence to inner peace, it's
        that you have to live bravely and not fear rocking a sinking boat. It seems so obvious, but do we trust
        ourselves to know when it's time to jump?
      </p>

      <p>
        I have been ridiculously pleased with my life for the last three months. I let go of everything that
        didn't work for me, including the idea that I could construct happiness by following rules and making
        other people happy. I headed directly into conflict through uncertain waters. Yes, I have not finished
        with the sea metaphors. I navigated poorly. I capsized. I weathered a few storms. I believed in my
        destination. I arrived.
      </p>

      <p>No permission. No approval. Nothing changed, but everything is better.</p>

      <p>If happiness is your destination, does it matter as much what else you find there?</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
