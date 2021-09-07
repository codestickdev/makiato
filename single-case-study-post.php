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
			<h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero autem et doloremque deserunt, molestias pariatur repellat nam! Fugit incidunt illo totam, quia temporibus vitae nostrum esse nemo quaerat tempore alias.
            </h2>
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
					<p>
						Augue eget tristique egestas non pulvinar egestas posuere. Elit eget quisque duis dis tortor feugiat. Quam consequat cum lorem vulputate. Risus nisi nulla ornare odio tortor, massa mauris risus pellentesque. Odio vel nulla arcu vestibulum ac. Aliquet dui risus arcu sit phasellus. Netus dolor commodo pretium neque varius ullamcorper leo, mi amet.
						Blandit ullamcorper gravida euismod vulputate. In aliquam euismod ut lectus. Nulla fermentum nunc, nisl ornare ac. Sit proin enim et scelerisque congue.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="blogPostImg"></section>
	<section class="singlePost">
		<div class="content">
			<div class="singlePost__info">
				<div class="title">
						<h2>Blandit ullamcorper gravida euismod vulputate. In aliquam euismod ut lectus. Nulla fermentum nunc, nisl ornare ac. Sit proin enim et scelerisque congue.</h2>
				</div>
				<div class="text">
					<p>
						Augue eget tristique egestas non pulvinar egestas posuere. Elit eget quisque duis dis tortor feugiat. Quam consequat cum lorem vulputate. Risus nisi nulla ornare odio tortor, massa mauris risus pellentesque. Odio vel nulla arcu vestibulum ac. Aliquet dui risus arcu sit phasellus. Netus dolor commodo pretium neque varius ullamcorper leo, mi amet.
						Blandit ullamcorper gravida euismod vulputate. In aliquam euismod ut lectus. Nulla fermentum nunc, nisl ornare ac. Sit proin enim et scelerisque congue.
					</p>
				</div>
			</div>
			<div class="singlePost__gallery">
				<div class="left"></div>
				<div class="right"></div>
			</div>
			<div class="singlePost__info">
				<div class="text">
					<p>
						Faucibus interdum nibh imperdiet sagittis. Dui quisque venenatis donec neque. Id mus nunc fringilla odio. Nibh lorem pharetra elit turpis euismod sit malesuada leo, vulputate. Eu varius sapien dui, sit erat ornare eget. Feugiat ultrices enim, purus diam sit risus. Urna maecenas velit integer vitae erat magnis. Amet sit aliquam bibendum magna.
					</p>
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
