<?php
// Child Theme Functions

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'ip_add_google_fonts');
function ip_add_google_fonts() {
wp_enqueue_style( 'ip-google-fonts', 'https://fonts.googleapis.com/css?family=Acme|Raleway', false );
}
