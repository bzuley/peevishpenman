<!-- ============= PEEVISH PENMAN NAV ============= -->
<script>
  // Apply the saved colour theme before the page paints (dark is the default).
  try {
    if (localStorage.getItem('ppm-theme') === 'light') {
      document.documentElement.setAttribute('data-theme', 'light');
    }
  } catch (e) {}
</script>
<nav class="ppm-nav">
  <div class="ppm-nav-inner">

    <!-- Site brand: logo-only home link on mobile, logo + wordmark on desktop -->
    <a href="/" class="ppm-nav-brand" aria-label="Peevish Penman home">
      <img src="/img/logos/ppm_logo_main_reduced_160.webp" alt="" class="ppm-nav-brand-logo" width="36" height="36">
      <span class="ppm-nav-brand-text">
        <span class="ppm-nav-brand-outline">PEEVISH</span>
        <span class="ppm-nav-brand-solid">PENMAN</span>
      </span>
    </a>

    <!-- CTA Buttons (right side) -->
    <div class="ppm-nav-icons">
      
      <!-- Free Handbook CTA - Primary -->
      <a href="/pages/writer-secret-society" class="ppm-nav-cta ppm-nav-cta--primary">
  Free Handbook
</a>

      <!-- Newsletter CTA - Secondary -->
      <a href="#newsletter" class="ppm-nav-cta ppm-nav-cta--ghost">
        Newsletter
      </a>

      <!-- Dark / light theme toggle -->
      <button class="ppm-theme-toggle" type="button" aria-label="Switch to light theme" aria-pressed="false">
        <svg class="ppm-theme-icon ppm-theme-icon--sun" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        <svg class="ppm-theme-icon ppm-theme-icon--moon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/></svg>
      </button>

      <!-- Hamburger Menu -->
      <button class="ppm-hamburger"
              aria-label="Open menu"
              onclick="ppmOpenNav()">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div> <!-- /.ppm-nav-inner -->

  <!-- Topic (tag) links -->
  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/blog-config.php';
    $ppm_nav_tag_current = isset($_GET['tag']) && strpos($_SERVER['REQUEST_URI'], 'article-tag') !== false
      ? strtolower(trim($_GET['tag'])) : '';
  ?>
  <ul class="ppm-nav-topics" aria-label="Topics">
    <?php foreach (ppm_get_tags() as $ppm_nav_tag => $ppm_nav_info): ?>
      <li><a href="<?php echo htmlspecialchars(ppm_tag_url($ppm_nav_tag)); ?>"<?php echo $ppm_nav_tag === $ppm_nav_tag_current ? ' aria-current="page"' : ''; ?>><?php echo htmlspecialchars($ppm_nav_info['label']); ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>

<!-- Navigation Drawer Overlay -->
<div class="ppm-nav-overlay"
     onclick="document.documentElement.classList.remove('ppm-nav-open')"></div>

<script>
  function ppmOpenNav() {
    var scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
    document.documentElement.style.setProperty('--ppm-scrollbar-width', scrollbarWidth + 'px');
    document.documentElement.classList.add('ppm-nav-open');
  }

  (function () {
    var root = document.documentElement;
    var btn = document.querySelector('.ppm-theme-toggle');
    if (!btn) return;
    function sync() {
      var light = root.getAttribute('data-theme') === 'light';
      btn.setAttribute('aria-pressed', light ? 'true' : 'false');
      btn.setAttribute('aria-label', light ? 'Switch to dark theme' : 'Switch to light theme');
    }
    btn.addEventListener('click', function () {
      var light = root.getAttribute('data-theme') !== 'light';
      if (light) root.setAttribute('data-theme', 'light'); else root.removeAttribute('data-theme');
      try { localStorage.setItem('ppm-theme', light ? 'light' : 'dark'); } catch (e) {}
      sync();
    });
    sync();
  })();
</script>

<!-- Navigation Drawer -->
<aside class="ppm-drawer">
  <div class="ppm-drawer-inner">
    
    <!-- Close Button -->
    <button class="ppm-drawer-close"
            aria-label="Close menu"
            onclick="document.documentElement.classList.remove('ppm-nav-open')">
      &times;
    </button>

    <!-- Search -->
    <form class="ppm-drawer-search" action="/search" method="get" role="search">
      <input type="search" name="q" placeholder="Search articles&hellip;" aria-label="Search articles">
      <button type="submit" aria-label="Search">
        <svg viewBox="0 0 24 24" width="18" height="18"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 1 0-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0A4.5 4.5 0 1 1 14 9.5 4.5 4.5 0 0 1 9.5 14z"/></svg>
      </button>
    </form>

    <!-- Articles Section -->
    <div class="ppm-drawer-section">
      <h3 class="ppm-drawer-heading">Articles</h3>
      <ul>
        <li><a href="/articles">All Articles</a></li>
        <li><a href="/article-tag?tag=archetypes">Character Archetypes</a></li>
        <li><a href="/article-tag?tag=worldbuilding">Worldbuilding</a></li>
        <li><a href="/article-tag?tag=selfpublishing">Self-Publishing</a></li>
        <li><a href="/article-tag?tag=consciousness">Consciousness</a></li>
      </ul>
    </div>

    <!-- Writing Projects Section -->
    <div class="ppm-drawer-section">
      <h3 class="ppm-drawer-heading">Writing Projects</h3>
      <ul>
        <li><a href="/pages/bright-dark">The Bright Dark</a></li>
        <li><a href="/pages/delcath-series">Delcath Series</a></li>
        <li><a href="/pages/ghost-trucker">Ghost Trucker</a></li>
        <li><a href="/pages/coloring-book">Reptilian Conspiracy Coloring Book</a></li>
      </ul>
    </div>

    <!-- Peevish Penman Section -->
    <div class="ppm-drawer-section">
      <h3 class="ppm-drawer-heading">Peevish Penman</h3>
      <ul>
        <li><a href="/pages/about">About Peevish Penman</a></li>
        <li><a href="/pages/books">Books</a></li>
        <li><a href="/pages/writer-secret-society">Free Writer&rsquo;s Handbook</a></li>
      </ul>
    </div>

  </div> <!-- /.ppm-drawer-inner -->
</aside>