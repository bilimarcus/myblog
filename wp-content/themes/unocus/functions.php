<?php 


/**
 * Enqueue scripts and styles.
 */
function unocus_scripts() {
	wp_enqueue_style( 'unocus-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'unocus_scripts' );

 ?>