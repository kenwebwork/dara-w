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
          <li class="lessons">
            <h3>前置詞</h3>
            <ul>
              <li><a href="#">at</a></li>
              <li><a href="#">by</a></li>
              <li><a href="#">in</a></li>
              <li><a href="#">with</a></li>
            </ul>
          </li>
          <li class="lessons">
            <h3>接続詞</h3>
            <ul>
              <li><a href="#">though と although</a></li>
              <li><a href="#">before と after</a></li>
              <li><a href="#">when</a></li>
              <li><a href="#">while</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <footer>
        <?php get_footer(); ?>
      </footer>
    </div>
  </div>
  <?php  wp_footer(); ?>
</body>
</html>