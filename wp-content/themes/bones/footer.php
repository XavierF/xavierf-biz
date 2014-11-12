<div class="push"></div>		
</div><!--  end wrapper -->
			<footer class="footer cf" role="contentinfo">

				<div class="container-fluid cf">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>

					<nav role="navigation" class="ftr">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

				</div><!-- end container-fluid -->

			</footer>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
		<?php wp_footer(); ?>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('#menu-mainmenu').slicknav({
					label: '',
					easingOpen: 'swing',
					easingClose: 'swing'
				});
				$('.slides').slick({
				autoplay: false,
				dots: true,
				fade: true,
				autoplaySpeed: 6000,
				speed: 5000,
  		swipe: true	
				});
			});
			</script>

	</body>
</html> <!-- end of site. what a ride! -->
