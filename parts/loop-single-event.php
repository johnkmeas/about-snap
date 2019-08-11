<?php
/**
 * Template part for displaying a single post
 */
?>
<article class="main grid-x grid-margin-x grid-padding-x" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

  <header class="article-header text-center padding-top-3 small-12 large-12 cell"> 
    <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    <?php get_template_part( 'parts/content', 'byline' ); ?>
  </header> <!-- end article header -->
          
  <section class="section entry-content small-12 medium-8 large-8 large-offset-2 cell" itemprop="text">
    <?php the_post_thumbnail('full'); ?>
		<div class="padding-top-3">
			<?php the_content(); ?>
		</div>
  </section> <!-- end article section -->

    <!-- Gallery Section -->
  <section class="section small-12 large-12 cell">
    <?php
    $gallery = get_field('gallery');
    set_query_var('$gallery', null);
    include(locate_template('parts/loop-gallery.php')); ?>
  </section>
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
  <footer class="article-footer">
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
    <p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>  
  </footer> <!-- end article footer -->
            
  <?php comments_template(); ?> 
                          
</article> <!-- end article -->