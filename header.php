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
<meta name="google-adsense-account" content="ca-pub-5571471670029527">

<link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/img/dara_logo.ico">
<link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/img/dara_logo.png">
<title><?php wp_title('|', true, 'right'); bloginfo('name');?></title>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5571471670029527"
     crossorigin="anonymous"></script>
<?php wp_head(); ?>