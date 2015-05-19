<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Get nAiled</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
	<?php wp_head(); ?>
</head>
<body>
	<nav id="main-nav">
		<ul>

			<li id="nav-logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" height="50px" width="auto"></a></li>
		</ul>
	<?php wp_nav_menu( array('container_class' => 'menu-header', 'theme_location' => 'header-menu', 'link_after' => '<span></span>' ) ); ?>
		
	</nav>
	<div id="page-wrapper">
		<div id="background-texture"></div>