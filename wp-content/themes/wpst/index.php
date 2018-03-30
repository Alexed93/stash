<?php

/**
 ***************************************************************************
 * Default Template
 ***************************************************************************
 *
 * This template is used to show a generic page. More info here:
 * http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 *
 */



// Get the header
get_header();

?>

<main class="section">
    <div class="container">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ): ?>
                <?php the_post(); ?>

                <div class="grid grid--spaced">

                    <div class="grid__item grid__item--8-12-bp2">

                        <article>
                            <h1 class="u-style-lowercase u-zero-bottom">
                                <?php the_title(); ?>
                            </h1>

                            <?php if ( $post->post_excerpt ): ?>
                                <p class="delta u-push-bottom/2">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                            <?php endif; ?>

                            <?php the_content(); ?>

                            <div class="u-push-top@2">
                                <?php if ( comments_open() || get_comments_number() ) : ?>
                                    <h3 class="gamma u-push-bottom/2">Comments</h3>
                                    <?php comments_template(); ?>
                                <?php endif; ?>
                            </div>
                        </article>

                    </div>

                    <div class="grid__item grid__item--4-12-bp2">
                        <?php get_sidebar('share'); ?>
                    </div>

                </div>

            <?php endwhile; ?>
        <?php else: ?>
            <?php get_template_part( 'views/errors/404-posts' ); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
