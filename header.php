<!DOCTYPE html>
<html class="no-js" <?php language_attributes() ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?>>
		<?php wp_body_open() ?>
		<header>
			<a href="/">
				<?php
					$image = get_field('logo-header', 'option');
					$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</a>





			<nav role="navigation">
				<div id="menuToggle" onclick="showMenu()">
					<input type="checkbox" />

					<span></span>
					<span></span>
					<span></span>

					<ul id="menu">
						<div class="tit"></div>
						<?php
							wp_nav_menu(
							array(
								'theme_location' => 'top-menu',
								'container'     => '',
								'items_wrap'    => '%3$s',
								'before'        => '<div class="top-menu">',
								'after'         => '</div>',
							)
						);?>
					</ul>
					<script>
						function showMenu() {
							var x = document.getElementById("menu");
							if (x.classList.contains("show")) {
								x.classList.remove("show");
							} else {
								x.classList.add("show");
							}
						}
					</script>
				</div>
			</nav>















		</header>
