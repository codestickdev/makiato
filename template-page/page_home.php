<?php
 /** 
    * Template name: Homepage
 **/ 
?>

<?php get_header() ?>

<section class="header_img">
    <div class="logo">
        <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
    </div>
    <div class="custom-block">
        <div class="border__positon">
            <div></div>
        </div>
        <div class="text__position">
            <div class="first__text">
                <h1><?php echo the_field('homePage__headerTitle') ?></h1>
                <p><?php echo the_field('homePage__headerDescription') ?></p>
            </div>
            <div class="sec__text">
                <p><?php echo the_field('homePage__headerDescription2') ?></p>
            </div>
            <div class="img scroll-Ico">
                <a href="#scroll">
                    <img src="/wp-content/themes/makiato/images/icons/arrow.svg'" alt="arrow">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="down_header">
    <div class="customHeaderPadding">
        <div class="box">
            <div class="text">
                <h1><?php the_field('homePage__underHeader__title'); ?></h1>
                <p id="scroll">
                    <?php the_field('homePage__underHeader__description'); ?>
                </p>
            </div>
            <div class="input">
                <a href="<?php the_field('homePage__underHeader__button')['url']; ?>">
                Zobacz ofertę
                <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="allInclusive">
    <div class="box">
        <h1><?php the_field('homePage__coffeeService__title');?></h1>
        <p><?php the_field('homePage__coffeeService__description');?></p>
    </div>
</section>
<section class="ownBar">
    <div class="box">
        <h1><?php the_field('homePage__ownService__title'); ?></h1>
        <p><?php the_field('homePage__ownService__description'); ?></p>
    </div>
</section>
<section class="chess">
    <?php if( have_rows('homePage__chess') ): ?>
        <?php while( have_rows('homePage__chess') ) : the_row();
                $itemTitle = get_sub_field('homePage__chess__title');
                $itemDescription = get_sub_field('homePage__chess__description');
                $itemImage = get_sub_field('homePage__chess__img');
                $itemSpecial = get_sub_field('homePage__chess__special');
            ?>
            <div class="box <?php if( $itemSpecial): ?> chess__special <?php endif; ?>">
                <div class="leftSide">
                    <h1><?php echo $itemTitle ?></h1>
                    <p><?php echo $itemDescription ?></p>
                </div>
                <div class="rightSide" style="background-image: url('<?php echo $itemImage['url']; ?>')"></div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<section class="caffee" style="background-image: url('<?php the_field('homePage__wishes__img')['url']; ?>')">
    <div class="box">
        <h1>
            <?php the_field('homePage__wishes__title');?>
        </h1>
    </div>
</section>
<section class="chess sec__chess">
    <?php if( have_rows('homePage__secChess') ): ?>
            <?php while( have_rows('homePage__secChess') ) : the_row();
                    $itemTitle = get_sub_field('homePage__secChess__title');
                    $itemDescription = get_sub_field('homePage__secChess__description');
                    $itemImage = get_sub_field('homePage__secChess__img');
                    $itemSpecial = get_sub_field('homePage__secChess__special');
                ?>
                <div class="box <?php if( $itemSpecial): ?> chess__special <?php endif; ?>">
                    <div class="leftSide">
                        <h1><?php echo $itemTitle ?></h1>
                        <p><?php echo $itemDescription ?></p>
                    </div>
                    <div class="rightSide" style="background-image: url('<?php echo $itemImage['url']; ?>')"></div>
                </div>
            <?php endwhile; ?>
    <?php endif; ?>
</section>
<section class="howWorks">
    <div class="title">
        <h1><?php the_field('homePage__howWorks__title'); ?></h1>
    </div>
    <div class="content">
    <?php if( have_rows('homePage__howWorks____box') ): ?>
        <?php while( have_rows('homePage__howWorks____box') ) : the_row();
            $itemNumber = get_sub_field('homePage__howWorks__box__number');
            $itemImg = get_sub_field('homePage__howWorks__box__img');
            $itemDescription = get_sub_field('homePage__howWorks__box__description');
        ?>
            <div class="box">
                <div class="img">
                    <span><?php echo $itemNumber ?></span>
                    <img src="<?php echo $itemImg; ?>" alt="<?php echo $itemImg['alt'] ?>">
                </div>
                <div class="box__description"><?php echo $itemDescription ?></div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <div class="input">
        <a href="<?php the_field('homePage__howWorks__button')['url']; ?>">
            Zobacz ofertę
            <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
        </a>
    </div>
</section>
<section class="knowUs">
    <div class="text">
        <h1><?php the_field('homePage__knowUs__title') ?></h1>
        <p><?php the_field('homePage__knowUs__description') ?></p>
    </div>
    <div class="slider">
        <img src="<?php the_field('homePage__knowUs__img')['url']; ?>" alt="<?php the_field('homePage__knowUs__img')['alt'] ?>">
    </div>
    <div class="text under__slider">
        <h1><?php the_field('homePage__knowUs__secTitle') ?></h1>
        <p><?php the_field('homePage__knowUs__secDescription') ?></p>
    </div>
    <div class="input">
        <a href="<?php the_field('homePage__knowUs__button')['url']; ?>">
            Poznajmy się bliżej
            <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
        </a>
    </div>
</section>
<section class="testimoniale">
    <div class="title">
        <h1><?php the_field('homePage__testimonials__title');?></h1>
    </div>
    <div class="content">
        <div class="testimonialeSlider">
            <?php if( have_rows('homePage__testimonials__slider') ): ?>
                <?php while( have_rows('homePage__testimonials__slider') ): the_row(); ?>
                <?php
                    $item = get_sub_field('homePage__testimonials__sliderItem');
                ?>
                    <div class="box">
                        <p><?php echo $item?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="pagination">
            <div class="testimonatsPrev">
                <button class="slick-prev">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/left-arrow.svg'?>" alt="left-arrow">
                </button>
            </div>
            <div class="testimonatsNext">
                <button class="slick-next">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
                </button>
            </div>
        </div>
        <div class="testimonialeMobileSlider">
            <?php if( have_rows('homePage__testimonials__slider') ): ?>
                <?php while( have_rows('homePage__testimonials__slider') ): the_row(); ?>
                <?php
                    $item = get_sub_field('homePage__testimonials__sliderItem');
                ?>
                    <div class="box">
                        <p><?php echo $item?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="paginationMobile">
            <div class="testimonatsMobilePrev">
                <button class="slick-prev">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/left-arrow.svg'?>" alt="left-arrow">
                </button>
            </div>
            <div class="testimonatsMobileNext">
                <button class="slick-next">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
                </button>
            </div>
        </div>
    </div>
</section>
<section class="ourShowcase">
    <div class="text">
        <h1> <?php the_field('homePage__ourShowcase__title') ?></h1>
        <p> <?php the_field('homePage__ourShowcase__description') ?></p>
    </div>
</section>
<?php get_footer() ?>
