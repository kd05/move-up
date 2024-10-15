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








function ewc_form_shortcode( $atts, $content = null ) {
    $a =  shortcode_atts( array(
    ), $atts );
    ob_start();
    ?>

    <!--Form Section Start-->
    <section class="form-block">
        <div class="container">
            <form class="form bg-white">
                <h1>MoveUp Today</h1>
                <p>Complete this form to get started. </p>
                <div class="form-panel">
                    <div class="form-control">
                        <label for="">Name *</label>
                        <input type="text" placeholder="Type name" />
                    </div>
                    <div class="form-control">
                        <label for="">EMail *</label>
                        <input type="text" placeholder="youremail@email.com" />
                    </div>
                    <div class="form-control">
                        <label for="">Phone *</label>
                        <input type="text" placeholder="Type number" />
                    </div>
                    <div class="form-control">
                        <label for="">Education</label>
                        <div class="form-select">
                            <select class="">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">Location</label>
                        <div class="form-select">
                            <select class="">
                                <option value="volvo">Select your county from drop down</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="">What can we help you with</label>
                        <span>Check all that apply</span>
                        <div class="custom-checkbox">
                            <label class="checkbox" for="checkbox">
                                <input type="checkbox" name="color" checked value="checkbox" id="checkbox">
                                <span class="checkmark"></span>
                                Lorem Ipsum
                            </label>
                            <label class="checkbox" for="checkbox1">
                                <input type="checkbox" name="color" checked value="checkbox1" id="checkbox1">
                                <span class="checkmark"></span>
                                Lorem Ipsum
                            </label>
                            <label class="checkbox" for="checkbox2">
                                <input type="checkbox" name="color" checked value="checkbox2" id="checkbox2">
                                <span class="checkmark"></span>
                                Lorem Ipsum
                            </label>
                            <label class="checkbox" for="checkbox3">
                                <input type="checkbox" name="color" checked value="checkbox3" id="checkbox3">
                                <span class="checkmark"></span>
                                Lorem Ipsum
                            </label>
                            <label class="checkbox" for="checkbox4">
                                <input type="checkbox" name="color" checked value="checkbox4" id="checkbox4">
                                <span class="checkmark"></span>
                                Lorem Ipsum
                            </label>
                            <label class="checkbox" for="checkbox5">
                                <input type="checkbox" name="color" checked value="checkbox5" id="checkbox5">
                                <span class="checkmark"></span>
                                Lorem Ipsum
                            </label>
                        </div>

                    </div>
                </div>
                <button type="button" class="btn">Submit</button>
            </form>
        </div>
    </section>
    <!--Form Section End-->


    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode( 'ewc_form', 'ewc_form_shortcode' );