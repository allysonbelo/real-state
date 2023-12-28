<?php

function load_scripts()
{
    // Styles
    wp_enqueue_style('main_style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('all-styles', get_theme_file_uri('/styles/all-styles.css'), array(), filemtime(get_template_directory() . '/styles/all-styles.css'), 'all');

    // Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap', array(), null);

    // Scripts
    // wp_enqueue_script('dropdwon', get_template_directory_uri() . './js/dropdown.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'load_scripts');


function theme_config()
{
    register_nav_menus( // Opção menus em Aparencias
        array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    $args  = array(
        'height'    => 225,
        'width'     => 1920
    );

    add_theme_support('custom-header', $args);
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    add_theme_support("title-tag");

    add_theme_support('custom-logo', array(
        'height' => 100, 
        'width' => 400,
        'flex-height' => true, 
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'theme_config', 0);

if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
