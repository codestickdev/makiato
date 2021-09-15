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
                        $gallery = get_field('block-gallery');
                         $images = [];

                         $items_per_page = 4;
                         $total_items = count($gallery);
                         $total_pages = ceil($total_items / $items_per_page);

                             if (get_query_var('paged')) {
                                $current_page = get_query_var('paged');
                             } elseif (get_query_var('page')) {
                                $current_page = get_query_var('page');
                             } else {
                                $current_page = 1;
                             }

                         $starting_point = ($current_page - 1) * $items_per_page;
                         if ($gallery) {
                             $images = array_slice($gallery, $starting_point, $items_per_page);
                         }
                        if( !empty($images)): ?>
                            <div class="responsive__box">
                                <?php foreach( $images as $image ): ?>
                                    <img class="img countImg" src="<?php echo $image ?>">
                                <?php endforeach; ?>
                            </div>
                        <?php endif; 
                    ?>
                </div>
                <div class="pagination">
                    <?php
                        $big = 999999999;
                        $prevArrow =  "<img src='/wp-content/themes/makiato/images/icons/left-arrow.svg'>";
                        $nextArrow =  "<img src='/wp-content/themes/makiato/images/icons/right-arrow.svg'>";
                        echo paginate_links([
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'before_page_number' => '<span class="screen-reader-text">' . __('Page ', 'makiato') . ' </span>',
                            'prev_text' => __($prevArrow),
                            'next_text' => __($nextArrow),
                        ]);
                    ?>
                </div>
            </div>
            <div class="sliderMobile">
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
                    <div class="sliderDotsMobile"></div>
                </div>
        </div>
        <div class="input">
            <a href="<?php the_field('gallery__button')['url']; ?>">
                Zobacz ofertę
                <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
            </a>
        </div>
    </div>
    </div>
</section>

<?php get_footer() ?>