<?php get_header(); ?>

<div class="container-margins">

<div class="error-404">
<h1 class="error-404__title">The page you're looking for cannot be found</h1>

<h3>Maybe these can help?</h3>
<div class="error-404__links">
<ul>
<a href="<?php echo site_url();?>"><li>Home</li></a>
<a href="<?php echo site_url('/shop');?>"><li>All Products</li></a>
<a href="<?php echo site_url('/product-category/long-sleeve-t-shirt');?>"><li>Long Sleeve T-Shirts</li></a>
<a href="<?php echo site_url('/product-category/short-sleeve-t-shirt');?>"><li>Short Sleeve T-Shirts</li></a>
</ul>
</div>

<div class="header-search-form">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
</form>
</div> <!-- header search form -->

</div> <!--error 404 -->
</div> <!-- container margins -->
<?php get_footer(); ?>