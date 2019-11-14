<?php
/**
 * Theme Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bercometal
 */

get_header();
?>
<!--==========================
Intro Section
============================-->
    <section id="intro">
        <div class="intro-container">
            <?php get_template_part('template-parts/content', 'slider-home'); ?>
        </div>
    </section><!-- #intro -->

<main id="main">
  <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-paper-outline"></i>
            <h4 class="title"><a href="">Certificación</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Responsabilidad</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Confianza</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->
 <!--==========================
        About Us Section
    ============================-->
    
    <section id="about" style="background-image: url('<?php echo get_post_meta($post->ID, 'URL_bg_about', true); ?>');background-size:cover;background-position: center center;background-repeat: no-repeat;">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <header class="section-header">
                        <h3>NOSOTROS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora incidunt explicabo aperiam maxime et. Ab minima hic laudantium at delectus amet non sed id, quae distinctio atque labore sit nulla, tempora et soluta esse nesciunt fuga veritatis? Sunt explicabo qui molestiae eligendi doloribus soluta, non, laboriosam eaque a, quo sint?</p>
                    </header>
                </div>
            </div>
            <div class="row about-cols">
            
                <?php 
                $args = array(
                    'pagename' => 'mision',
                );        
                $the_query = new WP_Query($args); ?>
                <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                            <?php $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb_home'); ?>
                            <?php if(has_post_thumbnail() ): ?>
                                <img class="img-fluid thumbnail-default" id="thumbnail-default" src="<?php echo $thumb_url['0'];?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/about-plan.jpg" alt="" title="<?php the_title_attribute(); ?>">
                            <?php endif; ?>                
                            <div class="icon"><i class="icon-compass"></i></div>
                            </div>                
                        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php echo content('30'); ?>
                        </div><!--./about-col-->
                    </div><!--./col-md-4 -->
                <?php endwhile; wp_reset_query(); ?> 


                <?php 
                    $args = array(
                        'pagename' => 'vision',
                    );        
                    $the_query = new WP_Query($args); ?>
                    <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                            <?php $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb_home'); ?>
                            <?php if(has_post_thumbnail() ): ?>
                            <img class="img-fluid thumbnail-default" id="thumbnail-default" src="<?php echo $thumb_url['0'];?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/about-plan.jpg" alt="" title="<?php the_title_attribute(); ?>">
                            <?php endif; ?>   
                            <div class="icon"><i class="icon-eye"></i></div>
                            </div><!--./img-->
                        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php echo content('30'); ?>
                        </div><!--./about-col-->
                    </div><!--./col-md-4 -->
                <?php endwhile; wp_reset_query(); ?> 


                <?php 
                    $args = array(
                        'pagename' => 'valores',
                    );        
                    $the_query = new WP_Query($args); ?>
                    <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <?php $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb_home'); ?>
                                <?php if(has_post_thumbnail() ): ?>
                                    <img class="img-fluid thumbnail-default" id="thumbnail-default" src="<?php echo $thumb_url['0'];?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/about-plan.jpg" alt="" title="<?php the_title_attribute(); ?>">
                                <?php endif; ?> 
                                <div class="icon"><i class="icon-value"></i></div>
                            </div><!--./img-->
                        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php echo content('30'); ?>
                        </div><!--./about-col-->
                    </div><!--./col-md-4 -->
                <?php endwhile; wp_reset_query(); ?>


            </div><!--./row about-cols-->

        </div><!--./container-->
    </section><!-- #about -->

     <!--==========================
        Services Section
    ============================-->
    <section id="services">
        <div class="container">

        <div class="row">
            <div class="col-12">
                <header class="section-header wow fadeInUp">
                    <h3>Servicio</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit repellat accusantium nulla, harum voluptatem nisi vitae magni ab quam iusto repellendus ex nesciunt est vel quod porro delectus quia aut asperiores laboriosam? Commodi esse vero nulla illum, earum velit, quidem incidunt vitae dolore laborum quam rem neque, repellendus numquam adipisci.</p>
                </header>
            </div>
        </div>          

        
        <article class="row">
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </article>
        

        </div>
    </section><!-- #services -->


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Galería de Trabajos</h3>
        </header>
          <?php get_template_part('template-parts/content', 'gallery'); ?>
      </div>
    </section><!-- #portfolio -->
    <!--==========================
    Contact Section
    ============================-->
        
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

        <div class="section-header">
            <h3>Contactanos</h3>          
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
            <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Dirección</h3>
                <address>Lorem Ipsu dolor N° 12345, Of. 123, Santiago, Chile</address>
            </div>
            </div>

            <div class="col-md-4">
            <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Teléfonos</h3>
                <p><a href="tel:+155895548855">+56 2 1234 5678 - 5678</a></p>
            </div>
            </div>

            <div class="col-md-4">
            <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3>Email</h3>
                <p><a href="contacto@costaaustral.cl">contacto@bercometal.com</a></p>
            </div>
            </div>

        </div>

        <div class="form">
            <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
            <?php echo do_shortcode( '[contact-form-7 id="255" title="Formulario de contacto 1"]' ); ?>            
        </div>

        </div>
    </section> <!-- #contact -->
<?php
//get_sidebar();
get_footer();