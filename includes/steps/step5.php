<h3 id="step5">Step 5</h3>
<h4>Step 5-1 - 関係詞</h4>
<?php
  $lesson_array5_1 = array(
    "who-that-which-of-relativepronoun" => "関係代名詞の who, that, which",
    "relativepronoun-without-who-that-which" => "関係代名詞 who, that, which の省略",
    "what-of-relativepronoun" => "関係代名詞の what",
    "relativepronoun-whose-and-ofwhich" => "関係代名詞の whose と of which",
    "where-when-why-how-of-relativeadverb" => "関係副詞の where, when, why, how",
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array5_1);
?>
<h4>Step 5-2 - 分詞</h4>
<?php
  $lesson_array5_2 = array(
    "ing-clause" => "現在分詞（-ing）",
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array5_2);
?>
