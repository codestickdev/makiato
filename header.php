<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Makiato
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
	<header>
		<div class="menu container">
			<nav class="menuDesktop">
				<ul>
					<?php wp_nav_menu ( 
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu1',
							'menu_class' => 'menuDesktop__items'
							)
						)
					?>
				</ul>
			</nav>
			<nav class="menuMobile">
				<ul>
					<?php wp_nav_menu ( 
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu1',
							'menu_class' => 'menuDesktop__items'
							)
						)
					?>
				</ul>
			</nav>
		</div>
	</header>
	<!-- #masthead -->
