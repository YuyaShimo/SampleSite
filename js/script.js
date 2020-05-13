$(function(){

    /*メインイメージスライダー*/ 
    $('.slider').bxSlider({
      auto: "true",
      mode: "fade",
    });

    /*スマホナビゲーションチェックボックスを外す処理*/
    let unlockCheckBox = function() {
      let $trigger = $('.header__navi a');
      let $target = $('input[type="checkbox"]');
      $trigger.click(function() {
          $target.prop('checked', false);
      });
  };

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

    /*スムーズスクロール*/
    $('a[href^="#"]').click(function(){
      var speed = 1500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });

});