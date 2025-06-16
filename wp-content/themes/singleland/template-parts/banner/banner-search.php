<?php 
  
$banner_url = singleland_opt('search_banner_img_upload');

$banner_background_url = SINGLELAND_IMAGES.'/blog/banner/blog_details_img.png';

if($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}
if(!class_exists('Redux')){
    $banner_background_url = '';
  }
?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
<?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?> 
        <div class="container">
            <div class="breadcrumb_content text-white text-center">
              
                <h1 class="page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'singleland' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
               <?php   singleland_breadcrumbs();  ?>
            </div>
        </div>
</div>