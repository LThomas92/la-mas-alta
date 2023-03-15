<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */


 $page_id = get_option( 'woocommerce_shop_page_id' );
 $product = wc_get_product( $post->ID );
 $category = get_the_category();
 $term_id = get_queried_object()->term_id;
 $post_id = 'product_cat_'.$term_id;
 $image = get_field('category_image_header', $post_id);
 ?>

<?php if($image) { ?>
<div style="background-image: url(<?php echo $image; ?>);" class="category-product-header">
<?php } else { ?>
	<div style="background-image: url('https://images.unsplash.com/photo-1530227826287-f12d70f4ee18?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80);" class="category-product-header">
<?php } ?>

</div> <!--category header image -->

<div class="container-margins">
			<h2 class="product-cat-title"><?php echo the_archive_title();?></h2>
	

<main class="gutenberg-styles all-products-container">
<?php while ( have_posts() ) : ?>
			<?php the_post(); 
			$product = wc_get_product( $post->ID );
			?>
		<div class="product-single">
		<a href="<?php echo get_permalink();?>">
		<figure>
		<?php the_post_thumbnail(); ?>
		</figure>
	</a>
		<a href="<?php echo get_permalink();?>"><h5 class="product-single__title"><?php echo the_title();?></h5></a>
		<p class="product-single__price"><?php echo $product->get_price_html();?></p>
		</div> <!-- PRODUCT SINGLE -->

		<?php endwhile; ?>

</main>
</div>


<?php
get_footer( 'shop' ); ?>