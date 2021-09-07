<?php
 /** 
    * Template name: Blog
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg blog">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . '/images/Logo.svg'?>" alt="makiato">
        </div>
    </div>
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
            <div class="pagination">
                <?php 
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                    $args = array(  
                        'post_type' => 'post',
                        'posts_per_page'         => '4',
                        'paged'                  => $paged
                    );
                    query_posts( $args );
                    $posts= get_posts( $args );
		    if ($posts) {
			    ?>
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
                <?php
                    the_posts_pagination( array(
                        'mid_size'=>3,
                        'prev_text' => _( ' Previous'),
                        'next_text' => _( 'Next »'),
                        ) );
                    }
                else{
                    echo '<p>No post found..</p>';
                }
                ?>
            </div>
        </div>
</section>

<?php get_footer() ?>