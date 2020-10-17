<?php

function event_scripts(){
    wp_enqueue_style('event_main_style', get_theme_file_uri('/style.css'));
    wp_enqueue_script('event_slider', get_theme_file_uri('/js/Subscribe.js'), NULL, microtime(), true);
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'event_scripts');

function event_feature(){
    register_nav_menu('header_menu', 'Header Menu');
    add_image_size('slider', 300, 600, true);
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'event_feature');

function event_post_type(){
    register_post_type('slider', [
        'show_in_rest' => true,
        'public' => true,
        'supports' => ['title', 'thumbnail'],
        'show_ui' => true,
        'labels' => [
            'name' => 'Slider',
            'all_items' => 'All Slider',
            'edit_item' => 'Edit Slider',
            'add_item' => 'Add Slider',
            'singular_name' => 'slide' 
        ],
        'menu_icon' => 'dashicons-images-alt'
    ]);
}

add_action('init', 'event_post_type');
