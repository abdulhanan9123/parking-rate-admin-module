<?php 

// Register Parking Rates submenu in the admin menu
function add_admin_parking_rates() {

    // Parking Rates
    add_menu_page(
        'Parking Rates', 'Parking Rates',
        'manage_options', 'parking_rates',
        'parking_rates_callback',
        'dashicons-money-alt'
    );
}

add_action('admin_menu', 'add_admin_parking_rates');

// Parking Rates page
function parking_rates_callback() {

	$template_path = get_stylesheet_directory() . '/parking-rates-module/admin-templates/parking-rates-templete.php';
    include $template_path;

}

function parking_rates_initialize_options() {
    // Check if the option exists; if not, create it with default value as empty.
    add_option('same_day_covered', '');
    add_option('overnight_covered', '');
    add_option('two_nights_covered', '');
    add_option('three_nights_covered', '');
    add_option('extra_night_covered', '');

    add_option('same_day_uncovered', '');
    add_option('overnight_uncovered', '');
    add_option('two_nights_uncovered', '');
    add_option('three_nights_uncovered', '');
    add_option('extra_night_uncovered', '');
}
add_action('admin_init', 'parking_rates_initialize_options');

