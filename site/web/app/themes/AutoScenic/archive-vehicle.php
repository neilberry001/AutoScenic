<div class="container-fluid bg-inverse">

    <div class="container">
        <div class="text-center">
            <?php get_template_part('templates/page', 'header--white'); ?>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col">
                <h5 class="text-center text-white">Make</h5>
                <?php echo facetwp_display( 'facet', 'vehicle_make' ); ?>
            </div>
            <div class="col">
                <h5 class="text-center text-white">Model</h5>
                <?php echo facetwp_display( 'facet', 'vehicle_model' ); ?>
            </div>
            <div class="col">
                <h5 class="text-center text-white">Era</h5>
                <?php echo facetwp_display( 'facet', 'vehicle_era' ); ?>
            </div>
            <div class="col">
                <h5 class="text-center text-white">Type</h5>
                <?php echo facetwp_display( 'facet', 'vehicle_type' ); ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <h5 class="text-center text-white">Location</h5>
                <?php echo facetwp_display( 'facet', 'vehicle_location' ); ?>
            </div>
        </div>


        <?php echo do_shortcode('[facetwp selections="true"]'); ?>
    </div>

</div>
<div class="container-fluid prewrap p-4">&nbsp;</div>
<div class="container">

    <div class="facetwp-template card-columns ">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endwhile; ?>
    </div>

</div>
