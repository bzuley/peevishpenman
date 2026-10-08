<?php
$post_meta = [
  'image'   => '/img/inner-alchemy-bain-marie.webp',
  'slug'    => 'inner-alchemy-bain-marie',
  'title'   => 'Inner Alchemy: How the Search for Immortality Gave Us Better Ways to Boil Water',
  'excerpt' => 'From Taoist immortals and Egyptian metallurgists to medieval laboratories and the invention of the bain-marie, alchemy has been quietly influencing the modern world for thousands of years.',
  'date'    => '2026-10-08',
  'added'   => '2026-10-08',
  'tags'    => 'consciousness, meditation, metaphysicalscifi',
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
  <meta property="og:image" content="https://peevishpenman.com/img/inner-alchemy-bain-marie-social.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($post_meta['title']); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($post_meta['title']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($post_meta['excerpt']); ?>">
  <meta name="twitter:image" content="https://peevishpenman.com/img/inner-alchemy-bain-marie-social.jpg">
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
      width="1677" height="938"
      alt="Medieval manuscript illustration of two alchemists beside a brick furnace, a glass flask steaming in a brass water bath, with a smiling sun, a crescent moon and stars above and flasks, herbs and an open book around them"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">History, Philosophy &amp; Science</p>
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
      <p>Alchemy has a reputation problem.</p>

      <p>Mention it today and people tend to imagine one of three things: a medieval eccentric trying to turn lead into gold, a spiritual enthusiast attempting to transform their consciousness, or a wizard with an alarming collection of glassware.</p>

      <p>All three have some historical justification.</p>

      <p>What we generally overlook is that alchemy was once a perfectly respectable attempt to understand the nature of reality. It was philosophy with equipment. Religion with recipes. An investigation into whether the universe possessed an underlying order that human beings might learn to manipulate.</p>

      <p>And occasionally, someone invented a useful kitchen appliance.</p>

      <p>The history of alchemy is not simply the history of people being wrong about chemistry. It’s the history of people asking what transformation actually means.</p>

      <p>Can a substance become something fundamentally different? Can a human being? And if the same principles govern both, where exactly does the boundary between the laboratory and the soul belong?</p>
    </section>

    <section>
      <h2>First, What Is Inner Alchemy?</h2>

      <p>The simplest distinction is between <strong>outer alchemy</strong>, which attempts to transform substances, and <strong>inner alchemy</strong>, which attempts to transform the practitioner.</p>

      <p>But that distinction is not nearly as tidy as it sounds.</p>

      <p>In Chinese Taoist traditions, external alchemy, or <em>waidan</em>, involved preparing elixirs from minerals, metals, and other substances. The objective might be longevity, immortality, or a perfected relationship with the cosmos.</p>

      <p>Internal alchemy, or <em>neidan</em>, developed elaborate systems for cultivating the body and spirit through meditation, breathing, visualization, and the refinement of vital forces.</p>

      <p>The terminology itself is revealing. <em>Nei</em> means inner; <em>dan</em> refers to the cinnabar or elixir associated with alchemical practice.</p>

      <p>Cinnabar is mercury sulfide.</p>

      <p>Which is an unfortunate substance to associate with immortality, given that mercury poisoning is a decidedly effective way to shorten one’s life.</p>

      <p>Chinese history contains several imperial attempts to achieve immortality through mineral elixirs. The Jiajing Emperor of the Ming dynasty became notorious for his obsession with longevity preparations. Earlier, the Tang emperor Xianzong is traditionally reported to have died after consuming an immortality elixir.</p>

      <p>The irony would be funny if it weren’t so expensive.</p>

      <p>Yet the underlying idea was considerably more sophisticated than simply swallowing something poisonous and hoping for the best.</p>

      <p>In internal alchemy, the human body could be understood as a miniature cosmos. Its processes reflected the larger operations of nature. Transformation occurred through refinement, balance, and the proper circulation of forces.</p>

      <p>The practitioner was simultaneously the alchemist, the laboratory, and the material being transformed.</p>

      <p>There is something rather elegant about that.</p>
    </section>

    <section>
      <h2>The Philosophical Problem of Becoming Something Else</h2>

      <p>Long before the modern laboratory, philosophers were arguing about whether transformation was even possible.</p>

      <p>Parmenides maintained that genuine being could neither arise from nothing nor disappear into nothing. Heraclitus, at least as traditionally interpreted, emphasized a world of ceaseless change.</p>

      <p>Aristotle eventually supplied a particularly influential framework.</p>

      <p>In his account, earthly substances were understood through combinations of four elemental qualities: hot, cold, wet, and dry. Earth, water, air, and fire were not elements in the modern chemical sense but expressions of these qualities.</p>

      <p>If substances differed because of their underlying qualities, then changing those qualities might change the substance.</p>

      <p>The possibility of transmutation was not necessarily absurd within that framework.</p>

      <p>Gold and lead appeared to belong to the same broad family of metallic substances. Why couldn’t one mature into the other?</p>

      <p>We now know that changing lead into gold requires altering the number of protons in an atomic nucleus, not improving its temperament.</p>

      <p>Interestingly, nuclear transmutation has demonstrated that elemental transformation is physically possible. It is simply an extraordinarily impractical way to finance a retirement.</p>

      <p>But the philosophical question remains.</p>

      <p>If something changes completely, what makes it the same thing?</p>

      <p>Alchemy frequently approached this problem through the language of purification. Remove the impurities, separate the essential from the accidental, and the true nature of the substance emerges.</p>

      <p>Applied to metals, this produces a theory of refinement.</p>

      <p>Applied to people, it produces a spiritual discipline.</p>

      <p>Applied to writing, it sounds suspiciously like editing.</p>
    </section>

    <section>
      <h2>Before Chemistry, There Was Egypt</h2>

      <p>The word <em>alchemy</em> reached European languages through Arabic <em>al-kīmiyāʾ</em>, itself connected with Greek terminology for the arts of transforming materials. Its ultimate etymology remains disputed.</p>

      <p>One popular explanation connects the word with Kemet, an ancient name for Egypt, often understood as the Black Land. It’s an attractive possibility, although not an established derivation.</p>

      <p>What is certain is that Greco-Egyptian Alexandria became an important center of early alchemical writing.</p>

      <p>Egypt already possessed extensive traditions of metallurgy, dyeing, glassmaking, cosmetics, and the production of artificial stones.</p>

      <p>Those crafts required practical knowledge of materials.</p>

      <p>If you can imitate the appearance of gold, you have already learned something about the properties that make gold recognizable. If you can change the color of glass, you have discovered that matter responds predictably to treatment.</p>

      <p>The difference between imitation, purification, and transformation was not always obvious.</p>

      <p>And why should it have been?</p>

      <p>A modern chemist can distinguish an alloy from an element because centuries of experimental work have established the distinction. An ancient artisan had no periodic table, no atomic theory, and no mass spectrometer.</p>

      <p>What they had was observation.</p>

      <p>Heat this. Grind that. Add a little vinegar. Wait.</p>

      <p>Sometimes something remarkable happened.</p>

      <p>And sometimes it exploded.</p>
    </section>

    <section>
      <h2>Mary the Jewess and the Invention of Gentle Heat</h2>

      <p>One of the most intriguing figures in early alchemy is Mary the Jewess, also called Maria the Jewess or Maria Prophetissa.</p>

      <p>She is known primarily through later accounts, especially those associated with Zosimos of Panopolis, an alchemical writer active around the late third and early fourth centuries CE.</p>

      <p>We cannot confidently reconstruct Mary’s biography or even establish precisely when she lived.</p>

      <p>But her name became attached to several important pieces of laboratory equipment.</p>

      <p>Among them was the bain-marie.</p>

      <p>The French name means <em>Mary’s bath</em>. In a bain-marie, a vessel containing the material to be heated is placed within another vessel containing hot water. The water transfers heat more gently and evenly than direct exposure to a flame.</p>

      <p>Anyone who has attempted to melt chocolate without burning it can appreciate the significance of this arrangement.</p>

      <p>Water at ordinary atmospheric pressure cannot exceed its boiling point while remaining liquid. That makes a water bath a useful means of limiting the temperature experienced by a vessel, although the actual temperature of its contents depends on the arrangement.</p>

      <p>For an alchemist working with delicate substances, controlled heating was a considerable improvement over holding something above a fire and trusting in divine providence.</p>

      <p>Mary was also associated with apparatus for distillation and other laboratory operations, including the <em>tribikos</em>, a three-armed distillation device, and the <em>kerotakis</em>, an apparatus used in treatments involving vapors and metals.</p>

      <p>The exact relationship between the historical Mary and these inventions is uncertain. Ancient technical traditions often attributed equipment to celebrated authorities.</p>

      <p>Nevertheless, the association is extraordinary.</p>

      <p>A woman remembered from the earliest centuries of alchemical literature lends her name to a method still used in kitchens, laboratories, cosmetics manufacturing, and industrial processing.</p>

      <p>We have managed to forget almost everything about her while continuing to use her bath.</p>

      <p>And it raises an interesting question: how many inventions attributed to celebrated male philosophers were actually developed by the craftspeople, assistants, and household experimenters whose names nobody thought to preserve?</p>

      <p>History is rather selective about whose hands count as intellectual instruments.</p>
    </section>

    <section>
      <h2>The Islamic Golden Age: Alchemy Gets Organised</h2>

      <p>The next major development occurred in the Arabic-speaking intellectual world.</p>

      <p>Beginning in the eighth century, scholars translated, studied, criticised, and expanded upon Greek, Persian, and other scientific traditions.</p>

      <p>Alchemy became part of a much larger intellectual project encompassing medicine, mathematics, astronomy, optics, and philosophy.</p>

      <p>The works attributed to Jabir ibn Hayyan, known in Latin Europe as Geber, became particularly influential.</p>

      <p>The problem is that the Jabirian corpus is enormous, and historians disagree about how much can be attributed to one individual.</p>

      <p>Apparently, even in the eighth century, establishing authorship was a nuisance. (If you’d like a modern version of the problem, see <a href="/articles/authority-of-authors">The Authority of Authors</a>.)</p>

      <p>Another important figure was al-Razi, the Persian physician and philosopher who died in the early tenth century.</p>

      <p>Al-Razi described laboratory substances, equipment, and practical procedures. His writings contributed to the classification and systematic treatment of materials.</p>

      <p>Distillation, sublimation, calcination, crystallisation, and filtration were becoming increasingly sophisticated operations.</p>

      <p>The equipment mattered as much as the theory.</p>

      <p>An alembic could separate substances according to differences in volatility. A furnace could maintain heat for extended periods. Better vessels permitted more repeatable experiments.</p>

      <p>And repeatability is where the story becomes particularly interesting.</p>

      <p>An alchemist might believe that a successful experiment depended on celestial influences, spiritual purity, or the correct arrangement of cosmic principles.</p>

      <p>But if the procedure produced the same result for an impious neighbour, the apparatus had revealed something independent of the original explanation.</p>

      <p>A technique could be right even when the theory behind it was wrong.</p>

      <p>That’s an important distinction in the history of science.</p>

      <p>It also suggests that knowledge can survive the collapse of the worldview that produced it.</p>
    </section>

    <section>
      <h2>The Alchemist Who Dreamed of Being Boiled Alive</h2>

      <p>Returning briefly to Zosimos of Panopolis, we encounter one of the stranger intersections of laboratory work and inner transformation.</p>

      <p>Zosimos described dreams and visions involving priests, sacrifice, dismemberment, and bodies undergoing violent transformation.</p>

      <p>In one vision, a priest is subjected to a horrifying process in which his body is transformed through fire.</p>

      <p>The imagery resembles an alchemical operation performed upon a human being.</p>

      <p>It’s difficult not to see the connection between these visions and the physical processes taking place in an alchemical workshop.</p>

      <p>Materials were heated, dissolved, broken down, and recombined.</p>

      <p>If the universe and the human being shared a fundamental structure, why shouldn’t spiritual transformation follow a similar pattern?</p>

      <p>Centuries later, Carl Jung would interpret alchemical imagery as expressing psychological processes, particularly the integration of unconscious material.</p>

      <p>Jung’s interpretation has been enormously influential, although it should not be confused with a reliable account of what every historical alchemist believed.</p>

      <p>Still, the recurring imagery is fascinating.</p>

      <p>A substance must be broken down before it can be reconstituted. The old form must disappear before the new one can emerge.</p>

      <p>We find similar structures in initiation rituals, religious narratives, and mythology.</p>

      <p>Death followed by rebirth.</p>

      <p>Descent followed by return.</p>

      <p>Dissolution followed by reconstruction.</p>

      <p>Perhaps this recurrence tells us something about the human mind. Or perhaps it reflects the simple observation that meaningful change often requires the destruction of an existing arrangement.</p>

      <p>Either way, the alchemist’s furnace was doing double duty.</p>
    </section>

    <section>
      <h2>The Philosopher’s Stone Wasn’t Necessarily a Stone</h2>

      <p>The philosopher’s stone is usually imagined as a magical object capable of transforming ordinary metals into gold.</p>

      <p>But alchemical descriptions of the stone vary enormously.</p>

      <p>It might be a powder, an elixir, a perfected substance, or the result of an elaborate sequence of operations.</p>

      <p>In some traditions, it was also associated with healing and longevity.</p>

      <p>Its significance was not limited to the commercial value of gold.</p>

      <p>Gold was important because it appeared unusually resistant to corrosion and decay.</p>

      <p>Unlike iron, which rusts, or copper, which develops a patina, gold seemed to possess a kind of material permanence.</p>

      <p>For someone attempting to understand perfection, incorruptibility, and immortality, gold was an obvious object of fascination.</p>

      <p>This was not merely greed dressed up as philosophy.</p>

      <p>Although there was certainly plenty of greed.</p>

      <p>The philosopher’s stone represented the possibility that nature possessed a perfected state and that human beings could discover the process required to reach it.</p>

      <p>The question was whether perfection had to be created or merely uncovered.</p>

      <p>And there we are, back at Aristotle.</p>
    </section>

    <section>
      <h2>Isaac Newton Had an Alchemy Problem</h2>

      <p>Isaac Newton spent an extraordinary amount of time studying alchemy. (I’ve written about that <a href="/articles/newton-alchemist">before</a>, and I’m not done being fascinated.)</p>

      <p>Not merely reading about it as an antiquarian curiosity. He copied recipes, studied obscure authors, and conducted experiments.</p>

      <p>His surviving alchemical manuscripts run to a vast quantity of material.</p>

      <p>The man who helped establish classical mechanics was also interested in the hidden processes governing the transformation of matter.</p>

      <p>This is sometimes presented as an embarrassing contradiction.</p>

      <p>It shouldn’t be.</p>

      <p>Newton lived before the boundaries between chemistry, physics, theology, and natural philosophy had settled into their modern forms.</p>

      <p>His interest in alchemy belonged to a broader investigation of the principles operating beneath visible reality.</p>

      <p>He wanted to know what made matter behave as it did.</p>

      <p>The difference between Newton’s alchemical investigations and his work on motion was not simply that one was irrational and the other scientific.</p>

      <p>They differed in their evidentiary success.</p>

      <p>Newton’s laws of motion could be expressed mathematically and tested against observation.</p>

      <p>Alchemical transmutation did not yield comparable results.</p>

      <p>But the same intellect was willing to investigate both.</p>

      <p>We tend to reconstruct the past as a procession of correct ideas replacing incorrect ones.</p>

      <p>The actual historical record is much messier.</p>

      <p>Scientists have always been people, and people rarely organise their curiosity according to the categories future generations will find convenient.</p>
    </section>

    <section>
      <h2>The Laboratory Survived the Philosophy</h2>

      <p>By the eighteenth century, chemistry was increasingly developing its own methods, terminology, and standards of evidence.</p>

      <p>Antoine Lavoisier’s work on combustion and the conservation of mass helped establish a quantitative approach to chemical reactions.</p>

      <p>Older theories, including phlogiston, were displaced.</p>

      <p>The alchemical ambition of transmuting metals gradually lost its place in mainstream chemical investigation.</p>

      <p>Yet many of the techniques associated with alchemical practice remained.</p>

      <h3>Distillation</h3>
      <p>Separating substances through evaporation and condensation. Essential to chemical laboratories, pharmaceutical production, and the manufacture of spirits.</p>

      <h3>Calcination</h3>
      <p>Heating materials to induce chemical or physical changes. Still important in metallurgy, ceramics, and cement production.</p>

      <h3>Crystallisation</h3>
      <p>Producing or purifying crystalline substances from solutions or melts. Widely used in chemical manufacturing and pharmaceuticals.</p>

      <p>Alchemy did not simply become chemistry. Modern chemistry emerged from several overlapping traditions, including medicine, metallurgy, natural philosophy, and practical crafts.</p>

      <p>But alchemical practitioners helped develop and transmit techniques that chemistry would eventually refine.</p>

      <p>The ideas changed. The equipment improved. The procedures remained useful.</p>

      <p>And Mary’s water bath continued doing exactly what it had always done.</p>
    </section>

    <section>
      <h2>The Strange Return of Inner Alchemy</h2>

      <p>There is one final twist.</p>

      <p>While modern chemistry abandoned the spiritual transformation of matter as a scientific objective, the language of inner alchemy continued to flourish.</p>

      <p>Today, the term appears in Taoist practice, Western esotericism, Jungian psychology, and various contemporary spiritual movements.</p>

      <p>These are not all the same tradition.</p>

      <p>Chinese neidan possesses its own history and technical vocabulary, including the cultivation of <em>jing</em>, <em>qi</em>, and <em>shen</em>, often translated as essence, vital breath, and spirit.</p>

      <p>Western esoteric interpretations frequently draw upon Hermeticism, Neoplatonism, and later occult traditions. (For one thread of that story, see <a href="/articles/ontology-of-ether">the tradition attributed to Hermes Trismegistus</a>.)</p>

      <p>Jungian approaches treat alchemical symbolism primarily as a language for psychological transformation.</p>

      <p>Yet all three preserve a striking proposition:</p>

      <strong>The observer is not necessarily separate from the process being investigated.</strong>

      <p>That is not a claim that modern physics proves mystical alchemy. It doesn’t.</p>

      <p>But it is a legitimate philosophical question.</p>

      <p>When we investigate consciousness, the investigator is also conscious. When we study perception, every observation passes through a perceptual system. When we attempt to understand the human mind, we are using that same mind as our instrument.</p>

      <p>The laboratory has become rather difficult to leave.</p>

      <p>Perhaps that is why inner alchemy remains compelling even after the philosopher’s stone has disappeared from respectable chemical research.</p>

      <p>It addresses a problem that chemistry was never designed to solve.</p>

      <p>What does it mean for a person to become something different?</p>
    </section>

    <section>
      <h2>A Little More Than Boiling Water</h2>

      <p>I rather like the fact that one of alchemy’s most durable contributions is a method for applying gentle heat.</p>

      <p>It seems appropriate.</p>

      <p>For all the elaborate cosmologies, secret symbols, promises of immortality, and attempts to discover the fundamental substance of the universe, someone noticed that a vessel suspended in hot water behaved differently from one placed directly over a flame.</p>

      <p>That observation was useful.</p>

      <p>It was repeatable.</p>

      <p>And it didn’t require the practitioner to possess the correct metaphysical interpretation of the universe.</p>

      <p>Perhaps this is one of the more interesting things about the history of knowledge.</p>

      <p>An explanation can fail without rendering every observation made under its influence worthless.</p>

      <p>The alchemists didn’t discover the secret of eternal life. They didn’t manufacture unlimited gold. They didn’t establish that spiritual enlightenment and metallic purification were manifestations of a single physical process.</p>

      <p>But they investigated transformation, developed techniques for manipulating matter, and left behind an intellectual tradition that influenced both scientific practice and philosophical speculation.</p>

      <p>They were wrong about many things.</p>

      <p>They were also paying attention.</p>

      <p>And somewhere between the search for immortality and the invention of modern chemistry, Mary the Jewess apparently decided that what the universe really needed was a better way to heat something without burning it.</p>

      <p>Which, considering the number of people who have ruined chocolate, may have been the more immediately useful discovery.</p>
    </section>

    <section>
      <h2>Historical Reading</h2>

      <p>For readers inclined to follow the trail: Fabrizio Pregadio’s <em>Chinese Alchemy</em> provides a scholarly introduction to external and internal alchemy. Farzeen Baldrian-Hussein’s <em>Inner Alchemy: Notes on the Origin and Use of the Term neidan</em> examines the terminology. The Science History Institute’s <em>Al-Kimiya: Notes on Arabic Alchemy</em> explores the Arabic tradition and its transmission of knowledge.</p>
    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/byline.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/related-posts.php'; ?>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
