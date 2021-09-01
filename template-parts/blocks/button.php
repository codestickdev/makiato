<?php
/*
 * Block Name: Button
 */

$btnContent = get_field('block-btn-content') ?: __('Uzupełnij zawartość bloku', 'makiato');
$btnUrl     = get_field('block-btn-url');
$btnTarget  = get_field('block-btn-target');
$btnColor   = get_field('block-btn-color');
$btnBg      = get_field('block-btn-bg');
$btnColorH  = get_field('block-btn-color-hover');
$btnBgH     = get_field('block-btn-bg-hover');

?>

<div class="btnCenter">
  <a <?php if ($btnTarget == 1) { echo 'target="_blank"'; } ?> href="<?php echo esc_url($btnUrl); ?>">
    <button class="btn__acf">
      <style>
        .btn__acf {
          color: <?php echo $btnColor; ?>;
          background: <?php echo $btnBg; ?>;
        }
        .btn__acf:hover {
          color: <?php echo $btnColorH; ?>;
          background: <?php echo $btnBgH; ?>;
        }
      </style>
      <?php echo $btnContent . '<span>&#10095;</span>'; ?>
    </button>
  </a>
</div>
