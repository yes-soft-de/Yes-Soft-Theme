<?php /* Template Name: newsletter */ ?>
<?php get_header() ?>

<div class="our-posts e-commerce-service our-services py-5" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="post p-3 pb-0 bg-white mb-5">
            <h1 class="col-12 col-sm-9 col-lg-7 col-xl-6 mx-auto text-center pt-5"><?php the_title(); ?></h1>
            <hr class="my-3">
            <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                    <p class="general-desc entry-content-page mb-5">
                        <?php the_content(); ?> <!-- Page Content -->
                    </p><!-- .entry-content-page -->

                <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
