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
        <img class="c-single-collections__image" src="<?php echo $headerImage['url']; ?>" alt="<?php echo $headerImage['alt']; ?>">
    </section>



</div>

<?php get_footer(); ?>