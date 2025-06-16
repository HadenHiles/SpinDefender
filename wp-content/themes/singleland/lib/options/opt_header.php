<?php
// Header Section
Redux::set_section( 'singleland_opt', array(
    'title'            => esc_html__( 'Header', 'singleland' ),
    'id'               => 'header_settings_opt',
    'customizer_width' => '400px',
    'icon'             => 'dashicons dashicons-arrow-up-alt2',
));

Redux::set_section( 'singleland_opt', array(
    'title'            => esc_html__( 'Header Settings', 'singleland' ),
    'id'               => 'singleland_header_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'id'       => 'is_sticky',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Sticky', 'singleland'),
            'options' => array(
                'yes' => esc_html__('Yes', 'singleland'), 
                'no' => esc_html__('No', 'singleland'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'id'       => 'singleland_header_layout',
            'type'     => 'image_select',
            'title'    => __('Header Layout', 'singleland'), 
            'subtitle' => __('Select your header layout', 'singleland'),
            'options'  => array(
                'container'      => array(
                    'alt'   => 'Container', 
                    'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
                ),
                'container-fluid'      => array(
                    'alt'   => 'Container-Fluid', 
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
            ),
            'default' => 'container'
        ),

        array(
            'id'       => 'is_header_bg_color',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Background', 'singleland'),
            'options' => array(
                'yes' => esc_html__('Yes', 'singleland'), 
                'no' => esc_html__('No', 'singleland'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'title'     => esc_html__( 'Background Color Normal', 'singleland' ),
            'id'        => 'menu_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header .navbar' ),
            'required'  => array( 'is_header_bg_color', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Background Color Sticky', 'singleland' ),
            'id'        => 'menu_bg_color_sticky',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header.sticky_nav.navbar_fixed .navbar' ),
        ),

        array(
            'title'     => esc_html__( 'Header Padding Normal', 'singleland' ),
            'subtitle'  => esc_html__( 'Padding around the header. Input the padding as clockwise (Top Right Bottom Left)', 'singleland' ),
            'id'        => 'header_padding',
            'type'      => 'spacing',
            'output'    => array( '.site-header .navbar' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'title'     => esc_html__( 'Header Padding Sticky', 'singleland' ),
            'subtitle'  => esc_html__( 'Padding around the header. Input the padding as clockwise (Top Right Bottom Left)', 'singleland' ),
            'id'        => 'header_padding_sticky',
            'type'      => 'spacing',
            'output'    => array( '.navbar_fixed .navbar .menu > .nav-item' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'id'       => 'search_icon_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Search Icon', 'singleland'),
            'options' => array(
                'yes' => esc_html__('Yes', 'singleland'), 
                'no' => esc_html__('No', 'singleland'), 
             ), 
            'default' => 'yes'
            ),

        array(
            'title'     => esc_html__( 'Search Font color', 'saasland' ),
            'id'        => 'menu_search',
            'type'      => 'color',
            'output'    => array( '.site-header .navbar .icon-search:before' ),
            'required'  => array( 'search_icon_toggle', '=', 'yes' )
            ),
        
        array(
            'title'     => esc_html__( 'Search Separator Color', 'saasland' ),
            'id'        => 'menu_search_separator',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header .navbar .search_cart:before' ),
            'required'  => array( 'search_icon_toggle', '=', 'yes' )
        ),

    )
) );

// Logo
Redux::set_section( 'singleland_opt', array(
    'title'            => esc_html__( 'Logo', 'singleland' ),
    'id'               => 'upload_logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Upload logo', 'singleland' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'singleland' ),
            'id'        => 'logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => SINGLELAND_IMAGES.'/default_logo/logo.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'singleland' ),
            'id'        => 'sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => SINGLELAND_IMAGES.'/default_logo/logo_sticky.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', 'singleland' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'singleland' ),
            'id'        => 'retina_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'singleland' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'singleland' ),
            'id'        => 'retina_sticky_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'singleland' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'singleland' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => '.navbar-brand img',
        ),

        array(
            'title'     => esc_html__( 'Padding', 'singleland' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'singleland' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.navbar-brand img' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );

/**
* Action button
*/

Redux::set_section( 'singleland_opt', array(
    'title'            => esc_html__( 'Action Button', 'saasland' ),
    'id'               => 'menu_action_btn_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Button Visibility', 'saasland' ),
            'id'        => 'is_menu_btn',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'saasland' ),
            'off'       => esc_html__( 'Hide', 'saasland' ),
        ),

        array(
            'title'     => esc_html__( 'Button label', 'saasland' ),
            'subtitle'  => esc_html__( 'Leave the button label field empty to hide the menu action button.', 'saasland' ),
            'id'        => 'menu_btn_label',
            'type'      => 'text',
            'default'   => esc_html__( 'Get Started', 'saasland' ),
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),

        array(
            'title'     => esc_html__( 'Button URL', 'saasland' ),
            'id'        => 'menu_btn_url',
            'type'      => 'text',
            'default'   => '#',
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),
        array(
            'title'     => esc_html__( 'Button Target', 'saasland' ),
            'id'        => 'is_target_blank',
            'type'      => 'switch',
            'on'        => esc_html__( 'On', 'saasland' ),
            'off'       => esc_html__( 'Off', 'saasland' ),
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),
        array(
            'id'          => 'header_action_btn_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'saasland'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('#navbarSupportedContent a.btn_get'),
            'units'       => 'px',
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),
        array(
            'title'     => esc_html__( 'Button Font Size', 'saasland' ),
            'id'        => 'menu_btn_size',
            'type'      => 'spinner',
            'default'   => '14',
            'min'       => '12',
            'step'      => '1',
            'max'       => '50',
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),


        /**
         * Button colors
         * Style will apply on the Non sticky mode and sticky mode of the header
         */
        array(
            'title'     => esc_html__( 'Button Colors', 'saasland' ),
            'subtitle'  => esc_html__( 'Button style attributes on normal (non sticky) mode.', 'saasland' ),
            'id'        => 'button_colors',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'is_menu_btn', '=', '1' ),
        ),

        array(
            'title'     => esc_html__( 'Font color', 'saasland' ),
            'id'        => 'menu_btn_font_color',
            'type'      => 'color',
            'output'    => array( '.header_area .btn_get' ),
        ),
        
        array(
            'title'     => esc_html__( 'Border Color', 'saasland' ),
            'id'        => 'menu_btn_border_color',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.header_area a.btn_get.btn-meta.btn_hover' ),
        ),
        
        array(
            'title'     => esc_html__( 'Background Color', 'saasland' ),
            'id'        => 'menu_btn_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header .header_area a.btn_get' ),
        ),

        // Button color on hover stats
        array(
            'title'     => esc_html__( 'Hover Font Color', 'saasland' ),
            'subtitle'  => esc_html__( 'Font color on hover stats.', 'saasland' ),
            'id'        => 'menu_btn_hover_font_color',
            'type'      => 'color',
            'output'    => array( '.header_area a.btn_get.btn-meta.btn_hover:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover Border Color', 'saasland' ),
            'id'        => 'menu_btn_hover_border_color',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.header_area a.btn_get.btn-meta.btn_hover:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover background color', 'saasland' ),
            'subtitle'  => esc_html__( 'Background color on hover stats.', 'saasland' ),
            'id'        => 'menu_btn_hover_bg_color',
            'type'      => 'color',
            'output'    => array(
                'background' => '.header_area a.btn_get.btn-meta.btn_hover:hover',
                'border-color' => '.navbar_fixed .header_area a.btn_get.btn-meta.btn_hover:hover'
            ),
        ),
        array(
            'id'     => 'button_colors-end',
            'type'   => 'section',
            'indent' => false,
        ),

        /*
         * Button colors on sticky mode
         */
        array(
            'title'     => esc_html__( 'Sticky Button Style', 'saasland' ),
            'subtitle'  => esc_html__( 'Button colors on sticky mode.', 'saasland' ),
            'id'        => 'button_colors_sticky',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'is_menu_btn', '=', '1' ),
        ),
        array(
            'title'     => esc_html__( 'Border color', 'saasland' ),
            'id'        => 'menu_btn_border_color_sticky',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.navbar_fixed .header_area a.btn_get.btn-meta.btn_hover' ),
        ),
        array(
            'title'     => esc_html__( 'Font color', 'saasland' ),
            'id'        => 'menu_btn_font_color_sticky',
            'type'      => 'color',
            'output'    => array( '.navbar_fixed .header_area a.btn_get.btn-meta.btn_hover' ),
        ),
        array(
            'title'     => esc_html__( 'Background color', 'saasland' ),
            'id'        => 'menu_btn_bg_color_sticky',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.navbar_fixed .header_area a.btn_get.btn-meta.btn_hover' ),
        ),

        // Button color on hover stats
        array(
            'title'     => esc_html__( 'Hover font color', 'saasland' ),
            'subtitle'  => esc_html__( 'Font color on hover stats.', 'saasland' ),
            'id'        => 'menu_btn_hover_font_color_sticky',
            'type'      => 'color',
            'output'    => array( '.navbar_fixed .header_area .btn_get.btn-meta:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover background color', 'saasland' ),
            'subtitle'  => esc_html__( 'Background color on hover stats.', 'saasland' ),
            'id'        => 'menu_btn_hover_bg_color_sticky',
            'type'      => 'color',
            'output'    => array(
                'background' => '.navbar_fixed .header_area .btn_get.btn-meta:hover',
            ),
        ),
        array(
            'title'     => esc_html__( 'Hover border color', 'saasland' ),
            'subtitle'  => esc_html__( 'Background color on hover stats.', 'saasland' ),
            'id'        => 'menu_btn_hover_border_color_sticky',
            'type'      => 'color',
            'output'    => array(
                'border-color' => '.navbar_fixed .header_area .btn_get.btn-meta:hover',
            ),
        ),

        array(
            'id'     => 'button_colors-sticky-end',
            'type'   => 'section',
            'indent' => false,
        ),

        array(
            'title'     => esc_html__( 'Button padding', 'saasland' ),
            'subtitle'  => esc_html__( 'Padding around the menu action button.', 'saasland' ),
            'id'        => 'menu_btn_padding',
            'type'      => 'spacing',
            'output'    => array( '.btn_get' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),
    )
));

