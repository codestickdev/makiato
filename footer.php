<?php
$phone = get_field('footer-phone', 'option');
$email = get_field('footer-email', 'option');
$instagram = get_field('footer-instagram', 'option');
$facebook = get_field('footer-facebook', 'option');
?>

<?php wp_footer(); ?>

<footer>
    <div class="footer-content">
        <?php the_field('footer-content', 'option'); ?>
        <div class="footer-contact">
            <div class="contact">
                <a href="phone:+48<?php echo $phone; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg">
                    <?php echo $phone; ?>
                </a>
            </div>
            <div class="contact">
                <a href="mailto:<?php echo $email; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.svg">
                    <?php echo $email; ?>
                </a>
            </div>
            <div class="social-media">
                <a href="<?php echo esc_url($instagram); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg">
                </a>&nbsp;&nbsp;
                <a href="<?php echo esc_url($facebook); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg">
                </a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
