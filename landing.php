<?php
/* 

Template Name: landing

*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header() ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/landing.css">
  <title>Document</title>
</head>
<body>
  <header id="header">
    <div class="hamburger-menu">
      <input type="checkbox" id="menu-btn-check">
      <label for="menu-btn-check" class="menu-btn" onclick="openCloseSlider()"><span></span></label>
    </div>
    <div class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_rectangle.png" alt="site logo">
      </a>
    </div>
  </header>
  <main>
    <section class="first-view">
      <img src="<?php echo get_template_directory_uri(); ?>/img/home/firstView.jpg" alt="home view">
      <div id="first-view-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_slightgray.png" alt="service logo">
      </div>
      <div class="first-view-comment">
        <p><span class="blue-text">だらだら</span>でも継続が近道</p>
        <p>英語が<span class="blue-text">自然と出てくる</span>ようになる</p>
      </div>
    </section>
    <section class="service">
      <div class="section-inner">
        <div class="service-desc-outer">
          <div class="service-desc-left">
            <h2>サービス内容</h2>
            <h3>英語を使えるようになるための練習の場です。</h3>
            <p>練習を通じて英語を「知っている」から「使える」を目指します。片手操作とノーストレを目指して設計された学習サイトです。継続のしやすさと使いやすさを重視しており、お菓子を食べなが、寝そべりながらでも学習を進めることができます。</p>
            <h3>daraEnglish の特徴</h3>
            <ul class="features">
              <li>全レッスン無料</li>
              <li>アカウント・ログイン不要</li>
              <li>オンラインでどこでも学習</li>
              <li>さくさく練習が進む操作感</li>
            </ul>
          </div>
          <div class="service-desc-right">
            <div class="service-card">
              <h3>レッスン一覧</h3>
              <ul>
                <li><a href="#">SVO</a></li>
                <li><a href="#">基礎文法</a></li>
                <li><a href="#">前置詞</a></li>
                <li><a href="#">前置詞</a></li>
                <li><a href="#">前置詞</a></li>
              </ul>
              <div class="basic-button-outer">
                <a href="categories.html" class="basic-button gradient-button linkto-categories">いますぐ学習</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="daradara">
      <div class="daradara-inner">
        <div class="dara-left">
          <h2>だらだらでもいいんだぜ</h2>
          <div>
            <p>英語学習 = 高いモチベで頑張る！</p>
            <p>この意識は素晴らしいですが、それは必須要素ではありません。</p>
            <p>継続することが一番の習得の近道なので、高いモチベを維持するのはカロリーが高いです。なので、英語学習の勉強はだらだらでもOKです。</p>
            <p>練習を繰り返していくうちに自然と英語が出せるようになります。「気づいたら練習したことあるフレーズが口から出てた」、ここのような体験はだらだら継続でも再現可能です。</p>
            <a href="categories.html" class="basic-button grad-button linkto-categories">いますぐ学習</a>
          </div>
        </div>
        <div class="dara-right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/home/daradara.jpg" alt="だらだら">
        </div>
      </div>
    </section>
    <section class="availability">
      <h2 class="center-h2">daraEnglishでできること</h2>
      <p class="sub-message">知識入れと練習を1レッスンとし、効率の良いスキルアップを体験できます。</p>
      <div class="availability-card-outer">
        <div class="availability-card">
          <div class="availability-card-left">
            <h3>スキマ時間で勉強</h3>
            <p>1レッスンの所要時間は約15分、一日のスキマ時間に学習を進めることができます。直感的なページ操作で勉強に短時間でも集中できます。</p>
            <a href="categories.html" class="linkto-categories2">いますぐ学習 →</a>
          </div>
          <div class="availability-card-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/shortTime.jpg" alt="隙間時間で勉強">
          </div>
        </div>
        <div class="availability-card row-reverse">
          <div class="availability-card-left">
            <h3>インプットとアウトプットを一度に</h3>
            <p>ただ練習をするのではなく、正しい知識を一緒に確認することで効率よく英語を身に着けます。</p>
            <a href="categories.html" class="linkto-categories2">いますぐ学習 →</a>
          </div>
          <div class="availability-card-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/inputOutput.jpg" alt="インプットとアウトプット">
          </div>
        </div>
        <div class="availability-card">
          <div class="availability-card-left">
            <h3>英語の学習習慣</h3>
            <p>各レッスンは繰り返し練習しやすいように作られており、学習の習慣化を手助けします。</p>
            <a href="categories.html" class="linkto-categories2">いますぐ学習 →</a>
          </div>
          <div class="availability-card-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/practice.jpg" alt="practice">
          </div>
        </div>
      </div>
    </section>
    <section class="experience">
      <h2 class="center-h2">体験してみる</h2>
      <p class="sub-message">実際の解説と練習は以下のようにタップでさくさく進めることができます。</p>
      <div class="experience-area">
        <div class="experience-area-outer">
          <p class="experience-message">実際の解説</p>
          <div class="content-area" id="desc-area">
            <div class="main-content">
              <div class="content-text">
                <h2>h2 tag</h2>
                <p>ここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入るここに内容が入る</p>
                <div class="en-example">
                  <p class="en">This is a pen.</p>
                  <p class="ja">これはぺンです。</p>
                </div>
              </div>
            </div>
          </div>
          <p class="experience-message">実際の練習問題</p>
          <div class="qa-box-outer">
            <div class="qa-box">
              <input id="q-1" class="qa-checkbox" type="checkbox" />
              <label for="q-1"><span>1.</span>必要なことの全ては練習することです。</label>
              <div class="en">All we need is to practice.</div>
            </div>
            <div class="qa-box">
              <input id="q-2" class="qa-checkbox" type="checkbox" />
              <label for="q-2"><span>2.</span>必要なことの全ては練習することです。</label>
              <div class="en">All we need is to practice.</div>
            </div>
            <div class="qa-box">
              <input id="q-3" class="qa-checkbox" type="checkbox" />
              <label for="q-3"><span>3.</span>必要なことの全ては練習することです。</label>
              <div class="en">All we need is to practice.</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="steps">
      <h2 class="center-h2">レッスン開始までの3ステップ</h2>
      <div class="step-illustration">
        <div class="step-card-outer">
          <div class="step-card">
            <div class="img-area">
              <img src="<?php echo get_template_directory_uri(); ?>/img/home/step1.jpg" alt="step1">
            </div>
            <div class="step-title">1. ボタンをクリック</div>
            <div class="step-desc">
              <p>「いますぐ学習」クリック、すぐに学習を始められます。</p>
              <p>アカウント登録やログインは不要です。</p>
            </div>
          </div>
          <div class="step-card">
            <div class="img-area">
              <img src="<?php echo get_template_directory_uri(); ?>/img/home/step2.jpg" alt="step2">
            </div>
            <div class="step-title">2. 学習内容を選択</div>
            <div class="step-desc">
              <p>ジャンル分けされたレッスンの中から学びたいものを選んでください。</p>
              <p>迷ったら一番上のレッスンから始めてください。</p>
            </div>
          </div>
          <div class="step-card">
            <div class="img-area">
              <img src="<?php echo get_template_directory_uri(); ?>/img/home/step3.jpg" alt="step3">
            </div>
            <div class="step-title">3. レッスン開始</div>
            <div class="step-desc">
              <p>準備ができたらさっそく学習をスタートします。</p>
              <p>できるだけ声に出して練習しましょう。</p>
            </div>
          </div>
        </div>
        <div class="basic-button-outer">
          <a href="categories.html" class="basic-button grad-button linkto-categories">いますぐ学習</a>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/public/public.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/lesson.js"></script>
  <?php  wp_footer(); ?>
</body>
</html>