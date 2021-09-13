<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Makiato
 */
?>

	<footer>
		<div class="text">
			<h1><?php the_field('footer__title', 'option');?></h1>
			<p><?php the_field('footer_description', 'option');?></p>
		</div>
		<div class="socialMedia">
			<div>
				<a href="tel:#" class="tel">
					<img src="<?php echo get_template_directory_uri() . '/images/icons/phone.svg'?>" alt="phone">
					<?php the_field('footer__telNumber', 'option');?>
				</a>
			</div>
			<div>
				<a href="mailto:xyz" class="email">
					<img src="<?php echo get_template_directory_uri() . '/images/icons/mail.svg'?>" alt="email">
					<?php the_field('footer__email', 'option');?>
				</a>
			</div>
			<div class="media">
				<div class="insta">
					<a href="<?php the_field('footer_insta', 'option')['url'];?>">
						<img src="/wp-content/themes/makiato/images/icons/insta.png'" alt="insta">
					</a>
				</div>
				<div class="fb">
					<a href="<?php the_field('footer_fb', 'option')['url'];?>">
						<img src="/wp-content/themes/makiato/images/icons/FB.png'" alt="facebook">
					</a>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
