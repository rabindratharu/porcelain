# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

`porcelain` is a **WordPress full-site-editing block theme** (Composer type `wordpress-theme`) for bakeries, tea rooms, and food blogs. It lives inside a larger WordPress install at `wp-content/themes/porcelain` (served locally via Herd, likely at a `.local` host).

### Theme architecture

Porcelain is a **flat block theme** — its styling and structure live in files WordPress reads directly, not in a compiled bundle. The webpack/Tailwind tooling in the repo root is scaffolding that the theme does **not** currently use (there is no `assets/src/`).

- **`theme.json`** (schema v3) is the source of truth for the palette, type scale, spacing scale, fonts, layout sizes, and per-block/element styles. Change design tokens here first.
- **`assets/css/porcelain.css`** holds only what `theme.json` cannot express: arched image/cover frames (`.is-style-arched`), the sticky header, the tagline ticker animation, drop caps, pill tags (`.porcelain-tags`), the eyebrow label (`.porcelain-eyebrow`), and the sticky recipe card. Loaded on the front end (`wp_enqueue_scripts`) and in the editor (`add_editor_style`).
- **`functions.php`** — `porcelain_`-prefixed functions only. Registers theme supports, enqueues the Google Fonts stylesheet (`porcelain_fonts_url()`: Cormorant Garamond + Work Sans) on both front end and editor, registers pattern categories (`porcelain_home`, `porcelain_recipe`, `porcelain_general`) and block styles (`arched`, `hairline-top`, pill `post-terms`).
- **`templates/`** and **`parts/`** are HTML block markup. `front-page.html` composes the homepage purely from `<!-- wp:pattern -->` references; `single.html` is the recipe layout (featured-image cover hero + related strip + comments).
- **`patterns/*.php`** are filesystem patterns with header comments. Homepage sections carry `porcelain_home`; per-post recipe helpers (`recipe-stats`, `recipe-layout`) carry `porcelain_recipe`; `hidden-404.php` is `Inserter: no`. All user-facing strings use `esc_html_e()` / `esc_attr_e()` with the `porcelain` text domain.
- **`assets/images/*.svg`** are lightweight palette-coloured placeholders referenced by patterns via `get_template_directory_uri()`. Replace with real photography.
- **`styles/evening.json`** is a dark style variation (swaps the palette roles).

Gotchas when editing block markup:

- Font families set via the block's top-level `fontFamily` attribute emit `has-<slug>-font-family` (slugs are `display` and `sans`, so `has-sans-font-family` — **not** `has-work-sans-font-family`). Setting `style.typography.fontFamily` instead emits an inline `font-family:` and no class; don't mix the two.
- The front end always re-parses templates/patterns, but the Site Editor runs block validation — keep hand-written static-block markup (paragraph, heading, list, image, buttons, pullquote) matching what the block would serialize, or the editor shows "Attempt recovery".

### Legacy build tooling (unused by the theme)

`package.json` / `webpack.config.js` / `Gruntfile.js` still describe a compiled workflow: `assets/src/js/main.js` as the JS entry, `assets/src/css/*.{scss,css}` as per-file CSS entries, output to `assets/build/`, `inc/**/*.php` for PHP includes, ZIP release via `grunt build`. If the theme grows a real build step, that is the layout to follow. Grunt's `checktextdomain` and `search:version` also scan `inc/**/*.php` only — not `patterns/`.

## Commands

### JS / CSS build (npm)

| Command | Purpose |
| --- | --- |
| `npm run start` | Clean + watch-build JS and CSS (`wp-scripts start`); runs `composer install` first. |
| `npm run build` | One-off dev build of all entries. |
| `npm run build:prod` | Production build: clean, minify, strip source maps, then `composer install --no-dev`. |
| `npm run release` | `build:prod` + regenerate POT + `grunt build` → distributable ZIP at `build/porcelain-<version>.zip`. |

### Linting

`npm run lint` runs every `lint:*` script in parallel. Individually:

