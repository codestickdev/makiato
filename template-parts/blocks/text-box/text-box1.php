<?php

/*
* Block Name: Text-box1
*/

$content1   = get_field('text-box-content1') ?: __('Uzupełnij zawartość bloku', 'makiato');
$colorBg1   = get_field('text-box-bg1');
$btnOn1     = get_field('text-box-padding-on1');
$padding1   = get_field('text-box-padding1');
$image1     = get_field('text-box-bg-img1');
$btnOn1     = get_field('text-box-btn1');
$btnDesc1   = get_field('text-box-btn-desc1');
$url1       = get_field('text-box-url1');
$top1       = get_field('text-box-padding-top1');
    if ($top1) {
        $topPx1 = $top1.'px !important;';
    }
$bottom1    = get_field('text-box-padding-bottom1');
    if ($bottom1) {
        $bottomPx1 = $bottom1.'px !important;';
    }
?>

<style>
    .block-text-box1 {
        background-color: <?php echo $colorBg1; ?>;
        background-image: url('<?php echo $image1; ?>');
        padding-top: <?php echo $topPx1; ?>;
        padding-bottom: <?php echo $bottomPx1; ?>;
        padding: 10.5rem
        <?php
            if ($btnOn1) {
                echo $padding1 . '%';
            } else {
                echo 0;
            }
        ?>;
    }
</style>

<div class="block-text-box1">
    <div class="content1">
        <?php echo $content1; ?>
        <?php
            if ($btnOn1) { ?>
            <div class="btnCenter">
                <a href="<?php echo esc_url( $url1 ); ?>">
                    <button class="btn__light">
                        <?php echo $btnDesc1; ?>
                    </button>
                    <style>
                        .block-text-box1 {
                            padding-bottom: 0 !important;
                        }
                    </style>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
