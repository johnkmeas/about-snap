<?php
get_header(); ?>
  
  <div class="content">
  
    <div class="inner-content grid-x grid-margin-x grid-padding-x">
  
        <main class="main small-12 medium-12 large-12 cell" role="main">
        <?php
          $accordion = get_field('faq_accordion');

          if (have_posts()) : while (have_posts()) : the_post();
          set_query_var('$accordion', null);
       ?>

            <?php include(locate_template('parts/loop-page-accordion.php')); ?>
          
          <?php endwhile; endif; ?>             
                    
      </main> <!-- end #main -->        
    </div> <!-- end #inner-content -->

  </div> <!-- end #content -->

<?php get_footer(); ?>