<?php

function mytheme_load_scripts()
{
    // ✅ Swiper CSS i JS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js', array(), null, true);

    // ✅ GSAP + ScrollTrigger (⚠️ async uklonjen jer remeti ovisnosti)
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);

    // ✅ BaguetteBox CSS i JS
    wp_enqueue_style('baguettebox-css', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css');
    wp_enqueue_script('baguettebox-js', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js', array(), null, true);

    // ✅ Tvoj CSS
    wp_enqueue_style('css-style', get_theme_file_uri('/dist/style.css'));

    // ✅ Tvoj JS - učitava se nakon svih ovisnosti
    wp_enqueue_script(
        'js-script',
        get_theme_file_uri('/src/js/main.js'),
        array('gsap', 'scrolltrigger', 'swiper-js', 'baguettebox-js'),
        null,
        true
    );

    // ✅ Debug poruka da znaš da su JS fajlovi učitani
    wp_add_inline_script('js-script', 'console.log("✅ main.js loaded | gsap:", typeof gsap);');
}
add_action('wp_enqueue_scripts', 'mytheme_load_scripts');


// ------------------------------
// Theme Support
// ------------------------------
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
    add_theme_support('wp-pagenavi');
    add_image_size('pageBanner', 1048, 385, true);
    add_theme_support('custom-header');
}
add_action('after_setup_theme', 'mytheme_theme_support', 0);


// ------------------------------
// Widget Areas
// ------------------------------
function widget_areas_function()
{
    register_sidebar(array(
        'name'          => 'Contact form',
        'id'            => 'contact-form',
        'description'   => 'Contact form 7',
        'before_title'  => '',
        'after_title'   => '',
        'before_widget' => '<ul>',
        'after_widget'  => '</ul>',
    ));

    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Sidebar Widget Area',
        'before_title'  => '',
        'after_title'   => '',
        'before_widget' => '<ul>',
        'after_widget'  => '</ul>',
    ));
}
add_action('widgets_init', 'widget_areas_function');


// ------------------------------
// Compatibility for wp_body_open
// ------------------------------
if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}


// ------------------------------
// Misc: cleaner SEO/UX filters
// ------------------------------

// ✅ Disable wpautop on term descriptions
remove_filter('term_description', 'wpautop');

// ✅ Lazy loading on images
add_filter('wp_get_attachment_image_attributes', function ($attr) {
    $attr['loading'] = 'lazy';
    return $attr;
});

// ✅ Fallback alt tag (if missing)
add_filter('wp_get_attachment_image_attributes', function ($attr, $attachment) {
    if (empty($attr['alt'])) {
        $attr['alt'] = get_the_title($attachment->ID);
    }
    return $attr;
}, 10, 2);

// ✅ Add rel="noopener noreferrer" + target="_blank" to external links in content
add_filter('the_content', function ($content) {
    return preg_replace_callback(
        '/<a\s[^>]*href=["\'](http[s]?:\/\/[^"\']+)["\'][^>]*>/i',
        function ($matches) {
            $tag = $matches[0];
            if (strpos($tag, 'rel=') === false) {
                $tag = str_replace('<a', '<a rel="noopener noreferrer" target="_blank"', $tag);
            }
            return $tag;
        },
        $content
    );
});
