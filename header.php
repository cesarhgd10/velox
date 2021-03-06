<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package velox
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="top-header">
			<div class="container">
				<div class="col-sm-12 col-md-6">
					<div class="contact">
						<i class="fa fa-envelope"></i><span>velox@velox.com</span>
						<i class="fa fa-phone"></i><span>(04) 3100-1660</span>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="social">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="main-header">
			<nav class="navbar navbar-default">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
						<div class="logo-container">
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo('name') ); ?>" rel="home">
		        		<img class="logo-holder" src="<?php echo esc_url( get_theme_mod( 'ptf_logo', get_template_directory_uri() . '/assets/img/logo.png' ) );?>"
								alt="<?php echo esc_attr( get_bloginfo('name') ); ?>">
		          </a>
						</div>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav navbar-right', 'container' => 'ul' ) ); ?>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</header><!-- #masthead -->

	<div class="slider">
		<img src="<?php echo get_template_directory_uri() . '/assets/img/Slider.png'  ?>" alt="" />
	</div>

	<div id="content" class="site-content">
