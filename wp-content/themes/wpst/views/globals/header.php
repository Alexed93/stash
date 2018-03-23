<?php

/**
 ***************************************************************************
 * Partial: Header
 ***************************************************************************
 *
 * This partial is used to define the markup for the site's global header
 * and navigation.
 *
 */



?>

<a href="#navigation" class="is-hidden">Skip to Navigation</a>

<header class="header">
    <div class="container header__container">
        <a href="/" class="logo icon icon--logo | header__logo">
            <span class="is-hidden"><?php bloginfo( 'name' ); ?></span>
        </a>

        <!-- Mobile navigation (burger menu) -->
        <button class="toggle | js-toggle-nav | header__toggle header__toggle--nav" role="button" aria-label="Toggle navigation">
            <span class="toggle__label | is-hidden">Toggle navigation</span>
            <span class="toggle__icon toggle__icon--nav | icon icon--large icon--menu-open"></span>
        </button>

        <nav class="nav-container cf | header__nav" id="navigation" role="navigation">
            <ul class="nav nav--secondary">
                <?php wp_nav_menu( array('theme_location' => 'secondary', 'items_wrap' => '%3$s') ); ?>
            </ul>

            <ul class="nav nav--primary">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'items_wrap' => '%3$s') ); ?>
            </ul>
        </nav>
    </div>
</header>
