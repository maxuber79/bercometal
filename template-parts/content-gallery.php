<div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-empresa">Empresa</li>
              <li data-filter=".filter-particulares">Particulares</li>
              <li data-filter=".filter-solatube">Solatube</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

        

          <?php 
                $args = array(
                    'cat' => '6, 7, 8, 9',
                    'posts_per_page' => 12,
                    'orderby' => 'name', 
                    'order' => 'ASC', 
                );        
                $the_query = new WP_Query($args); ?>
                <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?php the_field('filter_gallery'); ?> wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                    <figure>
                            <?php $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb-gallery'); ?>
                            <?php if(has_post_thumbnail() ): ?>
                                <img class="img-fluid thumbnail-gallery" id="thumbnail-gallery" src="<?php echo $thumb_url['0'];?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/default-gallery.jpg" alt="" title="<?php the_title_attribute(); ?>">
                            <?php endif; ?> 

                            <a href="<?php echo $thumb_url['0'];?>" class="link-preview" data-lightbox="portfolio" data-title="<?php the_excerpt(); ?>" title="<?php the_title_attribute(); ?>">
                              <i class="ion ion-eye"></i>
                            </a>

                            <a href="<?php the_permalink(); ?>" class="link-details" title="Más detalles: <?php the_title(); ?>">
                              <i class="ion ion-android-open"></i>
                            </a>                            
                    </figure>
                    <div class="portfolio-info">
                      <h4><a href="<?php the_permalink(); ?>" alt="<?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> / <?php the_field('category-service'); ?>"><?php the_field('category-service'); ?></a></h4>
                      <!-- <p><?php //$cat = get_the_category(); echo $cat[0]->cat_name; ?></p> -->
                      <p><?php the_field('descripcion'); ?></p>
                    </div>
                  </div><!--./portfolio-wrap-->
                </div><!--./col-lg-4 col-md-6 portfolio-item filter-solatube wow fadeInUp -->
                <?php endwhile; wp_reset_query(); ?> 
        </div>