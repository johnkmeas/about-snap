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
		    <div class="padding-vertical-3 small-12 medium-4 large-4 cell">
			    <?php get_sidebar(); ?>
		    </div>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>