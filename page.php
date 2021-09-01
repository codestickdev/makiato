<?php
/*
* Page/s: PAGE
*/
?>

<?php get_header() ?>

<div class="page-header">
  <img src="<?php the_post_thumbnail_url (); ?>">
</div>

<?php the_content(); ?>
<?php get_footer() ?>
