<?php
$post_meta = [
  'image'   => '/img/excalibur.jpg',
  'slug'    => 'what-the-knights-templar-found',
  'title'   => 'What the Knights Templar Found',
  'excerpt' => 'A speculative dig through Grail legends, Asherah worship, and the Knights Templar\'s rise—asking what medieval crusaders really found beneath the Temple Mount.',
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
      alt="Photograph of a vintage mint-green Hermes 3000 typewriter, open in its travel case with a blank sheet of paper loaded"
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
        I model a lot of my writing on Bronze Age and Stone Age mythology. People living today may have evolved
        considerably on a physical level, but I believe the biggest difference between us and our ancestors lies
        in our ability to store information outside of our own minds.
      </p>

      <p>Writing. Records. Books. Decent filing systems. Databases.</p>

      <p>
        Otherwise, we very much resemble the people who lived at the beginnings of our known history, although
        it seems most of us want to believe that our intelligence, our humanity, our civilization outshines
        cultures that practiced human sacrifice or cannibalism. We're much better than that, right? Not
        biologically. No. We may not be superior, but our ability to communicate is more advanced. We can share
        photos of our cats anywhere. Instantly. Ancient Egyptians would be SO jealous.
      </p>

      <p>
        I think a lot about what the ancient world must have been like without information. Even before the
        internet, we had encyclopedias and libraries and telephones and broadcast television and newspapers
        keeping us from lacking knowledge of history as well as current events.
      </p>

      <p>
        During my research for the second book in my Immortal Coffee series, which is a post apocalyptic
        narrative, I was ravenously devouring documentaries about Mesopotamia, where civilization began in the
        Western world, when I ran into the same problem.
      </p>
    </section>

    <section>
      <h2>No One Is Objective About the Origins of Human Civilization</h2>

      <p>
        On one end of the spectrum, you find archeologists making assertions that what cannot be proven doesn't
        exist, and lay persons on the other, sometimes accrediting their preconceived theories with degrees,
        trying to show that the evidence supports events in their religious text. Everyone has a personal
        agenda. Objectivity is rare regarding this region of the world, because the early myths and cultures
        gave rise to Judaism, Islam, and Christianity.
      </p>

      <p>
        In general, I notice the academics interviewed in documentaries tend to maintain complete skepticism and
        avoid acknowledging the possible historical value of the writings combined to form religious texts.
        They're quick to cry "Confirmation bias!" at anyone drawing a connection between an event in the Bible or
        Quran and archeological evidence in modern Israel, Jordan, Egypt, Syria, Palestine, Iraq, Saudi Arabia,
        Kuwait, and the surrounding regions.
      </p>

      <p>
        Unfortunately, both parties are equally guilty of treating the writings used by current religious
        communities as something other than documents from an early era of human history. Avoiding those
        records is as bad as relying on them entirely to tell us what the world was like around the time writing
        was invented, in 3200 BCE. That happened in Mesopotamia. People began writing in China in 1200 BCE and
        in Mesoamerica in 600 BCE. People generally accept the idea that ancient Mexico invented writing
        independent of the ancient people of the Middle East, but people just as quickly believe that ancient
        China was taught. It had two thousand years to filter over there, but that distance between Asia and
        Alaska? Impassable!
      </p>

      <p>
        As a writer, I like to challenge myself to imagine how people without our access to information reasoned
        about the world around them, and to the best of my ability, I try not to bother with historical fact.
        Although I have one main guideline: I assume that people living then were as intelligent as people
        living today. You can take that however you want.
      </p>
    </section>

    <section>
      <h2>The World Before Literacy and Public Libraries</h2>

      <p>
        I was watching the series <em>Secrets of the Bible</em> on Netflix this week. This series, produced in
        Britain, in some ways lacked the American passion for fundamentalist interpretation and extreme
        refutation of Biblical scholars. It focused less on people's conclusions and more on the journey each
        layman and archeologist with religious motives took to confirm evidence of the Bible. Most episodes
        proposed solutions to Biblical events that were contradictory. It seems everyone wants the story of
        Exodus to be true, unless you're an academic—then the ancient people of Israel borrowed the story from
        another culture, and there is no connection between the development of monotheism and an enslaved
        population of Semites in ancient Egypt.
      </p>

      <p>
        I remember being amazed by the poor quality of the special effects in Cecil B. DeMille's <em>Ten
        Commandments</em> (1956) as a child, where a pillar of fire appeared out of nowhere and somehow managed
        to prevent Egyptian chariots from steering their horses around it. A man with the staff and robe of a
        wizard performed some magic. I could hardly distinguish Moses from Merlin or Gandalf.
      </p>

      <p>
        The actual text of Exodus referred to a god leading some recently freed Hebrews with a pillar of cloud
        by day and a pillar of fire by night. Cecil B. DeMille envisioned a pillar of fire in the day. No smoke.
        No leading. While, in fact, a better interpretation of the text may have been that the people in the
        story followed a massive volcanic eruption. Why not? If you'd never seen or heard of a volcano, wouldn't
        you mistake it for something incredibly awesome, worth investigating?
      </p>

      <p>
        Natural wonders are sublime, because they force us into a higher awareness of our own insignificance. We
        marvel at the awesome forces required to create the natural world. They're beautiful. Even the
        destructive forces of flooding or tornadoes or earthquakes demand some respect. It stops us from
        thinking about the petty interpersonal disputes of our lives and places our lifetime in a broader
        context.
      </p>

      <p>
        I believe we all rely on faith to interpret what we cannot explain. Many people living today firmly
        believe that the scientific method can and will explain everything eventually. Maybe this sounds like
        simple good reasoning, but it's actually just inductive reasoning. Science has provided many
        explanations in the past, so we can induce that it will continue to do so in the future. Unfortunately,
        we have to use induction to prove that inductive reasoning is valid reasoning, which is known in
        philosophical circles as the problem of induction. At best, it's been claimed that science doesn't rely
        on induction, but those arguments rely heavily on semantics. And no matter—induction works. It's just
        not perfect. Most people accept that the current collection of scientific theories does not represent
        perfect knowledge of the world. That is easy to accept. But the belief that science will eventually
        provide all answers, as merely a strong conviction derived from inductive reasoning, similar in almost
        every meaningful way to religious faith? Much less easy to accept.
      </p>

      <p>
        I'm not trying to undermine the philosophy of science in favor of current religious belief systems. I'm
        trying to demonstrate that all belief systems depend on rational thinking, creative insight, and faith
        in uncertain theories operating within the context of the information available to them.
      </p>

      <p>This is the premise for my speculation about the Knights Templar.</p>
    </section>

    <section>
      <h2>Who Were the Knights Templar?</h2>

      <p>
        Episode 11 of <em>Secrets of the Bible</em> was the most ridiculous of the series, because it lacked a
        concrete conclusion. It followed a man tracing the activities of the medieval knights established to
        protect pilgrims traveling from Europe to Jerusalem in 1108, then got tangled up in stories about a Holy
        Grail during the order's steep ascent to power, and, after their ruthless disbandment, may have merged
        with the Freemasons a century later.
      </p>

      <p>
        They purportedly excavated the Temple of Solomon, which was, and still is, assumed by many to be the
        Temple Mount where the Dome of the Rock was built. This holds significance, because Orthodox Judaism
        believes they can have only one Temple, which is why the places where they gather their congregations
        are referred to as shuls, Yiddish for school. In Christianity, Jesus would have knocked over a table and
        gotten the attention of the authorities who killed him at this very important temple. The Ark of the
        Covenant would have been kept in it. It was filled with a lot of gold and statues of angels.
      </p>

      <p>
        <em>
          Devoid of human feeling, those cherubim were much more interesting angels than the harp-wielding
          versions popular with Christians today—I wrote them into my first novel as a product of genetic
          engineering.
        </em>
      </p>

      <p>
        Anyway, the episode draws a quick connection between something discovered in the Temple and the sharp
        increase in power of the Knights Templar. Presumably it was the Grail, but scholars know it wasn't
        necessarily a cup. After visiting a few cathedrals displaying the Black Madonna and talking about
        Freemasonry, the person interviewed for the episode concludes that the Knights Templar did indeed find
        something at the Temple Mount.
      </p>

      <p>They found brotherhood.</p>

      <p>
        What an obvious conclusion! So easy to miss! The quest for the Holy Grail was always really just a quest
        for spiritual enlightenment. There never was a cup of immortality that caught the blood of Jesus and
        held wine at the Last Supper. Nope. They dug and dug and dug and found brotherhood.
      </p>

      <p>
        In some ways, it's a better theory than the one Dan Brown related in <em>The Da Vinci Code</em>. In his
        extremely popular novel, the great secret of European Christianity was that the Grail was a woman. Mary
        Magdalene. She carried the DNA of Jesus forward to our time. Real, actual descendants of Jesus are alive
        today. That's, um, great.
      </p>
    </section>

    <section>
      <h2>How You Could Mistake a Woman for a Chalice in Medieval Europe</h2>

      <p>
        Jerusalem was captured by European crusaders in 1099, and the Knights Templar formed in 1118. The first
        mention of a graal occurred in an unfinished romantic story about a guy named Perceval, written sometime
        between 1135 and 1190, maybe 1180.
      </p>

      <p>
        It should be understood that literacy wasn't the priority in the past in the same way it is today, and a
        lot of time and distance separated the first mention of something like a Grail. The work written by
        Chrétien, who may have been a member of the Order of the Knights Templar, was clearly a fantasy story. A
        romantic fantasy story set in the time of King Arthur, which would have been the fifth or sixth century
        CE. Five hundred years before the Crusades, during the Saxon invasion.
      </p>

      <p>From the original source, we can't tell what the graal is supposed to be.</p>

      <p>
        In the story, a squire brings a white lance, which is bleeding, to a meal where the Fisher King is
        present. He is accompanied by a beautiful young girl who is carrying an elaborately decorated golden
        graal past Perceval, and another servant carries a silver serving platter. The room is illuminated by
        the contents, and they pass by him again on their way out.
      </p>

      <p>
        The next day, a woman admonishes Perceval for not asking why the lance bled or who was served by the
        graal. It wasn't said to be a holy graal, and it wasn't more significant than the bleeding white lance,
        but whatever it was, it wounded the king in the thigh. It is implied that Perceval could have prevented
        the injury if he'd asked about it. The woman then tells him that she is his first cousin and that his
        mother is dead.
      </p>

      <p>
        In the next known graal story, written in 1210, Parzival—not Perceval—has to go on a quest, because he
        did not ask the healing question. The graal is assumed in this story to have the power to heal, because
        if Perceval had asked about it, the Fisher King would not have remained wounded. In the Parzival story,
        the Fisher King gets a name, and it is explained that the wound is a punishment for taking a wife,
        because the person who keeps the Grail was supposed to remain chaste.
      </p>

      <p>
        The Christian part of the story isn't added until later, by the guy who wrote <em>Merlin</em>, Robert de
        Boron. He establishes that the Grail was a vessel given to Joseph of Arimathea.
      </p>

      <p>
        In its original, unfinished Perceval form, the popular romance—with lots of sex and many female
        characters—had a single mention of a bleeding lance and a golden serving dish or vessel, which is best
        understood as something carried by a processional salver. The beautiful woman would have been carrying
        some item of food tasted for poison in a vessel, and perhaps the room lights up simply because the
        platter is gold.
      </p>

      <p>
        These stories were popular at the same time that the Knights Templar rose to prominence, a very secret
        and very powerful group of people. But if they found something at the Temple Mount in 1099 or so, it was
        not in the possession of the Fisher King in the fifth or sixth century CE.
      </p>

      <p>
        What we know from other sources is that, two centuries after the conquest of Jerusalem, people claimed
        that the Knights Templar were denying Jesus Christ, spitting on crucifixes during their initiation
        rites, and worshiping idols. Specifically, they called them Baphomet, a word that may be derived from
        the Greek words <em>baphe</em> and <em>metis</em>, meaning absorption of knowledge. Since the nineteenth
        century, Baphomet has often been associated with an Egyptian goat or fertility god. This Goat of Mendes
        is associated with the snake in the Garden of Eden story via the Babylonian version. One way or another,
        the Knights Templar were accused of dismissing Christ and worshiping some form of knowledge, as if the
        pursuit of knowledge were a sin of some sort—maybe an original one. And fertility.
      </p>

      <p>
        The Knights Templar were supposed to be chaste; they couldn't have physical contact with any women,
        including members of their own family. They gave all their possessions and wealth to the Order when
        they joined, which explains their increasing influence in Europe over a short period of time. Publicly,
        the Knights Templar erected many churches to the Black Madonna, or Black Virgin, and were said to carry
        many of these figures back with them from Jerusalem.
      </p>
    </section>

    <section>
      <h2>The Queen of Heaven</h2>

      <p>Uh-huh, brotherhood.</p>

      <p>
        Well, I bet they found figures of Asherah. I know many people would prefer to interpret the black
        madonnas as a statement about race, but Semites from the region known as Canaan, depicted in Egyptian
        art, have light skin and light hair. Other people would say that the crusaders learned about a black
        goddess of wisdom from the mystic Sufis, a dimension of Islam. Of course, Hagia Sophia translates as
        Holy Wisdom, which is an ancient Greek personification of Wisdom, but also an important Byzantine church
        visited by the crusaders. They could have learned about a goddess from the Gnostics. They could have
        learned about goddesses from their contemporaries in Europe. Regardless of what sources they sought to
        increase their knowledge of a female deity, I believe they would have required a significant catalyst to
        adopt the concept with enough enthusiasm to erect hundreds of statues, as they did.
      </p>

      <p>
        It seems likely to me that they arrived in their Holy Land and found at least one of the extremely
        common, but ancient, figures of a woman in the location where they expected to find sacred artifacts
        like the Temple Mount.
      </p>

      <p>
        The Queen of Heaven. God's wife. Asherah, the Canaanite goddess, was everywhere in Mesopotamia, because
        no one had gone there and sat the people written about in the Bible down and explained they were
        supposed to have always been exclusively monotheistic since around 1300 to 1500 BCE, when Moses
        supposedly lived. In the early texts of the Bible, the Torah, and the writings of the prophets of
        ancient Israel, people are constantly trying to wipe out and destroy images of Asherah and Baal. El is
        often assumed to be the same as Yahweh. Lots of Canaanite gods are mentioned in the Bible. Yep, the god
        of Abraham was a jealous god who wanted no other gods before him, because there were a lot of other gods
        at the time.
      </p>

      <p>
        I don't think the crusaders would have thought of the discovery of a female figure as heresy, but rather
        an expansion of their truth.
      </p>

      <p>
        People have always ascribed to more than one system of thought or faith, and generally been more
        flexible than they claim. Today, people who believe primarily in science often find themselves praying
        as their car crashes or they face other life-threatening situations. Religious people find evidence
        supporting another religion and convert. Agnostics discover neo-pagan movements that allow them to
        experience spiritual community without supporting the larger organized religions. Many churchgoers
        attend services weekly, but often do so out of habit or familial obligation, while firmly convinced of
        the theories of science and rationalizing it with a humanistic perspective.
      </p>

      <p>
        We are, if anything, very complicated—and so was humanity at the beginning of history, and so was the
        time of the crusaders.
      </p>

      <p>
        At some point in Biblical history—Jeremiah 44:15–18, First Kings 14:23, Second Kings 17:10, First Kings
        14:15, Second Kings 16:3–4, and Second Kings 17:1—the female deity who accompanied the main male deity
        of the Canaanite tribes was regularly translated as "the grove," and there was a big thing about her
        being associated with trees. While the Bible talks about the people destroying images of other deities,
        like the Canaanite Baal, in surges of monotheistic outrage, it seemed that a lot of people may not have
        been completely on board with the idea.
      </p>

      <p>
        Figures of Asherah are still found buried all over what is today Israel and Palestine, which makes it
        likely the crusaders dug around and found some.
      </p>

      <p>
        The Israelites wouldn't have been likely to destroy them anyway. Imagine you're a clergyman at a temple
        a few thousand years ago. You're surrounded by cherished images of your deities. Some radicals come
        tearing in, demanding you destroy the ones they feel are destroying society.
      </p>

      <p>
        Okay. Imagine it's today. You're a museum director who just finished giving investors a tour of the
        Renaissance collection when a bunch of radicals, powerful radicals, march in and demand that you remove
        and destroy all evidence of Isaac Newton, because they consider his legend scientific dogma. They claim
        that scientific inquiry was not discovered or invented, but is one of many processes of determining
        knowledge, used as early as Aristotle and developed by multiple theorists across a variety of cultures.
        These people believe that the narrative of Newton's apple hinders human progress by creating a mythology
        around science, an ethnocentric distraction from the corporate bias that has increasingly driven the
        pursuit of knowledge, muddying science and generally bastardizing it.
      </p>

      <p>
        Maybe you don't totally disagree with them, but what about Ibn al-Haytham? Why should the museum
        maintain the mythology of great, dead, European, male geniuses, as if they acted in isolation, and
        ascribe them godlike status? You know Leonardo da Vinci was a great artist attributed with inventing
        developments in engineering that we now know were recorded in earlier publications by other people of
        his time. He just drew them well. You sort of agree.
      </p>

      <p>
        Right or wrong, you probably also, as this museum director, remember force equals mass times
        acceleration, and the story of the apple, from your childhood. You don't want to destroy the Newton
        collection. Instead, you hide it in the basement, where most of the items deteriorate—except that
        magnificent bronze bust.
      </p>

      <p>
        Many of us maintain lingering respect for what was considered to be true, even in the face of reasonable
        skepticism and valid argument. We still love the stories of Newton.
      </p>

      <p><em>To be continued.</em></p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
