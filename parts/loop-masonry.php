<?php
  $size = 'full'; // (thumbnail, medium, large, full or custom size)

  if( $gallery ): ?>
    <div class="masonry-css">

        <?php foreach( $gallery as $image ): ?>
          <div class="masonry-css-item">
            <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
          </div>
        <?php endforeach; ?>


    </div>
<?php endif; ?>