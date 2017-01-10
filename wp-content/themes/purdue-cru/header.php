<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package purdue-cru
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'purdue-cru' ); ?></a>

  <?php if(is_front_page()): ?>
    <header id="masthead" class="front site-header" role="banner">
  <?php else: ?>
    <header id="masthead" class="site-header" role="banner">
  <?php endif; ?>
    <div class="header-wrapper">
      <div class="site-branding">
        <a href="http://www.purduecru.com/">
          <?php
            if(is_front_page()): ?>
            <img src="http://www.purduecru.com/wp-content/uploads/2017/01/logo_white.png" class="logo">
          <?php
            else: ?>
            <img src="http://www.purduecru.com/wp-content/uploads/2017/01/logo_dark.png" class="logo">
          <?php endif; ?>
        </a>
      </div><!-- .site-branding -->
        <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
      </nav><!-- #site-navigation -->
    </div><!--header-wrapper-->
  </header><!-- #masthead -->

