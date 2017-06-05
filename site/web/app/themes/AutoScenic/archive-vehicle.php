<div class="jumbotron text-center">

    <div class="container">

        <?php get_template_part('templates/page', 'header'); ?>

        <div class="row">
            <div class="col">
                <?php echo facetwp_display( 'facet', 'vehicle_make' ); ?>
            </div>
            <div class="col">
                <?php echo facetwp_display( 'facet', 'vehicle_model' ); ?>
            </div>
            <div class="col">
                <?php echo facetwp_display( 'facet', 'vehicle_era' ); ?>
            </div>
            <div class="col">
                <?php echo facetwp_display( 'facet', 'vehicle_type' ); ?>
            </div>
            <div class="col">
                <?php echo facetwp_display( 'facet', 'vehicle_location' ); ?>
            </div>
        </div>


        <?php echo do_shortcode('[facetwp selections="true"]'); ?>
    </div>

</div>

<div class="container">

    <div class="facetwp-template card-columns">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endwhile; ?>
    </div>

</div>
