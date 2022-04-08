'use strict';

(function () {

	var ua = window.navigator.userAgent;
	var msie = ua.indexOf('MSIE ');
	var trident = ua.indexOf('Trident/');
	var browserAlert = document.querySelector('.unsupported-browser');

	if (msie > 0 || trident > 0) {
		browserAlert.setAttribute('style', 'display: block;');
	}

}());
