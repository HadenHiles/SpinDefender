<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package singleland
 */

get_header();

$layout_id = is_product() ? 'woo_single_layout' : 'shop_layout';

$page_sidebar = singleland_opt($layout_id);

if ( is_active_sidebar( 'shop_sidebar' ) ) {
	$grid = ($page_sidebar == 'full') ? 12 : 9;
}else{
	$grid = 12;
}

?>

	<main id="primary" class="site-main">

		<?php 
		/**
		 * if active core plugin banner will pull from core plugin
		 * else default load form theme 
		 * @package _singleland Banner
		 * @since 1.0.0
		 */
		
		 $banner_id = get_themebuilder_Id(get_the_ID(), 'banner');
		 /**
		  * display Page Banner 
		  * hook --_singleland_banner -- 10
		  */
		 do_action('singleland_banner_content', $banner_id, 'shop');

	    singleland_wrapper_start( $page_sidebar, $grid  );
		woocommerce_content();
		singleland_wrapper_end( $page_sidebar );
		?>
	</main><!-- #main -->

<?php
get_footer();
