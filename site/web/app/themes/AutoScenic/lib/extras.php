<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


function sage_wrap_base_cpts($templates) {
    $cpt = get_post_type(); // Get the current post type
    if ($cpt) {
        array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
    }
    return $templates; // Return our modified array with base-$cpt.php at the front of the queue
}
add_filter('sage/wrap_base', __NAMESPACE__ . '\\sage_wrap_base_cpts'); // Add our function to the sage/wrap_base filter

function navbar_nav_class( $classes, $item )
{
    $classes[] = 'nav-item';

    return $classes;
}
add_filter( 'nav_menu_css_class', __NAMESPACE__ . '\\navbar_nav_class', 10, 2 );