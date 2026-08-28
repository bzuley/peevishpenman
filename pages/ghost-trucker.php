<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ghost Trucker – OA Allen &amp; Peevish Penman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ghost Trucker: speculative fiction from the cab of a semi. A trucker dies, wakes up in the Netherverse, and discovers death hasn't freed him from employment.">
  <meta name="author" content="OA Allen">
  <meta name="robots" content="noindex, nofollow">

  <link rel="stylesheet" href="/styles/main.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    .gt-page {
      --gt-amber: #FFB454;
      --gt-amber-lumen: #FFD199;
      --gt-amber-shadow: #C97F2A;
      --gt-taillight: #E85C41;
      background: var(--ppm-obsidian);
      color: var(--ppm-text-main);
      overflow-x: hidden;
    }

    .gt-page * { box-sizing: border-box; }

    /* ---------- Shared: dashed lane-line rule ---------- */
    .gt-laneline {
      width: 100%;
      height: 3px;
      background-image: repeating-linear-gradient(
        to right,
        var(--gt-amber-shadow) 0px,
        var(--gt-amber-shadow) 28px,
        transparent 28px,
        transparent 56px
      );
      opacity: 0.55;
    }

    /* ---------- Hero ---------- */
    .gt-hero {
      position: relative;
      padding: clamp(4rem, 12vw, 8rem) 5% clamp(3rem, 8vw, 5rem);
      text-align: center;
      overflow: hidden;
      background:
        radial-gradient(ellipse at 50% 0%, rgba(255, 180, 84, 0.16), transparent 62%),
        radial-gradient(ellipse at 15% 100%, rgba(232, 92, 65, 0.10), transparent 55%),
        var(--ppm-obsidian);
    }

    .gt-hero::before {
      content: '';
      position: absolute;
      left: 0;
      right: 0;
      bottom: 1.5rem;
      height: 2px;
      background-image: repeating-linear-gradient(
        to right,
        rgba(255, 180, 84, 0.35) 0px,
        rgba(255, 180, 84, 0.35) 36px,
        transparent 36px,
        transparent 76px
      );
      pointer-events: none;
    }

    .gt-hero-content {
      position: relative;
      z-index: 1;
    }

    .gt-hero-title-block {
      position: relative;
      padding: 0.5rem 0 1rem;
    }

    .gt-hero-art {
      position: absolute;
      inset: -2rem -10% 0;
      z-index: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      pointer-events: none;
    }

    .gt-hero-art img {
      width: min(680px, 100%);
      height: auto;
      opacity: 0.5;
      filter: saturate(0.9);
    }

    .gt-hero-art::after {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(
        ellipse 65% 65% at 50% 45%,
        rgba(5, 6, 8, 0.1) 0%,
        rgba(5, 6, 8, 0.55) 55%,
        rgba(5, 6, 8, 0.88) 78%,
        var(--ppm-obsidian) 100%
      );
    }

    .gt-kicker {
      position: relative;
      z-index: 1;
      display: inline-flex;
      align-items: center;
      gap: 0.6em;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.78rem;
      font-weight: 500;
      letter-spacing: 0.32em;
      text-transform: uppercase;
      color: var(--gt-amber);
      margin: 0 0 1.5rem;
    }

    .gt-kicker::before,
    .gt-kicker::after {
      content: '';
      width: 1.5rem;
      height: 1px;
      background: var(--gt-amber-shadow);
      opacity: 0.6;
    }

    .gt-hero h1 {
      position: relative;
      z-index: 1;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.02em;
      font-size: clamp(2.6rem, 8vw, 5rem);
      line-height: 1.02;
      margin: 0 0 1.1rem;
      color: #ffffff;
      text-shadow: 0 0 40px rgba(255, 180, 84, 0.3), 0 4px 18px rgba(5, 6, 8, 0.85);
    }

    .gt-tagline {
      position: relative;
      z-index: 1;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 500;
      font-size: clamp(1.1rem, 2.4vw, 1.5rem);
      letter-spacing: 0.04em;
      font-style: italic;
      color: var(--gt-amber-lumen);
      margin: 0 0 2rem;
      text-shadow: 0 2px 10px rgba(5, 6, 8, 0.85);
    }

    .gt-badge {
      position: relative;
      z-index: 1;
      display: inline-block;
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.24em;
      text-transform: uppercase;
      color: var(--gt-taillight);
      border: 1px solid var(--gt-taillight);
      border-radius: var(--ppm-radius-sm);
      padding: 0.5em 1.1em;
      transform: rotate(-2deg);
      margin-bottom: 2.25rem;
      background: rgba(5, 6, 8, 0.4);
    }

    .gt-hero-lede {
      max-width: 640px;
      margin: 0 auto;
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.75;
      color: var(--ppm-text-muted);
      text-align: left;
    }

    .gt-hero-lede p { margin: 0 0 1.1rem; }
    .gt-hero-lede p:last-child { margin-bottom: 0; }

    .gt-hero-lede strong {
      color: var(--ppm-text-main);
      font-weight: 600;
    }

    /* ---------- Statement dividers ---------- */
    .gt-statement {
      padding: clamp(2.5rem, 6vw, 4rem) 5%;
      text-align: center;
      border-top: 1px solid var(--ppm-border-soft);
      border-bottom: 1px solid var(--ppm-border-soft);
    }

    .gt-statement p {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 600;
      font-size: clamp(1.3rem, 3.2vw, 1.9rem);
      letter-spacing: 0.02em;
      margin: 0;
      color: #ffffff;
    }

    .gt-statement p + p {
      margin-top: 0.5rem;
      color: var(--gt-amber-lumen);
      font-weight: 500;
      font-size: clamp(1.05rem, 2.4vw, 1.3rem);
      font-style: italic;
    }

    /* ---------- Short staccam / arrival section ---------- */
    .gt-arrival {
      padding: clamp(3rem, 7vw, 4.5rem) 5%;
    }

    .gt-arrival-inner {
      max-width: 720px;
      margin: 0 auto;
    }

    .gt-arrival-lines p {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 600;
      font-size: clamp(1.15rem, 2.6vw, 1.5rem);
      color: var(--gt-amber-lumen);
      margin: 0 0 0.35rem;
    }

    .gt-arrival-inner > p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.85;
      color: var(--ppm-text-main);
      margin: 1.5rem 0 0;
    }

    /* ---------- Interrogation readout ---------- */
    .gt-readout {
      max-width: 480px;
      margin: 2.25rem auto 0;
      background: var(--ppm-surface);
      border: 1px solid var(--ppm-border-soft);
      border-radius: var(--ppm-radius-md);
      padding: 1.5rem 1.75rem;
      font-family: "IBM Plex Mono", monospace;
      text-align: left;
    }

    .gt-readout p {
      margin: 0 0 0.6rem;
      font-size: 0.98rem;
      line-height: 1.6;
    }

    .gt-readout p:last-child { margin-bottom: 0; }

    .gt-readout .gt-q { color: var(--ppm-text-muted); }
    .gt-readout .gt-a { color: var(--gt-amber); font-weight: 600; }
    .gt-readout .gt-note {
      color: var(--ppm-text-muted);
      font-style: italic;
      padding-top: 0.6rem;
      border-top: 1px dashed var(--ppm-border-soft);
    }

    /* ---------- Netherverse Trucking ---------- */
    .gt-employer {
      padding: clamp(3rem, 7vw, 4.5rem) 5%;
      background:
        radial-gradient(ellipse at 85% 0%, rgba(255, 180, 84, 0.08), transparent 55%),
        var(--ppm-surface);
      border-top: 1px solid var(--ppm-border-soft);
      border-bottom: 1px solid var(--ppm-border-soft);
    }

    .gt-employer-inner {
      max-width: 720px;
      margin: 0 auto;
    }

    .gt-employer h2 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      font-size: clamp(1.5rem, 3.4vw, 2.1rem);
      color: #ffffff;
      margin: 0 0 1.25rem;
    }

    .gt-employer p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--ppm-text-main);
      margin: 0 0 1.1rem;
    }

    .gt-manifest {
      list-style: none;
      margin: 1.75rem 0;
      padding: 0;
      display: grid;
      gap: 0.6rem;
    }

    .gt-manifest li {
      font-family: "IBM Plex Mono", monospace;
      font-size: 0.98rem;
      color: var(--ppm-text-muted);
      padding-left: 1.6em;
      position: relative;
    }

    .gt-manifest li::before {
      content: '▸';
      position: absolute;
      left: 0;
      color: var(--gt-amber);
    }

    .gt-employer p:last-of-type { margin-bottom: 0; }

    /* ---------- Job offer close ---------- */
    .gt-offer {
      padding: clamp(3rem, 7vw, 4.5rem) 5%;
      text-align: center;
    }

    .gt-offer-inner {
      max-width: 620px;
      margin: 0 auto;
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.15rem;
      line-height: 1.75;
      color: var(--ppm-text-main);
    }

    .gt-offer-inner p { margin: 0 0 0.5rem; }

    .gt-offer-close {
      display: block;
      margin-top: 1rem;
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      font-size: clamp(1.3rem, 3vw, 1.8rem);
      color: var(--gt-taillight);
    }

    /* ---------- World / closing manifesto ---------- */
    .gt-world {
      padding: clamp(3.5rem, 8vw, 6rem) 5%;
      background:
        radial-gradient(ellipse at 50% 100%, rgba(255, 180, 84, 0.08), transparent 65%),
        var(--ppm-obsidian);
      border-top: 1px solid var(--ppm-border-soft);
    }

    .gt-world-inner {
      max-width: 680px;
      margin: 0 auto;
      text-align: center;
    }

    .gt-world h2 {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      font-size: clamp(1.5rem, 3.4vw, 2.1rem);
      color: #ffffff;
      margin: 0 0 1.5rem;
    }

    .gt-world p {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--ppm-text-muted);
      margin: 0 0 1.1rem;
    }

    .gt-world p:last-child { margin-bottom: 0; }

    .gt-world .gt-close-line {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 600;
      font-size: clamp(1.1rem, 2.4vw, 1.4rem);
      color: var(--gt-amber-lumen);
      margin-top: 1.75rem;
    }

    /* ---------- Final CTA ---------- */
    .gt-cta {
      padding: clamp(3.5rem, 8vw, 5.5rem) 5%;
      text-align: center;
      background: var(--ppm-surface);
    }

    .gt-cta-title {
      font-family: "Oswald", "Space Grotesk", system-ui, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      font-size: clamp(1.6rem, 4vw, 2.4rem);
      color: #ffffff;
      margin: 0 0 0.75rem;
    }

    .gt-cta-sub {
      font-family: "IBM Plex Sans", system-ui, sans-serif;
      font-size: 1.05rem;
      color: var(--ppm-text-muted);
      margin: 0 0 2rem;
    }

    .gt-cta-sub strong {
      color: var(--gt-amber-lumen);
      font-weight: 600;
    }
  </style>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/partials/analytics.php'; ?>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>

