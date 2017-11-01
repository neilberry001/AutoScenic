<?php

namespace Roots\Sage\AcfConfig;

use Roots\Sage\Setup;

function as_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyARpX63w_3rs0vE4oXWh41khsTuhPwB524');
}
add_action('acf/init', __NAMESPACE__ . '\\as_acf_init');


function as_validate_year_of_registration( $valid, $value, $field, $input ){

	// bail early if value is already invalid
	if( !$valid ) {

		return $valid;

	}


    if ( ! preg_match( "/^(\d{4})$/", $value, $matches ) ) {
        $valid = "Year must be YYYY";
    }

    if ( $value > date('Y') ) {
        $valid = "Year must be in the past";
    }

	return $valid;
}
add_filter('acf/validate_value/name=year_of_registration', __NAMESPACE__ . '\\as_validate_year_of_registration', 10, 4);

acf_register_form(array(
    'id'		=> 'new-vehicle',
    'post_id'	=> 'new_post',
    'new_post'	=> array(
        'post_type'		=> 'vehicle',
        'post_status'	=> 'pending'
    ),
    'post_title'=> true,
    'post_content'=> true,
));

add_action( 'init', __NAMESPACE__.'\\blockusers_init' );
function blockusers_init() {
    if ( is_admin() && ! current_user_can( 'administrator' ) &&
        ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
        //wp_redirect( home_url() );
        //exit;
    }
}

function restrict_media_library_to_current_user( $wp_query_obj ) {

    if ( ! current_user_can( 'level_5' ) ) {

        global $current_user, $pagenow;

        if (  ! is_a( $current_user, 'WP_User' ) || 'admin-ajax.php' != $pagenow || $_REQUEST['action'] != 'query-attachments' ) {
            return;
        }

        $wp_query_obj->set( 'author', $current_user->ID );

        return;
    }
}

add_action( 'pre_get_posts', __NAMESPACE__.'\\restrict_media_library_to_current_user' );

acf_add_options_page();