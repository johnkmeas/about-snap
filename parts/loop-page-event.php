<?php
/**
 * Template part for displaying page content in page.php
 */
$id = get_the_ID();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">

    <?php 
      $page_title = get_the_title();
      $hero_title = '<h1 class="page-title">' .$page_title. '</h1>';
      
      $content = get_field('hero_content');
      $hero_content = $hero_title . $content;

      $hero_media = get_the_post_thumbnail($id, 'large'); 
      set_query_var('$hero_content', '$hero_media');
    ?>

    <?php include(locate_template('parts/content-hero.php')); ?>
	</header> <!-- end article header -->

    <!-- Events Section -->
    <section>
      <div>
        <?php $about = get_field('feature_event');

          if( $about ):

          $post = $about;
          setup_postdata( $post );
        ?>
          <div>
            <div>
              <h2>Featured <?php echo $page_title; ?> Event</h2>
              <a href="<?php the_permalink(); ?>">More <?php the_title(); ?></a>
              <div>
                <?php the_excerpt(); ?>
              </div>
            </div>
            <?php
              $gallery = get_field('gallery', $post->ID);
              set_query_var('$gallery', null);
              include(locate_template('parts/loop-gallery.php'));
            ?>
          </div>
          <?php wp_reset_postdata();?>
        <?php endif; ?>
      </div>
    </section>
    <!-- Gallery Section -->

    <section>
        <!-- Shout Out -->
      <div class="column text-center callout large">
        <h2><?php  the_field('main_gallery_title'); ?></h2>
      </div>
      <?php
      $gallery = get_field('main_gallery');
      set_query_var('$gallery', null);
      include(locate_template('parts/loop-masonry.php')); ?>
    </section>
  <footer class="article-footer">
     <?php wp_link_pages(); ?>
  </footer> <!-- end article footer -->
</article> 
