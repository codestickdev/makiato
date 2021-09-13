<?php
 /** 
    * Template name: Contact
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg contactBg">
    <div class="logo">
    <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
    </div>
    </div>
    <div class="content">
        <div class="text__box">
            <h1><?php the_field('contact__title');?></h1>
            <p><?php the_field('contact__description');?></p>
        </div>
        <div class="contact">
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
