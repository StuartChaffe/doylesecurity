jQuery(document).ready(function($) {
	// Primary nav
	var $menuBtn = $(".site-header--nav-btn");
	var $menuContainer = $(".site-header--nav__mobile");
	$menuBtn.click(function() {
		$(this).toggleClass("is-active");
		$("body").toggleClass("menu-active");
		$menuContainer.toggleClass("is-active");
	});

	
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

jQuery(document).ready(function( $ ) {
	$( ".site-header--nav__mobile .menu-item-has-children > a" ).after( '<span class="dropdown-button">&nbsp;</span>' );
	$('.dropdown-button').click(function() {
		if ($(this).hasClass("is-active")) {
			$(this).removeClass('is-active');
			$(this).next('.sub-menu').slideUp('normal');
		} else {
			$(this).addClass('is-active');
			$(this).next('.sub-menu').slideDown('normal');
		}

		return false;
	});
});