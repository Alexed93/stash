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

<main class="section">
    <div class="container">

        <?php get_template_part('views/globals/hero/hero'); ?>
        <?php get_sidebar('blog'); ?>

        <div class="cards--blog">
            <div class="grid grid--spaced grid--flex blog__grid">
                <?php if ( have_posts() ): ?>

                    <?php while ( have_posts() ): ?>

                        <?php the_post(); ?>
                        <?php get_template_part('views/post/index'); ?>

                    <?php endwhile; ?>

                <?php get_template_part('views/globals/pagination'); ?>

                <?php else: ?>
                        <?php get_template_part( 'views/errors/404-posts' ); ?>
                <?php endif; ?>
            </div>
            <?php //get_template_part( 'views/globals/pagination' ); ?>
        </div>

    </div><!-- .container -->
</main><!-- .section -->

<?php get_footer(); ?>
