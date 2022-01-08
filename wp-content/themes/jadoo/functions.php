<?php


add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );


/**
 * menus 
 */
require get_template_directory() . '/includes/menus-area.php';

/**
 * Scripts, styles
 */
require get_template_directory() . '/includes/enqueue-script-styles.php';

/**
 * widgets
 */
require get_template_directory() . '/includes/widget-area.php';

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'profile_link' );
remove_action( 'wp_head',  'rest_output_link_wp_head');


/*Общие настройки acf*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme settings',
		'menu_title'	=> 'Theme settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'position' 		=> '4.5',
		'update_button' => 'Update',
		'redirect'		=> false
	));
	
}


