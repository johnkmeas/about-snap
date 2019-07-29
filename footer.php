<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">	
						<div class="inner-footer grid-x grid-margin-x grid-padding-x">
							<div class="section small-12 medium-4 large-4 cell">
								<nav role="navigation" class="inner-footer grid-x grid-margin-x grid-padding-x">
		    					<?php joints_footer_links(); ?>
		    				</nav>
		    			</div>
	    				<div class="section small-12 medium-4 large-4 cell">
	    					<b>Follow, share and like us!</b>
	    					<?php echo do_shortcode("[Sassy_Social_Share]"); ?>
	    				</div>
	    				 <div class="small-12 medium-4 large-4 cell"><img src="<?php echo get_template_directory_uri() ?>/assets/images/src/about-to-snap-logo-full-light@2x.png" >
  						</div>
							<div class="small-12 medium-12 large-12 cell">
								<p class="source-org copyright text-center">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						 <!-- end #inner-footer -->
						</div>
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->