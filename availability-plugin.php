<?php
/*
Plugin Name: Availability Plugin
Description: Displays product availability on product pages.
*/

function display_availability() {
    global $product;
    if (!$product->is_in_stock()) {
        echo '<p>Out of Stock</p>';
    } else {
        echo '<p>In Stock</p>';
    }
}
add_action( 'woocommerce_single_product_summary', 'display_availability', 20 );
?>
