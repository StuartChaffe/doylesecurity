<?php
/*
Active: true
UUID: 8
Title: Form
Description: Displays a form block
Keywords: form, email
Post Types: null
Allow Multiple: true
*/
$background 		= get_field('bkg');
$content			= get_field('form_content');
$content_above		= $content['above'];
$content_alongside	= $content['alongside'];
?>
<section class="form-outer sp" style="background-image: url('<?php echo $background['url']; ?>')">
	<div class="form-block">
		<div class="form-block__header">
			<div class="form-block__header-content">
			<?php if ($content_above) { ?>
				<?php echo $content_above; ?>
			<?php } ?>
			</div>
		</div>
		<div class="form-block__body">
			<div class="form-block__body-content">
				<?php if ($content_alongside) { ?>
					<?php echo $content_alongside; ?>
				<?php } ?>
			</div>
			<div class="form-block__body-form">
				FORM
			</div>
		</div>
	</div>
</section>