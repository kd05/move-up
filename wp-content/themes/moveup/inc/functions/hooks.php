<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


//Meta Title
add_theme_support( 'title-tag' );


/************************************************************
* Hide Admin Bar Front Side
*************************************************************/
add_filter('show_admin_bar', '__return_false');




/************************************************************
 * Disable Auto Update
 *************************************************************/
add_filter( 'auto_update_plugin', '__return_false' );



/************************************************************
 * Post Thumbnails
 *************************************************************/
add_theme_support( 'post-thumbnails' );




/************************************************************
 * Add custom image sizes
 *************************************************************/
function custom_image_sizes() {
    // Add custom image sizes with new names
    add_image_size('custom-495', 495, 400, true); // 495 x 400 cropped
    add_image_size('custom-390-220', 390, 220, true); // 390 x 220 cropped
    add_image_size('custom-390-275', 390, 275, true); // 390 x 275 cropped
    add_image_size('custom-390-361', 390, 361, true); // 390 x 361 cropped
}
add_action('after_setup_theme', 'custom_image_sizes');

