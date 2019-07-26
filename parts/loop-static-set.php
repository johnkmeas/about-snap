<?php
  if( have_rows($set) ):
    $i = 0;
    ?>
    <?php while( have_rows($set) ): the_row();
      $i++;
      $first_grid = '';
      $second_grid = '';
      $content = get_sub_field('content');
      $image = get_sub_field('image');
      $image_output = '';
      if( !empty($image) ) {
        $image_url = $image['url'];
        $image_alt = $image['alt'];
        $image_output = '<img class="thumbnail" src="'. $image_url .'" alt="' . $image_alt . '" />';
      }

      if(($i % 2 ) == 0) {
        $first_grid = $content;
        $second_grid = $image_output;
      } else {
        $first_grid = $image_output;
        $second_grid = $content;
      }

      ?>

      <div class="entry-content inner-content grid-x grid-margin-x grid-padding-x" itemprop="text">
        <div class="small-12 large-6 medium-6 cell">
          <?php echo $first_grid ?>
        </div>
        <div class="small-12 large-6 medium-6 cell">
          <?php echo $second_grid; ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
