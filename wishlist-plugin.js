    jQuery(document).ready(function($) {
    // Get the product ID from the page (you may need to modify this based on your theme structure)
    var productId = $('.product').data('product-id');

    // Add to wishlist button click event handler
    $('.add-to-wishlist').on('click', function(e) {
        e.preventDefault();

        // Send data to Firebase
        var firebaseConfig = {
            apiKey: 'YOUR_API_KEY',
            authDomain: 'YOUR_AUTH_DOMAIN',
            databaseURL: 'YOUR_DATABASE_URL',
            // Add other Firebase config options
        };
        firebase.initializeApp(firebaseConfig);

        var wishlistRef = firebase.database().ref('wishlist');
        wishlistRef.push().set({
            product: productId,
            timestamp: Date.now()
        });

        alert('Product added to wishlist.');
    });
});
