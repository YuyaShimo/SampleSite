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
  endif;
}