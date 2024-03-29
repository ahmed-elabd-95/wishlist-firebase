<?php 
/*
 * Plugin Name: Wishlist firebase
 * Description: create wishlist page and getting data from firebase
 * Plugin URI: https://github.com/ahmed-elabd-95/wishlist-firebase/
 * Author: Ahmed Elabd
 * Author URI: https://github.com/ahmed-elabd-95
 * Version: 1.0 
 */

 // Enqueue necessary scripts
function wishlist_enqueue_scripts() {
    wp_enqueue_script('firebase', 'https://www.gstatic.com/firebasejs/8.3.3/firebase-app.js', array(), '8.3.3', true);
    wp_enqueue_script('firebase-database', 'https://www.gstatic.com/firebasejs/8.3.3/firebase-database.js', array('firebase'), '8.3.3', true);
    wp_enqueue_script('wishlist-plugin', plugin_dir_url(__FILE__) . 'wishlist-plugin.js', array('firebase', 'firebase-database', 'jquery'), '1.0', true);
}
// add_action('wp_enqueue_scripts', 'wishlist_enqueue_scripts');
include(plugin_dir_path(__FILE__) . './wishlist-page.php');
include(plugin_dir_path(__FILE__) . './wishlist-button.php');


// Enqueue styles for the button
// function custom_button_styles() {
//     wp_enqueue_style( 'custom-button-styles', plugins_url( '/css/custom-button.css', __FILE__ ) );
// }
// add_action( 'wp_enqueue_scripts', 'custom_button_styles' );