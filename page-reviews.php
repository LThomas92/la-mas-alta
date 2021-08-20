<?php get_header(); ?>

<main>

<div class="container-margins">
<!-- REVIEWS SECTION -->
<section class="reviews-homepage-section">
<h2 class="reviews-homepage-section__title">#ClientReviews</h2>
<div class="slick-arrows">
<div title="previous" class="slick-prev"></div>
<div title="next" class="slick-next"></div>
</div>
<div class="reviews-homepage-section-container">
<?php $args = array(
	'number'  => '6',
) ?>

<?php foreach (get_comments($args) as $comment): ?>

<div class="reviews-section__single">
    <figure>
		<img src="<?php echo get_avatar_url( $comment, 32 ); ?>" class="reviews-homepage-section__single__img"/>
        </figure>
        <div class="reviews-section__single__text">
        <p class="reviews-section__single__comment"><?php echo $comment->comment_content; ?></p>
		<h6 class="reviews-section__single__author"><?php echo $comment->comment_author; ?></h6>
        </div> <!-- reviews single text -->
    </div> <!-- REVIEW SINGLE -->

		<?php endforeach; ?>



		</div> <!-- REVIEWS SECTION HOMEPAGE SECTION CONTAINER -->
		</section>
        <!-- REVIEWS SECTION -->

        </div> <!-- container margins -->
</main>

        <?php get_footer(); ?>
