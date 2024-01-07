<?php

/*

*   All widgets register function

*/



// Sidebar register function
function uum_widget_register()
{
    register_sidebar(array(
        'name' => __('Main widget area.', 'ummulumam'),
        'id' => 'sidebar-1',
        'description' => __('Appears in the sidebar in blog page and also other page', 'ummulumam'),
        'before_widget' => '<div class="child-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="sidebar-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'uum_widget_register');
