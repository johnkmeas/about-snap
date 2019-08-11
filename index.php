<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
			
	<div class="content">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-8 large-8 cell" role="main">
		    	<!-- Shout Out -->
				  <div class="column text-center padding-top-3">
				    <b>
				    	<h1>
					      Our Blog
				    	</h1>
				    </b>
				  </div>
	    		<section class="section">	
					 	<div class="grid-container">
					    <?php 
					    	if (have_posts()) : ?>
								 	<div class="masonry-css">
					    	<?php while (have_posts()) : the_post(); ?>
							    <div class="masonry-css-item">
							      <!-- To see additional archive styles, visit the /parts directory -->
										<?php get_template_part( 'parts/loop', 'archive' ); ?>
							    </div>
							<?php endwhile; ?>	
									<?php joints_page_navi(); ?>
							  </div>
								
							<?php else : ?>
														
								<?php get_template_part( 'parts/content', 'missing' ); ?>
									
							<?php endif; ?>
						</div>
	    		</section>
																								
		    </main> <!-- end #main -->
			    <?php get_sidebar(); ?>
			<!-- CTA **	requires get_option for index.php 
						and will pull cta from blog if this 
						is with include anywhere else** 
			-->
			<div class="large-12 cell">
				<?php
					$cta_content = get_field('global_cta', get_option('page_for_posts'));

					set_query_var('$cta_content', null);
					include(locate_template('parts/content-cta.php'));
				?>   
			</div>
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>