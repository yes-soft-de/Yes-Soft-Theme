<?php /* Template Name: Service Page With Table */ ?>

<?php get_header() ?>

 <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<!--      <div class="container">-->
        <?php
          if ( have_posts() ):
            while ( have_posts() ):
              the_post(); ?>

							<div class="our-posts e-commerce-service service-page-table our-services py-5">
								<div class="container">
									<div class="post p-3 pb-0 bg-white mb-5">

										<?php the_title( '<h1 class="col-12 col-sm-9 col-lg-7 col-xl-6 mx-auto text-center pt-5">', '</h1>') ?>

										<hr class="my-3">
										<p class="general-desc mb-5">
											<?php the_content(); ?>
										</p>
									</div>

								</div>
							</div>
				<?php endwhile; endif; ?>
<!--      </div>-->

    </main>
 </div><!--#primary-->

<?php get_footer() ?>
