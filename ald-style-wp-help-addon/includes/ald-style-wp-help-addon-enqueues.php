<?php
/**
 *
 * charger une feuille de style spécifique à wp-help
 *
 *
 * @link       	http://parcours-performance.com/anne-laure-delpech/#ald
 * @since      	0.1.0
 *
 * @package    ald-style-wp-help-addon
 * @subpackage ald-style-wp-help-addon/includes
 */

// the hook was provided on https://wordpress.org/support/topic/plugin-wp-help-modify-css
add_action( 'cws_wp_help_load', 'ald_wp_help_addon_enqueue_scripts' ); 

function ald_wp_help_addon_enqueue_scripts() {

	// feuille de style 
	wp_enqueue_style( 'wp-help-style', ALD_WP_HELP_DIR_URL . '/css/wp-help.css' ); 


	/* enqueue js script */

}
