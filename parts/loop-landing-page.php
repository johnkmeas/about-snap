<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
					
  <section class="entry-content inner-content grid-x grid-margin-x grid-padding-x" itemprop="text">
    <div class="small-12 large-6 medium-8 cell">
      <?php  the_field('hero_content'); ?>
    </div>
    <div class="small-12 large-6 medium-4 cell">
      <?php the_field('hero_media'); ?>
    </div>
	</section> <!-- end article section -->

  <div class="column text-center callout large">
    <h2>
      <?php  the_field('main_heading'); ?></div>
    </h2>
  </div>
  <section class="entry-content inner-content grid-x grid-margin-x grid-padding-x" itemprop="text">
    <div class="small-12 large-6 medium-8 cell">
      <?php  the_field('main_content'); ?>
    </div>
    <div class="small-12 large-6 medium-4 cell">
      <?php 
        $image = get_field('main_image');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
    </div>
	</section> <!-- end article section -->

  <!-- Features Set Row -->
  <section>
    <?php $section_type = 'feature'; ?>
    <div class="column text-center callout large">
      <h2>
        <?php  the_field($section_type . '_heading'); ?></div>
      </h2>
    </div>
    <?php 
      $set = $section_type . '_set';
      include(locate_template('parts/loop-row-set.php'));
    ?>
  </section>

  <!-- Services Set Section -->
  <section>
    <?php $section_type = 'service'; ?>
    <div class="column text-center callout large">
      <h2>
        <?php  the_field($section_type . '_heading'); ?></div>
      </h2>
    </div>
    <?php 
      $set = $section_type . '_set';
      include(locate_template('parts/loop-set.php'));
    ?>

<a href="<?php echo get_post_type_archive_link('events'); ?>">Events</a>
  </section>

	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->