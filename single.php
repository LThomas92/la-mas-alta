<?php get_header(); ?>

<?php
		while ( have_posts() ) :
			the_post(); ?>

<main>
<div class="container-margins">
<p class="blog-single-post__date"><?php echo the_date();?></p>
<div class="blog-single-post__title">
<h1><?php echo the_title(); ?></h1>
</div>
<div class="blog-single-post">
<figure class="blog-single-post__img">
<?php the_post_thumbnail(); ?>
</figure>
<div class="blog-single-post__text">
<?php the_content(); ?>
</div> <!-- blog single post text -->
</div> <!-- blog single post -->
<?php endwhile; // End of the loop.
		?>

<ul class="single-blog-icons">
                 <li>
                 <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                    <a title="Share this post on Twitter" target="_blank" href="http://twitter.com/share?url=<?php echo urlencode(get_permalink($post->ID)); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="1" class="single-post__share-icon-img"/></a>
                 </li>
               <li>
                <a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>" title="Share this post on Facebook" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="1" class="single-post__share-icon-img"/></a>
				 </li>
				 <li>
                <a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" title="Share this on Pinterest" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/pintrest.svg" alt="1" class="single-post__share-icon-img"/></a>
				 </li>
            </ul> 
</div> <!-- container margins -->


</main>

<?php get_footer(); ?>