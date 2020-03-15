<div class="row">
  <!-- <div class="col-lg-12">
    <ul id="gallery-flters">
      <li data-filter="*" class="filter-active">Todos</li>
      <li data-filter=".filter-empresa">Empresa</li>
      <li data-filter=".filter-particulares">Particulares</li>
      <li data-filter=".filter-solatube">Solatube</li>
    </ul>
  </div> -->
</div>
<article class="row gallery-container">
  <?php 
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $args = array (
              //'cat' => '7,9,8,10',
              'cat' => 8,
              'posts_per_page' => 6,
              'paged' => $paged,
              'orderby' => 'title',
              'order'   => 'DESC',
            );            
            $the_query = new WP_query($args); ?>

      <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
          <ul class="list-unstyled" style="margin: 15px 0 0 0;">
    
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>



            <li class="media border-bottom p-2 mb-1">
            <?php $thumb_id = get_post_thumbnail_id();
                  $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb-sidebar'); ?>
                    <?php if(has_post_thumbnail() ): ?>
              <img id="thumbnail-gallery" src="<?php echo $thumb_url['0'];?>" class="mr-3 thumbnail-gallery" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
              <?php else : ?>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/default-gallery.jpg" alt="" title="<?php the_title_attribute(); ?>">
              <?php endif; ?>
              <div class="media-body">
                <h5 class="mt-0 mb-1"><?php the_field('category-service'); ?></h5>
                <?php the_field('descripcion'); ?><br>
                <a href="<?php the_permalink(); ?>" class="text-info stretched-link float-right" title="Más detalles: <?php the_title(); ?>">
                    Leer más
                  </a>
              </div>
            </li>
     <?php endwhile; ?>
          </ul>


       




      </div><!--./col-lg-4 col-md-6 gallery-item filter-solatube wow fadeInUp -->
      
       
      
      <?php wp_reset_postdata(); ?>
      <?php else : get_template_part( 'template-parts/content', 'oops' );  endif; ?>
      </article>
      <article class="col-12">
        <div id="wrapper-pagination" class="text-center py-2 mt-3">
            <?php get_template_part('template-parts/content', 'pagination'); ?>							 
          </div>
      </article>