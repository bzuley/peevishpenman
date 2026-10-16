document.getElementById('ppm-menu-toggle')?.addEventListener('click', () => {
    document.documentElement.classList.toggle('ppm-nav-open');
});

// Newsletter sign-up: submit in the background and swap the form for a
// confirmation in place, so the page doesn't reload and jump around. Without
// JavaScript the form still posts normally and the server redirects back.
// Listens on document because this script loads before the footer markup.
// The "verify you're human" check is only drawn once the visitor starts on
// the form, so it doesn't sit there before they've entered anything.
function ppmTurnstileRender(form) {
    const box = form.querySelector('.ppm-turnstile');
    if (!box || box.dataset.rendered || !window.turnstile) return;
    box.dataset.rendered = '1';
    window.turnstile.render(box, {
        sitekey: box.dataset.ppmSitekey,
        theme: 'auto',
        appearance: 'interaction-only',
        // Make room between the email box and the button only while the
        // visitor actually has to click something.
        'before-interactive-callback': () => box.parentElement.classList.add('ppm-verify-visible'),
        'after-interactive-callback': () => box.parentElement.classList.remove('ppm-verify-visible'),
    });
}

document.addEventListener('focusin', (event) => {
    const form = event.target.closest?.('form[action="/partials/newsletter-signup"]');
    if (form) ppmTurnstileRender(form);
});

// Gives the check a few seconds to finish if the visitor submits right away.
async function ppmTurnstileWait(form) {
    if (!form.querySelector('.ppm-turnstile')) return;
    for (let i = 0; i < 50; i++) {
        ppmTurnstileRender(form);
        if (form.querySelector('[name="cf-turnstile-response"]')?.value) return;
        await new Promise((resolve) => setTimeout(resolve, 200));
    }
}

document.addEventListener('submit', async (event) => {
    const form = event.target;
    if (!form.matches('form[action="/partials/newsletter-signup"]')) return;
    event.preventDefault();

    const button = form.querySelector('button[type="submit"]');
    if (button) button.disabled = true;

    await ppmTurnstileWait(form);

    let ok = false;
    try {
        const response = await fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: { Accept: 'application/json' },
        });
        ok = (await response.json()).ok === true;
    } catch (e) {
        ok = false;
    }

    // Clear any message left from an earlier attempt or a no-JS redirect.
    form.parentElement.querySelectorAll('.ppm-footer-message').forEach((el) => el.remove());

    if (ok) {
        const panel = document.createElement('div');
        panel.className = 'ppm-footer-message ppm-footer-message-success';
        panel.setAttribute('role', 'status');
        panel.innerHTML = '<strong>You&rsquo;re on the list!</strong>'
            + '<span>Thanks for signing up. Watch your inbox for the next Peevish Penman newsletter.</span>'
            + '<a class="ppm-signup-preview" href="/pages/bright-dark-chapter-one">Start reading Chapter 1 of <em>The Bright Dark</em> &rarr;</a>';
        form.replaceWith(panel);
        ppmConfetti(panel);
    } else {
        const error = document.createElement('p');
        error.className = 'ppm-footer-message ppm-footer-message-error';
        error.setAttribute('role', 'alert');
        error.textContent = 'That didn’t go through. Please check your email address and try again.';
        form.after(error);
        // A Turnstile token works once, so get a fresh one for the retry.
        const box = form.querySelector('.ppm-turnstile');
        if (window.turnstile && box?.dataset.rendered) window.turnstile.reset(box);
        if (button) button.disabled = false;
    }
});

// A short burst of confetti in the site's colours from the centre of `origin`.
// Skipped for visitors who've asked their device to reduce motion.
function ppmConfetti(origin) {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const canvas = document.createElement('canvas');
    canvas.setAttribute('aria-hidden', 'true');
    canvas.style.cssText = 'position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:9999';
    document.body.appendChild(canvas);
    const ctx = canvas.getContext('2d');
    const dpr = window.devicePixelRatio || 1;
    canvas.width = innerWidth * dpr;
    canvas.height = innerHeight * dpr;
    ctx.scale(dpr, dpr);

    const box = origin.getBoundingClientRect();
    const x = box.left + box.width / 2;
    const y = box.top + box.height / 3;
    const colours = ['#2FA891', '#4FC3AC', '#7C6FAF', '#A99BE0', '#E6EDF5'];
    const pieces = Array.from({ length: 140 }, () => {
        const angle = -Math.PI / 2 + (Math.random() - 0.5) * Math.PI * 0.9;
        const speed = 6 + Math.random() * 9;
        return {
            x, y,
            vx: Math.cos(angle) * speed,
            vy: Math.sin(angle) * speed,
            w: 6 + Math.random() * 6,
            h: 3 + Math.random() * 4,
            spin: Math.random() * Math.PI,
            vspin: (Math.random() - 0.5) * 0.3,
            colour: colours[Math.floor(Math.random() * colours.length)],
        };
    });

    const duration = 2600;
    const start = performance.now();
    let last = start;
    function frame(now) {
        const t = (now - start) / duration;
        // Scale motion to elapsed time so it looks the same at 60Hz and 120Hz.
        const k = Math.min((now - last) / (1000 / 60), 3);
        last = now;
        ctx.clearRect(0, 0, innerWidth, innerHeight);
        ctx.globalAlpha = Math.max(0, 1 - Math.max(0, t - 0.6) / 0.4);
        for (const p of pieces) {
            p.vy += 0.25 * k;                    // gravity
            p.vx *= Math.pow(0.99, k);           // air resistance
            p.vy *= Math.pow(0.99, k);
            p.x += p.vx * k;
            p.y += p.vy * k;
            p.spin += p.vspin * k;
            ctx.save();
            ctx.translate(p.x, p.y);
            ctx.rotate(p.spin);
            ctx.scale(1, Math.cos(p.spin * 2)); // flutter
            ctx.fillStyle = p.colour;
            ctx.fillRect(-p.w / 2, -p.h / 2, p.w, p.h);
            ctx.restore();
        }
        if (t < 1) requestAnimationFrame(frame);
        else canvas.remove();
    }
    requestAnimationFrame(frame);
}
