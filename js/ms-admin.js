/*********************************/
var slider = document.getElementById("ms_slide_show");
var output = document.getElementById("ms_show_val");
output.innerHTML = '<span class="ms-range-wrap">'+ slider.value +'</span>';

slider.oninput = function() {
  output.innerHTML = '<span class="ms-range-wrap">'+ this.value +'</span>';
}
/*********************************/
var slider_1 = document.getElementById("ms_slide_autoplay_speed");
var output_1 = document.getElementById("ms_autoplay_val");
output_1.innerHTML = '<span class="ms-range-wrap">'+ slider_1.value +'</span>';

slider_1.oninput = function() {
  output_1.innerHTML = '<span class="ms-range-wrap">'+ this.value +'</span>';
}
/**********************************/

/*********************************/
var slider_2 = document.getElementById("ms_btn_font_size");
var output_2 = document.getElementById("ms_font_val");
output_2.innerHTML = '<span class="ms-range-wrap">'+ slider_2.value +'</span>';
slider_2.oninput = function() {
  output_2.innerHTML = '<span class="ms-range-wrap">'+ this.value +'</span>';
}

/*********************************/
var slider_3 = document.getElementById("ms_title_font_size");
var output_3 = document.getElementById("ms_title_font_val");
output_3.innerHTML = '<span class="ms-range-wrap">'+ slider_3.value +'</span>';
slider_3.oninput = function() {
  output_3.innerHTML = '<span class="ms-range-wrap">'+ this.value +'</span>';
}


/*********************************/
var slider_4 = document.getElementById("ms_content_font_size");
var output_4 = document.getElementById("ms_content_font_val");
output_4.innerHTML = '<span class="ms-range-wrap">'+ slider_4.value +'</span>';
slider_4.oninput = function() {
  output_4.innerHTML = '<span class="ms-range-wrap">'+ this.value +'</span>';
}

/*********************************/
var slider_5 = document.getElementById("ms_author_font_size");
var output_5 = document.getElementById("ms_author_font_val");
output_5.innerHTML = '<span class="ms-range-wrap">'+ slider_5.value +'</span>';
slider_5.oninput = function() {
  output_5.innerHTML = '<span class="ms-range-wrap">'+ this.value +'</span>';
}

/*********************************/
var slider_6 = document.getElementById("ms_publish_date_size");
var output_6 = document.getElementById("ms_publish_font_val");
output_6.innerHTML = '<span class="ms-range-wrap">'+ slider_6.value +'</span>';
slider_6.oninput = function() {
  output_6.innerHTML = '<span class="ms-range-wrap">'+ this.value +'</span>';
}

/*********************************/
var slider_7 = document.getElementById("ms_load_btn_font_size");
var output_7 = document.getElementById("ms_load_font_val");
output_7.innerHTML = '<span class="ms-range-wrap">'+ slider_7.value +'</span>';
slider_7.oninput = function() {
  output_7.innerHTML = '<span class="ms-range-wrap">'+ this.value +'</span>';
}
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
	
jQuery(document).ready(function(){
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
});