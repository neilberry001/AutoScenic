<header class="banner bg-inverse pt-2">

    <div class="container">

        <div class="row align-items-center hidden-lg-up mt-2">
            <div class="col">
                <a class="navbar-brand text-hide" href="<?= esc_url(home_url('/')); ?>">
                    <img class="align-top" src="<?php echo get_template_directory_uri(); ?>/dist/images/autoscenic.svg" alt="<?php bloginfo('name'); ?>" />
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <div class="col text-right">
                <button class="text-white navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="row  justify-content-between align-items-center hidden-md-down">
            <div class="col-4">
                <a class="navbar-brand text-hide" href="<?= esc_url(home_url('/')); ?>">
                    <img class="align-top" src="<?php echo get_template_directory_uri(); ?>/dist/images/autoscenic.svg" alt="<?php bloginfo('name'); ?>" />
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <div class="col-4 text-right">
                <p class="h2 text-primary "><?php the_field('phone_number', 'option'); ?></p>
            </div>
        </div>


        <nav class="navbar navbar-inverse navbar-toggleable-md">

            <div id="navbarToggler" class="collapse navbar-collapse justify-content-md-center">
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'navbar-nav',
                        'item_class' => 'nav-item',
                    ]);
                endif;
                ?>
                <?php
                if (members_current_user_has_role('administrator') ||
                    members_current_user_has_role('supplier')) :
                    ?>
                    <ul class="navbar-nav">
                        <li class="nav-item menu-item menu-create-vehicle">
                            <a class="nav-link" href="<?php echo home_url('/create-vehicle'); ?>">
                                <span><?php echo __('Add Vehicle'); ?></span>
                            </a>
                        </li>
                        <li class="nav-item menu-item menu-my-vehicles">
                            <a class="nav-link" href="<?php echo home_url('/my-vehicles'); ?>">
                                <span><?php echo __('My Vehicles'); ?></span>
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </nav>






    </div>
</header>
