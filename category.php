<?php
/**
 ** The template used for displaying category content
 *
 * @package WordPress
 * @subpackage bercometal
 * @since bercometal 1.0
 */

if (is_category( 'gallery' )) {
    get_header( 'gallery' );
} else {
    get_header( 'page' );
} ?>
<main id="main">	
	<section class="page-heading asset-bg">
		<div class="container">

			<div class="row">
				<div class="col-6">
						<div class="heading-text">
							<h1 class="entry-title"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h1>
						</div>
					</div>
					<div class="col-6 text-right">
						<?php  get_template_part('template-parts/content', 'breadcrumb'); ?>
					</div>	
			</div>

		</div>
	</section>
	<!-- Start post-content Area -->
  	<section id="page-content" class="page-content-area">
       <div class="container">
           <div class="row">
               <div class="col-lg-8 post-area">

			   	<article id="category" class="post-<?php the_ID(); ?>">	
				   <h2>category.php</h2>			  
                    
                    <!-- loop -->

                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                            <!-- Thumnail code opcional -->
                            <?php $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'Mi_thumbnail_perzonalizado_desde_Function', true); ?>
                                <img src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="mi_clase_personalizada" width="---" height="---">
                        
                            <h2><?php the_title(); ?></h2>
                            <span class="byline">Publicado el <?php the_time('d F Y'); ?> | en <?php the_category(', '); ?> | por  <?php the_author(); ?></span>
                            <div class="sumary">
                                <?php the_content(); ?>
                            </div>
                            <?php endwhile; ?>        

                            <?php else : get_template_part( 'inc/content', 'oops' );  endif; ?>


				</article>
					
					
				</div>	
				<?php get_sidebar( 'page' ); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>