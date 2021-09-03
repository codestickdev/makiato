<?php
 /** 
    * Template name: FAQ
 **/ 
?>

<?php get_header() ?>

<section class="sectionContent">
    <div class="sectionBg faq"></div>
    <div class="content">
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
