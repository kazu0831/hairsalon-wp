
// スムーススクロール
$(function () {
    $('a[href*="#"]').click(function () {
      const speed = 400;
      const target = $(this.hash === '#' || '' ? 'html' : this.hash)
      if (!target.length) return;
      const targetPos = target.offset().top;
      $('html, body').animate({ scrollTop: targetPos }, speed, 'swing');
      return false;
    });
});

// topに戻る
$(function(){
    let toTop = $('#page-top');
    toTop.hide();

    $(window).scroll(function(){
        if($(this).scrollTop()>200){
            toTop.fadeIn(600);
        }else{
            toTop.fadeOut(600);
        }
    });

    toTop.click(function(){
        $('html, body').animate({ scrollTop: targetPos }, 400);
        return false;
    });
});

// ハンバーガーメニュー

    //あとで実装

    
// ふわっと表示

    //あとで実装