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
$bkg 				= get_field('bkg');
$content			= get_field('form_content');
$content_above		= $content['above'];
$content_alongside	= $content['alongside'];
$default_header		= get_field('form_header_content', 'options');
$default_body		= get_field('form_body_content', 'options');
$default_bkg		= get_field('form_background', 'options');
?>
<section class="form-outer sp bkg--grey" style="background-image: url('<?php if ($bkg) { ?><?php echo $bkg['url']; ?><?php } else { ?><?php echo $default_bkg['url']; ?><?php } ?>')">
	<div class="form-block">
		<div class="form-block__header">
			<div class="form-block__header-content">
			<?php if ($content_above) { ?>
				<?php echo $content_above; ?>
				<?php } else { ?>
				<?php echo $default_header; ?>
			<?php } ?>
			</div>
		</div>
		<div class="form-block__body">
			<div class="form-block__body-content">
				<?php if ($content_alongside) { ?>
					<?php echo $content_alongside; ?>
					<?php } else { ?>
					<?php echo $default_body; ?>
				<?php } ?>
			</div>
			<div class="form-block__body-form">
				FORM
			</div>
		</div>
	</div>
</section>