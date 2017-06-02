<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seiko
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seiko' ); ?></a>

	<header id="masthead" class="site-header col-full" role="banner">
		
      		<!--<div id="header-nav">-->
			

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<!--<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>-->
					      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo-usa.gif" alt="Seiko Logo" class="logo"/></a>

				<?php else : ?>
					<!--<p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>-->
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-usa.gif" alt="Logo" class="logo"/></a>	
				<?php
				endif;?>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'seiko' ); ?></button>
				<?php get_search_form(); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>

			</nav><!-- #site-navigation -->
		<!--</div><.site-branding-->
     
	</header><!-- #masthead -->

	<div id="content" class="site-content">
