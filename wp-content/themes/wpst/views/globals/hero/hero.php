<?php

$page = get_the_id();
$page_type = "";
$title = get_the_title();
$excerpt = wpst_get_excerpt_by_id( $page );
$current_cat = is_category( get_queried_object() ) ? get_queried_object()->name : '';

if( is_front_page() ):

    $page_type = "hero--home";
    $title = "Stash";
    $excerpt = "Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.";

elseif( is_category() ):

    $title = $current_cat;
    $page_type = "";
    $excerpt = 'Showing blog posts from the ' . $current_cat . ' category.';

endif;

if( is_home() ):

    $title = get_the_title(10);
    $excerpt = wpst_get_excerpt_by_id( 10 );

endif;

?>

<div class="hero <?php echo $page_type; ?>">
    <div class="cf">

        <div class="hero__text">
            <h1 class="hero__headline u-style-lowercase u-zero-bottom">
                <?php echo $title; ?>
            </h1>

            <?php if($excerpt): ?>
                <p class="hero__excerpt gamma u-push-bottom/2">
                    <?php echo $excerpt; ?>
                </p>
            <?php endif; ?>

            <?php if( is_front_page() ): ?>
                <a href="/stories" class="btn btn--primary btn--medium u-style-lowercase u-push-top/2">
                    See how it can help you
                </a>
            <?php endif; ?>
        </div>

        <?php if( is_front_page() ): ?>
            <div class="hero__image">
                <img class="iphone iphone--home" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/iphone-light.svg" alt="" title="" />
            </div>
        <?php endif; ?>

    </div>
</div>
