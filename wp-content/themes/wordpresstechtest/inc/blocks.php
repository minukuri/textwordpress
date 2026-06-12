<?php
function wptest_blocks() {
    wp_register_script(
        'hero-slider-block',
        get_template_directory_uri() . '/blocks/hero-slider/index.js',
        array(
            'wp-blocks',
            'wp-element',
            'wp-components',
            'wp-block-editor'
        ),
        filemtime(
            get_template_directory() . '/blocks/hero-slider/index.js'
        )
    );

    register_block_type(
        'wptest/hero-slider',
        array(
            'editor_script'   => 'hero-slider-block',
            'render_callback' => 'hero_slider_render'
        )
    );
    wp_register_script(
    'about-us-block',
    get_template_directory_uri() . '/blocks/about-us/index.js',
    array(
        'wp-blocks',
        'wp-element',
        'wp-components',
        'wp-block-editor'
    ),
    filemtime(
        get_template_directory() . '/blocks/about-us/index.js'
    )
);

register_block_type(
    'wptest/about-us',
    array(
        'editor_script'   => 'about-us-block',
        'render_callback' => 'about_us_render'
    )
);

wp_register_script(
    'practice-areas-block',
    get_template_directory_uri() . '/blocks/practice-areas/index.js',
    array(
        'wp-blocks',
        'wp-element',
        'wp-components',
        'wp-block-editor'
    ),
    filemtime(
        get_template_directory() . '/blocks/practice-areas/index.js'
    )
);

register_block_type(
    'wptest/practice-areas',
    array(
        'editor_script'   => 'practice-areas-block',
        'render_callback' => 'practice_areas_render'
    )
);
    
    }

add_action('init', 'wptest_blocks');
function hero_slider_render($attributes) {
    ob_start();
    include get_template_directory() . '/blocks/hero-slider/render.php';
    return ob_get_clean();
}
function about_us_render($attributes) {
    ob_start();
    include get_template_directory() . '/blocks/about-us/render.php';
    return ob_get_clean();
}

function practice_areas_render($attributes){
    ob_start();
    include get_template_directory() . '/blocks/practice-areas/render.php';
    return ob_get_clean();
}