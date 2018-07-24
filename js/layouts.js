var $ = jQuery;

// Dynamically detect header height and offset hero image

function adjustHeight() {
	var header = $('.site-header');
	var headerHeight = header.height();

	$('.fs-full-screen').css('min-height', 'calc(100vh - ' + headerHeight + 'px)');
}

$(document).ready(function(){
	// Owl Carousel
	$(".owl-carousel").owlCarousel({
		loop:true,
		margin:50,
		autoplay:true,
		autoplayTimeout: 1500,
		autoplayHoverPause:true,
		center:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:3,
			},
			1000:{
				items:5,
			}
		}
	});

	if($('.fs-full-screen').length) {
		adjustHeight();		
	}
});

// Add checks to checklists

jQuery(document).ready(function($) {
	$('.checklist li').prepend('<i class="fa fa-check"></i>');
});