<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Vogue
 */

function customizer_library_vogue_options() {
	
	$primary_color = '#F061A8';
	$secondary_color = '#EA1B82';
	
	$body_font_color = '#3C3C3C';
	$heading_font_color = '#000000';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;
    
    
    // Layout Options
    $section = 'vogue-layouts-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Layout Options', 'vogue' ),
        'priority' => '20'
    );
    
    $options['vogue-btt-button'] = array(
        'id' => 'vogue-btt-button',
        'label'   => __( 'Enable a Back To Top button', 'vogue' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    $options['vogue-titlebar-centered'] = array(
        'id' => 'vogue-titlebar-centered',
        'label'   => __( 'Center Align Page Titles', 'vogue' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    $choices = array(
        'vogue-page-fimage-layout-none' => __( 'None', 'vogue' ),
        'vogue-page-fimage-layout-standard' => __( 'Standard', 'vogue' )
    );
    $options['vogue-page-fimage-layout'] = array(
        'id' => 'vogue-page-fimage-layout',
        'label'   => __( 'Featured Image Layout', 'vogue' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'description' => __( 'Select the layouts you want for the Featured Image for Blog Posts & Pages', 'vogue' ),
        'default' => 'vogue-page-fimage-layout-none'
    );
    
    $options['vogue-upsell-layout'] = array(
        'id' => 'vogue-upsell-layout',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Site Boxed / Full Width layouts<br />- Set custom Site width<br />- Set custom Sidebar width<br />- Remove Page Titles<br />- Page Featured Image displayed as full width banner<br /><br />- Set WooCommerce page to full width<br />- Set WooCommerce archive & single pages to full width', 'vogue' )
    );
    
    
	// Header Layout Options
	$section = 'vogue-header-section';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Header Options', 'vogue' ),
		'priority' => '30'
	);
	
	$options['vogue-header-remove-topbar'] = array(
		'id' => 'vogue-header-remove-topbar',
		'label'   => __( 'Remove the Top Bar', 'vogue' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);
    
    $choices = array(
        'vogue-header-layout-one' => __( 'Header Centered', 'vogue' ),
        'vogue-header-layout-three' => __( 'Header Standard', 'vogue' )
    );
    $options['vogue-header-layout'] = array(
        'id' => 'vogue-header-layout',
        'label'   => __( 'Header Layout', 'vogue' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'vogue-header-layout-one',
        'description' => __( 'Upload <b>Site logo</b> at <strong><i>Customize -> Header Image</i></strong>', 'vogue' )
    );
	
	$options['vogue-header-menu-text'] = array(
		'id' => 'vogue-header-menu-text',
		'label'   => __( 'Menu Button Text', 'vogue' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'menu',
		'description' => __( 'This is the text for the mobile menu button', 'vogue' )
	);
	
	$options['vogue-header-search'] = array(
        'id' => 'vogue-header-search',
        'label'   => __( 'Hide Search', 'vogue' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['vogue-header-hide-social'] = array(
        'id' => 'vogue-header-hide-social',
        'label'   => __( 'Hide Social Links', 'vogue' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['vogue-header-hide-add'] = array(
        'id' => 'vogue-header-hide-add',
        'label'   => __( 'Hide Address', 'vogue' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['vogue-header-hide-no'] = array(
        'id' => 'vogue-header-hide-no',
        'label'   => __( 'Hide Phone Number', 'vogue' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    $options['vogue-upsell-header'] = array(
        'id' => 'vogue-upsell-header',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Offers 4 different header layouts<br />- Sticky Navigation<br />- Remove header splitting lines<br />- Change header density - Comfortable or Compact<br />- Remove the WooCommerce Cart', 'vogue' )
    );
    
    
    // Slider Settings
    $section = 'vogue-slider-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Slider Options', 'vogue' ),
        'priority' => '35'
    );
    
    $choices = array(
        'vogue-slider-default' => __( 'Default Slider', 'vogue' ),
        'vogue-meta-slider' => __( 'Meta Slider', 'vogue' ),
        'vogue-no-slider' => __( 'None', 'vogue' )
    );
    $options['vogue-slider-type'] = array(
        'id' => 'vogue-slider-type',
        'label'   => __( 'Choose a Slider', 'vogue' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'vogue-slider-default'
    );
    $options['vogue-slider-cats'] = array(
        'id' => 'vogue-slider-cats',
        'label'   => __( 'Slider Categories', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you want to display in the slider. Eg: "13,17,19" (no spaces and only comma\'s)<br /><br />Get the ID at <b>Posts -> Categories</b>.<br /><br />Or <a href="https://kairaweb.com/documentation/setting-up-the-default-slider/" target="_blank"><b>See more instructions here</b></a>', 'vogue' )
    );
    $options['vogue-meta-slider-shortcode'] = array(
        'id' => 'vogue-meta-slider-shortcode',
        'label'   => __( 'Slider Shortcode', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the shortcode give by the slider plugin', 'vogue' )
    );
    $choices = array(
        'crossfade' => __( 'Cross Fade', 'vogue' ),
        'cover-fade' => __( 'Cover Fade', 'vogue' ),
        'uncover-fade' => __( 'Uncover Fade', 'vogue' ),
        'cover' => __( 'Cover', 'vogue' ),
        'scroll' => __( 'Scroll', 'vogue' )
    );
    $options['vogue-slider-scroll-effect'] = array(
        'id' => 'vogue-slider-scroll-effect',
        'label'   => __( 'Slider Scroll Effect', 'vogue' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'uncover-fade'
    );
    
    $options['vogue-upsell-slider'] = array(
        'id' => 'vogue-upsell-slider',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Set each slide to have custom url link<br />- Change slider size - Small / Medium / Large<br />- Scroll Duration<br />- Remove slider title/text<br />- Link slide To post<br />- Stop auto scroll<br /><br />- Change slider text and block colors', 'vogue' )
    );


	// Colors
	$section = 'colors';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Colors', 'vogue' ),
		'priority' => '80'
	);

	$options['vogue-primary-color'] = array(
		'id' => 'vogue-primary-color',
		'label'   => __( 'Primary Color', 'vogue' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
	);
	$options['vogue-secondary-color'] = array(
		'id' => 'vogue-secondary-color',
		'label'   => __( 'Secondary Color', 'vogue' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $secondary_color,
	);
    $choices = array(
        'vogue-mobile-nav-skin-dark' => __( 'Dark Skin', 'vogue' ),
        'vogue-mobile-nav-skin-light' => __( 'Light Skin', 'vogue' )
    );
    $options['vogue-mobile-nav-skin'] = array(
        'id' => 'vogue-mobile-nav-skin',
        'label'   => __( 'Mobile Navigation Colors', 'vogue' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'description' => __( 'Premium includes custom color settings for the mobile navigation', 'vogue' ),
        'default' => 'vogue-mobile-nav-skin-dark'
    );
    
    $options['vogue-upsell-color'] = array(
        'id' => 'vogue-upsell-color',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Advanced color settings for header<br />- Advanced color settings for Top Bar & Navigation<br />- Advanced color settings for footer<br />- Custom color settings for mobile navigation', 'vogue' )
    );
    

	// Font Options
	$section = 'vogue-typography-section';
	$font_choices = customizer_library_get_font_choices();

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Font Options', 'vogue' ),
		'priority' => '80'
	);

	$options['vogue-body-font'] = array(
		'id' => 'vogue-body-font',
		'label'   => __( 'Body Font', 'vogue' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans'
	);
	$options['vogue-body-font-color'] = array(
		'id' => 'vogue-body-font-color',
		'label'   => __( 'Body Font Color', 'vogue' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $body_font_color,
	);

	$options['vogue-heading-font'] = array(
		'id' => 'vogue-heading-font',
		'label'   => __( 'Heading Font', 'vogue' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Lato'
	);
	$options['vogue-heading-font-color'] = array(
		'id' => 'vogue-heading-font-color',
		'label'   => __( 'Heading Font Color', 'vogue' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $heading_font_color,
	);
    
    $options['vogue-upsell-typography'] = array(
        'id' => 'vogue-upsell-typography',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Select custom font for site title<br />- Change site title size<br />- Change site tagline size<br />- Set spacing for site tite & tagline<br /><br />- Custom settings for uploaded logo', 'vogue' )
    );
	
	
	// Blog Settings
    $section = 'vogue-blog-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog Options', 'vogue' ),
        'priority' => '50'
    );
    
    $choices = array(
        'blog-left-layout' => __( 'Left Layout', 'vogue' ),
        'blog-right-layout' => __( 'Right Layout', 'vogue' ),
        'blog-top-layout' => __( 'Top Layout', 'vogue' ),
        'blog-alt-layout' => __( 'Alternate Layout', 'vogue' )
    );
    $options['vogue-blog-layout'] = array(
        'id' => 'vogue-blog-layout',
        'label'   => __( 'Blog Posts Layout', 'vogue' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'description' => __( 'This uses the "Large Size" image cut', 'vogue' ),
        'default' => 'blog-left-layout'
    );
    $options['vogue-blog-cats'] = array(
        'id' => 'vogue-blog-cats',
        'label'   => __( 'Exclude Blog Categories', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you\'d like to EXCLUDE from the Blog, enter only the ID\'s with a minus sign (-) before them, separated by a comma (,)<br />Eg: "-13, -17, -19"<br /><br />If you enter the ID\'s without the minus then it\'ll show ONLY posts in those categories.<br /><br />Get the ID at <b>Posts -> Categories</b>.', 'vogue' )
    );
    
    $options['vogue-upsell-blog'] = array(
        'id' => 'vogue-upsell-blog',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Display Full Post or Summary<br />- Includes blog grid layout<br />- Select grid layout columns<br />- Blog image shape - Normal or Square<br />- Set blog to full width<br />- Set archive & single pages to full width<br />- Remove meta text<br />- Remove categories/tags on blog list<br />- Blog single page featured image as page banner<br />- Remove single page titles', 'vogue' )
    );
	
	
	// Footer Settings
    $section = 'vogue-footer-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer Layout Options', 'vogue' ),
        'priority' => '85'
    );
    
    $choices = array(
        'vogue-footer-layout-social' => __( 'Social Layout', 'vogue' ),
        'vogue-footer-layout-standard' => __( 'Standard Layout', 'vogue' )
    );
    $options['vogue-footer-layout'] = array(
        'id' => 'vogue-footer-layout',
        'label'   => __( 'Footer Layout', 'vogue' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'vogue-footer-layout-social'
    );
    $options['vogue-footer-bottombar'] = array(
        'id' => 'vogue-footer-bottombar',
        'label'   => __( 'Remove the Bottom Bar', 'vogue' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['vogue-footer-hide-social'] = array(
        'id' => 'vogue-footer-hide-social',
        'label'   => __( 'Hide Social Links', 'vogue' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    
    $options['vogue-upsell-footer'] = array(
        'id' => 'vogue-upsell-footer',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Offers 5 footer layouts<br />- Advanced custom footer layout, select columns & manually adjust column widths<br />- Remove/Edit attribution text', 'vogue' )
    );
	
	
	// Site Text Settings
    $section = 'vogue-website-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Website Text', 'vogue' ),
        'priority' => '80'
    );
    
    $options['vogue-website-site-add'] = array(
        'id' => 'vogue-website-site-add',
        'label'   => __( 'Header Address', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'vogue' ),
        'description' => __( 'This is the address in the header top bar and the social footer', 'vogue' )
    );
    $options['vogue-website-head-no'] = array(
        'id' => 'vogue-website-head-no',
        'label'   => __( 'Header Phone Number', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Call Us: +2782 444 YEAH', 'vogue' ),
        'description' => __( 'This is the phone number in the header top bar', 'vogue' )
    );
    
    $options['vogue-website-error-head'] = array(
        'id' => 'vogue-website-error-head',
        'label'   => __( '404 Error Page Heading', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Oops! <span>404</span>', 'vogue'),
        'description' => __( 'Enter the heading for the 404 Error page', 'vogue' )
    );
    $options['vogue-website-error-msg'] = array(
        'id' => 'vogue-website-error-msg',
        'label'   => __( 'Error 404 Message', 'vogue' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'It looks like that page does not exist. <br />Return home or try a search', 'vogue'),
        'description' => __( 'Enter the default text on the 404 error page (Page not found)', 'vogue' )
    );
    $options['vogue-website-nosearch-msg'] = array(
        'id' => 'vogue-website-nosearch-msg',
        'label'   => __( 'No Search Results', 'vogue' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vogue'),
        'description' => __( 'Enter the default text for when no search results are found', 'vogue' )
    );
    
    $options['vogue-upsell-website'] = array(
        'id' => 'vogue-upsell-website',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Change attribution/copyright text to your own', 'vogue' )
    );
	
	
	// Social Settings
    $section = 'vogue-social-section';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Social Links', 'vogue' ),
        'priority' => '80'
    );
    
    $options['vogue-social-email'] = array(
        'id' => 'vogue-social-email',
        'label'   => __( 'Email Address', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['vogue-social-facebook'] = array(
        'id' => 'vogue-social-facebook',
        'label'   => __( 'Facebook', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['vogue-social-twitter'] = array(
        'id' => 'vogue-social-twitter',
        'label'   => __( 'Twitter', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['vogue-social-skype'] = array(
        'id' => 'vogue-social-skype',
        'label'   => __( 'Skype Name', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['vogue-social-linkedin'] = array(
        'id' => 'vogue-social-linkedin',
        'label'   => __( 'LinkedIn', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['vogue-social-tumblr'] = array(
        'id' => 'vogue-social-tumblr',
        'label'   => __( 'Tumblr', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['vogue-social-flickr'] = array(
        'id' => 'vogue-social-flickr',
        'label'   => __( 'Flickr', 'vogue' ),
        'section' => $section,
        'type'    => 'text',
    );
    
    $options['vogue-upsell-social'] = array(
        'id' => 'vogue-upsell-social',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( '<b>Premium Extra Features:</b><br />- Over 22 different social profile links available<br />- Setting to add any required social icon<br />- Or let us know which links you need and we\'ll add it!', 'vogue' )
    );
	

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_vogue_options' );
