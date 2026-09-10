# Porcelain

A warm, editorial WordPress **block theme** for bakeries, tea rooms, and food blogs — full site editing throughout, with arched image frames, a rose-and-berry palette, and a Cormorant Garamond / Work Sans pairing.

## Requirements

- WordPress 6.6+
- PHP 8.0+

## Install

Copy this folder to `wp-content/themes/porcelain` and activate it under **Appearance → Themes**. No build step is required to run the theme; the tooling in the repo root is for contributors.

## The palette

| Token | Hex | Role |
| --- | --- | --- |
| Ink | `#34202A` | Headings and body text — a warm near-black |
| Ink (soft) | `#5C4650` | Secondary text |
| Cream | `#FBF4EC` | Base background (porcelain) |
| Cream (deep) | `#F3E7DC` | Alternating section background |
| Paper | `#FFFDFB` | Cards and raised surfaces |
| Rose | `#C98A8F` | Brand warmth, tints |
| Rose tint | `#F1DCDD` | Soft fills, muted text on dark |
| Berry | `#8C2F3F` | The one "pop" colour — calls to action |
| Berry (dark) | `#6E2231` | Button hover / active |
| Sage | `#7E8C6E` | Rare accent — category tags |
| Gold | `#BB9457` | Hairline rules only, never fills |

Colours, fonts, spacing and type scale all live in `theme.json`; edit them there or in **Appearance → Editor → Styles**. A dark **Evening** style variation ships in `styles/`.

## Structure

```
theme.json          Global settings & styles (palette, type, spacing, layout)
functions.php       Theme supports, webfont + editor styles, pattern categories, block styles
style.css           Theme header + a couple of safety-net rules
assets/css/porcelain.css Effects theme.json can't express (arched frames, sticky header, ticker, pills)
assets/images/      Lightweight SVG placeholders used by the homepage patterns
templates/          index, home, front-page, single, page, page-no-title, archive, search, 404
parts/              header, footer
patterns/           Homepage sections (porcelain_home), recipe helpers (porcelain_recipe), 404 content
styles/             evening.json — dark style variation
```

## Homepage

Set **Settings → Reading → Your homepage displays → A static page** and pick any page; `templates/front-page.html` composes the homepage from patterns (`porcelain/hero`, `porcelain/ticker`, `porcelain/welcome`, `porcelain/latest-recipes`, `porcelain/category-tiles`, `porcelain/afternoon-tea`, `porcelain/shop-favourites`, `porcelain/quote`, `porcelain/newsletter`). Rearrange or remove sections in the Site Editor.

## Recipe posts

`templates/single.html` gives every post a full-bleed featured-image hero and a related-recipes strip. Build the recipe itself inside the post with the **Porcelain: Recipe** patterns:

- **Recipe stat row** — servings / prep / cook / calories / skill
- **Recipe body — story + recipe card** — two columns with a sticky ingredients-and-directions card

## Fonts

Cormorant Garamond and Work Sans load from the Google Fonts API (see `porcelain_fonts_url()` in `functions.php`) so the theme looks right immediately. For an offline or privacy-first site, embed the two families locally with the **Create Block Theme** plugin's Font Library and remove that enqueue.

## Note

`screenshot.png` (1200×900) is not included — add one before distributing.

## License

GPL-2.0-or-later.
