<div class="step-lessons-area">
  <h2>このレッスンはロードマップの <?php echo str_replace('step', 'Step', $args); ?> に含まれています</h2>
  <div id="other-lessons">
    <?php get_template_part('includes/steps/'.$args); ?>
  </div>
  <div class="basic-button-outer">
    <a class="basic-button grad-button" href="<?php echo esc_url('/'); ?>">ロードマップ</a>
  </div>
</div>