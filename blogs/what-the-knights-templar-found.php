<?php
$post_meta = [
  'image'   => '/img/general/asherah.png',
  'slug'    => 'what-the-knights-templar-found',
  'title'   => 'What the Knights Templar Found',
  'excerpt' => 'A documentary said the Knights Templar dug up brotherhood beneath the Temple Mount. I think they found Asherah, the Canaanite Queen of Heaven—and turned her into the Black Madonna.',
  'date'    => '2016-10-26',
  'added'   => '2026-09-26',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => 'worldbuilding, sciencefiction, writing'
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

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com<?php echo htmlspecialchars($post_meta['image']); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles/main.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/styles/main.css') ?>">
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
      alt="Gloved hands lifting a dark clay figurine of a woman from the dirt of an archeological dig beside ancient stone blocks, with excavators working in the sunlit background"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">History, Myth &amp; Worldbuilding Research</p>
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
        Episode 11 of <em>Secrets of the Bible</em> was the most ridiculous of the series, because it lacked a
        concrete conclusion. It followed a man tracing the activities of the Knights Templar, the medieval order
        established to protect pilgrims traveling from Europe to Jerusalem, through their steep ascent to power,
        their ruthless disbandment, and their possible merger with the Freemasons a century later. Along the way
        it got tangled up in stories about the Holy Grail.
      </p>

      <p>
        The episode draws a quick connection between something discovered in the Temple and the sudden rise of
        the Order. Presumably it was the Grail, but scholars know it wasn't necessarily a cup. After visiting a
        few cathedrals displaying the Black Madonna and talking about Freemasonry, the person interviewed for the
        episode concludes that the Knights Templar did indeed find something at the Temple Mount.
      </p>

      <p>They found brotherhood.</p>

      <p>
        What an obvious conclusion! So easy to miss! The quest for the Holy Grail was always really just a quest
        for spiritual enlightenment. They dug and dug and dug and found brotherhood.
      </p>

      <p>Uh-huh. I have a different theory.</p>
    </section>

    <section>
      <h2>Digging Under the Temple Mount</h2>

      <p>
        Jerusalem was captured by European crusaders in 1099, and the Knights Templar formed around 1118. They
        purportedly excavated the Temple of Solomon, which was, and still is, assumed by many to be the Temple
        Mount where the Dome of the Rock was built.
      </p>

      <p>
        That site carries enormous weight. Orthodox Judaism holds that there can be only one Temple, which is why
        the places where congregations gather are called shuls, Yiddish for school. In Christianity, this is the
        temple where Jesus knocked over the tables and caught the attention of the authorities who killed him.
        The Ark of the Covenant would have been kept in it. It was filled with gold and statues of angels.
      </p>

      <p>
        <em>
          Devoid of human feeling, those cherubim were much more interesting angels than the harp-wielding
          versions popular with Christians today—I wrote them into my first novel as a product of genetic
          engineering.
        </em>
      </p>

      <p>
        If you were a devout eleventh-century knight, this was the most sacred ground on Earth, and whatever you
        pulled out of it would have been a message meant for you.
      </p>
    </section>

    <section>
      <h2>Chaste Knights, Idols, and Black Madonnas</h2>

      <p>
        Here's what we know from other sources. The Knights Templar were supposed to be chaste; they couldn't have
        physical contact with any women, including members of their own family. They gave all their possessions
        and wealth to the Order when they joined, which explains their growing influence in Europe over a short
        period of time.
      </p>

      <p>
        Publicly, they built many churches to the Black Madonna, or Black Virgin, and were said to carry many of
        these figures back with them from Jerusalem.
      </p>

      <p>
        Privately, or so their accusers said two centuries after the conquest of Jerusalem, they denied Jesus
        Christ, spat on crucifixes during their initiation rites, and worshiped idols. The idol was called
        Baphomet, a word that may be derived from the Greek <em>baphe</em> and <em>metis</em>, meaning absorption
        of knowledge. Since the nineteenth century, Baphomet has usually been pictured as an Egyptian goat or
        fertility god, the Goat of Mendes. One way or another, the Knights Templar were accused of dismissing
        Christ and worshiping some form of knowledge, as if the pursuit of knowledge were a sin—maybe an original
        one. And fertility.
      </p>

      <p>
        Men sworn off women, venerating statues of a woman they brought home from the Holy Land, accused of
        worshiping a fertility idol. That's a pattern.
      </p>
    </section>

    <section>
      <h2>The Queen of Heaven</h2>

      <p>
        I bet they found figures of Asherah.
      </p>

      <p>
        I know many people prefer to read the Black Madonnas as a statement about race, but Semites from Canaan,
        as depicted in Egyptian art, have light skin and light hair. Others say the crusaders learned about a
        black goddess of wisdom from the Sufi mystics of Islam. Hagia Sophia translates as Holy Wisdom, an ancient
        Greek personification, and it was also an important Byzantine church visited by the crusaders. They could
        have learned about a goddess from the Gnostics, or from their pagan contemporaries back in Europe.
      </p>

      <p>
        Whatever sources they drew on, I believe they would have needed a significant catalyst to embrace a female
        figure with enough enthusiasm to erect hundreds of statues, as they did. It seems likely to me that they
        arrived in the Holy Land and found at least one of the extremely common, extremely ancient figures of a
        woman in exactly the place where they expected to find sacred artifacts.
      </p>

      <p>
        The Queen of Heaven. God's wife. Asherah, the Canaanite goddess, was everywhere in the region. The early
        texts of the Bible and the writings of the prophets of ancient Israel are full of people trying to wipe out
        images of Asherah and Baal. El is often assumed to be the same as Yahweh. Lots of Canaanite gods are
        mentioned in the Bible. Yep, the god of Abraham was a jealous god who wanted no other gods before him,
        because there were a lot of other gods at the time.
      </p>

      <p>
        In passages like Jeremiah 44:15–18, First Kings 14:15 and 14:23, and Second Kings 16:3–4 and 17:10, the
        female deity who accompanied the main male deity of the Canaanites was regularly translated as "the
        grove," and she was closely associated with trees. The Bible describes surges of monotheistic outrage in
        which her images were destroyed, but it also makes clear that a lot of people were not completely on board
        with the idea.
      </p>

      <p>
        Figures of Asherah are still found buried all over what is today Israel and Palestine. If archeologists
        keep finding them, it's likely crusaders digging under the Temple Mount found some too.
      </p>
    </section>

    <section>
      <h2>Why Nobody Smashed Her</h2>

      <p>
        The Israelites probably wouldn't have destroyed all of them anyway. Imagine you're a priest at a temple a
        few thousand years ago. You're surrounded by cherished images of your deities. Some radicals come tearing
        in, demanding you destroy the ones they feel are ruining society.
      </p>

      <p>
        Okay. Imagine it's today. You're a museum director who just finished giving investors a tour of the
        Renaissance collection when a bunch of powerful radicals march in and demand that you remove and destroy
        all evidence of Isaac Newton. They consider his legend scientific dogma. Scientific inquiry, they say,
        wasn't discovered by one man, but developed from Aristotle onward by many thinkers in many cultures, and
        the story of Newton's apple creates a mythology around science that distracts from what actually drives
        research today.
      </p>

      <p>
        Maybe you don't totally disagree. What about Ibn al-Haytham? Why should the museum keep up the mythology of
        great, dead, European, male geniuses, as if they worked in isolation? You know Leonardo da Vinci is
        credited with engineering ideas that were recorded earlier by other people of his time. He just drew them
        well. You sort of agree.
      </p>

      <p>
        But you also remember force equals mass times acceleration, and the story of the apple, from your
        childhood. You don't want to destroy the Newton collection. So you hide it in the basement, where most of
        it deteriorates—except that magnificent bronze bust.
      </p>

      <p>
        We keep a lingering respect for what we once held true, even in the face of reasonable skepticism. It
        would have been perfectly normal for people to bury their statues of Asherah rather than smash them.
      </p>
    </section>

    <section>
      <h2>How Asherah Became Mary</h2>

      <p>
        When the Knights Templar dug up female figurines, they would not have been scholars who could connect them
        to the forbidden Asherot. Excavating the Temple Mount would have been a religious experience, and they
        believed their god was actively guiding their lives. They would naturally have fit the figures into their
        own system of belief, and the most prominent woman in the Christian story: Mary, the mother of Jesus.
      </p>

      <p>
        They might even have assumed the people of the Bible venerated Mary, and done likewise, because people
        living closer to the time of Jesus must have known something—a purer version of the truth. It's the same
        line of thinking that created the myth of the Holy Grail. The Knights Templar must have found something
        truly exceptional to be recognized by the Pope and rise to power so quickly.
      </p>

      <p>
        I don't think they would have seen a female figure as heresy, but as an expansion of their truth. People
        have always held more than one system of thought at once and been more flexible than they claim. Today,
        people who believe primarily in science still find themselves praying as their car crashes. We are, if
        anything, very complicated—and so were the crusaders.
      </p>

      <p>
        Then, after a lot of veneration of Mary and a lot of accumulated money and power, it would have been easy
        for outsiders to decide the Order was worshiping something else: a surviving European fertility goddess,
        like the spring goddess the word Easter is said to come from. By Victorian times, with far more knowledge
        of ancient Egypt available, that goddess worship could be reinterpreted as a goat-headed Egyptian
        fertility god. A woman becomes an idol becomes Baphomet.
      </p>
    </section>

    <section>
      <h2>Kicking Out the Wife</h2>

      <p>
        Many people, lots of feminists among them, believe Asherah was systematically removed from the Bible as
        an act of chauvinism rather than monotheism. Many academics skip her entirely and draw a line from the
        Egyptian goddess Isis, or the Greek Virgo, to the Catholic veneration of the Virgin Mary. I think a direct
        line from Asherah to the Knights Templar makes the most sense, but I can see why it makes people
        uncomfortable.
      </p>

      <p>
        Worship of Asherah in Israel likely ended around the second century BCE. A few centuries later,
        Christianity was working out how to make Jesus not a teacher or prophet, but God. Since there could only
        be one god, that god became three consubstantial persons—a father, a son, and a holy spirit—formalized at
        the Council of Nicaea in the fourth century CE.
      </p>

      <p>
        Basically, within a few hundred years, the wife was kicked out and a son brought in. Then, a thousand years
        after that, a group of celibate knights dug her back up.
      </p>
    </section>

    <section>
      <blockquote>
        <p>If Asherah was the Holy Grail of the Crusades, how would that change our perception of history?</p>
      </blockquote>

      <p>
        Maybe the manliest European men at the height of chivalry weren't obsessed with immortality or the
        bloodline of Jesus. Maybe they were simply awestruck by figures of women they found digging in Jerusalem,
        and found immense inspiration in fitting that mystery into their understanding of the world. Maybe they
        consulted Sufis and Gnostics and pagans, and borrowed enough ideas to make the figures make sense.
      </p>

      <p>
        What we do know is that they built churches to Mary and carried "fertility" figures with them, while
        refusing to touch women. Within a few decades came the movement toward chivalry, exemplified by the
        romances of Camelot, complete with a code of conduct for the treatment of women.
      </p>

      <p>
        In their worldview, finding figures of a woman at the Temple Mount could not have been an accident. God
        didn't make accidents. So perhaps, for a few centuries, the discovery of a female deity changed the Western
        world, because the manliest of men had been faced with the possibility that their god was not simply made
        in the image of a man. They believed their god showed them a woman. There's no reason to think they had a
        quick answer for it, but they embraced the mysterious woman completely.
      </p>

      <p>Maybe the Holy Grail was a woman. To me, that makes a much better story than brotherhood.</p>
    </section>

    <section>
      <p class="ppm-article-disclaimer">
        <strong>Related reading:</strong>
        <a href="/blogs/what-was-the-holy-grail">What Was the Holy Grail Before It Was Holy?</a> &middot;
        <a href="/blogs/everyone-runs-on-faith">Everyone Runs on Faith, Even Scientists</a>
      </p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
