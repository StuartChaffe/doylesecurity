<?php
/*
Active: true
UUID: 20
Title: Content
Description: Displays a content block
Keywords: content, text
Post Types: null
Allow Multiple: true
*/
$content	= get_field('content');
?>
<section class="content-block sm bkg--white">
	<?php echo $content; ?>
</section>