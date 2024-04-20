<h3 id="step3">Step 3 - 文型</h3>
<h4>Step 3-1</h4>
<?php
  $lesson_array3_1 = array(
    "what" => "What",
	"who" => "Who",
	"when" => "When",
  );

  get_template_part('includes/steps/lessonList', null, $lesson_array3_1);