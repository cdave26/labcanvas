<?php


/**
 * Override theme default specification for product # per row
 */
function loop_columns() {
    return 4; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);

// Change the Number of WooCommerce Products Displayed Per Page
add_filter( 'loop_shop_per_page', 'lw_loop_shop_per_page', 30 );

function lw_loop_shop_per_page( $products ) {
    $products = 12;
    return $products;
}

//remove default sorting drop-down from WooCommerce
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );



