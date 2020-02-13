<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>









<article class="<?php post_class();?>">
    
    <?php if( have_rows('gallery') ): while( have_rows('gallery') ) : the_row(); 

            // Get sub field values.
            $image1 = get_sub_field('thumbnail_1');
            $image2 = get_sub_field('thumbnail_2');
            $image3 = get_sub_field('thumbnail_3');
            $image4 = get_sub_field('thumbnail_4');
            ?>
            <!-- Place somewhere in the <body> of your page -->
 <div id="slider" class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo esc_url( $image1['url'] ); ?>" alt="<?php echo esc_attr( $image1['alt'] ); ?>" />
    </li>
    <li>
     <img src="<?php echo esc_url( $image2['url'] ); ?>" alt="<?php echo esc_attr( $image2['alt'] ); ?>" />
    </li>
    <li>
     <img src="<?php echo esc_url( $image3['url'] ); ?>" alt="<?php echo esc_attr( $image3['alt'] ); ?>" />
    </li>
    <li>
      <img src="<?php echo esc_url( $image4['url'] ); ?>" alt="<?php echo esc_attr( $image4['alt'] ); ?>" />
    </li>
  </ul>
</div>
<div id="carousel" class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo esc_url( $image1['url'] ); ?>" alt="<?php echo esc_attr( $image1['alt'] ); ?>" />
    </li>
    <li>
      <img src="<?php echo esc_url( $image2['url'] ); ?>" alt="<?php echo esc_attr( $image2['alt'] ); ?>" />
    </li>
    <li>
      <img src="<?php echo esc_url( $image3['url'] ); ?>" alt="<?php echo esc_attr( $image3['alt'] ); ?>" />
    </li>
    <li>
      <img src="<?php echo esc_url( $image4['url'] ); ?>" alt="<?php echo esc_attr( $image4['alt'] ); ?>" />
    </li>
  </ul>
</div>
<?php
    endwhile; endif; 
?>
</article>










<?php endwhile; else: ?>

    <article>
        <header>
            <h1>Lo lamentamos</h1>
        </header>
        <p>No hay contenidos que mostrar :( </p>
    </article>

<?php endif; ?>


