'use strict';

/**
 * Toggle script that is useful for showing navigation, modals, etc.
 *
 * The following data attributes are supported:
 *
 * data-toggle
 * data-toggle-class
 * data-toggle-body-class
 */

(function () {
	const elements = document.querySelectorAll('[data-toggle]');
	
	if (elements.length === 0) {
		return false;
	}
	
	elements.forEach(element => {
		const targetElement = document.querySelector(element.dataset.toggle);
	
		if (!targetElement) {
			return;
		}
		
		const bodyClass = element.dataset.toggleBodyClass;
		const toggleClass = element.dataset.toggleClass || 'is-toggled';
	
		element.addEventListener('click', () => {
			const isToggled = element.classList.contains(toggleClass);
			targetElement.classList.toggle(toggleClass);
			element.classList.toggle(toggleClass);
			
			element.setAttribute('aria-expanded', isToggled ? 'false' : 'true');
			targetElement.setAttribute('aria-hidden', isToggled ? 'true' : 'false');
			
			if (bodyClass) {
				document.body.classList.toggle(bodyClass);
			}
		}, false);
	});
}());
