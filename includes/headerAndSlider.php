<?php wp_body_open(); ?>

<header id="header">
  <div class="hamburger-menu">
    <input type="checkbox" id="menu-btn-check">
    <label for="menu-btn-check" class="menu-btn" onclick="openCloseSlider()"><span></span></label>
  </div>
  <div class="logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo_rectangle.png" alt="site logo">
    </a>
  </div>
</header>
<div id="slider" class="unshown">
  <nav class="slider-contents">
    <?php get_template_part("includes/menu-nav"); ?>
  </nav>
  <label class="slider-margin" for="menu-btn-check" onclick="openCloseSlider()"></label>
</div>