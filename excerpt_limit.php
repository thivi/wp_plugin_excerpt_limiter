<?php
 /*
   Plugin Name: Excerpt Limiter
   Description: Limit excerpt length to 15
   Version: 1
   Author: Thivi
   Author URI: 
   License: GPL2
   */
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>