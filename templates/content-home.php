<article <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<?php comments_template('/templates/comments.php'); ?>
</article>