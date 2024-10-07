<?php
/*
 * Template Name: Get Involved Template
 * description: Get Involved Template
 */

get_header();

?>



    <?php
//        Top Banner Image
        top_image_pages_html();
    ?>


    <?php $box_links = get_field('box_links'); ?>
    <!--Future Today Section Start-->
    <section class="bg-white">
        <div class="container">
            <div class="purple-content-box involved-box">

            <?php foreach ($box_links as $box_link) {
                $box_link_title = $box_link['title'];
                $box_link_url = $box_link['link'];
                ?>
                <div class="card text-black text-center" data-aos="fade-up">
                    <h2><?php echo $box_link_title; ?></h2>
                    <a href="<?php echo $box_link_url; ?>" class="btn">LEARN MORE</a>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!--Future Today Section End-->



<?php get_footer(); ?>