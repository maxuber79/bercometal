<div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

            <?php $args = array (
                //'post_type'     => 'noticias',
                //'category' => 4,
                'cat'            => 2,
                'posts_per_page' => 10,
                'orderby' => 'title',
                'order'   => 'ASC', //ASC DESC
            );
            $the_query = new WP_query($args); ?>
            <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
            <div class="carousel-item <?php the_field('active'); ?>">
            
                <div class="carousel-background">
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <img class="" src="<?php echo $thumb['0'];?>" alt="">
                </div>

                <div class="carousel-container">
                <div class="carousel-content">
                    <h2><?php the_field('titulo'); ?></h2>
                    <p><?php the_field('subtitulo'); ?></p>
                    <div><?php //$meta_print_value = get_post_meta(get_the_ID(),'button_carrusel',true);
                     //echo($meta_print_value); ?></div>                    
                </div>
                </div>

            </div>
            <?php endwhile; wp_reset_query(); ?>
            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>

        </div>