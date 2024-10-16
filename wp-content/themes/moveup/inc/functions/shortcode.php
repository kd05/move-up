<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}





function button_shortcode( $atts, $content = null ) {
    $a =  shortcode_atts( array(
        'text' => 'GET STARTED NOW',
        'link' => '#',
        'target' => ''
    ), $atts );
    ob_start();

    $text = $a['text'];
    $link = $a['link'];
    ?>
    <a target="<?php echo $a['target'] ?>" href="<?php echo $link; ?>" class="btn">
        <?php echo $text; ?>
    </a>
    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode( 'button', 'button_shortcode' );








function career_stories_shortcode( $atts, $content = null ) {
    $a =  shortcode_atts( array(
        'title' => 'GET STARTED NOW',
        'field' => 'career_stories'
    ), $atts );
    ob_start();
    $career_stories = get_field($a['field']);
    ?>
    <!--Testimonials Section Start-->
    <section class="testimonials-block" style="background-image: url(<?php echo get_template_directory_uri() ;?>/assets/images/moveup-gradient-testimonial_2560x1300.jpg)">
        <div class="container" data-aos="fade-up">
            <h1><?php echo $a['title']; ?></h1>
            <div class="regular slider">

                <?php foreach ($career_stories as $career_story) {
                    $cs_text = $career_story['text'];
                    $cs_name = $career_story['name'];
                    ?>
                    <div>
                        <p>“<?php echo $cs_text; ?>”</p>
                        <div class="small-title">— <?php echo $cs_name; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>




    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode( 'career_stories', 'career_stories_shortcode' );






function display_blogs_shortcode( $atts, $content = null ) {
    $a =  shortcode_atts( array(
        'title' => 'MoveUp News',
        'type' => 'featured_post',
        'posts_per_page' => 3
    ), $atts );
    ob_start();

    $title = $a['title'];
    $featured_posts = get_posts_by_meta('post', 'featured_post', '1', $a['posts_per_page']);
    ?>

    <!--News Section Start-->
    <section class="bg-white">
        <div class="container" data-aos="fade-up">
            <h1><?php  echo $title; ?></h1>
            <div class="news-block">
                <?php  if ($featured_posts) {
                    foreach ($featured_posts as $featured_post_id) {
                        // Call the reusable function
                        single_article_card($featured_post_id);
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--News Section End-->


    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode( 'display_blogs', 'display_blogs_shortcode' );






function display_accordions_shortcode( $atts, $content = null ) {
    $a =  shortcode_atts( array(
        'title' => 'MoveUp News',
    ), $atts );
    ob_start();

    $accordions = get_field('accordions');
//    echo "<pre>"; print_r($teams); echo "</pre>";
    if($accordions){
        ?>
        <div class="accordion-section">
            <div class="accordion-section__inner">
                <!--  <h1>Title Accordion</h1>-->
                <?php
                foreach ($accordions as $team){
                    $accordion_title = $team['title'];
                    $accordion_info = $team['info'];
                    ?>
                    <div class="common-accordion-container acc-closed" data-aos="fade-up">
                        <div class="accordion-header">
                            <div class="acc-title">
                                <h4><?php echo $accordion_title; ?></h4>
                            </div>
                            <div class="acc-arrow">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/pagination-right.svg" />
                            </div>
                        </div>
                        <div class="accordion-sub">
                            <?php echo $accordion_info; ?>
                        </div>
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    <?php  }
    $output = ob_get_clean();
    return $output;
}
add_shortcode( 'display_accordions', 'display_accordions_shortcode' );


