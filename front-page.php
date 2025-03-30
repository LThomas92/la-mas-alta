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
          <figure>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </figure>
          <a href="<?php echo $cta['url']; ?>">
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



</div>




<?php get_footer(); ?>