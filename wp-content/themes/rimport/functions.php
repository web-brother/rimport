<?php 

show_admin_bar(false);

function style_files() {

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/vendors/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendors/font-awesome-4.6.3/css/font-awesome.min.css');
	wp_enqueue_style('lato_font', get_template_directory_uri() . '/resources/fonts/lato/latofonts.css');
	wp_enqueue_style('owl_carousel_css', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.css');
	wp_enqueue_style('owl_carousel_css_theme', get_template_directory_uri() . '/vendors/owl-carousel/owl.theme.css');
	wp_enqueue_style('lightbox_css', get_template_directory_uri() . '/vendors/lightbox2-master/src/css/lightbox.css');
}

add_action('wp_enqueue_scripts','style_files');

function js_files() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('parallax_js', get_template_directory_uri() . '/vendors/parallax.min.js', array('jquery'), '', true);
	wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.js', array('jquery'), '', true);
	wp_enqueue_script('light_js', get_template_directory_uri() . '/vendors/lightbox2-master/src/js/lightbox.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts','js_files');