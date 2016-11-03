<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!--
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="stylesheet" href="gg-content/themes/foundation-6-bones/library/css/app.css">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    	<p>header</p>

    <!--
	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<?php wp_nav_menu(array(
		         'container' => false,                           // remove nav container
		         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
		         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
		         'menu_class' => 'nav top-nav cf',               // adding custom nav class
		         'theme_location' => 'main-nav',                 // where it's located in the theme
		         'before' => '',                                 // before the menu
	               'after' => '',                                  // after the menu
	               'link_before' => '',                            // before each link
	               'link_after' => '',                             // after each link
	               'depth' => 0,                                   // limit the depth of the nav
		         'fallback_cb' => ''                             // fallback function (if there is one)
		)); ?>
	</nav>
    -->