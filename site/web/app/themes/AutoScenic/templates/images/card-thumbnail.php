
<div class="entry-thumbnail">
    <?php if( has_post_thumbnail() ) : ?>
        <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top img-fluid" alt="Thumbnail for <?php the_title_attribute(); ?>">
    <?php else: ?>
        <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/images/dummy-image.png" alt="Image Unavailable" />
    <?php endif; ?>
</div>
