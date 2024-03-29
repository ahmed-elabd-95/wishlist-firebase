<?php 
/*
 * Plugin Name: Wishlist firebase
 * Description: create wishlist page and getting data from firebase
 * Plugin URI: https://github.com/ahmed-elabd-95/wishlist-firebase/
 * Author: Ahmed Elabd
 * Author URI: https://github.com/ahmed-elabd-95
 * Version: 1.0 
 */

 // Activation hook
register_activation_hook(__FILE__, 'wishlist_plugin_activate');

function wishlist_plugin_activate() {
    // Activation code here
}

// Deactivation hook
register_deactivation_hook(__FILE__, 'wishlist_plugin_deactivate');

function wishlist_plugin_deactivate() {
    // Deactivation code here
}

// Include other files
require_once plugin_dir_path(__FILE__) . './wishlist-button.php';
require_once plugin_dir_path(__FILE__) . './wishlist-page.php';
?>