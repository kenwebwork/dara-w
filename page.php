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
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <div class="main-area">
          <div class="top-area">
            <div class="title-card">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
          <div class="content">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php  wp_footer(); ?>
</body>
</html>