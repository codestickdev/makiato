<?php

/*
* Block Name: Cheesboard - start text right
*/

?>

<div class="block-cheesboard">
    <div class="block-cheesboard-content" style="margin-bottom: 25.2rem;">
        <div class="box__bg" style="background-image: url('<?php the_field('cheesboard2-img1') ?>');"></div>
        <div class="box__text">
            <?php the_field('cheesboard2-desc1'); ?>
        </div>
        <div class="box__text">
            <?php the_field('cheesboard2-desc2'); ?>
        </div>
        <div class="box__bg" style="background-image: url('<?php the_field('cheesboard2-img2') ?>');"></div>
        <div class="box__bg" style="background-image: url('<?php the_field('cheesboard2-img3') ?>');"></div>
        <div class="box__text">
            <?php the_field('cheesboard2-desc3'); ?>
        </div>
    </div>
</div>
