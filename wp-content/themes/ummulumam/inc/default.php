<?php

/*

*   All default function

*/

//Theme title
add_theme_support('title-tag');


// Add post thumbnail
add_theme_support('post-thumbnails', array('page', 'post', 'sm-image'));

//Add image size
add_image_size('post-thumbnails', 1200, 674, true);
add_image_size('gallery-thumbnail', 300, 300, true);


// Posts read more button add
function uum_excerpt_more($more)
{
    global $post;
    return '... <br> <a class="post-read-more-btn" href="' . get_permalink($post->ID) . '">' . 'বিস্তারিত পড়ুন' . '</a>';
}

add_filter('excerpt_more', 'uum_excerpt_more', 10, 2);



// Except to 20 word
function uum_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'uum_excerpt_length', 999);



// Page navigation function

function uum_page_nav()
{

    global $wp_query, $wp_rewrite;
    $pages = '';
    $max =  $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(9999999999, '%#%', get_pagenum_link(9999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = '<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10051 9.9991H20.8995" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.3623 2.73633L1.10032 9.99831L8.3623 17.2603" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    $args['next_text'] = '<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.8994 10H1.10042" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.6374 2.73801L20.8994 10L13.6374 17.262" stroke="#132247" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>';


    if ($max > 1) echo '</pre>
        <div class="wp_page_nav">';

    if ($total == 1 && $max > 1) $pages = '<p class="all-pages-number"> পেইজ ' . $current . '<span> এর </span>' . $max . '</p>';
    echo $pages . paginate_links($args);

    if ($max > 1) echo '</div> <pre>';
}
