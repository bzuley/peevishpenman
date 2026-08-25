<!-- Site scripts -->
<script src="/js/main.js"></script>

<script>
  (function () {
    const body    = document.body;
    const toggle  = document.getElementById('ppm-nav-toggle');
    const close   = document.getElementById('ppm-drawer-close');
    const overlay = document.getElementById('ppm-nav-overlay');

    function openNav() {
      body.classList.add('ppm-nav-open');
    }

    function closeNav() {
      body.classList.remove('ppm-nav-open');
    }

    if (toggle) {
      toggle.addEventListener('click', openNav);
    }

    if (close) {
      close.addEventListener('click', closeNav);
    }

    if (overlay) {
      overlay.addEventListener('click', closeNav);
    }

    // Optional: close on ESC
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        closeNav();
      }
    });
  })();
</script>

<!-- Peevish Penman Footer -->
<footer class="ppm-footer">
  <!-- Logo -->
  <section class="ppm-footer-logo">
    <img src="/images/ppm-logo.png" alt="Peevish Penman">
  </section>

  <!-- Newsletter -->
  <section class="ppm-footer-newsletter">
    <div class="ppm-footer-newsletter-overline">Early Access • Launch Alerts</div>
    <h3>Get the Drops First</h3>
    <p class="ppm-footer-newsletter-lede">Chapters, secret extras, and release dates—straight from the studio. No filler. No delay.</p>

    <form action="/newsletter-signup.php" method="POST" id="newsletter-form">
      <div class="ppm-footer-newsletter-form">
        <input type="email" name="email" placeholder="Your email" required aria-label="Email address">
        <button type="submit" aria-label="Join the newsletter now">Join Now</button>
      </div>
      
      <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
        <p class="ppm-footer-message ppm-footer-message-success">Thanks—check your inbox.</p>
      <?php endif; ?>
      
      <?php if (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
        <p class="ppm-footer-message ppm-footer-message-error">Something went wrong. Please try again.</p>
      <?php endif; ?>
    </form>
    
    <p class="ppm-footer-newsletter-meta">One email when it matters. Unsubscribe anytime.</p>
  </section>

  <!-- Footer Links -->
  <nav class="ppm-footer-links" aria-label="Footer">
    <a href="/about">About</a>
    <a href="/books">Books</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
    <a href="/privacy">Privacy Policy</a>
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