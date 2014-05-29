<ul class="nav nav-pills nav-stacked">
  <li class="active">
    <span class="badge pull-right comment-count"><a href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 comment', '% comments'); ?></a></span>
      <p class="byline author vcard"><?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>
  </li>
</ul>
	
