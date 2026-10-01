<!-- Site scripts. The ?v= changes on every deploy, like the stylesheet's,
     so browsers never keep running an old cached copy. -->
<script src="/js/main.js?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/js/main.js') ?>"></script>
<script src="/js/jump-nav.js?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/js/jump-nav.js') ?>"></script>

<script>
  (function () {
    // Close the nav drawer on ESC. Opening/closing on click is wired
    // via inline onclick handlers in partials/nav.php.
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        document.documentElement.classList.remove('ppm-nav-open');
      }
    });
  })();
</script>

<!-- Peevish Penman Footer -->
<footer class="ppm-footer">
  <!-- Logo (mobile) -->
  <section class="ppm-footer-logo">
    <a href="/" aria-label="Peevish Penman home">
      <img src="/img/logos/ppm_logo_main_reduced.webp" alt="Peevish Penman" width="200" height="200" loading="lazy">
    </a>
  </section>

  <!-- Typewriter (desktop) -->
  <section class="ppm-footer-typewriter">
    <a href="/" aria-label="Peevish Penman home">
      <div class="ppm-footer-typewriter-gradient"></div>
      <img src="/img/logos/hermes_3000.webp" alt="Peevish Penman" width="1236" height="1273" loading="lazy">
    </a>
  </section>

  <!-- Newsletter -->
  <section class="ppm-footer-newsletter" id="newsletter">
    <div class="ppm-footer-newsletter-overline">Early Access • Launch Alerts</div>
    <h3>Get the Drops First</h3>
    <p class="ppm-footer-newsletter-lede">Chapters, secret extras, and release dates—straight from the studio. No filler. No delay.</p>

    <?php if (($_GET['form'] ?? '') === 'footer' && ($_GET['signup'] ?? '') === 'success'): ?>
      <div class="ppm-footer-message ppm-footer-message-success" role="status">
        <strong>You&rsquo;re on the list!</strong>
        <span>Thanks for signing up. Watch your inbox for the next Peevish Penman newsletter.</span>
      </div>
    <?php else: ?>
    <form action="/partials/newsletter-signup" method="POST" id="newsletter-form">
      <div class="ppm-footer-newsletter-form">
        <input type="email" name="email" placeholder="Your email" required aria-label="Email address">
        <button type="submit" aria-label="Join the newsletter now">Join Now</button>
      </div>
      <input type="hidden" name="form" value="footer">
      <input type="text" name="website" class="ppm-signup-trap" tabindex="-1" autocomplete="off" aria-hidden="true">

      <?php if (($_GET['form'] ?? '') === 'footer' && ($_GET['signup'] ?? '') === 'error'): ?>
        <p class="ppm-footer-message ppm-footer-message-error" role="alert">That didn&rsquo;t go through. Please check your email address and try again.</p>
      <?php endif; ?>
    </form>
    <?php endif; ?>
    
    <p class="ppm-footer-newsletter-meta">One email when it matters. Unsubscribe anytime.</p>
  </section>

  <!-- Footer Links -->
  <nav class="ppm-footer-links" aria-label="Footer">
    <a href="/pages/about">About</a>
    <a href="/pages/books">Books</a>
    <a href="/pages/privacy">Privacy</a>
    <a href="/rss.xml" type="application/rss+xml">RSS Feed</a>
  </nav>

  <div class="ppm-footer-bottom">
    <!-- Social Media -->
    <div class="ppm-footer-social" aria-label="Social media">
      <a href="https://www.facebook.com/PeevishPenman" aria-label="Facebook" target="_blank" rel="noopener">
        <svg class="ppm-footer-icon" viewBox="0 0 24 24"><path d="M13 3h4v4h-2c-.8 0-1 .4-1 1v3h3v4h-3v7h-4v-7H8v-4h2V8c0-2.5 1.5-5 3-5z"/></svg>
      </a>
      <a href="https://www.instagram.com/peevishpenman/" aria-label="Instagram" target="_blank" rel="noopener">
        <svg class="ppm-footer-icon" viewBox="0 0 24 24"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm5 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg>
      </a>
      <a href="https://www.youtube.com/@peevishpenman" aria-label="YouTube" target="_blank" rel="noopener">
        <svg class="ppm-footer-icon" viewBox="0 0 24 24"><path d="M3 6h18a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm8 4v4l4-2-4-2z"/></svg>
      </a>
      <a href="https://tiktok.com/@peevishpenman" aria-label="TikTok" target="_blank" rel="noopener">
        <svg class="ppm-footer-icon" viewBox="0 0 24 24"><path d="M14 3h3a5 5 0 0 0 4 4v3a8 8 0 0 1-4-1v7a6 6 0 1 1-6-6c.7 0 1.4.1 2 .3v3a3 3 0 1 0 3 3V3z"/></svg>
      </a>
      <a href="https://x.com/PeevishPenman" aria-label="X (Twitter)" target="_blank" rel="noopener">
        <svg class="ppm-footer-icon" viewBox="0 0 24 24"><path d="M3 3h4l5 7 5-7h4l-6 8 6 10h-4l-5-7-5 7H3l6-10L3 3z"/></svg>
      </a>
    </div>

    <!-- Copyright -->
    <div class="ppm-footer-copy">
      &copy; <?php echo date('Y'); ?> Peevish Penman. All rights reserved.
    </div>
  </div>
</footer>

</body>
</html>