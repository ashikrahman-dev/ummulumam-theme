<?php

/*

* All CSS & JS file enqueue

*/





// Theme CSS and JS file calling.
function uum_css_js_file_calling()
{
    //Style CSS
    wp_enqueue_style('uum-style', get_stylesheet_uri());
    // Bootstrap CSS register
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2', 'all');
    // Theme CSS register
    wp_register_style('theme-css', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0.0', 'all');

    // Bootstrap CSS enqueue
    wp_enqueue_style('bootstrap');
    // Theme CSS enqueue
    wp_enqueue_style('theme-css');


    // Javascript & jQuery
    // Load jQuery
    wp_enqueue_script('jquery');
    // Bootstrap JS
    wp_enqueue_script('bootstrap', get_theme_file_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
    wp_enqueue_script('main', get_theme_file_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'uum_css_js_file_calling');



// Google fonts
// function uum_add_google_fonts()
// {
//     wp_enqueue_style('uum_google_font', 'https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap', false);
// }
// add_action('wp_enqueue_scripts', 'uum_add_google_fonts');
