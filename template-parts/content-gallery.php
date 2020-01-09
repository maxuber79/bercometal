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
                    'posts_per_page' => 9,
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

                            <a href="<?php echo $thumb_url['0'];?>" class="link-preview" data-lightbox="portfolio" data-title="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                              <i class="ion ion-eye"></i>
                            </a>

                            <a href="<?php echo $thumb_url['0'];?>" class="link-details" title="Más detalles: <?php the_title(); ?>">
                              <i class="ion ion-android-open"></i>
                            </a>                            
                    </figure>
                    <div class="portfolio-info">
                      <h4><a href="#"><?php the_title_attribute(); ?></a></h4>
                      <!-- <p><?php //$cat = get_the_category(); echo $cat[0]->cat_name; ?></p> -->
                      <p><?php the_field('category-service'); ?></p>
                    </div>
                  </div><!--./portfolio-wrap-->
                </div><!--./col-lg-4 col-md-6 portfolio-item filter-solatube wow fadeInUp -->
                <?php endwhile; wp_reset_query(); ?> 

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-solatube wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php //echo get_template_directory_uri(); ?>/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="<?php //echo get_template_directory_uri(); ?>/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">lorem ipsun</a></h4>
                <p>lorem ipsun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-empresa wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php// echo get_template_directory_uri(); ?>/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="<?php //echo get_template_directory_uri(); ?>/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">lorem ipsun</a></h4>
                <p>lorem ipsun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-particulares wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php //echo get_template_directory_uri(); ?>/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="<?php //echo get_template_directory_uri(); ?>/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">lorem ipsun</a></h4>
                <p>lorem ipsun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-solatube wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php //echo get_template_directory_uri(); ?>/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="<?php //echo get_template_directory_uri(); ?>/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">lorem ipsun</a></h4>
                <p>lorem ipsun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-empresa wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php //echo get_template_directory_uri(); ?>/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="<?php //echo get_template_directory_uri(); ?>/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">lorem ipsun</a></h4>
                <p>lorem ipsun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-particulares wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php //echo get_template_directory_uri(); ?>/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="<?php// echo get_template_directory_uri(); ?>/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">lorem ipsun</a></h4>
                <p>lorem ipsun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-particulares wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php //echo get_template_directory_uri(); ?>/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="<?php //echo get_template_directory_uri(); ?>/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">lorem ipsun</a></h4>
                <p>lorem ipsun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-solatube wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php //echo get_template_directory_uri(); ?>/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="<?php //echo get_template_directory_uri(); ?>/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">lorem ipsun</a></h4>
                <p>lorem ipsun</p>
              </div>
            </div>
          </div> -->

        </div>