<?php
/**
 * Plugin Name: BRS Elementor Preview Sizes
 * Description: Sets more useful default preview widths inside the Elementor editor without changing frontend.
 * Version: 0.1.0
 * Author: Big Red SEO
 * Author URI: https://www.bigredseo.com/
 * Plugin URI: https://github.com/bigredseo/brs-elementor-preview-sizes
 * Update URI: https://github.com/bigredseo/brs-elementor-preview-sizes
 * Text Domain: brs-elementor-preview-sizes
 * Requires at least: 6.5
 * Requires PHP: 8.2
 */

defined( 'ABSPATH' ) || exit;

define( 'BRS_ELEMENTOR_PREVIEW_SIZES_VERSION', '0.1.0' );
define( 'BRS_ELEMENTOR_PREVIEW_SIZES_FILE', __FILE__ );

require_once plugin_dir_path( __FILE__ ) . 'includes/elementor-preview-sizes.php';

/**
 * Load the BRS public GitHub updater.
 */
if ( ! class_exists( 'BRS_Public_GitHub_Updater', false ) ) {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-brs-public-github-updater.php';
}

/**
 * Register this plugin with the GitHub updater.
 */
if ( class_exists( 'BRS_Public_GitHub_Updater', false ) ) {
	BRS_Public_GitHub_Updater::register(
		array(
			'plugin_file'  => __FILE__,
			'owner'        => 'bigredseo',
			'repository'   => 'brs-elementor-preview-sizes',
			'asset_name'   => 'brs-elementor-preview-sizes-{version}.zip',
			'slug'         => 'brs-elementor-preview-sizes',
			'name'         => 'BRS Elementor Preview Sizes',
			'description'  => '<p>Sets more useful default preview widths inside the Elementor editor without changing frontend breakpoints.</p>',
			'author'       => 'Big Red SEO',
			'homepage'     => 'https://www.bigredseo.com/',
			'requires_php' => '8.2',
			'requires_wp'  => '6.5',
			'tested_wp'    => '',
		)
	);
}