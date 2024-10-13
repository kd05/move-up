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
<nav class="nav-bar">
	<div class="container">
		<input type="checkbox" id="drop-down-cbox"/>
		<label for="drop-down-cbox">
			<span></span>
			<span></span>
			<span></span>
		</label>

		<div class="site-logo">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo.svg" /></a>
        </div>

		<!-- <ul class="main-nav small-caps">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul> -->
        <?php
            $args = array(
                'container' => false,
                'theme_location' => 'main-nav',
            );
            wp_nav_menu( $args );
            ?>
		
	</div>
</nav>


<!--Header End-->

<!--Wrapper Start-->
<div class="wrapper">