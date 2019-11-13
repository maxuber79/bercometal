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
        About Us Section
    ============================-->
    
    <section id="about" style="background-image: url('<?php echo get_post_meta($post->ID, 'URL_bg_about', true); ?>');background-size:cover;background-position: center center;background-repeat: no-repeat;">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <header class="section-header">
                        <h3>NOSOTROS</h3>
                        <p>Somos los primeros en nuestro país en cosechar salmón mediante un proceso innovador. Creemos en el potencial de la industria salmonera y su impacto en el desarrollo de nuestro país. Buscamos ser parte de ese desarrollo.</p>
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
                        <?php echo content('86'); ?>
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
                        <?php echo content('86'); ?>
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
                        <?php echo content('86'); ?>
                        </div><!--./about-col-->
                    </div><!--./col-md-4 -->
                <?php endwhile; wp_reset_query(); ?>


            </div><!--./row about-cols-->

        </div><!--./container-->
    </section><!-- #about -->
<?php
//get_sidebar();
get_footer();