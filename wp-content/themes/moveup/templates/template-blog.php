<?php
/*
 * Template Name: Bulletin/Blog Template
 * description: Bulletin/Blog Template
 */

get_header();

$posts_per_page = 12;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'paged' => $paged
);
$query = new WP_Query($args);
?>

<!--Banner Section Start-->
<div class="inner-bg inner-bg-small"
     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/moveup-gradient-header_2560x1300.jpg)">
    <div class="container">
        <div class="text-white inner-banner-caption text-center" data-aos="fade-up">
            <h1>Bulletin</h1>
        </div>
    </div>
</div>
<!--Banner Section End-->

<!--News Section Start-->
<section class="bg-white">
    <div class="container" data-aos="fade-up">
        <div class="news-block mt-0">

            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post();
                    // Call the reusable function with the current post ID
                    single_article_card(get_the_ID());
                endwhile; ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        </div>

        <!-- Pagination Block -->
        <div class="pagination-block">
            <?php
            $total_pages = $query->max_num_pages;
            if ($total_pages > 1) {
                echo paginate_links(array(
                    'current' => max(1, get_query_var('paged')),
                    'total' => $total_pages,
                    'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/images/pagination-left.svg" />',
                    'next_text' => '<img src="' . get_template_directory_uri() . '/assets/images/pagination-right.svg" />',
                ));
            }
            ?>
        </div>

    </div>
</section>
<!--News Section End-->

<?php get_footer(); ?>
