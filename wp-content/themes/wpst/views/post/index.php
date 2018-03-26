<?php
/**
 ***************************************************************************
 * Partial: Posts Index
 ***************************************************************************
 *
 * Display the information within the Posts listing template.
 *
 */
/**
 * Gain access to $post data
 */
global $post;
?>


<article class="grid__item grid__item--6-12-bp2 grid__item--4-12-bp3">
    <a href="<?php the_permalink(); ?>" class="card">

        <h3 class="card__headline u-push-bottom/2 u-style-lowercase"><?php the_title(); ?></h3>

        <?php if ( $post->post_excerpt ): ?>
            <p class="card__excerpt u-zero-bottom"><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>

    </a>
</article>


