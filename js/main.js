
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
    
    toTop.click(function(){
        $('html, body').animate({ scrollTop: 0 }, 400);
        return false;
    });
});

// 予約ボタン

$(function(){
    let booking = $('.fixed');

    $(window).on('scroll touchmove', function(){
        booking.stop();
        booking.css("display", "none").delay(100).fadeIn(600);
    })
})

$(function(){
    let distance = 0;
    let start = $('.start').offset().top;
    let end = $('.end').offset().top;

    $(document).scroll(function(){
        distance = $(this).scrollTop();
        $('.fixed').removeClass('js-hide');
        if(start > distance || distance > end){
            $('.fixed').addClass('js-hide');
        }else{
            $('.fixed').removeClass('js-hide')
        }
    })
})

  
// フェードイン

$(function(){
    $(window).scroll(function(){
        $('.js-fade').each(function(){
            let posistion = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            if(scroll > posistion - windowHeight + 100){
                $(this).addClass('scroll');
            }
        })
    })
})