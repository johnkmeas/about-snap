<?php
/**
 * Template part for displaying page content in page.php
 */
$id = get_the_ID();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">

    <?php 
      $title = get_the_title();
      $hero_title = '<h1 class="page-title">' .$title. '</h1>';
      
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
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">More <?php the_title(); ?></a>
            </div>

            <?php
            the_post_thumbnail(); 
            the_content();
            ?>
          </div>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
      </div>
    </section>
    <!-- Gallery Section -->
    <section>
      <?php
      $images = get_field('main_gallery');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
          <ul class="event-gallery slick-slider"">
              <?php foreach( $images as $image ): ?>
                  <li>
                  	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>
    </section>

	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> 
