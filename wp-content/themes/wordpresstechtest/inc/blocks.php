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
    }

add_action('init', 'wptest_blocks');