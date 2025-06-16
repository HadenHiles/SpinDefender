<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
class singleland_Register_Plugins {

	public function __construct() {
		add_filter( 'insight_core_tgm_plugins', [ $this, 'register_required_plugins' ] );

		//add_filter( 'insight_core_compatible_plugins', [ $this, 'register_compatible_plugins' ] );
	}

	public function register_required_plugins( $plugins ) {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$new_plugins = array(

			array(
				'name'               => esc_html__( 'Singleland Core', 'singleland' ), // The plugin name.
				'slug'               => 'singleland-core', // The plugin slug (typically the folder name).
				'source'             => 'https://singleland.droitlab.com/downloadfile/singleland-core_1.0.4.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
				'version'            => '1.0.4' 
			),

			array(
				'name'               => esc_html__( 'Droit Addons For Elementor', 'singleland' ), // The plugin name.
				'slug'               => 'droit-elementor-addons', // The plugin slug (typically the folder name).
				'source'             => 'https://saasland.droitlab.com/downloadfile/droit-elementor-addons_3.1.5.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
				'version'            => ''
			),

			array(
				'name'               => esc_html__( 'Droit Dark', 'singleland' ), // The plugin name.
				'slug'               => 'droit-dark-mode', // The plugin slug (typically the folder name).
				'source'             => 'https://dlcarspa.droitlab.com/wp-content/plugins/droit-dark-mode.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
				'version'            => ''
			),
	
			array(
				'name'      => esc_html__( 'Elementor', 'singleland' ),
				'slug'      => 'elementor',
				'required'  => true,
			),
	
			array(
				'name'               => esc_html__( 'woocommerce', 'singleland' ),
				'slug'               => 'woocommerce',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'YITH WooCommerce Compare', 'singleland' ),
				'slug'               => 'yith-woocommerce-compare',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Perfect Brands for WooCommerce', 'singleland' ),
				'slug'               => 'perfect-woocommerce-brands',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'YITH WooCommerce Wishlist', 'singleland' ),
				'slug'               => 'yith-woocommerce-wishlist',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Advanced Custom Fields', 'singleland' ),
				'slug'               => 'advanced-custom-fields',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Redux Framework', 'singleland' ),
				'slug'               => 'redux-framework',
				'required'           => true,
			),
	
			array(
				'name'      => esc_html__( 'Contact Form 7', 'singleland' ),
				'slug'      => 'contact-form-7',
				'required'  => true,
			),
	
			array(
				'name'      => esc_html__( 'One Click Demo Import', 'singleland' ),
				'slug'      => 'one-click-demo-import',
				'required'  => true,
			),
		);

		return array_merge( $plugins, $new_plugins );
	}
}

new singleland_Register_Plugins();
