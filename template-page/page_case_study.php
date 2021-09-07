<?php
 /** 
    * Template name: Case study
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg caseStudy">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri() . '/images/Logo.svg'?>" alt="makiato">
    </div>
    </div>
    <div class="content">
        <div class="text__box">
            <h1>weselne case study</h1>
            <p>Zobacz jak spełniamy kawowe życzenia w najpiękniejszym dniu w życiu! Prezentujemy Państwu kilka wybranych realizacji z naszego porfolio.</p>
        </div>
        <div class="casePosts">
				<div class="casePosts__content">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'case-study-post', 'order' => 'ASC' ,'posts_per_page' => 4, 'paged' => $paged );
						$wp_query = new WP_Query($args);
						while ( have_posts() ) : the_post(); ?>
						<div class="box">
							<a href="<?php the_permalink() ?>">
								<div class="img">
									<?php the_post_thumbnail(); ?>
                                    <div class="title">
									    <p><?php the_title() ?></p>
								    </div>
								</div>
                                <div class="box__content">
                                    <div class="name">

                                    </div>
                                    <div class="data">
                                        
                                    </div>
                                </div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
        <div class="contact">
            <div class="title">
                <h2>ZAMÓW BAR KAWOWY NA WESELE!</h2>
            </div>
            <div class="description">
                <p>Przyrządzimy dla Was aromatyczną ofertę, która oczaruje Was i Waszych Gości!</p>
            </div>
            <form class="contactForm">
                <div class="contactForm__box">
                    <input type="text" name="form_name" placeholder="Adam Kowalski" required>
                </div>
                <div class="contactForm__box">
                    <input type="text" name="form_email" placeholder="adam.kowal" required>
                </div>
                <div class="contactForm__box">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Treść wiadomości" required></textarea>
                </div>
                <div class="contactForm__box">
                    <input type="submit" name="form_submit" value="Wyślij wiadomość">
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer() ?>
