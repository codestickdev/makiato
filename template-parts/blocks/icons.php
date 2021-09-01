<?php

/*
* Block Name: Icons
*/

?>

<div class="block-icons" style="background-color: <?php the_field('block-icons-bg'); ?>">
    <div class="content">
        <?php the_field('block-icons-title'); ?>
        <div class="icons">
            <?php
                if( have_rows('block-icons') ):
                    while( have_rows('block-icons') ) :
                        the_row();
                        $number = get_sub_field('block-icon-number');
                        $icon = get_sub_field('block-icon-icon');
                        $desc = get_sub_field('block-icon-desc'); ?>
                        <div class="icon">
                            <?php
                                echo '<div class="number"><p>'.$number.'</p><img src="'.$icon.'"></div>';
                                echo $desc;
                            ?>
                        </div>
                        <?php
                    endwhile;
                else :
                    echo _e('Uzupełnij dane', 'makiato');
                endif;
            ?>
        </div>
        <div class="btnCenter">
            <a href="#">
                <button class="btn__dark">
                    <?php echo _e('Zobacz ofertę >', 'makiato');?>
                </button>
            </a>
        </div>
    </div>
</div>
