<?php
add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');
add_action('after_setup_theme', 'my_menu');
add_filter('nav_menu_link_attributes', 'set_class_nav_menu_links',10,3);
function add_styles() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('main_style', get_stylesheet_uri());
	wp_enqueue_style('media_query', get_template_directory_uri().'/assets/css/media.css');
}
function add_scripts() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), null, true);
}
function my_menu() {
	register_nav_menu('top_menu', 'main_menu');
}
function set_class_nav_menu_links($atts, $item, $args) {
	if ($args->menu === 'main_menu') {
		$atts['class'] = 'nav-link';
	}
	return $atts;
}