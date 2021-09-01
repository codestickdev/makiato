<?php
/*
* Page/s: HOME
*/
?>

<?php get_header() ?>
<div class="page-home">
    <img src="<?php the_field('home-image'); ?>">
    <div class="container">
        <div class="part-up">
            xxx
        </div>
        <div class="part-down">
            <div class="home-content">
                <?php the_field('home-content'); ?>
                <img src="<?php the_field('home-icon'); ?>">
            </div>
        </div>
    </div>
</div>
<?php the_content(); ?>
<?php get_footer() ?>
