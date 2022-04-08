<?php if(get_field('unsupported_browser_notice_text', 'options')) { ?>
<div class="unsupported-browser">
    <div class="unsupported-browser__inner">
		<?php the_field('unsupported_browser_notice_text', 'options'); ?>
    </div>
</div>
<?php } ?>
