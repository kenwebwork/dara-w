<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header() ?>
  <title>Document</title>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part("includes/headerAndSlider"); ?>
  <!-- main content -->
  <div class="container">
    <!-- sidebar -->
    <?php get_sidebar(); ?>
    <!-- main area -->
    <div class="main-area">
      <?php if(have_posts()): ?>
        <div class="top-area">
          <div class="title-card">
            <h1>レッスン 一覧</h1>
          </div>
        </div>
        <div class="content">
          <ul id="lesson-lists">
            <?php $terms = get_terms('lesson_category','hide_empty=0'); ?>
            <?php foreach ( $terms as $term ): ?>
              <li class="lessons">
                <h3><a href="<?php echo get_term_link($term)?>"><?php echo $term->name ?></a></h3>
                <ul class="lesson-list">
                  <?php
                    $term_slug = $term->slug;
                    $wp_query = new WP_Query();
                    $my_posts = array(
                      'post_type' => 'lesson',
                      'posts_per_page' => '4',
                      'order' => 'ASC',
                      'taxonomy' => 'lesson_category',
                      'term' => $term_slug
                    );

                    $wp_query->query($my_posts);
                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                      $obj = get_post_type_object($post->post_type);
                  ?>

                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                  <?php endwhile; else: ?>
                    <li>現在準備中です。</li>
                  <?php endif; ?>
                  <?php wp_reset_postdata(); ?>
                </ul>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php else: ?>
        <div class="content">
          <p>現在準備中です。</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/lesson.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/public/public.js"></script>
  <?php  wp_footer(); ?>
</body>
</html>