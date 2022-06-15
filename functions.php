<?php

function mitte_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mitte-style', get_template_directory_uri() . "/style.css", array('mitte-goolgefonts'), $version, 'all');
    wp_enqueue_style('mitte-goolgefonts', 'https://fonts.googleapis.com/css2?family=Raleway&display=swap', array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'mitte_register_styles');


function mitte_register_scripts() {
    
    wp_enqueue_script('mitte-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('mitte-js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'mitte_register_scripts');