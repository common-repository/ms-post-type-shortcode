(function($) {
jQuery(document).ready(function(){
  var page = 2;
  jQuery('body').on('click', '.ms-loadmore > a', function() {
	  var load_btn = jQuery(this);
	  var load_btn_txt = load_btn.text();
	  var ms_query_args = jQuery(this).attr('data-args');
	  var myJsonObject = JSON.parse(ms_query_args);
	  myJsonObject.page = page;
	  myJsonObject = JSON.stringify(myJsonObject);
	  jQuery.ajax({
			type: "post",
			url: frontpaginate.ajaxurl,
			dataType: "json",
			data : {
                'action': 'fpb_mspts_load_more_posts',
				'ms_load_args': myJsonObject
            },
			beforeSend: function () {
				load_btn.text('Loading...');
				load_btn.attr('disabled', 'disabled');
			},
			complete: function () {
				load_btn.text(load_btn_txt);
				load_btn.removeAttr('disabled', 'disabled');
			},
			success: function(response){
				if(response.status){
					jQuery('.ms-post-paginate').append(response.data);
					page++;
				}else{
					load_btn.parent().remove();
				}
			}
        });
    });
});
})(jQuery);