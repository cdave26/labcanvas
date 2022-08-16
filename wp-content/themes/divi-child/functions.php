<?php


function my_theme_enqueue_styles()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/assets/js/custom-javascript.js', array(), $theme_version, true);
    wp_enqueue_style('shop-style', get_stylesheet_directory_uri() . '/assets/css/woocommerce-shop/products.css', null, $theme_version);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

//includes php file in from folder
require_once( __DIR__ . '/assets/inc/woo-product-categories.php'); 
require_once( __DIR__ . '/assets/inc/change-search-string.php'); 