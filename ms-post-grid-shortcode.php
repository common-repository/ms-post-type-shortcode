<?php
/*
Plugin Name: Ms Post Type Shortcode
Description: Display any post type posts in grid,slider,pagination using various shortcode.
Version:     1.0
Author:      Munish Sharma
Text Domain: ms-post-type-shortcode
License: GPLv2 or later
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/* Check wp version to run plugin */
global $wp_version;
$ms_ver_msg = 'Sorry, this plugin require wordpress version 4.0 or above.';
if (version_compare($wp_version,"4.0","<"))
	exit($ms_ver_msg);

/* Constant variable to access plugin url and dir */
if (!defined('FPB_MSPTS_DIR_PATH')) {
    define('FPB_MSPTS_DIR_PATH', plugin_dir_path(__FILE__));
}
if (!defined('FPB_MSPTS_PLUGIN_PATH')) {
    define('FPB_MSPTS_PLUGIN_PATH', plugin_dir_url(__FILE__));
}
if (!defined('FPB_MSPTS_INTRO_URL')) {
    define('FPB_MSPTS_INTRO_URL', admin_url( 'admin.php?page=fpb_mspts_intro' ));
}

/* Require all directory files */
$ms_lib_files = glob( FPB_MSPTS_DIR_PATH . 'inc/*.php' );
unset($ms_lib_files[2], $ms_lib_files[4]);
foreach ( $ms_lib_files as $ms_req_file )
	require_once( $ms_req_file );

	
/* Activation Hook */
register_activation_hook( __FILE__, 'fpb_mspts_grid_activate');

if (!function_exists('fpb_mspts_grid_activate')) {
	
	function fpb_mspts_grid_activate() {
		add_option('ms_grid_activation_redirect', true);
	}
	
}

/* Redirection Hook */
add_action('admin_init', 'fpb_mspts_redirect_to_intro');
if (!function_exists('fpb_mspts_redirect_to_intro')) {
	
  function fpb_mspts_redirect_to_intro() {
	if (get_option('ms_grid_activation_redirect', false)) {
		delete_option('ms_grid_activation_redirect');
		wp_redirect(FPB_MSPTS_INTRO_URL);
		exit;
	}
  }	
  
}