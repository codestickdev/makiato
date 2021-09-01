<?php
/*
* Block Name: FAQ
*/
?>

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
