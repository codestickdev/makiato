<?php

/*
* Block Name: Text-box2
*/

$content2   = get_field('text-box-content2') ?: __('Uzupełnij zawartość bloku', 'makiato');
$colorBg2   = get_field('text-box-bg2');
$btnOn2     = get_field('text-box-padding-on2');
$padding2   = get_field('text-box-padding2');
$image2     = get_field('text-box-bg-img2');
$btnOn2     = get_field('text-box-btn2');
$btnDesc2   = get_field('text-box-btn-desc2');
$url2       = get_field('text-box-url2');
$top2       = get_field('text-box-padding-top2');
    if ($top2) {
        $topPx2 = $top2.'px !important;';
    }
$bottom2    = get_field('text-box-padding-bottom2');
    if ($bottom2) {
        $bottomPx2 = $bottom2.'px !important;';
    }
?>

<style>
    .block-text-box2 {
        background-color: <?php echo $colorBg2; ?>;
        background-image: url('<?php echo $image2; ?>');
        padding-top: <?php echo $topPx2; ?>;
        padding-bottom: <?php echo $bottomPx2; ?>;
        padding: 10.5rem
        <?php
            if ($btnOn2) {
                echo $padding2 . '%';
            } else {
                echo 0;
            }
        ?>;
    }
</style>

<div class="block-text-box2">
    <div class="content2">
        <?php echo $content2; ?>
        <?php
            if ($btnOn2) { ?>
                <div class="btnCenter">
                <a href="<?php echo esc_url( $url2 ); ?>">
                    <button class="btn__light">
                        <?php echo $btnDesc2; ?>
                    </button>
                    <style>
                        .block-text-box2 {
                            padding-bottom: 0 !important;
                        }
                    </style>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
