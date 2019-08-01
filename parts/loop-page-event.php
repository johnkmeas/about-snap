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
	  	$media = get_field('hero_media'); 
		  if($media) {
        $media_type = $media['media_type'];
        if($media_type == 'embed'){
          $hero_media = $media['embed'];
        } elseif($media_type == 'mp4'){
          $hero_media = $media['mp4']['url'];
        } else {
          $hero_media = get_the_post_thumbnail(the_ID(), 'large'); 
        }
      }
	  	set_query_var('$hero_content', '$hero_media', '$media_type');
    ?>

    <?php include(locate_template('parts/content-hero.php')); ?>
	</header> <!-- end article header -->

    <!-- Events Section -->
    <section class="section">
      <div class="grid-container full">
        <?php $about = get_field('feature_event');

          if( $about ):

          $post = $about;
          setup_postdata( $post );
        ?>
          <div class="entry-content inner-content grid-x grid-margin-x grid-padding-x">
            <div class="padding-2 small-12 large-6 medium-6 large-offset-1 cell">
              <h2>Featured <?php echo $page_title; ?> Event</h2>
              <a href="<?php the_permalink(); ?>">More <?php the_title(); ?></a>
            </div>
          </div>
            <?php
              $gallery = get_field('gallery', $post->ID);
              set_query_var('$gallery', null);
              include(locate_template('parts/loop-gallery.php'));
            ?>
          <?php wp_reset_postdata();?>
        <?php endif; ?>
      </div>
    </section>
    <!-- Gallery Section -->

    <section class="section">
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
