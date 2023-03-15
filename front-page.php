<?php get_header(); ?>

<div class="c-banner">
  <?php echo get_field('banner_text', 'option'); ?>
</div>

		<div class="container-margins">

	<section class="homepage-category-container">
    <div class="homepage-category-container__featured-header">
    <?php if( have_rows('featured_header_images') ): ?>

    <ul class="homepage-category-container__featured-images">
    <?php while( have_rows('featured_header_images') ) : the_row(); ?>

        <?php $image = get_sub_field('image'); 
              $link  = get_sub_field('link');
        ?>
              <li class="homepage-category-container__featured-image">
                <a class="homepage-category-container__link" href="<?php echo $link['url']; ?>">
                  <figure class="homepage-category-container__featured-img">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                  </figure>
                </a>
                <p class="homepage-category-container__featured-title"><?php echo $link['title']; ?></p>
              </li>
    <?php endwhile;
endif; ?>
</ul>
    </div>

  <?php if( have_rows('categories') ): ?>
      <ul class="homepage-categories gutenberg-styles">
    <?php while( have_rows('categories') ) : the_row(); ?>
        <?php $catImage = get_sub_field('category_image');
        $catTitle = get_sub_field('category_link'); ?>

        <li class="homepage-category">
          <a class="homepage-category__text" href="<?php echo $catTitle['url']; ?>">
          <figure>
          <img alt="<?php echo $catImage['alt']; ?>" class="homepage-category__img" src="<?php echo $catImage['url']; ?>">
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