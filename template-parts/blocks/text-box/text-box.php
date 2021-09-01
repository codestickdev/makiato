<?php

/*
* Block Name: Text-box
*/

$content   = get_field('text-box-content') ?: __('Uzupełnij zawartość bloku', 'makiato');
$colorBg   = get_field('text-box-bg');
$btnOn     = get_field('text-box-padding-on');
$padding   = get_field('text-box-padding');
$image     = get_field('text-box-bg-img');
$btnOn     = get_field('text-box-btn');
$btnDesc   = get_field('text-box-btn-desc');
$url       = get_field('text-box-url');
$top       = get_field('text-box-padding-top');
    if ($top) {
        $topPx = $top.'px !important;';
    }
$bottom    = get_field('text-box-padding-bottom');
    if ($bottom) {
        $bottomPx = $bottom.'px !important;';
    }
?>

<style>
    .block-text-box {
        background-color: <?php echo $colorBg; ?>;
        background-image: url('<?php echo $image; ?>');
        padding-top: <?php echo $topPx; ?>;
        padding-bottom: <?php echo $bottomPx; ?>;
        padding: 10.5rem
        <?php
            if ($btnOn) {
                echo $padding . '%';
            } else {
                echo 0;
            }
        ?>;
    }
</style>

<div class="block-text-box">
    <div class="content">
        <?php echo $content; ?>
        <?php
            if ($btnOn) { ?>
            <div class="btnCenter">
                <a href="<?php echo esc_url( $url ); ?>">
                    <button class="btn__light">
                        <?php echo $btnDesc; ?>
                    </button>
                    <style>
                        .block-text-box {
                            padding-bottom: 0 !important;
                        }
                    </style>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
