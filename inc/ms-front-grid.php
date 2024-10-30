<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if ( !class_exists( 'Mspts_Front_Grid' ) ) {
	
class Mspts_Front_Grid{
	
	public function __construct(){
		/* Shortcode for frontend depend on shortcode attribute */
		add_shortcode('ms_post_grid', array($this, 'fpb_mspts_default_post'));
		add_shortcode('ms_post_slider', array($this, 'fpb_mspts_post_slider'));
		add_shortcode('ms_post_paginate', array($this, 'fpb_mspts_post_paginate'));
		add_action('wp_enqueue_scripts', array($this, 'fpb_mspts_front_scripts'));
	}
	
	public function fpb_mspts_design_common_css(){
			wp_register_style('ms-front', FPB_MSPTS_PLUGIN_PATH . 'css/front/ms-front.css' , array() , time());
			wp_enqueue_style('ms-front');
			wp_register_style('font-awesome', FPB_MSPTS_PLUGIN_PATH . 'css/font-awesome.css');
			wp_enqueue_style('font-awesome');
			$ms_box_back = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_back) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_back : '#f1f1f1';
			$ms_box_border = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_border) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_border : '#ccc';
			$ms_box_shadow = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_shadow) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_shadow : '#ccc';
			$ms_title_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_color : '#000';
			$ms_title_hover = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_hover) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_hover : '#333';
            $ms_title_font_size =	!empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_font_size) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_font_size : '17';
			$ms_content_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_content_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_content_color : '#000';
			$ms_content_font_size = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_content_font_size) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_content_font_size : '14';
			$ms_author_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_author_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_author_color : '#555';
			$ms_author_font_size = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_author_font_size) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_author_font_size : '14';
			$ms_publish_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_publish_date_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_publish_date_color : '#555';
			$ms_publish_font_size = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_publish_date_size) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_publish_date_size : '14';
			$ms_btn_border = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_border) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_border : '#0073aa';
			$ms_btn_back = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_back) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_back : '#0085ba';
			$ms_btn_hover = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_hover) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_hover : '#008ec2';
			$ms_btn_border_hover = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_border_on_hover) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_border_on_hover : '#008ec2';
			$ms_btn_font_hover = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_color_on_hover) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_color_on_hover : '#fff';
			$ms_more_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_more_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_more_color : '#fff';
			$ms_more_font_size = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_more_font_size) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_more_font_size : '15';
			/* Button padding*/
			$ms_btn_pad_top = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_top) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_top.'px' : '5px';
			$ms_btn_pad_right = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_right) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_right.'px' : '5px';
			$ms_btn_pad_bottom = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_bottom) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_bottom.'px' : '5px';
			$ms_btn_pad_left = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_left) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_left.'px' : '5px';
			/* end */
			/* Box padding */
			$ms_box_pad_top = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_top) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_top.'px' : '15px';
			
			$ms_box_pad_right = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_right) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_right.'px' : '15px';
			
			$ms_box_pad_bottom = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_bottom) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_bottom.'px' : '15px';
			
			$ms_box_pad_left = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_left) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_left.'px' : '15px';
			/* end */
			/* Load more button */
			$ms_load_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_more_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_more_color : '#fff';
			$ms_load_back_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_back_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_back_color : '#0073aa';
			$ms_load_shadow_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_shadow_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_shadow_color : '#ccc';
			$ms_load_font_size = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_btn_font_size) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_btn_font_size : '22';
			$ms_load_hover_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_more_hover_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_more_hover_color : '#fff';
			$ms_load_hover_back_color = !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_back_hover_color) ? Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_back_hover_color : '#0073aa';
			/* end */
			$design_css = "
			    .ms-wrap{
					background-color: {$ms_box_back};
					border: 1px solid {$ms_box_border};
					box-shadow: 0 4px 8px 0 {$ms_box_shadow}; 
					padding : {$ms_box_pad_top} {$ms_box_pad_right} {$ms_box_pad_bottom} {$ms_box_pad_left};
				}
				.ms-post-title a {
					font-size: {$ms_title_font_size}px;
					color: {$ms_title_color} !important;
				}
				.ms-post-title a:hover{
					color: {$ms_title_hover} !important;
				}
				.ms-post-content p{
					font-size: {$ms_content_font_size}px;
					color: {$ms_content_color};
				}
				.ms-post-meta span.ms-author{
					color: {$ms_author_color};
					font-size: {$ms_author_font_size}px;
				}
				.ms-post-meta span.ms-date {
					color: {$ms_publish_color};
					font-size: {$ms_publish_font_size}px;
				}
                .ms-read-more-btn a{
					border: 1px solid {$ms_btn_border};
					background: {$ms_btn_back};
					color: {$ms_more_color} !important;
					font-size: {$ms_more_font_size}px;
					padding : {$ms_btn_pad_top} {$ms_btn_pad_right} {$ms_btn_pad_bottom} {$ms_btn_pad_left};
					text-decoration: none !important;
                }
				.ms-read-more-btn a:hover{
					background:{$ms_btn_hover};
					border: 1px solid {$ms_btn_border_hover};
					color: {$ms_btn_font_hover} !important;
				}
				.ms-loadmore a {
					background: {$ms_load_back_color};
					color: {$ms_load_color};
					box-shadow: 0 0 17px {$ms_load_shadow_color};
					font-size: {$ms_load_font_size}px
				}
				.ms-loadmore a:hover{
					background: {$ms_load_hover_back_color};
					color: {$ms_load_hover_color};
				}
				";
			wp_add_inline_style( 'ms-front', $design_css );
	}
	
	/***********************************************************/
	/**** Function to enqueue js file and css on front end */
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 12-12-2018 ***************/
	/************  @return void  ***********************/
	/***********************************************************/
	
	public function fpb_mspts_front_scripts() {
		global $post;
		if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'ms_post_grid')) {
			$this->fpb_mspts_design_common_css();
		}elseif(is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'ms_post_slider')){
			$this->fpb_mspts_design_common_css();
			wp_register_style('ms-slider', FPB_MSPTS_PLUGIN_PATH . 'css/front/ms-slider.css' , array());
			wp_enqueue_style('ms-slider');
			wp_register_style('ms-slider-theme', FPB_MSPTS_PLUGIN_PATH . 'css/front/ms-slider-theme.css' , array() , time());
			wp_enqueue_style('ms-slider-theme');
			wp_register_script('ms-slider', FPB_MSPTS_PLUGIN_PATH . 'js/front/ms-slider.js' , array('jquery'), '' , true);
            wp_enqueue_script('ms-slider');
			wp_register_script('ms-front', FPB_MSPTS_PLUGIN_PATH . 'js/front/ms-front.js' , array('jquery'), time() , true);
            wp_enqueue_script('ms-front');
			/******** Slider setting variable ********/
			$slider_arrow = isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow) ? Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow : null;
			$slider_dot = isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots) ? Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots : null;
			$slider_auto_play = isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_autoplay) ? Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_autoplay : null;
			$slider_arrow_mobile = isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow_mobile) ? Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow_mobile : null;
			$slider_dot_mobile = isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots_mobile) ? Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots_mobile : null;
			/******** Slider setting variable ********/
			wp_localize_script('ms-front', 'ms_script_vars', array(
			   'ajaxurl' => admin_url('admin-ajax.php'),
			   'arrows' => !empty($slider_arrow && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow == 'on') ? true : false,
			   'dots' => !empty($slider_dot && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots == 'on') ? true : false,
			   'slidesToShow' => !empty(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_to_show) ? Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_to_show : 3,
			   'autoplay' => !empty($slider_auto_play && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_autoplay = 'on') ? true : false,
			   'autoplaySpeed' => !empty(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_autoplay_speed) ? Mspts_Admin_Func::fpb_mspts_slider_option()->ms_autoplay_speed * 1000: 1500,
			   'arrows_mobile' => !empty($slider_arrow_mobile && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow_mobile == 'on') ? true : false,
			   'dots_mobile' => !empty($slider_dot_mobile && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots_mobile == 'on') ? true : false
			  )
		    );
		}elseif(is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'ms_post_paginate')){
			$this->fpb_mspts_design_common_css();
			wp_register_script('ms-front-paginate', FPB_MSPTS_PLUGIN_PATH . 'js/front/ms-front-paginate.js' , array('jquery'), time() , true);
            wp_enqueue_script('ms-front-paginate');
			wp_localize_script('ms-front-paginate', 'frontpaginate', array('ajaxurl' => admin_url('admin-ajax.php')));
		}
    }
		
	/****************************************************/
    /*** Function to display post by shortcode attribute */ 
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 14-12-2018 **************/
	/************  @return post grid html ***************/
	/****************************************************/
	
	public function fpb_mspts_default_post( $atts ) {
		$output = '';
		$wright_col = array('2','3','4','6');
		$default_col= 4;
		// define attributes and their defaults
		extract( shortcode_atts( array (
			'type' => 'post',
			'order' => 'DESC',
			'orderby' => 'date',
			'taxanomy' => 'category',
			'cat_id' => 1,
			'posts_per_page' => -1,
			'show_feature_img' => true,
			'feature_img_size' => 'large',
			'feature_img_class' => 'ms-feature-img',
			'show_excerpt' => true,
			'word_in_content' => 20,
			'show_read_more' => true,
			'read_more_text' => 'Read More',
			'col' => 4,
			'author_name' => true,
			'publish_date' => true,
			'publish_date_format' => 'F j, Y',
			'ms_post_meta' => true,
			'ms_show_all' => false
		), $atts ) );
    
		if($ms_show_all){
			// define query parameters based on attributes
			$ms_grid_query = array(
				'post_type' => $type,
				'order' => $order,
				'orderby' => $orderby,
				'posts_per_page' => $posts_per_page
			);
		}else{
			// define query parameters based on attributes
			$ms_grid_query = array(
				'post_type' => $type,
				'order' => $order,
				'orderby' => $orderby,
				'posts_per_page' => $posts_per_page,
				'tax_query' => array(
						array(
						  'taxonomy' => $taxanomy,
						  'terms'    => $cat_id
					),
				), 
			);
		}
	    
		$ms_query = new WP_Query( $ms_grid_query );
		$column = (isset($col) && in_array($col, $wright_col)) ? $col : $default_col;
		  if ( $ms_query->have_posts() ) {
		   $output .= '<div class=\'row\'>';
			while ( $ms_query->have_posts() ) {
				$ms_query->the_post();
				$output .= '<div class=\'ms-col-'.$column.'\'>';
				$output .= '<div class=\'ms-wrap\'>';
				if(isset($show_feature_img) && $show_feature_img === true){
				   if ( has_post_thumbnail( $ms_query->ID ) ) {
					  $output .= '<div class=\'ms-post-featured-image\'>';
					  $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					  $output .= get_the_post_thumbnail( $ms_query->ID, $feature_img_size , array( 'class' =>  $feature_img_class));
					  $output .= '</a>';
					  $output .= '</div>';
					}else{
					  $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					  $output .= '<img src="'.FPB_MSPTS_PLUGIN_PATH.'css/images/ms-default-img.jpg">';
					  $output .= '</a>'; 
					}
				}else{
					$output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					$output .= '<img src="'.FPB_MSPTS_PLUGIN_PATH.'css/images/ms-default-img.jpg">';
					$output .= '</a>';
				}
				if(isset($ms_post_meta) && $ms_post_meta === true){
					$output .= '<div class=\'ms-post-meta\'>';
						if($author_name === true && $publish_date === true){
							$output .= '<span class=\'ms-author\'>'. get_the_author().'</span>';
							$output .= '<span class=\'ms-date\'>'.get_the_date($publish_date_format).'</span>';
						}elseif($author_name === true){
							$output .= '<span class=\'ms-author\'>'.get_the_author().'</span>';
						}elseif($publish_date === true){
							$output .= '<span class=\'ms-date\'>'.get_the_date($publish_date_format).'</span>';
						}
					$output .= '</div>';
				}
				$output .= '<div class=\'ms-post-title\'><strong><a href="'.esc_url( get_permalink($ms_query->ID) ).'">' . esc_attr( get_the_title() ) . '</a></strong></strong></div>';
				if(isset($show_excerpt) && $show_excerpt === true){
				   if ( has_excerpt( $ms_query->ID ) ) {
					  $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_excerpt(), $word_in_content, ''). '</p></div>';
					} else {
					  $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_content(), $word_in_content, ''). '</p></div>';
					}
				}else{
				   $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_content(), $word_in_content, ''). '</p></div>';
				}
				if(isset($show_read_more) && $show_read_more === true){
					$output .= '<div class=\'ms-read-more-btn\'><a href="'. esc_url( get_permalink($ms_query->ID) ) .'">' . esc_attr($read_more_text) . '</a></div>';
				}
				$output .= '</div>';
				$output .= '</div>';
			}
			wp_reset_postdata();
			$output .= '</div>';
		}else {
			$output .= '<div class="ms-alert-danger">No record found.</div>';
		}
		return $output;
	}
		
	/****************************************************/
    /*** Function to display post on slider ***********/ 
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 15-12-2018 **************/
	/************  @return post grid slider ***************/
	/****************************************************/
	
	public function fpb_mspts_post_slider( $atts ) {
		$output = '';
		$posts_per_page = -1;
		$wright_col = array('2','3','4','6');
		$default_col= 4;
		// define attributes and their defaults
		extract( shortcode_atts( array (
			'type' => 'post',
			'order' => 'DESC',
			'orderby' => 'date',
			'taxanomy' => 'category',
			'cat_id' => 1,
			'col' => 4,
			'show_feature_img' => true,
			'feature_img_size' => 'large',
			'feature_img_class' => 'ms-feature-img',
			'show_excerpt' => true,
			'word_in_content' => 20,
			'show_read_more' => true,
			'read_more_text' => 'Read More',
			'author_name' => true,
			'publish_date' => true,
			'ms_post_meta' => true,
			'publish_date_format' => 'F j, Y',
			'ms_show_all' => false
		), $atts ) );
	    
		if($ms_show_all){
			// define query parameters based on attributes
			$ms_slider_query = array(
				'post_type' => $type,
				'order' => $order,
				'orderby' => $orderby,
				'posts_per_page' => $posts_per_page
			);
		}else{
			// define query parameters based on attributes
			$ms_slider_query = array(
				'post_type' => $type,
				'order' => $order,
				'posts_per_page' => $posts_per_page,
				'orderby' => $orderby,
				'tax_query' => array(
						array(
						  'taxonomy' => $taxanomy,
						  'terms'    => $cat_id
					),
				), 
			);
		}
		$ms_query = new WP_Query( $ms_slider_query );
		$column = (isset($col) && in_array($col, $wright_col)) ? $col : $default_col;
		if ( $ms_query->have_posts() ) {
			$output .= '<div class=\'row\'>';
			$output .= '<div class=\'ms-post-slider\'>';
			while ( $ms_query->have_posts() ) {
				$ms_query->the_post();
				$output .= '<div class=\'ms-col-'.$column.'\'>';
				$output .= '<div class=\'ms-wrap\'>';
				if(isset($show_feature_img) && $show_feature_img === true){
				   if ( has_post_thumbnail( $ms_query->ID ) ) {
					  $output .= '<div class=\'ms-post-featured-image\'>';
					  $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					  $output .= get_the_post_thumbnail( $ms_query->ID, $feature_img_size , array( 'class' =>  $feature_img_class));
					  $output .= '</a>';
					  $output .= '</div>';
					}else{
					  $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					  $output .= '<img src="'.FPB_MSPTS_PLUGIN_PATH.'css/images/ms-default-img.jpg">';
					  $output .= '</a>'; 
					}
				}else{
				    $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					$output .= '<img src="'.FPB_MSPTS_PLUGIN_PATH.'css/images/ms-default-img.jpg">';
					$output .= '</a>';
				}
				if(isset($ms_post_meta) && $ms_post_meta === true){
					$output .= '<div class=\'ms-post-meta\'>';
						if($author_name === true && $publish_date === true){
							$output .= '<span class=\'ms-author\'>'.get_the_author().'</span>';
							$output .= '<span class=\'ms-date\'>'.get_the_date($publish_date_format).'</span>';
						}elseif($author_name === true){
							$output .= '<span class=\'ms-author\'>'.get_the_author().'</span>';
						}elseif($publish_date === true){
							$output .= '<span class=\'ms-date\'>'.get_the_date($publish_date_format).'</span>';
						}
					$output .= '</div>';
				}
				$output .= '<div class=\'ms-post-title\'><strong><a href="'.esc_url( get_permalink($ms_query->ID) ).'">' . esc_attr( get_the_title() ) . '</a></strong></strong></div>';
				if(isset($show_excerpt) && $show_excerpt === true){
				   if ( has_excerpt( $ms_query->ID ) ) {
					  $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_excerpt(), $word_in_content, ''). '</p></div>';
				    } else {
					  $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_content(), $word_in_content, ''). '</p></div>';
				    }
				}else{
				   $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_content(), $word_in_content, ''). '</p></div>';
				}
				if(isset($show_read_more) && $show_read_more === true){
					$output .= '<div class=\'ms-read-more-btn\'><a href="'. esc_url( get_permalink($ms_query->ID) ) .'">' . esc_attr($read_more_text) . '</a></div>';
				}
				$output .= '</div>';
				$output .= '</div>';
			}
			wp_reset_postdata();
			$output .= '</div>';
			$output .= '</div>';
		}else {
			$output .= '<div class="ms-alert-danger">No record found.</div>';
		}
		return $output;
	}
	
	/****************************************************/
    /*** Function to display post on load more ***********/ 
	/************  @author Munish Sharma  ***************/ 
	/************  @since 1.0 - 16-12-2018 **************/
	/************  @return post grid pagination **********/
	/****************************************************/
	
	public function fpb_mspts_post_paginate( $atts ) {
		$output = '';
		$wright_col = array('2','3','4','6');
		$default_col= 4;
		// define attributes and their defaults
		extract( shortcode_atts( array (
			'type' => 'post',
			'order' => 'DESC',
			'orderby' => 'date',
			'posts_per_page' => 4,
			'taxanomy' => 'category',
			'cat_id' => 1,
			'col' => 4,
			'paged' => 1,
			'show_feature_img' => true,
			'feature_img_size' => 'large',
			'feature_img_class' => 'ms-feature-img',
			'show_excerpt' => true,
			'word_in_content' => 20,
			'show_read_more' => true,
			'read_more_text' => 'learn more',
			'load_more_text' => 'load more',
			'author_name' => true,
			'publish_date' => true,
			'ms_post_meta' => true,
			'publish_date_format' => 'F j, Y',
			'ms_show_all' => false
		), $atts ) );
	 
		if($ms_show_all){
			// define query parameters based on attributes
			$ms_paginate_query = array(
				'post_type' => $type,
				'order' => $order,
				'orderby' => $orderby,
				'posts_per_page' => $posts_per_page
			);
		}else{
		   	// define query parameters based on attributes
			$ms_paginate_query = array(
				'post_type' => $type,
				'order' => $order,
				'orderby' => $orderby,
				'posts_per_page' => $posts_per_page,
				'paged' => $paged,
				'tax_query' => array(
						array(
						  'taxonomy' => $taxanomy,
						  'terms'    => $cat_id
					),
				), 
			);
		}
		$column = (isset($col) && in_array($col, $wright_col)) ? $col : $default_col;
		//define query parameters based on ajax call
		$ms_data_args = array(
			'post_type' => $type,
			'order' => $order,
			'orderby' => $orderby,
			'posts_per_page' => $posts_per_page,
		    'taxonomy' => $taxanomy,
		    'terms'    => $cat_id,
			'col' => $column,
			'show_feature_img' => $show_feature_img,
			'feature_img_size' => 'large',
			'feature_img_class' => 'ms-feature-img',
			'show_excerpt' => $show_excerpt,
			'word_in_content' => $word_in_content,
			'show_read_more' => $show_read_more,
			'read_more_text' => $read_more_text,
			'author_name' => $author_name,
			'publish_date' => $publish_date,
			'ms_post_meta' => $ms_post_meta,
			'publish_date_format' => $publish_date_format,
			'ms_show_all' => $ms_show_all
		);
		$ms_query = new WP_Query( $ms_paginate_query );
		if ( $ms_query->have_posts() ) {
			$output .= '<div class=\'row\'>';
			$output .= '<div class=\'ms-post-paginate\'>';
			while ( $ms_query->have_posts() ) {
				$ms_query->the_post();
				$output .= '<div class=\'ms-col-'.$column.'\'>';
				$output .= '<div class=\'ms-wrap\'>';
				if(isset($show_feature_img) && $show_feature_img === true){
				   if ( has_post_thumbnail( $ms_query->ID ) ) {
					  $output .= '<div class=\'ms-post-featured-image\'>';
					  $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					  $output .= get_the_post_thumbnail( $ms_query->ID, $feature_img_size , array( 'class' =>  $feature_img_class));
					  $output .= '</a>';
					  $output .= '</div>';
					}else{
					  $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					  $output .= '<img src="'.FPB_MSPTS_PLUGIN_PATH.'css/images/ms-default-img.jpg">';
					  $output .= '</a>'; 
					}
				}else{
				    $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					$output .= '<img src="'.FPB_MSPTS_PLUGIN_PATH.'css/images/ms-default-img.jpg">';
					$output .= '</a>';
				}
				if(isset($ms_post_meta) && $ms_post_meta === true){
					$output .= '<div class=\'ms-post-meta\'>';
						if($author_name === true && $publish_date === true){
							$output .= '<span class=\'ms-author\'>'.get_the_author().'</span>';
							$output .= '<span class=\'ms-date\'>'.get_the_date($publish_date_format).'</span>';
						}elseif($author_name === true){
							$output .= '<span class=\'ms-author\'>'.get_the_author().'</span>';
						}elseif($publish_date === true){
							$output .= '<span class=\'ms-date\'>'.get_the_date($publish_date_format).'</span>';
						}
					$output .= '</div>';
				}
				$output .= '<div class=\'ms-post-title\'><strong><a href="'.esc_url( get_permalink($ms_query->ID) ).'">' . esc_attr( get_the_title() ) . '</a></strong></strong></div>';
				if(isset($show_excerpt) && $show_excerpt === true){
				   if ( has_excerpt( $ms_query->ID ) ) {
					  $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_excerpt(), $word_in_content, ''). '</p></div>';
				    } else {
					  $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_content(), $word_in_content, ''). '</p></div>';
				    }
				}else{
				   $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_content(), $word_in_content, ''). '</p></div>';
				}
				if(isset($show_read_more) && $show_read_more === true){
					$output .= '<div class=\'ms-read-more-btn\'><a href="'. esc_url( get_permalink($ms_query->ID) ) .'">' . esc_attr($read_more_text) . '</a></div>';
				}
				$output .= '</div>';
				$output .= '</div>';
			}
			wp_reset_postdata();
			$output .= '</div>';
			$output .= '</div>';
			if($paged < $ms_query->max_num_pages){
				$output .= '<div class=\'ms-loadmore\'><a href=\'javascript:;\' data-args="'.htmlentities(json_encode($ms_data_args)).'">'. esc_attr($load_more_text) .'</a></div>';
			}
		}else {
			$output .= '<div class=\'ms-alert-danger\'>No record found.</div>';
		}
		return $output;
	}
  }
  new Mspts_Front_Grid;
}