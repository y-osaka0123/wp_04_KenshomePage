<?php
/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
JSファイルの読み込み
**************************************************/
function st_enqueue_scripts() {
  wp_deregister_script('jquery');
  
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', false);
  wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), false, true);
  wp_enqueue_script('inview', get_theme_file_uri('js/jquery.inview.min.js'), array('jquery', 'slick'), false, true);
  wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery', 'slick', 'inview'), false, true);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

add_theme_support('post-thumbnails');

/**************************************************
カスタムフィールド読み込み
**************************************************/
function redirect_to_external_url() {
  if (is_single()) {
      global $post;
      $external_url = get_post_meta($post->ID, 'external_url', true);
      if ($external_url) {
          wp_redirect($external_url);
          exit;
      }
  }
}
add_action('template_redirect', 'redirect_to_external_url');
