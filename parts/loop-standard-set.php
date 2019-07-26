
<?php
if( have_rows('event_set') ): ?>
  <ul class="slides">
    <?php while( have_rows('event_set') ): the_row();
      $content = get_sub_field('content');
      $custom_title = get_sub_field('title');
      if( $content ):

      $post = $content;
      setup_postdata( $post );
    ?>
      <div>
        <h3><a href="<?php the_permalink(); ?>"><?php echo $custom_title; ?></a></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Our <?php the_title(); ?> Events</a>
      </div>
      <div>
        <?php the_post_thumbnail(); ?>
      </div>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
  <?php endwhile; ?>
  </ul>
<?php endif; ?>
