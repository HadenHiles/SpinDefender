<?php 


require SINGLELAND_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require SINGLELAND_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require SINGLELAND_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * singleland helper 
 */
require SINGLELAND_THEMEROOT_DIR . '/inc/helper.php';

/**
 * singleland comment area
*/
require SINGLELAND_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * singleland nav walker
*/
require SINGLELAND_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require SINGLELAND_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * singleland Enqueue 
 */

require SINGLELAND_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * singleland Admin Enqueue 
 */

require SINGLELAND_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * singleland breadcrumbs
 */

require SINGLELAND_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * singleland Tgm
 */
require SINGLELAND_THEMEROOT_DIR . '/inc/tgm/class-plugins.php';
require SINGLELAND_THEMEROOT_DIR . '/inc/tgm/tgm-plugin-activation.php';
require SINGLELAND_THEMEROOT_DIR . '/inc/tgm/tgm-plugin-registration.php';


/**
 * singleland Demo import
 */
require SINGLELAND_THEMEROOT_DIR . '/inc/one_click_demo_config.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require SINGLELAND_THEMEROOT_DIR . '/inc/jetpack.php';
}

/**
 * WooCommerce functilly 
 */
if(class_exists('WooCommerce')) {
	require SINGLELAND_THEMEROOT_DIR . '/inc/woo/woocommerce.php';
}