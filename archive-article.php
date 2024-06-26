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
      <div class="top-area">
        <div class="title-card">
          <h1>記事 一覧</h1>
        </div>
      </div>
      <div class="content">
        <?php if(have_posts()): ?>
          <ul id="lesson-lists">
            <?php $terms = get_terms('article_category','hide_empty=0'); ?>
            <?php foreach ( $terms as $term ): ?>
              <?php 
                $term_slug = $term->slug;
                if(str_contains($term_slug, 'step')){continue;}
              ?>
              <li class="lessons gray">
                <h3><a href="<?php echo get_term_link($term)?>"><?php echo $term->name ?></a></h3>
                <ul class="lesson-list">
                  <?php
                    $wp_query = new WP_Query();
                    $my_posts = array(
                      'post_type' => 'article',
                      'posts_per_page' => '5',
                      'order' => 'ASC',
                      'taxonomy' => 'article_category',
                      'term' => $term_slug
                    );
                    $wp_query->query($my_posts);
                  ?>
                  <?php if ($wp_query->have_posts()): ?> 
                    <?php $posts_counter = 0 ?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                      $obj = get_post_type_object($post->post_type);
                      $posts_counter += 1;
                    ?>
                      <?php if ($posts_counter != 5): ?> 
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                      <?php else: ?>
                        <li class="no-dot"><a href="<?php echo get_term_link($term)?>">more</a></li>
                      <?php endif ?>
                    <?php endwhile; ?>    
                  <?php else: ?>
                    <li class="no-dot">現在準備中です。</li>
                  <?php endif; wp_reset_postdata(); ?>
                </ul>
              </li>
            <?php endforeach ?>
          </ul>
        <?php else: ?>
          <p>現在準備中です。</p>
        <?php endif; ?>
      </div>
      <?php get_footer(); ?>
    </div>
  </div>
  <?php  wp_footer(); ?>
</body>
</html>