<?php
/**
 * Elementor preview size customizations.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Load the custom preview sizing script inside the Elementor editor.
 *
 * @return void
 */
function brs_elementor_preview_sizes_enqueue_editor_script(): void {

	wp_enqueue_script(
		'brs-elementor-preview-sizes',
		plugin_dir_url( BRS_ELEMENTOR_PREVIEW_SIZES_FILE ) . 'assets/js/elementor-preview-sizes.js',
		array( 'elementor-editor' ),
		BRS_ELEMENTOR_PREVIEW_SIZES_VERSION,
		true
	);

	// Add the preview sizes to the script as a global variable.
	wp_add_inline_script(
		'brs-elementor-preview-sizes',
		'window.BRSElementorPreviewSizes = ' . wp_json_encode(
			array(
				'mobile' => 420,
				'tablet' => 820,
			)
		) . ';',
		'before'
	);
}

add_action(
	'elementor/editor/after_enqueue_scripts',
	'brs_elementor_preview_sizes_enqueue_editor_script',
	100
);