<h3 id="step2">Step 2 - 時制</h3>
<h4>Step 2-1</h4>
<?php
  $lesson_array2_1 = array(
    "iamdoing" => "現在進行形（I am doing）",
    "iamdoing-and-ido" => "現在進行形と現在形（I'm doing and I do）",
    "iamdoing-and-ido2" => "現在進行形と現在形（I'm doing and I do）2",
    "idid" => "過去形（I did）",
    "idid-and-iwasdoing" => "過去形とその進行形（I did and I was doing）",
    "properties-of-past-tence" => "過去形の意外な性質"
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array2_1);
?>

<h4>Step 2-2</h4>
<?php
  $lesson_array2_2 = array(
    "ihavedone" => "現在完了形（I have done）",
    "ihavedone2" => "現在完了形（I have done）2",
    // "ihavebeendoing" => "現在完了進行形（I have been doing）",
    // "ihavebeendoing-and-ihavedone" => "現在完了形と現在完了進行形（I have done, I have been doing）"
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array2_2);
?>

<!-- <h4>Step 2-3</h4>
<?php
  $lesson_array2_3 = array(
    "ihavedone-and-idid" => "☆practice現在完了形と過去形（I have done, I did）",
    "ihaddone" => "過去完了形（I had done）",
    "" => "☆過去完了進行形（I had been doing）",
    "have-and-havegot" => "have and have got",
    "usedto" => "used to"
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array2_3);
?> -->

<!-- <h4>Step 2-4</h4>
<ul class="lesson-list">
  <li><a href="<?php echo esc_url('/') ?>">未来を意味する現在形</a></li>
  <li><a href="<?php echo esc_url('/') ?>">Will and shall</a></li>
  <li><a href="<?php echo esc_url('/') ?>">Will と be going to</a></li>
  <li><a href="<?php echo esc_url('/') ?>">will be doing and will have done</a></li>
  <li><a href="<?php echo esc_url('/') ?>">時制のまとめ</a></li>
  <li><a href="<?php echo esc_url('/') ?>">時制のまとめ2</a></li>
</ul> -->