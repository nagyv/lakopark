<?php 
 add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

function enqueue_image_map_pro_assets() {
    wp_register_style('image-map-pro-frontend-squares-css', WP_PLUGIN_DIR . '/image-map-pro-wordpress/css/squares.css', false, '3.0.24', false);
    wp_register_style('image-map-pro-frontend-wordpress-css', WP_PLUGIN_DIR . '/image-map-pro-wordpress/css/wordpress.css', false, '3.0.24', false);
    wp_register_script('image-map-pro-frontend-wordpress-js', WP_PLUGIN_DIR . '/image-map-pro-wordpress/js/image-map-pro.js', array('jquery'), '3.0.24', true);
    wp_register_script('image-map-pro-frontend-squares-js-renderer', WP_PLUGIN_DIR . '/image-map-pro-wordpress/js/squares-renderer.js', array('jquery'), '3.0.24', true);
    wp_register_script('image-map-pro-frontend-elements-js', WP_PLUGIN_DIR . '/image-map-pro-wordpress/js/squares-elements-wp.js', false, '3.0.24', true);

    wp_enqueue_script('jquery');
    wp_enqueue_style('image-map-pro-frontend-squares-css');
    wp_enqueue_style('image-map-pro-frontend-wordpress-css');
    wp_enqueue_script('image-map-pro-frontend-wordpress-js');
    wp_enqueue_script('image-map-pro-frontend-squares-js-renderer');
    wp_enqueue_script('image-map-pro-squares-elements-js');
}

add_action( 'wp_enqueue_scripts', 'enqueue_image_map_pro_assets' );
