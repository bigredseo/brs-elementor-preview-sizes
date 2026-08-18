<?php
/**
 * Plugin Name: BRS Elementor Preview Sizes
 * Description: A tiny WordPress plugin that changes the default visual preview widths inside the Elementor editor.
 * Version: 0.1.0
 * Author: Big Red SEO
 * Author URI: https://www.bigredseo.com/
 * Text Domain: brs-elementor-preview-sizes
 * Requires at least: 6.5
 * Requires PHP: 8.2
 */

defined( 'ABSPATH' ) || exit;

define( 'BRS_ELEMENTOR_PREVIEW_SIZES_VERSION', '0.1.0' );
define( 'BRS_ELEMENTOR_PREVIEW_SIZES_FILE', __FILE__ );

require_once plugin_dir_path( __FILE__ ) . 'includes/plugin-hooks.php';
