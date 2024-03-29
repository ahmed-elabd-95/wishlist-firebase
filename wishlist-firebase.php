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
// function wishlist_enqueue_scripts() {
//     wp_enqueue_script('firebase', 'https://www.gstatic.com/firebasejs/8.3.3/firebase-app.js', array(), '8.3.3', true);
//     wp_enqueue_script('firebase-database', 'https://www.gstatic.com/firebasejs/8.3.3/firebase-database.js', array('firebase'), '8.3.3', true);
//     wp_enqueue_script('wishlist-plugin', plugin_dir_url(__FILE__) . 'wishlist-plugin.js', array('firebase', 'firebase-database', 'jquery'), '1.0', true);
// }
// add_action('wp_enqueue_scripts', 'wishlist_enqueue_scripts');
// require_once plugin_dir_path(__FILE__) . './wishlist-page.php';
// require_once plugin_dir_path(__FILE__) . './wishlist-button.php';

function add_custom_button_to_product_page() {
    global $product;
    
    // Check if it's a product page
    if (is_product()) {
        echo '<a href="#" class="add-to-wishlist" data-product-id="<?php echo get_the_ID(); ?>">Add to Wishlist</a>';
    }
}
add_action('woocommerce_after_single_product_summary', 'add_custom_button_to_product_page');

