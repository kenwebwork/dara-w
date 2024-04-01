<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/public.css">
<?php if (is_archive()): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category.css">
<?php endif ?>
<?php if (is_post_type_archive(array('lesson', 'article')) || is_front_page()): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/parent.css">
  <?php elseif (is_singular('lesson')):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lesson.css">
  <?php elseif (is_singular('article')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/article.css">
  <?php elseif (is_404()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/404.css">
  <?php endif; ?>
  <?php if (is_front_page()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/roadmap.css">
  <?php endif ?>
<script src="//code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<title><?php wp_title('|', true, 'right'); bloginfo('name');?></title>
<?php wp_head(); ?>