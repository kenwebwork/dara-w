<?php
/* 

Template Name: Roadmap

*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header() ?>
  <meta name="description" content="英語を使えるようになるための練習用のサイトです。レッスンの問題を声に出して解きながら英会話を身につけましょう！">
</head>

<body <?php body_class(); ?>>
  <?php get_template_part("includes/headerAndSlider"); ?>
  <div class="container">
    <?php get_sidebar(); ?>
    <div class="main-area">
      <div class="top-area">
        <div class="title-card">
          <h1>daraEnglish - ロードマップ</h1>
        </div>
      </div>
      <div class="content roadmap_top">
        <div class="roadmap-left">
          <div class="top-buttons">
            <div class="basic-button-outer">
              <a class="basic-button grad-button grad-green" href="<?php echo esc_url('/about') ?>">daraEnglish とは</a>
            </div>
            <div class="basic-button-outer">
              <a class="basic-button grad-button grad-green" href="<?php echo esc_url('/about#how-to-use-this-site') ?>">このサイトの使い方</a>
            </div>
          </div>
        </div>
        <div class="roadmap-right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap_top4.webp" alt="">
        </div>
      </div>
      <div class="content jump-area">
        <span>Jump to...</span>
        <a href="<?php echo esc_url('#step0') ?>">Step 0</a>
        <a href="<?php echo esc_url('#step1') ?>">Step 1</a>
        <a href="<?php echo esc_url('#step2') ?>">Step 2</a>
        <a href="<?php echo esc_url('#step3') ?>">Step 3</a>
        <!-- <a href="<?php echo esc_url('#step4') ?>">Step 4</a>
        <a href="<?php echo esc_url('#step5') ?>">Step 5</a> -->
      </div>
      <div class="content article">
        <a id="to-top">TOP</a>
        <ul id="lesson-lists">
          <li class="lessons">
            <?php get_template_part("includes/steps/step0"); ?>
          </li>
          <li class="lessons">
            <?php get_template_part("includes/steps/step1"); ?>
          </li>
          <li class="lessons">
            <?php get_template_part("includes/steps/step2"); ?>
          </li>
		      <li class="lessons">
            <?php get_template_part("includes/steps/step3"); ?>
          </li>
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>