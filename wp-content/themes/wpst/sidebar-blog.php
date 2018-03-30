<?php
/**
 ***************************************************************************
 * Sidebar - Blog
 ***************************************************************************
 *
 *
 */

// Get archives
$categories = wpst_get_categories();
$current_cat = is_category( get_queried_object() ) ? get_queried_object()->name : '';

?>

<?php if ( $categories ) : ?>
    <div class="categories">
        <h2 class="alpha | sidebar__heading u-weight-medium u-push-bottom/2">
            Categories
        </h2>
        <div class="categories__content">
            <ul class="categories__list list--unset list--inline">
                <?php foreach ( $categories as $category ) : ?>
                    <?php $current = $current_cat == $category->name ? 'is-current' : ''; ?>
                    <li class="category delta u-style-lowercase <?= $current ?>">
                        <?php if ( $current ) : ?>
                            <?php echo $category->name; ?>
                        <?php else : ?>
                            <a href="<?php echo get_term_link( $category ); ?>">
                                <?php echo $category->name; ?>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

