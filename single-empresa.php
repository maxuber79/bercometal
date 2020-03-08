<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bercometal
 */

get_header( 'empresa' ); ?>

<main id="main">	
	<section class="page-heading asset-bg">
		<div class="container">

			<div class="row">
				<div class="col-6">
						<div class="heading-text">
							<h1 class="entry-title"><?php the_title(); ?></h1>
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
							  
                <?php  get_template_part('template-parts/content', 'gallery-single'); ?>
              </article>
				    </div>	
				<?php get_sidebar( 'page' ); ?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
?>
