<?php
require_once get_template_directory() . '/inc/blocks.php';
function wptest_enqueue_assets() {

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&family=Roboto+Slab:wght@500;600&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css',
        array(),
        '7.0.0'
    );

  
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        array(),
        '1.4.1'
    );


    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri().'/assets/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'owl-carousel',
        get_template_directory_uri().'/assets/lib/owlcarousel/assets/owl.carousel.min.css'
    );

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri().'/assets/lib/animate/animate.min.css'
    );
     wp_enqueue_style(
        'style-style',
        get_template_directory_uri().'/assets/css/style.css'
    );

    wp_deregister_script('jquery');

wp_register_script(
    'jquery',
    'https://code.jquery.com/jquery-3.4.1.min.js',
    array(),
    '3.4.1',
    true
);

wp_enqueue_script('jquery');

wp_enqueue_script(
    'bootstrap-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
    array('jquery'),
    '5.0.0',
    true
);

    wp_enqueue_script(
        'wow-js',
        get_template_directory_uri().'/assets/lib/wow/wow.min.js',
        ['jquery'],
        null,
        true
    );

    wp_enqueue_script(
        'easing',
        get_template_directory_uri().'/assets/lib/easing/easing.min.js',
        ['jquery'],
        null,
        true
    );

    wp_enqueue_script(
        'way-js',
        get_template_directory_uri().'/assets/lib/waypoints/waypoints.min.js',
        ['jquery'],
        null,
        true
    );
    wp_enqueue_script(
        'owl-js',
        get_template_directory_uri().'/assets/lib/owlcarousel/owl.carousel.min.js',
        ['jquery'],
        null,
        true
    );
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri().'/assets/js/main.js',
        ['jquery'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts','wptest_enqueue_assets');

// MENU 

function wptest_theme_setup() {
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu', 'wptest'),
            'footer_menu'  => __('Footer Quick Links', 'wptest')
        )
    );

}
add_action('after_setup_theme', 'wptest_theme_setup');

function wptest_practice_area() {
    register_post_type('practice_area', array(
        'labels' => array(
            'name'          => 'Practice Areas',
            'singular_name' => 'Practice Area'
        ),
        'public'       => true,
        'supports'     => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        ),
        'show_in_rest' => true

    ));
}

add_action('init', 'wptest_practice_area');