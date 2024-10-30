<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<div class="ms-intro-main">
   <div class="ms-intro-image">
      <div class="ms-intro-wrapper">
         <h4><?php _e('Welcome To Ms Post Type Shortcode.', 'ms-post-type-shortcode'); ?></h4>
         <h2><?php _e('Thanks for download.', 'ms-post-type-shortcode'); ?></h2>
      </div>
   </div>
   <div class="ms-intro-wrapper">
      <div class="ms-intro-content">
         <p><?php _e('Ms Post Grid is very lightweight plugin and help to display posts in grid,slider,pagination using various below shortcodes.', 'ms-post-type-shortcode'); ?></p>
         <div class="ms-shortcode">
		    <?php _e('There are three types of shortcodes available:-', 'ms-post-type-shortcode'); ?>
            <div class="ms-shorcode-code">
               <h3>[ms_post_grid]</h3>
               <h3>[ms_post_slider]</h3>
               <h3>[ms_post_paginate]</h3>
            </div>
         </div>
         <div class="ms-common-para">
            <p><?php _e('Common parameters pass in all shortcode.', 'ms-post-type-shortcode'); ?></p>
            <ul>
               <li>type => If type not passed in shortcode than default value is 'post' please hover on <span class="ms-tooltip ms-intro-img"><img height='10' width='20' src="<?php echo FPB_MSPTS_PLUGIN_PATH.'css/images/post-type.jpg';?>"><span class="ms-tooltip-box"><img width='300' src="<?php echo FPB_MSPTS_PLUGIN_PATH.'css/images/post-type.jpg';?>"></span></span> to see custom post type name.</li>
               <li>order => If order not passed in shortcode than default value is 'DESC' please go to this <a target="_blank" href="https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters">url</a> for other parameters.</li>
               <li>orderBy => If orderBy not passed in shortcode than default value is 'date' please go to this <a target="_blank" href="https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters">url</a> for other parameters</li>
               <li>taxanomy => If taxanomy not passed in shortcode than default value is 'category' please hover on <span class="ms-tooltip ms-intro-img"><img height='10' width='20' src="<?php echo FPB_MSPTS_PLUGIN_PATH.'css/images/post-type.jpg';?>"><span class="ms-tooltip-box"><img width='300' src="<?php echo FPB_MSPTS_PLUGIN_PATH.'css/images/taxanomy.jpg';?>"></span></span> to see custom post type taxanomy.</li>
               <li>cat_id => If cat_id not passed in shortcode than default value is 1(Uncategorized). please hover on <span class="ms-tooltip ms-intro-img"><img height='10' width='20' src="<?php echo FPB_MSPTS_PLUGIN_PATH.'css/images/post-type.jpg';?>"><span class="ms-tooltip-box"><img width='300' src="<?php echo FPB_MSPTS_PLUGIN_PATH.'css/images/cat-id.jpg';?>"></span></span> to see custom post type category id.</li>
               <li>col => If col not passed in shortcode than default value is 4 and right column values are '2,3,4,6' if right values not match then default will be used.</li>
               <li>show_feature_img => If show_feature_img is false than image placeholder will be display default value is 'true'.</li>
               <li>feature_img_size => If feature_img_size not passed in shortcode than default value is 'large' other sizes are thumbnail,medium,full.</li>
               <li>feature_img_class => If feature_img_size not passed in shortcode than default value is 'ms-feature-img'.</li>
               <li>show_excerpt => If show_excerpt is false than post content will be display.</li>
               <li>word_in_content => If word_in_content not passed in shortcode than default value is 20.</li>
               <li>show_read_more => If show_read_more is false than link will n't display default value is 'true'.</li>
               <li>read_more_text => If read_more_text not passed in shortcode than default text is 'Read More'.</li>
               <li>ms_show_all => If ms_show_all not pass in shortcode then default term uncategorized. post will be display 'ms_show_all' default value is false.</li>
               <li>ms_post_meta => If ms_post_meta passed in shortcode and value is false than 'author_name' and 'publish_date' will not display default value is true.</li>
               <li>author_name => If author_name not passed in shortcode than default value is 'true'.</li>
               <li>publish_date => If publish_date not passed in shortcode than default value is 'true'.</li>
               <li>publish_date_format =>If publish_date_format not passed in shortcode than default format is 'F j, Y' please go to this <a target="_blank"href="https://codex.wordpress.org/Formatting_Date_and_Time#Examples">url</a> for other parameters.</li>
            </ul>
         </div>
         <div class="ms-first-shortcode">
            <p><strong>[ms_post_grid]</strong><br>
               <span class="ms-red"><?php _e('Note: This shortcode will display default post type \'post\' and term \'uncategorized\' posts.', 'ms-post-type-shortcode'); ?></span>
            </p>
            <p><strong>[ms_post_grid ms_show_all='true']</strong><br>
               <span class="ms-red"><?php _e('Note: If the above shortcode \'ms_show_all\' attribute is passed then all posts will be display', 'ms-post-type-shortcode'); ?></span>
            </p>
            <p>[*** Custom post type shortcode look like this ***]<br>
               <strong>[ms_post_grid type='here custom post type name' ms_show_all='true']</strong><br>
               <span class="ms-red"><?php _e('Note: In above shortcode \'ms_show_all\' attribute is used to show all post without any category filter.', 'ms-post-type-shortcode'); ?></span>
            </p>
            <p>[*** Custom post type shortcode with category filter look like this ***]<br>
               <strong>[ms_post_grid type='here custom post type name' taxanomy='here taxanomy name' cat_id='here cat id']</strong>
            </p>
            <p>[*** Extra Argument pass in shortcode ***] <br>
               posts_per_page => If posts_per_page not passed in shortcode than default value is '-1'.
            </p>
            <span class="ms-red"><?php _e('Important Tip: All the common attribute will work same for other shortcode as well just use ', 'ms-post-type-shortcode'); ?><strong>[ms_post_grid]</strong><strong> [ms_post_slider]</strong><strong> [ms_post_paginate].</strong></span>        
         </div>
         <div class="ms-first-shortcode">
            <p><strong>[ms_post_slider]</strong></p>
            <h5><?php _e('Slider Setting', 'ms-post-type-shortcode'); ?></h5>
            <ul>
               <li>arrows => default value is false.</li>
               <li>dots => default value is false.</li>
               <li>slidesToShow => default value is 3.</li>
               <li>autoplay => default value is false.</li>
               <li>autoplaySpeed => default value is 1500ms.</li>
            </ul>
            <span class="ms-red"><?php _e('Note: Slider setting will depend upon the values save in Slider Setting.', 'ms-post-type-shortcode'); ?></span>        
         </div>
         <div class="ms-first-shortcode" style="border-bottom: 0px;">
            <p><strong>[ms_post_paginate]</strong></p>
            <p>[*** Extra Argument pass in shortcode ***]</p>
            <ul>
               <li>load_more_text => If load_more_text not passed in shortcode than default value is 'load more'.</li>
            </ul>
            <span class="ms-red"><?php _e('Note: Load more setting will depend upon the values save in design setting.', 'ms-post-type-shortcode'); ?></span>        
         </div>
      </div>
   </div>
</div>