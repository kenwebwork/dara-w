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
            <div class="basic-button-outer">
              <div class="basic-button grad-button" onclick="openCloseDesc()">解説を<span id="openClose">開く</span></div>
            </div>
          </div>
        </div>
        <?php the_content(); ?>
        <?php $terms = get_the_terms($post->ID, 'lesson_category'); ?>
        <?php if($terms): ?>
          <?php foreach($terms as $term): $slug = $term->slug; ?>
            <?php if(str_contains($slug, 'step')): ?>
              <div class="other-lessons-area">
                <h2>このレッスンはロードマップの <?php echo str_replace('step', 'Step', $slug); ?> に含まれています</h2>
                <div id="other-lessons">
                  <?php get_template_part('includes/steps/'.$slug); ?>
                </div>
                <div class="basic-button-outer">
                  <a class="basic-button grad-button" href="<?php echo esc_url('/'); ?>">ロードマップ</a>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endwhile; ?>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php  wp_footer(); ?>
</body>
</html>