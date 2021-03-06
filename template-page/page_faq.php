<?php
 /** 
    * Template name: FAQ
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg faq">
        <div class="logo">
        <a href="/">
            <img src="<?php the_field('header__logo', 'option')['url'];?>" alt="<?php the_field('header__logo', 'option')['alt'];?>">
        </a>
        </div>
    </div>
    <div class="content faqContent">
        <div class="text__box">
            <div>
                <h1>częste pytania</h1>
                <p>Spośród wielu znaków zapytania wybraliśmy te, które pojawiają się najczęściej i każdy z nich zmieniliśmy w szybką odpowiedź.</p>
            </div>
        </div>
        <div class="block-faq">
            <?php if (have_rows('block-faq')):
                while (have_rows('block-faq')):
                    the_row();
                    $question = get_sub_field('question');
                    $answear = get_sub_field('answear');
                ?>
                    <button class="question"><?php echo $question; ?></button>
                    <div class="answer"><p><?php echo $answear; ?></p></div>
            <?php
                endwhile;
            else:
                echo 'FAQ is empty...';
            endif; ?>
        </div>
        <div class="input">
                <a href="<?php the_field('faq__button')['url']; ?>">
                    Zobacz ofertę
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/right-arrow.svg'?>" alt="right-arrow">
                </a>
            </div>
        <script>
            var acc = document.getElementsByClassName("question");
            var i;
                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
                });
            }
        </script>
</section>

<?php get_footer() ?>
