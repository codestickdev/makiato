<?php
 /** 
    * Template name: Contact
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg contactBg"></div>
    <div class="content">
        <div class="text__box">
            <h1>odezwij się</h1>
            <p>Egestas sed suscipit eu in urna eu cras pulvinar. Vitae pretium nam bibendum at imperdiet sit vel faucibus at. Arcu at praesent ornare aenean. Sed quis faucibus dolor consectetur. Auctor porta sit volutpat malesuada molestie. Dui auctor id eget neque, consectetur magna nulla suscipit elit. Rhoncus sed netus urna morbi. Mauris, magna felis, etiam enim malesuada molestie pharetra, placerat ut. Lorem viverra.</p>
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
