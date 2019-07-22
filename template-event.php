<?php
/*
Template Name: Events
*/

get_header(); ?>
			
<?php 
  global $post;
	$post_slug = $post->post_name;
	echo $post_slug;
?>
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							
        <?php 
          $posts = get_field('feature_event');

          
          if( $posts ): ?>
              <ul>
              <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                  <li>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <div>
                        <?php the_content(); ?>
                      </div>
                  </li>
              <?php endforeach; ?>
              </ul>
              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>
        
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
