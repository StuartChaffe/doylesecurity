<?php
/*
Active: true
UUID: 17
Title: Stats
Description: Displays a stats block
Keywords: stats, impact
Post Types: null
Allow Multiple: true
*/
$title 		= get_field('stats_title');
$content	= get_field('stats_content');
?>
<section class="stats">
	<div class="stats__content bkg--grey">
		<?php if ($title) { ?>
			<h3><?php echo $title;?></h3>
		<?php } ?>
		<?php if ($content) { ?>
			<?php echo $content;?>
		<?php } ?>

		<?php if( have_rows('stats') ) { ?>
			<div class="stats-list">
			<?php while( have_rows('stats') ): the_row();
				$figure 	= get_sub_field('stat_figure');
				$content 	= get_sub_field('stat_content');
			?>
				<div class="stats-list__item">
				<?php if ($figure) { ?>
					<h5><?php echo $figure; ?></h5>
				<?php } ?>
				<?php if ($content) { ?>
					<p><?php echo $content; ?></p>
				<?php } ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php } ?>
	</div>
</section>