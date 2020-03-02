<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$image_url = $image[0];
?>

<img src="<?php echo $image_url; ?>" alt="<?php bloginfo("url") ?>">
