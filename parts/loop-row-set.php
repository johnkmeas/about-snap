<?php
  if( have_rows($set) ): ?>
    <div class="grid-container">
      <div class="grid-x grid-padding-x medium-up-3" itemprop="text">
          <?php while( have_rows($set) ): the_row();
            $content = get_sub_field('content');
            $image = get_sub_field('image');
            if( !empty($image) ): ?>
              <div class="cell">
                <div class="card card-feature">
                  <div class="grid-x grid-padding-x align-center">
                    <img class="" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt'] ?>" />
                  </div>
                  <div class="card-section">
                    <?php echo $content; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>
