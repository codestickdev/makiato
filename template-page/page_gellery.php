<?php
 /** 
    * Template name: Gallery
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg gallery">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri() . '/images/Logo.svg'?>" alt="makiato">
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
                    <div class="responsive__box">
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                    </div>
                    <div class="responsive__box">
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                    </div>
                    <div class="responsive__box">
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                    </div>
                    <div class="responsive__box">
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                    </div>
                    <div class="responsive__box">
                        <div class="img"></div>
                        <div class="img"></div>
                        <div class="img"></div>
                    </div>
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
                    <div class="responsiveMobile__box">
                        <div class="img"></div>
                    </div>
                    <div class="responsiveMobile__box">
                        <div class="img"></div>
                    </div>
                    <div class="responsiveMobile__box">
                        <div class="img"></div>
                    </div>
                    <div class="responsiveMobile__box">
                        <div class="img"></div>
                    </div>
                    <div class="responsiveMobile__box">
                        <div class="img"></div>
                    </div>
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
        </div>



        <div class="button">
            <button class="btn">
                <?php echo _e('Zobacz ofertę >', 'makiato'); ?>
            </button>
        </div>
    </div>
</section>

<?php get_footer() ?>