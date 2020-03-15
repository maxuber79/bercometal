<?php
/**
     * Plantilla para mostrar el encabezadoheader
     *
     * Muestra todo el elemento principal y todo el contenido hasta el div #main
     *
     * @package WordPress
     * @subpackage Theme SegChile
     * @since Theme SegChile 1.0
 **/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta chaeset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    

    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

    <!-- imprimir los elementos en el <head>; then last, add: -->
    <?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>

<!--==========================
    Header
============================-->
<header id="header">
    <div class="container-fluid">

      <!-- <div id="logo" class="pull-left"> -->
        <div id="logo">
            <h1>
            <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?> 
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" width="200" height="auto" /></a></h1>
            <?php endif; ?>
                    
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>
      <?php $defaults = array(
          'theme_location' => 'menu_interior',
          'menu'              => '', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
          'menu_class'        => 'nav-menu', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
          'menu_id'           => '', // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
          'container'         => 'nav', // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
          'container_class'   => 'menu-{menu slug}-container', // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
          'container_id'      => 'nav-menu-container', // (string) The ID that is applied to the container.
          'fallback_cb'       => 'wp_page_menu', // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
          'before'            => '', // (string) Text before the link markup.
          'after'             => '', // (string) Text after the link markup.
          'link_before'       => '', // (string) Text before the link text.
          'link_after'        => '', // (string) Text after the link text.
          'echo'              => true, // (bool) Whether to echo the menu or return it. Default true.
          'depth'             => 0, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
          'walker'            => '', // (object) Instance of a custom walker class.user.
          'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
          'item_spacing'      => '', // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
              );
            wp_nav_menu( $defaults );
        ?>
    </div>
  </header><!-- #header -->
      <section id="banner-page" class="bg-banner" style="background-image: url(http://webmain.cl/desarrollo/wp-content/uploads/2020/01/banner-solatube.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>
