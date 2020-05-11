<?php
	/*
	    Template Name: Standard Service Page
	 */

	 get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
	    <?php
		    if ( have_posts() ):
	  	    while ( have_posts() ):
  	  	    the_post(); ?>

            <div class="our-posts e-commerce-service our-services py-5">
                <div class="container">
                    <div class="post py-3 px-4 pb-0 bg-white mb-5">
                        <?php if ( yes_soft_get_attachments(2) ): ?>
                          <div class="row">
                            <?php foreach ( yes_soft_get_attachments(3) as $attachmentUrl ): ?>
                              <div class="col-4 text-center mb-3 mx-auto">
                                  <img src="<?php echo $attachmentUrl ?>" class="img-fluid" alt="" />
                              </div>
                            <?php endforeach; ?>
                          </div>
                        <?php endif; ?>

                        <?php the_title( '<h1 class="col-12 col-sm-9 col-lg-7 col-xl-6 mx-auto text-center pt-5">', '</h1>') ?>

                        <hr class="my-3">
                        <p class="general-desc mb-5">
                          <?php the_content(); ?>
                        </p>
                    </div><!--.post-->
                </div><!--.container-->
            </div><!--.our-posts-->
		      <?php endwhile; endif; ?>

    </main>
  </div><!--#primary-->

<?php get_footer() ?>
