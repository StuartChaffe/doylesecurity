<?php
/*
Active: true
UUID: 10
Title: Featured news
Description: Featured news items
Keywords: news, blog, featured
Post Types: null
Allow Multiple: true
*/
$title = get_field('featured_news_title');
$featurednews = get_field( 'select_news' );
?>

<section class="featured-news sp bkg--white">
	<?php if ( $title ) { ?>
	<h2><?php echo $title; ?></h2>
	<?php } ?>

	<?php if( $featurednews ): ?>	
		<div class="news-list featured-news-list">
		<?php foreach( $featurednews as $featured ):
			$title = get_the_title($featured);
			$banner = get_field('banner_image', $featured);
			$image = get_field('square_image', $featured);
			$name = get_field('story_name', $featured);
		?>

		<a class="news-list__item" href="<?php the_permalink($featured); ?>">
			<?php echo get_icon('news'); ?><p><?php echo($title); ?></p>
		</a>
	
		<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>