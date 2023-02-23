<?php get_header(); ?>

		<div class="container-margins">

	<section class="homepage-category-container gutenberg-styles">
    <?php 
      $featuredImageLeftOne = get_field('featured_image_left_side_image_1');
      $featuredImageLeftTwo = get_field('featured_image_left_side_image_2');
      $featuredImageRightOne = get_field('featured_image_right_side_image_1');
      $featuredImageRightTwo = get_field('featured_image_right_side_image_2');
    ?>

    <div class="homepage-category-container__featured-header">    
      <div class="homepage-category-container__column1">
        <figure class="">
        <img src="<?php echo $featuredImageLeftOne['url']; ?>" alt="<?php echo $featuredImageLeftOne['alt']; ?>">
        </figure>
        <figure class="">
        <img src="<?php echo $featuredImageLeftTwo['url']; ?>" alt="<?php echo $featuredImageLeftTwo['alt']; ?>">
        </figure>
      </div>
      <div class="homepage-category-container__column2">
        <?php echo $featuredImageText; ?>
      </div>
      <div class="homepage-category-container__column3">
          <div class="homepage-category-container__small-img">
          <img src="<?php echo $featuredRightOne['url']; ?>" alt="<?php echo $featuredImageRightOne['alt']; ?>">
          </div>
          <div class="homepage-category-container__small-img">
          <img src="<?php echo $featuredImageRightTwo['url']; ?>" alt="<?php echo $featuredImageRightTwo['alt']; ?>">
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