<?php 
/**
 * singleland admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', 'singleland_admin_enqueues');

function singleland_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if ( $screen->base == 'toplevel_page_singleland_options' ) {
            wp_enqueue_style( 'singleland-redux-style', SINGLELAND_CSS.'/redux-style.css' );
        }
    }
    
}
