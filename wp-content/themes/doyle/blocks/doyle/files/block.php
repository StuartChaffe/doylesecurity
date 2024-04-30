<?php
/*
Active: true
UUID: 21
Title: Files
Description: Displays a list of files
Keywords: files, downloads
Post Types: null
Allow Multiple: true
*/
$title = get_field('files_title');
?>
<section class="files sm bkg--white">
<?php if ( $title ) { ?>
	<h2><?php echo $title; ?></h2>
<?php } ?>
	<?php if( have_rows('files') ) { ?>
	<div class="files-list">
		<?php while( have_rows('files') ): the_row();
			$file 	= get_sub_field('file');
			$url = $file['url'];
			$title = $file['title'];
			$name = $file['filename'];
			$caption = $file['caption'];
			$description = $file['description'];
			$thumb = get_sub_field('thumbnail');
		?>

		<a class="files-list__item" href="<?php echo $url; ?>">
			<?php if ($thumb) { ?><img class="files-list__item--thumb" src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt'] ?>" /><?php } ?>
			<p><?php echo $title; ?></p>
			<p>(<?php echo $name; ?>)</p>
			<?php if ($caption) { ?><p><?php echo $caption; ?></p><?php } ?>
			<?php if ($description) { ?><p><?php echo $description; ?></p><?php } ?>
			<span>Download</span>
		</a>
		<?php endwhile; ?>
	</div>
	<?php } ?>
</section>