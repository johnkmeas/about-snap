<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

  <header class="article-header">

    <?php 
      $page_title = get_the_title();
      $hero_title = '<h1 class="page-title">' .$page_title. '</h1>';
      
      $hero_content = $hero_title . get_the_content();

      $hero_media = get_the_post_thumbnail($id, 'large'); 
      set_query_var('$hero_content', '$hero_media');
    ?>

    <?php include(locate_template('parts/content-hero.php')); ?>
  </header> <!-- end article header -->
  <!-- FAQ Accordion -->
  <section>
    <div  class="grid-container full">
      <div class="inner-content grid-x grid-margin-x grid-padding-x">
        <div class="small-12 large-8 large-offset-2 medium-6 cell">
          <?php 
            if( $accordion ): ?>
              <ul class="accordion" data-accordion data-multi-expand="true"  data-allow-all-closed="true">
                  <?php foreach( $accordion as $key=>$qa ): ?>
                    <li class="accordion-item <?php echo ($key == 0 ? 'is-active':''); ?>" data-accordion-item>
                      <!-- Accordion tab title -->

                      <a href="#" class="accordion-title"><b class="h5"><?php echo $qa['question']; ?></b></a>

                      <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                      <div class="accordion-content" data-tab-content>
                        <?php echo $qa['answer']; ?>
                      </div>
                    </li>
                  <?php endforeach; ?>
              </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</article>

<script type="text/javascript">
  jQuery(document).ready(function($) {
  console.log('about to accordion', $('.accordion'));


  var elem = new Foundation.Accordion($('.accordion'));

});

</script>