<main class="gt-page">

  <section class="gt-hero">
    <div class="gt-hero-content">
      <div class="gt-hero-title-block">
        <div class="gt-hero-art" aria-hidden="true">
          <img src="/img/ghost_trucker_hank.webp" alt="" width="1254" height="1254">
        </div>
        <p class="gt-kicker">OA Allen &amp; Peevish Penman &middot; Speculative Fiction</p>
        <h1>Ghost Trucker</h1>
        <p class="gt-tagline">The road doesn't end when you die.</p>
        <p class="gt-badge">Coming Soon</p>
      </div>

      <div class="gt-hero-lede">
        <p>Samuel Parker has spent his adult life behind the wheel.</p>
        <p>It isn't much of a life anymore.</p>
        <p>
          Autonomous trucks are appearing at rest stops. Human drivers are
          becoming obsolete. The industry Parker understands is disappearing
          around him, and at thirty-six he is already wondering what happens
          to a man when the world no longer needs the one thing he knows how
          to do.
        </p>
      </div>
    </div>
  </section>

  <div class="gt-laneline" aria-hidden="true"></div>

  <section class="gt-statement">
    <p>Then Parker dies.</p>
    <p>And wakes up in a truck.</p>
  </section>

  <section class="gt-arrival">
    <div class="gt-arrival-inner">
      <div class="gt-arrival-lines">
        <p>Not his truck.</p>
        <p>Not his world.</p>
      </div>
      <p>
        The barren landscape outside the windshield isn't anywhere on Earth,
        the equipment doesn't make sense, and the artificial intelligence
        speaking to him is remarkably unconcerned with answering the obvious
        question.
      </p>

      <div class="gt-readout">
        <p class="gt-q">Am I dead?</p>
        <p class="gt-a">Yes.</p>
        <p class="gt-note">There is paperwork.</p>
      </div>
    </div>
  </section>

  <section class="gt-employer">
    <div class="gt-employer-inner">
      <h2>Welcome to Netherverse Trucking</h2>
      <p>
        Death, Parker discovers, has not liberated him from employment.
      </p>
      <p>
        Netherverse Trucking has freight to move, roads to run and a
        contract with his name on it.
      </p>
      <ul class="gt-manifest">
        <li>There are supervisors.</li>
        <li>There are competing carriers.</li>
        <li>There are rules no one adequately explains.</li>
      </ul>
      <p>
        And there is an entire civilization beyond death that seems to have
        developed many of the same problems as the one Parker just left
        behind.
      </p>
    </div>
  </section>

  <section class="gt-statement">
    <p>Except stranger.</p>
    <p>Much stranger.</p>
  </section>

  <section class="gt-offer">
    <div class="gt-offer-inner">
      <p>
        To get home, Parker may have to do the last thing he expected to do
        after dying:
      </p>
      <span class="gt-offer-close">Go back to work.</span>
    </div>
  </section>

  <section class="gt-world">
    <div class="gt-world-inner">
      <h2>A Long Haul Through the Afterlife</h2>
      <p>
        Ghost Trucker is speculative fiction from the cab of a semi&mdash;a
        story about work, technology, death and the stubborn persistence of
        bureaucracy even beyond ordinary existence.
      </p>
      <p>
        It begins in an America where machines are replacing drivers and
        opens onto a Netherverse populated by corporations, artificial
        intelligences, strange human factions and roads that lead somewhere
        Parker never expected to go.
      </p>
      <p>At its center is a trucker who does not want to understand the metaphysics of death.</p>
      <p>He wants to know who hired him.</p>
      <p>What the contract says.</p>
      <p>And how the hell he gets out of it.</p>
    </div>
  </section>

  <section class="gt-cta">
    <p class="gt-cta-title">Ghost Trucker</p>
    <p class="gt-cta-sub">Coming soon from <strong>OA Allen</strong> and <strong>Peevish Penman</strong>.</p>
    <a class="ppm-button" href="/pages/newsletter.php">
      Get the Launch Alert
    </a>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/partials/footer.php'; ?>

</body>
</html>
