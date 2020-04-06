<?php

/* Remove Comments */

function remove_comments_from_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_comments_from_admin_menus' );


function remove_comments_post_and_pages() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action('init', 'remove_comments_post_and_pages', 100);


function remove_comments_from_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments_from_bar' );

/* Remove Comments END */



/* Custom image size */
function add_blog_thumbnail_size() {
    add_image_size( 'blog-thumbnail', 809, 500, true ); /* (cropped) */
}
add_action( 'after_setup_theme', 'add_blog_thumbnail_size' );



/* Change excerpt length */
function my_excerpt_length($length){
	return 32;
}
add_filter("excerpt_length", "my_excerpt_length");



/* Change excerpt ending [...] */
function new_excerpt_more( $more ) {
	return " ...";
}
add_filter('excerpt_more', 'new_excerpt_more');

