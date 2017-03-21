<?php 
 add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

function enqueue_image_map_pro_assets() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('image-map-pro-frontend-squares-css');
    wp_enqueue_style('image-map-pro-frontend-wordpress-css');
    wp_enqueue_script('image-map-pro-frontend-wordpress-js');
    wp_enqueue_script('image-map-pro-frontend-squares-js-renderer');
    wp_enqueue_script('image-map-pro-squares-elements-js');
}

add_action( 'wp_enqueue_scripts', 'enqueue_image_map_pro_assets' );
