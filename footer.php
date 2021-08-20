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

</div> <!-- .main content -->
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

		<?php if( have_rows('payment_options', 'option') ): ?>

  	<ul class="payment-options">
    <?php while( have_rows('payment_options', 'option') ) : the_row();
        $paymentOption= get_sub_field('payment_image'); ?>

				<li>
				<picture>
					<img src="<?php echo $paymentOption;?>" alt="<?php echo $paymentOption['alt'];?>">
				</picture>
			</li>

	<?php endwhile; ?>

</ul> <!-- payment options -->
<?php // No value.
else :
    // Do something...
endif; ?>




		<picture class="la-mas-logo-footer-container">
				<a href="<?php echo site_url(); ?>">
		<img class="la-mas-logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="La Mãs Alta Logo"/>
	</a>
	</picture> <!-- la mas logo footer container -->

    <div class="footer-socials">
    <a target="_blank" href="https://www.instagram.com/lamasaltany"><img alt="La Mãs Alta Instagram Icon" class="instagram-icon" src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon.svg"/></a>
    <a target="_blank" href="mailto:lasmasaltany@gmail.com"><img alt="La Mãs Alta Email Icon" class="email-icon" src="<?php echo get_template_directory_uri(); ?>/img/email-icon.svg"/></a>
	</div> <!-- footer socials -->
		<p class="copyright-text">Designed by <span><a target="_blank" href="http://www.instagram.com/lawsandcodes">@lawsandcodes</a></span></p>
    <p class="copyright-text">&copy; Copyright 2021 La Mãs Alta</p>




</div><!-- #page -->
</div> <!-- container margins -->

<?php wp_footer(); ?>



</body>
</html>
