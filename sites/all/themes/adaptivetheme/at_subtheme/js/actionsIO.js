jQuery(document).ready(function() {
	if(window.location.pathname == '/project/senasica/movilizacion'){
		$val = jQuery("#block-system-main").find("img.image-style-none");
		$attrVal = $val.attr("src");
		$val.before('<div style="background-image:url('+$attrVal+'); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; height: 350px; margin: 20px auto 0; max-width: 2440px; overflow: hidden; padding: 0; position: relative; width: 100% !important;"></div>');
		$val.remove();
	}
	if (jQuery('#back-to-top').length) {
	    var scrollTrigger = 100, // px
	        backToTop = function () {
	            var scrollTop = jQuery(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                jQuery('#back-to-top').addClass('show');
	            } else {
	                jQuery('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    jQuery(window).on('scroll', function () {
	        backToTop();
	    });
	    jQuery('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        jQuery('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
	}
	console.log("Ready !!");	
});