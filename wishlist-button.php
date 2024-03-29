<?php
// wishlist-functions.php

// Function to add product to wishlist
function add_to_wishlist($product_id) {
    // Check if user is logged in
    if (is_user_logged_in()) {
        // Get current user ID
        $current_user_id = get_current_user_id();

        // Firebase integration code to add product to wishlist
        // For example, assuming your Firebase database is already initialized
        $firebase_database = firebase\Database::getInstance();
        $wishlist_ref = $firebase_database->getReference('wishlist/' . $current_user_id);
        $wishlist_ref->push(['product_id' => $product_id]);
    }
}

// Function to remove product from wishlist
function remove_from_wishlist($product_id) {
    // Check if user is logged in
    if (is_user_logged_in()) {
        // Get current user ID
        $current_user_id = get_current_user_id();

        // Firebase integration code to remove product from wishlist
        // For example, assuming your Firebase database is already initialized
        $firebase_database = firebase\Database::getInstance();
        $wishlist_ref = $firebase_database->getReference('wishlist/' . $current_user_id);
        $wishlist_ref->orderByChild('product_id')->equalTo($product_id)->getSnapshot()->getReference()->remove();
    }
}

// Enqueue scripts and styles for wishlist functionality
function wishlist_enqueue_scripts() {
    // Enqueue jQuery (if not already loaded)
    wp_enqueue_script('jquery');

    // Enqueue custom script for wishlist functionality
    wp_enqueue_script('wishlist-script', plugin_dir_url(__FILE__) . './wishlist-plugin.js', array('jquery'), '1.0', true);

    // Pass Firebase configuration to JavaScript
    wp_localize_script('wishlist-script', 'wishlist_vars', array(
        'firebase_config' => array(
            // Your Firebase configuration here
            'apiKey' => 'your_api_key',
            'authDomain' => 'your_auth_domain',
            'databaseURL' => 'your_database_url',
            'projectId' => 'your_project_id',
            'storageBucket' => 'your_storage_bucket',
            'messagingSenderId' => 'your_messaging_sender_id',
            'appId' => 'your_app_id'
        )
    ));
}
add_action('wp_enqueue_scripts', 'wishlist_enqueue_scripts');

// Add "Add to Wishlist" button on product page
function add_to_wishlist_button() {
    global $product;
    if (is_product()) {
        echo '<button class="single_add_to_wishlist_button" data-product-id="' . $product->get_id() . '">Add to Wishlist</button>';
    }
}
add_action('woocommerce_after_add_to_cart_button', 'add_to_wishlist_button');

?>
