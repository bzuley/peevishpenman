<?php
$post_meta = [
  'image'   => '/img/angry-writer.jpg',
  'slug'    => 'nine-parts-of-speech-f-word',
  'title'   => 'The Nine Parts of Speech and the F Word',
  'excerpt' => 'A shamelessly profane grammar lesson proving that one very specific word can stand in for all nine parts of speech.',
  'date'    => '2024-12-09',
  'added'   => '2026-08-25'
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
      alt="Abstract placeholder artwork for grammar and language"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">Grammar, but make it obscene</p>
      <h1><?php echo htmlspecialchars($post_meta['title']); ?></h1>
      <div class="ppm-article-meta">
        <time datetime="<?php echo htmlspecialchars($post_meta['date']); ?>">
          <?php echo date('F j, Y', strtotime($post_meta['date'])); ?>
        </time>
      </div>
    </div>
  </figure>
  
  <p class="ppm-article-disclaimer">
    <strong>Content warning:</strong> This post uses explicit profanity (the F-word) frequently and deliberately,
    as a grammatical example and for comedic effect. If strong language bothers you, this is your moment to bail.
  </p>
</header>

    <section>
      <p>
        Some of us did not absorb the nine parts of speech in school—not because we were incapable, but because
        sitting still and staring at a board for twelve years is a poor match for a human nervous system.
        Unfortunately, if you want to write often or write well, you still need those parts of speech.
      </p>

      <p>
        To patch the hole in your education, Peevish Penman offers this refresher in gloriously unhinged
        algospeak. We are going to demonstrate that one word in English can serve as
        <em>all nine</em> parts of speech:
        <strong>fuck</strong>.
      </p>
    </section>

    <hr>

    <section id="nouns">
      <h2>1. Nouns</h2>

      <p>
        A noun names a person, place, thing, or idea.
      </p>

      <p><em>What a fucker.</em></p>

      <p>
        Here, <strong>fucker</strong> is a noun naming a person. Nouns can be singular or plural:
      </p>

      <p><em>For fuck's sake</em> vs. <em>those stupid fucks</em>.</p>

      <p>
        In the first case, you're appealing to a single abstract fuck; in the second, you're complaining about
        multiple flesh-and-blood fucks.
      </p>

      <p>
        Nouns can also be common or proper:
      </p>

      <p><em>What a fuck</em> vs. <em>He is the Fuck of all fucks.</em></p>

      <p>
        Capitalizing <strong>Fuck</strong> elevates it to proper noun status—essentially a dark, obscene title.
      </p>

      <p>
        Nouns can be concrete or abstract. A <em>dumb fuck</em> is concrete: a tangible creature, walking around
        making choices. But in <em>who the fuck…?</em>, <strong>fuck</strong> doesn't point to any specific object.
        It floats as a pure concept, like "justice," "perspicacity," or "regret."
      </p>

      <p>
        Nouns can also be gerunds (verb forms acting as nouns), generally ending in <strong>-ing</strong>.
      </p>

      <p><em>I am fucking fine.</em></p>

      <p>
        Here, <strong>fucking</strong> functions as a noun phrase meaning "in a state of fuck-level adequacy."
        In contrast:
      </p>

      <p><em>He is fucking.</em></p>

      <p>
        In that sentence, <strong>fucking</strong> is clearly a verb, not a noun. Same spelling, different job.
      </p>
    </section>

    <section id="pronouns">
      <h2>2. Pronouns</h2>

      <p>
        Pronouns replace nouns to avoid repetition. In modern, irritated English, one popular emergent pronoun is:
        <strong>that fuck</strong>.
      </p>

      <p>
        Original sentence:
      </p>

      <p><em>John went to the bakery and bought a loaf of bread.</em></p>

      <p>
        Standard pronoun version:
      </p>

      <p><em>He went to the bakery and bought a loaf of bread.</em></p>

      <p>
        Contemporary upgrade:
      </p>

      <p><em>That fuck went to the bakery and bought a loaf of bread.</em></p>

      <p>
        Here, <strong>that fuck</strong> functions as a personal pronoun replacing the subject. It's also
        demonstrative:
      </p>

      <p><em>Q: Which fuck? A: That fuck.</em></p>

      <p>
        Reflexive pronouns name a receiver of an action who is the same as the doer.
      </p>

      <p>
        Without a pronoun:  
        <em>Jennifer walked her dog all by Jennifer's self today.</em>
      </p>

      <p>
        With a reflexive pronoun:
      </p>

      <p><em>Jennifer walked her dog all by her own fucking self today.</em></p>

      <p>
        Indefinite pronouns refer to non-specific persons or things:
      </p>

      <p><em>Bruce and Sonali kissed one a-fucking-nother.</em></p>

      <p>
        Interrogative pronouns introduce questions:
      </p>

      <p>
        <em>Who the fuck? Which fuck? What fucker? How the fuck? Whose fucking what? To whom the fuck?</em>
      </p>

      <p>
        Each of those can function as a complete question in actual spoken English, which means they are
        doing grammatical work, not just vibing as noise.
      </p>

      <p>
        In real life, all of these often collapse into one pure interrogative:
      </p>

      <p><em>Fuuuuuuuck?</em></p>

      <p>
        Drawn out like that, it's less an interjection and more a full-body request for an explanation you already
        know you won't receive.
      </p>

      <p>
        Relative pronouns introduce dependent clauses and refer back to someone or something already mentioned:
      </p>

      <p>
        <em>Whoever the fuck… whomever the fuck… which fucking… that fuck…</em>
      </p>
    </section>

    <section id="adjectives">
      <h2>3. Adjectives</h2>

      <p>
        Adjectives modify (describe) nouns or pronouns.
      </p>

      <p><em>What a fucking fuck.</em></p>

      <p>
        Here, <strong>fucking</strong> is clearly an adjective describing the kind of fuck we're dealing with.
      </p>

      <p>
        Adjectives can form comparisons:
      </p>

      <p>
        <em>That was more fucked up than anything I've ever seen.</em><br>
        <em>That was the most fucked up thing I have ever seen.</em>
      </p>
    </section>

    <section id="verbs">
      <h2>4. Verbs</h2>

      <p>
        Verbs express action or a state of being. If any word deserves the title of "primary action verb of modern
        English," it's probably <strong>fuck</strong>.
      </p>

      <p>
        As a main verb:
      </p>

      <p><em>Fuck him.</em></p>

      <p>
        That's the imperative mood: a direct command.
      </p>

      <p>
        As a main verb supported by an auxiliary (helping) verb:
      </p>

      <p><em>My ex-boyfriend just fucking draws all day.</em></p>

      <p>
        Transitive verbs need a direct object:
      </p>

      <p>
        <em>Hassan fucks up.</em> → incomplete.  
        <em>Hassan fucks up everything.</em> → now we understand the scope of the disaster.
      </p>

      <p>
        Intransitive verbs don't need an object:
      </p>

      <p><em>Sarah fucks.</em></p>

      <p>
        No further detail needed. We understand the general situation just fine.
      </p>
    </section>

    <section id="adverbs">
      <h2>5. Adverbs</h2>

      <p>
        Adverbs modify verbs, adjectives, or other adverbs.
      </p>

      <p><em>He is fucking fucked.</em></p>

      <p>
        In that sentence, <strong>fucked</strong> is functioning like an adjective describing his condition,
        and <strong>fucking</strong> is the adverb modifying how thoroughly he is that way.
      </p>

      <p>
        Relative adverbs can introduce clauses and answer questions like "when?" and "where?":
      </p>

      <p><em>Fuck when I had to go get my car fixed…</em></p>

      <p>
        Change the punctuation and speed, and it flips from adverbial use to interjection:
      </p>

      <p><em>Fuck! When I had to go get my car fixed…</em></p>

      <p>
        Same word, totally different rhythm and role.
      </p>
    </section>

    <section id="conjunctions">
      <h2>6. Conjunctions</h2>

      <p>
        Coordinating conjunctions join words, phrases, or clauses of equal weight. In English, we memorize them as
        <strong>FANBOYS</strong>:
      </p>

      <p><em>for, and, nor, but, or, yet, so</em></p>

      <p>
        But we both know what happens in real speech:
      </p>

      <p><em>for fucking, and fucking, nor fucking, but fucking, or fucking, yet fucking, so fucking</em></p>

      <p>
        Example:
      </p>

      <p><em>Keisha eats ham sandwiches, but fucking Mike prefers tuna.</em></p>

      <p>
        Without <em>but fucking</em>, you'd have:
      </p>

      <p><em>Keisha eats ham sandwiches. Mike prefers tuna.</em></p>

      <p>
        Here, <strong>fucking</strong> can be read as an emphatic adverb glued to the conjunction, but it's so
        fused with <em>but</em> in casual speech that it practically functions as part of the conjunction unit.
      </p>

      <p>
        Correlative conjunctions also join ideas, but they come in pairs:
      </p>

      <p>
        <em>both fucking…and fucking</em><br>
        <em>neither…fucking nor</em><br>
        <em>fucking whether…or</em><br>
        <em>either fucking…or</em><br>
        <em>not fucking only…but fucking also</em>
      </p>
    </section>

    <section id="prepositions">
      <h2>7. Prepositions</h2>

      <p>
        Prepositions connect a noun or pronoun to another word in the sentence and usually indicate
        relationships of time, place, or direction.
      </p>

      <p>
        One classic way to recognize a preposition is the mouse test:
        "Anywhere a mouse can go."
      </p>

      <p>
        Common prepositions include:
      </p>

      <p>
        <em>
          about, before, down, into, through, above, behind, during, like, to, across, below, except, of, toward,
          after, beneath, for, off, under, among, beside, from, on, up, around, between, in, over, with, at, by,
          instead of, since, without, and fuck.
        </em>
      </p>

      <p><em>So where's the mouse? Fuck if I know.</em></p>
    </section>

    <section id="articles">
      <h2>8. Articles</h2>

      <p>
        Articles are the tiny function words that introduce nouns: <strong>the, a, an,</strong> and (for the
        purposes of this deeply cursed lesson) <strong>fuck</strong>.
      </p>

      <p>
        Watch how interchangeable they become:
      </p>

      <p><em>The face sees its reflection in the mirror.</em><br>
         <em>Fuck face sees its reflection in the mirror.</em>
      </p>

      <p>
        Same grammatical structure. Very different emotional temperature.
      </p>
    </section>

    <section id="interjections">
      <h2>9. Interjections</h2>

      <p>
        Interjections express emotional states and can often stand alone.
      </p>

      <p><em>Fucking awesome!</em></p>

      <p>
        Interjections show up constantly in dialogue, interviews, and everyday speech:
      </p>

      <p><em>Ah, fuck! How fucking pretty. Oh fuck, how wise.</em></p>
    </section>

    <section id="poem">
      <h2>The Nine Fucks of Speech</h2>

      <p>To conclude, a small, blasphemous grammar poem:</p>

      <p><strong>The Nine Fucks of Speech</strong></p>

      <p>
        Three little words fucks often see,<br>
        Are articles — a, an, and the.
      </p>

      <p>
        A noun's the name of anything,<br>
        As school, garden, hoop, fuck, or swing.
      </p>

      <p>
        And fucking adjectives tell the kind of noun —<br>
        Great, small, pretty, white, or brown.
      </p>

      <p>
        Instead of nouns the pronouns stand —<br>
        Her face, your arm, fuck head, my hand.
      </p>

      <p>
        Verbs tell of something to be done —<br>
        To read, to fuck, sing, jump, or run.
      </p>

      <p>
        How things are done, the adverbs tell,<br>
        As slowly, quickly, ill, fucked up, or well.
      </p>

      <p>
        Conjunctions join words together,<br>
        As in men and fucking women, wind or fucking weather.
      </p>

      <p>
        The prepositions stand before<br>
        A noun, as at or through fucking door.
      </p>

      <p>
        The interjection shows surprise,<br>
        As ah, fuck! How fucking pretty — oh fuck, how wise.
      </p>

      <p>
        The fucks are fucked nine parts of speech,<br>
        Which fucking, fucking, fucking teach.
      </p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>