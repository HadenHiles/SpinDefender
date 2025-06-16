<div class="medical_featured_pr_list_item item_border theme-list-view-wrapper">
    <div class="product_featured_img">
        <a href="product-details.html" class="pr_img">
                <?php woocommerce_template_loop_product_thumbnail(); ?>   
        </a>
        <div class="hover_item">
             <?php woocommerce_template_loop_add_to_cart();  ?>
        </div>
    </div>
    <?php woocommerce_show_product_loop_sale_flash(); ?>
    <div class="product_featured_content">
        <?php _singleland_woocommerce_product_cal_loop(get_the_ID()); ?>
        <a href="<?php echo esc_url(get_the_permalink(get_the_ID())) ?>" class="text-decoration-none">
        <h3><?php echo esc_html(get_the_title(get_the_ID())); ?></h3>
        </a>
        <div class="price"><?php woocommerce_template_loop_price(); ?></div>
        <p><?php echo esc_html(get_the_excerpt(get_the_ID())); ?></p>
        <div class="pr_button">
            <a href="<?php echo esc_url(get_the_permalink(get_the_ID())); ?>" class="medical_theme_btn strock_btn border_radius hover_btn overflow-hidden position-relative text-decoration-none">
             <?php echo esc_html__('View Details', 'singleland'); ?>
                <span></span>
            </a>
            <?php 
                if ( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) ) {
                    echo do_shortcode('[yith_wcwl_add_to_wishlist]');
                }
            ?>
        </div>
    </div>
</div>