$(function(){

    $('a[href^="#"]').click(function(){
        let speed = 500;
        let href= $(this).attr("href");
        let target = $(href == "#" || href == "" ? 'html' : href);
        let position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });

    var state = false;
    　var pos;
    　$('.modalbtn').click(function(){
    　　if (state == false) {
    　　　pos = $(window).scrollTop();
    　　　$('body').addClass('fixed').css({'top': -pos});
    　　　state = true;
    　　} else {
    　　　$('body').removeClass('fixed').css({'top': 0});
    　　　window.scrollTo(0, pos);
    　　　state = false;
    　　}
    　});

  var cursor=$("#cursor");
  
  $(document).on("mousemove",function(e){
    var x=e.clientX;
    var y=e.clientY;
    cursor.css({
      "opacity":"1",
      "top":y+"px",
      "left":x+"px"
    });
  });


    $('#modal-btn01').on('click',function(){
         $(this).addClass('active-modal')
        $('#modal-id01').fadeIn();
        return false;
    });
    $('#modal-btn02').on('click',function(){
         $(this).addClass('active-modal')
        $('#modal-id02').fadeIn();
        return false;
    });
    $('#modal-btn03').on('click',function(){
         $(this).addClass('active-modal')
        $('#modal-id03').fadeIn();
        return false;
    });
    $('#modal-btn04').on('click',function(){
         $(this).addClass('active-modal')
        $('#modal-id04').fadeIn();
        return false;
    });
    $('#modal-btn05').on('click',function(){
         $(this).addClass('active-modal')
        $('#modal-id05').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal-open').removeClass('active-modal')
        $('.js-modal').fadeOut();
        return false;
    });
});

$(document).ready(function(){
    $(window).on("scroll", function() {
        scrollHeight = $(document).height();
        scrollPosition = $(window).height() + $(window).scrollTop();
        footHeight = $("footer").innerHeight();
        if ( scrollHeight - scrollPosition  <= footHeight ) {
            $(".sns-box").css({
                "position":"absolute",
                "bottom": footHeight + 0
            });
        } else {
            $(".sns-box").css({
                "position":"fixed",
                "bottom": "10px"
            });
        }
    });
});


$(document).ready(function(){
    $(window).on("scroll", function() {
        scrollHeight = $(document).height();
        scrollPosition = $(window).height() + $(window).scrollTop();
        footHeight = $("footer").innerHeight();
        if ( scrollHeight - scrollPosition  <= footHeight ) {
            $(".new-cta").css({
                "position":"absolute",
                "bottom": footHeight + 0
            });
        } else {
            $(".snew-cta").css({
                "position":"fixed",
                "bottom": "10px"
            });
        }
    });
});
    window.onscroll = function () {
        var check = window.pageYOffset ;       //現在のスクロール地点
        var docHeight = $(document).height();   //ドキュメントの高さ
        var dispHeight = $(window).height();    //表示領域の高さ

        if(check > docHeight-dispHeight-500){   //判別式　500はフッターからの距離です（ここはサイトのフッターに合わせて変更しましょう）
            $('.sub .fv-btn').fadeOut(300); //1000 はフェードアウトの速度です。調整可

        }else{
            $('.sub .fv-btn').fadeIn(300);  //1000 はフェードインの速度です。調整可
        }
    };

$(function(){

$(window).on('load',function(){
  $("#splash").delay(1000).fadeOut('slow');
  $("#splash_logo").delay(700).fadeOut('slow');
});

$(function() {
    var headNav = $("header");
    $(window).on('load scroll', function () {
        if($(this).scrollTop() > 500 && headNav.hasClass('fixed') == false) {
            headNav.css({"top": '-100px'});
            headNav.addClass('fixed');
            headNav.animate({"top": 0},600);
        }
        else if($(this).scrollTop() < 300 && headNav.hasClass('fixed') == true){
            headNav.removeClass('fixed');
        }
    });
});

$(function() {
    var fvbtn = $(".sub .worksfv-btn");
    $(window).on('load scroll', function () {
        if($(this).scrollTop() > 500 && fvbtn.hasClass('fixed') == false) {
            fvbtn.css({"bottom": '-100px'});
            fvbtn.addClass('fixed');
            fvbtn.animate({"bottom": 10},600);
        }
        else if($(this).scrollTop() < 300 && fvbtn.hasClass('fixed') == true){
            fvbtn.removeClass('fixed');
        }
    });
});





  $('.modalnav .nav-title').click(function(){
    $(this).next('.box').slideToggle();
    $(this).toggleClass("active");
  });


  $('.morecheck_btn').click(function(){
    $(this).toggleClass("active")
    $(this).next('.morecheck_list').slideToggle();
  });




    $('.slider-center').slick({
          infinite: true,
          dots: false,
          arrows: true,
          slidesToShow: 1,
          autoplay:true,
          swipeToSlide: true,
     });

    $('.slider-center2').slick({
          infinite: true,
          dots: false,
          arrows: false,
          slidesToShow: 3,
          autoplay:true,
          swipeToSlide: true,
          centerMode: true,
          centerPadding: "8%",
          responsive: [
                {
                breakpoint: 1180,
                settings: {
                  centerPadding: "3%",
                },
              },
              {
                breakpoint: 991,
                settings: {
                  slidesToShow: 1,
                  centerPadding: "30%",
                },
              },{
                breakpoint: 821,
                settings: {
                  slidesToShow: 1,
                  centerPadding: "20%",
                },
              },
              {
                breakpoint: 641,
                settings: {
                  slidesToShow: 1,
                  centerPadding: "10%",
                },
              },
            ],
     });

    $('.slider-center3').slick({
          infinite: true,
          dots: false,
          arrows: false,
          slidesToShow: 2,
          autoplay:true,
          swipeToSlide: true,
          centerMode: true,
          centerPadding: "20%",
          responsive: [
              {
                breakpoint: 821,
                settings: {
                  slidesToShow: 1,
                  centerPadding: "20%",
                },
              },
              {
                breakpoint: 641,
                settings: {
                  slidesToShow: 1,
                  centerPadding: "10%",
                },
              },
            ],
     });

    $('.modalbtn').click(function () {
    $(this).toggleClass('active');
    $(this).next().slideToggle(150);
  });



  function toggleNav() {
  var body = document.body;
  var hamburger = document.getElementById('modalbtn');
  var blackBg = document.getElementById('js-close');
  var close = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function() {
    body.classList.toggle('nav-open');
  });
  blackBg.addEventListener('click', function() {
    body.classList.remove('nav-open');
  });
  close.addEventListener('click', function() {
    body.classList.remove('nav-open');
  });
}
toggleNav();


});


