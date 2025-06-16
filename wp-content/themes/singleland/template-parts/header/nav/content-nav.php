<?php 
$singleland_header_layout = singleland_opt('singleland_header_layout', 'container'); 
$singleland_menu_layout = singleland_opt('singleland_menu_layout', 'center'); 

$opt = get_option('singleland_opt');

$display_search  = isset( $opt['is_menu_btn']) ? $opt['is_menu_btn'] : '';
$menu_btn_label  = isset( $opt['menu_btn_label']) ? $opt['menu_btn_label'] : '';
$menu_btn_url    = isset( $opt['menu_btn_url']) ? $opt['menu_btn_url'] : '';
$is_target_blank    = isset( $opt['is_target_blank']) ? $opt['is_target_blank'] : '';

?>

<nav class="navbar navbar-expand-lg menu_one">
    <div class="<?php if($singleland_header_layout == 'container'){echo "container";}else{echo "container-fluid";} ?>">
        <?php singleland_logo(); ?>
        <div class="collapse navbar-collapse <?php if($singleland_menu_layout == 'center'){echo "justify-content-center";}elseif($singleland_menu_layout == 'start'){echo "justify-content-start";}else{echo "justify-content-end";} ?>" id="navbarSupportedContent">

            <?php 
            
                wp_nav_menu( array(
                        'menu_class' => 'navbar-nav menu',
                        'container'  => '',
                        'theme_location' => 'main_menu',
                        'walker'         => new singleland_Navwalker(),
                        'fallback_cb'     => false,
                ) ); 

            ?>
            
        </div>

            <div class="header_area nav_bar">
            <a class="btn_get btn-meta btn_hover" <?php if($is_target_blank == 1): ?> target="_blank" <?php endif; ?> href="<?php echo esc_url($menu_btn_url); ?>"><?php echo ($menu_btn_label); ?></a>
            </div>

        <?php get_template_part( 'template-parts/header/nav/content-nav', 'serch'); ?>
    </div>
</nav>