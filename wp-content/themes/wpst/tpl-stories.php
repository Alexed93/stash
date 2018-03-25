<?php

/**
 ***************************************************************************
 * Stories
 ***************************************************************************
 *
 * All template filenames should be prefixed with `tpl-` to help group them
 * within the theme. Prefix your template name with either 'Admin' or 'Theme':
 * - Admin = doesn't use the usual excerpt/content (aka. set and forget)
 * - Theme = something the client can actively use.
 *
 * Template Name: Theme - Stories
 *
 */



// Get the header
get_header();

?>

<main class="section">
    <div class="container">

        <?php get_template_part('views/globals/hero/hero'); ?>

        <div class="stories">
            <?php get_template_part('views/stories/stories'); ?>
        </div>

    </div>
    <!-- .container -->
</main>

<?php get_footer(); ?>
