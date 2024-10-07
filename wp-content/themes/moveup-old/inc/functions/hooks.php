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


