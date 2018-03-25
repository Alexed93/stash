<?php

/**
 ***************************************************************************
 * Partial: FAQ
 ***************************************************************************
 *
 * This partial is used for FAQ area
 *
 */

// Get featured project
$questions = get_field('questions', 8);

?>

<div class="faq">
    <h2 class="alpha sub-title">everything else</h2>

    <?php if( have_rows('questions', 8) ): ?>

    <div class="accordion">
        <?php while ( have_rows('questions', 8) ) : the_row(); ?>
            <?php
                $question   = get_sub_field('question');
                $answer     = get_sub_field('answer');
            ?>
        <div class="accordion-section js-toggle-accordion">
            <div class="accordion-section-title"><?php echo $question; ?></div>
            <span class="accordion__icon icon icon--open icon--medium"></span>
            <div class="accordion-section-content">
                <p><?php echo $answer; ?></p>
            </div><!--end .accordion-section-content-->
        </div>
        <?php endwhile; ?>
    </div>

    <?php endif; ?>

</div>

