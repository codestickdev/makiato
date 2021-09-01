<?php

/*
* Block Name: Text-box4
*/

$content4   = get_field('text-box-content4') ?: __('Uzupełnij zawartość bloku', 'makiato');
$colorBg4   = get_field('text-box-bg4');
$btnOn4     = get_field('text-box-padding-on4');
$padding4   = get_field('text-box-padding4');
$image4     = get_field('text-box-bg-img4');
$btnOn4     = get_field('text-box-btn4');
$btnDesc4   = get_field('text-box-btn-desc4');
$url4       = get_field('text-box-url4');
$top4       = get_field('text-box-padding-top4');
    if ($top4) {
        $topPx4 = $top4.'px !important;';
    }
$bottom4    = get_field('text-box-padding-bottom4');
    if ($bottom4) {
        $bottomPx4 = $bottom4.'px !important;';
    }

?>

<style>
    .block-text-box4 {
        background-color: <?php echo $colorBg4; ?>;
        background-image: url('<?php echo $image4; ?>');
        padding-top: <?php echo $topPx4; ?>;
        padding-bottom: <?php echo $bottomPx4; ?>;
        padding: 10.5rem
        <?php
            if ($btnOn4) {
                echo $padding4 . '%';
            } else {
                echo 0;
            }
        ?>;
    }
</style>

<div class="block-text-box4">
    <div class="content4">
        <?php echo $content4; ?>
        <?php
            if ($btnOn4) { ?>
                <div class="btnCenter">
                <a href="<?php echo esc_url( $url4 ); ?>">
                    <button class="btn__light">
                        <?php echo $btnDesc4; ?>
                    </button>
                    <style>
                        .block-text-box4 {
                            padding-bottom: 0 !important;
                        }
                    </style>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
