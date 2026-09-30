document.getElementById('ppm-menu-toggle')?.addEventListener('click', () => {
    document.documentElement.classList.toggle('ppm-nav-open');
});

// Newsletter sign-up: submit in the background and swap the form for a
// confirmation in place, so the page doesn't reload and jump around. Without
// JavaScript the form still posts normally and the server redirects back.
// Listens on document because this script loads before the footer markup.
document.addEventListener('submit', async (event) => {
    const form = event.target;
    if (!form.matches('form[action="/partials/newsletter-signup"]')) return;
    event.preventDefault();

    const button = form.querySelector('button[type="submit"]');
    if (button) button.disabled = true;

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
            + '<span>Thanks for signing up. Watch your inbox for the next Peevish Penman newsletter.</span>';
        form.replaceWith(panel);
    } else {
        const error = document.createElement('p');
        error.className = 'ppm-footer-message ppm-footer-message-error';
        error.setAttribute('role', 'alert');
        error.textContent = 'That didn’t go through. Please check your email address and try again.';
        form.after(error);
        if (button) button.disabled = false;
    }
});
