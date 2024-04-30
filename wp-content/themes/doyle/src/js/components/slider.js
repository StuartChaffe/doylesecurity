jQuery(document).ready(function($) {
	$(".images-slider").slick({
		// settings: "unslick",
		speed: 200,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		infinite: true,
		dots: true,
		adaptiveHeight: true,
	});  
});