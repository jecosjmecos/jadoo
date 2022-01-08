<?php

/**
 * scripts and styles.
 */
function my_site_scripts() {
	//styles
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '1.0', 'all' );
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts/fonts.css', array(), '1.0', 'all');
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all' );

	//scripts
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '1.0', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '1.0', true );
	wp_enqueue_script( 'jquery.mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array(), '1.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_site_scripts' );