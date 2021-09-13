<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Makiato
 */

get_header();
?>

	<section class="singlePost">
    	<div class="singlePostBg">
			<h2><?php the_field('singlePost__title');?></h2>
		</div>
		<div class="content">
			<div class="singlePost__info">
				 <?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;
				?> 
				<div class="text">
					<p><?php the_field('singlePost__description'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="blogPostImg" style="background-image: url('<?php the_field('singlePost__bannerCaffee')['url']; ?>')"></section>
	<section class="singlePost">
		<div class="content">
			<div class="singlePost__info">
				<div class="title">
						<h2><?php the_field('singlePost__underBanner__title'); ?></h2>
				</div>
				<div class="text">
					<p><?php the_field('singlePost__underBanner__description'); ?></p>
				</div>
			</div>
			<div class="singlePost__gallery">
				<div class="left">
					<img src="<?php the_field('singlePost__firstImg')['url']; ?>" alt="<?php the_field('singlePost__firstImg')['alt'] ?>">
				</div>
				<div class="right">
					<img src="<?php the_field('singlePost__secImg')['url']; ?>" alt="<?php the_field('singlePost__secImg')['alt'] ?>">
				</div>
			</div>
			<div class="singlePost__info">
				<div class="text">
					<p><?php the_field('singlePost__underImg__description');?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="blogPost">
		<div class="content">
			<div class="posts">
				<h2>zobacz inne nasze wpisy</h2>
				<div class="content__post">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'post', 'order' => 'ASC' ,'posts_per_page' => 2, 'paged' => $paged );
						$wp_query = new WP_Query($args);
						while ( have_posts() ) : the_post(); ?>
						<div class="box">
							<a href="<?php the_permalink() ?>">
								<div class="img">
									<div class="data">
										<?php echo get_the_date('d.m Y'); ?>
									</div>
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="title">
									<p><?php the_title() ?></p>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
<?php
get_sidebar();
get_footer();
