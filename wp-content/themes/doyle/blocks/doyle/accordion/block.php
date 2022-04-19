<?php
/*
Active: true
UUID: 1
Title: Accordion
Description: A simple accordion
Keywords: faq
Post Types: null
Allow Multiple: true
*/

$counter = 0;
$title = get_field('accordion_title');
$accordion = get_field('accordion_items');

if($accordion) {
?>
<section class="accordion sp">
	<?php if ($title) { ?>
		<h2><?php echo $title; ?></h2>
	<?php } ?>
	<?php foreach($accordion as $item) { $counter++; ?>
		<div class="accordion__item">
			<button aria-expanded="false" class="accordion__handle" aria-controls="accordion-<?php echo $block['id'] . '_' . $counter; ?>" id="<?php echo sanitize_title($item['accordion_title']); ?>">
				<p class="accordion__title"><?php echo $item['accordion_title']; ?></p>
				<div class="accordion__icon"><?php echo get_icon('arrow'); ?></div>
			</button>
			<div class="accordion__body" id="accordion-<?php echo $block['id'] . '_' . $counter; ?>" role="region" aria-labelledby="<?php echo sanitize_title($item['accordion_title']); ?>">
				<?php echo $item['accordion_body']; ?>
			</div>
		</div>
	<?php } ?>
</section>
<?php } ?>
