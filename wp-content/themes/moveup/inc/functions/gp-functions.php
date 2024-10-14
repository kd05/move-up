<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}



function get_post_content($post_id){
    $p = get_post($post_id);
    return apply_filters('the_content', $p->post_content);
}



function get_custom_posts($post_type = 'post', $posts_per_page = -1){

    $args = array(
        'post_type'  => $post_type,
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'fields'          => 'ids',
    );
    return get_posts( $args );
}



function get_posts_by_meta($post_type, $meta_key, $meta_value, $posts_per_page = -1){

    $args = array(
        'post_type'  => $post_type,
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'fields'          => 'ids',
        'meta_query' => array(
            array(
                'key'   => $meta_key,
                'value' => $meta_value,
            )
        )
    );

    return get_posts( $args );
}


function get_default_image($type = 'post_thumbnail'){
    if($type == 'post_thumbnail'){
        return get_template_directory_uri().'/assets/images/post-default-thumb.png';
    } elseif ($type == 'inner-page-banner'){
        return get_template_directory_uri() . '/assets/images/moveup-gradient-header_2560x1300.jpg';
    }

    return get_template_directory_uri().'/assets/images/post-default-thumb.png';
}


function top_image_pages_html(){
    // Define the featured image or fallback image
    $banner_image = has_post_thumbnail() ?
        get_the_post_thumbnail_url(get_the_ID(), 'full') :
        get_default_image('inner-page-banner');

    $top_image_content = get_field('top_image_content');
    $is_purple_container = get_field('is_purple_container');

    $banner_class = $is_purple_container ? "text-blue inner-banner-caption inner-blue-text-banner"
                : "text-white inner-banner-caption";

    $banner_image = $is_purple_container ?  "" : $banner_image;

    ?>
    <!--Banner Section Start-->
    <div class="inner-bg" style="background-image: url(<?php echo esc_url($banner_image); ?>)">
        <div class="container">

            <div class="<?php echo $banner_class; ?>" data-aos="fade-up">
                <?php echo $top_image_content; ?>
            </div>
        </div>
    </div>
    <?php
}




/************************************************************
 * Below functions are not used at the moment
 *************************************************************/

function get_featured_image_url($post_id) {
    if ( has_post_thumbnail($post_id) ) {
        return get_the_post_thumbnail_url($post_id, 'full');
    } else {
        return get_default_image();
    }
}










function get_investment_tiles_html($investment_id){
    $investment_name = get_the_title($investment_id);
    $investment_link = get_the_permalink($investment_id);
    $investment_type = get_field('_investment_type', $investment_id);
    $investment_location = get_field('_location', $investment_id);
    $investment_thumbnail = get_the_post_thumbnail_url($investment_id, 'large');
    ?>

    <a href="<?php echo esc_url($investment_link); ?>?view=expand&redirect=tiles" class="investment-single" data-aos="fade-up">
        <div class="is-inner" style="background-image: url('<?php echo esc_url($investment_thumbnail); ?>');">

        </div>
        <div class="is-info">
            <h4><?php echo $investment_name ?></h4>
            <h5><?php echo $investment_type; ?> | <?php echo $investment_location ?></h5>
        </div>
    </a>
    <?php
}




function get_post_content_with_para($post_content){
//    $p = get_post($post_id);
    return apply_filters('the_content', $post_content);
}




