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
$title = get_field('featured_casestudy_title');
$featuredservices= get_field( 'select_services' );
?>


<section class="featured-case-studies sp bkg--white">
	<?php if ( $title ) { ?>
	<h2><?php echo $title; ?></h2>
	<?php } ?>

	<?php if( $featuredservices ): ?>	
		<div class="case-studie-list featured-case-studie-list">
		<?php foreach( $featuredservices as $featured ):
			$title = get_the_title($featured);
			$banner = get_field('banner_image', $featured);
			$image = get_field('square_image', $featured);
			$name = get_field('story_name', $featured);
		?>

		<a class="news-list__item" href="<?php esc_url(the_permalink($featured) ); ?>">
			<?php echo get_icon('news'); ?><?php echo($title); ?>
		</a>
	
		<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>