<h3 id="step1">Step 1 - 文型</h3>
<?php
  $lesson_array1 = array(
    "svc" => "SVC",
    "svo" => "SVO",
    "svoo" => "SVOO",
    "svoc" => "SVOC",
    "sv" => "SV",
    "a-characteristic-of-japanese" => "[Article] 日本語の特徴"
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array1);