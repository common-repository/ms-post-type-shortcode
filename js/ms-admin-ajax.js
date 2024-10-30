function fpb_mspts_save_design_setting(form_data) {
	var element = '.ms-main-box';
    jQuery.ajax({
			type: "post",
			dataType: "json",
			url: adminajax.ajaxurl,
			data : {
                'action' : 'fpb_mspts_save_design_setting',
                'ms_design_setting' : form_data,
				'ms_design_security' : adminajax.ms_design_security
            },
			beforeSend: function () {
				jQuery('#ms-ajax-loader').removeClass('invisible').addClass('visible');
				jQuery(element).removeClass('ms_alert_danger');
				jQuery(element).find('.ms_alert_caption').empty();
			},
			complete: function () {
				jQuery('#ms-ajax-loader').addClass('invisible').removeClass('visible');
			},
			success: function(response){
				if(response.status == true){
					swal("Good job!", response.msg, "success", {
						button: "Close!",
					});
				}else if(response.status == 'error'){
					jQuery.each(response.data.error, function (i,v) {
						var element_obj = jQuery("input[name="+ i +"]").parents(element);
						element_obj.addClass('ms_alert_danger');
						element_obj.find('.ms_alert_caption').html(v);
					});
					swal("Opps!", response.msg, "error", {
						button: "Close",
					});
				}else{
					swal("Opps!", response.msg, "error", {
						button: "Close",
					});
				}
			}
        });
}
function fpb_mspts_save_slider_setting(form_data) {
	var element = '.ms-main-box';
    jQuery.ajax({
			type: "post",
			dataType: "json",
			url: adminajax.ajaxurl,
			data : {
                'action' : 'fpb_mspts_save_slider_setting',
                'ms_slider_setting' : form_data,
				'ms_slider_security' : adminajax.ms_slider_security
            },
			beforeSend: function () {
				jQuery('#ms-ajax-loader').removeClass('invisible').addClass('visible');
				jQuery(element).removeClass('ms_alert_danger');
				jQuery(element).find('.ms_alert_caption').empty();
			},
			complete: function () {
				jQuery('#ms-ajax-loader').addClass('invisible').removeClass('visible');
			},
			success: function(response){
				if(response.status == true){
					swal("Good job!", response.msg, "success", {
						button: "Close!",
					});
				}else if(response.status == 'error'){
					jQuery.each(response.data.error, function (i,v) {
						var element_obj = jQuery("input[name="+ i +"]").parents(element);
						element_obj.addClass('ms_alert_danger');
						element_obj.find('.ms_alert_caption').html(v);
					});
					swal("Opps!", response.msg, "error", {
						button: "Close",
					});
				}else{
					swal("Opps!", response.msg, "error", {
						button: "Close",
					});
				}
			}
        });
}
(function($) {
jQuery(document).ready(function(){
	var obj;
	jQuery('#ms_save_design_setting').on('submit' , function(){
		obj = jQuery(this);
		fpb_mspts_save_design_setting(obj.serialize());
		return false;
	});
	jQuery('#ms_save_slider_setting').on('submit' , function(){
		obj = jQuery(this);
		fpb_mspts_save_slider_setting(obj.serialize());
		return false;
	});
  });
})(jQuery);