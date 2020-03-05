<?php 
/* Basics */


/* Main menu initialization */

function reg_mymenu(){
	register_nav_menu('header-menu', __('Main Menu'));
}
add_action('init', 'reg_mymenu');



/* Custom logo support */

add_theme_support('custom-logo');



/* Post Thumbnails support */

add_theme_support('post-thumbnails', array('post', 'page', 'my_custom_post_type'));



/* Custom widget support */

function custom_widget_init(){
	register_sidebar(
		array(
			'name'          => 'Custom-widget',
			'id'            => 'custom-widget',
			'before_widget' => ' ',
			'after_widget'  => ' ',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
}
add_action('widgets_init', 'custom_widget_init');
