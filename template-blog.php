<?php
/**
* Template Name: Blog
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/ ?>

<?php get_header(); ?>

<main>
<?php $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $loop = new WP_Query( $args );  ?>
    <div class="blog-container">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="blog-single">
    <a href="<?php the_permalink();?>">
    <figure class="blog-single__img">
    <?php the_post_thumbnail();?>
    </figure>
    </a>
    <div class="blog-single__text">
    <a href="<?php echo the_permalink();?>">
    <h1 class="blog-single__title"><?php the_title(); ?></h1>
    </a>
    <p><?php echo wp_trim_words(get_the_content(), 50);?></p>
    <a class="blog-single__link" href="<?php the_permalink();?>">Read More</a>
    <ul class="blog-share-icons">
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
    </div> <!-- blog single text -->
    </div> <!-- blog single -->
    <?php endwhile;
     wp_reset_postdata(); ?>
        </div> <!-- blog container -->

</main>



<?php get_footer(); ?>