<footer class="footer container-fluid bg-footer mt-5">
  <div class="container">

      <div class="row align-items-center">

          <div class="col-4">

              <a class="h4 navbar-brand text-hide" href="<?= esc_url(home_url('/')); ?>">
                  <img class="align-top" src="<?php echo get_template_directory_uri(); ?>/dist/images/autoscenic.svg" alt="<?php bloginfo('name'); ?>" />
                  <?php bloginfo('name'); ?>
              </a>

          </div>
          <div class="col-6">
              <?php
              if (has_nav_menu('footer_navigation')) :
                  wp_nav_menu([
                      'theme_location' => 'footer_navigation',
                      'menu_class' => 'nav'
                  ]);
              endif;
              ?>
          </div>

      </div>

      <div class="pt-1 text-white"><?php the_field('address', 'option'); ?></div>

      <hr />
      <div class="row justify-content-between">
          <div class="col-4">
              <ul class="nav h3">
                  <li>Follow us</li>
                  <li class="nav-item">
                      <a class="nav-link hide-text" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link hide-text" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                  </li>
              </ul>
          </div>
          <div class="col-4"></div>
      </div>
      <hr />
  </div>
</footer>