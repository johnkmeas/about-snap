<div  class="grid-container full">
  <div class="hero entry-content inner-content grid-x grid-margin-x grid-padding-x align-middle" itemprop="text">

    <div class="small-12 large-6 medium-6 cell">
      <div class="grid-x grid-margin-x grid-padding-x align-middle">
        <div class="section small-12 large-10 large-offset-2 medium-12 cell page-title">
          <?php echo $hero_content; ?>
        </div>
      </div>
    </div>
    <div class="small-12 large-6 medium-6 cell">
    
      <?php
        if($media_type == 'mp4'){?>
        <video controls autoplay muted>

          <source src="<?php echo $hero_media; ?>"
                  type="video/mp4">

          Sorry, your browser doesn't support embedded videos.
        </video>
      <?php } else {
        echo $hero_media; 
      } 
      ?>
    </div>
  </div>
</div>