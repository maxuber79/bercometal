<div class="popular-post-widget">
	<h4 class="popular-title">Servicios</h4>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action"><i class="ion-ios-analytics-outline mr-1"></i> Estructuras Metálicas y Maderas</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="ion-ios-bookmarks-outline mr-1"></i> Obras Civiles Menores</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="ion-ios-paper-outline mr-1"></i> Sistema de Solatube</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="ion-ios-speedometer-outline mr-1"></i> Provisión e Instalación de Policarbonatos</a>
    </div>
</div>



<div class="post-category-widget">
    <h4 class="category-title">Ultimas Galerías</h4>

    <ul class="list-unstyled cat-list">
        <?php 
            $args = array(
                    'cat' => '6, 7, 8, 9',
                    'posts_per_page' => 9,
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                );        
                $the_query = new WP_Query($args); ?>
        <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
            <li class="media">
                <!-- thumbnails -->
                <?php $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb-sidebar'); ?>
                <?php if(has_post_thumbnail() ): ?>
                <a href="<?php echo $thumb_url['0'];?>" class="link-preview" data-lightbox="portfolio" data-title="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                    <img class="img-fluid thumbnail-gallery" id="thumbnail-default" src="<?php echo $thumb_url['0'];?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" style="width:64px;height:64px;"></a>
                <?php else : ?>
                    <img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/images/about-plan.jpg" alt="" title="<?php the_title_attribute(); ?>">
                <?php endif; ?>
                <!-- End Thumbnails -->
                <div class="media-body">
                    <a href="#" class=""><h5 class="mt-0 mb-1"><?php the_title(); ?></h5></a>
                    <?php echo excerpt('15'); ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="read-more">Leer más</a>
                </div>
            </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
</div>

<div class="post-category-widget">
    <h4 class="category-title">Ultimas Galerías</h4>

    <div class="card-columns">
        <?php 
            $args = array(
                    'cat' => '6, 7, 8, 9',
                    'posts_per_page' => 9,
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                );        
                $the_query = new WP_Query($args); ?>
        <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
        <div class="card">
                <!-- thumbnails -->
                <?php $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb-gallery'); ?>
                <?php if(has_post_thumbnail() ): ?>
                <a href="<?php echo $thumb_url['0'];?>" class="link-preview" data-lightbox="portfolio" data-title="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                    <img class="img-fluid thumbnail-gallery" id="thumbnail-default" src="<?php echo $thumb_url['0'];?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" style="width:100%;height:64px;"></a>
                <?php else : ?>
                    <img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/images/about-plan.jpg" alt="" title="<?php the_title_attribute(); ?>">
                <?php endif; ?>
                <!-- End Thumbnails -->
                
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>



















<?php 
                $args = array(
                    'cat' => '6, 7, 8, 9',
                    'posts_per_page' => 9,
                    'orderby' => 'name', 
                    'order' => 'ASC', 
                );        
                $the_query = new WP_Query($args); ?>


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