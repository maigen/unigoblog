<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->
		<link href="/wp_maigen/wp-content/themes/JointsWP-master/stylesheets/screen.css" rel="stylesheet"/>
	</head>

	<body <?php body_class(); ?>>

	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			<div id="container_12">
				<header class="header_container_12" role="banner">
					<div id="inner-header" class="row">
                        <div class="large-3 columns" id="logo">
                            <img src="http://www.unigo.com/Content/CSS/Images/logo.gif" width="158" height="72" />
                        </div>

                        <div class="large-3 large-offset-5 columns" id="signup_nav">
                            <!-- top-area -->
                            <nav role="signup_nav" data-dropdown="drop1">  
                                <?php
                                
                                $defaults = array(
                                    'theme_location'  => '',
                                    'menu'            => 'sign_up_nav',
                                    'container'       => 'div',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul><li id="item-id">become a member</li>%3$s</ul>','<ul id="drop1" data-dropdown-content class="f-dropdown">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => ''
                                );

                                wp_nav_menu( $defaults );
                                ?>
                            </nav>  
                        </div>                              
                        <div class="large-1 columns" id="signin_nav">
                            <a id="loginlogout" class="orange-link" href="/Login.aspx">sign in</a>
                        </div>

                        <div class="clear"></div>

						 <?php // get_template_part( 'partials/nav', 'offcanvas' ); ?> 

						 <?php get_template_part( 'partials/nav', 'topbar' ); ?>

						 <?php // get_template_part( 'partials/nav', 'offcanvas-sidebar' ); ?>

						<!-- You only need to use one of the above navigations.
							 Offcanvas-sidebar adds a sidebar to a "right" offcanavas menus. -->

                             <div class="large-12 columns" id="big_black_box">
                                 <?php the_title('<h1>', '</h1>'); ?>
                             </div>



					</div> <!-- end #inner-header -->

				</header> <!-- end header -->