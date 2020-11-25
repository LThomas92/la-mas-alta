<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package La Mãs Alta
 */

?>

	<div class="container-margins">
	<footer id="colophon" class="site-footer">
	<?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-3',
                'menu_id'        => 'third-menu',
            )
        );
        ?>
    </footer><!-- #colophon -->
    
    <div class="footer-socials">
    <a target="_blank" href="https://www.instagram.com/lamasaltany"><img alt="La Mãs Alta Instagram Icon" class="instagram-icon" src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon.svg"/></a>
    <a target="_blank" href="mailto:lasmasaltany@gmail.com"><img alt="La Mãs Alta Email Icon" class="email-icon" src="<?php echo get_template_directory_uri(); ?>/img/email-icon.svg"/></a>
    </div>

    <p class="copyright-text">&copy; Copyright 2020 La Mãs Alta</p>





</div><!-- #page -->
</div> <!-- container margins -->

<?php wp_footer(); ?>



</body>
</html>
