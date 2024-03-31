<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header() ?>
  <title>Document</title>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part("includes/headerAndSlider"); ?>
  <!-- main content -->
  <div class="container">
    <!-- sidebar -->
    <?php get_sidebar(); ?>
    <!-- main area -->
    <div class="main-area">
      <div class="top-area">
        <div class="title-card">
          <h1>Sorry...</h1>
        </div>
      </div>
      <div class="content">
        <div class="notfound"><img src="<?php echo get_template_directory_uri(); ?>/img/notFound.jpg" alt=""></div>
        <div class="basic-button-outer">
          <a class="basic-button" href="<?php echo esc_url('/') ?>">ホームに戻る</a>
        </div>
        <?php get_footer(); ?>
      </div>
    </div>
  </div>
  <?php  wp_footer(); ?>
</body>
</html>