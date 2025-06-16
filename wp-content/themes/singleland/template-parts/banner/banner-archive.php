<?php 

$is_banner = singleland_opt('archive_banner_toggle', 'show');
$is_breadcrumbs = singleland_opt('archive_banner_breadcrumb', 'show');
$is_banner_title = singleland_opt('is_archive_title', 'show');
$banner_url = singleland_opt('archive_banner_img_upload');
$banner_background_url = SINGLELAND_IMAGES.'/blog/banner/blog_details_img.png';

if ( $banner_url && !empty($banner_url['url']) ) {
    $banner_background_url = $banner_url['url'];
}

if (!class_exists('Redux') ) {
    $banner_background_url = '';
}

if ( $is_banner ) {
    if ($banner_background_url != '') :  ?>
        <div class="archive blog_breadcrumbs_area_two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
        <div class="overlay_bg"></div>
    <?php else: ?>
        <div class="blog_breadcrumbs_area_two banner-with-color">
    <?php endif; ?>
    <div class="container">
        <div class="breadcrumb_content text-white text-center">
            <?php
            
            if (have_posts() && $is_banner_title == 'show') {
                the_archive_title( '<h1 class="page-title page_title">', '</h1>' );
            }
            if ( $is_breadcrumbs == 'show') {
                singleland_breadcrumbs();
            } ?>
        </div>
    </div>
    </div>
    <?php
}