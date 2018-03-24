<?php
/**
 ***************************************************************************
 * News: Listing
 ***************************************************************************
 *
 * This template is the catch-all for the news main page,
 * categories and archives.
 *
 */

// Get the header
get_header();

?>

<?php get_template_part('views/globals/breadcrumbs'); ?>

<main class="section">
    <div class="container">

        <?php get_template_part('views/globals/hero/hero'); ?>

        <div class="grid">
            <div class="grid__item grid__item--8-12-bp3">
                <?php
                    if ( have_posts() ):
                        while ( have_posts() ): the_post();
                            get_template_part('views/post/loop');
                        endwhile;
                    else:
                        get_template_part( 'views/errors/404-posts' );
                    endif;

                    get_template_part( 'views/globals/pagination' );
                ?>
            </div>
            <div class="grid__item grid__item--4-12-bp3">
                <?php //get_sidebar('news'); ?>
            </div>
        </div>

    </div><!-- .container -->
</main><!-- .section -->

<?php get_footer(); ?>
