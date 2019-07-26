
<?php
if( have_rows('event_set') ):
  $i = 0;
  ?>
  <ul class="slides">
    <?php while( have_rows('event_set') ): the_row();
      $i++;
      $content = get_sub_field('content');
      $custom_title = get_sub_field('title');
      if( $content ):
        if ($i % 2 == 0) {
          $order_a = 'medium-order-2';
          $order_b = 'medium-order-1';
          $offset = '';
        }else {
          $order_a = 'medium-order-1';
          $order_b = 'medium-order-2';
          $offset = 'large-offset-2';
        }
        $post = $content;
        setup_postdata( $post );
      ?>

        <div class="entry-content inner-content grid-x grid-margin-x grid-padding-x align-middle align-center" itemprop="text">
          <div class="small-12 large-6 medium-6 cell <?php echo $order_a; ?>">
            <div class="grid-x grid-margin-x grid-padding-x">
              <div class="small-12 large-10 <?php echo $offset; ?> medium-12 cell page-title">
                <h3><a href="<?php the_permalink(); ?>"><?php echo $custom_title; ?></a></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Our <?php the_title(); ?> Events</a>
              </div>
            </div>
          </div>
          <div class="small-12 large-6 medium-6 cell <?php echo $order_b; ?>">
                <?php the_post_thumbnail('large'); ?>
          </div>
        </div>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
  <?php endwhile; ?>
  </ul>
<?php endif; ?>
