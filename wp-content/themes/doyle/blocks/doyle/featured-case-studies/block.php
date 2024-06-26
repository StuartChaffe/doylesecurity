<?php
/*
Active: true
UUID: 12
Title: Featured case studies
Description: Featured case studies
Keywords: case study, featured
Post Types: null
Allow Multiple: true
*/
$title = get_field('featured_casestudy_title');
$featuredcasestudy = get_field( 'select_casestudies' );
?>

<section class="bkg--grey bkg--casestudy">
	<div class="case-studies sp">
		<?php if ( $title ) { ?>
		<h2><?php echo $title; ?></h2>
		<?php } ?>

		<?php if( $featuredcasestudy ) { ?>	
			<div class="case-studies-list">
			<?php foreach( $featuredcasestudy as $featured ):
				$image = get_the_post_thumbnail($featured);
				$casestudytitle = get_the_title($featured);
				$excerpt = get_the_excerpt($featured);
			?>
				<a href="<?php the_permalink($featured); ?>" class="case-studies-list__item">
					<div class="case-studies-list__image" style="background-image: url('<?php echo get_the_post_thumbnail_url($featured); ?>');">
					<?php if( get_the_post_thumbnail($featured) ) { ?>
						<?php echo get_the_post_thumbnail($featured); ?>
					<?php } else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/src/images/casestudy-default.png" alt="Case study default image" />
					<?php } ?>
					</div>

					<div class="case-studies-list__content">
						<h3><?php echo $casestudytitle; ?></h3>
						<?php echo $excerpt; ?>	

						<span class="link">Read more</span>
					</div>
				</a>
			<?php endforeach; ?>
			</div>
		<?php } ?>
	</div>
</section>