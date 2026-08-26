// Auto-builds a sticky "jump to section" nav for long-form articles,
// based on the <h2> section headings already present in the post.
(function () {
  function slugify(text) {
    return text
      .toLowerCase()
      .trim()
      .replace(/[^\w\s-]/g, '')
      .replace(/\s+/g, '-');
  }

  document.addEventListener('DOMContentLoaded', function () {
    var article = document.querySelector('.ppm-article-inner');
    if (!article) return;

    var headings = Array.prototype.slice.call(article.querySelectorAll('section > h2'));
    if (headings.length < 2) return;

    var usedIds = {};
    headings.forEach(function (h) {
      if (!h.id) {
        var base = slugify(h.textContent) || 'section';
        var id = base;
        var n = 2;
        while (usedIds[id] || document.getElementById(id)) {
          id = base + '-' + n++;
        }
        h.id = id;
      }
      usedIds[h.id] = true;
    });

    var nav = document.createElement('nav');
    nav.className = 'ppm-jump-nav';
    nav.setAttribute('aria-label', 'Jump to section');

    var inner = document.createElement('div');
    inner.className = 'ppm-jump-nav-inner';
    nav.appendChild(inner);

    var links = headings.map(function (h) {
      var a = document.createElement('a');
      a.className = 'ppm-jump-nav-link';
      a.href = '#' + h.id;
      a.textContent = h.textContent;
      inner.appendChild(a);
      return a;
    });

    var header = article.querySelector('.ppm-article-header');
    if (header) {
      header.insertAdjacentElement('afterend', nav);
    } else {
      article.insertBefore(nav, article.firstChild);
    }

    function updateScrollOffset() {
      var offset = nav.offsetHeight + 16;
      headings.forEach(function (h) {
        h.style.scrollMarginTop = offset + 'px';
      });
    }
    updateScrollOffset();
    window.addEventListener('resize', updateScrollOffset);

    var activeLink = null;
    function setActive(link) {
      if (activeLink === link) return;
      if (activeLink) activeLink.classList.remove('is-active');
      if (link) {
        link.classList.add('is-active');
      }
      activeLink = link;
    }

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            setActive(links[headings.indexOf(entry.target)]);
          }
        });
      }, {
        rootMargin: '-' + (nav.offsetHeight + 8) + 'px 0px -70% 0px',
        threshold: 0
      });

      headings.forEach(function (h) {
        observer.observe(h);
      });
    }
  });
})();
