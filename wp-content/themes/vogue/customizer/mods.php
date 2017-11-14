<?php
/**
 * Functions used to implement options
 *
 * @package Customizer Library Vogue
 */

/**
 * Enqueue Google Fonts Example
 */
function customizer_vogue_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'vogue-body-font', customizer_library_get_default( 'vogue-body-font' ) ),
		get_theme_mod( 'vogue-heading-font', customizer_library_get_default( 'vogue-heading-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'customizer_vogue_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'customizer_vogue_fonts' );
