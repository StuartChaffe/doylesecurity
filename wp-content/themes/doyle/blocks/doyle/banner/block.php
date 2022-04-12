<?php
/*
Active: true
UUID: 2
Title: Banner
Description: Displays a large banner
Keywords: banner
Post Types: null
Allow Multiple: true
*/

$image = get_field('banner_image');
$large = get_field('banner_image');
$title = get_field('banner_title');
$content = get_field('banner_content', false, false);
?>
<section class="banner text--white" <?php if ( $image['large'] ) { ?>style="background-image: url('<?php echo $image['large']['url']; ?>')"<?php } ?>>
	<div class="banner__content">
		<?php if ( $title ) { ?><h1><?php echo $title; ?></h1><?php } ?>
		<div class="banner__text">
			<?php if ( $content ) { ?><p class="lead"><?php echo $content; ?></p><?php } ?>
		</div>
	</div>
	<?php if ( $image['large'] ) { ?><img loading="lazy" class="banner__image hidemobile" src="<?php echo $image['large']['url']; ?>" alt="<?php echo $image['large']['alt']; ?>" /><?php } ?>
	<?php if ( $image['small'] ) { ?><img loading="lazy" class="banner__image hidedesktop" src="<?php echo $image['small']['url']; ?>" alt="<?php echo $image['small']['alt']; ?>" /><?php } ?>
</section>