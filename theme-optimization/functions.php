<?php 

/* Change JPEG Quality */
add_filter('jpeg_quality', function($arg){return 80;});

/* Remove Contact Form 7 front-end assets from every page instead of Contact */
function remove_cf7_assets(){
	wp_reset_query();
	if(!is_page("contact")){
		add_filter( 'wpcf7_load_js', '__return_false' ); 
		add_filter( 'wpcf7_load_css', '__return_false' );
	}  
}
add_action("wp", "remove_cf7_assets");	




