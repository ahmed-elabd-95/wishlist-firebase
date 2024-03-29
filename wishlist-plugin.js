// Firebase configuration
var firebaseConfig = wishlist_vars.firebase_config;

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Function to add product to wishlist
function addToWishlist(productId) {
    // Firebase integration code to add product to wishlist
     firebase.database().ref('wishlist/' + userId + '/' + productId).set(true);
}

// Document ready function
jQuery(document).ready(function($) {
    // Add to Wishlist button click event
    $('.single_add_to_wishlist_button').on('click', function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        addToWishlist(productId);
    });
});
