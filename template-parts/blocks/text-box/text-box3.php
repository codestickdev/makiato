<?php

/*
* Block Name: Text-box3
*/

$content3   = get_field('text-box-content3') ?: __('Uzupełnij zawartość bloku', 'makiato');
$colorBg3   = get_field('text-box-bg3');
$btnOn3     = get_field('text-box-padding-on3');
$padding3   = get_field('text-box-padding3');
$image3     = get_field('text-box-bg-img3');
$btnOn3     = get_field('text-box-btn3');
$btnDesc3   = get_field('text-box-btn-desc3');
$url3       = get_field('text-box-url3');
$top3       = get_field('text-box-padding-top3');
    if ($top3) {
        $topPx3 = $top3.'px !important;';
    }
$bottom3    = get_field('text-box-padding-bottom3');
    if ($bottom3) {
        $bottomPx3 = $bottom3.'px !important;';
    }

?>

<style>
    .block-text-box3 {
        background-color: <?php echo $colorBg3; ?>;
        background-image: url('<?php echo $image3; ?>');
        padding-top: <?php echo $topPx3; ?>;
        padding-bottom: <?php echo $bottomPx3; ?>;
        padding: 10.5rem
        <?php
            if ($btnOn3) {
                echo $padding3 . '%';
            } else {
                echo 0;
            }
        ?>;
    }
</style>

<div class="block-text-box3">
    <div class="content3">
        <?php echo $content3; ?>
        <?php
            if ($btnOn3) { ?>
                <div class="btnCenter">
                <a href="<?php echo esc_url( $url3 ); ?>">
                    <button class="btn__light">
                        <?php echo $btnDesc3; ?>
                    </button>
                    <style>
                        .block-text-box3 {
                            padding-bottom: 0 !important;
                        }
                    </style>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
