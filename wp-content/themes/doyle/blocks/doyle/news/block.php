<?php
/*
Active: true
UUID: 9
Title: News
Description: Displays all news
Keywords: news, blog
Post Types: null
Allow Multiple: true
*/
$title      = get_field('news_title');
$content	= get_field('cta_content');
?>
<section class="news sp">
	<?php if ($title) { ?>
		<h2><?php echo $title ?></h2>
	<?php } ?>

	<?php
		$posts = new WP_Query( array(
			'post_type' => 'post',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC',
		));
	?>
	<?php if ($posts->have_posts()) { ?>
		<div class="news-list">
		<?php while($posts->have_posts()) : $posts->the_post(); ?>
			<a class="news-list__item" href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>">
				<?php echo get_icon('news'); ?><?php the_title(); ?>
			</a>
		<?php endwhile; wp_reset_query(); ?>
		</div>
	<?php } ?>


</section>