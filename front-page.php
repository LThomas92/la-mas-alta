<?php get_header(); ?>

		<div class="container-margins">

	<section class="homepage-category-container gutenberg-styles">
  <?php if( have_rows('categories') ): ?>
      <ul class="homepage-categories">
    <?php while( have_rows('categories') ) : the_row(); ?>
        <?php $catImage = get_sub_field('category_image');
        $catTitle = get_sub_field('category_link'); ?>

        <li class="homepage-category">
          <a class="homepage-category__text" href="<?php echo $catTitle['url']; ?>">
          <figure>
          <img class="homepage-category__img" src="<?php echo $catImage['url']; ?>">
          </figure>
          <?php echo $catTitle['title']; ?>
          </a>
        </li>

    <?php // End loop.
    endwhile;?>
<?php endif; ?>
  </ul>


	</section> <!-- homepage category container -->

	</div> <!-- container margins -->



<?php get_footer(); ?>