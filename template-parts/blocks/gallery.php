<?php
/*
* Block Name: Gallery
*/
?>

<div class="block-gallery">
  <div class="images">
    <?php
      //Setup variables
      $gallery = get_field('block-gallery');
      $images = [];

      $items_per_page = 4;
      $total_items = count($gallery);
      $total_pages = ceil($total_items / $items_per_page);

        if (get_query_var('paged')) {
          $current_page = get_query_var('paged');
        } elseif (get_query_var('page')) {
          $current_page = get_query_var('page');
        } else {
          $current_page = 1;
        }

      $starting_point = ($current_page - 1) * $items_per_page;

      // Get elements for current page
      if ($gallery) {
        $images = array_slice($gallery, $starting_point, $items_per_page);
      }

      if (!empty($images)) {
        foreach( $images as $image_id ) : ?>
          <div class="image">
            <a href="#<?php echo $image_id; ?>">
              <img src="<?php echo wp_get_attachment_image_url( $image_id, $size ); ?>">
            </a>
            <a href="#image" class="lightbox" id="<?php echo $image_id; ?>">
              <span style="background-image: url('<?php echo wp_get_attachment_image_url( $image_id, $size ); ?>"></span>
            </a>
          </div>
        <?php
        endforeach;
      }
    ?>
  </div>

  <div class="pagination">
  <?php
  // Pagination
  $big = 999999999;
  echo paginate_links([
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => $current_page,
    'total' => $total_pages,
    'before_page_number' => '<span class="screen-reader-text">' . __('Page ', 'makiato') . ' </span>',
  ]);
  ?>
  </div>

  <div class="btnCenter">
    <a href="#">
      <button class="btn__dark">
        <?php echo _e('Zobacz ofertę >', 'makiato'); ?>
      </button>
    </a>
  </div>
</div>



<!--
<div class="block-gallery">
  < ?php
    $images = get_field('block-gallery');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $images ):
      foreach( $images as $image_id ) : ?>
        <div class="image">
          <a href="#< ?php echo $image_id; ?>">
            <img src="< ?php echo wp_get_attachment_image_url( $image_id, $size ); ?>">
          </a>
          <a href="#image" class="lightbox" id="< ?php echo $image_id; ?>">
            <span style="background-image: url('< ?php echo wp_get_attachment_image_url( $image_id, $size ); ?>"></span>
          </a>
        </div>
      < ?php
      endforeach;
    endif;
  ?>
</div>
-->
