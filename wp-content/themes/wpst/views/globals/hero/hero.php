<?php

$page = get_the_id();
$page_type = "";
$title = get_the_title();
$excerpt = wpst_get_excerpt_by_id( $page );

if( is_front_page() ):

    $page_type = "hero__text--home";
    $title = "Stash";
    $excerpt = "Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.";

endif;

?>

<div class="hero">

    <div class="hero__text <?php echo $page_type; ?>">
        <h1 class="hero__headline u-style-lowercase u-zero-bottom">
            <?php echo $title; ?>
        </h1>

        <p class="delta u-push-bottom/2">
            <?php echo $excerpt; ?>
        </p>

        <?php if( is_front_page() ): ?>
            <a href="/" class="btn btn--primary u-style-lowercase">
                See how it works
            </a>
        <?php endif; ?>
    </div>

    <?php if( is_front_page() ): ?>
        <div class="hero__image">
            <img class="iphone iphone--home" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/iphone-dark.svg" alt="" title="" />
        </div>
    <?php endif; ?>

</div>
