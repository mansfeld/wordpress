<?php

/**
* Plugin Name: Add Custom Post Type
* Plugin URI: http://mansfeld.pl/
* Description: Add Custom Post Type PlugIn
* Version: 1.0
* Author: Paweł Mansfeld
* Author URI: http://mansfeld.pl/
**/

function add_custom() {
	register_post_type( 'MyCustomPosts',
	array(
	  'labels' => array(
	   'name' => __( 'MyCustomPosts' ),
	   'singular_name' => __( 'MyCustomPost' )
	  ),
	  'public' => true,
	  'has_archive' => false,
	   'menu_icon' => 'dashicons-store',
	  'rewrite' => array('slug' => 'custom-post'),
	   'supports' => array( 'title', 'editor', 'custom-fields' ),
		'description' => 'My Custom Posts.',
		 'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		 'taxonomies' => array('post_tag', 'category')
	 )
	);
}

add_action( 'init', 'add_custom' );


