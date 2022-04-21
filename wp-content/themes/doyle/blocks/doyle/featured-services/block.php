<?php
/*
Active: true
UUID: 13
Title: Featured services
Description: Featured services
Keywords: services, featured
Post Types: null
Allow Multiple: true
*/
$content 	= get_field('featured_content');
?>
<section class="bkg--black bkg--services">
	<div class="featured-services sp">
	<?php if ( $content ) { ?>
		<div class="featured-services__intro">
			<?php echo $content; ?>
		</div>
	<?php } ?>

	<?php if( have_rows('services') ) { ?>
		<?php while( have_rows('services') ): the_row();
			$title 		= get_sub_field('featured_title');
			$button 	= get_sub_field('featured_button');
			$featuredservices = get_sub_field('select_services');
		?>
		<?php if ( $title ) { ?>
			<h3 class="featured-services__title"><?php echo $title; ?></h3>
		<?php } ?>
			<?php if( $featuredservices ) { ?>	
				<div class="featured-services-list">
				<?php foreach( $featuredservices as $featured ):
					$image = get_the_post_thumbnail($featured);
					$servicetitle = get_the_title($featured);
					$excerpt = get_the_excerpt($featured);
				?>
					<a href="<?php esc_url(the_permalink($featured) ); ?>" class="featured-services-list__item">
						<?php if( get_the_post_thumbnail($featured) ) { ?>	
							<?php echo get_the_post_thumbnail($featured); ?>
						<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/src/images/service-default.png" alt="Security default image" />
						<?php } ?>

						<div class="featured-services-list__content">
							<h3><?php echo $servicetitle; ?></h3>
							<?php echo $excerpt; ?>	
						</div>
					</a>
				<?php endforeach; ?>
				</div>
			<?php } ?>

		<?php if ( $button ) { ?>
			<div class="featured-services-list__button">
				<a class="btn btn--outline" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
			</div>
		<?php } ?>

		<?php endwhile; ?>
	<?php } ?>
	</div>
</section>