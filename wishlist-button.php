<?php
// Assign Wishlist Page template to a specific page
function wishlist_page_template($template) {
    if (is_page('wishlist')) {
        $template = plugin_dir_path(__FILE__) . 'wishlist-page.php';
    }
    return $template;
}
add_filter('template_include', 'wishlist_page_template');