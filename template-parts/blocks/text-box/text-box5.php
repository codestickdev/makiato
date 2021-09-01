<?php

/*
* Block Name: Text-box5
*/

$content5   = get_field('text-box-content5') ?: __('Uzupełnij zawartość bloku', 'makiato');
$colorBg5   = get_field('text-box-bg5');
$btnOn5     = get_field('text-box-padding-on5');
$padding5   = get_field('text-box-padding5');
$image5     = get_field('text-box-bg-img5');
$btnOn5     = get_field('text-box-btn5');
$btnDesc5   = get_field('text-box-btn-desc5');
$url5       = get_field('text-box-url5');
$top5       = get_field('text-box-padding-top5');
    if ($top5) {
        $topPx5 = $top5.'px !important;';
    }
$bottom5    = get_field('text-box-padding-bottom5');
    if ($bottom5) {
        $bottomPx5 = $bottom5.'px !important;';
    }

?>

<style>
    .block-text-box5 {
        background-color: <?php echo $colorBg5; ?>;
        background-image: url('<?php echo $image5; ?>');
        padding-top: <?php echo $topPx5; ?>;
        padding-bottom: <?php echo $bottomPx5; ?>;
        padding: 10.5rem
        <?php
            if ($btnOn5) {
                echo $padding5 . '%';
            } else {
                echo 0;
            }
        ?>;
    }
</style>

<div class="block-text-box5">
    <div class="content5">
        <?php echo $content5; ?>
        <?php
            if ($btnOn5) { ?>
                <div class="btnCenter">
                <a href="<?php echo esc_url( $url5 ); ?>">
                    <button class="btn__light">
                        <?php echo $btnDesc5; ?>
                    </button>
                    <style>
                        .block-text-box5 {
                            padding-bottom: 0 !important;
                        }
                    </style>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
