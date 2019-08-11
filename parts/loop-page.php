<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
  <header class="article-header">

    <?php 
      $page_title = get_the_title();
      $hero_title = '<h1 class="page-title">' .$page_title. '</h1>';
      $content = apply_filters( 'the_content', get_the_content() );
      $hero_content = $hero_title . '<div>'.$content.'</div>';

      $hero_media = get_the_post_thumbnail($id, 'large'); 
      set_query_var('$hero_content', '$hero_media');
    ?>

    <?php include(locate_template('parts/content-hero.php')); ?>
  </header> <!-- end article header -->

  <!-- CTA -->
	<section>
      <?php
      $cta_content = get_field('global_cta'); 
      set_query_var('$cta_content', null);
      include(locate_template('parts/content-cta.php'));
    ?>
  </section>
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						   
					
</article> <!-- end article -->