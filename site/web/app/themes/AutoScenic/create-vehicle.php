<?php
/**
* Template Name: Create Vehicle
*/
?>
<?php acf_form_head(); ?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="row">
        <div class="col-sm-8">
        <?php
        if (members_current_user_has_role( 'administrator' ) ||
            members_current_user_has_role( 'supplier' )) :
        ?>
            <?php acf_form('new-vehicle'); ?>
        <?php else: ?>
            <p><strong>You do not have permission to view this form</strong></p>
        <?php endif; ?>
        </div>

        <div class="col-sm-4"><?php get_template_part('templates/content', 'page'); ?></div>
    </div>
    
<?php endwhile; ?>
