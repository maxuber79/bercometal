<?php $images = get_field('gallery');
        if( !empty($images) ): ?>
        <div id="slider" class="flexslider customflex">
            <ul class="slides">
            <?php foreach( $images as $image ): ?>

           
                <li>
                    <a class="link-thumb-single-gallery" href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php  echo esc_attr($image['alt']); ?>" /> 
                        <!-- <div class="thumbnail-single-gallery" style="background: url(<?php //echo esc_url($image['sizes']['large']); ?>) no-repeat center center;"></div>-->
                    </a>
                </li>
           
            <?php endforeach; ?>
            </ul>
        </div>
        <div id="carousel" class="flexslider">
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                    
                    <li>
                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                    </li>
                   
                <?php endforeach; ?>
            </ul>
        </div>    
    <?php endif; ?>