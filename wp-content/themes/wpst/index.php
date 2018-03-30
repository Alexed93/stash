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

                <article class="content">
                    <h1 class="u-style-lowercase u-zero-bottom">
                        <?php the_title(); ?>
                    </h1>

                    <?php if ( $post->post_excerpt ): ?>
                        <p class="delta u-push-bottom/2">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    <?php endif; ?>

                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <?php get_template_part( 'views/errors/404-posts' ); ?>
        <?php endif; ?>
    </div>
    <!-- .container -->
</main>

<?php get_footer(); ?>
