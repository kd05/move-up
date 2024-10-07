<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>



</div>
<!--Wrapper End-->

<!--Footer Start-->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-block">
                <div class="footer-logo">
                    <a href=""><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo.svg" /></a>
                </div>
                <div class="footer-menu">
<!--                    <ul class="menu">-->
<!--                        <li><a href="">Students</a></li>-->
<!--                        <li><a href="">Adults</a></li>-->
<!--                        <li><a href="">Get Involved</a></li>-->
<!--                        <li><a href="">About</a></li>-->
<!--                        <li><a href="">Bulletin</a></li>-->
<!--                        <li><a href="">Careers</a></li>-->
<!--                    </ul>-->

                    <?php
                    $args = array(
                        'container' => false,
                        'theme_location' => 'footer-nav',
                    );
                    wp_nav_menu( $args );
                    ?>

                    <ul class="social-media">
                        <li><a href=""><img src="<?php echo get_template_directory_uri() ;?>/assets/images/instagram.svg" /></a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri() ;?>/assets/images/facebook.svg" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        Copyright 2024
    </div>
</footer>
<!--Footer End-->

<?php wp_footer(); ?>

</body>
</html>
