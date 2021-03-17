<?php
add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');
function add_styles() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('main_style', get_stylesheet_uri());
	wp_enqueue_style('media', get_template_directory_uri().'/assets/css/media.css');
}
function add_scripts() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), null, true);
}
