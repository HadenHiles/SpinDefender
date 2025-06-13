<?php
// Theme setup
function spindefender_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'spindefender'),
    ));
}
add_action('after_setup_theme', 'spindefender_theme_setup');

// Enqueue styles and scripts
function spindefender_enqueue_scripts() {
    wp_enqueue_style('spindefender-style', get_stylesheet_uri());
    wp_enqueue_style('spindefender-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', false);
    // Add Material Icons
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', false);
    // Enqueue parallax and scroll animation JS
    wp_enqueue_script('spindefender-parallax', get_template_directory_uri() . '/assets/js/parallax-animations.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'spindefender_enqueue_scripts');
