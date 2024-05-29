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
      <?php while(have_posts()): the_post(); ?>
        <div class="top-area">
          <div class="title-card">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="content article">
          <?php the_content(); ?>
        </div>
        <?php $terms = get_the_terms($post->ID, 'article_category'); ?>
        <?php if($terms): ?>
          <?php foreach($terms as $term): $slug = $term->slug; ?>
            <?php if(str_contains($slug, 'step')): ?>
              <?php get_template_part('includes/stepLessons', null, $slug); ?>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endwhile; ?>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>