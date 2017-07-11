<?php
/**
 * The header for our theme
 *
 * @package anapnbs
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap-glyphicons.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- Lightbox Lokeshdhakar CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/lightbox.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'anapnbs' ); ?></a>

	<!-- Scroll to Top button -->
    <button onclick="topFunction()" id="scrolltoTop" title="Go to top">Top</button>

    <!-- NAVIGATION MENUS
    ====================================================== -->
    <nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-primary">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
        <img src="http://anapnbs.cdn3.cafe24.com/logo-brand.jpg" class="rounded-circle d-inline-block align-top" alt="anapnbs logo" width="40px" height="40px"> 
          <span class="align-middle ml-2">anapnbs clinic</span>
      </a>
      <?php
	   wp_nav_menu([
		 'theme_location'  => 'primary',
		 'container'       => 'div',
		 'container_id'    => 'navbarNavDropdown',
		 'container_class' => 'collapse navbar-collapse',
		 'menu_id'         => false,
		 'menu_class'      => 'navbar-nav ml-auto',
		 'depth'           => 2,
		 'fallback_cb'     => 'bs4navwalker::fallback',
		 'walker'          => new bs4navwalker()
	   ]);
	   ?>
    </nav>
