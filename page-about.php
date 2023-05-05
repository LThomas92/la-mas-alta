<?php get_header(); ?>

<main>
<div class="container-margins">
<div class="page-about">
<div class="page-about__text">
<div class="page-about__content">
    <h2 class="page-about__our-story-title">Our Story</h2>
    <div class="page-about__our-story">
    <?php echo get_field('our_story'); ?>
    </div>
</div>
<h1 class="page-about__title">Mission Statement</h1>
    <div class="page-about__mission-statement">
    <?php echo get_field('mission_statement'); ?>
    </div>
</div> <!-- page about text -->

<div class="page-about__img-container">
<figure class="page-about__img">
<?php the_post_thumbnail();?>
</figure>
</div> <!-- img container -->
</div> <!-- page about -->
</div> <!-- container margins -->

</main>

<?php get_footer(); ?>