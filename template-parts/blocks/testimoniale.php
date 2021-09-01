<?php

/*
* Block Name: Testimoniale
*/

?>

<div class="block-testimoniale" style="background-color: <?php the_field('testimoniale-bg'); ?>">
    <div class="content">
        <?php the_field('testimoniale-title'); ?>
        <div class="block-slider-columns">
            <div class="wrapper">
                <div class="previous">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-left.svg">
                </div>
                <div class="overflow">
                    <?php
                        if( have_rows('testimoniales') ):
                        while( have_rows('testimoniales') ) :
                            the_row();
                            $testimonial = get_sub_field('testimoniale'); ?>
                            <div class="slider">
                                <div class="box">
                                    <?php echo $testimonial; ?>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        else :
                            echo _e('Dodaj pierwszą opinię', 'makiato');
                        endif;
                    ?>
                </div>
                <div class="next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-right.svg">
                </div>
            </div>
        </div>
    </div>
</div>






<script>

  function doTheMagic(){
  let btnNext = document.querySelector('.next');
  let btnPrevious = document.querySelector('.previous');
  let overflow = document.querySelector('.overflow');
  let block = document.querySelector('.slider');
  let allBlocks = document.querySelectorAll('.slider');
  let blockWidth = block.offsetWidth;

  let position = 0;
  let maxWidth = overflow.offsetWidth;
  let allBlocksWidth = allBlocks.length*blockWidth;

    if(allBlocksWidth < maxWidth){
      btnPrevious.style.opacity = "0.3";
      btnNext.style.opacity = "0.3";
    }

  function togglePrev(position){
    if(position >= blockWidth){
      btnPrevious.style.opacity = "1";
    } else {
      btnPrevious.style.opacity = "0.3";
    }
  }

  function toggleNext(position){
    if((allBlocksWidth-position) > maxWidth){
      btnNext.style.opacity = "1";
    } else {
      btnNext.style.opacity = "0.3";
    }
  }

  btnNext.onclick = function(){
    if((allBlocksWidth-position) > maxWidth){
      position = position+blockWidth;
      overflow.style.transform = `translateX(-${position}px)`;
    }
    togglePrev(position);
      toggleNext(position);
  }

  btnPrevious.onclick = function(){
    if(position >= blockWidth){
      position = position-blockWidth;
      overflow.style.transform = `translateX(-${position}px)`;
    }
      togglePrev(position);
    toggleNext(position);
  }

  }

  function resize() {
    if(window.innerWidth < 768){
      let overflow = document.querySelector('.overflow');
      overflow.style.transform = `translateX(0px)`;
      doTheMagic();
    } else {
      doTheMagic();
    }
  }

  window.onresize = resize;
  doTheMagic();

</script>
