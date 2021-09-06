<?php
 /** 
    * Template name: Blog
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg blog"></div>
    <div class="content">
    <div class="text__box">
        <div>
            <h1>kawowy blog</h1>
            <p>Podwójne espresso newsów i wskazówek </p>
        </div>
    </div>
</section>
<section>
<div class="blogInfo">
    <p>Jaki bar kawowy na wesele jest najlepszy?
    </br>					
        Czym różni się macchiato od flat white?						
        </br>
        Dlaczego dobry barista na wesele zapewnia więcej niż pyszną kawę?
    </p>
</div>
</section>
<section class="sectionContent">
    <div class="content">
    <div class="posts">
        <div class="content__post">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array( 'post_type' => 'post', 'order' => 'ASC' ,'posts_per_page' => 4, 'paged' => $paged );
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
        <div class="pagination">
            <?php next_posts_link( '&larr; old', $wp_query ->max_num_pages); ?>
            <?php previous_posts_link( 'new &rarr;' ); ?>
        </div>
    </div>
</section>

<?php get_footer() ?>
