<?php
/*
* Page/s: PAGE
*/
?>

<?php get_header() ?>

  <div class="temporary">
    <span>Single</span> | Strona wpisu
    <?php the_post_thumbnail(); ?>
    <h1><?php the_title(); ?></h1>
    <h2><?php the_content(); ?></h2>
  </div>

<?php get_footer() ?>
