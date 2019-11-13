<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bercometal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header">
    <div class="container-fluid">
        <div id="logo">
        <h1>
           <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
              <?php the_custom_logo(); ?>
          <?php else : ?> 
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" width="200" height="auto" /></a></h1>
          <?php endif; ?>                  
        </h1>
      </div>
	  <?php get_template_part('template-parts/content', 'header-nav'); ?>      
    </div>
  </header><!-- #header -->
