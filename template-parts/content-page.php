<?php
	/*
	==============================
		PAGE FORMAT
	==============================
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-light text-center p-4 my-5'); ?>>

	<header class="entry-header text-center mb-3">
		<?php the_title( '<h1 class="entry-title">', '</h1>'); ?>
		<p class="text-muted"><?php pl_e( 'Last updated' ); ?>:  <?php the_time('F j, Y'); ?></p>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!--.entry-content-->

</article>
