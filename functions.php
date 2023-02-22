<?php
/**
 * Theme Functions
 */

/**
 * Enqueue scripts and styles.
 */
function veganease_scripts() {
	$manifest = json_decode(file_get_contents('dist/assets.json', true));
$main = $manifest->main;

wp_enqueue_style( 'veganease-style', get_template_directory_uri() . $main->css, false, null );

wp_enqueue_script('veganease-js', get_template_directory_uri() . $main->js, ['jquery, slick-js'], null, true);
wp_enqueue_style( 'slick-style',"//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css");
// wp_register_script( 'slick', "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js");
// wp_enqueue_script("slick");
wp_enqueue_script('slick-js', "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js", ['jquery'], null, true);

wp_enqueue_script('veganease-styles-js', get_template_directory_uri() . $main->js, ['jquery', 'slick-js'], null, true);
wp_style_add_data( 'veganease-style', 'rtl', 'replace' );

wp_enqueue_script( 'veganease-navigation', get_template_directory_uri() . '/js/navigation.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'veganease_scripts' );

//POST THUMBNAIL FUNCTION
add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'rc-grows' ),
			'menu-2' => esc_html__( 'Secondary', 'rc-grows' ),
			'menu-3' => esc_html__( 'Third', 'rc-grows' ),
		)
	);

	add_action( 'after_setup_theme', 'setup_woocommerce_support' );

 function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
}

add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

function custom_related_products_text( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
	  case 'Related products' :
		$translated_text = __( 'Recommended Products', 'woocommerce' );
		break;
	}
	return $translated_text;
  }
  add_filter( 'gettext', 'custom_related_products_text', 20, 3 );

  /**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

//LOGIN CSS

function custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login/login-styles.css' );
}
add_action( 'login_enqueue_scripts', 'custom_login_stylesheet' );


function custom_login_css() {
    wp_enqueue_style('login-styles', get_template_directory_uri() . '/login/login-styles.css');
}
add_action('login_enqueue_scripts', 'custom_login_css');


//POST THUMBNAIL FUNCTION
add_theme_support( 'post-thumbnails , full' ); ?>


<?php /**
 * Override 'woocommerce_content' function
 */

if ( ! function_exists( 'woocommerce_content' ) ) {

/**
 * Output WooCommerce content.
 *
 * This function is only used in the optional 'woocommerce.php' template.
 * which people can add to their themes to add basic woocommerce support.
 * without hooks or modifying core templates.
 *
 */
function woocommerce_content() {

    if ( is_singular( 'product' ) ) {

        while ( have_posts() ) : the_post();

            // Template depends from category slug

            if ( has_term( 'my-cat-slug', 'product_cat' ) ) {

              woocommerce_get_template_part( 'content', 'single-product-dogs' );

            } else {

              woocommerce_get_template_part( 'content', 'single-product' );

            }

        endwhile;

    } else { ?>

        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

            <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

        <?php endif; ?>

        <?php do_action( 'woocommerce_archive_description' ); ?>

        <?php if ( have_posts() ) : ?>

            <?php do_action('woocommerce_before_shop_loop'); ?>

            <?php woocommerce_product_loop_start(); ?>

                <?php woocommerce_product_subcategories(); ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php wc_get_template_part( 'content', 'product' ); ?>

                <?php endwhile; // end of the loop. ?>

            <?php woocommerce_product_loop_end(); ?>

            <?php do_action('woocommerce_after_shop_loop'); ?>

        <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

            <?php wc_get_template( 'loop/no-products-found.php' ); ?>

        <?php endif;

    }
  }
}

//add acf options to backend
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
}

function woocommerce_button_proceed_to_checkout() { ?>
	<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward">
	<img class="secure-icon" src="<?php echo get_template_directory_uri(); ?>/img/secure-icon.svg"/>
	<?php esc_html_e( 'Checkout', 'woocommerce' ); ?>
	</a>
	<?php
   }

   // To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' );
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Add to Bag', 'woocommerce' );
}

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        } elseif ( is_tax() ) { //for custom post types
            $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title( '', false );
        }
    return $title;
});