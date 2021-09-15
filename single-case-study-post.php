<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Makiato
 */

get_header();
?>
<section class="sectionContent caseContent">
    <div class="sectionBg caseStudy singleCaseBg">
        <div class="logo">
        <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
        </div>
    </div>
    <div class="content">
        <div class="text__box">
            <h1><?php the_field('caseStudy__title');?></h1>
            <p><?php the_field('caseStudy__description');?></p>
        </div>
        <section class="singlePost">
            <div>
                <div class="singleCase__info">
                    <div class="singleCase__info__content">
                        <div class="box">
                        <div class="img">
                            <?php the_post_thumbnail(); ?>
                            <div class="title">
                                <p><?php the_field('caseStudy__msName'); ?> <span>i</span> <?php the_field('caseStudy__mrName'); ?></p>
                            </div>
                        </div>
                            <div class="box__content">
                                <div class="data">
                                    <div>
                                        <div class="name">Miejsce</div>
                                        <div class="field"><?php the_field('caseStudy__place'); ?></div>
                                    </div>
                                    <div>
                                        <div class="name">Termin</div>
                                        <div class="field"><?php the_field('caseStudy__data'); ?></div>
                                    </div>
                                    <div>
                                        <div class="name">Imiona Pary Młodej</div>
                                        <div class="field"><?php the_field('caseStudy__names'); ?></div>
                                    </div>
                                    <div>
                                        <div class="name">Liczba Gości</div>
                                        <div class="field"><?php the_field('caseStudy__guests'); ?></div>
                                    </div>
                                    <div>
                                        <div class="name">Usługi</div>
                                        <div class="field"><?php the_field('caseStudy__offer'); ?></div>
                                    </div>
                                    <div>
                                        <div class="name">Życzenia dodatkowe</div>
                                        <div class="field"><?php the_field('caseStudy__extra'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="title">
                            <h2><?php the_field('caseStudy__caffeeTitle');?></h2>
                        </div>
                        <div class="text">
                            <p><?php the_field('caseStudy__caffeeDescription');?></p>
                        </div>
                    </div>
                    <div class="caseImg1">
                    <img src="<?php the_field('caseStudy__img1')['url']; ?>" alt="<?php the_field('caseStudy__img1')['alt'] ?>">
                    </div>
                    <div class="data secData">
                        <div class="title">
                            <h2><?php the_field('caseStudy__underImgTitle');?></h2>
                        </div>
                        <div class="text">
                            <p><?php the_field('caseStudy__underImgDescription');?></p>
                        </div>
                    </div>
                    <div class="hrLine"></div>
                    <div class="data thirdData">
                        <div class="title">
                            <h2><?php the_field('caseStudy__underLineTitle');?></h2>
                        </div>
                        <div class="text">
                            <p><?php the_field('caseStudy__underLineDescription');?></p>
                        </div>
                    </div>
                    <div class="caseImg1">
                            <img src="<?php the_field('caseStudy__img2')['url']; ?>" alt="<?php the_field('caseStudy__img2')['alt'] ?>">
                    </div>
                    <div class="data fourthData">
                        <div class="title">
                            <h2><?php the_field('caseStudy__underImgTitle2');?></h2>
                        </div>
                        <div class="text">
                            <p><?php the_field('caseStudy__underImgDescription2');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="contact caseForm">
            <div class="title">
                <h2><?php the_field('caseStudy__formTitle', 35);?></h2>
            </div>
            <div class="description">
                <p><?php the_field('caseStudy__formDescription', 35);?></p>
            </div>
            <form class="contactForm">
                <div class="contactForm__box">
                    <input type="text" name="form_name" placeholder="Adam Kowalski" required>
                </div>
                <div class="contactForm__box">
                    <input type="text" name="form_email" placeholder="adam.kowal" required>
                </div>
                <div class="contactForm__box">
                    <textarea name="form_textarea" cols="30" rows="10" placeholder="Treść wiadomości" required></textarea>
                </div>
                <div class="contactForm__box">
                    <button>
                        Wyślij wiadomość
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
get_sidebar();
get_footer();