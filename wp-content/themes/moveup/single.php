<?php
get_header();

// Start the loop to display the current post content
if (have_posts()) :
    while (have_posts()) :
        the_post();

        // Variables to store post details
        $article_id = get_the_ID();
        $article_title = get_the_title();
//        $article_author = get_the_author();
//        $article_date = get_the_date();

        $article_author = get_field('article_author') ?
                    get_field('article_author') : 'N/A';
        $article_date = get_field('article_date');
        $article_content = wpautop(get_the_content());
//        $article_permalink = get_permalink(get_option('page_for_posts'));
        $article_permalink = site_url().'/bulletin';
        ?>

        <!--Banner Section Start-->
        <div class="bg-gray">
            <div class="container">
                <div class="text-blue inner-banner-caption bulletin-article-block" data-aos="fade-up">
                    <h1><?php echo $article_title; ?></h1>
                    <div class="article-bio-block">
                        <span>Written by: <?php echo $article_author; ?></span>
                        <span><?php echo $article_date; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!--Banner Section End-->

        <!--Article Image Section Start-->
        <div class="article-image-panel text-blue">


            <?php if (has_post_thumbnail($article_id)) :
                $post_thumbnail_url = get_the_post_thumbnail_url($article_id, 'full');
                ?>
                <div class="image-block" data-aos="fade-up">
                    <div class="container">
                        <div class="image-block-image" style="background-image: url('<?php echo $post_thumbnail_url; ?>');"></div>
                    </div>
                </div>
            <?php endif; ?>




            <div class="container" data-aos="fade-up">
                <div class="article-content">
                    <?php echo $article_content; ?>
                </div>
                <div class="text-center">
                    <a href="<?php echo $article_permalink; ?>" class="btn">Back to bulletin</a>
                </div>
            </div>
        </div>
        <!--Article Image Section End-->


        <!--Social Media Section Start-->
        <ul class="social-media-panel">
            <!-- Email sharing -->
            <li><a href="mailto:?subject=Check out this article!&body=<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope-icon.svg" alt="Email" /></a></li>

            <!-- Facebook sharing -->
            <li><a href="https://facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.svg" alt="Facebook" /></a></li>

            <!-- Instagram (Note: Instagram doesn't support web-based sharing like Facebook/Twitter) -->
            <li><a href="https://instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-icon.svg" alt="Instagram" /></a></li>

            <!-- LinkedIn sharing -->
            <li><a href="https://linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-icon.svg" alt="LinkedIn" /></a></li>

            <!-- Twitter sharing -->
            <li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=Check out this article!" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.svg" alt="Twitter" /></a></li>
        </ul>

        <!--Social Media Section End-->


        <!--Related Posts Section-->
        <section class="bg-white">
            <div class="container" data-aos="fade-up">
                <h1 class="text-blue">Related</h1>
                <div class="news-block">
                    <?php
                    // Query for related posts
                    $related_posts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post__not_in' => array($article_id),
                        'category__in' => wp_get_post_categories($article_id)
                    ));

                    if ($related_posts->have_posts()) :
                        while ($related_posts->have_posts()) : $related_posts->the_post();
                            single_article_card(get_the_ID());
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No related posts found.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </section>

    <?php
    endwhile;
endif;

get_footer();
