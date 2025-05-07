<?php get_header(); ?>

<div class="c-single-collections">
    <?php 
        $headerImage = get_field('header_image');
        $headerTitle = get_field('header_title');
        $headerDesc = get_field('header_description')
    ?>

    <section class="c-single-collections__header">
        <div class="c-single-collections__header-content-box">
            <h2 class="c-single-collections__header-title"><?php echo $headerTitle; ?></h2>
            <p class="c-single-collections__header-desc"><?php echo $headerDesc; ?></p>
        </div>
        <div class="c-single-collections__image-container">
            <img class="c-single-collections__image" src="<?php echo $headerImage['url']; ?>" alt="<?php echo $headerImage['alt']; ?>">
        </div>
    </section>

    <section class="c-single-collections__products-section">
    <?php if( have_rows('products') ): ?>

    <ul class="c-single-collections__products">
    <?php while( have_rows('products') ) : the_row(); ?>

        <?php $image = get_sub_field('image');
              $cta = get_sub_field('cta');
              $title = get_sub_field('title');
              $desc = get_sub_field('description');
        ?>
        <li class="c-single-collections__product">
            <a class="c-single-collections__product-cta" href="<?php echo $cta['url']; ?>">
            <figure>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
            <h4 class="c-single-collections__product-title"><?php echo $title; ?></h4>
            <p class="c-single-collections__product-desc"><?php echo $desc; ?></p>
            </a>
        </li>

  <?php endwhile; ?>
    </ul>

<?php 
else :
endif; ?>
    </section>

<section class="c-single-collections__product-details-section">
    <?php 
        $bgImage = get_field('product_details_image');
        $productDetailDesc = get_field('product_details_description');
    ?>
    <div class="c-single-collections__product-details-bg-image">
        <img src="<?php echo $bgImage['url']; ?>" alt="<?php echo $bgImage['alt']; ?>">
    </div>
    <div class="c-single-collections__product-details-box">
        <h3 class="c-single-collections__product-details-title">Product Details</h3>
        <p class="c-single-collections__product-details-desc"><?php echo $productDetailDesc; ?></p>
    </div>
</section>


</div>

<?php get_footer(); ?>