<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
		<?php endwhile; ?>
		<?php comments_template('/templates/comments.php'); ?>
	</div>
</div>
