<div class="entry-thumbnail">
    <a href="<?php the_permalink(); ?>">
    <?php if( has_post_thumbnail() ) : ?>
        <?php echo fly_get_attachment_image( get_post_thumbnail_id(), array( 355, 355 ), true, ['class'=> 'card-img-top img-fluid'] ); ?>
    <?php else: ?>
        <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/images/dummy-image.png" alt="Image Unavailable" />
    <?php endif; ?>
    </a>
</div>