<?php get_header(); 
  $bannerText = get_field('banner_text', 'option');
?>

<?php if($bannerText) { ?>
  <div class="c-banner">
    <?php echo $bannerText; ?>
  </div>
<?php } ?>

<div class="c-homepage">

    <?php if( have_rows('featured_header_images') ): ?>
      
      <ul class="c-homepage__featured-images">
    <?php while( have_rows('featured_header_images') ) : the_row(); ?>

        <?php $image = get_sub_field('image'); 
              $link = get_sub_field('link');
        ?>
        <li class="c-homepage__featured-image-list-item">
          <figure>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
            <a href="<?php echo $link['url']; ?>" class="c-homepage__featured-link"><?php echo $link['title']; ?></a> 
        </li>

    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>

  <div class="c-homepage__latest-collections">
  <h4 class="c-homepage__latest-collections-title">Shop Our Collections</h4>


  <?php if( have_rows('collections_list') ): ?>

<ul class="c-homepage__latest-collections-list">
    <?php while( have_rows('collections_list') ) : the_row();

        
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $cta = get_sub_field('cta');
        ?>
        <li class="c-homepage__latest-collection-list-item">
          <a href="<?php echo $cta['url']; ?>">
          <figure>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </figure>
          <h4 class="c-homepage__latest-collection-list-item-title"><?php echo $title; ?></h4>
          </a>
        </li>

    <?php endwhile; ?>
  </ul>

<?php 
else :
    // Do something...
endif; ?>
  </ul>

  </div>

<section class="c-homepage__best-sellers">
  <h3 class="c-homepage__best-sellers-title">Best Sellers</h3>
  <p class="c-homepage__best-sellers-desc">Our clothing combines timeless style with modern comfort, offering high-quality, versatile pieces that elevate your everyday wardrobe. Crafted with care and designed to last, our collection is perfect for those who seek both fashion and function.</p>

  <?php if( have_rows('best_sellers') ): ?>

    <ul class="c-homepage__best-sellers-list">
    <?php while( have_rows('best_sellers') ) : the_row();

        $image = get_sub_field('image');
        $title = get_sub_field('title'); ?>

      <li class="c-homepage__best-sellers-list-item">
          <a href="<?php echo $title['url']; ?>">
          <figure>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </figure>
          <h4 class="c-homepage__best-sellers-list-item-title"><?php echo $title['title']; ?></h4>
          </a>
        </li>
        
    <?php endwhile; ?>
  </ul>

<?php 
else :
endif; ?>

</section>


<section class="c-homepage__newsletter-section">
  <?php 
    $newsletterImage = get_field('newsletter_image', 'option');
    $newsletterTitle = get_field('newsletter_title', 'option');
    $newsletterDesc = get_field('newsletter_description', 'option');
    $newsletterShortCode = get_field('newsletter_shortocde', 'option');
  ?>
  <div class="c-homepage__newsletter-image">
    <img src="<?php echo $newsletterImage['url']; ?>" alt="<?php echo $newsletterImage['alt']; ?>">
  </div>
  <div class="c-homepage__newsletter-content">
    <h4 class="c-homepage__newsletter-title"><?php echo $newsletterTitle; ?></h4>
    <p class="c-homepage__newsletter-desc"><?php echo $newsletterDesc; ?></p>
    <div class="c-homepage__newsletter-form">
      <?php echo $newsletterShortCode; ?>
    </div>

  </div>
</section>



</div>


<?php get_footer(); ?>