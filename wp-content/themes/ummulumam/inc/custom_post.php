<?php

// function social_media_image()
// {
//     register_post_type(
//         'sm-image',
//         array(
//             'labels' => array(
//                 'name' =>  __('SM Image', 'ummulumam'),
//                 'singular_name' => __('SM Image', 'ummulumam'),
//                 'add_new' => __('Add new image', 'ummulumam'),
//                 'add_new_item' => __('Add new image', 'ummulumam'),
//                 'edit_item' => __('Edit SM Image', 'ummulumam'),
//                 'update_item' => __('Update SM Image', 'ummulumam'),
//                 'new_item' => __('New SM Image', 'ummulumam'),
//                 'view_item' => __('View SM Image', 'ummulumam'),
//                 'not_found' => __('Sorry, we could\'n find the Social Media Image.', 'ummulumam'),

//             ),
//             'menu_icon' => 'dashicons-images-alt2',
//             'public' => true,
//             'publicly_queryable' => true,
//             'exclude_from_search' => true,
//             'menu_position' => 5,
//             'show_ui' => true,
//             'show_in_menu' => true,
//             'has_archive' => false,
//             'hierarchial' => false,
//             'capability_type' => 'post',
//             'show_in_menu' => true,
//             'rewrite' => array('slag' => 'gallery'),
//             'supports' => array('title', 'thumbnail', 'editor'),
//         )
//     );
// }

// add_action('init', 'social_media_image');










/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function social_media_image()
{
    $labels = array(
        'name'                  => _x('SM Images', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('SM Image', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('SM Images', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('SM Image', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New SM Image', 'textdomain'),
        'new_item'              => __('New SM Image', 'textdomain'),
        'edit_item'             => __('Edit SM Image', 'textdomain'),
        'view_item'             => __('View SM Image', 'textdomain'),
        'all_items'             => __('All SM Images', 'textdomain'),
        'not_found'             => __('No SM Images found.', 'textdomain'),
        'featured_image'        => _x('Main SM Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'items_list_navigation' => _x('SM Images list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('SM Images list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-images-alt2',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'gallery'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('sm-image', $args);
}

add_action('init', 'social_media_image');
