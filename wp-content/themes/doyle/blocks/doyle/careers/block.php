<?php
/*
Active: true
UUID: 16
Title: Careers
Description: Displays all jobs
Keywords: careers, jobs
Post Types: careers
Allow Multiple: true
*/
?>
<section class="careers sp bkg--white">
	<?php
		$posts = new WP_Query( array(
			'post_type' => 'careers',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC',
		));
	?>
	<?php if ($posts->have_posts()) { ?>
		<?php while($posts->have_posts()) : $posts->the_post(); ?>
		<?php
			$days 		= get_field('job_days', get_the_ID());
			$hours 		= get_field('job_hours', get_the_ID());
			$pay 		= get_field('job_pay', get_the_ID());
			$shortdesc	= get_field('job_short_description', get_the_ID());
			$details	= get_field('job_details', get_the_ID());
		?>
			<div class="careers__item">
				<h3><?php the_title(); ?></h3>
				<div class="careers__content">
					<div class="careers__content-meta">
						<div class="careers__content-meta__item"><?php echo get_icon('hour'); ?><div><?php echo $hours; ?></div></div>
						<div class="careers__content-meta__item"><?php echo get_icon('pay'); ?><div><?php echo $pay; ?></div></div>
						<div class="careers__content-meta__item"><?php echo get_icon('cal'); ?><div><?php echo $days; ?></div></div>
					</div>
					<div class="careers__content-desc">
						<?php echo $shortdesc; ?>
					</div>
				</div>
				<a href="<?php esc_url(the_permalink() ); ?>" class="btn">View vacancy</a>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	<?php } ?>

</section>