<?php
/**
* Template Name: My Vehicles
*/
?>
<?php
if (members_current_user_has_role( 'administrator' ) ||
    members_current_user_has_role( 'supplier' )) :
?>
    <div class="container-fluid bg-inverse text-white">

        <div class="container">
            <div class="text-center">
                <?php get_template_part('templates/page', 'header--white'); ?>
            </div>
        </div>

    </div>
    <div class="container-fluid prewrap p-4">&nbsp;</div>


    <div class="container">

        <div class="card-columns my-vehicles-columns">
            <?php
            $args = array(
                'post_type' => 'vehicle',
                'posts_per_page' => get_option( 'posts_per_page' ),//can conflict with wp default list number found in Settings->Reading, ensure this value is (>=)
                'paged' => false,
                'author' => get_current_user_id(),
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );

            $custom_posts_obj = new WP_Query($args);
            ?>

            <?php /*grab this post type object, primarily for title attr using post type labels*/ ?>
            <?php $custom_post_type = get_post_type_object( $custom_posts_obj->query_vars['post_type'] ); ?>

            <?php /*load the template output for each member of the cpt*/ ?>
            <?php if ( $custom_posts_obj->have_posts() ): ?>

                <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
                    <?php while ( $custom_posts_obj->have_posts() ) : $custom_posts_obj->the_post(); ?>
                        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                    <?php endwhile; ?>
                </ul>

            <?php endif; wp_reset_postdata(); ?>
        </div>

    </div>
<?php endif; ?>
