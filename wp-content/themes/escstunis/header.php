<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package escstunis
 * @since escstunis 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'escstunis' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

 <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/stylesheets/app.css"> 
	<script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascripts/modernizr.foundation.js"></script>



<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>

	<script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascripts/jquery.js"></script>
  <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascripts/app.js"></script>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header row" role="banner">
		<hgroup>
			<?php dynamic_sidebar('Social_Widget'); ?>
			<a  class="logo left" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo_escstunis.png"/></a>
			<nav role="navigation" class="site-navigation main-navigation right">
			<h1 class="assistive-text"><?php _e( 'Menu', 'escstunis' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'escstunis' ); ?>"><?php _e( 'Skip to content', 'escstunis' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
		</hgroup>

	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main row">



