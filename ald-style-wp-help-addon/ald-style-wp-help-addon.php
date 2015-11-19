<?php
/*
Plugin Name: WP Help Style add-on 
Plugin URI:  http://knowledge.parcours-performance.com
Description: Styles (print & screen) pour l'extension wp-help
Version:     1.0
Author:      Anne-Laure Delpech
Author URI:  http://knowledge.parcours-performance.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: ald-animate
 * @package			ald-style-wp-help-addon
 * @version			1.0.0
 * @author 			Anne-Laure Delpech
 * @copyright 		Copyright (c) 2014-2014, Anne-Laure Delpech
 * @link			https://github.com/aldelpech/Plugins-WP/
 * @license 		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @since 			0.1.0
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/*----------------------------------------------------------------------------*
 * Path to files
 * @since 0.1.0
 *----------------------------------------------------------------------------*/
	/* 	will render
	http://testal.parcours-performance.com/wp-content/plugins/ald-animate/???  --> ALD_ANIM_DIR_URL
	/home/parcoursz/testal/wp-content/plugins/ald-animate/???  --> ALD_ANIM_DIR_URL
	ald-animate/ald-animate.php  --> ALD_ANIM_BASENAME
	/home/parcoursz/testal/wp-content/plugins/ald-animate/ald-animate.php --> ALD_ANIM_MAIN_FILE
	*/
	define( 'ALD_WP_HELP_MAIN_FILE', __FILE__ );
	define( 'ALD_WP_HELP_BASENAME', plugin_basename( ALD_WP_HELP_MAIN_FILE ));
	define( 'ALD_WP_HELP_DIR_PATH', plugin_dir_path( ALD_WP_HELP_MAIN_FILE ));
	define( 'ALD_WP_HELP_DIR_URL', plugin_dir_url( ALD_WP_HELP_MAIN_FILE ));
	


/********************************************************************************
* appeler d'autres fichiers php et les exécuter
* @since 0.1
********************************************************************************/	
	/* main source of the code 
	* http://www.jeremycookson.com/how-to-add-scrolling-animations-in-wordpress/
	*/
	
	// charger des styles, fonts ou scripts correctement
	require_once ALD_WP_HELP_DIR_PATH . 'includes/ald-style-wp-help-addon-enqueues.php'; 


	
/******************************************************************************
* Actions à réaliser à l'initialisation et l'activation du plugin
* @since 0.1.0
******************************************************************************/

	function ald_wp_help_addon_functions_activation() {
		

	}

	register_activation_hook(__FILE__, 'ald_wp_help_addon_functions_activation'); // plugin's activation 


/*----------------------------------------------------------------------------*
 * deactivation and uninstall
 * * @since 0.1.0
 *----------------------------------------------------------------------------*/
	/* upon deactivation, wordpress also needs to rewrite the rules */
	register_deactivation_hook(__FILE__, 'ald_wp_help_addon_functions_deactivation');

	function ald_wp_help_addon_functions_deactivation() {
		// flush_rewrite_rules(); // pour remettre à 0 les permaliens
	}
	
	// register uninstaller
	register_uninstall_hook(__FILE__, 'ald_wp_help_addon_functions_uninstall');
	
	function ald_wp_help_addon_functions_uninstall() {    
		// actions to perform once on plugin uninstall go here
		// remove all options and custom tables
	}