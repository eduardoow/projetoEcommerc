<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Vogue
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function vogue_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'vogue_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function vogue_jetpack_setup
add_action( 'after_setup_theme', 'vogue_jetpack_setup' );

function vogue_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'templates/contents/content' );
	}
} // end function vogue_infinite_scroll_render