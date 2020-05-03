<article class="row gallery-category mt-4">
  <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $args = array (
              'cat' => '6, 7, 8, 9',
              'posts_per_page' => 20,
              'paged' => $paged,
              'orderby' => 'title',
              'order'   => 'DESC',
            );            
      $the_query = new WP_query($args); ?>
      <div class="col-lg-12 col-md-12 gallery-item wow fadeInUp" data-wow-delay="0.1s">
        <div class="card-group mt-3">
            
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>

                <div class="col-12 col-sm-3">    
                  <div class="card <?php the_field('filter_gallery'); ?>">
                  <?php $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumbnail-cards'); ?>
                    <?php if(has_post_thumbnail() ): ?>
<!-- 
                        <img class="thumb-category" id="thumbnail-gallery" src="<?php //echo $thumb_url['0'];?>" alt="<?php //the_title_attribute(); ?>" title="<?php //the_title_attribute(); ?>"> -->
                        <picture class="thumb-category" style="background-image: url(<?php echo $thumb_url['0'];?>);"></picture>

                  <?php else : ?>
                        <picture class="thumb-category" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/default-gallery.jpg ?>');"></picture>
                        <!-- <img class="img-fluid" src="" alt="" title="<?php //the_title_attribute(); ?>"> -->
                  <?php endif; ?> 
                    <div class="card-body">
                      <h5 class="card-title"><?php the_field('descripcion'); ?></h5>
                      <p class="card-text"><?php the_field('category-service'); ?></p>
                      <div class="wrapp-btn">
                        <a href="<?php the_permalink(); ?>" class="btn btn-category">Ver proyecto</a>
                      </div>                      
                    </div>
                  </div>  
                </div>

            <?php endwhile; ?>

        </div>
      </div><!--./col-lg-4 col-md-6 gallery-item filter-solatube wow fadeInUp -->
        <?php wp_reset_postdata(); ?>
        <?php else : get_template_part( 'template-parts/content', 'oops' );  endif; ?>
   </article>
  <div class="row">
    <div class="col-12">
      <div id="wrapper-pagination" class="text-center py-2 mt-3">
          <?php get_template_part('template-parts/content', 'pagination'); ?>							 
        </div>
    </div>
  </div>