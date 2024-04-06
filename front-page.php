<?php
/* 

Template Name: Roadmap

*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header() ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part("includes/headerAndSlider"); ?>
  <div class="container">
    <?php get_sidebar(); ?>
    <div class="main-area">
      <div class="top-area">
        <div class="title-card">
          <h1>おすすめロードマップ</h1>
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
          <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap_top2.webp" alt="">
        </div>
      </div>
      <div class="content jump-area">
        <span>Jump to...</span>
        <a href="<?php echo esc_url('#step0') ?>">Step 0</a>
        <a href="<?php echo esc_url('#step1') ?>">Step 1</a>
        <a href="<?php echo esc_url('#step2') ?>">Step 2</a>
        <!-- <a href="<?php echo esc_url('#step3') ?>">Step 3</a>
        <a href="<?php echo esc_url('#step4') ?>">Step 4</a>
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
          <!-- <li class="lessons">
            <h3 id="step3">Step 3 - ????</h3>
            <h4>Step 3-1</h4>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/') ?>">What</a></li>
              <li><a href="<?php echo esc_url('/') ?>">Who</a></li>
              <li><a href="<?php echo esc_url('/') ?>">Whose</a></li>
              <li><a href="<?php echo esc_url('/') ?>">When</a></li>
              <li><a href="<?php echo esc_url('/') ?>">Which</a></li>
              <li><a href="<?php echo esc_url('/') ?>">How</a></li>
              <li><a href="<?php echo esc_url('/') ?>">What time</a></li>
              <li><a href="<?php echo esc_url('/') ?>">How long</a></li>
            </ul>
            <h4>Step 3-2</h4>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/') ?>">can, be able to</a></li>
              <li><a href="<?php echo esc_url('/') ?>">have to, must</a></li>
              <li><a href="<?php echo esc_url('/') ?>">should</a></li>
              <li><a href="<?php echo esc_url('/') ?>">would</a></li>
              <li><a href="<?php echo esc_url('/') ?>">I’d better</a></li>
            </ul>
            <h4>Step 3-3</h4>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/') ?>">no, none, any</a></li>
              <li><a href="<?php echo esc_url('/') ?>">much, many, little</a></li>
              <li><a href="<?php echo esc_url('/') ?>">both, either, neither</a></li>
              <li><a href="<?php echo esc_url('/') ?>">all, every, whole</a></li>
              <li><a href="<?php echo esc_url('/') ?>">each every</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>