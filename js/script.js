$(function(){

    /*メインイメージスライダー*/ 
    $('.slider').bxSlider({
      auto: "true",
      mode: "fade",
    });

    /*スマホナビゲーションチェックボックスを外す処理*/
    let unlockCheckBox = function() {
      let $trigger = $('.header-navi a');
      let $target = $('input[type="checkbox"]');
      $trigger.click(function() {
        $target.prop('checked', false);
      });
    };
    unlockCheckBox();

    /*テキストフェードイン*/
    $(window).fadeThis();

    /*メンバー画像フェードイン*/
    $(window).scroll(function (){
      $('.fadein').each(function(){
        let elemPos = $(this).offset().top;
        let scroll = $(window).scrollTop();
        let windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200){
          $(this).addClass('scrollin');
        }
      });
    });

    /*スムーズスクロール*/
    $('a[href^="#"]').click(function(){
      let speed = 1500;
      let href= $(this).attr("href");
      let target = $(href == "#" || href == "" ? 'html' : href);
      let position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });

});