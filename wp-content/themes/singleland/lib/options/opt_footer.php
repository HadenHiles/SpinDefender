<?php

// page Title Bar
Redux::set_section('singleland_opt', array(
	'title'         => esc_html__( 'Footer', 'singleland' ),
	'id'            => 'footer_contents_opt',
	'icon'          => 'dashicons dashicons-admin-post',
	'fields'        => array(

        array(
            'id'       => 'is_defult_footer',
            'type'     => 'button_set',
            'title'    => esc_html__('Use Defult footer', 'singleland'),
            'options' => array(
                'yes' => esc_html__('Yes', 'singleland'), 
                'no' => esc_html__('No', 'singleland'), 
             ), 
            'default' => 'yes'
        ),

	    array(
            'title'     => esc_html__('Copyright Text', 'singleland'),
            'id'        => 'footer_copyright_txt',
            'type'      => 'editor',
            'default'   => 'Copyright &copy; 2023 <a href="https://droitthemes.com/">DroitThemes</a> | All rights reserved',
            'args'      => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
            ),
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Background Color', 'singleland' ),
            'id'        => 'footer_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-footer' ),
        ),
        array(
            'title'     => esc_html__( 'Footer Background', 'singleland' ),
            'id'        => 'singleland_footer_background',
            'type'      => 'media',
        ),
        array(
            'id'          => 'footer_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'singleland'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.site-footer .site-info'),
            'units'       => 'px',
        ),
        array(
            'title'     => esc_html__( 'Font color', 'singleland' ),
            'id'        => 'footer_font_color',
            'type'      => 'color',
            'output'    => array( '.site-footer .site-info' ),
        ),
        array(
            'title'     => esc_html__( 'Font Link color', 'singleland' ),
            'id'        => 'footer_link_font_color',
            'type'      => 'color',
            'output'    => array( '.site-footer .site-info a' ),
        ),
        array(
            'title'     => esc_html__( 'Footer padding', 'singleland' ),
            'subtitle'  => esc_html__( 'Padding around the menu action button.', 'singleland' ),
            'id'        => 'footer_padding',
            'type'      => 'spacing',
            'output'    => array( '.site-footer' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
	)
));

