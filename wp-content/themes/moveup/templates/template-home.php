<?php
/*
 * Template Name: Home Template
 * description: Home Template
 */

get_header();

?>


    <?php $hero_image = get_field('hero_image'); ?>
    <!--Banner Section Start-->
    <div class="banner">
        <img src="<?php echo $hero_image;?>" />
    </div>
    <!--Banner Section End-->


    <?php $top_content = get_field('top_content'); ?>
    <!--Purpal Section Start-->
    <section class="bg-purpal large-content-block">
        <div class="container"  data-aos="fade-up">
<!--            <p class="fs-24 text-white paragraph-block">-->
<!--                Trying to figure out where you fit in the modern workplace? That’s where we can help. At MoveUp, we’ll provide free, personalized career assessment and one-on-one coaching with an expert. We’ll uncover your strengths, find your hope, your purpose, and explore how they align with available opportunities in today’s job market. Don’t just wait for an opportunity to come your way; MoveUp!-->
<!--            </p>-->
            <?php echo $top_content; ?>
        </div>
    </section>
    <!--Purpal Section End-->




    <?php
        $program_eligibility_content = get_field('program_eligibility_content');
        $program_eligibility_Image = get_field('program_eligibility_Image');
    ?>
    <!--Purpal Section Start-->
    <section class="bg-gray">
        <div class="container"  data-aos="fade-up">
            <div class="programBox">
                <div class="title-box">
<!--                    <h1 class="text-blue">Program Eligibility</h1>-->
<!--                    <p class="fs-20 text-black">-->
<!--                        Individuals ready to take the first step in their career who are US citizens and reside in the following counties are encouraged to connect with our team.-->
<!--                    </p>-->
                    <?php echo $program_eligibility_content; ?>
                </div>
                <img src="<?php echo $program_eligibility_Image;?>" />

            </div>
    </section>
    <!--Purpal Section End-->



    <?php
    $students_adults = get_field('students_adults');
    ?>
    <!--Students Adults Section Start-->
    <section class="bg-white">
        <div class="container">
            <div class="two-box">
                <div class="purple-content-box">

                    <?php foreach ($students_adults as $index => $sa_single) {
                        $sa_title = $sa_single['title'];
                        $sa_info = $sa_single['info'];
                        $sa_button_text = $sa_single['button_text'];
                        $sa_button_link = $sa_single['button_link'];
                        ?>
                        <div class="card text-black text-center"
                            data-aos="<?php echo ($index % 2 == 0) ? 'fade-up' : 'fade-up'; ?>">
                            <h2><?php echo $sa_title; ?></h2>
                            <p><?php echo $sa_info; ?></p>
                            <a href="<?php echo $sa_button_link; ?>" class="btn"><?php echo $sa_button_text; ?></a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
    <!--Students Adults Section End-->




    <?php
    echo do_shortcode('[career_stories title="Career Stories"]');
    ?>




    <?php
    // Use the do_shortcode() function to run the 'display_blogs' shortcode
    echo do_shortcode('[display_blogs posts_per_page="5"]');
    ?>



<?php get_footer(); ?>