<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}



function workspace_location_postType()
{

    register_post_type('team-member',
        // let's now add all the options for this post type
        array('labels'              => array(
            'name'               => __('Team Members', 'moveup'), /* This is the Title of the Group */
            'singular_name'      => __('Team Member', 'moveup'), /* This is the individual type */
            'all_items'          => __('All Team Member', 'moveup'), /* the all items menu item */
            'add_new'            => __('Add New', 'moveup'), /* The add new menu item */
            'add_new_item'       => __('Add New Team Member', 'moveup'), /* Add New Display Title */
            'edit'               => __('Edit', 'moveup'), /* Edit Dialog */
            'edit_item'          => __('Edit Team Member', 'moveup'), /* Edit Display Title */
            'new_item'           => __('New Team Member', 'moveup'), /* New Display Title */
            'view_item'          => __('View Team Member', 'moveup'), /* View Display Title */
            'search_items'       => __('Search Team Members', 'moveup'), /* Search Custom Type Title */
            'not_found'          => __('Nothing found in the Database.', 'moveup'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash', 'moveup'), /* This displays if there is nothing in the trash */
            'parent_item_colon'  => ''
        ), /* end of arrays */
            'description'         => __('These are all the store Team Members', 'moveup'), /* Custom Type Description */
            'public'              => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'query_var'           => true,
            'menu_position'       => 60, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon'           => 'dashicons-admin-users', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) => dashicons-book */

            'supports'      => array( 'title', 'thumbnail', 'editor',  'page-attributes','revisions'),
            'rewrite'             => array('slug' => 'team-member', 'with_front' => false), /* you can specify its url slug */

            'hierarchical'        => false,

            'capability_type'     => 'post',
            /* the next one is important, it tells what's enabled in the post editor */

        ) /* end of options */
    ); /* end of register post type */


}

// adding the function to the Wordpress init
add_action('init', 'workspace_location_postType');


add_theme_support( 'post-thumbnails', array( 'team-member') );
