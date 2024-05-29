<h3 id="step0">Step 0 - 始めてみよう！</h3>
<?php
  $lesson_array0 = array(
    "about#how-to-use-this-site" => "このサイトの使い方",
    "how-are-you" => "[Article] How are you? の使い方",
    "how-to-improve-english-skills" => "[Article] 英語力の伸び方"
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array0);