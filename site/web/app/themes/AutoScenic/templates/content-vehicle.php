<article <?php post_class("card"); ?>>
    <?php get_template_part('templates/images/card-thumbnail'); ?>
    <div class="card-block">
        <header>
            <h2 class="entry-title card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-summary card-text">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary">View vehicle</a>
    </div>
</article>
