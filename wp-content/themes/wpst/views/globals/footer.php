<?php

/**
 ***************************************************************************
 * Partial: Footer
 ***************************************************************************
 *
 * This partial is used to define the markup for the site's global footer
 * and/or copyright info.
 *
 */



?>


<footer class="footer">
    <div class="container">

        <a href="/" class="logo icon icon--logo icon--xlarge | footer__logo">
            <span class="is-hidden"><?php bloginfo( 'name' ); ?></span>
        </a>

        <a href="/" class="app-download icon icon--app-store">
            <span class="is-hidden">Download the app for iOS</span>
        </a>

        <a href="https://twitter.com/alexed93?lang=en" class="icon icon--xlarge icon--twitter | social__icon animation--bounce">
            <span class="is-hidden">Twitter</span>
        </a>

        <a href="https://twitter.com/alexed93?lang=en" class="icon icon--xlarge icon--facebook | social__icon animation--bounce">
            <span class="is-hidden">Facebook</span>
        </a>

        <a href="https://twitter.com/alexed93?lang=en" class="icon icon--xlarge icon--instagram | social__icon animation--bounce">
            <span class="is-hidden">Instagram</span>
        </a>

        <div class="cf u-clear u-pad-top">
            <p class="zeta copyright">Copyright &copy; Stash</p>

            <p class="zeta created-by">Created by
                <a href="mailto:alexed93@gmail.com" class="link">Alex Edwards</a>
            </p>
        </div>

    </div>
</footer>


<?php wp_footer(); ?>

<!-- With <3 from Mixd - http://mixd.co.uk -->

</body>
</html>
