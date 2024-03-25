<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part("includes/headerAndSlider"); ?>
  <!-- main content -->
  <div class="container">
    <!-- sidebar -->
    <?php get_sidebar(); ?>
    <!-- main area -->
    <div class="main-area">
      <div class="top-area">
        <div class="title-card">
          <h1>レッスン一覧</h1>
        </div>
      </div>
      <div class="content">
        <ul id="lesson-lists">
          <li class="lessons">
            <h3>文型</h3>
            <ul>
              <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post();?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;?>
              <?php else: ?>
                <li>現在準備中です。</li>
              <?php endif; ?>
            </ul>
          </li>
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php  wp_footer(); ?>
</body>
</html>