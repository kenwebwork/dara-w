<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header() ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part("includes/headerAndSlider"); ?>
  <div class="container">
    <?php get_sidebar(); ?>
    <div class="main-area">
      <?php if(have_posts()): ?>
        <?php 
          if (get_the_taxonomies()){$tax_slug = array_keys(get_the_taxonomies()) [0];}
          if ($tax_slug === 'lesson_category'){
            $color = 'content-blue';
          } elseif ($tax_slug === 'article_category') {
            $color = 'content-gray';
          } else {
            $color = '';
          }
        ?>
        <div class="top-area">
          <div class="title-card">
            <h1><?php single_cat_title(); ?> 一覧</h1>
          </div>
        </div>
        <div class="content <?php echo $color; ?>">
          <ul class="lesson-list">
            <?php while(have_posts()): the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>  
            <?php endwhile; ?>
          </ul>
        </div>
      <?php else: ?>
        <div class="content">
          <p>現在準備中です。</p>
        </div>
      <?php endif; ?>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php  wp_footer(); ?>
</body>
</html>