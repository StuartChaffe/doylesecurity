<?php
/*
Active: true
UUID: 5
Title: Link list
Description: Displays a row of links
Keywords: link
Post Types: null
Allow Multiple: true
*/

?>
<section class="bkg--grey">
	<div class="link-list sp">
	<?php if( have_rows('links') ) { ?>
		<?php while( have_rows('links') ): the_row();
			$icon 		= get_sub_field('link_icon');
			$title 		= get_sub_field('link_title');
			$content 	= get_sub_field('link_content');
			$button 	= get_sub_field('link_link');
		?>

		<a class="link-list__item" href="<?php echo $button['url']; ?>">
			<div class="link-list__content">
				<?php if ( $icon ) { ?><div class="link-list__image"><img loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></div><?php } ?>
				<?php if ($title) { ?>
					<h3><?php echo $title; ?></h3>
				<?php } ?>
				<?php if ($content) { ?>
					<?php echo $content; ?>
				<?php } ?>
				<?php if ($button) { ?>
					<span class="btn" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></span>
				<?php } ?>
			</div>
		</a>
		<?php endwhile; ?>
	<?php } ?>
	</div>
</section>