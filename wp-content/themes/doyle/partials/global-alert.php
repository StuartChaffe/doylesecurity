<?php if(get_field('alert', 'options')): ?>
<div class="global-alert">
	<?php the_field('alert_text', 'options'); ?>
</div>
<?php endif; ?>
