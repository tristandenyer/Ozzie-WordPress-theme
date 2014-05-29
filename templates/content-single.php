<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <div class="entry-bottom">
      <div class="categories">Category: <?php the_category(', '); ?></div>
      <div class="tags"><?php the_tags(); ?></div>
    </div>
    <footer>
      <div class="row o-post-navigation">
        <div class="col-sm-6 previous-post"><div class="prev-next-wrapper">Previous post:<br /><?php previous_post_link('%link'); ?></div></div>
        <div class="col-sm-6 next-post"><div class="prev-next-wrapper">Next post:<br /><?php next_post_link('%link'); ?></div></div>
      </div>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
