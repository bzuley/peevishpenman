<!-- ============= PEEVISH PENMAN NAV ============= -->
<nav class="ppm-nav">
  <div class="ppm-nav-inner">

    <!-- CTA Buttons (right side) -->
    <div class="ppm-nav-icons">
      
      <!-- Free Handbook CTA - Primary -->
      <a href="/pages/writer-secret-society.php" class="ppm-nav-cta ppm-nav-cta--primary">
  Free Handbook
</a>

      <!-- Newsletter CTA - Secondary -->
      <a href="/newsletter" class="ppm-nav-cta ppm-nav-cta--ghost">
        Newsletter
      </a>

      <!-- Hamburger Menu -->
      <button class="ppm-hamburger" 
              aria-label="Open menu"
              onclick="document.body.classList.add('ppm-nav-open')">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div> <!-- /.ppm-nav-inner -->
</nav>

<!-- Navigation Drawer Overlay -->
<div class="ppm-nav-overlay" 
     onclick="document.body.classList.remove('ppm-nav-open')"></div>

<!-- Navigation Drawer -->
<aside class="ppm-drawer">
  <div class="ppm-drawer-inner">
    
    <!-- Close Button -->
    <button class="ppm-drawer-close" 
            aria-label="Close menu"
            onclick="document.body.classList.remove('ppm-nav-open')">
      &times;
    </button>

    <!-- Writing Projects Section -->
    <div class="ppm-drawer-section">
      <h3 class="ppm-drawer-heading">Writing Projects</h3>
      <ul>
        <li><a href="/projects/thought-engines">Thought Engines</a></li>
        <li><a href="/projects/delcath-series">Delcath Series</a></li>
        <li><a href="/projects/ghost-trucker">Ghost Trucker</a></li>
        <li><a href="/projects/handbook">Writer Secret Society Handbook</a></li>
        <li><a href="/projects/coloring-book">Reptilian Conspiracy Coloring Book</a></li>
      </ul>
    </div>

    <!-- Peevish Penman Section -->
    <div class="ppm-drawer-section">
      <h3 class="ppm-drawer-heading">Peevish Penman</h3>
      <ul>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/newsletter">Email Sign-Up</a></li>
      </ul>
    </div>

    <!-- About Section -->
    <div class="ppm-drawer-section">
      <h3 class="ppm-drawer-heading">About</h3>
      <ul>
        <li><a href="/about">About OA Allen</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>

  </div> <!-- /.ppm-drawer-inner -->
</aside>