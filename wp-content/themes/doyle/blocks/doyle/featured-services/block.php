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
<section class="bkg--black">
	<div class="featured-services sp">
	<?php if ( $content ) { ?>
		<?php echo $content; ?>
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
			<?php if( $featuredservices ): ?>	
				<div class="featured-services-list">
				<?php foreach( $featuredservices as $featured ):
					$image = get_the_post_thumbnail($featured);
					$servicetitle = get_the_title($featured);
					$excerpt = get_the_excerpt($featured);
				?>
					<a href="<?php esc_url(the_permalink($featured) ); ?>" class="featured-services-list__item">
						<?php echo get_the_post_thumbnail($featured); ?>
						<div class="featured-services-list__content">
							<h3><?php echo $servicetitle; ?></h3>
							<?php echo $excerpt; ?>	
						</div>
					</a>
				<?php endforeach; ?>
				</div>
			<?php endif; ?>

		<?php if ( $button ) { ?>
			<a class="btn btn--outline" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
		<?php } ?>

		<?php endwhile; ?>
	<?php } ?>
	</div>
</section>