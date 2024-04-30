<?php
/*
Active: true
UUID: 7
Title: Video
Description: Displays a video
Keywords: video, youtube
Post Types: null
Allow Multiple: true
*/

$video = get_field('video');
$videos = get_field('videos');
?>
<?php if ($video) { ?>
<section>
	<div class="video">
		<?php echo $video; ?>
	</div>
</section>
<?php } ?>

<?php if( have_rows('videos') ) { ?>
	<section>
		<div class="video_list">
			<?php while( have_rows('videos') ): the_row();
				$video = get_sub_field('video');
			?>
			<div class="video_list__item">
				<?php echo $video; ?>
			</div>
			<?php endwhile; ?>
		</div>
	</section>
<?php } ?>