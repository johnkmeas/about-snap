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

      if( !empty($image) ):

      	// vars
      	$url = $image['url'];
      	$title = $image['title'];
      	$alt = $image['alt'];
      	$caption = $image['caption'];

      	// thumbnail
      	$size = 'large';
      	$thumb = $image['sizes'][ $size ];
      	$width = $image['sizes'][ $size . '-width' ];
      	$height = $image['sizes'][ $size . '-height' ];
      endif;

      if ($i % 2 == 0) {
        $order_a = 'medium-order-1';
        $order_b = 'medium-order-2';
        $offset = 'large-offset-2';
      }else {
        $order_a = 'medium-order-2';
        $order_b = 'medium-order-1';
        $offset = '';
      }
      ?>
      <div class="entry-content inner-content grid-x grid-margin-x grid-padding-x align-middle" itemprop="text">
        <div class="small-12 large-6 medium-6 cell <?php echo $order_a; ?>">
          <div class="grid-x grid-margin-x grid-padding-x">
            <div class="small-12 large-10 <?php echo $offset; ?> medium-12 cell page-title">
              <?php echo $content; ?>
            </div>
          </div>
        </div>
        <div class="small-12 large-6 medium-6 cell <?php echo $order_b; ?>">
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
