<?php
/*
 * Template Name: Home Template
 * description: Home Template
 */

get_header();

?>


    <!--Banner Section Start-->
    <div class="banner">
        <img src="<?php echo get_template_directory_uri() ;?>/assets/images/banner.jpg" />
    </div>
    <!--Banner Section End-->

    <!--Purpal Section Start-->
    <section class="bg-purpal">
        <div class="container"  data-aos="fade-up">
            <p class="fs-24 text-white paragraph-block">
                Trying to figure out where you fit in the modern workplace? That’s where we can help. At MoveUp, we’ll provide free, personalized career assessment and one-on-one coaching with an expert. We’ll uncover your strengths, find your hope, your purpose, and explore how they align with available opportunities in today’s job market. Don’t just wait for an opportunity to come your way; MoveUp!
            </p>
        </div>
    </section>
    <!--Purpal Section End-->

    <!--Purpal Section Start-->
    <section class="bg-gray">
        <div class="container"  data-aos="fade-up">
            <div class="programBox">
                <div class="title-box">
                    <h1 class="text-blue">Program Eligibility</h1>
                    <p class="fs-20 text-black">
                        Individuals ready to take the first step in their career who are US citizens and reside in the following counties are encouraged to connect with our team.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/program-image.jpg" />

            </div>
    </section>
    <!--Purpal Section End-->

    <!--Students Adults Section Start-->
    <section class="bg-white">
        <div class="container">
            <div class="studentes-block-box">
                <div class="card text-black text-center" data-aos="fade-right">
                    <h2>Students</h2>
                    <p class="fs-16">Whether you are in high school or you’ve graduated, we can help you understand your strengths and the value you bring to the workforce.</p>
                    <a href="" class="btn">LEARN MORE</a>
                </div>
                <div class="card text-black text-center" data-aos="fade-left">
                    <h2>Adults</h2>
                    <p class="fs-16">Whether you are in high school or you’ve graduated, we can help you understand your strengths and the value you bring to the workforce.</p>
                    <a href="" class="btn">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>
    <!--Students Adults Section End-->


    <!--Testimonials Section Start-->
    <section class="testimonials-block" style="background-image: url(<?php echo get_template_directory_uri() ;?>/assets/images/testimonials-bg.jpg)">
        <div class="container" data-aos="fade-up">
            <h1>Career Stories</h1>
            <div class="regular slider">
                <div>

                    <p>“Lorem ipsum dolor sit amet, consectet adipiscing elit, sed eiusmod tempor incididunt magna aliqua. Ut enim ad laboris nisi ut aliquip ex ea commodo consequat.”</p>
                    <div class="small-title">— Lorem ipsum</div>
                </div>
                <div>
                    <p>“Lorem ipsum dolor sit amet, consectet adipiscing elit, sed eiusmod tempor incididunt magna aliqua. Ut enim ad laboris nisi ut aliquip ex ea commodo consequat.”</p>
                    <div class="small-title">— Lorem ipsum</div>
                </div>
                <div>
                    <p>“Lorem ipsum dolor sit amet, consectet adipiscing elit, sed eiusmod tempor incididunt magna aliqua. Ut enim ad laboris nisi ut aliquip ex ea commodo consequat.”</p>
                    <div class="small-title">— Lorem ipsum</div>
                </div>
                <div>
                    <p>“Lorem ipsum dolor sit amet, consectet adipiscing elit, sed eiusmod tempor incididunt magna aliqua. Ut enim ad laboris nisi ut aliquip ex ea commodo consequat.”</p>
                    <div class="small-title">— Lorem ipsum</div>
                </div>
                <div>
                    <p>“Lorem ipsum dolor sit amet, consectet adipiscing elit, sed eiusmod tempor incididunt magna aliqua. Ut enim ad laboris nisi ut aliquip ex ea commodo consequat.”</p>
                    <div class="small-title">— Lorem ipsum</div>
                </div>
                <div>
                    <p>“Lorem ipsum dolor sit amet, consectet adipiscing elit, sed eiusmod tempor incididunt magna aliqua. Ut enim ad laboris nisi ut aliquip ex ea commodo consequat.”</p>
                    <div class="small-title">— Lorem ipsum</div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials Section End-->


    <!--News Section Start-->
    <section class="bg-white">
        <div class="container" data-aos="fade-up">
            <h1 class="text-blue">MoveUp News</h1>
            <div class="news-block">
                <div class="card">
                    <div class="card-img-block">
                        <span>Filter Tag</span>
                        <img src="<?php echo get_template_directory_uri() ;?>/assets/images/news-image.jpg" />
                    </div>
                    <div class="card-content bg-gray">
                        <h4 class="text-blue mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h4>
                        <a href="" class="btn">
                            <img src="<?php echo get_template_directory_uri() ;?>/assets/images/arrow.svg" />
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-block">
                        <span>Filter Tag</span>
                        <img class="hover-img" src="<?php echo get_template_directory_uri() ;?>/assets/images/news-hover.png" />
                    </div>
                    <div class="card-content bg-gray">
                        <h4 class="text-blue mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h4>
                        <a href="" class="btn">
                            <img src="<?php echo get_template_directory_uri() ;?>/assets/images/arrow.svg" />
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-block">
                        <span>Filter Tag</span>
                        <img src="<?php echo get_template_directory_uri() ;?>/assets/images/news-image.jpg" />
                    </div>
                    <div class="card-content bg-gray">
                        <h4 class="text-blue mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h4>
                        <a href="" class="btn">
                            <img src="<?php echo get_template_directory_uri() ;?>/assets/images/arrow.svg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Section End-->



<?php get_footer(); ?>