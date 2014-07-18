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

		<link href="/wp_unigoblog/wp-content/themes/unigoblog/stylesheets/screen.css" rel="stylesheet"/>


	</head>

	<body <?php body_class(); ?>>

	<div class="off-canvas-wrap" data-offcanvas>
        <div id="background-container">
    		<div class="inner-wrap">
    			<div id="container_12">
    				<header class="header_container_12" role="banner">
    					<div id="inner-header" class="row collapse">
                            <!-- LOGO -->
                            <div class="large-3 columns medium-3 columns" id="logo">
                                <a href="http://www.unigo.com/blog"><img src="/wp_unigoblog/unigoLogo.gif" width="158" height="72" /></a> 
                            </div>

                            <!-- "BECOME A MEMBER" DROPDOWN -->
                            <div class="large-9 medium-9 columns hide-for-small" id="register_div">
                                
                                <nav role="signup_nav">  
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
                                        'items_wrap'      => '<a href="#" data-dropdown="hover1" data-options="is_hover:true">become a member</a>
                                                                <ul id="hover1" class="f-dropdown" data-dropdown-content>
                                                                    <li></li>
                                                                    %3$s
                                                                    </ul>',
                                        'depth'           => 0,
                                        'walker'          => ''
                                    );

                                    wp_nav_menu( $defaults );
                                    ?>
                                </nav>
                                <!-- "SIGN IN" BUTTON  -->
                                <div class="hide-for-small" id="signin_nav">
                                    <a id="loginlogout" class="orange-link" href="/Login.aspx">sign in</a>
                                </div>  
                            </div>     

                            <div class="clear"></div>

                            <div class="show-for-small">
                            <?php get_template_part( 'partials/nav', 'offcanvas' ); ?> 
                            </div>
                            
                            
                         <!-- HORIZONTAL LINKS -->
                            <div class="large-12 columns medium-12 columns" id="nav_header_box">
                            <?php get_template_part( 'partials/nav', 'topbar' ); ?>
                            </div>

                             <div class="small-12 columns hide-for-small">
                               <ul class="example-orbit" data-orbit>
                                 <li>
                                   <img src="uci-aldrich.jpg" alt="slide 1" />
                                   <div class="orbit-caption">
                                     Caption One.
                                   </div>
                                 </li>
                                 <li class="active">
                                   <img src="uci-aldrich.jpg" alt="slide 1" />
                                   <div class="orbit-caption">
                                     Caption Two.
                                   </div>
                                 </li>
                                 <li>
                                   <img src="uci-aldrich.jpg" alt="slide 1" />
                                   <div class="orbit-caption">
                                     Caption Three.
                                   </div>
                                 </li>
                               </ul>
                             </div>
    					</div> <!-- end #inner-header -->
				</header> <!-- end header -->
