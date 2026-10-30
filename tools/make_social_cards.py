#!/usr/bin/env python3
"""
make_social_cards.py — build 1200x630 JPEG share cards for blog posts.

Each card is the post's hero image cropped to the 1.91:1 social ratio and
saved under img/social/<slug>.jpg (kept under 250KB, which Facebook and X
fetch reliably). Wide-enough sources are cropped; `focus` (0 = top,
1 = bottom) picks which band of a taller image survives the crop.

Usage:
    python3 tools/make_social_cards.py            # build every card below
    python3 tools/make_social_cards.py serve-the-story

Then point the post's og:image and twitter:image at
https://peevishpenman.com/img/social/<slug>.jpg.
Requires Pillow.
"""
import os
import sys
from PIL import Image

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
W, H = 1200, 630
MAX_BYTES = 250 * 1024

# slug: (source image, vertical focus)
CARDS = {
    'serve-the-story': ('img/general/serve_story.png', 0),
    'write-what-you-know': ('img/general/astronaut_and_unicorn.png', 0.35),
    'reader-comments-honest-open-immediate': ('img/general/happy_and_angry_readers.png', 0.3),
    'tips-to-name-your-characters': ('img/general/speculative_fiction_fellowship.png', 0.2),
    '10-modern-books-for-fans-of-isaac-asimov': ('img/general/asimov.png', 0.15),
    'how-old-is-your-book-in-book-years': ('img/general/book_bandit.png', 0.4),
    'the-caregiver': ('img/archetypes/caregiver_archetype.webp', 0.2),
}


def build(slug, src, focus):
    im = Image.open(os.path.join(ROOT, src)).convert('RGB')
    w, h = im.size
    target = W / H
    if w / h > target:  # too wide: trim the sides
        nw = round(h * target)
        left = round((w - nw) / 2)
        box = (left, 0, left + nw, h)
    else:  # too tall: trim top and bottom around the focus
        nh = round(w / target)
        top = round((h - nh) * focus)
        box = (0, top, w, top + nh)
    card = im.crop(box).resize((W, H), Image.LANCZOS)
    out = os.path.join(ROOT, 'img', 'social', slug + '.jpg')
    for q in (88, 84, 80, 76, 72, 68, 64):
        card.save(out, 'JPEG', quality=q, optimize=True, progressive=True)
        if os.path.getsize(out) <= MAX_BYTES:
            break
    print(f'{slug}: {os.path.getsize(out) // 1024}KB (q{q})')


if __name__ == '__main__':
    slugs = sys.argv[1:] or list(CARDS)
    for s in slugs:
        build(s, *CARDS[s])
