<?php
 /** 
    * Template name: Case study
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg caseStudy"></div>
    <div class="content">
        <div class="text__box">
            <h1>weselne case study</h1>
            <p>Zobacz jak spełniamy kawowe życzenia w najpiękniejszym dniu w życiu! Prezentujemy Państwu kilka wybranych realizacji z naszego porfolio.</p>
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
