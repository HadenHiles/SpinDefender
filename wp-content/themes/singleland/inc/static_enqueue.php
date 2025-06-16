<?php
/**
 * Enqueue site scripts and styles
 */
function singleland_scripts() {

    /**
     * Enqueueing Stylesheets
     */
	wp_enqueue_style( 'singleland-fonts', singleland_fonts_url() );
	wp_enqueue_style( 'mediaelementplayer', SINGLELAND_VEND . '/media-player/mediaelementplayer.css' );
	wp_enqueue_style( 'fontawesome', SINGLELAND_VEND . '/fontawesome-free-6.0.0-web/css/all.min.css' );
	wp_enqueue_style( 'icomoon-theme', SINGLELAND_VEND . '/icomoon/style.css' );
	wp_enqueue_style( 'nice-select', SINGLELAND_VEND . '/nice-select/nice-select.css' );
	wp_enqueue_style( 'bootstrap', SINGLELAND_CSS . '/bootstrap.min.css' );
	wp_enqueue_style( 'singleland-woocommerce', SINGLELAND_CSS . '/woocommerce.min.css' );
	wp_enqueue_style( 'singleland-main-style', get_theme_file_uri('/assets/css/style.min.css'), array(), SINGLELAND_VERSION );
	wp_enqueue_style( 'singleland-custom-style', get_theme_file_uri('/assets/css/custom.css'), array(), SINGLELAND_VERSION );

	wp_enqueue_style( 'singleland-root', get_stylesheet_uri(), array(), SINGLELAND_VERSION );
    wp_style_add_data( 'singleland-root', 'rtl', 'replace' );


    /**
     * Enqueueing Scripts
     */
	wp_enqueue_script( 'popper', SINGLELAND_VEND. '/bootstrap/js/popper.min.js', array('jquery'), '2.9.2', true );
	wp_enqueue_script( 'bootstrap-min', SINGLELAND_VEND. '/bootstrap/js/bootstrap.min.js', array('jquery'), '5.0.2', true );
	wp_enqueue_script( 'mediaelement-and-player', SINGLELAND_VEND. '/media-player/mediaelement-and-player.min.js', array('jquery'), '4.2.6', true );
	wp_enqueue_script( 'parallaxie', SINGLELAND_VEND. '/parallax/parallaxie.js', array('jquery'), '0.5', true );
	wp_enqueue_script( 'nice-select', SINGLELAND_VEND. '/nice-select/jquery.nice-select.min.js', array('jquery'), '0.5', true );
	wp_enqueue_script( 'singleland-main-js', SINGLELAND_JS . '/main.js', array('jquery'), SINGLELAND_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	wp_deregister_style('extendify-utilities');


    $dynamic_css = '';
   
    
    $opt = get_option('singleland_opt');

    if ( !empty($opt['mobile_menu_dropdown_bg']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item > .nav-link{
                    background: {$opt['mobile_menu_dropdown_bg']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_font_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .nav-link, .menu > .nav-item.mega_menu{
                    color: {$opt['mobile_menu_font_color']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_hover_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item.active .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
                .menu > .nav-item.hover .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
            }";
    }


    if ( !empty($opt['mobile_menu_dropdown_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .mobile_dropdown_icon{
                    color: {$opt['mobile_menu_dropdown_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color_sticky']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar_fixed .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color_sticky']} !important;
                }
            }";
    }


    wp_add_inline_style( 'singleland-root', $dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'singleland_scripts' );