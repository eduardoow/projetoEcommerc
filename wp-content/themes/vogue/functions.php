<?php
/**
 * Vogue functions and definitions
 *
 * @package Vogue
 */
define( 'VOGUE_THEME_VERSION' , '1.3.09' );

// Get help / Premium Page
require get_template_directory() . '/upgrade/upgrade.php';

// Load WP included scripts
require get_template_directory() . '/includes/inc/template-tags.php';
require get_template_directory() . '/includes/inc/extras.php';
require get_template_directory() . '/includes/inc/jetpack.php';
require get_template_directory() . '/includes/inc/customizer.php';

// Load Customizer Library scripts
require get_template_directory() . '/customizer/customizer-options.php';
require get_template_directory() . '/customizer/customizer-library/customizer-library.php';
require get_template_directory() . '/customizer/styles.php';
require get_template_directory() . '/customizer/mods.php';

// Load TGM plugin class
require_once get_template_directory() . '/includes/inc/class-tgm-plugin-activation.php';
// Add customizer Upgrade class
require_once( get_template_directory() . '/includes/vogue-pro/class-customize.php' );

if ( ! function_exists( 'vogue_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vogue_setup() {
	
	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 900; /* pixels */
	}

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on vogue, use a find and replace
	 * to change 'vogue' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'vogue', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'vogue_blog_img_side', 500, 380, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'vogue' ),
        'top-bar-menu' => __( 'Top Bar Menu', 'vogue' ),
        'footer-bar' => __( 'Footer Bar Menu', 'vogue' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	
	// The custom header is used for the logo
	add_theme_support( 'custom-header', array(
        'default-image' => '',
		'width'         => 280,
		'height'        => 145,
		'flex-width'    => true,
		'flex-height'   => true,
		'header-text'   => false,
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vogue_custom_background_args', array(
		'default-color' => 'F9F9F9',
		'default-image' => '',
	) ) );
	
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
endif; // vogue_setup
add_action( 'after_setup_theme', 'vogue_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function vogue_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vogue' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar(array(
		'name' => __( 'Vogue Footer Standard', 'vogue' ),
		'id' => 'vogue-site-footer-standard',
        'description' => __( 'The footer will divide into however many widgets are placed here.', 'vogue' )
	));
}
add_action( 'widgets_init', 'vogue_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vogue_scripts() {
	wp_enqueue_style( 'vogue-body-font-default', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic', array(), VOGUE_THEME_VERSION );
	wp_enqueue_style( 'vogue-heading-font-default', '//fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic', array(), VOGUE_THEME_VERSION );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/includes/font-awesome/css/font-awesome.css', array(), '4.6.3' );
	wp_enqueue_style( 'vogue-style', get_stylesheet_uri(), array(), VOGUE_THEME_VERSION );
	
	if ( get_theme_mod( 'vogue-header-layout' ) == 'vogue-header-layout-three' ) :
		wp_enqueue_style( 'vogue-header-style-three', get_template_directory_uri().'/templates/css/header-three.css', array(), VOGUE_THEME_VERSION );
	else :
		wp_enqueue_style( 'vogue-header-style-one', get_template_directory_uri().'/templates/css/header-one.css', array(), VOGUE_THEME_VERSION );
	endif;
	
	if ( vogue_is_woocommerce_activated() ) :
		wp_enqueue_style( 'vogue-standard-woocommerce-style', get_template_directory_uri().'/templates/css/woocommerce-standard-style.css', array(), VOGUE_THEME_VERSION );
	endif;
	
	if ( get_theme_mod( 'vogue-footer-layout', false ) == 'vogue-footer-layout-standard' ) :
	    wp_enqueue_style( 'vogue-footer-standard-style', get_template_directory_uri().'/templates/css/footer-standard.css', array(), VOGUE_THEME_VERSION );
	else :
		wp_enqueue_style( 'vogue-footer-social-style', get_template_directory_uri().'/templates/css/footer-social.css', array(), VOGUE_THEME_VERSION );
	endif;
	
	wp_enqueue_style( 'vogue-footer-social-style', get_template_directory_uri().'/templates/css/footer-social.css', array(), VOGUE_THEME_VERSION );

	wp_enqueue_script( 'caroufredsel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array('jquery'), VOGUE_THEME_VERSION, true );
	
	wp_enqueue_script( 'vogue-customjs', get_template_directory_uri() . '/js/custom.js', array('jquery'), VOGUE_THEME_VERSION, true );
	
	wp_enqueue_script( 'vogue-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), VOGUE_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vogue_scripts' );

/**
 * Add theme stying to the theme content editor
 */
function vogue_add_editor_styles() {
    add_editor_style( 'style-theme-editor.css' );
}
add_action( 'admin_init', 'vogue_add_editor_styles' );

/**
 * Enqueue admin styling.
 */
function vogue_load_admin_script( $hook ) {
    wp_enqueue_style( 'vogue-admin-css', get_template_directory_uri() . '/upgrade/css/admin-css.css' );
}
add_action( 'admin_enqueue_scripts', 'vogue_load_admin_script' );

/**
 * Enqueue vogue custom customizer styling.
 */
function vogue_load_customizer_script() {
	wp_enqueue_script( 'vogue-customizer-js', get_template_directory_uri() . '/customizer/customizer-library/js/customizer-custom.js', array('jquery'), VOGUE_THEME_VERSION, true );
    wp_enqueue_style( 'vogue-customizer-css', get_template_directory_uri() . '/customizer/customizer-library/css/customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'vogue_load_customizer_script' );

/**
 * Check if WooCommerce exists.
 */
if ( ! function_exists( 'vogue_is_woocommerce_activated' ) ) :
	function vogue_is_woocommerce_activated() {
	    if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
endif; // vogue_is_woocommerce_activated

// If WooCommerce exists include ajax cart
if ( vogue_is_woocommerce_activated() ) {
	require get_template_directory() . '/includes/inc/woocommerce-header-inc.php';
}

/**
 * Adjust is_home query if vogue-blog-cats is set
 */
function vogue_set_blog_queries( $query ) {
    $blog_query_set = '';
    if ( get_theme_mod( 'vogue-blog-cats', false ) ) {
        $blog_query_set = get_theme_mod( 'vogue-blog-cats' );
    }
    
    if ( $blog_query_set ) {
        // do not alter the query on wp-admin pages and only alter it if it's the main query
        if ( !is_admin() && $query->is_main_query() ){
            if ( is_home() ){
                $query->set( 'cat', $blog_query_set );
            }
        }
    }
}
add_action( 'pre_get_posts', 'vogue_set_blog_queries' );

/**
 * Exclude slider category from sidebar widgets
 */
function vogue_exclude_slider_categories_widget( $args ) {
	$exclude = ''; // ID's of the categories to exclude
	if ( get_theme_mod( 'vogue-slider-cats', false ) ) {
        $exclude = esc_attr( get_theme_mod( 'vogue-slider-cats' ) );
    }
	$args['exclude'] = $exclude;
	return $args;
}
add_filter( 'widget_categories_args', 'vogue_exclude_slider_categories_widget' );

/**
 * Add classes to the blog list for styling.
 */
function vogue_add_blog_post_classes ( $classes ) {
	global $current_class;
	
	if ( is_home() || is_archive() || is_search() ) :
		$vogue_blog_layout = sanitize_html_class( 'blog-left-layout' );
		if ( get_theme_mod( 'vogue-blog-layout' ) ) {
		    $vogue_blog_layout = sanitize_html_class( get_theme_mod( 'vogue-blog-layout' ) );
		}
		$classes[] = $vogue_blog_layout;
		
		$classes[] = $current_class;
		$current_class = ( $current_class == 'blog-alt-odd' ) ? sanitize_html_class( 'blog-alt-even' ) : sanitize_html_class( 'blog-alt-odd' );
	endif;
	
	return $classes;
}
global $current_class;
$current_class = 'blog-alt-odd';
add_filter ( 'post_class' , 'vogue_add_blog_post_classes' );

/**
 * Add classes to the admin body class
 */
function vogue_add_admin_body_class() {
	$vogue_admin_class = '';
	
	if ( get_theme_mod( 'vogue-footer-layout' ) ) {
		$vogue_admin_class = sanitize_html_class( get_theme_mod( 'vogue-footer-layout' ) );
	} else {
		$vogue_admin_class = sanitize_html_class( 'vogue-footer-layout-social' );
	}
	
	return $vogue_admin_class;
}
add_filter( 'admin_body_class', 'vogue_add_admin_body_class' );

/**
 * Display recommended plugins with the TGM class
 */
function vogue_register_required_plugins() {
	$plugins = array(
		// The recommended WordPress.org plugins.
		array(
			'name'      => 'Easy Theme Upgrade (For upgrading to Vogue Premium)',
			'slug'      => 'easy-theme-and-plugin-upgrades',
			'required'  => false,
		),
		array(
			'name'      => 'Page Builder',
			'slug'      => 'siteorigin-panels',
			'required'  => false,
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => 'Widgets Bundle',
			'slug'      => 'siteorigin-panels',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Breadcrumb NavXT',
			'slug'      => 'breadcrumb-navxt',
			'required'  => false,
		),
		array(
			'name'      => 'Meta Slider',
			'slug'      => 'ml-slider',
			'required'  => false,
		)
	);
	$config = array(
		'id'           => 'vogue',
		'menu'         => 'tgmpa-install-plugins',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'vogue_register_required_plugins' );

/**
 * Register a custom Post Categories ID column
 */
function vogue_edit_cat_columns( $vogue_cat_columns ) {
    $vogue_cat_in = array( 'cat_id' => 'Category ID <span class="cat_id_note">For the Default Slider</span>' );
    $vogue_cat_columns = vogue_cat_columns_array_push_after( $vogue_cat_columns, $vogue_cat_in, 0 );
    return $vogue_cat_columns;
}
add_filter( 'manage_edit-category_columns', 'vogue_edit_cat_columns' );

/**
 * Print the ID column
 */
function vogue_cat_custom_columns( $value, $name, $cat_id ) {
    if( 'cat_id' == $name ) 
        echo $cat_id;
}
add_filter( 'manage_category_custom_column', 'vogue_cat_custom_columns', 10, 3 );

/**
 * Insert an element at the beggining of the array
 */
function vogue_cat_columns_array_push_after( $src, $vogue_cat_in, $pos ) {
    if ( is_int( $pos ) ) {
        $R = array_merge( array_slice( $src, 0, $pos + 1 ), $vogue_cat_in, array_slice( $src, $pos + 1 ) );
    } else {
        foreach ( $src as $k => $v ) {
            $R[$k] = $v;
            if ( $k == $pos )
                $R = array_merge( $R, $vogue_cat_in );
        }
    }
    return $R;
}
