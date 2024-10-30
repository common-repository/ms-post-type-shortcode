<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if ( !class_exists( 'Mspts_Admin_Menu' ) ) {
	
class Mspts_Admin_Menu{
	
	public function __construct(){
		/* Hook to add menu in admin */
		add_action('admin_menu', array($this, 'fpb_mspts_admin_menu'));
	}
	
	/****************************************************/
	/**** Function to add menu on admin setting */
	/****************************************************/
	
	public function fpb_mspts_admin_menu() {
        add_menu_page('Ms Grid Post', 'Ms Grid Post', 'administrator', 'fpb_mspts_setting', array($this, 'fpb_mspts_admin_setting'), '', 24);
		add_submenu_page('fpb_mspts_setting', 'Settings', 'Settings', 'administrator', 'fpb_mspts_setting');
		add_submenu_page('fpb_mspts_setting', 'Introduction', 'Introduction', 'administrator', 'fpb_mspts_intro', array($this, 'fpb_mspts_admin_intro'));
    }
	
	/****************************************************/
	/**** Function to include template on admin setting */
	/****************************************************/
	
	public function fpb_mspts_admin_setting() {
        include( FPB_MSPTS_DIR_PATH . 'inc/ms-admin-setting.php');
    }
	
	/****************************************************/
	/**** Function to include template on introduction page */
	/****************************************************/
	
	public function fpb_mspts_admin_intro() {
	    include( FPB_MSPTS_DIR_PATH . 'inc/ms-admin-intro.php'); 
    }  
  }
  new Mspts_Admin_Menu;
}