<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!--Header Start-->
<header>
    <div class="container">
        <div class="navbar">
            <div class="brand-name">
                <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo.svg" /></a>
            </div>
<!--            <ul>-->
<!--                <li><a href="#">Students</a></li>-->
<!--                <li><a href="adults.php">Adults</a></li>-->
<!--                <li><a href="get-involved.php">Get Involved</a></li>-->
<!--                <li><a href="about.php">About</a></li>-->
<!--                <li><a href="bulletin.php">Bulletin</a></li>-->
<!--            </ul>-->

            <?php
            $args = array(
                'container' => false,
                'theme_location' => 'main-nav',
            );
            wp_nav_menu( $args );
            ?>

        </div>
    </div>
</header>
<!--Header End-->

<!--Wrapper Start-->
<div class="wrapper">