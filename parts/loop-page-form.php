<article class="section" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

  <header class="article-header">
    <div  class="grid-container full">
      <div class="large-12 column text-center callout large">
        <h2 class="subheader"><?php the_title(); ?></h2>
      </div>
    </div>
  </header> <!-- end article header -->
 <!-- Contact Us -->
  <section>
    <div class="grid-container full">
      <div class="entry-content inner-content grid-x grid-margin-x grid-padding-x" itemprop="text">

          <div class="image small-12 large-6 cell">
            <?php the_post_thumbnail('large'); ?>
          </div>
          <div class="small-12 large-4 large-offset-1 medium-6 cell page-title">
            <?php echo the_content(); ?>
          </div>
        </div>
    </div>
  </section>
</article>