$(function () {
  $(window).on("load scroll", function () {
    $(".js-count").each(function () {
      var txtPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > txtPos - windowHeight + windowHeight / 5) {
        if ($(".js-num", this).attr("data-num").indexOf(".") > -1) {
          var rounding = 1;
        } else {
          var rounding = 0;
        }
        $(".js-num", this).numerator({
          easing: "linear",
          duration: 500,
          toValue: $(".js-num", this).attr("data-num"),
          rounding: rounding,
        });
      }
    });
  });
});


;(function (factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        // AMD is used - Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        factory(require('jquery'));
    } else {
        // Neither AMD nor CommonJS used. Use global variables.
        if (typeof jQuery === 'undefined') {
            throw 'jquery-numerator requires jQuery to be loaded first';
        }
        factory(jQuery);
    }
}(function ($) {

    var pluginName = "numerator",
    defaults = {
        easing: 'swing',
        duration: 50,
        delimiter: undefined,
        rounding: 0,
        toValue: undefined,
        fromValue: undefined,
        queue: false,
        onStart: function(){},
        onStep: function(){},
        onProgress: function(){},
        onComplete: function(){}
    };

    function Plugin ( element, options ) {
        this.element = element;
        this.settings = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {

        init: function () {
            this.parseElement();
            this.setValue();
        },

        parseElement: function () {
            var elText = $.trim($(this.element).text());

            this.settings.fromValue = this.settings.fromValue || this.format(elText);
        },

        setValue: function() {
            var self = this;

            $({value: self.settings.fromValue}).animate({value: self.settings.toValue}, {

                duration: parseInt(self.settings.duration, 10),

                easing: self.settings.easing,

                start: self.settings.onStart,

                step: function(now, fx) {
                    $(self.element).text(self.format(now));
                    // accepts two params - (now, fx)
                    self.settings.onStep(now, fx);
                },

                // accepts three params - (animation object, progress ratio, time remaining(ms))
                progress: self.settings.onProgress,

                complete: self.settings.onComplete
            });
        },

        format: function(value){
            var self = this;

            if ( parseInt(this.settings.rounding ) < 1) {
                value = parseInt(value, 10);
            } else {
                value = parseFloat(value).toFixed( parseInt(this.settings.rounding) );
            }

            if (self.settings.delimiter) {
                return this.delimit(value)
            } else {
                return value;
            }
        },

        // TODO: Add comments to this function
        delimit: function(value){
            var self = this;

            value = value.toString();

            if (self.settings.rounding && parseInt(self.settings.rounding, 10) > 0) {
                var decimals = value.substring( (value.length - (self.settings.rounding + 1)), value.length ),
                    wholeValue = value.substring( 0, (value.length - (self.settings.rounding + 1)));

                return self.addDelimiter(wholeValue) + decimals;
            } else {
                return self.addDelimiter(value);
            }
        },

        addDelimiter: function(value){
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, this.settings.delimiter);
        }
    };

    $.fn[ pluginName ] = function ( options ) {
        return this.each(function() {
            if ( $.data( this, "plugin_" + pluginName ) ) {
                $.data(this, 'plugin_' + pluginName, null);
            }
            $.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
        });
    };

    const mediaQuery = window.matchMedia('(max-width: 820px)');
    handle(mediaQuery);
    mediaQuery.addListener(handle);
    function handle(mm) {
      if (mm.matches) {
      } else {
         $('.midnight').midnight();
      }
    }

}));

(function() {
var v = document.querySelector('#video');
v.addEventListener('mouseover', function() {
this.play();
}, false);
v.addEventListener('mouseout', function() {
this.pause();
this.currentTime = 0;
}, false);
})();
