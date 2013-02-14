<?php
/*
Plugin Name: Metro Share Styles
Plugin URI: http://metronet.no/
Description: Provides a different set of styles for your sharing icons
Version: 0.1
Author: Metronet / Ryan Hellyer
Author URI: http://metronet.no/
*/


/*
 * Dequeue Metroshare CSS file
 *
 * @since 0.1
 * @author Ryan Hellyer <ryan@metronet.no>
 */
function metroshare_remove_styles() {
	wp_dequeue_style( 'metroshare-css' );
}
add_action( 'wp_enqueue_scripts', 'metroshare_remove_styles', 11 );

/*
 * Change Metroshare to another CSS file
 *
 * @since 0.1
 * @author Ryan Hellyer <ryan@metronet.no>
 */
function metroshare_add_styles() {
	wp_enqueue_style( 'metroshare-new-css', plugins_url( '/assets/metroshare.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'metroshare_add_styles' );

