$(function () {

  /*=================================================
  フェード表示(Top)
  ===================================================*/
  $(".mainvisual").on("mainvisual", function (event, isInView) {
    if (isInView) {
      //要素 (inviewクラス)が表示されたらshowクラスを追加する
      $(this).stop().addClass("show");
    }
  });
  
  /*=================================================
  フェード表示(Work)
  ===================================================*/
  $(".inview").on("inview", function (event, isInView) {
    if (isInView) {
      //要素 (inviewクラス)が表示されたらshowクラスを追加する
      $(this).stop().addClass("show");
    }
  });

  /*=================================================
  スクロール時のイベント
  ===================================================*/
  $(window).scroll(function() {
    //スクロール位置を取得
    let scroll = $(window).scrollTop();
  
    /*=================================================
    制作実績の背景画像の表示
    ===================================================*/
    //画面下から#flowまでの距離を取得
    let flow_position = $('#flows').offset().top - $(window).height();
    //画面下から#access までの距離を取得
    let slide_position = $('#slide').offset().top - $(window).height();

    //#work が表示された場合
    if(scroll > slide_position) {
      // #flow が表示されるまでの間は、背景画像をfadeINで表示する。
      if(scroll < flow_position){
        $('.bg').fadeIn(1000);
        $('.content-title').removeClass('work-titleblack').addClass('work-titlewhite');
        $('.posts-title').removeClass('textblack').addClass('textwhite');
        $('.section-title').removeClass('textblack').addClass('textwhite');
        $('.text').removeClass('textblack').addClass('textwhite');
      } else {
        $('.bg').fadeOut(1000);  //背景色
        $('.content-title').removeClass('work-titlewhite').addClass('work-titleblack');  //タイトル色
        $('.posts-title').removeClass('textwhite').addClass('textblack');  //投稿タイトル色
        $('.section-title').removeClass('textwhite').addClass('textblack');
        $('.text').removeClass('textwhite').addClass('textblack');
      }
      // #access が表示される前の場合
    } else {
      // 背景画像を表示しない
      $('.bg').fadeOut(1000);
      $('.content-title').removeClass('work-titlewhite').addClass('work-titleblack');  //タイトル色
      $('.post-title').removeClass('textwhite').addClass('textblack');  //投稿タイトル色
      $('.section-title').removeClass('textwhite').addClass('textblack');
      $('.text').removeClass('textwhite').addClass('textblack');
  }
  });

  /*=================================================
  スライド
  ===================================================*/
  $(".slider").slick({
    autoplay: true, //自動的に動き出すか。初期値はfalse。
    infinite: true, //スライドをループさせるかどうか。初期値はtrue。
    speed: 500, //スライドのスピード。初期値は300。 遷移時の速度。　中央の表示時間ではない。 css の transition と同義。
    slidesToShow: 3, //スライドを画面に3枚見せる。　これ無効かされている .slider img width: 30vw 3枚  18vw 5枚 になる。
    slidesToScroll: 1, //1回のスクロールで1枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev"></div>', //矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>', //矢印部分NextのHTMLを変更
    centerMode: true, //要素を中央ぞろえにする
    variableWidth: true, //幅の違う画像の高さを揃えて表示
    dots: true, //下部ドットナビゲーションの表示
  });

  //ハンバーガーメニュー
  $('.hamburger').on('click', function(){
    hamburger();
  });

  $('#navi a').on('click', function() {
    hamburger();
  });

});



function hamburger() {
  $('.hamburger').toggleClass('active');
  if ($('.hamburger').hasClass('active')) {
    $('#navi').addClass('active');
  } else {
    $('#navi').removeClass('active');
  }
}


