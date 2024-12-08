<?php
// Function to set up the theme
function myoffshoreemployees_theme_setup()
{
    // Add support for features like post thumbnails and title tag
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'myoffshoreemployees_theme'),
    ));
}
add_action('after_setup_theme', 'myoffshoreemployees_theme_setup');

// Function to enqueue styles and scripts
function myoffshoreemployees_theme_enqueue_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    $main_css_version = filemtime(get_template_directory() . '/assets/css/main.css'); // Cache-busting version

    // Enqueue styles
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), $theme_version);
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/main.css', array(), $main_css_version);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);

    // Enqueue scripts (add your script files here if needed)
}
add_action('wp_enqueue_scripts', 'myoffshoreemployees_theme_enqueue_scripts');



function enqueue_lottie_player_script()
{
    wp_enqueue_script('lottie-player', 'https://unpkg.com/@lottiefiles/lottie-player@2.0.8/dist/lottie-player.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_lottie_player_script');