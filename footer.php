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
		<img class="la-mas-logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="La Mãs Alta Logo"/>
	</a>
	</picture> <!-- la mas logo footer container -->

    <div class="footer-socials">
    <a target="_blank" href="https://www.instagram.com/lamasaltany"><img alt="La Mãs Alta Instagram Icon" class="instagram-icon" src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon.svg"/></a>
    <a target="_blank" href="mailto:lasmasaltany@gmail.com"><img alt="La Mãs Alta Email Icon" class="email-icon" src="<?php echo get_template_directory_uri(); ?>/img/email-icon.svg"/></a>
	</div> <!-- footer socials -->
		<p class="copyright-text">Designed by <span><a target="_blank" href="http://www.instagram.com/lawsandcodes">@lawsandcodes</a></span></p>
    <p class="copyright-text">&copy; Copyright 2025 La Mãs Alta</p>

</div><!-- #page -->

<?php wp_footer(); ?>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



</body>
</html>
