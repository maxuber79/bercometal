<h2>prueba-gallery-single</h2>
<?php 
                $args = array(
                    'cat' => '6, 7, 8, 9',
                    'posts_per_page' => 9,
                    'orderby' => 'name', 
                    'order' => 'ASC', 
                );        
                $the_query = new WP_Query($args); ?>
                <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
            

 <?php              
    //$thumb_img = the_field('gallery_thumb');
    $new = get_field( 'gallery_thumb' );

    echo "<pre>";

    //Print output
    echo "Valores del array " . $thumb_img[0] . ", " . $thumb_img[1] . " and " .$thumb_img[2] . ".";

    //Add the ending pre tag of html
    echo "</pre>";

    var_dump($new);
 ?>



<?php 
$images = get_field( 'gallery_thumb' );
if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="Thumbnail of <?php echo $image['alt']; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php 

$images = get_sub_field( 'gallery_thumb' );

if( $images ):
    foreach( $images as $image ):
        ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php
    endforeach;
endif;

                  <?php endif; endwhile; wp_reset_query(); ?> 