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
							<div class="section small-12 medium-6 large-6 cell">
								<nav role="navigation" class="inner-footer grid-x grid-margin-x grid-padding-x">
		    					<?php joints_footer_links(); ?>
		    				</nav>
		    			</div>
	    				<div class="section small-12 medium-6 large-6 cell">
	    					<b>Follow, share and like us!</b>
	    					<?php echo do_shortcode("[Sassy_Social_Share]"); ?>
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