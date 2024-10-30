<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if ( !class_exists( 'Mspts_Admin_Ajax' ) ) {
	
class Mspts_Admin_Ajax{
	public function __construct(){
		add_action('admin_enqueue_scripts', array($this, 'fpb_mspts_admin_js'));
		add_action('wp_ajax_fpb_mspts_save_design_setting', array($this, 'fpb_mspts_save_design_setting'));
		add_action('wp_ajax_fpb_mspts_save_slider_setting', array($this, 'fpb_mspts_save_slider_setting'));
	}
	
	/***********************************************************/
	/**** Function to enqueue js file and css on admin setting */
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 26-11-2018 ***************/
	/************  @return void  ***********************/
	/***********************************************************/
	
	public function fpb_mspts_admin_js() {
        if (is_admin()) {
            if (isset($_GET['page']) && $_GET['page'] == 'fpb_mspts_setting') {
				wp_register_style('ms-admin', FPB_MSPTS_PLUGIN_PATH . 'css/ms-admin.css', '' ,time());
				wp_enqueue_style('ms-admin');
				wp_register_style('font-awesome', FPB_MSPTS_PLUGIN_PATH . 'css/font-awesome.css');
				wp_enqueue_style('font-awesome');
				wp_enqueue_style( 'wp-color-picker' );
				wp_enqueue_script('ms-color-picker', FPB_MSPTS_PLUGIN_PATH . 'js/ms-color-picker.js' , array('wp-color-picker'), time() , true);
                wp_enqueue_script('ms-color-picker');
				wp_enqueue_script('ms-alert.min', FPB_MSPTS_PLUGIN_PATH . 'js/ms-alert.min.js' , array('jquery'), time() , true);
                wp_enqueue_script('ms-alert.min');
				wp_enqueue_script('ms-admin-js', FPB_MSPTS_PLUGIN_PATH . 'js/ms-admin.js' , array('jquery'), time() , true);
                wp_enqueue_script('ms-admin-js');
				wp_enqueue_script('ms-admin-ajax', FPB_MSPTS_PLUGIN_PATH . 'js/ms-admin-ajax.js' , array('jquery'), time() , true);
                wp_enqueue_script('ms-admin-ajax');
                wp_localize_script('ms-admin-ajax', 'adminajax', array('ajaxurl' => admin_url('admin-ajax.php'), 'ms_design_security' => wp_create_nonce('ms_save_design_set'), 'ms_slider_security' => wp_create_nonce('ms_save_slider_set')));
            }elseif(isset($_GET['page']) && $_GET['page'] == 'fpb_mspts_intro'){
				wp_register_style('ms-admin', FPB_MSPTS_PLUGIN_PATH . 'css/ms-admin.css', '' ,time());
				wp_enqueue_style('ms-admin');
				wp_register_style('font-awesome', FPB_MSPTS_PLUGIN_PATH . 'css/font-awesome.css');
				wp_enqueue_style('font-awesome');
			}
        }
    }
	
	/***************************************************/
	/**** Function to validate color code **************/
	/************  @author Munish Sharma  **************/ 
	/************  @since 1.0 - 1-01-2019 **************/
	/************  @return boolean *********************/
	/***************************************************/
	
	public function fpb_mspts_validate_hex_color($color){
		if(preg_match('/^#[a-f0-9]{6}$/i', $color)){
			return true;
		}
	    return false;
	}
	/***************************************************/
	/**** Function to save design setting *************/
	/************  @author Munish Sharma  **************/ 
	/************  @since 1.0 - 8-12-2018 **************/
	/************  @return json string *****************/
	/***************************************************/
	
	public function fpb_mspts_save_design_setting(){
		check_admin_referer( 'ms_save_design_set', 'ms_design_security' );
		$ms_design_set = array();
		$ms_field_error = array();
		$ms_sanitize_data = array();
		$ms_color_error = 'Enter valid color code.';
		$ms_valid_no = 'Enter valid number.';
		parse_str($_POST['ms_design_setting'], $ms_design_set);
		
		// loop each text field for sanitize //
		foreach ( $ms_design_set as $key => $val ) {
			$ms_sanitize_key = sanitize_text_field( $key );
			$ms_sanitize_data[ $ms_sanitize_key ] = sanitize_text_field( $val );
		}
		
		// check box background color //
		if(!empty($ms_sanitize_data['ms_box_back']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_box_back']) === false){
			$ms_field_error['error']['ms_box_back'] = $ms_color_error;
		}
		
		// check box border color //
		if(!empty($ms_sanitize_data['ms_box_border']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_box_border']) === false){
			$ms_field_error['error']['ms_box_border'] = $ms_color_error;
		}
		
		// check box shadow color //
		if(!empty($ms_sanitize_data['ms_box_shadow']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_box_shadow']) === false){
			$ms_field_error['error']['ms_box_shadow'] = $ms_color_error;
		}
		
		// check box top padding in px //
		if(!empty($ms_sanitize_data['ms_box_pad_top']) && !is_numeric($ms_sanitize_data['ms_box_pad_top'])){
			$ms_field_error['error']['ms_box_pad_top'] = null;
		}
		
		// check box right padding in px //
		if(!empty($ms_sanitize_data['ms_box_pad_right']) && !is_numeric($ms_sanitize_data['ms_box_pad_right'])){
			$ms_field_error['error']['ms_box_pad_right'] = null;
		}
		
		// check box bottom padding in px //
		if(!empty($ms_sanitize_data['ms_box_pad_bottom']) && !is_numeric($ms_sanitize_data['ms_box_pad_bottom'])){
			$ms_field_error['error']['ms_box_pad_bottom'] = null;
		}
		
		// check box left padding in px //
		if(!empty($ms_sanitize_data['ms_box_pad_left']) && !is_numeric($ms_sanitize_data['ms_box_pad_left'])){
			$ms_field_error['error']['ms_box_pad_left'] = null;
		}
		// check post title color //
        if(!empty($ms_sanitize_data['ms_title_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_title_color']) === false){
			$ms_field_error['error']['ms_title_color'] = $ms_color_error;
		}
		
		// check post title color hover //
		if(!empty($ms_sanitize_data['ms_title_hover']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_title_hover']) === false){
			$ms_field_error['error']['ms_title_hover'] = $ms_color_error;
		}
		
		// check post title font size in px //
		if(!empty($ms_sanitize_data['ms_title_font_size']) && !is_numeric($ms_sanitize_data['ms_title_font_size'])){
			$ms_field_error['error']['ms_title_font_size'] = $ms_valid_no;
		}
		
		// check post content font color //
		if(!empty($ms_sanitize_data['ms_content_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_content_color']) === false){
			$ms_field_error['error']['ms_content_color'] = $ms_color_error;
		}
		
		// check content font size in px //
		if(!empty($ms_sanitize_data['ms_content_font_size']) && !is_numeric($ms_sanitize_data['ms_content_font_size'])){
			$ms_field_error['error']['ms_content_font_size'] = $ms_valid_no;
		}
		
		// check author font color //
		if(!empty($ms_sanitize_data['ms_author_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_author_color']) === false){
			$ms_field_error['error']['ms_author_color'] = $ms_color_error;
		}
		
		// check author font size //
		if(!empty($ms_sanitize_data['ms_author_font_size']) && !is_numeric($ms_sanitize_data['ms_author_font_size'])){
			$ms_field_error['error']['ms_author_font_size'] = $ms_valid_no;
		}
		
		// check publish date color //
		if(!empty($ms_sanitize_data['ms_publish_date_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_publish_date_color']) === false){
			$ms_field_error['error']['ms_publish_date_color'] = $ms_color_error;
		}
		
		// check publish date font size //
		if(!empty($ms_sanitize_data['ms_publish_date_size']) && !is_numeric($ms_sanitize_data['ms_publish_date_size'])){
			$ms_field_error['error']['ms_publish_date_size'] = $ms_valid_no;
		}
		
		// check button border color //
		if(!empty($ms_sanitize_data['ms_btn_border']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_btn_border']) === false){
			$ms_field_error['error']['ms_btn_border'] = $ms_color_error;
		}
		
		// check button background color //
		if(!empty($ms_sanitize_data['ms_btn_back']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_btn_back']) === false){
			$ms_field_error['error']['ms_btn_back'] = $ms_color_error;
		}
		
		// check button background color hover //
		if(!empty($ms_sanitize_data['ms_btn_hover']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_btn_hover']) === false){
			$ms_field_error['error']['ms_btn_hover'] = $ms_color_error;
		}
		
		// check button border color on hover //
		if(!empty($ms_sanitize_data['ms_btn_border_on_hover']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_btn_border_on_hover']) === false){
			$ms_field_error['error']['ms_btn_border_on_hover'] = $ms_color_error;
		}
		
		// check button font color on hover //
		if(!empty($ms_sanitize_data['ms_btn_color_on_hover']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_btn_color_on_hover']) === false){
			$ms_field_error['error']['ms_btn_color_on_hover'] = $ms_color_error;
		}
		
		// check button font color  //
		if(!empty($ms_sanitize_data['ms_more_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_more_color']) === false){
			$ms_field_error['error']['ms_more_color'] = $ms_color_error;
		}
		
		// check button font size in px //
		if(!empty($ms_sanitize_data['ms_more_font_size']) && !is_numeric($ms_sanitize_data['ms_more_font_size'])){
			$ms_field_error['error']['ms_more_font_size'] = $ms_valid_no;
		}
		
		// check button top padding in px //
		if(!empty($ms_sanitize_data['ms_btn_pad_top']) && !is_numeric($ms_sanitize_data['ms_btn_pad_top'])){
			$ms_field_error['error']['ms_btn_pad_top'] = null;
		}
		
		// check button right padding in px //
		if(!empty($ms_sanitize_data['ms_btn_pad_right']) && !is_numeric($ms_sanitize_data['ms_btn_pad_right'])){
			$ms_field_error['error']['ms_btn_pad_right'] = null;
		}
		
		// check button bottom padding in px //
		if(!empty($ms_sanitize_data['ms_btn_pad_bottom']) && !is_numeric($ms_sanitize_data['ms_btn_pad_bottom'])){
			$ms_field_error['error']['ms_btn_pad_bottom'] = null;
		}
		
		// check button left padding in px //
		if(!empty($ms_sanitize_data['ms_btn_pad_left']) && !is_numeric($ms_sanitize_data['ms_btn_pad_left'])){
			$ms_field_error['error']['ms_btn_pad_left'] = null;
		}
		
		// check load more font color //
		if(!empty($ms_sanitize_data['ms_load_more_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_load_more_color']) === false){
			$ms_field_error['error']['ms_load_more_color'] = $ms_color_error;
		}
		
		// check load more font color hover //
		if(!empty($ms_sanitize_data['ms_load_more_hover_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_load_more_hover_color']) === false){
			$ms_field_error['error']['ms_load_more_hover_color'] = $ms_color_error;
		}
		
		// check load more background color //
		if(!empty($ms_sanitize_data['ms_load_back_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_load_back_color']) === false){
			$ms_field_error['error']['ms_load_back_color'] = $ms_color_error;
		}
		
		// check load more background color hover //
		if(!empty($ms_sanitize_data['ms_load_back_hover_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_load_back_hover_color']) === false){
			$ms_field_error['error']['ms_load_back_hover_color'] = $ms_color_error;
		}
		
		// check load more font size in px //
		if(!empty($ms_sanitize_data['ms_load_btn_font_size']) && !is_numeric($ms_sanitize_data['ms_load_btn_font_size'])){
			$ms_field_error['error']['ms_load_btn_font_size'] = $ms_valid_no;
		}
		
		// check load more shadow color //
		if(!empty($ms_sanitize_data['ms_load_shadow_color']) && $this->fpb_mspts_validate_hex_color($ms_sanitize_data['ms_load_shadow_color']) === false){
			$ms_field_error['error']['ms_load_shadow_color'] = $ms_color_error;
		}
		
		if(empty($ms_field_error)){
			$update_des_set = update_option('ms_design_setting', json_encode($ms_sanitize_data));
			$response_msg = ($update_des_set) ? 'Design setting saved.' : 'Unexpected error or nothing to save.';
		    die(Mspts_Admin_Func::fpb_mspts_print_json($update_des_set,'', $response_msg));
		}else{
			$response_msg = 'Please correct highlighted fields.';
			die(Mspts_Admin_Func::fpb_mspts_print_json('error', $ms_field_error, $response_msg));
		}
    }
	
	/***************************************************/
	/**** Function to save slider setting *************/
	/************  @author Munish Sharma  **************/ 
	/************  @since 1.0 - 18-12-2018 **************/
	/************  @return json string *****************/
	/***************************************************/
	
	public function fpb_mspts_save_slider_setting(){
		check_admin_referer( 'ms_save_slider_set', 'ms_slider_security' );
		$ms_slider_set = array();
		$ms_field_error = array();
		$ms_sanitize_data = array();
		$ms_valid_no = 'Enter valid number.';
		parse_str($_POST['ms_slider_setting'], $ms_slider_set);
		
		// loop each text field for sanitize //
		foreach ( $ms_slider_set as $key => $val ) {
			$ms_sanitize_key = sanitize_text_field( $key );
			$ms_sanitize_data[ $ms_sanitize_key ] = sanitize_text_field( $val );
		}
		
		// check slide to show //
		if(!empty($ms_sanitize_data['ms_slide_to_show']) && !is_numeric($ms_sanitize_data['ms_slide_to_show'])){
			$ms_field_error['error']['ms_slide_to_show'] = $ms_valid_no;
		}
		
		// check auto play speed //
		if(!empty($ms_sanitize_data['ms_autoplay_speed']) && !is_numeric($ms_sanitize_data['ms_autoplay_speed'])){
			$ms_field_error['error']['ms_autoplay_speed'] = $ms_valid_no;
		}
		
		if(empty($ms_field_error)){
			$update_slide_set = update_option('ms_slider_setting', json_encode($ms_sanitize_data));
			$response_msg = ($update_slide_set) ? 'Slider setting saved.' : 'Unexpected error or nothing to save.';
			die(Mspts_Admin_Func::fpb_mspts_print_json($update_slide_set,'', $response_msg));
		}else{
			$response_msg = 'Please correct highlighted fields.';
			die(Mspts_Admin_Func::fpb_mspts_print_json('error', $ms_field_error, $response_msg));
		}
    }	
  }
  new Mspts_Admin_Ajax;
}