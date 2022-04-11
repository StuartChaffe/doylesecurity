jQuery(document).ready(function($) {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('.site-header').addClass('site-header__up');
             } else {
                $('.site-header').removeClass('site-header__up');
             }
        });
	// Hide Header on on scroll down
	// var didScroll;
	// var lastScrollTop = 0;
	// var delta = 5;
	// var navbarHeight = $('header').outerHeight();

	// $(window).scroll(function(event){
	// 	didScroll = true;
	// });

	// setInterval(function() {
	// 	if (didScroll) {
	// 		hasScrolled();
	// 		didScroll = false;
	// 	}
	// }, 250);

	// function hasScrolled() {
	// 	var st = $(this).scrollTop();
	// 	if(Math.abs(lastScrollTop - st) <= delta)
	// 		return;
	// 	if (st > lastScrollTop && st > navbarHeight){
	// 		// Scroll Down
	// 		$('header').removeClass('site-header__down').addClass('site-header__up');
	// 	} else {
	// 		// Scroll Up
	// 		if(st + $(window).height() < $(document).height()) {
	// 			$('header').removeClass('site-header__up').addClass('site-header__down');
	// 		}
	// 	}

	// 	lastScrollTop = st;
	// }
});