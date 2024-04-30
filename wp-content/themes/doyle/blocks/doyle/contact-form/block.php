<?php
/*
Active: true
UUID: 19
Title: Contact form
Description: Displays a contact form block
Keywords: form, contact
Post Types: null
Allow Multiple: true
*/
$title = get_field('contact_form_title');
$map_image = get_field('map_image');
$map_link = get_field('map_link');
?>

<section class="contact-form sp--top">
	<?php if ($title) { ?>
		<div class="container">
			<h2 class="contact-form__title"><?php echo $title; ?></h2>
		</div> 
	<?php } ?>
	<div class="two-col">
		<div class="two-col__item">
			<?php if(get_field('company_telephone', 'options')) { ?>
				<p><strong>Telephone:</strong><br />
				<?php the_field('company_telephone', 'options'); ?></p>
			<?php } ?>

			<?php if(get_field('company_fax', 'options')) { ?>
				<p><strong>Fax:</strong><br />
				<?php the_field('company_fax', 'options'); ?></p>
			<?php } ?>

			<?php if(get_field('company_email', 'options')) { ?>
				<p><strong>Email:</strong><br />
				<?php the_field('company_email', 'options'); ?></p>
			<?php } ?>

			<?php if(get_field('company_address', 'options')) { ?>
				<p><strong>Address:</strong><br />
				<?php the_field('company_address', 'options'); ?></p>
			<?php } ?>

			<ul class="social-links">
			<?php if(get_field('twitter', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('facebook', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('instagram', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('youtube', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
			<?php endif; ?>
			<?php if(get_field('linkedin', 'options')): ?>
				<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" class="social-links__link"><?php echo get_icon('linkedin'); ?></a></li>
			<?php endif; ?>
			</ul>
		</div>
		<div class="two-col__item">
			<?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
		</div>
	</div>

	<?php if ($map_image) { ?>
		<div class="container sp">
			<a href="<?php echo $map_link; ?>" target="_blank"><img loading="lazy" src="<?php echo $map_image['url']; ?>" alt="<?php echo $map_image['alt']; ?>" /></a>
		</div>
	<?php } ?>
</section>