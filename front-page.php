<?php
/* 

Template Name: Roadmap

*/
?>

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
          <img src="<?php echo get_template_directory_uri(); ?>/img/roadmap_top2.jpg" alt="">
        </div>
      </div>
      <div class="content jump-area">
        <span>Jump to...</span>
        <a href="<?php echo esc_url('#step0') ?>">Step 0</a>
        <a href="<?php echo esc_url('#step1') ?>">Step 1</a>
        <a href="<?php echo esc_url('#step2') ?>">Step 2</a>
        <a href="<?php echo esc_url('#step3') ?>">Step 3</a>
        <a href="<?php echo esc_url('#step4') ?>">Step 4</a>
        <a href="<?php echo esc_url('#step5') ?>">Step 5</a>
      </div>
      <div class="content article">
        <a id="to-top">TOP</a>
        <ul id="lesson-lists">
          <li class="lessons">
            <h3 id="step0">Step 0 - 始めてみよう！</h3>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/about#how-to-use-this-site') ?>">このサイトの使い方</a></li>
              <li><a href="<?php echo esc_url('/') ?>">☆How are you? の使い方</a></li>
              <li><a href="<?php echo esc_url('/') ?>">☆英語力の伸び方</a></li>
            </ul>
          </li>
          <li class="lessons">
            <h3 id="step1">Step 1 - 文型</h3>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/svc') ?>">SVC</a></li>
              <li><a href="<?php echo esc_url('/svo') ?>">SVO</a></li>
              <li><a href="<?php echo esc_url('/svoo') ?>">SVOO</a></li>
              <li><a href="<?php echo esc_url('/svoc') ?>">SVOC</a></li>
              <li><a href="<?php echo esc_url('/sv') ?>">SV</a></li>
              <li><a href="<?php echo esc_url('/') ?>">☆You know, I mean, like</a></li>
            </ul>
          </li>
          <li class="lessons">
            <h3 id="step2">Step 2 - 時制</h3>
            <h4>Step 2-1</h4>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/iamdoing') ?>">現在進行形（I am doing）</a></li>
              <li><a href="<?php echo esc_url('/iamdoing-and-ido') ?>">現在進行形と現在形（I'm doing and I do）</a></li>
              <li><a href="<?php echo esc_url('/iamdoing-and-ido2') ?>">現在進行形と現在形（I'm doing and I do）2</a></li>
              <li><a href="<?php echo esc_url('/idid') ?>">過去形（I did）</a></li>
              <li><a href="<?php echo esc_url('/idid-and-iwasdoing') ?>">過去形とその進行形（I did and I was doing）</a></li>
              <li><a href="<?php echo esc_url('/properties-of-past-tence') ?>">[Article] 過去形の意外な性質</a></li>
            </ul>
            <h4>Step 2-2</h4>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/ihavedone') ?>">現在完了形（I have done）</a></li>
              <li><a href="<?php echo esc_url('/ihavebeendoing') ?>">現在完了進行形（I have been doing）</a></li>
              <li><a href="<?php echo esc_url('/ihavebeendoing-and-ihavedone') ?>">現在完了形と現在完了進行形（I have done, I have been doing）</a></li>
            </ul>
            <h4>Step 2-3</h4>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/ihavedone-and-idid') ?>">☆practice現在完了形と過去形（I have done, I did）</a></li>
              <li><a href="<?php echo esc_url('/ihaddone') ?>">過去完了形（I had done）</a></li>
              <li><a href="<?php echo esc_url('/') ?>">☆過去完了進行形（I had been doing）</a></li>
              <li><a href="<?php echo esc_url('/have-and-havegot') ?>">[Article] have and have got</a></li>
              <li><a href="<?php echo esc_url('/usedto') ?>">used to</a></li>
            </ul>
            <h4>Step 2-4</h4>
            <ul class="lesson-list">
              <li><a href="<?php echo esc_url('/') ?>">[Article] 未来を意味する現在形</a></li>
              <li><a href="<?php echo esc_url('/') ?>">Will and shall</a></li>
              <li><a href="<?php echo esc_url('/') ?>">Will と be going to</a></li>
              <li><a href="<?php echo esc_url('/') ?>">will be doing and will have done</a></li>
              <li><a href="<?php echo esc_url('/') ?>">時制のまとめ</a></li>
              <li><a href="<?php echo esc_url('/') ?>">時制のまとめ2</a></li>
            </ul>
          </li>
          <li class="lessons">
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
          </li>
        </ul>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>