<?php
 /** 
    * Template name: Gallery
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent customGallery">
    <div class="sectionBg gallery">
    <div class="logo">
    <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
    </div>
    </div>
    <div class="content">
    <div class="text__box">
        <h1>galeria</h1>
        <p>Zapraszamy na fotograficzny spacer po wspomnieniach z naszego weselnego Portfolio. Pamiętajcie, że oko obiektywu nie rejestruje doskonałego smaku, aromatycznego zapachu i wyjątkowej atmosfery, która unosi się w powietrzu… </p>
    </div>
    <div class="block-gallery">
        <div class="images">
            <div class="slider desktopSlider">
                <div class="responsive">
                    <?php 
                        $images = get_field('block-gallery');
                        if( $images ): ?>
                            <!-- <div class="responsive__box"> -->
                                <?php foreach( $images as $image ): ?>
                                    <div class="responsive__box">
                                        <div class="img" style="background-image: url('<?php echo $image; ?>')"></div>
                                    </div>
                                <?php endforeach; ?>
                            <!-- </div> -->
                        <?php endif; 
                    ?>
                </div>
                <div class="pagination">
                        <div class="preArrow">
                            <button class="slick-prev">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/left-arrow.svg'?>" alt="left-arrow">
                            </button>
                        </div>
                        <div class="sliderDots"></div>
                        <div class="nextArrow">
                            <button class="slick-next">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
                            </button>
                        </div>
                </div>
            </div>
            <div class="slider sliderMobile">
                <div class="images responsiveMobile">
                        <?php 
                        $images = get_field('block-gallery');
                        if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                    <div class="responsiveMobile__box">
                                        <div class="img" style="background-image: url('<?php echo $image; ?>')"></div>
                                    </div>
                                <?php endforeach; ?>
                        <?php endif; 
                    ?>
                </div>
                <div class="pagination">
                    <div class="preArrowMobile">
                        <button class="slick-prev">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/left-arrow.svg'?>" alt="left-arrow">
                        </button>
                    </div>
                    <div class="sliderDotsMobile"></div>
                    <div class="nextArrowMobile">
                        <button class="slick-next">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
                        </button>
                    </div>
                </div>
        </div>
        <div class="input">
            <a href="<?php the_field('gallery__button')['url']; ?>">
                Zobacz ofertę
                <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
            </a>
        </div>
    </div>
</section>

<?php get_footer() ?>