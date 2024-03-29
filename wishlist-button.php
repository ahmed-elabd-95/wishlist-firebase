<?php
// Add custom button to single product page
function custom_product_button() {
    global $product;

    // Ensure WooCommerce is active
    if ( ! function_exists( 'is_product' ) ) {
        return;
    }

    // Check if we're on a single product page
    if ( is_product() ) {
        echo '<a href="#" class="add-to-wishlist" data-product-id="<?php echo get_the_ID(); ?>">Add to Wishlist</a>';
    }
}
add_action( 'woocommerce_single_product_summary', 'custom_product_button' );
