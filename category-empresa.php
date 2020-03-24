<?php
/**
 ** The template used for displaying category content
 *
 * @package WordPress
 * @subpackage bercometal
 * @since bercometal 1.0
 */

 if (is_category( 'empresa' )) {
    get_header( 'empresa' );
} else {
    get_header( 'page' );
} ?>
<main id="main">	
	<section class="page-heading asset-bg">
		<div class="container">

			<div class="row">
				<div class="col-6">
						<div class="heading-text">
							<h1 class="entry-title"><?php echo get_cat_name( $category_id = 9 );?></h1>
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
			   	<article id="gallery" class="post-<?php the_ID(); ?>">
					<?php get_template_part('template-parts/content', 'gallery-empresa'); ?>
				</article>
					
					
				</div>	
				<?php get_sidebar( 'page' ); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>