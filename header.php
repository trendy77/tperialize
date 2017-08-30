<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tperialize
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo bloginfo('name');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>

<body>
<header>
<div class="container">
	<div class="m-container nav">
 		<nav id="site-navigation" class="main-navigation" role="navigation">
 			<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
 				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu side-nav', 'menu_id' => 'mobile-nav','items_wrap' => '<ul id="%1$s" class="%2$s"><li class="mobile-header"><p>Menu</p></li>%3$s</ul><div class="clear"></div>', ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'hide-on-med-and-down' ) ); ?>
 		 </nav><!-- #site-navigation -->
	 </div>
<div class="container"> <?php addLikein(); ?> </div>
<div class="container"> <?php addSignin(); ?> </div>
</header><!-- #masthead -->