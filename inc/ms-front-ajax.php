<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if ( !class_exists( 'Mspts_Front_Ajax' ) ) {
	
class Mspts_Front_Ajax{
	public function __construct(){
		add_action('wp_ajax_fpb_mspts_load_more_posts', array($this, 'fpb_mspts_load_more_posts'));
        add_action('wp_ajax_nopriv_fpb_mspts_load_more_posts', array($this, 'fpb_mspts_load_more_posts'));
	}
	
	/***************************************************/
	/**** Function to load post on ajax ****************/
	/************  @author Munish Sharma  **************/ 
	/************  @since 1.0 - 16-12-2018 **************/
	/************  @return json string *****************/
	/***************************************************/
	
	public function fpb_mspts_load_more_posts(){
		$ms_ajax_args = json_decode(stripslashes($_POST['ms_load_args']));
		if($ms_ajax_args->ms_show_all){
			// define query parameters based on ajax attributes
			$ms_slider_query = array(
				'post_type' => $ms_ajax_args->post_type,
				'order' => $ms_ajax_args->order,
				'orderby' => $ms_ajax_args->orderby,
				'posts_per_page' => $ms_ajax_args->posts_per_page,
				'paged' => $ms_ajax_args->page
		    );
		}else{
			// define query parameters based on ajax attributes
			$ms_slider_query = array(
				'post_type' => $ms_ajax_args->post_type,
				'order' => $ms_ajax_args->order,
				'orderby' => $ms_ajax_args->orderby,
				'posts_per_page' => $ms_ajax_args->posts_per_page,
				'paged' => $ms_ajax_args->page,
				'tax_query' => array(
						array(
						  'taxonomy' => $ms_ajax_args->taxonomy,
						  'terms'    => $ms_ajax_args->terms
					),
				), 
		    );
		}
		$ms_query = new WP_Query( $ms_slider_query );
		if ( $ms_query->have_posts() ) {
			while ( $ms_query->have_posts() ) {
				$ms_query->the_post();
				$output .= '<div class=\'ms-col-'.$ms_ajax_args->col.'\'>';
				$output .= '<div class=\'ms-wrap\'>';
				if(isset($ms_ajax_args->show_feature_img) && $ms_ajax_args->show_feature_img === true){
				   if ( has_post_thumbnail( $ms_query->ID ) ) {
					  $output .= '<div class=\'ms-post-featured-image\'>';
					  $output .= '<a href="' . get_permalink( $ms_query->ID ) . '" title="' . esc_attr( get_the_title() ) . '">';
					  $output .= get_the_post_thumbnail( $ms_query->ID, $ms_ajax_args->feature_img_size , array( 'class' => $ms_ajax_args->feature_img_class));
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
				if(isset($ms_ajax_args->ms_post_meta) && $ms_ajax_args->ms_post_meta === true){
					$output .= '<div class=\'ms-post-meta\'>';
						if($ms_ajax_args->author_name === true && $ms_ajax_args->publish_date === true){
							$output .= '<span class=\'ms-author\'>'.get_the_author().'</span>';
							$output .= '<span class=\'ms-date\'>'.get_the_date($ms_ajax_args->publish_date_format).'</span>';
						}elseif($ms_ajax_args->author_name === true){
							$output .= '<span class=\'ms-author\'>'.get_the_author().'</span>';
						}elseif($ms_ajax_args->publish_date === true){
							$output .= '<span class=\'ms-date\'>'.get_the_date($ms_ajax_args->publish_date_format).'</span>';
						}
					$output .= '</div>';
				}
				$output .= '<div class=\'ms-post-title\'><strong><a href="'. esc_url( get_permalink($ms_query->ID) ) .'">' . esc_attr( get_the_title() ) . '</a></strong></strong></div>';
				if(isset($ms_ajax_args->show_excerpt) && $ms_ajax_args->show_excerpt === true){
				   if ( has_excerpt( $ms_query->ID ) ) {
					  $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_excerpt(), $ms_ajax_args->word_in_content, ''). '</p></div>';
				    } else {
					  $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_content(), $ms_ajax_args->word_in_content, ''). '</p></div>';
				    }
				}else{
				   $output .= '<div class=\'ms-post-content\'><p>'. wp_trim_words(get_the_content(), $ms_ajax_args->word_in_content, ''). '</p></div>';
				}
				if(isset($ms_ajax_args->show_read_more) && $ms_ajax_args->show_read_more === true){
					$output .= '<div class=\'ms-read-more-btn\'><a href="'. esc_url( get_permalink($ms_query->ID) ) .'">' . esc_attr($ms_ajax_args->read_more_text) . '</a></div>';
				}
				$output .= '</div>';
				$output .= '</div>';
			}
			wp_reset_postdata();
		}else {
			die(Mspts_Admin_Func::fpb_mspts_print_json(false ,'' ,'No record found.'));
		}
		die(Mspts_Admin_Func::fpb_mspts_print_json(true, $output, ''));
	}
  }
  new Mspts_Front_Ajax;
}