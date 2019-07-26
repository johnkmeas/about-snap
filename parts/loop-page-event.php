<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->

    <section class="entry-content" itemprop="text">
      <?php the_post_thumbnail(); ?>
	    <?php the_content(); ?>
	  </section> <!-- end article section -->

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
          <ul>
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

</article> <!-- end a
