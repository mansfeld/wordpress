<?php 

/* Change JPEG Quality */
add_filter('jpeg_quality', function($arg){return 80;});
