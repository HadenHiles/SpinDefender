<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package singleland
 */

 $sticky = singleland_opt('is_sticky', 'show');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Responsive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    if ( function_exists('wp_body_open') ) {
        wp_body_open();
    }
    ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'singleland' ); ?></a>
        <?php
            global $post;
            $header_id = '';
            if (isset($post->ID) && function_exists('header_footer_template_id')) {
                $header_id = header_footer_template_id('header', $post->ID);
            }
                if ( $header_id != '' && class_exists('\Elementor\Plugin' ) ) {
                echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $header_id );
            }else{
        ?>
        <header id="masthead" class="site-header <?php if($sticky == 'yes'){echo "sticky_nav";}else{echo "";} ?>">
            <?php  get_template_part( 'template-parts/header/nav/content',  'nav'); ?>        
        </header><!-- #masthead -->
        <?php } ?>
