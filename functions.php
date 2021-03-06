<?php 

register_nav_menus(
  array(
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ',
  )
);

//投稿ページの際はカテゴリー名を表示する
function get_main_title() {
  if( is_singular( 'post') ):
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif( is_page() ):
    return get_the_title();
  elseif( is_category() ):
    return single_cat_title();
  endif;
}

// 子ページを取得
function get_child_pages( $number = -1, $specified_id = null) {
  if( isset( $specified_id) ):
    $parent_id = $specified_id;
  else:
    $parent_id = get_the_ID();
  endif;
    $args = array(
      'posts_per_page' => $number,
      'post_type' => 'page',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'post_parent' => $parent_id,
    );
    $child_pages = new WP_Query( $args );
    return $child_pages;
}

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );

//企業情報、旅行プラン一覧の画像サイズを指定
add_image_size( 'common', 465, 252, true );

function get_main_image() {
  if( is_page() ):
    return get_the_post_thumbnail( $post->ID, 'detail' );
  elseif( is_category( 'news' ) || is_singular( 'post' ) ):
    return '<img src="' . get_template_directory_uri(). '/images/bg-page-news.jpg" />';
  else:
    return '<img src="' . get_template_directory_uri(). '/images/bg-page-news.jpg" />';
}

//お知らせの抽出条件を関数として定義
function get_specific_posts( $post_type, $taxonomy = null, $term = null, $number = -1 ) {
  $args = array(
    'post_type' => $post_type,
    'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $term,
      ),
    ),
    'posts_per_page' => $number,
  );
  $specific_posts = new WP_Query( $args );
  return $specific_posts;
}

//抜粋文の文字数を定義する
function cms_excerpt_more() {
  return '...';
}

add_filter( 'excerpt_more', 'cms_excerpt_more' );

function cms_excerpt_length() {
  return 80;
}

add_filter( 'excerpt_mblength', 'cms_excerpt_length' );

//抜粋機能を使用できるよう設定
add_post_type_support( 'page', 'excerpt' );