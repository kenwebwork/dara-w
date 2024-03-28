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
    <div class="main-area">
      <?php while(have_posts()): the_post(); ?>
        <div class="top-area">
          <div class="title-card">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="content article">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>