<article <?php post_class("card"); ?>>
    <?php get_template_part('templates/images/card-thumbnail'); ?>
    <div class="card-block">
        <h2 class="card-title text-truncate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="card-text">
            <dl>
                <dt>Make</dt>
                <dd><?php the_field('make'); ?>&nbsp;</dd>
                <dt>Model</dt>
                <dd><?php the_field('model'); ?>&nbsp;</dd>
                <dt>Era</dt>
                <dd><?php the_field('era'); ?>&nbsp;</dd>
            </dl>
        </div>
    </div>
    <footer class="card-footer text-center">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary">View vehicle</a>
    </footer>
</article>