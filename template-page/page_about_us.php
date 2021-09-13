<?php
 /** 
    * Template name: About Us
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg">
    <div class="logo">
    <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
    </div>
    </div>
    <div class="content">
        <div class="text__box">
            <h1><?php the_field('aboutUs__title'); ?></h1>
            <p><?php the_field('aboutUs__description'); ?></p>
        </div>
        <div class="vice__master">
            <div class="leftSide">
                <h2><?php the_field('aboutUs__master__title'); ?></h2>
                <p><?php the_field('aboutUs__master__description');?></p>
            </div>
            <div class="rightSide" style="background-image: url('<?php the_field('aboutUs__master__img')['url']; ?>')"></div>
        </div>
        <div class="master-cv">        
            <div class="leftSide">
                <h2><?php the_field('aboutUs__cv__title'); ?></h2>
                <ul>
                    <?php if( have_rows('aboutUs__cv__description') ): ?>
                        <?php while( have_rows('aboutUs__cv__description') ): the_row(); 
                            $item = get_sub_field('aboutUs__cv__description__item');
                        ?>
                            <li><?php echo $item ?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="rightSide">
                <h2><?php the_field('aboutUs__coffeePassion__title'); ?></h2>
                <ul>
                    <?php if( have_rows('aboutUs__coffeePassion__description') ): ?>
                        <?php while( have_rows('aboutUs__coffeePassion__description') ): the_row(); 
                            $item = get_sub_field('aboutUs__coffeePassion__description__item');
                        ?>
                            <li><?php echo $item ?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>            
        </div>
        <div class="inspiration">
            <h1><?php the_field('aboutUs__inspiration__title');?></h1>
            <p><?php the_field('aboutUs__inspiration__description'); ?></p>
        </div>
        <div class="aboutUs__info">
            
					<?php if( have_rows('aboutUs__inspiration__box') ): ?>
						<?php while( have_rows('aboutUs__inspiration__box') ) : the_row();
							$itemTitle = get_sub_field('aboutUs__inspiration__box__title');
							$itemDescription = get_sub_field('aboutUs__inspiration__box__description');
						?>
                            <div class="box">
                                <div class="title">
                                    <p><?php echo $itemTitle ?></p>
                                </div>
                                <div class="description">
                                    <p><?php echo $itemDescription ?></p>
                                </div>
                            </div>
						<?php endwhile; ?>
					<?php endif; ?>

        </div>
        <div class="contact aboutUsForm">
            <div class="title">
                <h2><?php the_field('aboutUs__form__title');?></h2>
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
