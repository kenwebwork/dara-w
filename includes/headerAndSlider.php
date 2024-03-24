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
    <ul>
      <li><a href="#">ロードマップ</a></li>
      <li><a href="<?php echo esc_url('/'); ?>/lesson">レッスン一覧</a></li>
      <li><a href="<?php echo esc_url('/article'); ?>">記事一覧</a></li>
      <li><a href="#">ああああ</a></li>
      <li><a href="#">ああああ</a></li>
    </ul>
  </nav>
  <label class="slider-margin" for="menu-btn-check" onclick="openCloseSlider()"></label>
</div>