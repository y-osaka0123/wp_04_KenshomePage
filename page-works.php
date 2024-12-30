<?php get_header(); ?>

<div id="posts-list" class="wrapper">  
  <?php
  // クエリを定義して投稿を取得
  $args = array(
      'post_type' => 'post',
      'posts_per_page' => 10, // 表示する投稿数を指定
  ); ?>
  <?php $query = new WP_Query($args); ?> 
  <ul class="indication">
    <?php
      $works = array('posts_per_page' => 10);
    ?>
    <?php $posts = get_posts($works); ?>
    <?php foreach($posts as $post): ?>
      <?php setup_postdata($post); ?>
      <?php 
        $external_url = get_post_meta(get_the_ID(), 'external_url', true);
        if ($external_url) {
          $link = $external_url;
        } else {
          $link = get_permalink();
        }
      ?>

      <li class="indication-li">
        <a href="<?php echo esc_url($link); ?>">
          <img class="post-img" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
          <h2 class="post-title"><?php the_title(); ?></h2>
        </a>
        <div class="indication-text">
        <h3 class="post-category">
          <?php 
            // 投稿のカテゴリを取得して表示
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
              $category_names = array_map(function($category) {
                return esc_html($category->name);
              }, $categories);
              echo implode(', ', $category_names);
            }
          ?>
        </h3>
        <p><?php echo str_replace(array("\r", "\n"), '', get_the_excerpt()); ?></p>
        </div>
      </li>
    <?php endforeach; ?>
    <?php
    the_posts_pagination();
    
    // クエリをリセット
    wp_reset_postdata();
  ?>
  </ul>
</div>

<?php get_footer(); ?>