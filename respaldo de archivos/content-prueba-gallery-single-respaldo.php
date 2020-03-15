<h2>prueba-gallery-single</h2>
<?php  $args = array(
        'cat' => '6, 7, 8, 9',
        'posts_per_page' => 9,
        'orderby' => 'name', 
        'order' => 'ASC', 
    );        
    $the_query = new WP_Query($args); ?>
    <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>            

 <?php /*             

   $thumb_img = get_field( 'gallery' );

    echo "<pre>";


    echo "Valores del array " . $thumb_img['sizes'] . ", " . $thumb_img['sizes'] . " and " .$thumb_img['sizes'] . ".";

    echo "</pre>";

    var_dump($thumb_img);
?>*/
?>
 <hr>

 <?php

			$images = get_field('gallery'); 
				if( $images ): ?> <!-- This is the gallery field slug -->
				
				<h3>Project Examples</h3>			
				<?php foreach( $images as $image ): ?>
				<dl class="gallery-item">
					<dt class="gallery-icon portrait">
						<a href="<?php echo $images['url']; ?>"> <img src="<?php echo $images['sizes']['thumbnail']; ?>" alt="<?php echo $images['alt']; ?>" /></a>
					</dt>
				</dl>
					
				<?php endforeach; ?>
					 <!-- Image Code -->
				<?php endif; ?> <!-- This is where the gallery loop ends -->

<?php endwhile; wp_reset_query(); ?> 

<?php 
    if( have_rows('gallery') ):

while( have_rows('gallery') ) : the_row(); 

    ?>
    <p><?php the_sub_field('thumbnail_1'); ?></p>
    <?php

endwhile;

endif;
?>
<!-- <?php
    $our_services = get_field('gallery'); // 'our_services' is your parent group
    $service_one = $our_services['thumbnail_1']; // 'service_one' is your child group 
 ?>
 
 <?php echo $service_one['gallery']; // 'service_heading' is a subfield of your child group ?> -->

 <?php if( have_rows('gallery') ): ?>
    <?php while( have_rows('gallery') ): the_row(); 

        // Get sub field values.
        $image1 = get_sub_field('thumbnail_1');
        $image2 = get_sub_field('thumbnail_2');
        $image3 = get_sub_field('thumbnail_3');
        $image4 = get_sub_field('thumbnail_4');

        $link = get_sub_field('link');

        ?>
        <div id="hero">
            <img src="<?php echo esc_url( $image1['url'] ); ?>" alt="<?php echo esc_attr( $image1['alt'] ); ?>" />
            <div class="content">
                <?php the_sub_field('caption'); ?>
                <a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
            </div>
        </div>
        <style type="text/css">
            #hero {
                background-color: <?php the_sub_field('color'); ?>;
            }
        </style>
    <?php endwhile; ?>
<?php endif; ?>