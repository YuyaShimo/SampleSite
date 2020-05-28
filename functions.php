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
function get_child_pages( $number = -1) {
  $parent_id = get_the_ID();
    $args = array(
      'posts_per_page' => -1,
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