<?php
/*
Active: true
UUID: 14
Title: Case studies
Description: Displays all case studies
Keywords: case study, work
Post Types: case-study
Allow Multiple: true
*/
$title      = get_field('casestudy_title');
?>
<section class="sp bkg--grey bkg--casestudy">
	<div class="case-studies">
	<?php if ($title) { ?>
		<h2><?php echo $title ?></h2>
	<?php } ?>

	<?php
		$posts = new WP_Query( array(
			'post_type' => 'case-study',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC',
		));
	?>
	<?php if ($posts->have_posts()) { ?>
		<div class="case-studies-list">
		<?php while($posts->have_posts()) : $posts->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="case-studies-list__item">
				<div class="case-studies-list__image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
				<?php if( get_the_post_thumbnail() ) { ?>	
					<?php echo get_the_post_thumbnail(); ?>
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/casestudy-default.png" alt="Case study default image" />
				<?php } ?>
				</div>

				<div class="case-studies-list__content">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>

					<span class="link">Read more</span>
				</div>
			</a>
		<?php endwhile; wp_reset_query(); ?>
		</div>
	<?php } ?>
	</div>
</section>