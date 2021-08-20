<?php get_header(); ?>

<main>
<div class="container-margins">
<div class="page-about">
<div class="page-about__text">
<h1 class="page-about__title">Mission Statement</h1>
<?php the_content(); ?>
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