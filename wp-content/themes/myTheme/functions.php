<?php

function mytheme_load_scripts()
{
    // Enqueue the Swiper CSS from CDN
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css');

    // Enqueue the Swiper JS from CDN
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js', array(), null, true);

    // Enqueue GSAP and ScrollTrigger
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);

    // Enqueue BaguetteBox CSS
    wp_enqueue_style('baguettebox-css', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css');

    // Enqueue BaguetteBox JS
    wp_enqueue_script('baguettebox-js', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js', array(), null, true);

    // Enqueue your theme's CSS
    wp_enqueue_style('css-style', get_theme_file_uri('/src/css/style.css'));
    // wp_enqueue_style('css-style', get_theme_file_uri('/dist/style.css'));

    // Enqueue your theme's main JS file
    wp_enqueue_script('js-script', get_theme_file_uri('/src/js/main.js'), array('gsap', 'scrolltrigger', 'baguettebox-js'), false, true);
}

add_action('wp_enqueue_scripts', 'mytheme_load_scripts');






function mytheme_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));
    add_theme_support('menus');
    add_theme_support('woocommerce');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('starter-content');
    add_theme_support('wp-pagenavi'); // Add this line to enable wp-pagenavi plugin.
    add_image_size('pageBanner', 1048, 385, true);
    add_theme_support('custom-header');
}

add_action('after_setup_theme', 'mytheme_theme_support', 0);

remove_filter('term_description', 'wpautop');

///// custom widget initialization

function widget_areas_function()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'name' => 'Contact form',
            'id' => 'contact-form',
            'description' => 'Contact form 7'
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'name' => 'sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}

add_action('widgets_init', 'widget_areas_function');

////// WP BODY 

if (! function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
