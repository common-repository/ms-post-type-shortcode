<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<div class="ms-container">
    <div class="ms-row">
        <div class="ms-accordion-main">
            <div class="ms-accordion">
               <h4><?php _e('Design Setting', 'ms-post-type-shortcode'); ?><i class="fa fa-sort-desc" aria-hidden="true"></i></h4>
                <div class="ms-accordion-content">
				  <form action="#" id="ms_save_design_setting" method="post">
                    <div class="ms-main-box">
                        <label><?php _e('Box background color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input class="ms-color-picker" type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_back))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_back;?>" class="ms-color-picker" name="ms_box_back">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default box background color is #f1f1f1', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
                    <div class="ms-main-box">
                        <label><?php _e('Box border color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_border))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_border;?>" class="ms-color-picker" name="ms_box_border">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default box background color is #ccc', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Box shadow color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_shadow))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_shadow;?>" class="ms-color-picker" name="ms_box_shadow">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default box background color is #ccc', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Box padding (in px)', 'ms-post-type-shortcode'); ?></label>
							<div class="ms-input-type">    
								<div class="quantity padding-top"><input value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_top) && !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_top)){echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_top;}else{echo '15';}?>" name="ms_box_pad_top" type="number" min='15' max='30' placeholder="0px"><span>Top</span></div>
								
								<div class="quantity padding-right"><input value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_right) && !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_right)){echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_right;}else{echo '15';}?>" name="ms_box_pad_right" type="number" min='15' max='30' placeholder="0px"><span>Right</span></div>
								
								<div class="quantity padding-bottom"><input value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_bottom) && !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_bottom)){echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_bottom;}else{echo '15';}?>" name="ms_box_pad_bottom" type="number" min='15' max='30' placeholder="0px"><span>Bottom</span></div>
								
								<div class="quantity padding-left"><input value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_left) && !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_left)){echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_box_pad_left;}else{echo '15';}?>" name="ms_box_pad_left" type="number" min='15' max='30' placeholder="0px"><span>Left</span></div>						
							</div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default box padding is 15px 15px 15px 15px', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Post title color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_color;?>" class="ms-color-picker" name="ms_title_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default post title color is #000', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Post title color on hover', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_hover))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_hover;?>" class="ms-color-picker" name="ms_title_hover">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default post title color is #333', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Post title font size (in px)', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
						    <input class="ms_slider_range" id="ms_title_font_size" type="range" min="5" max="20" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_font_size))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_title_font_size;?>" name="ms_title_font_size">
							<p class="ms_alert_caption"></p>
							<span class="ms-range-val" id="ms_title_font_val"></span>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default post title font size is 17px', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Post content font color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_content_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_content_color;?>" class="ms-color-picker" name="ms_content_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default post content color is #000', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Post content font size (in px)', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
						    <input class="ms_slider_range" id="ms_content_font_size" type="range" min="5" max="20" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_content_font_size))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_content_font_size;?>" name="ms_content_font_size">
							<p class="ms_alert_caption"></p>
							<span class="ms-range-val" id="ms_content_font_val"></span>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default post content font size is 14px', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Author font color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_author_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_author_color;?>" class="ms-color-picker" name="ms_author_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default author font color is #555', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Author font size (in px)', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
						    <input class="ms_slider_range" id="ms_author_font_size" type="range" min="5" max="20" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_author_font_size))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_author_font_size;?>" name="ms_author_font_size">
							<p class="ms_alert_caption"></p>
							<span class="ms-range-val" id="ms_author_font_val"></span>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default author font size is 14px', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Publish date font color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_publish_date_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_publish_date_color;?>" class="ms-color-picker" name="ms_publish_date_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default publish date font color is #555', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Publish date font size (in px)', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
						    <input class="ms_slider_range" id="ms_publish_date_size" type="range" min="5" max="20" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_publish_date_size))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_publish_date_size;?>" name="ms_publish_date_size">
							<p class="ms_alert_caption"></p>
							<span class="ms-range-val" id="ms_publish_font_val"></span>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default publish date font size is 14px', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
                    <div class="ms-main-box">
                        <label><?php _e('Button border color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_border))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_border;?>" class="ms-color-picker" name="ms_btn_border">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default button border color is #0073aa', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
                    <div class="ms-main-box">
                        <label><?php _e('Button background color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_back))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_back;?>" class="ms-color-picker" name="ms_btn_back">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default button background color is #0085ba', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
                    <div class="ms-main-box">
                        <label><?php _e('Button background color on hover', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_hover))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_hover;?>" class="ms-color-picker" name="ms_btn_hover">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default button background color is #008ec2', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Button border color on hover', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_border_on_hover))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_border_on_hover;?>" class="ms-color-picker" name="ms_btn_border_on_hover">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default button border color on hover is #008ec2', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Button font color on hover', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_color_on_hover))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_color_on_hover;?>" class="ms-color-picker" name="ms_btn_color_on_hover">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default button font color on hover is #fff', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
                    <div class="ms-main-box">
                        <label><?php _e('Button font color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_more_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_more_color;?>" class="ms-color-picker" name="ms_more_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default button font color is #fff', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Button font size (in px)', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input class="ms_slider_range" id="ms_btn_font_size" type="range" min="5" max="20" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_more_font_size))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_more_font_size;?>" name="ms_more_font_size">
							<p class="ms_alert_caption"></p>
							<span class="ms-range-val" id="ms_font_val"></span>
                        </div>
						
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default button font size is 15px', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Button padding (in px)', 'ms-post-type-shortcode'); ?></label>
							<div class="ms-input-type">    
								<div class="quantity padding-top"><input value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_top) && !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_top)){echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_top;}else{echo '5';}?>" name="ms_btn_pad_top" type="number" min='5' max='30' placeholder="0px"><span>Top</span></div>
								
								<div class="quantity padding-right"><input value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_right) && !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_right)){echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_right;}else{echo '5';}?>" name="ms_btn_pad_right" type="number" min='5' max='30' placeholder="0px"><span>Right</span></div>
								
								<div class="quantity padding-bottom"><input value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_bottom) && !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_bottom)){echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_bottom;}else{echo '5';}?>" name="ms_btn_pad_bottom" type="number" min='5' max='30' placeholder="0px"><span>Bottom</span></div>
								
								<div class="quantity padding-left"><input value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_left) && !empty(Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_left)){echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_btn_pad_left;}else{echo '5';}?>" name="ms_btn_pad_left" type="number" min='5' max='30' placeholder="0px"><span>Left</span></div>							
							</div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default button padding is 5px 5px 5px 5px', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Load more font color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_more_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_more_color;?>" class="ms-color-picker" name="ms_load_more_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default load more font color is #fff', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Load more font color on hover', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_more_hover_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_more_hover_color;?>" class="ms-color-picker" name="ms_load_more_hover_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default load more font color on hover is #fff', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Load more background color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_back_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_back_color;?>" class="ms-color-picker" name="ms_load_back_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default load more background color is #0073aa', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Load more background color on hover', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_back_hover_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_back_hover_color;?>" class="ms-color-picker" name="ms_load_back_hover_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default load more background color on hover is #0073aa', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Load more font size (in px)', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input class="ms_slider_range" id="ms_load_btn_font_size" type="range" min="5" max="20" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_btn_font_size))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_btn_font_size;?>" name="ms_load_btn_font_size">
							<p class="ms_alert_caption"></p>
							<span class="ms-range-val" id="ms_load_font_val"></span>
                        </div>
						
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default load more font size is 22px', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-main-box">
                        <label><?php _e('Load more shadow color', 'ms-post-type-shortcode'); ?></label>
                        <div  class="ms-input-type">
                            <input type="text" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_shadow_color))echo Mspts_Admin_Func::fpb_mspts_design_option()->ms_load_shadow_color;?>" class="ms-color-picker" name="ms_load_shadow_color">
							<p class="ms_alert_caption"></p>
                        </div>
                        <span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
                            <span class="ms-tooltip-box"><?php _e('By default load more shadow color is #ccc', 'ms-post-type-shortcode'); ?></span>
                        </span>
                    </div>
					<div class="ms-general-set-btn">
                        <input type="submit" value="Save Design setting">
                    </div>
				   </form>
                </div>
            </div>
			   <div class="ms-accordion">
                <h4><?php _e('Slider Setting', 'ms-post-type-shortcode'); ?><i class="fa fa-sort-desc" aria-hidden="true"></i></h4>
                  <div class="ms-accordion-content">
				   <form action="#" id="ms_save_slider_setting" method="post">
				    <div class="ms-main-box">
						<label><?php _e('Turn Off/On Arrows', 'ms-post-type-shortcode'); ?></label>
						<div class="ms-input-type">
							<input <?php if(isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow) && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow == 'on')echo 'checked';?> name="ms_slider_arrow" id="ms_slider_arrow" type="checkbox" class="checkbox hidden" />
							<label class="switchbox" for="ms_slider_arrow"></label>
						</div>
						<span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
							<span class="ms-tooltip-box"><?php _e('By default arrows are true to turn off uncheck the button.', 'ms-post-type-shortcode'); ?></span>
						</span>
                    </div>
					<div class="ms-main-box">
						<label><?php _e('Turn Off/On Dots', 'ms-post-type-shortcode'); ?></label>
						<div class="ms-input-type">
							<input <?php if(isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots) && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots == 'on')echo 'checked';?> name="ms_slider_dots" id="ms_slider_dots" type="checkbox" class="checkbox hidden" />
							<label class="switchbox" for="ms_slider_dots"></label>
						</div>
						<span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
							<span class="ms-tooltip-box"><?php _e('By default dots are true to turn off uncheck the button.', 'ms-post-type-shortcode'); ?></span>
						</span>
                    </div>
					<div class="ms-main-box">
						<label><?php _e('Slides To Show', 'ms-post-type-shortcode'); ?></label>
						<div  class="ms-input-type">
							<input class="ms_slider_range" id="ms_slide_show" type="range" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_to_show))echo Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_to_show;?>" min="3" max="6" name="ms_slide_to_show">
							<p class="ms_alert_caption"></p>
							<span class="ms-range-val" id="ms_show_val"></span>
						</div>
						
						<span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
							<span class="ms-tooltip-box"><?php _e('By default slides to show is 3 to change valid input between 4-6.', 'ms-post-type-shortcode'); ?></span>
						</span>
                    </div>
					<div class="ms-main-box">
						<label><?php _e('Turn Off/On Auto Play', 'ms-post-type-shortcode'); ?></label>
						<div class="ms-input-type">
							<input <?php if(isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_autoplay) && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slide_autoplay == 'on')echo 'checked';?> name="ms_slide_autoplay" id="ms_slide_autoplay" type="checkbox" class="checkbox hidden" />
							<label class="switchbox" for="ms_slide_autoplay"></label>
						</div>
						<span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
							<span class="ms-tooltip-box"><?php _e('By default autoplay is true to turn off uncheck the button.', 'ms-post-type-shortcode'); ?></span>
						</span>
					</div>
					<div class="ms-main-box">
						<label><?php _e('Auto play Speed (in ms)', 'ms-post-type-shortcode'); ?></label>
						<div  class="ms-input-type">
							<div class="ms-range_wrap">
							<input class="ms_slider_range" id="ms_slide_autoplay_speed" type="range" value="<?php if(isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_autoplay_speed))echo Mspts_Admin_Func::fpb_mspts_slider_option()->ms_autoplay_speed;?>" min="1" max="10" name="ms_autoplay_speed">
							<p class="ms_alert_caption"></p>
							</div>
							<span class="ms-range-val" id="ms_autoplay_val"></span>
						</div>
						<span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
							<span class="ms-tooltip-box"><?php _e('Default auto play speed is 3000s', 'ms-post-type-shortcode'); ?></span>
						</span>
                    </div>
					<div class="ms-main-box">
						<label><?php _e('Turn Off/On Arrows for mobile', 'ms-post-type-shortcode'); ?></label>
						<div class="ms-input-type">
							<input <?php if(isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow_mobile) && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_arrow_mobile == 'on')echo 'checked';?> name="ms_slider_arrow_mobile" id="ms_slider_arrow_mobile" type="checkbox" class="checkbox hidden" />
							<label class="switchbox" for="ms_slider_arrow_mobile"></label>
						</div>
						<span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
							<span class="ms-tooltip-box"><?php _e('By default arrows are true to turn off check the button.', 'ms-post-type-shortcode'); ?></span>
						</span>
                    </div>
					<div class="ms-main-box">
						<label><?php _e('Turn Off/On Dots for mobile', 'ms-post-type-shortcode'); ?></label>
						<div class="ms-input-type">
							<input <?php if(isset(Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots_mobile) && Mspts_Admin_Func::fpb_mspts_slider_option()->ms_slider_dots_mobile == 'on')echo 'checked';?> name="ms_slider_dots_mobile" id="ms_slider_dots_mobile" type="checkbox" class="checkbox hidden" />
							<label class="switchbox" for="ms_slider_dots_mobile"></label>
						</div>
						<span class="ms-tooltip"><i class="fa fa-question" aria-hidden="true"></i>
							<span class="ms-tooltip-box"><?php _e('By default dots are true to turn off uncheck the button.', 'ms-post-type-shortcode'); ?></span>
						</span>
                    </div>
					<div class="ms-general-set-btn">
                        <input type="submit" value="Save Slider setting">
                    </div>
				   </form>
                </div>
             </div>
			<div id="ms-ajax-loader" class="invisible"></div>
        </div>
    </div>
</div>