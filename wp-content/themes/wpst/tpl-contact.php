<?php

/**
 ***************************************************************************
 * Contact
 ***************************************************************************
 *
 * All template filenames should be prefixed with `tpl-` to help group them
 * within the theme. Prefix your template name with either 'Admin' or 'Theme':
 * - Admin = doesn't use the usual excerpt/content (aka. set and forget)
 * - Theme = something the client can actively use.
 *
 * Template Name: Theme - Contact
 *
 */



// Get the header
get_header();

?>

<main class="section">
    <div class="container">

        <?php get_template_part('views/globals/hero/hero'); ?>

        <div class="contact">
            <div class="grid grid--spaced">
                <div class="grid__item grid__item--8-12-bp2">
                    <?php the_content(); ?>
                </div>

                <div class="grid__item grid__item--4-12-bp2">
                    <?php get_sidebar('contact'); ?>
                </div>
            </div>
        </div>

    </div>
    <!-- .container -->
</main>

<?php get_footer(); ?>
