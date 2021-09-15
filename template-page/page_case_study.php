<?php
 /** 
    * Template name: Case study
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg caseStudy">
    <div class="logo">
    <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
    </div>
    </div>
    <div class="content">
        <div class="text__box">
            <h1><?php the_field('caseStudy__title'); ?></h1>
            <p><?php the_field('caseStudy__description'); ?></p>
        </div>
        <div class="casePosts">
				<div class="casePosts__content">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'case-study-post', 'order' => 'ASC' ,'posts_per_page' => 3, 'paged' => $paged );
						$wp_query = new WP_Query($args);
						while ( have_posts() ) : the_post(); ?>
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
                                    <div class="button">
                                        <a href="<?php the_permalink() ?>">
                                            Zobacz case study
                                        </a>
                                    </div>
                                </div>
						</div>
					<?php endwhile; ?>
				</div>
                <div class="pagination casePagination">
                    <?php pagination(); ?>
                </div>
			</div>
        <div class="contact">
            <div class="title">
                <h2><?php the_field('caseStudy__formTitle', 35); ?></h2>
            </div>
            <div class="description">
                <p><?php the_field('caseStudy__formDescription', 35); ?></p>
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
