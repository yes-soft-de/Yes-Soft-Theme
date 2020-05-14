<?php get_header(); ?>


	<div class="container">
		<?php
			// Check If There Is A Post In Database
			if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>
					<div class="single-post p-4 mt-5">
						<?php if (current_user_can('administrator')) : ?>
							<?php edit_post_link('Edit <i class="fa fa-pencil fa-fw"></i>'); ?>
						<?php endif; ?>
						<h2 class="single-post-header m-0">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="single-post-detail my-2">
                    <span class="post-auther mr-3">
<!--                        <i class="fa fa-user fa-fw"></i>--><?php //the_author_posts_link(); ?>
                      <i class="fa fa-user fa-fw"></i><a href="#"><?php echo get_the_author() ?></a>
                    </span>
							<span class="post-date mr-3">
                        <i class="fa fa-calendar fa-fw"></i> <?php the_time('F j, Y'); ?>
                    </span>
							<span class="post-comment">
                        <i class="fa fa-comments fa-fw"></i>
  	                    <?php comments_popup_link( pll_('0 Comment'), pll_('One Comment'), '% ' . pll_('Comments'), '', pll_('disabled Comment') ); ?>
                    </span>
						</div>
						<hr>
						<div class="post-content mt-3">
							<div class="embed-responsive embed-responsive-16by9">
								<?php the_content(); ?>
							</div>
						</div>
						<p class="post-categories mt-3">
							<?php
								// Print The Categories
								if ( yes_soft_get_terms( $post->ID, 'media_category' ) ) {
									echo '<i class="fa fa-tags fa-fw"></i>' . pll_( ' Cat' ) . ' : ';
									echo yes_soft_get_terms( $post->ID, 'media_category' );
								} else {
									echo '<i class="fa fa-tags fa-fw"></i> ' . pll_( ' Cat : There\'s No Categories For This Media Post' );
								}
								echo '<br />';
								// Check If There Is Tags Or Not
								if ( yes_soft_get_terms( $post->ID, 'media_tag' ) ) {
									echo '<i class="fa fa-tags fa-fw"></i>' . pll_( ' Tags' ) . ': ';
									echo yes_soft_get_terms( $post->ID, 'media_tag' );
								} else {
									echo '<i class="fa fa-tags fa-fw"></i>' . pll_( ' Tags: There\'s No Tags For This Media Post' );
								}
							?>
						</p>
					</div>
					<?php
				} // End While Loop
			} // End Check For Having Post


			// Start Random Posts Section
			$post_rand_argument = array(
				'post_type'   => 'media_post',
				'post_per_page' => 5,     // get 5 artical
				'orderby' => 'rand',    // order random
				'category__in' => wp_get_post_categories(get_queried_object_id()), // Bring All Posts In This Category
				'post__not_in' => array(get_queried_object_id()) // Exclude This Posts Id
			);
			$rand_post_query = new WP_Query($post_rand_argument);
			// Check If There Is A Post In Database
			if ($rand_post_query->have_posts()) {
				echo '<div class="random-post my-4">';
				echo '<h4 class="post-author-title mt-2">' . pll_( 'Random Posts On This Category' ) . '</h4>';
				while ($rand_post_query->have_posts()) {
					$rand_post_query->the_post(); ?>
					<h4 class="post-author-random-posts text-secondary p-2">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php
				} // End While Loop
				echo '</div>';
			} else {

				echo '<div class="random-post"><h4 class="post-author-random-posts text-secondary my-2 p-2" style="border-color:#45a9b7">' . pll_( 'There Isn\'t Post To Display' ) . '</h4></div>';

			} // End Check For Having Post
			wp_reset_postdata(); // reset loop query
			// End Random Posts Section


			// Start Pagination Section
			echo '<div class="col-sm-12">';
			echo '<div class="post-pagination text-center">';
			// Create The Pagination Pages
			if (get_previous_post_link()) {
				previous_post_link();
			} else {
				echo '<span>' . pll_( 'Prev' ) . '</span>';
			}
			if (get_next_post_link()) {
				next_post_link();
			} else {
				echo '<span>' . pll_( 'Next' ) . '</span>';
			}
			echo '</div>';
			echo '</div>';
			echo '<hr>';

			// Start Comments Section
			comments_template();
			// End Comments Section
		?>
	</div>



<?php get_footer(); ?>
