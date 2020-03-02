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

