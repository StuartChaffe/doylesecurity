'use strict';

(function () {

	var cookie = localStorage.getItem('hideCookieBanner');
	var cookieAlert = document.querySelector('.cookie-alert');
	var cookieBtn = document.querySelector('.cookie-alert__btn');

	// if local storage key isn't found, set it to false
	if (cookie === null) {
		localStorage.setItem('hideCookieBanner', 'false');
	}

	// If key is false or not set, show banner
	if (cookie === 'false' || cookie === null) {
		cookieAlert.classList.add('is-visible');
	}

	// Hide banner and set local storage key on click
	cookieBtn.addEventListener('click', function (event) {
		localStorage.setItem('hideCookieBanner', 'true');
		cookieAlert.classList.remove('is-visible');
	});

}());
