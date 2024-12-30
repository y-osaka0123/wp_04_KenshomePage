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
      <li class="Indication-li">
        <a href="<?php the_permalink(); ?>">
          <img class="post-img" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
          <h2 class="post-title"><?php the_title(); ?></h2>
        </a>
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