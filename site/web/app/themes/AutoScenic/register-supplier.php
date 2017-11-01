<?php
/**
* Template Name: Register Supplier
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="row">
        <div class="col-sm-4"><?php get_template_part('templates/content', 'page'); ?></div>
        <div class="col-sm-8"><?php echo do_shortcode('[wppb-register role="supplier"]'); ?></div>
    </div>
    
<?php endwhile; ?>
