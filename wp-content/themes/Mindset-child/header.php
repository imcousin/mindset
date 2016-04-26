<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Mindset
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mindset' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
            <div class="container">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		        <?php /*?><p class="site-description"><?php bloginfo( 'description' ); ?></p><?php */?>

                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        
                          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'context' ); ?></button>
                          <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mindset' ); ?></a>
                         
                              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    
                    </nav><!-- #site-navigation -->
                
                </div><!-- .site-branding -->
            </div><!-- container --> 
	</header><!-- #masthead -->

	<div id="content" class="site-content">
