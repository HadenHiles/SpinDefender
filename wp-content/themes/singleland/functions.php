<?php
/**
 * singleland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package singleland
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! defined( 'SINGLELAND_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SINGLELAND_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! defined( 'SINGLELAND_THEMEROOT' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SINGLELAND_THEMEROOT', get_template_directory_uri());
}

if ( ! defined( 'SINGLELAND_THEMEROOT_DIR' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SINGLELAND_THEMEROOT_DIR', get_template_directory());
}

if ( ! defined( 'SINGLELAND_IMAGES' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SINGLELAND_IMAGES', SINGLELAND_THEMEROOT.'/assets/images');
}

if ( ! defined( 'SINGLELAND_CSS' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SINGLELAND_CSS', SINGLELAND_THEMEROOT.'/assets/css');
}

if ( ! defined( 'SINGLELAND_JS' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SINGLELAND_JS', SINGLELAND_THEMEROOT.'/assets/js');
}

if ( ! defined( 'SINGLELAND_VEND' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SINGLELAND_VEND', SINGLELAND_THEMEROOT.'/assets/vendors');
}


if ( ! function_exists( 'singleland_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function singleland_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on singleland, use a find and replace
		 * to change 'singleland' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'singleland', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main_menu' => esc_html__( 'Main Menu', 'singleland' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'singleland_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		//  add theme support WooCommerce
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

	}
endif;
add_action( 'after_setup_theme', 'singleland_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function singleland_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'singleland_content_width', 640 );
}
add_action( 'after_setup_theme', 'singleland_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function singleland_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'singleland' ),
			'id'            => 'blog_sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'singleland' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Shop Sidebar', 'singleland' ),
			'id'            => 'shop_sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'singleland' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Footer Widgets
    register_sidebar(array(
        'name'          => esc_html__('Footer widgets', 'singleland'),
        'description'   => esc_html__('Add widgets here for Footer widgets area', 'singleland'),
        'id'            => 'footer_widgets',
        'before_widget' => '<div id="%1$s" class="footer-widget col-lg-3 col-sm-6 wow fadeInDown %2$s" data-wow-delay=".3s">
                            <div class="single_footer_widget">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
}
add_action( 'widgets_init', 'singleland_widgets_init' );

/**
 * singleland required function init  
 */
require_once SINGLELAND_THEMEROOT_DIR . '/inc/init.php'; 

/**
 *  singleland options and metabox init 
 */

require_once SINGLELAND_THEMEROOT_DIR . '/lib/init.php'; 


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

// add_action('init', 'add_new_star_rating');
// function add_new_star_rating(){
// 	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 6 );
// }
// Remove the product description Title
add_filter( 'woocommerce_product_description_heading', '__return_null' );
add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );



function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 3;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}

if(!function_exists('singleland_extention_wp_kses')) {
 
    function singleland_extention_wp_kses ( $data ) {
 
        $allow_html = array(
            'a' => array(
                'href' => array(),
                'title' => array()
            ),
            'p' => array(
                'cite' => array(),
                'title' => array(),
            ),
            'br' => array(),
            'em' => array(),
            'strong' => array(),
            'h1' => array(),
            'h2' => array(),
            'h3' => array(),
            'h4' => array(),
            'h5' => array(),
            'h6' => array(),
            'i' => array(),
            'strong' => array(),
            'code' => array(),
            'li' => array(
                'class' => array(),
            ),
            'ol' => array(
                'class' => array(),
            ),
            'ul' => array(
                'class' => array(),
            ),
            'img' => array(
                'alt'    => array(),
                'class'  => array(),
                'height' => array(),
                'src'    => array(),
                'width'  => array(),
            ),
            'span'   => array()
        );
 
      return  wp_kses($data, $allow_html);
    }
}