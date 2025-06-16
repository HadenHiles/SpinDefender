<?php
/**
 * Theme Banner Settings
 */
Redux::set_section('singleland_opt', array(
    'title'            => esc_html__( 'Banner Setting', 'singleland' ),
    'id'               => 'banner_settings_opt',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('singleland_opt', array(
    'title'            => esc_html__( 'Page Banner', 'singleland' ),
    'id'               => 'page_banner_opt',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'        => 'page_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Banner', 'singleland'),
            'subtitle'  => esc_html__('Show Hide Page Banner Globally ', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'singleland'),
                'hide'  => esc_html__('Hide Banner', 'singleland'),
            ), 
            'default'   => 'show',
        ),

        array(
            'id'        => 'page_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Breadcrumb', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show', 'singleland'),
                'hide'  => esc_html__('Hide', 'singleland'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'page_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Title', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show', 'singleland'),
                'hide'  => esc_html__('Hide', 'singleland'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'title'     => esc_html__( 'Title color', 'saasland' ),
            'id'        => 'title_font_color',
            'type'      => 'color',
            'output'    => array( '.page.blog_breadcrumbs_area_two .page_title' ),
        ),
        
        array(
            'id'          => 'page_title_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'saasland'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.page.blog_breadcrumbs_area_two .page_title'),
            'units'       => 'px',
        ),

        array(
            'title'     => esc_html__( 'Sub Title color', 'saasland' ),
            'id'        => 'subtitle_font_color',
            'type'      => 'color',
            'output'    => array( '.page.blog_breadcrumbs_area_two .breadcrumbs span' ),
        ),

        array(
            'id'        => 'page_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'singleland'),
            'default'   => array(
                'url'   => SINGLELAND_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('page_banner_toggle', '=', 'show')

        ),
        array(
            'id'        => 'page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.page.blog_breadcrumbs_area_two:before' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        ),
        
));


// Blog Banner
Redux::set_section('singleland_opt', array(
    'title'            => esc_html__( 'Blog Banner', 'singleland' ),
    'id'               => 'blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Banner', 'singleland'),
            'subtitle'  => esc_html__('Show Hide Blog Banner Globally ', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'singleland'),
                'hide'  => esc_html__('Hide Banner', 'singleland'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'       => 'singleland_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Breadcrumb', 'singleland'),
            'options' => array(
                'show' => esc_html__('Show', 'singleland'), 
                'hide' => esc_html__('Hide', 'singleland'), 
            ), 
            'default' => 'show'
        ),

        array(
            'id'        => 'is_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Title', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show', 'singleland'),
                'hide'  => esc_html__('Hide', 'singleland'),
            ), 
            'default'   => 'show',
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array( 
            'title'     => esc_html__('Blog title', 'singleland'),
            'id'        => 'blog_banner_title',
            'type'      => 'text',
            'default'   => 'Blog List',
            'required'  => array('is_blog_banner_title', '=' , 'show')
        ),

        array(
            'title'     => esc_html__( 'Title color', 'saasland' ),
            'id'        => 'blog_title_font_color',
            'type'      => 'color',
            'output'    => array( '.blog.blog_breadcrumbs_area_two .page_title' ),
        ),

        array(
            'id'          => 'blog_title_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'saasland'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.blog.blog_breadcrumbs_area_two .page_title'),
            'units'       => 'px',
        ),

        array(
            'id'        => 'blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'singleland'),
            'default'   => array(
                'url'   => SINGLELAND_IMAGES.'/blog/banner/blog_details_img.png',
            ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog.blog_breadcrumbs_area_two:before' ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),
      )
));


// Single page Banner
Redux::set_section('singleland_opt', array(
    'title'            => esc_html__( 'Single Blog Banner', 'singleland' ),
    'id'               => 'single_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'single_blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Single Blog Banner', 'singleland'),
            'subtitle'  => esc_html__('Show Hide Banner Globally ', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'singleland'),
                'hide'  => esc_html__('Hide Banner', 'singleland'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'single_blog_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show', 'singleland'),
                'hide'  => esc_html__('Hide', 'singleland'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_single_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Title', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show', 'singleland'),
                'hide'  => esc_html__('Hide', 'singleland'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'title'     => esc_html__( 'Title color', 'saasland' ),
            'id'        => 'single_title_font_color',
            'type'      => 'color',
            'output'    => array( '.single.blog_breadcrumbs_area_two .page_title' ),
        ),
        
        array(
            'id'          => 'single_title_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'saasland'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.single.blog_breadcrumbs_area_two .page_title'),
            'units'       => 'px',
        ),

        array(
            'title'     => esc_html__( 'Sub Title color', 'saasland' ),
            'id'        => 'single_subtitle_font_color',
            'type'      => 'color',
            'output'    => array( '.single.blog_breadcrumbs_area_two span, .single.blog_breadcrumbs_area_two span a' ),
        ),

        array(
            'id'        => 'single_blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'singleland'),
            'default'   => array(
                'url'   => SINGLELAND_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.single.blog_breadcrumbs_area_two:before' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),
      )
));


//  Archive page Banner
Redux::set_section('singleland_opt', array(
    'title'            => esc_html__( 'Archive Banner', 'singleland' ),
    'id'               => 'archive_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'archive_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive  Banner', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'singleland'),
                'hide'  => esc_html__('Hide Banner', 'singleland'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'archive_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show', 'singleland'),
                'hide'  => esc_html__('Hide', 'singleland'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_archive_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Title', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show', 'singleland'),
                'hide'  => esc_html__('Hide', 'singleland'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'archive_description',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Description', 'singleland'),
            'options'   => array(
                'show'  => esc_html__('Show', 'singleland'),
                'hide'  => esc_html__('Hide', 'singleland'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'title'     => esc_html__( 'Title color', 'saasland' ),
            'id'        => 'archive_title_font_color',
            'type'      => 'color',
            'output'    => array( '.archive.blog_breadcrumbs_area_two .page_title' ),
        ),
        
        array(
            'id'          => 'archive_title_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'saasland'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.archive.blog_breadcrumbs_area_two .page_title'),
            'units'       => 'px',
        ),

        array(
            'title'     => esc_html__( 'Sub Title color', 'saasland' ),
            'id'        => 'archive_subtitle_font_color',
            'type'      => 'color',
            'output'    => array( '.archive.blog_breadcrumbs_area_two span, .archive.blog_breadcrumbs_area_two span a' ),
        ),

        array(
            'id'        => 'archive_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'singleland'),
            'default'   => array(
                'url'   => SINGLELAND_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.archive.blog_breadcrumbs_area_two:before' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),
      )
));

// search page Banner
// Redux::set_section('singleland_opt', array(
//     'title'            => esc_html__( 'Search Banner', 'singleland' ),
//     'id'               => 'search_blog_banner_opt',
//     'icon'             => '',
//     'subsection'       => true,
//     'fields'           => array(

//         array(
//             'id'        => 'search_banner_img_upload',
//             'type'      => 'media',
//             'title'     => __('Upload Banner', 'singleland'),
//             'default'   => array(
//                 'url'   => SINGLELAND_IMAGES.'/blog/banner/blog_details_img.jpg',
//             ),
//         ),

//         array(
//             'id'        => 'search_banner_overly',
//             'type'      => 'color_rgba',
//             'title'     => 'Banner Overly Color',
//             'mode'      => 'background',
//             'output'    => array( '.blog_breadcrumbs_area_two.archive-banner .overlay_bg' ),
//             'default'   => array(
//                 'color'     => '#000',
//                 'alpha'     => .5
//             ),
//         ),
//     )
// ));


// 404 Error page
// Redux::set_section('singleland_opt', array(
//     'title'            => esc_html__( '404 Banner', 'singleland' ),
//     'id'               => 'error_banner_opt',
//     'icon'             => '',
//     'subsection'       => true,
//     'fields'           => array(

//         array(
//             'id'        => 'error_banner_toggle',
//             'type'      => 'button_set',
//             'title'     => esc_html__('Show 404  Banner', 'singleland'),
//             'options'   => array(
//                 'show'  => esc_html__('Show Banner', 'singleland'),
//                 'hide'  => esc_html__('Hide Banner', 'singleland'),
//             ),
//             'default'   => 'show'
//         ),

//         array(
//             'id'        => 'is_error_banner_title',
//             'type'      => 'button_set',
//             'title'     => esc_html__('Show Title', 'singleland'),
//             'options'   => array(
//                 'show'  => esc_html__('Show', 'singleland'),
//                 'hide'  => esc_html__('Hide', 'singleland'),
//             ),
//             'default'   => 'show',
//             'required'  => array('error_banner_toggle', '=', 'show')
//         ),

//         array(
//             'title'         => esc_html__('404 Banner Title', 'singleland'),
//             'type'          => 'text',
//             'id'            => 'error_banner_title',
//             'default'       => '404',
//             'required'      => array('is_error_banner_title', '=', 'show')
//         ),

//         array(
//             'id'        => 'error_banner_breadcrumb',
//             'type'      => 'button_set',
//             'title'     => esc_html__('Show Breadcrumb', 'singleland'),
//             'options'   => array(
//                 'show'  => esc_html__('Show', 'singleland'),
//                 'hide'  => esc_html__('Hide', 'singleland'),
//             ),
//             'default'   => 'show',
//             'required'  => array('error_banner_toggle', '=', 'show')
//         ),

//         array(
//             'id'        => 'error_banner_img_upload',
//             'type'      => 'media',
//             'title'     => __('Upload Banner', 'singleland'),
//             'default'   => array(
//                 'url'   => SINGLELAND_IMAGES.'/blog/banner/blog_details_img.jpg',
//             ),
//             'required'  => array('error_banner_toggle', '=', 'show')
//         ),

//         array(
//             'id'        => '404_banner_overly',
//             'type'      => 'color_rgba',
//             'title'     => 'Banner Overly Color',
//             'mode'      => 'background',
//             'output'    => array( '.blog_breadcrumbs_area_two.banner-404 .overlay_bg' ),
//             'default'   => array(
//                 'color'     => '#000',
//                 'alpha'     => .5
//             ),
//             'required'  => array('error_banner_toggle', '=', 'show')
//         ),
//     )
// ));

if(class_exists('WooCommerce')) {
    // Shop page banner settings 
    Redux::set_section('singleland_opt', array(
        'title'            => esc_html__( 'Shop', 'singleland' ),
        'id'               => 'shop_banner_opt',
        'icon'             => '',
        'subsection'       => true,
        'fields'           => array(
    
            array(
                'id'        => 'shop_banner_toggle',
                'type'      => 'button_set',
                'title'     => esc_html__('Show Shop Banner', 'singleland'),
                'options'   => array(
                    'show'  => esc_html__('Show Banner', 'singleland'),
                    'hide'  => esc_html__('Hide Banner', 'singleland'),
                ),
                'default'   => 'show'
            ),
    
            array(
                'id'        => 'is_shop_banner_title',
                'type'      => 'button_set',
                'title'     => esc_html__('Show Title', 'singleland'),
                'options'   => array(
                    'show'  => esc_html__('Show', 'singleland'),
                    'hide'  => esc_html__('Hide', 'singleland'),
                ),
                'default'   => 'show',
                'required'  => array('shop_banner_toggle', '=', 'show')
            ),
    
            array(
                'title'         => esc_html__('Shop Banner Title', 'singleland'),
                'type'          => 'text',
                'id'            => 'shop_banner_title',
                'default'       => esc_html__('Shop', 'singleland'),
                'required'      => array('shop_banner_toggle', '=', 'show')
            ),

            array(
                'title'     => esc_html__( 'Title color', 'saasland' ),
                'id'        => 'shop_title_font_color',
                'type'      => 'color',
                'output'    => array( '.shop.blog_breadcrumbs_area_two .page_title' ),
            ),
            
            array(
                'id'          => 'shop_title_typo',
                'type'        => 'typography',
                'title'       => __('Typography', 'saasland'),
                'google'      => true,
                'font-backup' => true,
                'color'       => false,
                'output'      => array('.shop.blog_breadcrumbs_area_two .page_title'),
                'units'       => 'px',
            ),
    
            array(
                'title'     => esc_html__( 'Sub Title color', 'saasland' ),
                'id'        => 'shop_subtitle_font_color',
                'type'      => 'color',
                'output'    => array( '.shop.blog_breadcrumbs_area_two .breadcrumbs span, .shop.blog_breadcrumbs_area_two span a' ),
            ),
    
            array(
                'id'        => 'shop_banner_breadcrumb',
                'type'      => 'button_set',
                'title'     => esc_html__('Show Breadcrumb', 'singleland'),
                'options'   => array(
                    'show'  => esc_html__('Show', 'singleland'),
                    'hide'  => esc_html__('Hide', 'singleland'),
                ),
                'default'   => 'show',
                'required'  => array('shop_banner_toggle', '=', 'show')
            ),
    
            array(
                'id'        => 'shop_banner_img_upload',
                'type'      => 'media',
                'title'     => __('Upload Banner', 'singleland'),
                'default'   => array(
                    'url'   => SINGLELAND_IMAGES.'/woocommerce/banner/banner.png',
                ),
                'required'  => array('shop_banner_toggle', '=', 'show')
            ),
            array(
                'id'        => 'shop_banner_overly',
                'type'      => 'color_rgba',
                'title'     => 'Banner Overly Color',
                'mode'      => 'background',
                'output'    => array( '.shop.blog_breadcrumbs_area_two:before' ),
                'required'  => array('shop_banner_toggle', '=', 'show')
            ),
        )
    ));
}