<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

  <!-- About the Fold -->
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->

  <!-- Hero Section -->
  <section class="entry-content inner-content grid-x grid-margin-x grid-padding-x" itemprop="text">
    <div class="small-12 large-6 medium-8 cell">
      <?php  the_field('hero_content'); ?>
    </div>
    <div class="small-12 large-6 medium-4 cell">
      <?php the_field('hero_media'); ?>
    </div>
	</section> <!-- end article section -->

  <!-- Shout Out -->
  <div class="column text-center callout large">
    <h2>
      <?php  the_field('main_heading'); ?></div>
    </h2>
  </div>

  <!-- Main Section -->
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
      include(locate_template('parts/loop-static-set.php'));
    ?>
  </section>

  <!-- Events Section -->
  <section>
		<?php $section_type = 'event'; ?>
    <div class="column text-center callout large">
      <h2>
        <?php  the_field($section_type . '_heading'); ?></div>
      </h2>
    </div>
    <?php
      $set = $section_type . '_set';
      include(locate_template('parts/loop-standard-set.php'));
    ?>
  </section>

  <!-- About Us Section -->
  <section>
    <div>
      <h2>
        <?php the_field('about_title') ?>
      </h2>
      <?php $about = get_field('about_excerpt');

        if( $about ):

        $post = $about;
        setup_postdata( $post );
      ?>
        <div>
          <div>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">More <?php the_title(); ?></a>
          </div>
          <?php the_post_thumbnail(); ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    </div>
  </section>

  <!-- Contact Us -->
  <section class="entry-content inner-content grid-x grid-margin-x grid-padding-x" itemprop="text">
    <div class="small-12 large-6 medium-8 cell">
      <?php
        $contact_message =  get_field('contact_us_message');

        if($contact_message !== '' ){
          echo $contact_message;
        }else {
          $the_slug = 'contact-us';
          $args = array(
            'name'        => $the_slug,
            'post_type'   => 'page'
          );
          $post = get_posts($args)[0];
          if( $post ) :
            setup_postdata( $post );  ?>
            <h2><?php the_title(); ?></h2>
            <div>
              <div>
                <p><?php the_excerpt(); ?></p>
              </div>
              <?php the_post_thumbnail(); ?>
            </div>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
          endif;
        }
      ?>
      <?php
      $contact_submit = get_field('contact_cta_title') ?: 'contact us' ;
      echo do_shortcode("[contact-form-7 id='162' title='Contact form 1' submit 'contact']"); ?>
    </div>
  </section>

	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->
