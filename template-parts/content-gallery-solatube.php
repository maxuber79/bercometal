<article class="row gallery-container">
  <?php 
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $args = array (
              //'cat' => '7,9,8,10',
              'cat' =>  8,
              'posts_per_page' => 10,
              'paged' => $paged,
              'orderby' => 'title',
              'order'   => 'DESC',
            );            
            $the_query = new WP_query($args); ?>

      <div class="col-lg-12 col-md-12 gallery-item wow fadeInUp" data-wow-delay="0.1s">
        <div class="card-columns mt-3">
    
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
        <div class="card">
        <?php $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumbnail-cards'); ?>
            <?php if(has_post_thumbnail() ): ?>
                <img class="img-fluid thumbnail-gallery" id="thumbnail-gallery" src="<?php echo $thumb_url['0'];?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
          <?php else : ?>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/default-gallery.jpg" alt="" title="<?php the_title_attribute(); ?>">
          <?php endif; ?> 
          <div class="card-body">
            <h5 class="card-title"><?php the_field('descripcion'); ?></h5>
            <p class="card-text"><?php the_field('category-service'); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Ver proyecto</a>
          </div>
        </div>       
     <?php endwhile; ?>
      </div>
      </div><!--./col-lg-4 col-md-6 gallery-item filter-solatube wow fadeInUp -->
      
       
      
      <?php wp_reset_postdata(); ?>
      <?php else : get_template_part( 'template-parts/content', 'oops' );  endif; ?>
      </article>
      <article class="col-12">
        <div id="wrapper-pagination" class="text-center py-2 mt-3">
            <?php get_template_part('template-parts/content', 'pagination'); ?>							 
          </div>
      </article>