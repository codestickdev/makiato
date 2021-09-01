<?php

/*
* Block Name: Cheesboard - start text left
*/

?>

<div class="block-cheesboard">
    <div class="block-cheesboard-content">
        <div class="box__text">
            <?php the_field('cheesboard1-desc1'); ?>
        </div>
        <div class="box__bg" style="background-image: url('<?php the_field('cheesboard1-img1') ?>');"></div>
        <div class="box__bg" style="background-image: url('<?php the_field('cheesboard1-img2') ?>');"></div>
        <div class="box__text">
            <?php the_field('cheesboard1-desc2'); ?>
        </div>
        <div class="box__text">
            <?php the_field('cheesboard1-desc3'); ?>
        </div>
        <div class="box__bg" style="background-image: url('<?php the_field('cheesboard1-img3') ?>');"></div>
    </div>
</div>
