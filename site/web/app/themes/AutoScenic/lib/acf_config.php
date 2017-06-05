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
