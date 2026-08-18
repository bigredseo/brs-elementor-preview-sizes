# Technical Changelog

## 0.1.0 - 2026-08-18

- Created standalone `BRS Elementor Preview Sizes` plugin.
- Moved Elementor editor preview logic into:
  - `includes/elementor-preview-sizes.php`
  - `assets/js/elementor-preview-sizes.js`
- Added configurable mobile and tablet preview widths passed from PHP to JavaScript.
- Added Elementor editor-only script loading via `elementor/editor/after_enqueue_scripts`.
- Added automatic public GitHub update support using `BRS_Public_GitHub_Updater`.
- Configured GitHub Releases for `bigredseo/brs-elementor-preview-sizes`.