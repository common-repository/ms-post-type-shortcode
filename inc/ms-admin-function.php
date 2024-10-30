<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if ( !class_exists( 'Mspts_Admin_Func' ) ) {
	
	class Mspts_Admin_Func{
   
    /****************************************************/
    /*** Static Function to print json on admin setting */ 
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 7-12-2018 ***************/
	/************  @param boolean $status ***************/
	/************  @param string $data ******************/
	/************  @param string $msg *******************/
	/************  @return Json string ******************/
	/****************************************************/
	
	public static function fpb_mspts_print_json($status, $data, $msg){
		$json_str = array('status' => $status, 'data' => $data, 'msg' => $msg);
		return json_encode($json_str);
	}
	
	
	/****************************************************/
    /*** Static Function to clean special character *****/ 
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 7-12-2018 ***************/
	/************  @param string $string ***************/
	/************  @return string ***********************/
	/****************************************************/
	
	public static function fpb_mspts_clean_str($string){
		$clean_str = strtolower($string);
		return preg_replace('/[^a-z0-9 -]+/', '', $clean_str);
	}
	
	/****************************************************/
    /*** Static Function to fetch design setting *******/ 
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 8-12-2018 ***************/
	/************  @return json object ******************/
	/****************************************************/
	
	public static function fpb_mspts_design_option(){
		return json_decode(get_option('ms_design_setting'));
	}
	
	/****************************************************/
    /*** Static Function to fetch design setting *******/ 
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 8-12-2018 ***************/
	/************  @return json object ******************/
	/****************************************************/
	
	public static function fpb_mspts_slider_option(){
		return json_decode(get_option('ms_slider_setting'));
	}

  }
  new Mspts_Admin_Func;
}