<?php
/**
 * Custom Post Types
 */
Redux::set_section( 'singleland_opt', array(
    'title'     => esc_html__( 'Custom Post Types', 'singleland' ),
    'id'        => 'cpt_opt',
    'icon'      => 'dashicons dashicons-admin-post',
));

/**
 * Post Types
 */
Redux::set_section( 'singleland_opt', array(
    'title'     => esc_html__( 'Post Types', 'singleland' ),
    'id'        => 'cpt',
    'icon'      => '',
    'subsection'=> true,
    'fields'    => array(
        array(
            'id'        => 'cpt_note',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Enable Disable Custom Post Types', 'singleland' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'If you want, you can disable any custom post type of singleland from here.', 'singleland' )
        ),

        array(
            'id'       => 'is_service_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Services', 'singleland' ),
            'on'       => esc_html__( 'Enabled', 'singleland' ),
            'off'      => esc_html__( 'Disabled', 'singleland' ),
            'default'  => true,
        ),
        array(
            'id'       => 'is_portfolio_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Portfolio', 'singleland' ),
            'on'       => esc_html__( 'Enabled', 'singleland' ),
            'off'      => esc_html__( 'Disabled', 'singleland' ),
            'default'  => true,
        ),
        array(
            'id'       => 'is_team_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Team', 'singleland' ),
            'on'       => esc_html__( 'Enabled', 'singleland' ),
            'off'      => esc_html__( 'Disabled', 'singleland' ),
            'default'  => true,
        ),
        array(
            'id'       => 'is_faqs_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('FAQs', 'singleland' ),
            'on'       => esc_html__( 'Enabled', 'singleland' ),
            'off'      => esc_html__( 'Disabled', 'singleland' ),
            'default'  => true,
        ),
    )
));

/**
 * Slug Re-write
 */
// Redux::set_section( 'singleland_opt', array(
//     'title'     => esc_html__( 'Post Type Slugs', 'singleland' ),
//     'id'        => 'singleland_cp_slugs',
//     'icon'      => '',
//     'subsection'=> true,
//     'fields'    => array(
//         array(
//             'id'        => 'cp_slug_note',
//             'type'      => 'info',
//             'style'     => 'warning',
//             'title'     => esc_html__( 'Slug Re-write:', 'singleland' ),
//             'icon'      => 'dashicons dashicons-info',
//             'desc'      => sprintf (
//                 '%1$s <a href="%2$s"> %3$s</a> %4$s',
//                 esc_html__( "These are the custom post's slugs offered by singleland. You can customize the permalink structure (site_domain/post_type_slug/post_slug) by changing the post type slug (post_type_slug) from here. Don't forget to save the permalinks settings from", 'singleland' ),
//                 get_admin_url( null, 'options-permalink.php' ),
//                 esc_html__( 'Settings > Permalinks', 'singleland' ),
//                 esc_html__( 'after changing the slug value.', 'singleland' )
//             )
//         ),
        
//         array(
//             'title'     => esc_html__( 'Service Slug', 'singleland' ),
//             'id'        => 'service_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_service_cpt', '=', '1' ),
//             'default'   => 'service'
//         ),
        
//         array(
//             'title'     => esc_html__( 'Portfolio Slug', 'singleland' ),
//             'id'        => 'portfolio_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_portfolio_cpt', '=', '1' ),
//             'default'   => 'portfolio'
//         ),
        
//         array(
//             'title'     => esc_html__( 'Team Slug', 'singleland' ),
//             'id'        => 'team_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_team_cpt', '=', '1' ),
//             'default'   => 'team'
//         ),
//         array(
//             'title'     => esc_html__( 'FAQs Slug', 'singleland' ),
//             'id'        => 'faqs_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_faqs_cpt', '=', '1' ),
//             'default'   => 'faqs'
//         ),
//     )
// ));