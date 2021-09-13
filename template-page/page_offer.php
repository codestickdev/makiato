<?php
 /** 
    * Template name: Offer
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg offer">
        <div class="logo">
        <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
        </div>
    </div>
    <div class="content">
            <div class="text__box">
                <h1><?php the_field('offer__title');?></h1>
                <p><?php the_field('offer__description');?></p>
            </div>
            <div class="offerContent">
                <div class="options">
                    <div class="basic">
                        <p><?php the_field('offer__content__leftButton');?></p>
                    </div>
                    <div class="extra active">
                        <p><?php the_field('offer__content__rightButton');?></p>
                    </div>
                </div>
                    <?php if( have_rows('offer__content') ): ?>
                        <?php while( have_rows('offer__content') ) : the_row();?>
                        <div class="offerContent__box basic__offer">
                            <?php if( have_rows('offer_content__firstTable') ): ?>
                                <?php while( have_rows('offer_content__firstTable') ) : the_row();
                                        $itemTitle = get_sub_field('offer_content__firstTable__title');
                                    ?>
                                        <ul>
                                            <li><?php echo $itemTitle?></li>
                                        </ul>
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <p><?php the_field('offer__content__price');?></p>
                        </div>
                        <div class="offerContent__box extra__offer">
                            <?php if( have_rows('offer_content__secTable') ): ?>
                                <?php while( have_rows('offer_content__secTable') ) : the_row();
                                        $itemTitle = get_sub_field('offer_content__secTable__title');
                                    ?>
                                        <ul>
                                            <li><?php echo $itemTitle?></li>
                                        </ul>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <p><?php the_field('offer__content__price');?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
        <div class="contact">
            <div class="title">
                <h2><?php the_field('offer__contact__title');?></h2>
            </div>
            <div class="description">
                <p><?php the_field('offer__contact__description');?></p>
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
                    <button name="form_submit">
                        Wyślij wiadomość
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer() ?>
