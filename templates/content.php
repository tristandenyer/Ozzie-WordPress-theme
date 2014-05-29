<article <?php post_class(); ?>>	
	<div class="row o-blog">
		<div class="col-sm-5 col-md-4">
			<div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } else { ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/missing-image.gif" ><?php } ?></a></div>
		</div>
		<div class="col-sm-7 col-md-8">
			<header>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php get_template_part('templates/entry-meta'); ?>
			</header>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
</article>