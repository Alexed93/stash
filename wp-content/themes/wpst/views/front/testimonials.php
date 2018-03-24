<?php

/**
 ***************************************************************************
 * Partial: Testimonials
 ***************************************************************************
 *
 * This partial is used for the testimonials slick slider
 *
 */

// Get featured project
$testimonials = get_field('testimonials', 'option');

?>

<div class="testimonials">
    <div class="container container--small ">
        <?php if( have_rows('testimonials', 'option') ): ?>
        <div class="testimonial js-testimonial">
            <?php while ( have_rows('testimonials', 'option') ) : the_row(); ?>
                <?php
                    $image           = get_sub_field('image');
                    $image_url       = $image['sizes']['small'];
                    $author          = get_sub_field('author');
                    $quote           = get_sub_field('quote');
                ?>
                <div class="testimonial__container">
                    <div class="u-push-bottom testimonial__image" style="background-image: url(' <?php echo $image_url ?> ');"></div>

                    <h2 class="u-push-bottom/2 u-zero-top gamma testimonial__title">
                        <?php echo $author; ?>
                    </h2>

                    <blockquote class="u-zero-top delta u-style-none testimonial__quote">
                        "<?php echo $quote; ?>"
                    </blockquote>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
