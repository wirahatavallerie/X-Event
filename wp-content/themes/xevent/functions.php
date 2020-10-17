<?php

function event_scripts(){
    wp_enqueue_style('event_main_style', get_theme_file_uri('/style.css'));
    wp_enqueue_script('event_slider', get_theme_file_uri('./js/slider.js'));
}

add_action('wp_enqueue_scripts', 'event_scripts');

function event_feature(){
    register_nav_menu('header_menu', 'Header Menu');
}

add_action('after_setup_theme', 'event_feature');