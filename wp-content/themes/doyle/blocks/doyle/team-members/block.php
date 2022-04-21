<?php
/*
Active: true
UUID: 15
Title: Team members
Description: Displays all team members
Keywords: case study, work
Post Types: null
Allow Multiple: true
*/
?>
<section class="team-members sp bkg--white">
	<?php
		$posts = new WP_Query( array(
			'post_type' => 'team',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC',
		));
	?>
	<?php if ($posts->have_posts()) { ?>
		<div class="team-members-list">
		<?php while($posts->have_posts()) : $posts->the_post(); ?>
		<?php
			$bio 		= get_field('member_bio', get_the_ID());
			$job 		= get_field('member_job', get_the_ID());
			$connect	= get_field('member_linkedin', get_the_ID());
			$featured	= get_field('member_feature', get_the_ID());
		?>
			<div class="team-members__item<?php if ( $featured == '1' ) { ?> team-members__item-featured<?php } ?>">
				<?php if( get_the_post_thumbnail() ) { ?>	
					<?php echo get_the_post_thumbnail(); ?>
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/casestudy-default.png" alt="Team member default image" />
				<?php } ?>

				<div class="team-members__content">
					<h4><?php the_title(); ?></h4>
					<?php if ($job) { ?>
						<span><?php echo $job; ?></span>
					<?php } ?>
					<?php if ($bio) { ?>
						<div class="team-members__bio">
							<?php echo $bio; ?>
						</div>
					<?php } ?>
					<?php the_excerpt(); ?>
					<?php if ($connect) { ?>
						<a href="<?php echo $connect; ?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/src/icons/linkedinblock.svg" alt="Linkedin logo" /></a>
					<?php } ?>

				</div>
			</div>
		<?php endwhile; wp_reset_query(); ?>
		</div>
	<?php } ?>


</section>