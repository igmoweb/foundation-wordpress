<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header row" role="navigation">
		<nav id="site-navigation" data-topbar class="top-bar" role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</li>
			</ul>
		

			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>

			<section class="top-bar-section">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</section>
			
		</nav>
		<!--nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', '_s' ); ?></button>
			
		</nav--><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content row">
