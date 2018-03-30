<?php

/**
 ***************************************************************************
 * Sidebar - Share
 ***************************************************************************
 *
 *
 */




?>

<aside class="sidebar sidebar--share" role="complementary">
    <article class="sidebar__section">
        <h2 class="gamma | sidebar__heading">Share this post</h2>
        <?php if(function_exists('social_warfare')):
            social_warfare();
        endif; ?>
    </article>
</aside>


