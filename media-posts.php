<?php
	/* Template Name: Video Posts */
	/* This Page Is The Custom Video Blog Page Which Use To Display The Whole Video Posts*/ ?>

<?php get_header(); ?>

<?php
// Set Arguments TO Fetch All Posts For This Custom Post Type (media_post)
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type' => 'media_post',
  'paged' => $paged
);
$query = new WP_Query( $args );

// Check If There Is Posts Or Not
if ( $query->have_posts() ):?>

<!--STart Our Posts Page-->

<div class="our-posts my-5">
    <div class="container">
        <div class="row">
            <?php while( $query->have_posts() ): $query->the_post(); ?>
            <div class="col-md-6">

                <div class="post mt-4">

                    <?php if ( has_post_thumbnail() ) : ?>

                        <a class="post-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

                            <?php the_title( '<h3 class="post-title p-3">', '</h3>' ) ?>

                            <?php the_post_thumbnail( '', ['class' => 'img-fluid', 'alt' => 'Post Image'] ); ?>

                        </a>

                    <?php else: ?>

                        <a class="post-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

                            <?php the_title( '<h3 class="h1 post-title text-center just-header" style="height: 345px; padding-top:100px; overflow: hidden">', '</h3>' ) ?>

                        </a>

                        <hr class="m-0">

                    <?php endif; ?>

                    <div class="post-content text-center my-3 pb-4">

                        <div class="post-content-meta">

                            <?php the_time('F j, Y'); ?> <!--The Date For Creating Post-->

                            <?php the_author_posts_link() ?> <!--The Author How Create Post-->

                        </div>

                        <?php the_excerpt() ?> <!--Excerpt For The Post-->

                    </div>

                </div>

            </div>

            <?php endwhile; ?>

        </div>



        <!--Start Pagination Section-->

        <div class="pagination_number text-center mt-5">

            <?php echo yes_soft_media_post_pagination_number(); ?>
        </div>

        <!--End Pagination Section-->

    </div>

</div>

<!--End Post Content Page-->

<?php

else:

    echo '<div class="col-11 col-sm-10 col-md-7 alert alert-info mx-auto text-center my-5">' . pll_( 'Sorry, There Is No Media Posts To Display' ) . '</div>';

endif;
	wp_reset_postdata();


get_footer();

?>
