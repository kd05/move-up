<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                // Display the content of each post directly
                the_content();
            endwhile;
        else :
            // Display a message if no posts are found
            echo '<p>No content available.</p>';
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
