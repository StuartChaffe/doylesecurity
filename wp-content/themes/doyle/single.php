<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="content">
	<div class="container content">
		<div class="content__title">
			<h1><?php the_title(); ?></h1>
			<time pubdate><p class="lead"><?php the_date('l, j F Y'); ?></p> </time>
		</div>
		<?php if ( has_excerpt() ) { ?><p class="lead content__excerpt"><?php echo get_the_excerpt() ?></p><?php } ?>

		<div class="content__content sp--bottom">
			<?php the_content(); ?>
		</div>
		<div class="content__pagination">
			<?php previous_post_link('%link', 'Previous'); ?> <?php next_post_link('%link', 'Next'); ?>
		</div>
	</div>
</article>

<?php
$title = get_field('related_news_title');
$relatednews = get_field( 'select_news' );
?>
<?php if( $relatednews ): ?>
	<section class="related-news sp bkg--white">
	<?php if ( $title ) { ?>
		<h2><?php echo $title; ?></h2>
	<?php } ?>	
		<div class="news-list featured-news-list">
			<?php foreach( $relatednews as $related ):
				$title = get_the_title($related);
			?>

			<a class="news-list__item" href="<?php the_permalink($related); ?>">
				<?php echo get_icon('news'); ?><?php echo($title); ?>
			</a>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>

<?php
$bkg 				= get_field('bkg');
$content			= get_field('form_content');
$default_header		= get_field('form_header_content', 'options');
$default_body		= get_field('form_body_content', 'options');
$default_bkg		= get_field('form_background', 'options');
?>
<section class="form-outer sp bkg--grey" style="background-image: url('<?php if ($bkg) { ?><?php echo $bkg['url']; ?><?php } else { ?><?php echo $default_bkg['url']; ?><?php } ?>')">
	<div class="form-block">
		<div class="form-block__header">
			<div class="form-block__header-content">
				<?php echo $default_header; ?>
			</div>
		</div>
		<div class="form-block__body">
			<div class="form-block__body-content">
				<?php echo $default_body; ?>
			</div>
			<div class="form-block__body-form">
				<?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
