<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package La Mãs Alta
 */

get_header();
global $product;
?>

	<main id="primary" class="site-main">
    <div class="container-margins">
		<?php if ( have_posts() ) : ?>

			<header class="tax-header page-header">
				<h1 class="search-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'veganease' ), '<span class="search-term">' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

		

               
				<div class="taxonomy-container">
                <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<div class="taxonomy-single">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
					<div class="taxonomy-single__text-container">
                    <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                    <p class="taxonomy-single__price"><?php echo $product->get_price_html(); ?></p>
					<ul class="taxonomy-single__tags">
					<?php $tags = get_the_tags();
					if ($tags) {
						foreach( $tags as $tag ) { ?>
							<li><?php echo $tag->name;?></li>
							
					<?php	}
					} ?>

					</ul>

					<?php if(get_post_type() == "product") { ?>
						<a class="taxonomy-single__product-btn" href="<?php the_permalink();?>">Shop Now</a>
					<?php } else if(get_post_type() == 'post') { ?>
						<a class="taxonomy-single__read-more" href="<?php the_permalink();?>">Read More</a>
				<?php } ?>

					</div> <!-- TAX SINGLE TEXT CONTAINER -->
				</div> <!-- TAX SINGLE -->
			

			

			<?php endwhile;

			the_posts_navigation();

		else : ?>

		<div>No Results have been found! Try another search term</div>

		<?php endif;
		?>

</div> <!-- TAXNONOMY CONTAINER -->
</div>
		</div> <!-- CONTAINER MARGINS -->

	</main><!-- #main -->

<?php

get_footer();
