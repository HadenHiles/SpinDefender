<?php
Redux::set_section('singleland_opt', array(
	'title'     => esc_html__( 'Blog', 'singleland' ),
	'id'        => 'blog_page_opt',
	'icon'      => 'dashicons dashicons-admin-post',
));


/**
 * Blog Archive Settings
 */
Redux::set_section('singleland_opt', array(
    'title'         => esc_html__( 'Blog Archive', 'singleland' ),
    'id'            => 'blog_archive_settings_opt',
    'icon'          => '',
    'subsection'    => true,
    'fields'        => array(

        array(
            'id'       => 'blog_layout',
            'type'     => 'image_select',
            'title'    => __('Blog Layout', 'singleland'),
            'subtitle' => __('Select your blog Layout', 'singleland'),
            'options'  => array(
                'full'      => array(
                    'alt'   => '1 Column',
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
                'left'      => array(
                    'alt'   => '2 Column Left',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'right'      => array(
                    'alt'    => '2 Column Right',
                    'img'    => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
            ),
            'default' => 'right'
        ),

        // array(
        //     'title'     => esc_html__( 'Blog Format', 'muffle' ),
        //     'id'        => 'defult_blog_format',
        //     'type'      => 'switch',
        //     'on'        => esc_html__( 'Grid Style', 'muffle' ),
        //     'off'       => esc_html__( 'List Style', 'muffle' ),
        //     'default'   => 'off',
        // ),

        array(
            'id' => 'read_more_text_button',
            'title'    => __('Read More Button Text', 'singleland'),
            'type' => 'text',
            'default' => 'Read More'
        ),

        array(
            'title'     => esc_html__( 'Post title length', 'singleland' ),
            'subtitle'  => esc_html__( 'Blog post title length in character', 'singleland' ),
            'id'        => 'post_title_length',
            'type'      => 'slider',
            'default'   => 1,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text',
        ),
    
        array(
            'title'     => esc_html__( 'Post word excerpt', 'singleland' ),
            'subtitle'  => esc_html__( 'If post excerpt is empty, the excerpt content will take from the post content. Define here how much word you want to show along with the each posts in the blog page.', 'singleland' ),
            'id'        => 'blog_excerpt',
            'type'      => 'slider',
            'default'   => 40,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text'
        ),
    
        array(
            'title'     => esc_html__( 'Post author', 'singleland' ),
            'id'        => 'is_post_author',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'singleland' ),
            'off'       => esc_html__( 'Hide', 'singleland' ),
            'default'   => 'Show',
        ),
    
        array(
            'title'     => esc_html__( 'Post date', 'singleland' ),
            'id'        => 'is_post_date',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'singleland' ),
            'off'       => esc_html__( 'Hide', 'singleland' ),
            'default'   => 'Show',
        ),
    
        ///
    
        )
    ));
    
    
    
    /*** Headers Typography ***/
    Redux::set_section( 'singleland_opt', array(
        'title'            => esc_html__( 'Blog Single', 'saasland' ),
        'id'               => 'blog_single_opt',
        'icon'             => '',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'singleland_display_blog_single_tags',
                'type'     => 'button_set',
                'title'    => esc_html__('Display Post Tags', 'singleland'),
                'options' => array(
                    'yes' => 'Yes', 
                    'no' => 'No', 
                 ), 
                'default' => 'no'
            ),
            
            array(
                'id'       => 'singleland_display_blog_share',
                'type'     => 'button_set',
                'title'    => esc_html__('Display Social Share?', 'singleland'),
                'options' => array(
                    'yes' => 'Yes', 
                    'no' => 'No', 
                 ), 
                'default' => 'no'
            ),
    
            array( 
                'id' => 'singleland_social_title_text',
                'title'    => __('Shared Title', 'singleland'), 
                'type' => 'text',
                'default' => 'Shared'
            ),
    
            array(
                'id'       => 'is_social_share_links',
                'type'     => 'checkbox',
                'title'    => __('Checked Share Links', 'singleland'),
                'options'  => array(
                    'facebook' => __('Facebook', 'singleland'),
                    'twitter'  => __('Twitter', 'singleland'),
                    'pinterest'=> __('Pinterest', 'singleland'),
                    'linkedin' => __('Linkedin', 'singleland')
                ),
                'default' => array(
                    'facebook'  => '1', 
                    'twitter'   => '1', 
                    'pinterest' => '0',
                    'linkedin' => '1'
                ),
            ),
    
            array(
                'id'       => 'singleland_display_blog_comments',
                'type'     => 'button_set',
                'title'    => esc_html__('Display Comments Section', 'singleland'),
                'options' => array(
                    'yes' => 'Yes', 
                    'no' => 'No', 
                 ), 
                'default' => 'yes'
            ),
    
        )
    ));    


/**
 * Blog Single Post
 */
// Redux::set_section('singleland_opt', array(
// 	'title'         => esc_html__( 'Single Post', 'singleland' ),
// 	'id'            => 'blog_single_post_settings_opt',
// 	'icon'          => '',
//     'subsection'    => true,
// 	'fields'        => array(

//         array(
//             'id'        => 'display_blog_share',
//             'type'      => 'button_set',
//             'title'     => esc_html__('Display Social Share?', 'singleland'),
//             'options'   => array(
//                 'yes'   => 'Yes',
//                 'no'    => 'No',
//             ),
//             'default'   => 'no'
//         ),
// 	)
// ));

