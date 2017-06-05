<header class="banner">

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#primaryNavigation" aria-controls="primaryNavigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
            <img class="d-inline-block align-top" src="<?php echo get_template_directory_uri(); ?>/dist/images/bootstrap-solid.svg" width="30" height="30" alt="<?php bloginfo('name'); ?>" />
            <?php bloginfo('name'); ?>
        </a>

        <div class="collapse navbar-collapse text-right" id="primaryNavigation">

            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'navbar-nav ml-auto mt-2 mt-md-0',
                    'item_class' => 'nav-item',
                ]);
            endif;
            ?>

        </div>
    </nav>

</header>
