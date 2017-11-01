<div class="container">
<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>

    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>


    <p><?php the_field('make'); ?></p>
    <p><?php the_field('model'); ?></p>
    <p><?php the_field('era'); ?></p>

    <?php
    $terms = get_field('type');
    if( $terms ):
    ?>
    	<?php foreach( $terms as $term ): ?>

    		<p><?php echo $term->name; ?></p>

    	<?php endforeach; ?>
    <?php endif; ?>


    <?php
    $location = get_field('location');

    if( !empty($location) ):
    ?>
    <div class="acf-map">
    	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
    <?php endif; ?>


    <p><?php the_field('year_of_registration'); ?></p>
    <p><?php the_field('colour'); ?></p>
    <p><?php the_field('rhd_or_lhd'); ?></p>
    <p><?php the_field('interior_condition'); ?></p>
    <p><?php the_field('exterior_condition'); ?></p>
    <p><?php the_field('running_condition'); ?></p>
    <div><?php the_field('general_remarks'); ?></div>

    <?php if( false !== get_field('current_mot') ) : ?>
        <p>HAS mot</p>
    <?php else: ?>
        <p>NO mot</p>
    <?php endif; ?>

    <?php if( false !== get_field('taxed') ) : ?>
        <p>IS Taxed</p>
    <?php else: ?>
        <p>NOT Taxed</p>
    <?php endif; ?>

    <?php

    $images = get_field('images');

    if( $images ): ?>


    <div id="carouselVehicle" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php foreach( $images as $image ): ?>

            <div class="carousel-item text-right <?php echo ($image === reset($images)) ? 'active' :''; ?>">
                <?php echo fly_get_attachment_image( $image['id'], array( 1280, 500 ), true, ['class'=> 'd-block img-fluid rounded-left'] ); ?>
            </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselVehicle" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselVehicle" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php endif; ?>






    <dl class="row">
    <?php
        /*
        *  get all custom fields, loop through them and create a label => value markup
        */

        $fields = get_field_objects();

        if( $fields )
        {
        	foreach( $fields as $field_name => $field )
        	{
        		echo '<dt class="col-sm-3">' . $field['name'] . '</dt>';
        		echo '<dd class="col-sm-9">' . json_encode(get_field($field['name'])) . '</dd>';
        	}
        }

    ?>
    </dl>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>

  </article>

<?php endwhile; ?>
</div>




<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARpX63w_3rs0vE4oXWh41khsTuhPwB524"></script>
