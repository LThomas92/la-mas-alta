<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package La Mãs Alta
 */

get_header();
$product = wc_get_product( get_the_ID() );?>

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
					<a href="<?php the_permalink();?>">
					<?php if(has_post_thumbnail()) {?>
					<figure>
					<?php the_post_thumbnail();?>
					</figure>
					<?php } else { ?>
						<figure>
					    <img src="<?php echo get_template_directory_uri(); ?>/img/no-product-img.jpg" alt=""/>
					</figure>
				<?php } ?>

					</a>
					<div class="taxonomy-single__text-container">
                    <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
					<?php if($product) { ?>
						<p><?php echo $product->get_price_html(); ?></p>
					<?php } ?>

					</div> <!-- TAX SINGLE TEXT CONTAINER -->
				</div> <!-- TAX SINGLE -->

			<?php endwhile;

			the_posts_navigation();

		else : ?>

		<div>No Results have been found! Try your search again</div>

		<?php endif;
		?>

</div> <!-- TAXNONOMY CONTAINER -->
</div>
		</div> <!-- CONTAINER MARGINS -->

	</main><!-- #main -->

<?php

get_footer();
