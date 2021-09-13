<?php
 /** 
    * Template name: Blog
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg blog">
        <div class="logo">
        <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
        </div>
    </div>
    <div class="content blogText">
        <div class="text__box">
            <div>
                <h1><?php the_field('blog__title'); ?></h1>
                <p><?php the_field('blog__description');?> </p>
            </div>
        </div>
</section>
<section>
    <div class="blogInfo">
        <p><?php the_field('blog__banner');?></p>
    </div>
</section>
<section class="sectionContent">
    <div class="content">
        <div class="posts">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'post_type' => 'post', 'order' => 'ASC' ,'posts_per_page' => 4, 'paged' => $paged );
            $wp_query = new WP_Query($args); ?>
            <div class="content__post">
                <?php while ( have_posts() ) : the_post(); ?>
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
            <div class="pagination">
                <?php pagination(); ?>
            </div>
        </div>
</section>

<?php get_footer() ?>