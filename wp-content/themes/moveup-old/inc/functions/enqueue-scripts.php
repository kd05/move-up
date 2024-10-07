<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


function global_scripts()
{

    //    Font Awesome
//    wp_enqueue_style('fontawesome-styles', get_template_directory_uri() . '/assets/fonts/font-awesome-6/all.min.css', array(), false, 'all');

    // Preconnect to Google Fonts
    wp_enqueue_style('google-fonts-preconnect', 'https://fonts.googleapis.com', array(), null);
    wp_enqueue_style('google-fonts-preconnect-crossorigin', 'https://fonts.gstatic.com', array(), null);

    // Enqueue PT Sans
    wp_enqueue_style('google-font-pt-sans', 'https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), null);

    // Enqueue Barlow Condensed
    wp_enqueue_style('google-font-barlow-condensed', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);




    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/lib/slick/slick.css' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/lib/slick/slick-theme.css' );

    wp_enqueue_script('slick-rotator', get_template_directory_uri() . '/assets/lib/slick/slick.js', array('jquery'), false, true);


    //    AOS Animation
    wp_enqueue_style( 'aos-style', get_template_directory_uri() . '/assets/lib/aos/aos.css' );
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/lib/aos/aos.js', array('jquery'), false, true);



    //    Main Css
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/master.css', array(), false, 'all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);



    $js_urls = array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'theme_url' => get_template_directory_uri(),
        'image_url' => get_template_directory_uri()."/assets/images/"
    );
    wp_register_script('local_variables',"");
    wp_localize_script('local_variables', 'website_urls', $js_urls );
    wp_enqueue_script('local_variables');

}
add_action('wp_enqueue_scripts', 'global_scripts');