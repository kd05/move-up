<?php
/*
 * Template Name: Adults Template
 * description: Adults Template
 */

get_header();

?>


    <?php
    //        Top Banner Image
    top_image_pages_html();
    ?>

    <!--Get Free Career Today Section Start-->
    <section class="image-content-section" data-aos="fade-up">
        <div class="img-bg" style="background-image: url(<?php echo get_template_directory_uri() ;?>/assets/images/adults-image.jpg)"> </div>
        <div class="image-content-block">
                <h1>Get a Free Career <br /> Assessment and Move Up</h1>
                <p>It can be tough to find a job out there, especially if you’re unsure of what it is you want to do. That’s where we come in. At MoveUp, we’ll provide free, personalized career assessment and one-on-one coaching with an expert. All to uncover your strengths and explore how they align with available opportunities in today’s job market. Don’t just sit there hoping something good comes along; Move Up!</p>
            </div>
    </section>
    <!--Get Free Career Today Section End-->



    <!--Future Today Section Start-->
        <div class="container">
            <div class="purple-content-box" data-aos="fade-up">
                <div class="card text-black text-center w-100">
                    <h1>Start Your Future Today</h1>
                    <p>Not sure what’s next for you? No worries. We will figure it out together. You’ll start by taking a career assessment then have a one-on-one session with a career coach. In the end, you will understand your strengths and how they map into the modern world of work.</p>
                    <a href="" class="btn">Get started now</a>
                </div>
            </div>
        </div>
    <!--Future Today Section End-->




<?php get_footer(); ?>