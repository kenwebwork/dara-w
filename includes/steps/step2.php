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
    "ihavebeendoing" => "現在完了進行形（I have been doing）",
    "ihavebeendoing-and-ihavedone" => "現在完了形と現在完了進行形（I've done and I've been doing）"
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array2_2);
?>

<h4>Step 2-3</h4>
<?php
  $lesson_array2_3 = array(
    "ihavedone-and-idid" => "現在完了形と過去形（I've done and I did）",
    "ihaddone" => "過去完了形（I had done）",
	  "ihadbeendoing" => "過去完了進行形（I had been doing）",
    "have-and-havegot" => "have と have got",
    "usedto" => "used to"
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array2_3);
?>

<h4>Step 2-4</h4>
<?php
  $lesson_array2_4 = array(
    "present-tenses-for-the-future" => "未来を意味する現在形",
    "will-and-shall" => "will と shall",
	  "iwill-and-iamgoingto" => "will と I'm going to",
	  "iwillbedoing" => "未来進行形（I will be doing）",
	  "iwillhavedone" => "未来完了形（I will have done）",
	  "summary-of-tenses" => "時制のまとめ"
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array2_4);
?>