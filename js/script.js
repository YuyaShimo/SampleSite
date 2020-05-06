$(function(){

    /*メインイメージスライダー*/ 
    $('.slider').bxSlider({
      auto: "true",
      mode: "fade",
      randomStart: "true"
    });

    /*テキストフェードイン*/
    $(window).fadeThis();

    /*メンバー画像フェードイン*/
    $(window).scroll(function (){
      $('.fadein').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200){
          $(this).addClass('scrollin');
        }
      });
    });
  });