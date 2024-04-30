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

$banner_type = get_field('banner_type');
$image = get_field('banner_image');
$video = get_field( 'banner_video');
$poster = get_field( 'banner_video_poster');
// $large 		= get_field('banner_image');
$content	= get_field('banner_content');
$title 		= $content['title'];
$size 		= $content['size'];
$button 	= $content['button'];
$text 		= str_replace(['<p>', '</p>'], '', $content['content']);
$overlay 	= get_field('banner_overlay');
?>
<section class="banner text--white<?php if ( $overlay == '0' ) { ?> banner__overlay<?php } ?><?php if ( !$text ) { ?> banner--notext<?php } ?>" <?php if ( $image ) { ?>style="background-image: url('<?php echo $image['large']['url']; ?>')"<?php } ?>>
<?php if ( $video && $banner_type == 'Video' ) { ?>
	<div class="banner--video">
		<video id="video-desktop" src="<?php echo $video['url']; ?>" loop="false" muted="false" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster="<?php if ( $poster ) { ?><?php echo $poster ?><?php } ?>"></video>
	</div>
<?php } ?>

	<div class="banner__content<?php if ( $size !== 'Standard' ) { ?> <?php echo $size; ?><?php } ?>">
		<?php if ( $title ) { ?><h1><?php echo $title; ?></h1><?php } ?>
		<?php if ($button) { ?>
			<a class="btn btn--outline" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
		<?php } ?>
		<?php if ( $text ) { ?>
		<div class="banner__text">
			<p class="lead"><?php echo $text; ?></p>
		</div>
		<?php } ?>
	</div>
	<?php if ( $banner_type == 'Image' ) { ?>
	<?php if ( $image['large'] ) { ?><img loading="lazy" class="banner__image hidemobile" src="<?php echo $image['large']['url']; ?>" alt="<?php echo $image['large']['alt']; ?>" /><?php } ?>
	<?php if ( $image['small'] ) { ?><img loading="lazy" class="banner__image hidedesktop" src="<?php echo $image['small']['url']; ?>" alt="<?php echo $image['small']['alt']; ?>" /><?php } ?>
	<?php } ?>
</section>