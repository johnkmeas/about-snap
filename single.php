<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<main class="main small-12 medium-8 large-6 large-offset-2 cell" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

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