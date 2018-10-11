<?php
/**
 * Header Template
 *
 * @file           header.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0
 */
?>

<!DOCTYPE html>
	<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
  <!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
  <!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
  <!--[if (gte IE 9)|!(IE)]>--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
  <head>
		<meta charset="<?php bloginfo('charset'); ?>">
		
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!--[if lt IE 9]>
      <script src="<?php get_template_directory_uri()?>/js/html5shiv.min.js"></script>
      <script src="<?php get_template_directory_uri()?>/js/respond.min.js"></script>
    <![endif]-->

		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-dd">
			<div class="container-fluid">
		    <div class="navbar-header">
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
			      <span class="sr-only"><?php bloginfo('title'); ?></span>
		      </a>
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		    </div>
		    
				<?php 
					wp_nav_menu(array(
            'menu'              => 'header-menu',
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()
					));
				?>		
			</div>
		</nav>