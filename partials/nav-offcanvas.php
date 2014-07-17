<div class="large-12 columns show-for-medium-up" id="navigation_bar">


		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->

		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<!-- Title Area -->

				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>		
			<section class="top-bar-section">
				<?php joints_main_nav(); ?>
			</section>
		</nav>

</div>

<div class="large-12 columns show-for-small-only">
	<div class="contain-to-grid">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				<!-- <h1 class="title"><?php bloginfo('name'); ?></h1> -->
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li><label>Unigo</label></li>
			<?php joints_main_nav(); ?> 
		<li><a href="#">Become a Member</a></li>
		<li><a href="#">Sign In</a></li>

	</ul>
</aside>
			
<a class="exit-off-canvas"></a>