<?php
$post_meta = [
  'image'   => '/img/general/big_nose_liar.webp',
  'slug'    => 'tell-me-a-big-lie',
  'title'   => 'Tell Me a Big Lie: How to Write Liars, Deception, and Broken Trust in Fiction',
  'excerpt' => 'Types of lies, why people believe them, the big lie, and eleven ways to show a character is lying—a writer\'s guide to deception and broken trust in fiction.',
  'date'    => '2026-10-16',
  'added'   => '2026-10-16',
  // Comma-separated tags, e.g. 'independentpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /article-tag.php).
  'tags'    => 'writingcraft',
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
  <meta property="og:image" content="https://peevishpenman.com/img/social/tell-me-a-big-lie.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/social/tell-me-a-big-lie.jpg">
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
      width="1536" height="1024"
      alt="A grinning showman in a top hat, red velvet coat and white gloves, with a long wooden Pinocchio nose, spreads his arms against a bright blue sky"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Writing Craft</p>
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
      <p>Lying is one of the most useful things a fictional character can do. It can protect an innocent person, conceal a crime, prevent a war or start one. We make exceptions for ourselves whenever the truth becomes inconvenient, but woe be he who betrays us with lies.</p>

      <p>For writers, this creates opportunities, because the relationship between truth, belief, and trust can become an essential part of the drama.</p>
    </section>

    <section>
      <h2>What Really Is a Lie?</h2>

      <p>Philosophers have been arguing about the definition of lying for centuries.</p>

      <p>Consider three statements:</p>

      <ul>
        <li>"The coffee is cold," said by someone who checked it an hour ago and believes it remains cold.</li>
        <li>"The coffee is cold," said by someone who knows it is hot.</li>
        <li>"The coffee is cold," said by someone who has no idea whether it's cold but doesn't want their husband to drink it.</li>
      </ul>

      <p>The first speaker may simply be mistaken. The second is deliberately making a false statement. The third is asserting something without knowing whether it is true, and may be just as dangerous.</p>

      <p>For fiction, we can distinguish between what a character believes or says and what the listener understands or what is actually true. These four things can be entirely different.</p>
    </section>

    <section>
      <h2>Types of Lies and Deception</h2>

      <p>There is no single universally accepted psychological classification of lies. The following categories are useful for fiction because they distinguish the methods, motives, and consequences of dishonesty. They overlap, and a single deception may belong to several categories.</p>

      <div style="overflow-x:auto;">
        <table>
          <thead>
            <tr><th>Type</th><th>Definition</th><th>Fictional application</th></tr>
          </thead>
          <tbody>
            <tr><td>Direct lie</td><td>A statement the speaker believes is false</td><td>Denying a crime</td></tr>
            <tr><td>White lie</td><td>A socially motivated falsehood, often intended to spare feelings</td><td>Praising a terrible meal</td></tr>
            <tr><td>Lie of omission</td><td>Withholding information to create a misleading impression</td><td>Concealing an important encounter</td></tr>
            <tr><td>Half-truth</td><td>Combining true statements with misleading omissions or implications</td><td>Providing a technically accurate alibi</td></tr>
            <tr><td>Exaggeration</td><td>Inflating the significance or extent of something</td><td>Inventing heroic accomplishments</td></tr>
            <tr><td>Minimization</td><td>Reducing the apparent seriousness of an event</td><td>Describing an assault as an argument</td></tr>
            <tr><td>Fabrication</td><td>Inventing an event, identity, or history</td><td>Creating a false military career</td></tr>
            <tr><td>False implication</td><td>Communicating something misleading without explicitly stating it</td><td>Allowing someone to assume a relationship exists</td></tr>
            <tr><td>Protective lie</td><td>Deceiving someone to prevent perceived harm</td><td>Hiding a fugitive</td></tr>
            <tr><td>Self-serving lie</td><td>Deception intended to secure personal advantage</td><td>Claiming credit for another person's work</td></tr>
            <tr><td>Malicious lie</td><td>Deception intended to injure another person</td><td>Inventing an accusation</td></tr>
            <tr><td>Habitual lie</td><td>Repeated dishonesty that becomes characteristic behavior</td><td>Constantly embellishing ordinary experiences</td></tr>
            <tr><td>Self-deception</td><td>Maintaining a false belief about oneself or reality</td><td>Refusing to acknowledge one's responsibility</td></tr>
            <tr><td>Collective deception</td><td>A false account maintained by multiple participants</td><td>Concealing a colony's true history</td></tr>
          </tbody>
        </table>
      </div>

      <p>The motive behind a lie is often more revealing than its content. Two characters might tell precisely the same falsehood, with one attempting to save a life and the other trying to protect a reputation. Neither becomes truthful because the motive is sympathetic.</p>
    </section>

    <section>
      <h2>Lies of Omission and Half-Truths</h2>

      <p>Omission deserves particular attention because it is often easier to sustain than a fabricated account. A character who lies directly must remember what they said and may need to invent additional details to support the original falsehood. Someone who tells a partial truth can rely on genuine memories and verifiable facts.</p>

      <p>The eventual revelation need not invalidate anything the reader previously learned. It simply changes the interpretation.</p>
    </section>

    <section>
      <h2>Self-Deception and Motivated Belief</h2>

      <p>Self-deception is more complicated.</p>

      <p>It depends on reasoning, selective attention, avoidance of contradictory evidence, or the compartmentalization of beliefs. And the liar may seem crazy.</p>

      <p>So, a character doesn't need to invent the past. They simply have to maintain an explanation that protects something or someone. This is particularly useful for writing antagonists who don't consider themselves villains.</p>

      <blockquote>
        <p>“It wasn't abuse. It was discipline.”</p>
        <p>“I didn't steal. They owed me.”</p>
        <p>“You can't handle the truth.”</p>
      </blockquote>

      <p>The character may be capable of admitting individual mistakes while remaining unable to accept what those mistakes collectively reveal, precisely because it makes them less sympathetic.</p>
    </section>

    <section>
      <h2>The Psychology of Believing Lies</h2>

      <p>An effective fictional deception requires more than a clever liar. It requires someone willing, or at least susceptible, to believe the lie.</p>

      <p>Timothy Levine's truth-default theory proposes that ordinary human communication begins with an assumption of honesty—generally. This is not the same as saying everyone is gullible. In ordinary circumstances, accepting information is often easier than continually evaluating its truthfulness, because they may simply have no reason to question it.</p>

      <h3>Why People Believe False Information</h3>

      <p>Several psychological processes can contribute to the credibility of a false statement.</p>

      <ul>
        <li><strong>Familiarity:</strong> Information encountered repeatedly may begin to seem more credible. This is known as the illusory truth effect.</li>
        <li><strong>Confirmation bias:</strong> People tend to favor information consistent with their existing beliefs and may evaluate contradictory evidence more critically.</li>
        <li><strong>Authority:</strong> Statements from someone perceived to have legitimate status can receive greater credibility, particularly in unfamiliar situations.</li>
        <li><strong>Social agreement:</strong> When multiple people accept the same account, an individual may be less inclined to question it.</li>
        <li><strong>Emotional motivation:</strong> A reassuring explanation may be attractive because accepting the alternative would be frightening, humiliating, or costly.</li>
        <li><strong>Prior trust:</strong> Someone with a history of honesty may receive the benefit of the doubt even when making an unusual claim.</li>
      </ul>

      <p>A writer can use these conditions to make a fictional deception credible without requiring the liar to be a genius or the listener to be a fool.</p>
    </section>

    <section>
      <h2>The Big Lie: Is an Enormous Falsehood Easier to Believe?</h2>

      <p>The idea that a sufficiently enormous lie can be easier to believe than a modest one is historically associated with Adolf Hitler's discussion of the big lie in <em>Mein Kampf</em>. His argument involved assumptions about the public's capacity to imagine extraordinary dishonesty.</p>

      <p>The psychological proposition is interesting, but the size of a lie alone does not determine whether people believe it.</p>

      <p>An extraordinary claim may invite immediate skepticism, but it can also exploit a listener's assumptions about what another person would dare to invent.</p>

      <p>This is especially useful in speculative fiction.</p>

      <p>Imagine a colony whose inhabitants have been taught for generations that Earth was destroyed centuries ago. The claim is enormous, but for people born into the colony, it may be an accepted historical fact. Their institutions, education, and family histories all reinforce it.</p>

      <p>A visitor arrives and announces that Earth still exists.</p>

      <p>Which character sounds like the liar?</p>
    </section>

    <section>
      <h2>How to Show a Character Is Lying in Fiction</h2>

      <p>The most important choice is not whether to show or tell. It’s deciding what the reader should know and when. I personally struggle with this, because it gets really cryptic really fast. I default to a method without ambiguity.</p>

      <h3>1. Direct Narration</h3>

      <p>The simplest method is to state that the character lied.</p>

      <blockquote><p>“The coffee is cold,” he lied.</p></blockquote>

      <p>No gray area there. It immediately establishes the deception and allows the scene to concentrate on its consequences.</p>

      <h3>2. Internal Monologue</h3>

      <p>A viewpoint character's thoughts can contradict their spoken words.</p>

      <blockquote><p>"I've never seen that mug," she said, wondering whether anyone had opened her cupboards.</p></blockquote>

      <p>The reader knows she is concealing information, but the other characters do not. This can generate suspense as the reader anticipates discovery.</p>

      <h3>3. Contradictory Dialogue</h3>

      <blockquote>
        <p>"You said you left before they drank coffee."</p>
        <p>"I did."</p>
        <p>"Then how did you know they spilled it?"</p>
      </blockquote>

      <p>Memory is imperfect, and truthful people sometimes give inconsistent accounts, but contradictions create suspicion.</p>

      <h3>4. Evasive Answers</h3>

      <p>A character can avoid answering a question directly.</p>

      <blockquote>
        <p>"Did you take the gift card?"</p>
        <p>"Why would I steal from my own family?"</p>
      </blockquote>

      <p>Evasion can involve changing subjects, responding with another question, attacking the questioner, or supplying information unrelated to the original inquiry.</p>

      <h3>5. Technically True Statements</h3>

      <p>A character may deliberately encourage an incorrect inference while saying nothing false. It's most common with intelligent or cautious deceivers.</p>

      <blockquote><p>“I didn't see anyone use your gift card and no one has brought a coffee from that shop here.”</p></blockquote>

      <p>This may be understood immediately by some, but not all readers.</p>

      <h3>6. Unusual Speech Patterns</h3>

      <p>Changes in a character's established manner of speaking can suggest discomfort or concealment.</p>

      <blockquote><p>“I did not have sexual relations with that barista.”</p></blockquote>

      <h3>7. Physical Reactions</h3>

      <p>Writers frequently portray liars through fidgeting, sweating, avoiding eye contact, trembling, or nervous laughter.</p>

      <p>But let's be honest, when was the last time your guilt sweat made your palms clammy?</p>

      <p>Don't write it just because you read it somewhere.</p>

      <h3>8. Actions That Contradict Statements</h3>

      <p>A character's behavior may reveal something their dialogue conceals.</p>

      <blockquote>
        <p>"I don't mind if my coffee is cold," she said.</p>
        <p>She had been holding the cup for an hour without drinking it.</p>
      </blockquote>

      <p>This is particularly effective when the deception concerns emotion rather than factual information.</p>

      <h3>9. Silence and Refusal</h3>

      <p>A character may decline to answer, allowing others to interpret the silence.</p>

      <blockquote>
        <p>"Did you know?"</p>
        <p>He looked toward the window.</p>
      </blockquote>

      <h3>10. Confession</h3>

      <p>A character may reveal their dishonesty voluntarily.</p>

      <blockquote><p>“I am a lying liar,” said the lying liar, who lied.</p></blockquote>

      <h3>11. The Truth Nobody Believes</h3>

      <p>A character who has established a reputation for dishonesty, a habitual liar, is accepted as having lied.</p>
    </section>

    <section>
      <h2>The Liar's Character Arc</h2>

      <p>Dishonesty can provide a structure for character development.</p>

      <p>A fundamentally honest character may encounter circumstances in which telling the truth would cause unacceptable harm. Or a habitual liar learns to tell the truth. Or an honest character becomes increasingly deceptive. Or a self-deceived character confronts a false identity they have spent years protecting.</p>

      <p>The character's changing relationship with truth provides the development.</p>

      <p>A deception that drives an entire novel should have an impeccable internal logic. The liar must have reasons for choosing dishonesty, and the people who believe them should have understandable reasons for doing so. There should be a cost both for lying and revealing the truth.</p>
    </section>

    <section>
      <h2>The Cost of Telling the Truth</h2>

      <p>I've always been fascinated by Immanuel Kant’s conviction that all lies are basically immoral. Logically, he made a sound argument—a long one, which you're welcome to look up, but ultimately the murderer at the door reveals its flaw.</p>

      <p>Never tell a lie. But if a murderer knocks on your door wielding an axe, do you have to tell the axe murderer that their target is in your house?</p>

      <p>Hopefully, no.</p>

      <p>As a philosophy student, I tried to live radical truth. One day, I woke up and felt too tired to rush to work. So, I walked in the door five minutes late.</p>

      <p>I told my supervisor I just didn't rush and she demanded another answer.</p>

      <p>I said I woke up on time, but I didn't rush to get ready AND I didn't drive any faster to get to work. That's why I was late.</p>

      <p>She demanded another answer.</p>

      <p>I told her that I didn't hear my alarm.</p>

      <p>She broke a three month streak of radical honesty, because the simple fact is that some people just can't handle the truth.</p>

      <p>Ultimately, truth builds trust and lies destroy it like one wrong move with a Jenga tower. But it's not always that simple and the grey area is the writer's domain, because sometimes lies speak hidden truths about power, motives, fear.</p>

      <p>And what we do with the truth defines our character and our characters.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
