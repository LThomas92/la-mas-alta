<?php get_header(); 
  $bannerText = get_field('banner_text', 'option');
?>

<?php if($bannerText) { ?>
  <div class="c-banner">
    <?php echo $bannerText; ?>
  </div>
<?php } ?>

<div class="c-homepage">

    <div class="c-homepage__featured-images">

        <?php 
        $bigImage = get_field('featured_big_image');
        $smallImage = get_field('featured_small_image');
        $link = get_field('link');
        $smallTitle = get_field('small_title');
        $bigTitle = get_field('big_title')
        ?>

        <li class="c-homepage__featured-big">
          <figure>
            <img src="<?php echo $bigImage['url']; ?>" alt="<?php echo $bigImage['alt']; ?>">
          </figure>
          <div class="c-homepage__featured-meta-info">
          <p class="c-homepage__featured-small-title"><?php echo $smallTitle; ?></p>
          <h2 class="c-homepage__featured-big-title"><?php echo $bigTitle; ?></h2>
          <a href="<?php echo $link['url']; ?>" class="c-homepage__featured-link"><?php echo $link['title']; ?></a> 
          </div> 
        </li>

        <li class="c-homepage__featured-small">
          <figure>
            <img src="<?php echo $smallImage['url']; ?>" alt="<?php echo $smallImage['alt']; ?>">
          </figure>
        </li>

  </div>

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
  ?>
  <div class="c-homepage__newsletter-image">
    <img src="<?php echo $newsletterImage['url']; ?>" alt="<?php echo $newsletterImage['alt']; ?>">
  </div>
  <div class="c-homepage__newsletter-content">
    <h4 class="c-homepage__newsletter-title"><?php echo $newsletterTitle; ?></h4>
    <p class="c-homepage__newsletter-desc"><?php echo $newsletterDesc; ?></p>
    <div class="c-homepage__newsletter-form">
      <?php echo do_shortcode('[mc4wp_form id=291]'); ?>
    </div>

  </div>
</section>



</div>


<?php get_footer(); ?>