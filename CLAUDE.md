# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

**Agile** is a classic (non-block) WordPress starter theme based on WPGulp, with WooCommerce and ACF integration. PHP is organized as PSR-4 autoloaded classes; frontend assets are authored in `assets/` (SCSS + ES modules) and compiled by Gulp into `build/`.

The package manager is **pnpm** (pinned via the `packageManager` field). `node-linker=hoisted` is set in `.npmrc` so the Gulp/browserify/babel + `@wordpress` toolchain resolves dependencies as it expects. Run `pnpm install` to set up; on a fresh machine pnpm builds the native image binaries (gifsicle/mozjpeg/optipng-bin) listed under `pnpm.onlyBuiltDependencies`.

## Commands

Asset pipeline (Gulp — requires a populated `.env`, see below):

```bash
pnpm start            # default Gulp task: watch + BrowserSync live reload
pnpm run styles       # compile assets/sass → build/css
pnpm run styles-rtl   # generate RTL stylesheets
pnpm run js-custom    # bundle assets/js/custom → build/js (browserify + babel)
pnpm run js-vendors   # concat assets/js/vendor → build/js
pnpm run images       # optimize images
pnpm run translate    # regenerate languages/Agile.pot
pnpm run zip          # build a distributable theme zip
pnpm run cache-clear  # clear gulp-cache
```

Linting (run before committing — CI enforces all three on changed files):

```bash
pnpm run lint:js      # eslint over assets/js/**/*.js (@wordpress/eslint-plugin)
pnpm run lint:sass    # stylelint over assets/sass/**/*.scss
phpcs                 # PHP, WordPress-Extra + WordPress-Docs via phpcs.xml.dist
```

There is no PHP unit test suite (`tests/` is empty); CI runs lint only.

## Environment setup

Gulp reads `.env` via dotenv. Copy `.env.example` to `.env` and set at least `PROJECT_URL` (the local WP site URL BrowserSync proxies) and `THEME_NAME` / `TEXT_DOMAIN`. Note `ESLINT_USE_FLAT_CONFIG=false` is required — the project uses a legacy `.eslintrc.js`.

## Architecture

**Bootstrap chain:** `functions.php` defines globals (`AGILE_VER`, `AGILE_DIR`, `AGILE_URL`), loads `vendor/autoload.php`, then instantiates `Arisch\Agile\Init`. `includes/Init.php` holds a `$classes` array and `new`s each one. **To register new functionality, add its class to that array** — instantiation is its only entry point.

**PSR-4:** namespace `Arisch\Agile\` maps to `includes/` (composer.json). Run `composer dump-autoload` after adding classes. Directory = namespace segment, so `includes/Core/Sidebar.php` is `Arisch\Agile\Core\Sidebar`.

**`includes/` layout:**
- `Setup/` — `Theme_Setup` (theme supports, nav menus, body classes), `Load_Assets` (enqueues `build/` output, not `assets/`)
- `Core/` — `Sidebar`, `Customizer` (+ `Customizer/Layout/` panels), `Menu_Walker`, `Tags`, `Comment`
- `Extras/` — `Custom_Post_Types`, `Helper_Functions`
- `Plugins/` — `WooCommerce`, `ACF` integrations
- `Admin/` — `Admin_Menu`

Each class wires itself up via WordPress hooks in its constructor (e.g. `add_action`/`add_filter`); there is no central hook registry.

**Assets are compiled, never enqueued from source.** `Load_Assets` enqueues `build/js/vendor.min.js`, `build/js/index.min.js`, and `build/css/style.min.css`. Editing `assets/` has no effect until Gulp rebuilds `build/`. JS entry point is `assets/js/custom/index.js`, which instantiates modules from `assets/js/custom/modules/` (MobileMenu, ThemeSwitch, DropdownMenu).

**ACF field groups** are version-controlled as JSON in `acf-json/` (local JSON sync) — edit fields through the WP admin and commit the synced JSON, or edit the JSON directly.

**WooCommerce** template overrides live in `woocommerce/` (e.g. `single-product/related.php`), following WooCommerce's standard template-override convention.

**Block editor:** `theme.json` defines editor settings/palette; `Theme_Setup` adds editor styles and block supports; `Load_Assets::enqueue_gutenberg_assets` enqueues editor styles + fonts.

## Conventions

- PHP follows **WordPress-Extra** + **WordPress-Docs** standards. Notable exclusions in `phpcs.xml.dist`: Yoda conditions and global-prefix-on-everything are off; class filenames are NOT required to be hyphenated-lowercase (classes use `Pascal_Snake_Case.php`).
- Text domain is `agile`; wrap user-facing strings in i18n functions and run `pnpm run translate` to update the POT file.
- SCSS lives in `assets/sass/` organized by the 7-1-ish pattern (`base/`, `layouts/`, `components/`, `plugins/`, `utilities/`, `abstracts/`, `vendor/`).
