<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travlog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
<header id="masthead" class="site-header">
		<div class="frame1">
			<img class="logo-img" src="wp-content/themes/travlog/img/vector.png" alt="logo">
			<h1 class="travlog">Travlog</h1>
		</div>
		<div class="frame2">
			<button onclick="mainNavColor(0)"><a href="#home">Home</a></button>
			<button onclick="mainNavColor(1)"><a href="#discover">Discover</a></button>
			<button onclick="mainNavColor(2)"><a href="#special">Special Deals</a></button>
			<button onclick="mainNavColor(3)"><a href="#contact">Contact</a></button>	
		</div>
		<div class="frame3">
			<button class="login">Log in</button>
			<button class="signup">Sign Up</button>
		</div>
</header><!-- #masthead -->