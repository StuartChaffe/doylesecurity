<?php get_header(); ?>
<?php
	$image 		= get_field('banner_image');
	$excerpt	= get_the_excerpt();
	$title		= get_field('job_title');
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
<?php
	$days 		= get_field('job_days');
	$hours 		= get_field('job_hours');
	$pay 		= get_field('job_pay');
	$shortdesc	= get_field('job_short_description');
	$details	= get_field('job_details');
?>

<div class="careers sp bkg--white">
	<div class="careers__item">
		<h3><?php the_title(); ?></h3>
		<div class="careers__content">
			<div class="careers__content-meta">
				<div class="careers__content-meta__item"><?php echo get_icon('hour'); ?><div><?php echo $hours; ?></div></div>
				<div class="careers__content-meta__item"><?php echo get_icon('pay'); ?><div><?php echo $pay; ?></div></div>
				<div class="careers__content-meta__item"><?php echo get_icon('cal'); ?><div><?php echo $days; ?></div></div>
			</div>
			<?php echo $shortdesc; ?>
		</div>
		<a href="#apply" class="btn">Apply</a>
	</div>
</div>

<div class="container">
	<article class="content content__careers">
		<?php the_content(); ?>
		<?php echo $details; ?>
	</article>


	<div class="careers__apply sm--bottom" id="apply">
		<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
	</div>
</div>

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
