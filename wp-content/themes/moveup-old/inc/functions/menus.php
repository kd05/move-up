<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}



// Register menus
register_nav_menus(
    array(
        'main-nav'  => __('The Main Menu', 'moveup'),
        'footer-nav'  => __('Footer Menu', 'moveup'),
    )
);

