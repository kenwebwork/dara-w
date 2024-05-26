<h3 id="step4">Step 4</h3>
<h4>Step 4-1 - 形容詞と副詞</h4>
<?php
  $lesson_array4_1 = array(
    "adjectives-and-adverbs" => "さまざまな形容詞と副詞",
    "so-and-such" => "so と such",
    "enough-and-too" => "enough と too",
    "still-notanymore-nolonger" => "still, not … any more, no longer",
    "even" => "even",
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array4_1);
?>
<h4>Step 4-2 - 比較</h4>
<?php
  $lesson_array4_2 = array(
    "comparative" => "比較級",
    "comparative2" => "比較級 2",
    "comparative-as" => "比較級の as",
    "superlative" => "最上級",
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array4_2);
?>
<h4>Step 4-3 - 分詞形容詞</h4>
<?php
  $lesson_array4_3 = array(
    "adjectives-ending-ing" => "-ing で終わる形容詞",
    "adjectives-ending-ed" => "-ed で終わる形容詞",
    "images-adjective-ending-inganded" => "[Article] イメージで覚える -ing と -ed 形容詞",
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array4_3);
?>
<h4>Step 4-4 - 受身</h4>
<?php
  $lesson_array4_4 = array(
    "bedone" => "受身（be done）",
    "beendone-beingdone" => "受身 2（been done, being done）",
    "havesomethingdone" => "受身 3（have something done）",
    "itissaid" => "it is said",
  );
  
  get_template_part('includes/steps/lessonList', null, $lesson_array4_4);
?>