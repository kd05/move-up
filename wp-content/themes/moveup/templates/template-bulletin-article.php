<?php
/*
 * Template Name: Bulletin Article Template
 * description: Bulletin Article Template
 */

get_header();

?>



<!--Banner Section Start-->
    <div class="bg-gray">
        <div class="container">
            <div class="text-blue inner-banner-caption bulletin-article-block" data-aos="fade-up">
                <h1>Lorem ipsum dolor sit amet, consecetetur <br> adipiscing elit, sed do eiusmod.</h1>
                <div class="article-bio-block">
                    <span>Written by: Jane Smith </span>
                    <span>August 20, 2024</span>
                </div>
            </div>
        </div>
    </div>
<!--Banner Section End-->


<!--Article Image Section End-->
<div class="article-image-panel text-blue">
    <div class="image-block" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri() ;?>/assets/images/article-img.png" />
    </div>
    <div class="container" data-aos="fade-up">
        <div class="article-content">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="text-center">
        <a href="" class="btn">Back to bulletin</a>
        </div>
    </div>
</div>

<!--Article Image Section End-->

<ul class="social-media-panel">
    <li><a href=""><img src="<?php echo get_template_directory_uri() ;?>/assets/images/envelope-icon.svg" /></a></li>
    <li><a href=""><img src="<?php echo get_template_directory_uri() ;?>/assets/images/facebook-icon.svg" /></a></li>
    <li><a href=""><img src="<?php echo get_template_directory_uri() ;?>/assets/images/instagram-icon.svg" /></a></li>
    <li><a href=""><img src="<?php echo get_template_directory_uri() ;?>/assets/images/linkedin-icon.svg" /></a></li>
    <li><a href=""><img src="<?php echo get_template_directory_uri() ;?>/assets/images/twitter-icon.svg" /></a></li>
</ul>

    <!--News Section Start-->
    <section class="bg-white">
        <div class="container" data-aos="fade-up">
            <h1 class="text-blue">Related</h1>
            <div class="news-block">
                <div class="card">
                    <div class="card-img-block">
                        <!-- <span>Filter Tag</span> -->
                        <img src="<?php echo get_template_directory_uri() ;?>/assets/images/news-image.jpg" />
                    </div>
                    <div class="card-content bg-gray">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h4>
                        <a href="" class="btn">
                            <img src="<?php echo get_template_directory_uri() ;?>/assets/images/arrow.svg" />
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-block">
                        <!-- <span>Filter Tag</span> -->
                        <img class="hover-img" src="<?php echo get_template_directory_uri() ;?>/assets/images/news-hover.png" />
                    </div>
                    <div class="card-content bg-gray">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h4>
                        <a href="" class="btn">
                            <img src="<?php echo get_template_directory_uri() ;?>/assets/images/arrow.svg" />
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img-block">
                        <!-- <span>Filter Tag</span> -->
                        <img src="<?php echo get_template_directory_uri() ;?>/assets/images/news-image.jpg" />
                    </div>
                    <div class="card-content bg-gray">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h4>
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