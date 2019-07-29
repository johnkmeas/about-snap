<?php
  $size = 'large'; // (thumbnail, medium, large, full or custom size)

  if( $gallery ): ?>
    <ul class="event-gallery slick-slider bg-gallery">
        <?php foreach( $gallery as $image ): ?>
            <li>
              <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>