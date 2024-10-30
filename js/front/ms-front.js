(function($) {
jQuery(document).ready(function(){
	var dots = (ms_script_vars.dots == 1) ? true : false;
	var arrows = (ms_script_vars.arrows == 1) ? true : false;
	var dots_mobile = (ms_script_vars.dots_mobile == 1) ? true : false;
	var arrows_mobile = (ms_script_vars.arrows_mobile == 1) ? true : false;
	jQuery(".ms-post-slider").slick({
	'arrows' : arrows,
	'dots' : dots,
	'slidesToShow' : ms_script_vars.slidesToShow,
	'autoplay' : ms_script_vars.autoplay,
	'autoplaySpeed' : ms_script_vars.autoplaySpeed, 
	responsive: [
	{
      breakpoint: 992,
      settings: {
        arrows: arrows_mobile,
        centerMode: true,
        centerPadding: '15px',
		dots: dots_mobile,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: arrows_mobile,
        centerMode: true,
        centerPadding: '15px',
		dots: dots_mobile,
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: arrows_mobile,
        centerMode: true,
        centerPadding: '40px',
		dots: dots_mobile,
        slidesToShow: 1
      }
    }
  ]
  });
});
})(jQuery);