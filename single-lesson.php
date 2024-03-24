<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header() ?>
  <title>Document</title>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part("includes/headerAndSlider"); ?>
  <div class="container">
    <?php get_sidebar(); ?>
    <?php while(have_posts()): the_post(); ?>
      <div class="main-area">
        <div class="top-area">
          <div class="title-card">
            <h1><?php the_title(); ?></h1>
            <div class="basic-button-outer">
              <div class="basic-button grad-button" onclick="openCloseDesc()">解説を<span id="openClose">開く</span></div>
            </div>
          </div>
        </div>
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/public/public.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/lesson.js"></script>
  <?php  wp_footer(); ?>
</body>
</html>