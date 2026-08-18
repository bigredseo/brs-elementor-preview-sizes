<?php
/**
 * Runtime hooks for BRS Elementor Preview Sizes.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Initialize the plugin.
 *
 * Add runtime hooks here or replace this file with the plugin's classes.
 *
 * @return void
 */
function brs_elementor_preview_sizes_init(): void {
	// Register plugin hooks here.
}

add_action( 'plugins_loaded', 'brs_elementor_preview_sizes_init' );
