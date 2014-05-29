<div class="featured-backstretch">
  <header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </header>
  <div class="title-container">
    <div class="wrap container">
      <?php if (is_page()) {
        get_template_part('templates/page', 'header-alt');
        } elseif (is_singular()) {
        get_template_part('templates/page', 'header');
        } else {
        get_template_part('templates/page', 'header-alt');
        }
      ?>
    </div>
  </div>
</div>
<div class="caption-bar">
  <div class="container">
    <div class="col-sm-12"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></div>
  </div>
</div>
