<!-- ============= PEEVISH PENMAN NAV ============= -->
<nav class="ppm-nav">
  <div class="ppm-nav-inner">

    <!-- Site brand (desktop only; the homepage's own title line covers mobile) -->
    <a href="/" class="ppm-nav-brand" aria-label="Peevish Penman home">
      <img src="/img/logos/logo-ppm.webp" alt="" class="ppm-nav-brand-logo" width="36" height="36">
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
      <a href="/pages/newsletter" class="ppm-nav-cta ppm-nav-cta--ghost">
        Newsletter
      </a>

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
        <li><a href="/pages/about">About OA Allen</a></li>
        <li><a href="/pages/newsletter">Email Sign-Up</a></li>
      </ul>
    </div>

  </div> <!-- /.ppm-drawer-inner -->
</aside>