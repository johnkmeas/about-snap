<?php
  if( have_rows($set) ): ?>
    <div class="entry-content inner-content grid-x grid-margin-x grid-padding-x" itemprop="text">
        <?php while( have_rows($set) ): the_row(); 
        $content = get_sub_field('content');
        ?>
            <div class="small-12 large-4 medium-4 cell">
            <?php 
                $image = get_sub_field('image');
                if( !empty($image) ): ?>
                <img class="thumbnail" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endif; ?>
                <?php echo $content; ?>
            </div>
        <?php endwhile; ?>
    </div>
  <?php endif; ?>
 
