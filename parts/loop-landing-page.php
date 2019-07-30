<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

  <!-- Hero Section - hero_content contains h1
   -->
  <header class="section">
  	<?php  
	  	$hero_content = get_field('hero_content');
	  	$hero_media = get_field('hero_media'); 
	  	set_query_var('$hero_content', '$hero_media');
  	?>

		<?php include(locate_template('parts/content-hero.php')); ?>
	</header> <!-- end article header -->

  <!-- Main Gallery -->
  <section>
  	<?php 
      $gallery = get_field('main_gallery');
      set_query_var('$gallery', null);
      include(locate_template('parts/loop-gallery.php'));
     ?>
  </section>

  <!-- Main Section -->
  <section class="section">
    <!-- Shout Out -->
    <div class="column text-center callout large">
      <b class="h3 subheader">
        <?php  the_field('main_heading'); ?>
      </b>
    </div>
    <div  class="grid-container full">
      <div class="entry-content inner-content grid-x grid-margin-x grid-padding-x align-middle" itemprop="text">
		    <div class="small-12 large-6 medium-8 cell">
					<div class="grid-x grid-margin-x grid-padding-x">
		      	<div class="section small-12 large-10 large-offset-2 medium-12 cell page-title"><?php  the_field('main_content'); ?></div>
					</div>
		    </div>
		    <div class="small-12 large-6 medium-4 cell">
		      <?php
		        $image = get_field('main_image');
		        if( !empty($image) ): ?>
		          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		        <?php endif; ?>
		    </div>
			</div>
		</div>
	</section><!-- end article section -->

  <!-- Features Set Row -->
  <section class="section">
		<div  class="grid-container full">
	    <?php $section_type = 'feature'; ?>
	    <div class="column text-center callout large">
	      <h2>
	        <?php  the_field($section_type . '_heading'); ?>
	      </h2>
	    </div>
	    <?php
	      $set = $section_type . '_set';
	      include(locate_template('parts/loop-row-set.php'));
	    ?>
		</div>
  </section>

  <!-- Services Set Section -->
  <section class="section">
		<div  class="grid-container full">
	    <?php $section_type = 'service'; ?>

	    <div class="column text-center callout large">
	      <h2>
	        <?php  the_field($section_type . '_heading'); ?>
	      </h2>
	    </div>
	    <?php
	      $set = $section_type . '_set';
	      include(locate_template('parts/loop-static-set.php'));
	    ?>
		</div>
  </section>

  <!-- Events Section -->
  <section class="section bg-rose">
		<div  class="grid-container full">
			<?php $section_type = 'event'; ?>
	    <div class="column text-center callout large">
	      <h2>
	        <?php  the_field($section_type . '_heading'); ?>
	      </h2>
	    </div>
	    <?php
	      $set = $section_type . '_set';
	      include(locate_template('parts/loop-standard-set.php'));
	    ?>
		</div>
  </section>

  <!-- About Us Section -->
  <div class="bg-branding"><img src="<?php echo get_template_directory_uri() ?>/assets/images/src/about-to-snap-logo-full-dark@2x.png" >
  </div>
  <section class="section bg-brand-logo">
		<div class="grid-container full">
      <?php $about = get_field('about_excerpt');
						$about_title = get_field('about_title');
        if( $about ):
        $post = $about;
        setup_postdata( $post );
      ?>


				<div class="entry-content inner-content grid-x grid-margin-x grid-padding-x align-middle align-center" itemprop="text">
					<div class="small-12 large-6 medium-6 cell">
						<div class="grid-x grid-margin-x grid-padding-x">
							<div class="section small-12 large-10 large-offset-2 medium-12 cell page-title">
								<h2><?php echo $about_title; ?></h2>
								<div>
			            <?php the_excerpt(); ?>
			            <a class="button" href="<?php the_permalink(); ?>">More <?php the_title(); ?></a>
			          </div>
							</div>
						</div>
					</div>
					<div class="small-12 large-6 medium-6 cell">
								<?php the_post_thumbnail('large'); ?>
					</div>
				</div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
		</div>
  </section>

  <!-- Contact Us -->
	<section class="section">
		<div class="grid-container full">

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

                <div class="text-center callout large">
                  <h2 class="subheader"><?php the_title(); ?></h2>
                </div>
          			<div class="entry-content inner-content grid-x grid-margin-x grid-padding-x align-middle" itemprop="text">

								<div class="image section small-12 large-6 medium-6 cell">
		              <?php the_post_thumbnail('large'); ?>
		            </div>
								<div class="small-12 large-4 medium-6 cell large-offset-1 page-title">
									<div>
                    <?php the_excerpt(); ?>
                  </div>
									<?php
									$contact_submit = get_field('contact_cta_title') ?: 'contact us' ;
                  $contact_form = (
                    do_shortcode("[contact-form-7 id='195' title='Contact form 1' submit 'contact']"));
                  $contact_form_local = (
                    do_shortcode("[contact-form-7 id='162' title='Contact form 1' submit 'contact']"));

                  if($contact_form != '[contact-form-7 404 "Not Found"]') {
                    echo $contact_form;
                  }else if ($contact_form_local != '[contact-form-7 404 "Not Found"]')
									   echo $contact_form_local;
                  ?>
		            </div>
							
	            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
	          endif;
	        }
	      ?>
		</div>
  </section>

	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->
