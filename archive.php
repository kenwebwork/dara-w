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
      <?php if(have_posts()): ?>
        <div class="top-area">
          <div class="title-card">
            <h1><?php single_cat_title(); ?> 一覧</h1>
          </div>
        </div>
        <div class="content">
          <ul class="lesson-list">
            <?php while(have_posts()): the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>  
            <?php endwhile; ?>
          </ul>
        </div>
      <?php else: ?>
        <div class="content">
          <p>現在準備中です。</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/lesson.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/public/public.js"></script>
  <?php  wp_footer(); ?>
</body>
</html>