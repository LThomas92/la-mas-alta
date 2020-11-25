<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;
?>

<main>

<div class="cart-is-empty-container">
<h2 class="cart-is-empty-container__text">Your Shopping Bag is Empty</h2>
<a class="continue-shopping-btn" href="<?php echo home_url('/shop')?>">Continue Shopping</a>
</div>

<div class="container-margins">
<h3 class="cart-empty-recc-title">Recommended Products</h3>
<div class="empty-cart-recc-products">
<?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'orderby'        => 'rand',
        );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
    <div class="cart-empty-related-single">
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
    <a class="cart-empty-related-single__link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
    </div>
	
    <?php    endwhile;
    } else {
        echo __( 'No products found' );
    }
    wp_reset_postdata();
?>


</div> <!-- empty cart recc products -->
</div> <!-- container margins -->


</main>