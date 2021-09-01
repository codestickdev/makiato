<?php

/*
* Block Name: Text-box6
*/

$content6   = get_field('text-box-content6') ?: __('Uzupełnij zawartość bloku', 'makiato');
$colorBg6   = get_field('text-box-bg6');
$btnOn6     = get_field('text-box-padding-on6');
$padding6   = get_field('text-box-padding6');
$image6     = get_field('text-box-bg-img6');
$btnOn6     = get_field('text-box-btn6');
$btnDesc6   = get_field('text-box-btn-desc6');
$url6       = get_field('text-box-url6');
$top6       = get_field('text-box-padding-top6');
    if ($top6) {
        $topPx6 = $top6.'px !important;';
    }
$bottom6    = get_field('text-box-padding-bottom6');
    if ($bottom6) {
        $bottomPx6 = $bottom6.'px !important;';
    }

?>

<style>
    .block-text-box6 {
        background-color: <?php echo $colorBg6; ?>;
        background-image: url('<?php echo $image6; ?>');
        padding-top: <?php echo $topPx6; ?>;
        padding-bottom: <?php echo $bottomPx6; ?>;
        padding: 10.5rem
        <?php
            if ($btnOn6) {
                echo $padding6 . '%';
            } else {
                echo 0;
            }
        ?>;
    }
</style>

<div class="block-text-box6">
    <div class="content6">
        <?php echo $content6; ?>
        <?php
            if ($btnOn6) { ?>
                <div class="btnCenter">
                <a href="<?php echo esc_url( $url6 ); ?>">
                    <button class="btn__light">
                        <?php echo $btnDesc6; ?>
                    </button>
                    <style>
                        .block-text-box6 {
                            padding-bottom: 0 !important;
                        }
                    </style>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
