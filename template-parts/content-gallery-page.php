<div class="row">
          <div class="col-lg-12">
            <ul id="gallery-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-empresa">Empresa</li>
              <li data-filter=".filter-particulares">Particulares</li>
              <li data-filter=".filter-solatube">Solatube</li>
            </ul>
          </div>
        </div>

        <div class="row gallery-container">
         
            
            
            <?php 
              $paged = get_query_var('paged', 1);
              query_posts( array( 
                  'posts_per_page' => 5,
                  'cat' => '6, 7, 8, 9',
                  'paged' => $paged ,
                  'order' => 'ASC',
              ));
              ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        

                <div class="col-lg-4 col-md-6 gallery-item <?php the_field('filter_gallery'); ?> wow fadeInUp" data-wow-delay="0.1s">
                  <div class="gallery-wrap">
                    <figure>
                            <?php $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb-gallery'); ?>
                            <?php if(has_post_thumbnail() ): ?>
                                <img class="img-fluid thumbnail-gallery" id="thumbnail-gallery" src="<?php echo $thumb_url['0'];?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/default-gallery.jpg" alt="" title="<?php the_title_attribute(); ?>">
                            <?php endif; ?> 

                            <a href="<?php echo $thumb_url['0'];?>" class="link-preview" data-lightbox="gallery" data-title="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                              <i class="ion ion-eye"></i>
                            </a>

                            <a href="<?php echo $thumb_url['0'];?>" class="link-details" title="Más detalles: <?php the_title(); ?>">
                              <i class="ion ion-android-open"></i>
                            </a>                            
                    </figure>
                    <div class="gallery-info">
                      <h4><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h4>
                      <!-- <p><?php //$cat = get_the_category(); echo $cat[0]->cat_name; ?></p> -->
                      <p><?php the_field('category-service'); ?></p>
                    </div>
                  </div><!--./gallery-wrap-->
                </div><!--./col-lg-4 col-md-6 gallery-item filter-solatube wow fadeInUp -->
               <?php endwhile; ?>
              <div class="row">
						<div id="border-1" class="col-12">
							 <div id="wrapper-pagination" class="text-center">
								  <?php get_template_part('template-parts/content', 'pagination'); ?>							 
							  </div>
						</div>
					</div>

               

                <?php //wp_reset_postdata(); ?>                        
                <?php wp_reset_query(); ?>  

            <?php else : get_template_part( 'inc/content', 'oops' );  endif; ?>

               

        </div>