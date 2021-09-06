<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Makiato
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php makiato_post_thumbnail(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
