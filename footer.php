						<footer class="footer" role="contentinfo">
						
							<div class="row clearfix">

								<div class="large-3 medium-3 columns">
									<div id="footer-logo">
										<img src="/wp_unigoblog/unigoLogo.gif">
									</div>
									<br>

									<!-- social media icons here -->
									<ul class="social-networks">
										<li class="facebook">
											<a href="https://www.facebook.com/myunigo" target="_blank">facebook</a>
										</li>
										<li class="twitter">
											<a href="https://twitter.com/unigo" target="_blank">twitter</a>
										</li>
									</ul>
								</div>


							
								<div class="large-3 medium-3 columns">
									<h5>About Unigo</h5>
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
			    					<h5>Colleges</h5>
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
			    					<h5>Live Counseling</h5>
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
									<h5>Membership</h5>
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
			    					<h5>Customer Service</h5>
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
			    					<h5>Absolute Admit&#8482;</h5>
									<nav role="navigation">
			    						<?php

											$defaults = array(
												'menu'            => 'absolute_admit_footer',
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
				               
				                <div class="large-12 medium-12 columns" id="copyright_text">		
									<p class="source-org copyright">Copyright © 2014 Unigo. All rights reserved.</p>
								</div>		

						</footer> <!-- end .footer -->
					</div> <!-- end #container -->
				</div> <!-- end .inner-wrap -->
			</div>
		</div> <!-- end .off-canvas-wrap -->
						
				<!-- all js scripts are loaded in library/joints.php -->
				<?php wp_footer(); ?>
	</body>

</html> <!-- end page -->