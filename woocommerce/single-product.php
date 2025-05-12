<?php
/**
 * The Template for displaying all single products
 *
 * This template  ln be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );

global $post;
?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

<div class="container-margins">

<div class="product-content-margins-small"></div>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); 
			$product = wc_get_product( $post->ID );
			?>

			<div class="single-product-container">
			<div class="single-product-container__img-container">
			<?php if( have_rows('single_product_image_gallery') ):
			while( have_rows('single_product_image_gallery') ) : the_row();
        $singleProductImg = get_sub_field('single_product_image'); ?>
		<figure class="single-product-container__image">
		<img src="<?php echo esc_url($singleProductImg['url']); ?>" alt="<?php echo $singleProductImg['alt']; ?>"/>
		</figure>

    <?php // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>
			</div> <!-- IMG CONTIAINER -->

			<div class="single-product-container__text-container">
			<h3 class="single-product-container__title"><?php the_title();?></h3>
			<?php do_action('woocommerce_single_product_summary');?>
			<p class="single-product-container__price"><?php echo $product->get_price_html(); ?></p>
			<div>
				<!-- share product social media -->
			</div>
			
			<ul class="single-post-share-icons">
                 <li>
                 <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                    <a title="Share this post on Twitter" target="_blank" href="http://twitter.com/share?url=<?php echo urlencode(get_permalink($post->ID)); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="1" class="single-post__share-icon-img"/></a>
                 </li>
               <li>
                <a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>" title="Share this post on Facebook" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="1" class="single-post__share-icon-img"/></a>
				 </li>
				 <li>
                <a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" title="Share this on Pinterest" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/pintrest.svg" alt="1" class="single-post__share-icon-img"/></a>
				 </li>
            </ul> 
			</div> <!-- SINGLE PRODUCT CONTAINER TEXT CONTAINER-->

			</div> <!-- SINGLE PRODUCT CONTAINER -->

			<?php if( ! is_a( $product, 'WC_Product' ) ){
			$product = wc_get_product(get_the_id());
		}

		woocommerce_related_products( array(
			'posts_per_page' => 3,
			'columns'        => 1,
			'orderby'        => 'rand'
		) ); ?>

		

		<?php endwhile; // end of the loop. ?>

	</div> <!-- container margins -->

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */