<?php get_header(); ?>

<div class="container-margins">

<div class="error-404">
<h1 class="error-404__title">The page you're looking for cannot be found</h1>

<h3>Maybe these can help?</h3>
<div class="error-404__links">
<ul>
<a href="<?php echo site_url();?>"><li>Home</li></a>
<a href="<?php echo site_url('/shop');?>"><li>All Products</li></a>
<a href="<?php echo site_url('/product-category/caps');?>"><li>Caps</li></a>
<a href="<?php echo site_url('/product-category/beanies');?>"><li>Beanies</li></a>
</ul>
</div>

<div class="header-search-form">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
</form>
</div> <!-- header search form -->


<h4>Reccomended Products</h4>
<div class="empty-cart-recc-products">

<?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 3,
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
</div> <!--error 404 -->
</div> <!-- container margins -->
<?php get_footer(); ?>