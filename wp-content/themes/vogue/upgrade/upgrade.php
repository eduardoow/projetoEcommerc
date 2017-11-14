<?php
/**
 * Functions for users wanting to upgrade to premium
 *
 * @package Vogue
 */

/**
 * Display the upgrade to Premium page & load styles.
 */
function vogue_premium_admin_menu() {
    global $vogue_upgrade_page;
    $vogue_upgrade_page = add_theme_page( __( 'About Vogue', 'vogue' ), '<span class="premium-link">' . __( 'About Vogue', 'vogue' ) . '</span>', 'edit_theme_options', 'theme_info', 'vogue_render_upgrade_page' );
}
add_action( 'admin_menu', 'vogue_premium_admin_menu' );

/**
 * Enqueue admin stylesheet only on upgrade page.
 */
function vogue_load_upgrade_page_scripts() {
    global $pagenow;
	if ( $pagenow == 'themes.php' ) {
		wp_enqueue_style( 'vogue-upgrade-css', get_template_directory_uri() . '/upgrade/css/upgrade-admin.css' );
	    wp_enqueue_script( 'caroufredsel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), VOGUE_THEME_VERSION, true );
	    wp_enqueue_script( 'vogue-upgrade-js', get_template_directory_uri() . '/upgrade/js/upgrade-custom.js', array( 'jquery' ), VOGUE_THEME_VERSION, true );
	}
}
add_action( 'admin_enqueue_scripts', 'vogue_load_upgrade_page_scripts' );

/**
 * Render the premium page to download premium upgrade plugin
 */
function vogue_render_upgrade_page() {
	get_template_part( 'upgrade/tpl/upgrade-page' );
}
