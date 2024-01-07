<?php


/*

*   All Theme functions

*/




// Theme function
function uum_customizar_register($wp_customize)
{
    $wp_customize->add_section('uum_header_area', array(
        'title' => __('Header area', 'ummulumam'),
        'description' => 'If you interested to update your header area, you can do it here.'
    ));

    $wp_customize->add_setting('uum_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/images/ummul-umam-logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'uum_logo', array(
        'label' => 'Logo upload',
        'setting' => 'uum_logo',
        'section' => 'uum_header_area',
    )));
}

add_action('customize_register', 'uum_customizar_register');
