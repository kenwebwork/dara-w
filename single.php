<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header() ?>
</head>
<!-- mobile mode -->
<!-- 問題のやじるし直す -->

<body <?php body_class(); ?>>
  <?php get_template_part("includes/headerAndSlider"); ?>
  <!-- main content -->
  <div class="container">
    <!-- sidebar -->
    <?php get_sidebar(); ?>

    <!-- main area -->
    <?php while(have_posts()): the_post(); ?>
      <div class="main-area">
        <div class="top-area">
          <div class="title-card">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>

        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
  <?php wp_footer(); ?>
</body>
</html>