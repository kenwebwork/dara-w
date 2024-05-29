<h3 id="step3">Step 3</h3>
<h4>Step 3-1 - 疑問詞</h4>
<?php
  $lesson_array3_1 = array(
    "what" => "What",
    "who" => "Who",
    "which" => "Which",
    "when" => "When",
    "how" => "How",
    "how2" => "How 2",
    "advantages-of-practicing-aloud" => "[Article] 声に出して練習するメリット"
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array3_1);
?>  
<h4>Step 3-2 - 助動詞</h4>
<?php
  $lesson_array3_2 = array(
    "can-beableto" => "can と be able to",
    "should" => "should",
    "would" => "would"
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array3_2);
?>
<h4>Step 3-3 - ing と to</h4>
<?php
  $lesson_array3_3 = array(
    "doing" => "動名詞（doing）",
    "todo" => "to 不定詞（to do）",
    "todo2" => "to 不定詞（to do）2",
    "todo3" => "to 不定詞（to do）3"
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array3_3);
?>