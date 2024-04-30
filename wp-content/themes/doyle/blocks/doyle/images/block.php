<?php
/*
Active: true
UUID: 18
Title: Image(s)
Description: Displays one or more images
Keywords: image, gallery, carousel
Post Types: null
Allow Multiple: true
*/
$bkg = get_field('bkg_colour');

?>
<section class="<?php echo $bkg; ?>">
    <div class="images <?php if ( $bkg == 'bkg--grey' ) { ?> sp <?php } else { ?>sp--bottom<?php } ?>">
        <?php if( have_rows('images') ) { ?>
        <div class="images-slider">
            
            <?php while( have_rows('images') ): the_row();
                $image = get_sub_field('image');
            ?>
            <div class="images-slider__item">
                <img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <?php endwhile; ?>
        </div>
        <?php } ?>
    </div>
</section>