<?php
/**
 * Template Name: Middle Page Banner
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

    <div class="row">
      <div class="col-4"><?php the_field('headline'); ?></div>
      <div class="col"><?php get_template_part('templates/content', 'page'); ?></div>
    </div>



    <div class="container-fluid middle-page-banner">
      <div class="row">
        <div class="col">
          <?php echo get_the_post_thumbnail( false, '1280', array( 'class' => 'd-block img-fluid rounded-left alignright--fluid' ) ); ?>
        </div>
      </div>
    </div>


  <div class="row">
    <div class="col-4"><?php the_field('quote'); ?></div>
    <div class="col">
        <?php the_field('description'); ?>
        <a class="btn btn-primary btn-lg" href="<?php the_field('link'); ?>">Contact Us</a>
    </div>
  </div>



<?php endwhile; ?>
