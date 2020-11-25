<?php get_header(); ?>

<div class="single-slick-container">
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 3
			);
		$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="single-slick">
			<?php the_post_thumbnail(); ?>
			<h2 class="slider-home-title"><?php echo the_title();?></h2>
			<a class="slider-home-link" href="<?php the_permalink();?>">Shop Now</a>
			</div>
		<?php endwhile;
		wp_reset_postdata();
	?>
		</div><!-- SINGLE SLICK CONTAINER -->	

		<div class="container-margins">

	<section class="gutenberg-styles homepage-category-container">
	<div class="homepage-category">
	<a href="<?php echo site_url('/shop'); ?>">
	<figure>
		<img class="homepage-category__img" src="https://images.unsplash.com/photo-1575428652377-a2d80e2277fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="All Products Category">
	</figure>
	</a>
	<a href="<?php echo site_url('/shop');?>" class="homepage-category__text">All</a>
		</div>


		<div class="homepage-category">
	<a href="<?php echo site_url('/product-category/caps'); ?>">
	<figure>
		<img class="homepage-category__img" src="https://images.unsplash.com/photo-1575428652377-a2d80e2277fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="All Products Category">
	</figure>
	</a>
	<a href="<?php echo site_url('/product-category/caps'); ?>" class="homepage-category__text">Caps</p>
		</div>

	<div class="homepage-category">
	<a href="<?php echo site_url('/product-category/beanies'); ?>">
	<figure>
		<img class="homepage-category__img" src="https://images.unsplash.com/photo-1575428652377-a2d80e2277fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="All Products Category">
	</figure>
	</a>
	<a href="<?php echo site_url('/product-category/beanies'); ?>" class="homepage-category__text">Beanies</p>
		</div>

	</section> <!-- homepage category container -->

	</div> <!-- container margins -->



<?php get_footer(); ?>