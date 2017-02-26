<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // Include Parent Style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
