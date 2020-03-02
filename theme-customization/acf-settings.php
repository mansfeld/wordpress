<?php
function my_acf_op_init() {

    if( function_exists('acf_add_options_sub_page') ) {

        $parent = acf_add_options_page(array(
            'page_title'  => __('Advanced Theme Settings'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));
		
		$child = acf_add_options_sub_page(array(
            'page_title'  => __('Header Content'),
            'menu_title'  => __('Header'),
            'parent_slug' => $parent['menu_slug'],
        ));

       
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Footer Content'),
            'menu_title'  => __('Footer'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}
add_action('acf/init', 'my_acf_op_init');
