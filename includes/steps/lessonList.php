<ul class="lesson-list">
  <?php if (is_singular('lesson') || is_singular('article')):?>
    <?php $slug = $post->post_name; ?>
    <?php foreach($args as $url => $lesson_title): ?>
      <?php
        $class_name = "";
        if ($url === $slug){ $class_name = "we-are-here"; }
      ?>
      <li><a href="<?php echo esc_url('/'.$url) ?>" class="<?php echo $class_name ?>"><?php echo $lesson_title ?></a></li>
    <?php endforeach; ?>
  <?php else: ?>
    <?php foreach($args as $url => $lesson_title): ?>
      <li><a href="<?php echo esc_url('/'.$url) ?>"><?php echo $lesson_title ?></a></li>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>