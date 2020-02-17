<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class( 'row' );?>> 
<div class="col-12 mt-3">

    <h3>Ficha técnica:</h3>
    <hr class="my-1">    
    <p><?php the_field( 'description' ); ?></p>

</div>
<div class="col-12">
    <?php $images = get_field('gallery');
        if( $images ): ?>
        <div id="slider" class="flexslider customflex">
            <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <a class="link-thumb-single-gallery" href="<?php echo esc_url($image['url']); ?>">
                    <!-- <img src="<?php // echo esc_url($image['sizes']['large']); ?>" alt="<?php // echo esc_attr($image['alt']); ?>" /> -->
                        <div class="thumbnail-single-gallery" style="background: url(<?php echo esc_url($image['sizes']['large']); ?>) no-repeat center center;">                    
                    </div>
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
</div>
</article>







<?php
/*$image = get_field( 'gallery' ); 
echo '<code>';
echo '<pre>';
      var_dump( $image ); 
echo '</pre>';
echo '</code>';*/
?>
<?php endwhile; else: ?>
    <article>
        <header>
            <h1>Lo lamentamos</h1>
        </header>
        <p>No hay contenidos que mostrar :( </p>
    </article>
<?php endif; ?>


