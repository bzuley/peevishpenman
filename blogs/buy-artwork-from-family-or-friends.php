<?php
$post_meta = [
  'image'   => '/img/general/artist_and_raven.png',
  'slug'    => 'buy-artwork-from-family-or-friends',
  'title'   => 'How to Buy Artwork From Your Family or Friends Without Being a Dick',
  'excerpt' => 'A painter\'s survival guide to being asked for free murals: what commissioning art actually costs in skill, time, and materials—and how not to be a dick about it.',
  'date'    => '2016-09-14',
  'added'   => '2026-09-26',
  // Comma-separated tags, e.g. 'selfpublishing, sciencefiction'.
  // Powers the quicklink buttons on index.php (see /blog-tag.php).
  'tags'    => 'culture, entrepreneur, painting'
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
      alt="A raven holding a paintbrush beside a smiling artist resting her chin on her hand and holding a fan of cash, a half-finished mountain landscape painting on the easel between them"
    >
    <div class="ppm-article-hero-content">
      <p class="ppm-article-kicker">The Business of Being Talented</p>
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
      <p>Say you know someone in your family or network of friends who is a talented artist.</p>

      <p>
        Maybe you admire their work or enjoy their style, and so you're thinking about asking them to create
        something for you that you've always wanted. You can picture how beautiful it will be. Of course, you're
        willing to pay them, but one of the advantages of knowing an artist personally is getting something
        amazing with a personal touch that normally you might not be able to afford, right?
      </p>

      <p>Okay, let's stop right there.</p>

      <p>
        While it is possible to commission—that's an important word—a work of art from someone you know, the
        chances of you being a dick and damaging your relationship with that person are directly proportional to
        how much you know about being an artist. In fact, it's an inverse relationship.
      </p>

      <p>
        As the amount you learn about making and selling art increases, the chance of general dickheadery
        decreases thusly:
      </p>

      <p>
        <strong>knowledge of the craft ↑&nbsp;&nbsp;&nbsp;&nbsp;chance of being a dick about it ↓</strong>
      </p>

      <p>
        As no one really wants to upset an artist, but they do want their art, it's important to be informed
        before you get too excited and ask for something that's just plain ridiculous or inappropriate. And this
        happens. Trust me.
      </p>

      <p>
        My son's grandmother, from the other side of the family, once, in an attempt to become closer to me,
        decided to show an interest in my hobby. She asked if I would paint the faces of all her grandchildren
        on the side of the shed in her backyard. It sounded reasonable. She liked my work and she loved her
        grandchildren, and I had been blessed with talent as a painter.
      </p>
    </section>

    <section>
      <h2>What You Need to Know About Art Skills</h2>

      <p>Some children are just good at art. So they must be born with the ability.</p>

      <p>
        No, the skills required to transform a medium do not emerge effortlessly from the artist's brain.
        Artists spend a great deal of time observing the subjects of their work and considering how best to
        represent them. Artists have to master the fine and gross motor skills required to control their medium
        over years of experience.
      </p>

      <p>
        Most good artists seek out instruction and practice. A lot. Basically, being an artist has more in
        common with being a plumber or an IT technician than it does with having blue eyes or brown eyes. No one
        will deny that people are often born with an aptitude for creativity, but most don't work hard to
        develop the skills required to realize their ideas.
      </p>

      <p>Hard work is the difference between people who become good artists and just being creative.</p>
    </section>

    <section>
      <h2>What You Need to Know About Time (and Labor)</h2>

      <p>
        Artistic talent is often so exciting to witness that we forget it requires labor that can be measured in
        units of time. Some people can make beautiful things very quickly, because they've practiced and
        practiced and practiced.
      </p>

      <p>
        Unfortunately, they may be able to paint a tree in five minutes but still require days to make the
        details of a face recognizable. If they are skilled in one area, it is because they have invested a lot
        of time. If they have not invested a lot of time in an area, it will take them a lot longer to learn it.
      </p>

      <p>This means that the better the art, the more time is spent overall reaching that level of skill.</p>

      <p>
        Even if a person is incredibly skilled and quick, all art takes labor. Whether it is a few hours, days,
        or weeks, asking a person for art means asking them to work for you. If you decide to commission a work
        from someone, it will invariably require extra time unless it is essentially something they've already
        practiced.
      </p>

      <p>
        We instinctively know that people like to get paid for their time, but with artwork, it often happens
        that people only consider the end product in terms of the value of their request. The same person, who
        would never feel it appropriate to ask someone to work twenty hours for them for free, will often
        request art that will take twenty hours and consider it a compliment.
      </p>

      <p>
        Even the artist doesn't know how long a work will take, but they are the only ones who can estimate
        based on their own skills.
      </p>
    </section>

    <section>
      <h2>What You Need to Know About Materials</h2>

      <p>Good art supplies cost a premium, but the quality shows.</p>

      <p>
        Cheap art supplies, like those used for grade school kids or many recreational forms of crafting, don't
        cost very much, but again, the quality shows.
      </p>

      <p>
        Even if an artist is equally excited about doing a project for you, that artist, unless they are very
        lucky, will have spent money on supplies, and it might be a lot more than you realize.
      </p>
    </section>

    <section>
      <h2>What You Need to Know About the Muses</h2>

      <p>
        If you've considered the skill, time, and materials involved and have a good idea what you are asking
        from an artist, it should be easy to negotiate. Unfortunately, many people who commission a work of art
        from an artist AND manage to settle on a fair price based on their skill, the time involved, the
        materials, and other less definite factors of the relationship between the two people, never receive
        it.
      </p>

      <p>Maybe the person started, but they didn't finish.</p>

      <p>
        Perhaps they seemed to like the idea when you were talking about it in front of other people you both
        knew, but they always say they're working on it whenever you see them, and an awkward silence begins to
        grow.
      </p>

      <p>
        I hate to admit it, but most people die before they get the artwork they ask for from me. At times, I
        might have had the inspiration, but I lost it later. I may have been asked for work from twenty
        different people, and just to be fair, I didn't do any of it.
      </p>

      <p>Other times, I thought the person was a dick.</p>

      <p>
        I might not have said no, because I didn't want to offend their volatile temperament, but I had better
        things to do with my time.
      </p>

      <p>
        I remember the day my son's grandmother asked me to paint a mural in her backyard, and how I smiled in
        stunned horror as she described the work she wanted on her shed. She wasn't wrong about my ability. I
        could paint murals. I could paint faces.
      </p>

      <p>
        But I thought the concept was tacky. And as I could barely handle an hour-long visit at her house, and
        what she wanted would have taken me weeks, I decided I had to be blunt.
      </p>

      <p>
        "I'll do it if you really want, but just the materials and time, even at minimum wage, would be worth
        more than my car. Do you think you could just accept my car instead?"
      </p>

      <p>
        While I do love knowing that a friend or family member has my work in their home, I try to encourage
        people to buy things I've already finished. I give great discounts to people I know, because what artist
        doesn't want their work to go to a good home?
      </p>

      <p>
        It still happens at times that I get asked to paint something I don't want my name on, or someone
        implies I should be willing to do them a favor and I lack the inspiration to follow through with their
        humble request. At the jobs I've worked, I tell people, as soon as they discover my talent, that if it's
        not in my job description, I will only work on commission based on an estimate I provide with payment in
        advance.
      </p>

      <p>
        Ask them for what you want, but get the real cost before you suggest that brother-in-law discount. If
        you like their work, there are probably a lot of other people who do too, so don't try to pay in
        compliments and flattery. Don't expect a time frame for completion unless you pay in advance. The muses
        have wills of their own. Don't be surprised if they can't set a price on a type of work that requires
        skills they've not yet developed.
      </p>

      <p>
        Do offer to buy them materials or make any arrangement that trades equal value for equal value. Do ask
        what they've already finished and how much they'd want to part with it. Don't take it personally if they
        reject your vision. But don't be surprised if they'd rather gift you something than accept payment, and
        don't expect it.
      </p>

      <p>
        Most artists aren't savvy businessmen, and pricing art is an art form all on its own, but before you ask
        for a mural in your backyard or a portrait of your dog or baby as a favor from your very talented friend
        or family member, remember, just remember: it doesn't take an MBA to know when someone is being a dick.
      </p>
    </section>

  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
