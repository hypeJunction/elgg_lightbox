<a name="3.1.0"></a>
## 3.1.0 (2026-04-20)

### Elgg 5.x migration

* Migrated plugin to Elgg 5.x. Target PHP >= 8.1.
* `composer.json` bumped to `elgg/elgg ^5.0` and `php >=8.1`.
* Docker infra updated: PHP 8.1-apache, Elgg ~5.1.0, MySQL 8.0.
* `lightbox.js`: replaced deprecated `elgg.trigger_hook()` with `hooks.trigger()` from the `elgg/hooks` AMD module (global `elgg.trigger_hook` removed in Elgg 5.x).
* No hooks/events registered — `elgg-plugin.php` required no key renames.
* All 3 PHPUnit integration tests pass on Elgg 5.x.

<a name="3.0.0"></a>
## 3.0.0 (2026-04-14)

### Elgg 4.x migration

* Migrated plugin to Elgg 4.x (via 3.x). Target PHP >= 7.4.
* `manifest.xml` removed — `composer.json` is now the sole metadata source.
* `composer.json` bumped to `composer/installers ^2.0` with `config.allow-plugins` block.
* License SPDX id normalized to `GPL-2.0-or-later`.
* `Bootstrap::init()` now calls `elgg_require_js('elgg/lightbox')` so the AMD module is actually loaded on pages.
* Added PHPUnit integration test suite (3 tests, 18 assertions) and Playwright smoke.
* Added per-plugin Docker test stack under `docker/` with in-network `ELGG_SITE_URL=http://elgg/` so Playwright and Elgg agree on origin.
* `ARCHITECTURE.md` added.

<a name="2.1.2"></a>
## [2.1.2](https://github.com/hypeJunction/elgg_lightbox/compare/2.1.1...v2.1.2) (2016-04-26)


### Bug Fixes

* **assets:** fix css and js bootstraping ([6483674](https://github.com/hypeJunction/elgg_lightbox/commit/6483674))



<a name="2.1.1"></a>
## [2.1.1](https://github.com/hypeJunction/elgg_lightbox/compare/2.1.0...v2.1.1) (2016-04-14)


### Bug Fixes

* **css:** fix css registration and extension ([1483744](https://github.com/hypeJunction/elgg_lightbox/commit/1483744))



<a name="2.1.0"></a>
# [2.1.0](https://github.com/hypeJunction/elgg_lightbox/compare/2.0.1...v2.1.0) (2016-04-14)


### Features

* **css:** replace core theme view and integrate with mrclay_combiner ([9d9aac9](https://github.com/hypeJunction/elgg_lightbox/commit/9d9aac9))
* **grunt:** fix automated releases ([47f7d60](https://github.com/hypeJunction/elgg_lightbox/commit/47f7d60))



