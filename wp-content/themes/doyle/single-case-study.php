<?php get_header(); ?>
<?php
	$image 		= get_field('banner_image');
	$excerpt	= get_the_excerpt();
	$title		= get_field('case_study_title');
?>

<section class="banner text--white" <?php if ( $image['large'] ) { ?>style="background-image: url('<?php echo $image['large']['url']; ?>')"<?php } ?>>
	<div class="banner__content">
		<?php if ($title) { ?>
			<h1><?php echo $title; ?></h1>
			<?php } else { ?>
			<h1><?php the_title(); ?></h1>
		<?php } ?>
		<?php if ( $excerpt ) { ?>
		<div class="banner__text">
			<p class="lead"><?php echo $excerpt; ?></p>
		</div>
		<?php } ?>
	</div>
	<?php if ( $image['large'] ) { ?><img loading="lazy" class="banner__image hidemobile" src="<?php echo $image['large']['url']; ?>" alt="<?php echo $image['large']['alt']; ?>" /><?php } ?>
	<?php if ( $image['small'] ) { ?><img loading="lazy" class="banner__image hidedesktop" src="<?php echo $image['small']['url']; ?>" alt="<?php echo $image['small']['alt']; ?>" /><?php } ?>
</section>

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
