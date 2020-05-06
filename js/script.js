$(function(){

    /*メインイメージスライダー*/ 
    $('.slider').bxSlider({
      auto: "true",
      mode: "fade",
      randomStart: "true"
    });

    /*テキストフェードイン*/
    $(window).fadeThis();
  });