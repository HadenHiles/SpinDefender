<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package singleland
 */

get_header();
$opt = get_option('singleland_opt');
$error_heading  =!empty($opt['error_heading']) ?  $opt['error_heading'] : esc_html__('404', 'singleland');
$error_title = !empty($opt['error_title']) ? $opt['error_title'] : esc_html__('Page not found', 'singleland');
$error_subtitle = !empty($opt['error_subtitle']) ? $opt['error_subtitle'] : esc_html__("We can't seem to find the page you're looking for", "singleland");
$error_home_btn_label  =!empty($opt['error_home_btn_label']) ?  $opt['error_home_btn_label'] : esc_html__('Go Back to home Page', 'singleland');
?>
<section class="error_section section_padding event_details">
    <div class="container custom_container">
        <div class="row error_contain text-center">
	        <div class="col-sm-12 col-sm-12">
		        <div class="event_section_content">
		            <div class="b_text">
		                <h1 class="f_p w_color f_700"><?php echo singleland_extention_wp_kses( $error_heading ); ?></h1>
		            </div>
		            <h2 class="f_p f_400 w_color f_size_40"><?php echo singleland_extention_wp_kses( $error_title );  ?></h2>
		            <p class="w_color f_400"><?php echo singleland_extention_wp_kses( $error_subtitle );  ?></p>
		            <a href="<?php echo esc_url(home_url('/')) ?>" class="error_btn btn_hover mt_40">
		                <?php echo singleland_extention_wp_kses( $error_home_btn_label );  ?>
		            </a>
		        </div>
	    	</div>
        </div> 
    </div>
</section>

<?php
// get_footer();
