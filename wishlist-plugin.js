import { initializeApp } from "firebase/app";    
    jQuery(document).ready(function($) {
    // Get the product ID from the page (you may need to modify this based on your theme structure)
    var productId = $('.product').data('product-id');

    // Add to wishlist button click event handler
    $('.add-to-wishlist').on('click', function(e) {
        e.preventDefault();

        // Send data to Firebase
        var firebaseConfig = {
            apiKey: 'AIzaSyCrNsSDB7wUlBUbHBfVkc2-YlkGeF0UAB8',
            authDomain: 'page-builder1.firebaseapp.com',
            // databaseURL: 'YOUR_DATABASE_URL',
            projectId: "page-builder1",
            storageBucket: "page-builder1.appspot.com",
            messagingSenderId: "9136430826",
            appId: "1:9136430826:web:7acaaa1f01eee933238193"
            // Add other Firebase config options
        };
        firebase.initializeApp(firebaseConfig);
        // const app = initializeApp(firebaseConfig);

        var wishlistRef = firebase.database().ref('wishlist');
        wishlistRef.push().set({
            product: productId,
            timestamp: Date.now()
        });

        alert('Product added to wishlist.');
    });
});
