<?php
/*
Active: true
UUID: 6
Title: Quote
Description: Displays a quote
Keywords: quote, testimonial
Post Types: null
Allow Multiple: true
*/
$quote      = get_field('quote');
$content    = $quote['content'];
$author     = $quote['author'];
$company    = $quote['company'];

?>
<section class="quote sm">
    <div class="quote__content bkg--black">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/quote.svg" alt="Quote" />
        <p class="heading-3"><strong><?php echo $content; ?></strong></p>
        <p><strong><span class="txt--red"><?php echo $author; ?></span></strong><br />
            <?php echo $company; ?></p>
    </div>
</section>