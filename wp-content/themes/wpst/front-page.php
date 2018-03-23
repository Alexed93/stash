<?php

/**
 ***************************************************************************
 * Front Page Template
 ***************************************************************************
 *
 * This is used as a bespoke template for the homepage
 *
 * More info can be found here:
 * http://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 */



// Get the header
get_header();

?>

<main class="section">
    <div class="container">

        <?php get_template_part('views/globals/hero/hero'); ?>

    <div class="features u-clear">
        <?php get_template_part('views/front/features'); ?>
    </div>

    </div><!-- .container -->
</main><!-- .section -->

<?php get_footer(); ?>