- `npm run lint:js` / `lint:js:fix` — ESLint (`@wordpress/eslint-plugin`, `.eslintignore`).
- `npm run lint:js:types` — `tsc --noEmit` (expects a `tsconfig.json`, not yet present).
- `npm run lint:css` / `lint:css:fix` — stylelint (`@wordpress/stylelint-config/scss`).
- `npm run lint:php:fix` — `composer format` (phpcbf).
- `npm run lint:php:stan` — `composer phpstan` (needs a `phpstan.neon`; none committed yet).
- Run PHPCS directly with `./vendor/bin/phpcs` (pre-approved); autofix with `./vendor/bin/phpcbf`.
- Note: `npm run lint:php` calls `composer run-script lint`, but `composer.json` has no `lint` script (it has `lint:phpcs` and `lint:php`). Use `composer lint:phpcs` or `./vendor/bin/phpcs` instead.

### PHP tests

- `composer test` — PHPUnit via `phpunit.xml.dist`; suite `unit` = `tests/phpunit/**`. Requires the WordPress test library (`tests/bootstrap.php` looks for `WP_TESTS_DIR` / `WP_DEVELOP_DIR` / `WP_PHPUNIT__DIR`, then `../../../../../tests/phpunit`, then `/tmp/wordpress-tests-lib`).
- `composer test-multisite` — same, with `WP_MULTISITE=1`.
- Single test: `./vendor/bin/phpunit -c phpunit.xml.dist --filter <TestName>`.
- Test class namespace is `Porcelain\Tests\` → `tests/` (PSR-4, dev autoload).
- `npm run test:php` is a `wp-env` wrapper that currently hardcodes a `wp-content/plugins/...` path and does not fit this theme — prefer `composer test`.

### E2E (Cypress)

- `npm run cypress:open`. Base URL and WP admin creds come from env (`CYPRESS_BASE_URL`/`BASE_URL`, `CYPRESS_WP_USER`, `CYPRESS_WP_PASSWORD`), loaded from `.env` via dotenv; default base URL `http://elementor.local/`.
- `cypress/e2e/home-page.cy.js` and `admin-login.cy.js` are the project specs; the numbered folders are stock Cypress examples.

## Conventions enforced by tooling

- **PHP:** WordPress-VIP-Go + WordPress-Extra + WordPress-Docs, plus PHPCompatibilityWP (`testVersion 8.0-`, min WP 6.4). Short array syntax `[]` is required (long `array()` is flagged). PHP requirement is `^8.0`; Composer platform is pinned to `8.2`.
- **Prefixes:** all globals must start with `PORCELAIN` (constants), `Porcelain` (classes), or `porcelain_` (functions/variables).
- **Text domain:** `porcelain` everywhere (`WordPress.WP.I18n`, Grunt `checktextdomain`). Note the `i18n:make-pot` script writes to `languages/porcelain.pot` conceptually but currently names the file `blockfolio.pot` — fix the filename when wiring up i18n.
- **Indentation:** tabs for PHP/JS/CSS, 2-space for JSON/YAML/Markdown (`.editorconfig`).
- **Styling stack:** Tailwind CSS v4 (via `@tailwindcss/postcss`) + PostCSS + autoprefixer; SCSS is supported. The CSS webpack rule sets `css-loader` `url: false`, so relative `url(../images/…)` paths are preserved as-authored rather than resolved.
- **JS:** `@wordpress/scripts` webpack base, React 18, `@` path alias → `assets/src`, TS/TSX resolvable.

## Packaging

`grunt build` (invoked by `npm run release`) runs `checktextdomain`, copies the theme into `build/porcelain/` excluding all dev/config files (see `copyFiles` in `Gruntfile.js` — `CLAUDE.md` and `AGENTS.md` are excluded there too), and zips it to `build/porcelain-<version>.zip`. Keep the version in `package.json` in sync with the theme's `style.css` header and any `Version:` in root/`inc` PHP.
