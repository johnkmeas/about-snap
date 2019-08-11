<?php
get_header(); ?>
  
  <div class="content">
  
    <div class="inner-content grid-x grid-margin-x grid-padding-x">
  
        <main class="main small-12 medium-12 large-12 cell" role="main">
        <?php

          $accordion = get_field('faq_accordion');

          if (have_posts()) : while (have_posts()) : the_post();?>
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
          <?php set_query_var('$accordion', null); ?>

            <?php include(locate_template('parts/loop-page-accordion.php')); ?>
          
          <?php endwhile; endif; ?>
          <!-- CTA -->
          <?php
            $cta_content = get_field('global_cta'); 
            set_query_var('$cta_content', null);
            include(locate_template('parts/content-cta.php'));
          ?>
      </main> <!-- end #main -->        
    </div> <!-- end #inner-content -->

  </div> <!-- end #content -->

<?php get_footer(); ?>