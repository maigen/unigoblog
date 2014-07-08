					<footer class="footer" role="contentinfo">
					
						<div id="inner-footer" class="row clearfix">
						
							<div class="large-3 large-offset-3 medium-3 medium-offset-3 columns">
								<h4>About Unigo</h4>
								<nav role="navigation">
		    						<?php

										$defaults = array(
											'menu'            => 'footer_about',
											'container'       => 'div',
											'menu_class'      => 'menu',
											'echo'            => true,
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
										);

										wp_nav_menu( $defaults );

									?>
		    					</nav>
		    				</div>

		    				<div class="large-3 medium-3 columns">
		    					<h4>Colleges</h4>
								<nav role="navigation">
		    						<?php

										$defaults = array(
											'menu'            => 'footer_colleges',
											'container'       => 'div',
											'menu_class'      => 'menu',
											'echo'            => true,
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
										);

										wp_nav_menu( $defaults );

									?>
		    					</nav>
		    				</div>

		    				<div class="large-3 medium-3 columns">
		    					<h4>Live Counseling</h4>
								<nav role="navigation">
		    						<?php

										$defaults = array(
											'menu'            => 'live_counseling_footer',
											'container'       => 'div',
											'menu_class'      => 'menu',
											'echo'            => true,
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
										);

										wp_nav_menu( $defaults );

									?>
		    					</nav>
		    				</div>
		    			</div>

		    			<div class="row">
		    				<div class="large-3 large-offset-3 medium-3 medium-offset-3 columns">
								<h4>Membership</h4>
								<nav role="navigation">
		    						<?php

										$defaults = array(
											'menu'            => 'membership_footer',
											'container'       => 'div',
											'menu_class'      => 'menu',
											'echo'            => true,
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
										);

										wp_nav_menu( $defaults );

									?>
		    					</nav>
		    				</div>
		    				<div class="large-3 medium-3 columns">
		    					<h4>Customer Service</h4>
								<nav role="navigation">
		    						<?php

										$defaults = array(
											'menu'            => 'customer_service_footer',
											'container'       => 'div',
											'menu_class'      => 'menu',
											'echo'            => true,
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
										);

										wp_nav_menu( $defaults );

									?>
		    					</nav>
		    				</div>
		    				<div class="large-3 medium-3 columns">
		    					<h4>Absolute Admin</h4>
								<nav role="navigation">
		    						<?php

										$defaults = array(
											'menu'            => 'absolute_admin_footer',
											'container'       => 'div',
											'menu_class'      => 'menu',
											'echo'            => true,
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
										);

										wp_nav_menu( $defaults );

									?>
		    					</nav>
		    				</div>
		    			</div>


		    				<br>
		    				<hr>
			               
			                <div class="large-12 medium-12 columns" id="copyright_text">		
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>		

					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
						
				<!-- all js scripts are loaded in library/joints.php -->
				<?php wp_footer(); ?>
	</body>

</html> <!-- end page -->