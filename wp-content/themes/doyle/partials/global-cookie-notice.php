<?php if(get_field('cookie', 'options')): ?>
<div class="cookie-alert">
	<div class="cookie-alert__inner">
		<?php the_field('cookie_text', 'options'); ?>
		<button class="cookie-alert__btn">&times;</button>
	</div>
</div>
<?php endif; ?>
