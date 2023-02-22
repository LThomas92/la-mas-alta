<?php get_header(); ?>

		<div class="container-margins">

	<section class="homepage-category-container gutenberg-styles">

  <?php $featuredImageMain = get_field('featured_image_main'); 
          $featuredImageText = get_field('featured_image_text');
          $featuredImageLeft = get_field('featured_image_left');
          $featuredImageRight = get_field('featured_image_right');
    ?>
    <div class="homepage-category-container__featured-header">    
      <div class="homepage-category-container__column1">
        <img src="<?php echo $featuredImageMain['url']; ?>" alt="<?php echo $featuredImageMain['alt']; ?>">
      </div>
      <div class="homepage-category-container__column2">
        <?php echo $featuredImageText; ?>
      </div>
      <div class="homepage-category-container__column3">
          <div class="homepage-category-container__small-img">
          <img src="<?php echo $featuredImageLeft['url']; ?>" alt="<?php echo $featuredImageLeft['alt']; ?>">
          </div>
          <div class="homepage-category-container__small-img">
          <img src="<?php echo $featuredImageRight['url']; ?>" alt="<?php echo $featuredImageRight['alt']; ?>">
          </div>
      </div>
  </div>

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