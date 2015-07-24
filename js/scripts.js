  function loaderAdder(stringOrObject) {  
    if($(stringOrObject).length) { //Объект ли или правильный селектор
      var theElement = $(stringOrObject);

      if (!theElement.hasClass("loader-overlay")){ // Проверка на наличие у элемента класса. Если нету, то присвается класс и в конец блока добавляется блок-overlay с гифкой.
        theElement.addClass("loader-overlay");
        theElement.append("<div class='loader-overlay-block'></div>");
      } else {
        theElement.removeClass("loader-overlay") // Иначе если класс есть, то убирается класс и удаляется оверлэй блок. 
        theElement.find(".loader-overlay-block").remove();
      }
    }
  }

// , function(){
//     console.log("hover off :))")
//     $(this).blur();
//     $(this).removeClass("pressed").addClass("unPressed");
//   }
$(document).ready(function()
{
  if($("#slider-range1").length) {
    new jsSliderOpt( "#slider-range1", {
      clear: "#clear1",
      input1: "#n0",
      input2: "#n1",
      min: 90,
      max: 10000000
    });
  }
  
  if($("#slider-range2").length) {
    var elem2 = new jsSliderOpt( "#slider-range2", {
      clear: "#clear2",
      input1: "#n2",
      input2: "#n3",
      min: 70,
      max: 160,
      value1: 90,
      value2: 140,
      // step: 0.1,
    });
  }

  var deleteAdressSiteSettingsObject = {};


  // $("#slider-range").slider({
  //   range: true,
  //   min: 0,
  //   max: 500,
  //   values: [ 75, 300 ],
  //   slide: function( event, ui ) {
  //     $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
  //   }
  // });
  // $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
  //     " - $" + $( "#slider-range" ).slider( "values", 1 ) );




  
  $("*").removeClass("no-js");

  var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    }
  };

  if(isMobile.Android()){
      $("#catalog-list > .items > .item > .img > a").on("touchend", function(e){
        var _this = this;

        if(!$(this).hasClass('hovered')) {
          setTimeout(function(){
            $("#catalog-list > .items > .item > .img > a").removeClass("hovered");
            $(_this).addClass('hovered');
          }, 20)
        } else {
          setTimeout(function(){
            $(_this).find("s").click();
          },30)
        }
        e.preventDefault();

      });

      $("#catalog-list > .items > .item > .img > a > img").on("touchend", function(e){
        var _this =  this;
        var href = $(this).closest("a").attr("href");
        setTimeout(function(){
          if($(_this).parent().hasClass("hovered")){
            window.location = href;
          }
        },10);
      });


      $(".products .product .detailed").on("touchend", function(e){
        var _this = this;

        if(!$(this).hasClass('hovered')) {
          setTimeout(function(){
            $(".products .product .detailed").removeClass("hovered");
            $(_this).addClass('hovered');
          }, 20)
        } else {
          setTimeout(function(){
            $(_this).find("s").click();
          },30)
        }
        e.preventDefault();

      });

      $(".products .product .detailed img").on("touchend", function(e){
        var _this =  this;
        var href = $(this).closest("a").attr("href");
        setTimeout(function(){
          if($(_this).parent().hasClass("hovered")){
            window.location = href;
          }
        },10);
      });


  }

  if(isMobile.iOS()){
    $("#catalog-filter .item.slider .left, #catalog-filter .item.slider .right").addClass("ios");
    $(".products .product .rate-n-have b.have:before").css({"bottom":"-5px"});
    $(".cart-adder-input").css({"width":"254px"});
    $(".bonus-slides.products .rate-n-have .have").addClass("ios");
    $(".cart-summary-list li").addClass("ios");
    $("input").css({
                      "-webkit-appearance":"none",
                      "border-radius":"0"
    })

    $(".popup, #catalog-list .item").parent().attr("onclick","");

      $("#catalog-list > .items > .item > .img > a").on("touchend", function(e){

        var _this = this;

        if(!$(this).hasClass('hovered')) {
          setTimeout(function(){
            $("#catalog-list > .items > .item > .img > a").removeClass("hovered");
            $(_this).addClass('hovered');
          }, 20)

        } else {
          setTimeout(function(){
            $(_this).find("s").click();
          },30)

        }
        e.preventDefault();

      });


      $("#catalog-list > .items > .item > .img > a > img").on("touchend", function(e){

        var _this =  this;

        var href = $(this).closest("a").attr("href");
        setTimeout(function(){
          if($(_this).parent().hasClass("hovered")){
            window.location = href;
          }
        },10);

      });

      $(".products .product .detailed").on("touchend", function(e){
        var _this = this;

        if(!$(this).hasClass('hovered')) {
          setTimeout(function(){
            $(".products .product .detailed").removeClass("hovered");
            $(_this).addClass('hovered');
          }, 20)
        } else {
          setTimeout(function(){
            $(_this).find("s").click();
          },30)
        }
        e.preventDefault();

      });

      $(".products .product .detailed img").on("touchend", function(e){
        var _this =  this;
        var href = $(this).closest("a").attr("href");
        setTimeout(function(){
          if($(_this).parent().hasClass("hovered")){
            window.location = href;
          }
        },10);
      });

  }

  if (window.PIE) {
        $('.jq-radio, .instead-what-img, .fancybox-skin, .restore-circle, header .col-3 .search [type=text], .modal, input, .error span, .this-btn, .cart-info-content, .ui-tooltip, s, a, textarea, .popup .content, .popup, .swiper-pagination-switch').each(function() {
            PIE.attach(this);
        });
  }
  // $(".popup").parent().on("click",function(e){
  //   $(".pressed").removeClass("pressed").addClass("unPressed");
  //   $(this).addClass("pressed").removeClass("unPressed");
  //   console.log("Hover on :))")
  //   e.stopPropagation();
  // })
  // $("body").on("click", function(e){
  //   $(".pressed").addClass("unPressed").removeClass("pressed");
  //   // $(".hovered").removeClass("hovered");
  //   console.log("Hover off :))")
  //   // e.stopPropagation();
  //   // alert("POPUP-всплывашка должна скрыться! А Это окно просто для проверки :)")
  // })

  // $(".popup").parent().attr("onclick","");
  // $("form").append("<input type='reset' class='reseter hide' style='display: none;'>");
  $("add-popup .item table tr:eq(1) td:eq(1)").css({"font-weight":"bold"});
  $("html.no-js").removeClass("no-js");
  var winHeight = $(window).height();
  var winWidthPic = $(window).width();
  var oldWidth = winWidthPic;
  var oldHeight = winHeight;
  var isFancyOpened = false;


  var sixOrSeven = 6;
  var fiveOrSix = 5;
  var fourOrFive = 4;
  var threeOrFour = 3;
  var gooddealElements = $("#gooddeal .gooddeal .swiper-container .swiper-slide").length;

  var gooddeal = $("#gooddeal .gooddeal.slider .swiper-container").swiper({
      createPagination: false,
      tabs: false,
      // slidesPerView: sixOrSeven,
      slidesPerView: "auto",
      initialSlide: 0,
      loop: true,
      speed: 800, 
      updateonInit: true,
      resizeReInit: true,
      noSwiping: true,
      noSwipingClass: "swiper-no-swiping",
      // resistance:  "100%"
    });

  function resizeForSlider() {
    var winWidth = $(window).width();
    if(winWidth > 1155) {
        sixOrSeven = 7;
        fiveOrSix = 6;
        fourOrFive = 5;
        threeOrFour = 4;
        if(gooddealElements > 7) {
          if(gooddeal){
            $("#gooddeal .gooddeal .arrow-wrapper .arrow").css({"display":"block"});
            gooddeal.params.simulateTouch = true;
            gooddeal.params.followFinger = true;
            // gooddeal.params.slidesPerView = sixOrSeven;
            gooddeal.params.loop = true;
            gooddeal.params.loopAdditionalSlides = gooddealElements;
            gooddeal.setWrapperTranslate(0,0,0);
            // gooddeal.reInit();
          }
        } else {
          if(gooddeal){
            $("#gooddeal .gooddeal .arrow-wrapper .arrow").css({"display":"none"});
            $("#gooddeal .gooddeal .swiper-slide").addClass("swiper-no-swiping");
            // gooddeal.params.simulateTouch = false;
            // gooddeal.params.followFinger = false;
            gooddeal.loop = false;
            // gooddeal.params.slidesPerView = gooddealElements;
            gooddeal.params.slideToNext = false;
            gooddeal.params.slideToPrev = false;
            var currentPos = gooddeal.getWrapperTranslate('x');
            gooddeal.onTouchMove = function(){ gooddeal.setWrapperTranslate(currentPos,0,0); }
            gooddeal.onSlideChangeStart = function(){ console.log(111); gooddeal.setWrapperTranslate(currentPos,0,0); }
            gooddeal.reInit();
            console.log(gooddeal)
          }
        }
    } else {
        sixOrSeven = 6;
        fiveOrSix = 5;
        fourOrFive = 4;
        threeOrFour = 3;
        if(gooddealElements > 6) {
          if(gooddeal){
            $("#gooddeal .gooddeal .arrow-wrapper .arrow").css({"display":"block"});
            gooddeal.params.simulateTouch = true;
            gooddeal.params.followFinger = true;
            gooddeal.params.slidesPerView = sixOrSeven;
            gooddeal.params.loop = true;
            gooddeal.params.loopAdditionalSlides = gooddealElements;
            gooddeal.reInit();
          }
        } else {
          if(gooddeal) {
            $("#gooddeal .gooddeal .arrow-wrapper .arrow").css({"display":"none"});
            gooddeal.params.simulateTouch = false;
            gooddeal.params.followFinger = false;
            gooddeal.params.loop = false;
            gooddeal.params.slidesPerView = gooddealElements;
            gooddeal.params.slideToNext = false;
            gooddeal.params.slideToPrev = false;
            gooddeal.params.useCSS3Transforms = false;
            gooddeal.onTouchMove = function(){ gooddeal.setWrapperTranslate(currentPos,0,0); }
            gooddeal.onSlideChangeStart = function(){console.log(111); gooddeal.setWrapperTranslate(currentPos,0,0); }
            gooddeal.reInit();
          }
        }
    }
  }
  resizeForSlider();

  $(window).on('resize', function(e){
    resizeForSlider();
    if(slider1) slider1.params.slidesPerView = fourOrFive;
    if(slider2) slider1.params.slidesPerView = fourOrFive;
    if(prod_3_5or6) prod_3_5or6.params.slidesPerView = fiveOrSix;
    if(prod_4_5or6) prod_4_5or6.params.slidesPerView = fiveOrSix;
    if(ourRecomends_5or6) ourRecomends_5or6.params.slidesPerView = fiveOrSix;
    // if(bonusslides_5or6) bonusslides_5or6.params.slidesPerView = fiveOrSix;
    if(cartSpecials) cartSpecials.params.slidesPerView = fiveOrSix;
    if(videos_3or4) videos_3or4.params.slidesPerView = threeOrFour;
    if(master_c_3or4) master_c_3or4.params.slidesPerView = threeOrFour;
    if(news_slider_3or4) news_slider_3or4.params.slidesPerView = threeOrFour;
    if(print_p_5or6) print_p_5or6.params.slidesPerView = fiveOrSix;
    if(special_p_5or6) special_p_5or6.params.slidesPerView = fiveOrSix;
    if(recent_p_5or6) recent_p_5or6.params.slidesPerView = fiveOrSix;
    if(activeComp) activeComp.params.slidesPerView = threeOrFour;
    // if(gooddeal) setTimeout(function(){gooddeal.reInit();}, 500);
    // if(gooddeal) setTimeout(function(){gooddeal.resizeFix();}, 550);
    

  })

    // Слайдеры

      var slider1 = $('.tovar-slides-modal .swiper-container').swiper({
        createPagination: false,
        tabs: false,
        slidesPerView: fourOrFive,
        loopAdditionalSlides: 12,
        // slideWidth: 160,
        speed: 800, 
        updateonInit: true,
        updateOnImagesReady: true,
        resizeReInit: true,
      });
      // slider1.reInit();


      var slider2 = $('.bonus-slides-modal .swiper-container').swiper({
        createPagination: false,
        tabs: true,
        slidesPerView: fourOrFive,
        // slideWidth: 160,
        speed: 800, 
        updateonInit: true,
        updateOnImagesReady: true,
        resizeReInit: true,
      });

    var mainSlider = $('#main-slider').swiper({
      createPagination: true,
      pagination: ".swiper_pagination",
      paginationElement: 'span',
      paginationClickable: true,
      autoplay: 5000,
      speed: 1000,
      onInit: function(){
        mainSlider.createPagination();
        // alert(mainSlider.params.pagination);
      }
    });

    var activeCompSlides = $("#active-comp .swiper-container .swiper-slide").length;
    var activeComp = $('#active-comp.slider .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      slidesPerView: threeOrFour,
      loop: true, 
      loopAdditionalSlides: activeCompSlides,
      speed: 800, 
      updateonInit: true,
      resizeReInit: true,
      onInit : function() {
        
      }
    });
    var prod_1_5or6 = $('#products-1 .swiper-container').swiper({
      createPagination: false,
      tabs: true,
      // slidesPerView: fiveOrSix,
      slidesPerView: 5,
      // slideWidth: 148,
      speed: 800, 
      updateonInit: true,
      resizeReInit: true,
      onInit : function() {
        
      }
    });

    var prod_2_6or7 = $('#products-2 .swiper-container').swiper({
      createPagination: false,
      tabs: true,
      // slidesPerView: sixOrSeven,
      slidesPerView: 6,
      // slideWidth: 148,
      speed: 800, 
      updateonInit: true,
      resizeReInit: true,
      onInit : function() {
        
      }
    });

    var startNabor = $('#start-nabor .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      slidesPerView: 5,
      speed: 800, 
      loop: true,
      updateonInit: true,
      resizeReInit: true,
      onInit : function() {
        
      }
    });

    var prod_3_5or6 = $('#products-3 .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      // slidesPerView: fiveOrSix,
      slidesPerView: 5,
      loopAdditionalSlides: 18,
      slideWidth: 187,
      speed: 800,
      loop: true,
      resizeReInit: true,
    });
    var prod_4_5or6 = $('#products-4 .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      slidesPerView: fiveOrSix,
      loopAdditionalSlides: 18,
      slideWidth: 187,
      speed: 800,
      loop: true,
      resizeReInit: true,
    });

    var ourRecomends_5or6 = $('#recomends .swiper-container').swiper({
      createPagination: false,
      tabs: true,
      slidesPerView: fiveOrSix,
      slideWidth: 148,
      speed: 800, 
      updateonInit: true,
      resizeReInit: true,
      onInit : function() {
        
      }
    });

      

    // var bonusslides_5or6 = $('.bonus-slides .swiper-container').swiper({
    //   createPagination: false,
    //   tabs: true,
    //   slidesPerView: fiveOrSix,
    //   slideWidth: 148,
    //   resizeReInit: true,
    //   loopAdditionalSlides: 18,
    //   loop: true,
    //   speed: 800, 
    // });
    

    var bonusSlides1Length = $("#bonus-slides-1 .swiper-container .swiper-slide").length;
    var bonusslides1_5or6 = $('#bonus-slides-1 .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      // slidesPerView: fiveOrSix,
      slidesPerView: 5,
      slideWidth: 148,
      resizeReInit: true,
      loopAdditionalSlides: bonusSlides1Length,
      loop: true,
      speed: 800, 
      // onInit: function(){
      //   bonusslides1_5or6.resizeFix();
      // }
    });    

    var bonusSlides2Length = $("#bonus-slides-2 .swiper-container .swiper-slide").length;
    var bonusslides2_5or6 = $('#bonus-slides-2 .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      // slidesPerView: fiveOrSix,
      slidesPerView: 5,
      slideWidth: 148,
      resizeReInit: true,
      loopAdditionalSlides: bonusSlides1Length,
      loop: true,
      speed: 800, 
      // onInit: function(){
      //   bonusslides2_5or6.resizeFix();
      // }
    });    

    var bonusSlides3Length = $("#bonus-slides-3 .swiper-container .swiper-slide").length;
    var bonusslides3_5or6 = $('#bonus-slides-3 .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      // slidesPerView: fiveOrSix,
      slidesPerView: 5,
      slideWidth: 148,
      resizeReInit: true,
      loopAdditionalSlides: bonusSlides1Length,
      loop: true,
      speed: 800, 
      // onInit: function(){
      //   bonusslides3_5or6.resizeFix();
      // }
    });    

    var bonusSlides4Length = $("#bonus-slides-4 .swiper-container .swiper-slide").length;
    var bonusslides4_5or6 = $('#bonus-slides-4 .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      // slidesPerView: fiveOrSix,
      slidesPerView: 5,
      slideWidth: 148,
      resizeReInit: true,
      loopAdditionalSlides: bonusSlides1Length,
      loop: true,
      speed: 800, 
      // onInit: function(){
      //   bonusslides4_5or6.resizeFix();
      // }
    });

    var cartSpecials = $('.cart-specials .swiper-container').swiper({
      createPagination: false,
      // slidesPerView: fiveOrSix,
      slidesPerView: 5,
      loopAdditionalSlides: 18,
      speed: 800, 
      resizeReInit: true,
      updateonInit: true,
      loop: true,
    });

// Возможно пригодится позже
  // $('#sets .swiper-container').swiper({ 
  //   loop:true,
  //   speed:800,
  //   updateonInit: true,
  //   loopAdditionalSlides: 6,
  //   slidesPerView: 6,
  //   slidesPerViewFit: false,
  //   onInit : function() {
  //      // fancyModal();
  //     }
  // });

    var videos_3or4 = $('#videos .swiper-container').swiper({
      createPagination: false,
      slidesPerView: threeOrFour,
      loopAdditionalSlides: 4,
      speed: 800, 
      updateonInit: true,
      loop: true,
      resizeReInit: true,
      onInit : function() {
        
      }
  });

  var master_c_3or4 = $('#master-c .swiper-container').swiper({
      createPagination: false,
      slidesPerView: threeOrFour,
      loopAdditionalSlides: 3,
      speed: 800, 
      loop: true,
      resizeReInit: true
  });

    var news_slider_3or4 = $('#news-slider .swiper-container').swiper({
      createPagination: false,
      slidesPerView: threeOrFour,
      loopAdditionalSlides: 3,
      speed: 800, 
      loop: true,
      resizeReInit: true
  });

  var print_p_5or6 = $('#print-p .swiper-container').swiper({
      createPagination: false,
      // slidesPerView: fiveOrSix,
      slidesPerView: 5,
      loopAdditionalSlides: 6,
      speed: 800, 
      updateonInit: true,
      loop: true,
      resizeReInit: true,
      onInit : function() {
        
      }
  });

  var special_p_5or6 = $('#special-p .swiper-container').swiper({
    loop:true,
    speed:800,
    updateonInit: true,
    // loopAdditionalSlides: fiveOrSix,
    loopAdditionalSlides: 5,
    // slidesPerView: fiveOrSix,
    slidesPerView: 5,
    slidesPerViewFit: false,
    resizeReInit: true,
    onInit : function() {
        
      }
  });

  var recent_p_5or6 = $('#recent-p .swiper-container').swiper({
    loop:true,
    speed:800,
    // loopAdditionalSlides: fiveOrSix,
    loopAdditionalSlides: 5,
    // slidesPerView: fiveOrSix,
    slidesPerView: 5,
    slidesPerViewFit: false,
    resizeReInit: true,
    onInit : function() {
        
      }
  });

  var anketaSlider = $(".anketa-slider .swiper-container").swiper({
    createPagination: false,
    loop: true,
    speed: 800
  });


    // Presentation slider etc.

    var presentation_slider = $("#presentation-news .swiper-container").swiper({
      calculateHeight: true,
      mode: 'horizontal',
      speed: 500
    })

    // /Presentation slider etc.

    var swiperNavSlides1 = $(".swiper-nav .swiper-slide").length;
    var swiperNavSlides2 = $(".swiper-nav2 .swiper-slide").length;
    var sertifSlides = $("#one-sertif .swiper-container .swiper-slide").length;
    var polySlides = $("#poly .swiper-container .swiper-slide").length;

    $(".swiper-nav .swiper-slide").each(function(){
      $(this).attr("data-index", $(this).index());
    })
    $(".swiper-nav2 .swiper-slide").each(function(){
      $(this).attr("data-index", $(this).index());
    })
    $("#one-sertif .swiper-container .swiper-slide").each(function(){
      $(this).attr("data-index", $(this).index());
    })
    $("#poly .swiper-container .swiper-slide").each(function(){
      $(this).attr("data-index", $(this).index());
    })

    var slideIndexRemember;

  //Swiper Content Sertificat
  if(sertifSlides) {
    var contentSwiper = $("#one-sertif .swiper-container").swiper({
      loop : true,
      speed: 400,
      initialSlide : sertifSlides,
      slidesPerView: 1,
      loopAdditionalSlides: sertifSlides,
      onSlideChangeStart: function(){
        if(navSwiper) {
          if($(".swiper-nav .swiper-slide").eq(contentSwiper.activeIndex).hasClass("swiper-slide-visible")) {
            $(".swiper-nav .active-nav").removeClass("active-nav");
            $(".swiper-nav .swiper-slide").eq(contentSwiper.activeIndex).addClass("active-nav");
          } else {
            navSwiper.swipeTo(contentSwiper.activeIndex-(navSwiper.loopedSlides/2+navSwiper.slidesPerView));
            $(".swiper-nav .active-nav").removeClass("active-nav");
            $(".swiper-nav .swiper-slide").eq(contentSwiper.activeIndex).addClass("active-nav");
          }
        }
      },
      onInit : function(){
        sertificationFullScreenLink();
      },
      onSlideChangeEnd : function(){
        sertificationFullScreenLink();
      },
      
    });
  }else{
    // var contentSwiper = false;

  }

    
  if(polySlides > 5) {
    var contentSwiper2 = $("#poly .swiper-container").swiper({
      loop : true,
      speed: 400,
      initialSlide : 0,
      loopAdditionalSlides: polySlides,
      slidesPerView: 1,
      onSlideChangeStart: function(){
        if(navSwiper2) {
          if($(".swiper-nav2 .swiper-slide").eq(contentSwiper2.activeIndex).hasClass("swiper-slide-visible")) {
            $(".swiper-nav2 .active-nav").removeClass("active-nav");
            $(".swiper-nav2 .swiper-slide").eq(contentSwiper2.activeIndex).addClass("active-nav");
          } else {
            navSwiper2.swipeTo(contentSwiper2.activeIndex-(navSwiper2.loopedSlides/2+navSwiper2.slidesPerView-1));
            $(".swiper-nav2 .active-nav").removeClass("active-nav");
            $(".swiper-nav2 .swiper-slide").eq(contentSwiper2.activeIndex).addClass("active-nav");
          }
        }
      },
      onInit : function(){
        polygraphyTitlerAndLink();

      },
      onSlideChangeEnd : function(){
        polygraphyTitlerAndLink();

      }
      
    });
  }else{
    var contentSwiper2 = false;

  }

    //Nav
    if(swiperNavSlides1 > 5) {
      var navSwiper = $('.swiper-nav').swiper({
        visibilityFullFit: true,
        slidesPerView: 5,
        initialSlide: swiperNavSlides1,
        loopAdditionalSlides: swiperNavSlides1,
        loop: true,
        centeredSlides: true,
        onInit : function(){
          // alert("Нижних слайдов: "+navSwiper.slides.length)
          // if(navSwiper.activeIndex == 0) { 
          //   $(".swiper-nav").find(".arrow-left").hide();  
          // }
        },
          centeredSlides : true,
        
        //Thumbnails Clicks
        onSlideClick: function(){
          contentSwiper.swipeTo( navSwiper.clickedSlideLoopIndex )
          // alert("Кликнутый слайд-индекс: "+navSwiper.clickedSlideIndex + " И КликЛупИндекс: " + navSwiper.clickedSlideLoopIndex)
          $(".swiper-nav .active-nav").removeClass("active-nav");
          $(".swiper-nav .swiper-slide").eq(navSwiper.clickedSlideIndex).addClass("active-nav")
          // navSwiper.fixLoop();
        }
      });
    } else {
      var navSwiper = false;
      $('.swiper-nav .swiper-slide').css("float", "none");
      $('.swiper-nav .swiper-slide').on("click", function(e){
        $(".swiper-nav .active-nav").removeClass("active-nav");
        $(this).addClass("active-nav");
        contentSwiper.swipeTo( $(this).attr("data-index") )
      })
    }


    var navSwiper2 = $('.swiper-nav2').swiper({
      visibilityFullFit: true,
      slidesPerView: 7,
      loopAdditionalSlides: swiperNavSlides2,
      loop: true,
      centeredSlides: true,
      onInit : function(){
        // alert(navSwiper2.slides.length)
      },
      //Thumbnails Clicks
      onSlideClick: function(){
          contentSwiper2.swipeTo( navSwiper2.clickedSlideLoopIndex )
          $(".swiper-nav2 .active-nav").removeClass("active-nav");
          $(".swiper-nav2 .swiper-slide").eq(navSwiper2.clickedSlideIndex).addClass("active-nav")
          navSwiper2.fixLoop();
      }
    });


    // ****************************************************************************************Стрелка хайд**********************************************************************
    // $('#sertif-modal .arrow-wrapper').on("click", function(e){
    //   e.preventDefault();
    //   if(contentSwiper.activeIndex == 0) {
    //         contentSwiper.swipePrev(false);
    //   }else if (contentSwiper.activeIndex >= (contentSwiper.slides.length)-1) {
    //         contentSwiper.swipeNext(false);
    //   }
        
    // });

    // $('#sertif-modal .arrow-wrapper.left,').on('click', function(e){
    //     e.preventDefault();
    //     navSwiper.swipePrev();    
    // });

    // $('#sertif-modal .arrow-wrapper.right').on('click', function(e){
    //     e.preventDefault();
    //     navSwiper.swipeNext();  
    // });
    // ****************************************************************************************/Стрелка хайд**********************************************************************

    //Update Nav Position
    // function updateNavPosition(contentSwiper11, navSwiper11){
    //   if(navSwiper == navSwiper11) {
    //     $('.swiper-nav .active-nav').removeClass('active-nav')
    //     var activeNav = $('.swiper-nav .swiper-slide').eq(contentSwiper11.activeIndex).addClass('active-nav')
    //   } else {
    //     $('.swiper-nav2 .active-nav').removeClass('active-nav')
    //     var activeNav = $('.swiper-nav2 .swiper-slide').eq(contentSwiper11.activeIndex).addClass('active-nav')
    //   }
    //   if (!activeNav.hasClass('swiper-slide-visible')) {
    //     if (activeNav.index()>navSwiper11.activeIndex) {
    //       var thumbsPerNav = Math.floor(navSwiper11.width/activeNav.width())-1
    //       navSwiper11.swipeTo(activeNav.index()-thumbsPerNav)
    //     }
    //     else {
    //       navSwiper11.swipeTo(activeNav.index())
    //     } 
    //   }
    // }

    function polygraphyTitlerAndLink() {
      var hrefPoly = $.trim($("#polygraphy .swiper-slide-active > img").attr("src"));
      $("#polygraphy .dop-block .full-screen a").attr("href", hrefPoly);

      var altForTitle = $("#polygraphy .swiper-slide-active > img").attr("alt"); // Забираем имя листовки из альта.
      $("#polygraphy .will-added").replaceWith("<span class='will-added'>" + altForTitle + "</span>"); // Заменяем предыдущий спан на новый.

      //Теперь ниже займёмся подстановкой ссылки на скаичвание
      var linkForDownload = $("#polygraphy .swiper-slide-active > img").attr("src") + "?download"; // Взяли линк из пользовательского атрибута
      $("#polygraphy .downl > a").replaceWith("<a href='" + linkForDownload + " download'><img src='img/download.png' alt=''><span>Скачать " + altForTitle + "</span></a>"); // Воткнули линк из пользовательского атрибута + поменяли текст ссылки.
    }

    function sertificationFullScreenLink() {
      var hrefSert = $.trim($("#one-sertif .swiper-slide-active > img").attr("src"));
      $("#sertif-modal .dop-block .full-screen a").attr("href", hrefSert);

      var linkForDownload = $("#sertif-modal .swiper-slide-active > img").attr("src") + "?download"; // Взяли линк из пользовательского атрибута
      $("#sertif-modal .downl > a").attr("href",linkForDownload).attr("download",""); // Воткнули линк из пользовательского атрибута + поменяли текст ссылки.
    }


    $(".up a.link").on("click", function(e){
      e.preventDefault();
    })
    
   $("body").on("click", ".modal-viewer", function (e){
      e.stopPropagation();

      e.preventDefault();

      

      if($(this).closest("#additional_adresses").length) {
        deleteAdressSiteSettingsObject = $(this).closest("li");
      }

      var ourID = $(this).data("key");
      // var ID = $(ourID).attr("id");
      var notWide = $(ourID).hasClass("not-wide");
      $.fancybox( $(this).data("key"), {
          beforeShow : function(){
            $.fancybox.showActivity;          
          },
          afterShow :  function(){
            // if (window.PIE) {
            //   $('.jq-radio, .instead-what-img, .fancybox-skin, .restore-circle, header .col-3 .search [type=text], .modal, input, .error span, .this-btn, .cart-info-content, .ui-tooltip, s, a, textarea, .popup .content, .popup, .swiper-pagination-switch').each(function() {
            //       PIE.attach(this);
            //   });
            // }
            if(notWide){
              $(".fancybox-opened").css({"min-width":$(ourID).width() + 60 + "px"});
            }
            
            if(ourID == "#fast-buy-nabor" || ourID == "#akciya" || ourID == "#fast-buy") {
              $(".fancybox-opened").css({"min-width":"750px","max-width":"750px"});
            }
            if(ourID == "#gooddeal"){
              if(gooddealElements > 4) {
                $(".fancybox-opened").css({"min-width":"920px", "max-width":"1150px"});
              } else {
                $(".fancybox-opened").css({"min-width":"920px", "max-width":"920px"});
              }
              gooddeal.reInit();
              //alert(gooddealElements)
            }

            if(ourID == "#sertif-modal" || ourID == "#polygraphy") {
              $(".general-modal").css({"max-width":"800px", "padding":"15px"});
              $(".fancybox-opened").css({"min-width":"800px","max-width":"800px"});
              $(".fancybox-skin").css({"padding":"0px"});
            }

            if(ourID == "#sponsors-list") {
               $(".fancybox-opened").css({"min-width":"930px","max-width":"1180px"});
               $(".fancybox-opened").addClass("width_important");
              // width: 95% !important;
              // max-width: 1180px;
              // min-width: 930px;
            }

            if(ourID == "#big-pic") {
              mainImgResizer();
            // $.fancybox.resize;
          }
        }
      });

            
    //  setTimeout(function(){}, 500);

      if($(this).data("key") == "#replacer-tovar") {
        setTimeout(function(){
          slider1.resizeFix();
          slider1.reInit();
          slider1.resizeFix();
        }, 5);
      } else if ($(this).data("key") == "#replacer") {
        setTimeout(function(){
          slider2.resizeFix();
          slider2.reInit();
          // slider2.resizeFix();
        }, 5);
      } else if ($(this).data("key") == "#gooddeal") {
        setTimeout(function(){
          gooddeal.resizeFix();
          resizeForSlider();
          gooddeal.reInit();
          // gooddeal.resizeFix();
        }, 20);
      } else if($(this).data("key") == "#big-pic") {
        mainImgResizer();
        verticalMiddlerPic();
      }
    }); 



    var hrefPicture = $("a#single_image").attr("href");
    $("#big-pic .big-pic").append("<img src='"+hrefPicture+"'>");

    function verticalMiddlerPic(){
        var block = $("#big-pic .big-pic");
        block.css({"line-height":"normal"});
        var blockHeight = block.height();
        block.css({"line-height":blockHeight + "px"});
    }

    function mainImgResizer(){
      var newHeight = $(window).height();
      var block = $("#big-pic .big-pic");
      var img = $("#big-pic .big-pic img");
      var imgHeight = img.height();
      var imgWidth = img.width();
      // alert(oldHeight);
      if(newHeight > oldHeight){
        var diffHeight = newHeight - oldHeight;
        if(newHeight >= 760 ){
          block.css({"height":"660px", "width":"760px"});
        } else {
          // var resHeight = block.height() + diffHeight;
          var resHeight = newHeight - 100;
          block.css({"height":resHeight+"px", "width":resHeight + 100 + "px"});
        }
      } else {
        var diffHeight = oldHeight - newHeight;
        if(newHeight <= 600 ){
          block.css({"height":"500px", "width":"600px"});
        } else {
          // var resHeight = block.height() - diffHeight;
          var resHeight = newHeight - 100;
          block.css({"height":resHeight+"px", "width":resHeight + 100 + "px"});
        }
      }
      block.closest(".fancybox-opened").css("min-width","700px");
      // block.css({"min-width":imgWidth + "px"})

      oldHeight = newHeight; 
      // alert(oldHeight);
    }
    $(window).on("resize", function(){
      plitkaAskPopupPosition();
      mainImgResizer();
      verticalMiddlerPic();
    });
    function plitkaAskPopupPosition() {
      var screenWidth = $(window).width();
      if (screenWidth >= 1100){
        $("#catalog-list > .items > .item:nth-child(3n+3)").find(".popup.center").removeClass("lefter");
        $("#catalog-list > .items > .item:nth-child(4n+4)").find(".popup.center").addClass("lefter");
      }
      else {
        $("#catalog-list > .items > .item:nth-child(4n+4)").find(".popup.center").removeClass("lefter");
        $("#catalog-list > .items > .item:nth-child(3n+3)").find(".popup.center").addClass("lefter");
      }
    }
    plitkaAskPopupPosition();
    

    // Стилизация кнопок переключателей (radio buttons, checkbox, etc)
    // $(".order-inner .var1.real-adress label input").addClass("not-styler");

    $('input:not(.not-styler)').styler();


    // Стилизация скролл-бара
    // $('#basket .items, #add-popup .items').scrollbar();
    $('#basket .items').scrollbar();


    function hitTheTable(dataAttr) {
        if($(dataAttr + " .report-table").hasClass("need-scroll")){
        $(dataAttr + " .need-scroll").tableScroll(); //{height:100}
        $(dataAttr + " .need-scroll").removeClass("need-scroll");
      }
      //var anyEl = $("*");
// Ещё одна стилизация скроллбара. Стилизация к блоку с таблицей
        $(".tablescroll_wrapper").mCustomScrollbar({
          theme : "tiande",
          // setHeight : 150,
          scrollbarPosition: "outside",
          scrollButtons:{ 
            enable: true
          }
        });

    }

    $("a.table-hit").on("click", function(){
      var dataAttr = $(this).data("key");
      setTimeout(function(){hitTheTable(dataAttr)}, 5);
    });

    $(".main-table.tree").mCustomScrollbar({
      theme : "tiande-x",
      setWidth: "100%",
      axis: "x",
      mouseWheel:{ 
        enable: false 
      },
      scrollbarPosition: "outside",
      scrollButtons:{ 
      enable: true
      }
    });

    // $(".tablescroll_wrapper").addClass("my-custom-skin").customScrollbar();

    // Фиксированное субменю при скролле

    // $(document).scroll(function(event){
    //   $('#top-submenu').css('top', $(window).scrollTop() + 'px');
    // });


    // Координаты меню второго уровня (Главное меню)

    function reCalculatePosition()
    {
      var parentWidth = $('#main-menu').width();

      $('#main-menu li').each(function()
      {
        var popup = $(this).find('.popup:first')
        var elementPos = $(this).position().left

        if (elementPos <= parentWidth / 2)
        {
          popup.css({
            left: Math.floor(-elementPos / 3)
          })
        }
        else if (elementPos > parentWidth / 2)
        {
          popup.css({
            left: 'auto',
            right: Math.floor(-(parentWidth - (elementPos + $(this).width())) / 3)
          })
        }
      });
    }

    reCalculatePosition();

    $(window).on('resize', reCalculatePosition);


    // Модальные окна

    $('.has-modal').on("click",function(e){
      e.preventDefault();
      e.returnValue = false;
      $('body').addClass('modal-active');

      var id = $(this).data('id');
      $('#overlay #' + id).show();
      $("html").addClass("fancybox-lock");

      if(id == "photo_zoom") {
        var hrefImage = $(this).attr("href");
        $("#"+id+" .photo_container").append("<img src="+hrefImage+">");
      }
    });

    $('#overlay, #overlay .modal .close').on("click",function (e) {
      e.stopPropagation()
      $('body').removeClass('modal-active');
      $('#overlay .modal').hide();
      $("html").removeClass("fancybox-lock");
    });

    $('#overlay .modal').on("click",function(e){
      e.stopPropagation()
    });



    // Всплывающие блоки

    // function openPopup(e, obj)
    // {
    //   e.stopPropagation();
    //   var wasActive = obj.hasClass('active');

    //   $('.has-popup.active').removeClass('active');

    //   if( ! wasActive)
    //     obj.addClass('active')
    // }

    // $('.has-popup').on("click",function(e){
    //   if( ! $(this).hasClass('open-arrow') && ! $(this).hasClass('open-hover'))
    //     openPopup(e, $(this))
    // });

    // $('.has-popup.open-arrow s').on("click",function(e){
    //   openPopup(e, $(this).parent('.has-popup'))
    // });

    // $('body').on("click",function(){
    //   $('.has-popup.active').removeClass('active')
    //   $('.popup').parent().mouseleave();
    // });

    // $('.popup .content').on("click",function(e){
    //   e.stopPropagation();
    // });
    // $('.has-popup').hover(function (e){
    //   $('.has-popup.active').removeClass('active');
    // })
    function openPopup(e, obj)
    {
      e.stopPropagation();
      e.preventDefault();

      var wasActive = obj.hasClass('active');

      $('.has-popup.active, .what.active,.info-icons ul li.active').removeClass('active');

      if( ! wasActive)
        obj.addClass('active')
    }

    $('.has-popup, .what, .info-icons ul li').click(function(e){
      if( ! $(this).hasClass('open-arrow') && ! $(this).hasClass('open-hover'))
        openPopup(e, $(this))
    })

    $('.has-popup.open-arrow s').click(function(e){
      openPopup(e, $(this).parent('.has-popup'))
    })

    $('body').click(function(){
      $('.has-popup.active, .what.active, .info-icons ul li.active').removeClass('active')
    })

    $('.popup .content').click(function(e){
      e.stopPropagation();
    })


    // Блок продвижение (соц. кнопки)

    $('#share-content').hide();

    $('#share').on("click",function(e){
      if($(this).hasClass('active'))
      {
        $('#share-content').slideUp(200);
        $(this).removeClass('active')
      }
      else
      {
        $('#share-content').slideDown(200);
        $(this).addClass('active')
      }

    });


    $('.share-content-slide').hide();

    $('.share').on("click",function(e){
      if($(this).hasClass('active'))
      {
        $('.share-content').slideUp(200);
        $(this).removeClass('active')
      }
      else
      {
        $('.share-content').slideDown(200);
        $(this).addClass('active')
      }

    });


    // Выбор страны (Всплывающие блоки)

    var countries = $('#countries .content')

    countries.find('a').on("click",function(e){
      countries.find('a.active').removeClass('active')
      $(this).addClass('active')
      var text = $(this).text()
      $('#countries > a').text(text)
      $('#countries').removeClass('active')
    });

    $('.hook').on('click', function(e){ // При нажатии на ссылку с классом hook, из атрибута href берётся id элемента к которому должен быть плавный скролл (элемент должен быть записан с # в атрибуте)
      e.stopPropagation();
      e.preventDefault();
      var idFromHref = $(this).attr('href');
      $('html,body').stop().animate({ scrollTop: $(idFromHref).offset().top - $("#top-submenu").height() }, 1000);
    });
    // Сортировка каталога (при js дизайнерский элемент, при отсутствии - стандартный select)
    $(".nojs-sort").hide();
    $(".sorter").css({"display":"inline-block"});
    $(".sort-arrow").on("click",function(e){
      e.stopPropagation();
      $(".dropdown-sort, .dropdown-town").hide();
      $(this).nextAll(".dropdown-sort").toggle();
    });
    $(".dropdown-sort li").on("click", function(e){
      e.stopPropagation();
      var liText = $(this).html();
      var ourInput = $(this).parent().prevAll(".drop");
      ourInput.val(liText);
      $(this).parent().hide();
    });
    $("body").on("click",function(e){
        $(".dropdown-sort").hide();
    });


    //Кол-во товара
    
    $("input[value='+'], input[value='-'] ").show();
    $("input[value='+']").on("click",function(){
      var thisTextInput = $(this).parent().find("input[type='text']");
      var tmp = thisTextInput.attr("value");
      tmp++;
      thisTextInput.attr("value", tmp);
    });

    $("input[value='-']").on("click",function(){
      var thisTextInput = $(this).parent().find("input[type='text']");
      var tmp = thisTextInput.attr("value");
      tmp--;
      if(tmp < 1) tmp = 1;
      thisTextInput.attr("value", tmp);
    });

    $("input[name='count']").on("input", function() {
      var regExp = /^\d+$/;
      if(!regExp.test($(this).val())) {
        $(this).attr("value", 1);
      }
    })

    // SIDE Catalog MENU
    $("ul li.has-child").removeClass("selected");
    $("ul li.has-child > a").on("click", function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).parent().toggleClass("selected");
    })

    $("#menu_catalog ul li.child.selected").closest("ul").show();

    // /SIDE Catalog MENU


    // Сворачивание слайдеров

   var boolToggle = true;

   $(".slide-up").on("click",function(){

      var h3Active = $(this).next(); 
      var slidedBlockHeight = h3Active.height();
      $(this).toggleClass("active");
      h3Active.slideToggle(500);
      if($(this).hasClass("modal-slide")){
        if(boolToggle) {
          boolToggle = false;
          increaser(slidedBlockHeight);
        } else {
          boolToggle = true;
          decreaser(150);
        }
      }
   });

   function increaser (pixels) {
    var thisHeight = $(".fancybox-opened .tablescroll_wrapper").height();
      $(".fancybox-opened .tablescroll_wrapper").animate({"height":thisHeight + pixels + "px"},500);
   }

   function decreaser (pixels) {
      $(".fancybox-opened .tablescroll_wrapper").animate({"height":pixels + "px"}, 500);
   }


  //DOM element:
  
  
  setTimeout(function(){$(".autoclicker").hide().click();}, 1);

  // Restore Pass
  // Change Field -> ActiveButtonContinue
  $(".order .continue,.this-btn").on("click", function (e){
    e.preventDefault();
  });

  // $(".restore-password .continue.active").removeClass("active").addClass("no-active");

  $(".restore-password .change").live("click", function(){
    var liRestoreStep = $(this).closest(".restore-step");
    liRestoreStep.nextAll().removeClass("done").removeClass("active").addClass("empty");
    liRestoreStep.removeClass("empty").removeClass("done").addClass("active");
    $(".restore-step .form-content").each(function(){
      $(this).slideUp();
    });

    liRestoreStep.find(".form-content").slideDown();
    liRestoreStep.find(".infoblock, .change").hide();
    liRestoreStep.nextAll().find(".infoblock, .change").hide();

    // if(!$(this).closest(".restore-password").hasClass("registration")){liRestoreStep.closest("form")[0].reset();}

    liRestoreStep.closest("form").find("input.wrong").removeClass("wrong");
  });

///////////////////////////////////////////////////////////////////////////////////////////////// ВРЕМЕННО ОТКЛЮЧИЛ. ПЕРЕПИШУ ////////////////////////////////////////////////////////

  // $(".restore-password .continue.active").live("click", function (e){
  //   if(!$(this).hasClass("no-slide-up")){
  //     var liRestoreStep = $(this).closest(".restore-step");
  //     // var whatSlide = "one";
  //     liRestoreStep.find(".form-content").slideUp();
  //     liRestoreStep.removeClass("active").addClass("done");
  //     liRestoreStep.next().addClass("active");
  //     if(!liRestoreStep.hasClass("third")){    
  //       var forNextShow = liRestoreStep.find(".for-change.radio.checked input").data("show");      
        
  //       liRestoreStep.find(".change").removeClass("hide");
  //       liRestoreStep.find(".from-form").removeClass("hide");
  //       if(liRestoreStep.hasClass("second")) {    
  //         whatSlide = (forNextShow == "email") ? "email" : "eiac";
  //         liRestoreStep.next().find(".form-content." + whatSlide).slideDown();
  //       } else {
  //         liRestoreStep.next().find(".form-content.one").slideDown();
  //       }
  //     }
  //   } 
  // });

  $(".restore-password .continue.active").live("click", function (e){
    if(!$(this).hasClass("no-slide-up")){
      var liRestoreStep = $(this).closest(".restore-step");
      liRestoreStep.find(".form-content").slideUp();
      liRestoreStep.removeClass("active").addClass("done");
      liRestoreStep.find(".infoblock, .change").show();
      liRestoreStep.next().addClass("active").find(".form-content").slideDown();
    }
  });


///////////////////////////////////////////////////////////////////////////////////////////////// ВРЕМЕННО ОТКЛЮЧИЛ. ПЕРЕПИШУ ////////////////////////////////////////////////////////

  // $(".order .pay-element .continue.active").on("click", function(e){
  //   e.stopPropagation();
  //   if(!$(this).hasClass("no-slide-up")) {
  //     var liElement = $(this).closest("li.pay-element");
  //     liElement.find(".order-inner").slideUp();
  //     liElement.removeClass("active").addClass("done");
  //     liElement.find(".infoblock, .change").show();
  //     if(liElement.next().hasClass("incorrect")) liElement.next().show();
  //     if(liElement.hasClass("incorrect")) setTimeout(function(){liElement.hide()}, 400);
  //     liElement.next().removeClass("empty").addClass("active").find(".order-inner").slideDown();
  //     cartSpecials.reInit();
  //     cartSpecials.swipeNext();
  //   }
  // });
  // ****************************************************************************************************


    // $(".restore-password .for-change.number").live('input', function(){
    //   $(this).parent().find(".continue.no-active").removeClass("no-active").addClass("active");
    //   var thisText = $(this).val();
    //   var regExp = /^\d+$/;
    //   if(!regExp.test($.trim(thisText))) {
    //     $(this).parent().find("a.continue.active").removeClass("active").addClass("no-active");
    //   }
    // });
  

  $(".for-change.radio").on('click', function(){
    $(this).closest("li.restore-step").next().find(".must_show").addClass("hide");
    var thisDataShow = $(this).data("show");

    thisRadioBtn = $(this);

    if(thisRadioBtn.hasClass("checked") || thisRadioBtn.checked) {
      $(this).closest(".form-content").find(".continue.no-active").removeClass("no-active").addClass("active");
    }

    $(".must_show."+thisDataShow).removeClass("hide");

  });

   $(".reg-change, .just_show_block").on("click", function(e){
    e.preventDefault(); 
    var nextShowBlock = $(this).data("show");
    $(".dinamick_block").hide();
    $("."+nextShowBlock).show();
   });

   $(".check-single-sponsor").on("click", function(e){
    e.preventDefault();
    if($.trim($("#reg_sponsor_id").val()) != ""){
      $(this).closest(".form-content").find(".single-sponsor").show();
      $(this).closest(".form-content").find(".continue.no-active").removeClass("no-active").addClass("active");
      $("#reg_sponsor_id").removeClass("wrong");
    } else {
      $("#reg_sponsor_id").addClass("wrong");
    }
   })


	// $(".restore-password .for-change").live("input", function(){
 //      $(this).parent().find(".continue.no-active").removeClass("no-active").addClass("send-form");
 //      $(".continue.send-form").off();
	  
	// });					
  


  $(".restore-password input[name='repeat-pass']").live("input", function(){
    var justFirstTry = $(".restore-password input[name='pass']");
    if(justFirstTry.val() != "") {
      $("input.continue.no-active").removeClass("no-active").addClass("active");
      $(".continue").off();
    }
    
  });

  $(".pay-page .payer").css("visibility", "hidden");
  $(".pay-page .payer.payer-visible").css("visibility", "visible");

  $(".pay-checkbox").on("click", function(){
    var isChecked = $(this).hasClass("checked");
    if(isChecked) {
      $(this).parent().find(".payer").css("visibility", "visible");
    } else {
      $(this).parent().find(".payer").css("visibility", "hidden");
    }

    if(isChecked) {
      $(this).closest("form").find(".sum").addClass("itsNumber").addClass("importantField");
    } else {
      $(this).closest("form").find(".sum").removeClass("itsNumber").removeClass("importantField");
    }
  });

   // $(".payer input[type='submit'].continue").removeClass("active").addClass("no-active");
  
  // $(".payer input[name='pay-pass']").live("input", function(){
  //   $("input[type='submit'].continue.no-active").removeClass("no-active").addClass("active");
  //   $("input.continue").off();  
  // });

  $(".send-wrap .send-form, .order-link").off(); 
  // CART QUANTITY

  // $('.cart-quantity-action').on('click', function(){
  //     var quantity = parseInt($(this).parent().find('input').val());
  //     var action = $(this).data('action');
  //     if(action == '-' && quantity > 1){
  //       $(this).parent().find('input').val(quantity - 1);
  //     }else if(action == '+'){
  //       $(this).parent().find('input').val(quantity + 1);
  //     }   
  //     var quantSumma = 0;
  //     $(this).closest("table.cart-table").find("table.cart-quantity").find("input").each(function(){
  //       quantSumma += parseInt($(this).val());
  //     });
  //     $(this).closest(".cart-table").find(".count-sum").text(quantSumma);
  //   });
  // $(".cart-quantity-input input").on("keyup change input", function(e){
  //   var regExp = /^\d+$/;
  //   if(!regExp.test($(this).val())) {
  //     $(this).attr("value", 1);
  //   }
  // })



    $('.cart-color-select img').hover(function(){
      $(this).next('.cart-color').toggle();   
    }, function(){
      $(this).next('.cart-color').toggle();
    });
    // $('.cart-item-remove').on('click', function(){
    //   $(this).parent().parent().hide('slow');
    // });

  // END CART QUANTITY

    $('.cart-arrow').on('click',function(){
      $(this).parent().next('.cart-li').toggle();
      $(this).find('span:last').toggleClass('up');
      $(this).find('span:last').toggleClass('down');
      if(!$('.cart-li').length){
        $('.dd').show();
      } 
    });

    // $('.cart-item-remove').on('click', function(e){
    //   e.preventDefault();
    //   $(this).closest("tr").hide('slow');
    //   $.ajax({
    //    type: "GET",
    //    statusCode: {
    //       404: function() {
    //         alert( "С ajax'ом ошибочка вышла (404) :))" );
    //       }
    //     },
    //    url: "somewhere.php",
    //    data: "isDeleted=Y",
    //    success: function(msg){
    //      alert("Success!");
    //    }
    //  });
    // });


  $(".order .pay-element .continue.active").on("click", function(e){
    e.stopPropagation();
    if(!$(this).hasClass("no-slide-up")) {
      var liElement = $(this).closest("li.pay-element");
      liElement.find(".order-inner").slideUp();
      liElement.removeClass("active").addClass("done");
      liElement.find(".infoblock, .change").show();
      if(liElement.next().hasClass("incorrect")) liElement.next().show();
      if(liElement.hasClass("incorrect")) setTimeout(function(){liElement.hide()}, 400);
      liElement.next().removeClass("empty").addClass("active").find(".order-inner").slideDown();
      cartSpecials.reInit();
      cartSpecials.swipeNext();
    }
  });

  $(".order .pay-element .change").on("click", function(){
    var liElement = $(this).closest("li.pay-element");
    // $("li.pay-element").removeClass("active").addClass("empty");
    liElement.nextAll().removeClass("active").addClass("empty");
    liElement.removeClass("empty").addClass("active");
    $("li.pay-element .order-inner").each(function(){
      $(this).slideUp();
    })
    liElement.find(".order-inner").slideDown();
    liElement.find(".infoblock, .change").hide();
    liElement.nextAll().find(".infoblock, .change").hide();

  });


  var forRadioPadding = $("label.checker div").hasClass("jq-radio");
  if(forRadioPadding) {
    $("label.checker").closest("label.checker").css({"padding" : 0});
  }
  $(".order-inner .var1.real-adress label").css({"padding-left":"14px"});


  $(".order ul.variants li a").on("click", function(e){
    e.preventDefault();
  });

  $(".order ul.variants li").on("click", function(e){
    var dataLink = $(this).data("link");
    if(dataLink == "var1") {
      $(this).closest(".delivery-show-up").find(".var1").show();
      $(this).closest(".delivery-show-up").find(".var2").hide();
      $(this).addClass("active");
      $(this).next().removeClass("active");
      $(this).closest("form")[0].reset();
      // $(this).closest("form").find("reseter").click();
    } else if(dataLink == "var2") {
      $(this).closest(".delivery-show-up").find(".var2").show();
      $(this).closest(".delivery-show-up").find(".var1").hide();
      $(this).addClass("active");
      $(this).prev().removeClass("active");
      $(this).closest("form")[0].reset();
      // $(this).closest("form").find("reseter").click();
    }
  });

  $(".nojs-select").hide();
  $(".js-select").css({"display":"inline-block"});
  $(".select-arrow").on("click",function(e){
    $(".dropdown-select").hide();
    e.stopPropagation();
    $(this).closest(".js-select").find("input").focus();
    $(this).nextAll(".dropdown-select").toggle();
  });
  $(".dropdown-select li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).html();
    var ourInput = $(this).parent().prevAll(".drop");
    ourInput.val(liText);
    $(this).closest(".js-select").find("input").focus().blur();
    $(this).parent().hide();
  });
  $("body").on("click",function(e){
      $(".dropdown-select").hide();
  });



  $(".order-arrow").show();
  $(".order-arrow").on("click",function(e){
    e.stopPropagation()
    $(this).next().show();
  });

  $(".order .dropdown-town li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).html();
    var ourInput = $(this).parent().prevAll(".drop");
    ourInput.val(liText);
    $(this).closest("td").find("input").focus().blur();
    $(this).parent().hide();
  });

  $(".registration .dropdown-town li").on("click", function(e){
    e.stopPropagation();
    var dataLi = $(this).data("countryid");
    var liText = $(this).html();
    var ourInput = $(this).closest(".input-parent").find("input");
    var ourHiddenInput = $(this).closest(".input-parent").find("input[type=hidden]");
    ourInput.val(liText);
    ourHiddenInput.val(dataLi);
    ourInput.focus().blur();
    $(this).parent().hide();
  });

  $(".consultant_transfer .dropdown-town li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).html();
    var ourInput = $(this).closest(".input-parent").find("input");
    ourInput.val(liText);
    ourInput.focus().blur();
    $(this).parent().hide();
  });

  $(".sponsor_letter .dropdown-town li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).html();
    var ourInput = $(this).closest(".input-parent").find("input");
    ourInput.val(liText);
    ourInput.focus().blur();
    $(this).parent().hide();
  });

  $("#transfer_valuta + .dropdown-town li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).html();
    var dataVal = $(this).data("val");
    var yellowSpanValuta = $("#transfer_summa").parent().find(".yellow_info").find(".valuta");
    var ourInput = $(this).closest(".input-parent").find("input");
    yellowSpanValuta.text(dataVal);
    ourInput.val(liText);
    ourInput.focus().blur();
    $(this).parent().hide();
  });
  

  $("body, .order, body").on("click",function(e){
      $(".dropdown-town").hide();
  });

  // $("#radio-someone-else-styler").on("click", function(e){
  //   e.stopPropagation();
  //   $(this).addClass("checked");
  //   $(this).find("input").change();
  // });

  // $("#radio-self-styler").on("click", function(e){
  //   e.stopPropagation();
  //   $(this).addClass("checked");
  //   $(this).find("input").change();
  // });

   $(".delivery-type .someone").on("click", function(e){
    e.preventDefault();
    $(".delivery-type > a").removeClass("selected");
    $(this).addClass("selected");
    $(".delivery-show-up").show();
    $(".self-show-up").hide();
    $(this).closest("form")[0].reset();
  });

  $(".delivery-type .self").on("click", function(e){
    e.preventDefault();
    $(".delivery-type > a").removeClass("selected");
    $(this).addClass("selected");
    $(".delivery-show-up").hide();
    $(".self-show-up").show();
    $(this).closest("form")[0].reset();
  });

  $(".order .find").on("click", function(e){
    e.stopPropagation();
    $(".order .city").hide();
    var valueCity = $(this).prevAll(".city-select").find("input.drop").val();
    if (valueCity == "") {
      $(this).parent().addClass("wrong");
      $(this).next("span.wrong").show().css("display", "block");
    } else {
      $(this).parent().removeClass("wrong");
      $(this).next("span.wrong").hide();
    }
    $(this).nextAll("div[data-city='"+valueCity+"'].city").show();
  });

  $(".city-select input").on("keyup change input", function(){
    $(this).nextAll(".dropdown-town").show();
    if($.trim($(this).val()) == "") {
      $(this).nextAll(".dropdown-town").hide();
    }
  })

  hideTableCol($(".gudini"));
  hideElement($(".hide_element"));

  $('.report-left-menu-toggle').on('click', function(){
    $(this).toggleClass('report-left-menu-toggle-clicked');
    $('.report-left-content').animate({width: 'toggle'});
    // $('.report-left-menu').css({'width':'auto'}); 
    // $('.report-left-menu').toggleClass('auto-width');
    // setTimeout(function(){$('.report-left-menu').css({'width':'240px'})}, "slow");
    hideTableCol($(".gudini"));
    hideElement($(".hide_element"));

  });

  $('.report-left-menu-toggle').toggle(function(){
        $(".report-content-in").animate({"margin-left": "30px"}, "slow");
        // $('.report-left-content').animate({"width": "0px"}, "slow");

    },function(){
        $(".report-content-in").animate({"margin-left": "240px"}, "slow");
        // $('.report-left-content').animate({"width": "200px"}, "slow");
        // setTimeout(function(){
        //   $('.report-left-menu').css({'width':'17%'});
        // }, 700)
    });


  $(".little-arrow").on("click",function(e){
    $(".dropdown-town, .dropdown-sort").hide();
    e.stopPropagation();
    e.preventDefault();
    $(this).closest(".inputer").find(".dropdown-town").show();
    $(this).closest(".input-parent").find(".dropdown-town").show();
  });

  $(".report-content .dropdown-town li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).data("value");
    var forBtn = $(this).data("btn");
    var ourInput = $(this).parent().prevAll("input:not(.equality)"); 
    var ourInputMini = $(this).closest(".inputer").find(".equality");
    // ourBtn = ourBtn.find(".any-icon");
    // ourInput.val(liText);
    ourInputMini.val(forBtn);
    $(this).closest(".dropdown-town").hide();
  });

  $(".simple.dropdown-town li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).html();
    var forBtn = $(this).data("btn");
    var ourInput = $(this).closest(".input-parent").find("input:not(.equality)"); 
    var ourInputMini = $(this).closest(".input-parent").find(".equality");
    // ourBtn = ourBtn.find(".any-icon");
    ourInput.val(liText);
    ourInput.focus().blur();
    // ourInputMini.val(forBtn);
    $(this).closest(".dropdown-town").hide();
  });

  $(".report-content .dropdown-town.select li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).data("value");
    var forBtn = $(this).data("btn");
    var ourInput = $(this).parent().prevAll("input:not(.equality)");
    var ourInputMini = $(this).closest(".inputer").find(".equality");
    // ourBtn = ourBtn.find(".any-icon");
    ourInput.val(liText).change();
    ourInputMini.val(forBtn);
    $(this).closest(".dropdown-town").hide();
  });


  $(".inputer input[type='text']").on("keyup change input",function(e){
    e.stopPropagation();
    $(this).parent().find(".reset").show();
    if($.trim($(this).val()) == "") {
    $(this).parent().find(".reset").hide();
    }
  });


  setTimeout(function(){$(".additional-filters .inputer .reset").hide()},1); // for IE

  $(".inputer .reset").on("click", function(e){
    e.stopPropagation();
    e.preventDefault();
    $(this).parent().find("input[type='text']").not(".equality").val("");
    $(this).hide();
  });

  // Cart and Order  tabs at end of  page
  // setTimeout(function(){$(".another.tabs").nextAll("div.tab:not([data-group='1'])").hide();},10);
  $(document).on("click",".another.tabs a", function(e){
    e.stopPropagation();
    e.preventDefault();
    var that = $(this);
    var dataGroup = $(this).data("group");
    var selectedTabBlock = that.parent().nextAll(".tab[data-group='"+dataGroup+"']");
    var sliderId = selectedTabBlock.find(".swiper-container").parent().attr("id");
    that.parent().nextAll(".tab").fadeOut(400);
    that.closest(".another.tabs").find("a").removeClass("active");
    setTimeout(function(){
      selectedTabBlock.fadeIn(400);
    }, 400);
    if(selectedTabBlock.find(".swiper-container").length) {
      setTimeout(function(){
        reIniterBonusSlides(sliderId);
      }, 400);
    }
    that.addClass("active");
  });

  function reIniterBonusSlides (idOfSlider) {
    switch (idOfSlider) {
      case "bonus-slides-1":
        if(bonusslides1_5or6){ bonusslides1_5or6.reInit(); bonusslides1_5or6.resizeFix(); }
        break;
      case "bonus-slides-2":
        if(bonusslides2_5or6) {bonusslides2_5or6.reInit(); bonusslides2_5or6.resizeFix();}
        break;
      case "bonus-slides-3":
        if(bonusslides3_5or6) {bonusslides3_5or6.reInit(); bonusslides3_5or6.resizeFix();}
        break;
      case "bonus-slides-4":
        if(bonusslides4_5or6) {bonusslides4_5or6.reInit(); bonusslides4_5or6.resizeFix();}
        break;
      default:
        if(bonusslides1_5or6) bonusslides1_5or6.reInit();
        if(bonusslides2_5or6) bonusslides2_5or6.reInit();
        if(bonusslides3_5or6) bonusslides3_5or6.reInit();
        if(bonusslides4_5or6) bonusslides4_5or6.reInit();
        break;
    }
  }

  var boolScroll = true;
  $(".cart-adder-input").on("input", function(){
      var thisCode = $(this).val();
      if(!Number(thisCode)) {
        return false;
      } else {
        $(this).nextAll("#add-popup").show();
          if(boolScroll) {
            $("#add-popup .items").mCustomScrollbar({
              theme : "tiande",
              scrollbarPosition: "inside",
              scrollButtons:{ 
                enable: true
              }
            });
            boolScroll = false;
          }
      }
  });

  $("#add-popup .content .items .item").on("click", function(){
    var codeProduct = $(this).find(".code").text();
    var count = codeProduct.length;
    var result = "";
    for(i=0; i<count; i++) {
      if(!isNaN(codeProduct[i]) && codeProduct[i] != " ") {
        result += codeProduct[i];      
      }
    } 
    $(this).closest("#add-popup").prevAll(".cart-adder-input").val(result);
    $(this).closest("#add-popup").hide();
  });

  $("body, .cart-adder-input").on("click",function(e){
      $("#add-popup").hide();
  });
  setTimeout(function(){
    $("a.modal-viewer.hide").click();
  }, 200)
  $(document).on("click", ".this-btn[data-key='#refer-change']", function(){
    var inputReferValue = $(this).prevAll("#refer").val();
    var needSubString = "ref=";
    var charLength = inputReferValue.length;
    var positionInString = inputReferValue.indexOf(needSubString)+needSubString.length;
    var resultString = "";
    for (i=positionInString;i<charLength;i++) {
        resultString += inputReferValue[i];
    }
    // alert(resultString)
    // document.getElementById("edit-refer").value = resultString;
    $("input#edit-refer").val(resultString);

  });



  $(document).on("click", ".this-btn.save", function(e){
    e.preventDefault();
    var linkTextPrefix = $(".refer-prefix").html();
    $("input#refer").val(linkTextPrefix + $(this).prevAll("#edit-refer").val());
    $(".fancybox-close").click();
  })

  $(".new-msg.down").hide().removeClass("down").addClass("up");
  $(".slide-msg").on("click", function(e){
    e.preventDefault();
    var msgSlided = $(".new-msg");
    if(msgSlided.hasClass("up")) {
      msgSlided.slideDown();
      msgSlided.removeClass("up").addClass("down");
    } else if (msgSlided.hasClass("down")) {
      msgSlided.slideUp();
      msgSlided.removeClass("down").addClass("up");
    }
  });


  function tableResizer(e){
    $("#mCSB_1_container").css("width", "auto");
  }


  // Свернуть/Развернуть дерево "Моей структуры"
  $(".tree-element.has-child").find(".toggle").removeClass("take-up").addClass("take-down");
  $(".tree-element.has-parent").closest("tr").hide();
  tableResizer();


  $(".expand-toggler .close-all").on("click", function(e){
    $(".tree-element.has-parent").closest("tr").hide();
    $(".tree-element.has-child").find(".toggle").removeClass("take-up").addClass("take-down");
    tableResizer();
  });

  $(".expand-toggler .open-all").on("click", function(e){
    $(".tree-element.has-parent").closest("tr").show();
    $(".tree-element.has-child").find(".toggle").removeClass("take-down").addClass("take-up");
    tableResizer();
  });

  $(".toggle").on("click", function(e){
    e.preventDefault();
    var that = $(this);
    
    if(that.hasClass("take-up")) {
      var thisTr = that.closest('tr');
      var thisTrLevel = that.closest('tr').data("level");
      var thisFuckingTBody = that.closest("tbody");


      thisTr.nextUntil("tr[data-level='"+thisTrLevel+"']").each(function(){             
        if(parseInt($(this).data('level')) > parseInt(thisTrLevel)){          
          $(this).hide();
          $(this).find(".toggle.take-up").removeClass("take-up").addClass("take-down");
        }
      });

      that.removeClass("take-up").addClass("take-down");

      thisTr.find(".tree-element").addClass("no-line-y");
      
    }else if(that.hasClass("take-down")) {
      var thisTr = that.closest('tr');
      var thisTrLevel = that.closest('tr').data("level");
      var thisFuckingTBody = that.closest("tbody");

      thisTr.find(".tree-element").removeClass("no-line-y");
			
		  thisTr.nextUntil("tr[data-level='"+thisTrLevel+"']").each(function(){							
  			if(parseInt($(this).data('level')) == parseInt(thisTrLevel)+1){					
  				$(this).show();				
  			}
		  });
		  that.removeClass("take-down").addClass("take-up");
      var allNextTr = thisTr.closest("tbody").find("tr").length;
      var counter = 0;
      var trArray = [];
      thisTr.nextAll().each(function(i){
        if($(this).css("display") == "table-row") {
          trArray = $(this);

        }        
      })
      var num = trArray.length - 1;
      thisTr.closest("tbody").find(trArray[num]).find(".tree-element").addClass("no-line-y");
    }else if(that.hasClass("none")) {
      return false;
    }
    tableResizer();
  })

  


  $(".check-the-loader").on("click", function (e) { // ПРостейший пример(!!!) использования лоадера к предыдущему элементу относительно ссылки. Но использовать надо к блоку, в который будет подгружаться информация
    e.preventDefault();
    var el = "#catalog-list";//$(this).prev();  // В переменную кладётся уже выбранный DOM-элемент (object), если надо положить селектор, то только в виде .any_element (если класс) или #any_element (если id)!!!!! 
    loaderAdder(el); // Собственно, вызов функции, определённой в начале файла.
  })


  $(".map-searcher .find").on("click", function (e){
    e.preventDefault();
  }) 

  $("inputFile").on("click", function(e){
    $("inputFileVal").focus().blur();
  })

  // 
  //Валидация форм RegExp
  $("#read_the_rules-styler").removeClass("importantField");
  var regExpName = /^[a-zA-Zа-яА-Я ]+$/;
  var regExpEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-zA-Z]{2,6})+$/;
  var regExpPhone = /^[0-9()+ -]+$/;
  var regExpNum = /^[\d.]+$/;
  var regExpPass = /^[a-zA-Z0-9]{8,}$/;

  $(".validator").find("input[type='submit']").addClass("no-active").removeClass("active"); // Кнопка неактивна
  $(".validator input[type='submit'].no-active").on("click", function (e){ //Снимаем с неактивной визуально кнопки действие по умолчанию
    e.preventDefault();
  })



  function isEmptyFields(classForValidateEmpty, thisValidator) { // Проверка всех обязательных полей на заполненность.
    var err_count = 0;

    $(thisValidator).find("." + classForValidateEmpty).each(function(e){
      if($(this).attr("id") == "read_the_rules"){
        if(!thisValidator.find("#read_the_rules-styler.checked").length) {
          err_count = err_count + 1; 
        } else {
        
        }
      } else {     
        if(jQuery.trim($(this).val()) == ""){      
          err_count = err_count + 1;
        }
      }   
    })

    if($("#rating-stars").length){
      if(!thisValidator.find("#rating-stars input[type='radio']:checked").length) {
        err_count = err_count + 1; 
      }
    }

    if(err_count == 0){     
      $(thisValidator).find("input[type='submit']").removeClass("no-active").addClass('active');  
      if(classForValidateEmpty == "adress-table .drop") $(thisValidator).find(".active.send-form").removeClass("no-slide-up");
    }else{      
      $(thisValidator).find("input[type='submit']").removeClass("active").addClass('no-active'); 
      if(classForValidateEmpty == "adress-table .drop") $(thisValidator).find(".no-active.send-form").addClass("no-slide-up");
      $("input[type='submit'].no-active").on("click",function(e){ 
        // e.preventDefault();
      });      
    } 
  }
  function chekAllTextAreasSimLength(classForValidate, thisValidator, numOfSim){    
    var tenSim;
    $(thisValidator).find("." + classForValidate).each(function(e){
      tenSim = $(this).val().length;
      if(tenSim >= numOfSim) {
        $(this).removeClass("wrong");
      } else {
        $(this).addClass("wrong");
      }
    })
  }


  function isEmptyFieldsWrong(classForValidateEmpty, thisValidator) { // Проверка всех обязательных полей на заполненность.
    var err_count = 0;

    $(thisValidator).find("." + classForValidateEmpty).each(function(e){
    
      // if(jQuery.trim($(this).val()) == ""){    
      //   $(this).addClass("wrong");   
      //   err_count = err_count + 1;
      // }  
      if($(this).attr("id") == "read_the_rules"){
        if(!thisValidator.find("#read_the_rules-styler.checked").length) {
          $(this).addClass("wrong");
          err_count = err_count + 1; 
        }
      } else {     
        if(jQuery.trim($(this).val()) == ""){      
          $(this).addClass("wrong");
          err_count = err_count + 1;
        }
      }    
    })

    if($("#rating-stars").length){
      if(!thisValidator.find("#rating-stars input[type='radio']:checked").length) {
        err_count = err_count + 1; 
        thisValidator.find("#rating-stars input[type='radio']").addClass("wrong");
      }
    }

    if(err_count == 0){     
      $(thisValidator).find("input[type='submit']").removeClass("no-active").addClass('active');  
      thisValidator.find("#rating-stars input[type='radio']").removeClass("wrong");
    }else{      
      $(thisValidator).find("input[type='submit']").removeClass("active").addClass('no-active'); 
      // $("input[type='submit'].no-active").on("click",function(e){ 
      //   e.preventDefault();
      // });
    } 
  }

  function passEquality(classOfPassField_1, classOfPassField_2, thisValidator){
    if(thisValidator.find("." + classOfPassField_1).length){
      var input1 = thisValidator.find("." + classOfPassField_1)
      var input2 = thisValidator.find("." + classOfPassField_2)
      var value1 = input1.val();
      var value2 = input2.val();

      if(value1 == "") value1 = "0";

      if(value2 != value1){
        // input1.addClass("wrong");
        input2.addClass("wrong");
        thisValidator.find(".continue").addClass("no-active").removeClass("active").addClass("no-slide-up");
      } else {
        // input1.removeClass("wrong");
        input2.removeClass("wrong");
        thisValidator.find(".continue").addClass("active").removeClass("no-active").removeClass("no-slide-up");
      }
    }
  }

  function validationFormForAll(regExp, elementVal) {

    return regExp.test(jQuery.trim(elementVal)); 

  }

  $(".adress-table input[type='text']").on("keyup change blur", function(e){
    var parentValidator = $(this).closest("form");
    var classEmpty = "adress-table .drop";
    isEmptyFields(classEmpty, parentValidator);
  })

  $("#rating-stars input[type='radio']").on("change", function(e){
    $("#rating-stars").closest(".validator").find("#rating-stars input[type='radio']").removeClass("wrong");


    isEmptyFields("importantField", $("#rating-stars").closest(".validator"));
  })


  $(".validator input[type='text'], .validator textarea, .validator input[type='password'], .validator input[type='file'], .validator #read_the_rules").on("input change blur", function(e){ // Проверка текущего обязательного поля на заполненность.
    
    if($("#rating-stars").length){
      if(!$("#rating-stars").closest(".validator").find("#rating-stars input[type='radio']:checked").length) {
        $("#rating-stars").closest(".validator").find("#rating-stars input[type='radio']").addClass("wrong");
      } else {
        $("#rating-stars").closest(".validator").find("#rating-stars input[type='radio']").removeClass("wrong");
      }
    }

    if($(this).hasClass("importantField")) {
      if($(this).attr("id") == "read_the_rules"){
        if(!$(this).closest(".validator").find("#read_the_rules-styler.checked").length) {
          $(this).addClass("wrong"); 
        } else {
          $(this).removeClass("wrong"); 
          $(this).parent().removeClass("wrong");
        }
      } else {     
        if(jQuery.trim($(this).val()) == ""){      
          $(this).addClass("wrong");
        } else {
          $(this).removeClass("wrong");
        }
      }    
    }
    if($(this).hasClass("tenSim")) {
      var tenSim = $(this).val().length;
      if(tenSim >= 10) {
        $(this).removeClass("wrong");
      } else {
        $(this).addClass("wrong");
      }
    }
    if($(this).hasClass("reg_password")) {
      var tenSim = $(this).val().length;
      if(tenSim >= 6) {
        $(this).removeClass("wrong");
      } else {
        $(this).addClass("wrong");
      }
    }

    if($(this).hasClass("itsNumber")) {
      if(!validationFormForAll(regExpNum, $(this).val())) {
        $(this).addClass("wrong");
        // $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
      } else { 
        $(this).removeClass("wrong");
        // $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active");  
      }
    }




    var parentValidator = $(this).closest(".validator");
    var classEmpty = "importantField";

    if($(this).attr("id") == "read_the_rules") {
      if(parentValidator.find("#read_the_rules-styler.checked").length) {
        $(this).removeClass("wrong");
        // $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active"); 
      } else {
        $(this).addClass("wrong");
        // $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active"); 
      }
    }

    if($(this).attr("id") == "transfer_summa") {
      var that = $(this);
      var inputValuta = $("#transfer_valuta");
      var parent = $(this).parent();
      var thisValue = $.trim(that.val());
      var yellowSpan = parent.find(".yellow_info");
      var yellowSpanDigit = yellowSpan.find(".digit");
      var yellowSpanValuta = yellowSpan.find(".valuta");

      yellowSpan.removeClass("hide");
      yellowSpanDigit.text(thisValue);
    }

    isEmptyFields(classEmpty, parentValidator); // Проверка всех обязательных полей на заполненность.

    // if($(this).hasClass("reg_password")) {
    //   passEquality("reg_password", "reg_password.repeater", parentValidator)
    // }

  })
  if($(".validator .itsPhone").length){
    $(".validator .itsPhone").mask("+7 (000) 000-00-00");    
  }

  if($(".nums_only").length){
    $(".nums_only").mask("0#");    
  }

  if($(".report-main-filter-stroke input[type='text']").length){
    $(".report-main-filter-stroke input[type='text']").mask("00.00.0000");
  }

  // if($(".report-main-filter-stroke input[type='text']").length){
  //   $(".report-main-filter-stroke input[type='text']").mask("00.00.0000");
  // }

  
  // $(".validator .itsPhone").on("keyup change input", function(e) {
  //   var thisVal = $(this).val();
  //   var resultVal = thisVal.replace(/[^\d]+/g,'').replace(/^(\d*)(\d{11})$/,'$2').replace(/^[7-8](\d{10})$/,'+7$1').replace(/^(\+?)(\d?)(\d{0,3})(\d{3})(\d{2})(\d{2})$/g,"$1$2 ($3) $4-$5-$6").replace( /^[0\u0020\-]+/,'').replace(/[(,),0]{2,5}/, "");
  //   $(this).val(resultVal);
  // })

  $(".validator input[type='submit']").on("click", function(e){
    var parentValidator = $(this).closest(".validator");
    var classEmpty = "importantField";
    var classTenSim = "tenSim";
    var passClass = "reg_password";
    isEmptyFieldsWrong(classEmpty, parentValidator);
    chekAllTextAreasSimLength(classTenSim, parentValidator, 10);
    chekAllTextAreasSimLength(passClass, parentValidator, 6); // Не менее 6 символов
    $(this).closest(".validator").find("input").each(function(){
      if($(this).hasClass("itsName")) {
        if(!validationFormForAll(regExpName, $(this).val())) {
          $(this).addClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
      if($(this).hasClass("itsEmail")) {
        if(!validationFormForAll(regExpEmail, $(this).val())) {
          $(this).addClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
      if($(this).hasClass("itsPhone")) {
        if(!validationFormForAll(regExpPhone, $(this).val())) {
          $(this).addClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
      if($(this).hasClass("itsNumber")) {
        if(!validationFormForAll(regExpNum, $(this).val())) {
          $(this).addClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
      if($(this).hasClass("itsPass")) {
        if(!validationFormForAll(regExpPass, $(this).val())) {
          $(this).addClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
    })


    passEquality("reg_password", "reg_password.repeater", $(this).closest(".validator"))

    var wrongChecker = false;
    var textareaChecker = false;
    if(!$(this).closest(".validator textarea").length) textareaChecker = true;
    $(this).closest(".validator").find("input").each(function(){
      if($(this).hasClass("wrong")){
        wrongChecker = false;
        $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
        return false;
      } else {
        wrongChecker = true;
        $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active"); 
      }
    })
    $(this).closest(".validator").find("textarea").each(function(){
      if($(this).hasClass("wrong")){
        textareaChecker = false;
        $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
        return false;
      } else {
        textareaChecker = true;
        $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active"); 
      }
    })

    // if(parentValidator.find("#read_the_rules-styler").length){
    //   var checkedCheckBox = parentValidator.find("#read_the_rules-styler.checked");
    //   var checkBox = parentValidator.find("#read_the_rules");
    //   if(!checkedCheckBox.length){
    //     checkBox.addClass("wrong");
    //     $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");
    //     // return false;
    //   } else {
    //     checkBox.removeClass("wrong");
    //     $(this).closest(".validator").find("input[type='submit']").removeClass("no-active").addClass("active"); 
    //   }
    // }




    console.log(wrongChecker + " " + textareaChecker);
    if(wrongChecker && textareaChecker) {
      console.log(wrongChecker + " " + textareaChecker);

      if($(this).attr("id") === "add_adress") {
        var arrValues = {
          country : parentValidator.find("#lk_country").val() + ", ",
          area : parentValidator.find("#lk_area").val() + ", ",
          city : parentValidator.find("#lk_city").val() + ", ",
          street : "ул. " + parentValidator.find("#lk_street").val() + ", ",
          house : "д. " + parentValidator.find("#lk_house").val() + ", ",
          korpus : "корп. " + parentValidator.find("#lk_korpus").val() + ", ",
          flat : "кв. " + parentValidator.find("#lk_flat").val() + ", ",
          _index : parentValidator.find("#lk_index").val()
        };

        if(parentValidator.find("#lk_korpus").val() == "") {
          arrValues.korpus = "";
        }

        addNewAdressLK(arrValues);

        parentValidator.find("input").not(".continue").each(function(){
          $(this).val("");
        })
      }

      if($(this).closest(".validator").hasClass("last-step")){
        $(this).closest("form").submit(); 
      }
    } else {
      $(this).closest(".validator").find("input[type='submit']").removeClass("active").addClass("no-active");

      return false;
    }

  });

  if($(".validator .itsDate").length > 0){
    $(".validator .itsDate").mask("00.00.0000");
  }

  $(".order-inner form input[type='submit']").removeClass("active").addClass("no-active").addClass("no-slide-up");


  $(".next_incorrect").on("click", function(e){
    $(".incorrect form input[type='submit']").removeClass("no-active").addClass("active").removeClass("no-slide-up");    
  })
  $(".order-inner form input[type='submit'].no-active").on("click", function(e){
    return false;
  });

  $(".var1.real-adress.active input[type='radio'], .oplata-radio-chk input[type='radio'], .self-show-up .city input[type='radio'], .sc_select input[type='radio'] ").on("change", function(e){
    $(this).closest(".order-inner").find("input[type='submit']").removeClass("no-active").addClass("active").removeClass("no-slide-up");
    $(this).closest(".sc_select").find("input[type='submit']").removeClass("no-active").addClass("active").removeClass("no-slide-up");

  })
  // /Валидация форм


  $(".form-content.sponsor input[type=text]").on("keyup", function(e){
    e = e || window.event;
    if(e.keyCode == 13) {
      $(this).closest(".dinamick_block").find(".check-sponsor").click();
    }
   })



  // Смена картинок товара в зависимости от тона

  $(".not-modal.product-text li").on("click", function(e){

    var input = $(this).find("input");
    var hrefPic = input.data("pic");
    $(this).closest(".product-left").find(".main-img").find("img").attr("src", hrefPic);
  })

   $("#fast-buy .product-text li").on("click", function(e){

    var input = $(this).find("input");
    var hrefPic = input.data("pic");
    $(this).closest(".product-left").find(".fast-img").find("img").attr("src", hrefPic);
  })

   $("#akciya .single-tovar .color li").on("click", function(e){

    var input = $(this).find("input");
    var hrefPic = input.data("pic");
    $(this).closest(".single-tovar").find(".img-wrapper").find("img").attr("src", hrefPic);
  })

  $(".swiper-slide .color li").on("click", function(e){
    var input = $(this).find("input");
    var hrefPic = input.data("pic");
    $(this).closest(".swiper-slide").find("a.detailed").find("img").attr("src", hrefPic);
  })

  $("#catalog-list .color li").on("click", function(e){
    var input = $(this).find("input");
    var hrefPic = input.data("pic");
    $(this).closest(".t-item").find("td.img").find("img").attr("src", hrefPic);
  })

  // /картинки-тон
  // Календари
  $("ul.month li").on("click", function(e){
    $(this).toggleClass("selected");
  })

  $(".actually-calendar a").on("click", function(e){
    e.preventDefault();
  })
  $(".actually-calendar td").on("click", function(e){
    $(".actually-calendar td").removeClass("active");
    $(this).addClass("active");
  })

  // /Календари
  // Печать
  // $(".printer").on("click", function(e) {
  //   e.preventDefault();
  //   window.print();
  // })

  // $('.printer').on('click', function(e){
  //   e.preventDefault();
  //   var printing_css='<link href="/css/style.css" rel="stylesheet" type="text/css">';
  //   var html_to_print=printing_css+$(this).closest('.report-content').find('.main-table').html();
  //   var iframe=$('<iframe id="print_frame"></iframe>');
  //   $('body').append(iframe);
  //   var doc = $('#print_frame')[0].contentDocument || $('#print_frame')[0].contentWindow.document;
  //   var win = $('#print_frame')[0].contentWindow || $('#print_frame')[0];
  //   doc.getElementsByTagName('body')[0].innerHTML=html_to_print;
  //   win.print();
  //   $('iframe').remove();
  // });
  // /Печать
  // Promo send
  $("#promo_send").on("click", function(e){
    e.preventDefault();
    var promoInput = $(this).closest(".promo").find(".cart-promo-input");
    var parent = $(this).closest(".promo");

    if($.trim(promoInput.val()) != "" ) {
      parent.find("span.bonus-orange").css('display', 'block');
    }
  })
  // /Promo

  // If RESET
  $("body").on("reset", "form",function(e) {
    $(this).find(".continue.active").removeClass("active").addClass("no-active");
    $(this).find(".checked").removeClass("checked");
  });
  // /Reset

  // Lefter slides function


  function lefterSlidesFunc(swiperObject, slidesLength) {
    var swiperSlideWidth = swiperObject.width() / slidesLength;

  }


  // /Lefter slides function

  // Hide reg anketa

  $(".this-btn.hide_anketa").on("click", function (e) {
    e.preventDefault()
    $(this).toggleClass("turn_up");
  });

  $(".choise .green-btn").on("click", function (e) {
    e.preventDefault();
    $(".choise").removeClass("selected");
    $(this).closest(".choise").toggleClass("selected");

    if($(".planet_choise").hasClass("selected")) {
      $(".service_and_buy_container").hide();
      $(".slider_choise .num-two").hide();
      $(".slider_choise").addClass("border");
    } else {
      $(".service_and_buy_container").show();
      $(".slider_choise .num-two").show();
      $(".slider_choise").removeClass("border");
    }
  });

  // /Hide reg anketa

  // Hide table col

  function hideElement(obj) {
    var that = obj;
    that.toggle();
  }

  function hideTableCol(obj) {
    var that = obj;
    var thisIndex = that.index();

    var tHead = that.closest("table").find("thead");
    var tBody = that.closest("table").find("tbody");
    var tFoot = that.closest("table").find("tfoot");


    if(that.hasClass("hidden")){
      tHead.find("tr").each(function(){
        $(this).find("th:eq(" + thisIndex + ")").show();
      });
      tBody.find("tr").each(function(){
        $(this).find("td:eq(" + thisIndex + ")").show();
      });
      tFoot.find("tr").each(function(){
        $(this).find("td:eq(" + thisIndex + ")").show();
      });
      that.removeClass("hidden");
    } else {
      tHead.find("tr").each(function(){
        $(this).find("th:eq(" + thisIndex + ")").hide();
      });
      tBody.find("tr").each(function(){
        $(this).find("td:eq(" + thisIndex + ")").hide();
      });
      tFoot.find("tr").each(function(){
        $(this).find("td:eq(" + thisIndex + ")").hide();
      });
      that.addClass("hidden");
    }


    // console.log("Индекс этого элемента: " + thisObj.index())
  }

  var hoverBasket = false;

  


  $(".btn-buy, .buy").on("click", function(){
    var basketParent = $("#basket").parent();
    $("#basket").fadeIn(400);
    basketParent.find("i").fadeIn(400);


    $("#basket").hover(function () {
      hoverBasket = true;
    }, function () {
      hoverBasket = false;
      setTimeout(function(){
        $("#basket").fadeOut(400);
        basketParent.find("i").fadeOut(400);
      }, 400);
      setTimeout(function(){ 
        $("#basket").css({"display":""}); 
        basketParent.find("i").css({"display":""});
      }, 800)
    })

    setTimeout(function(){ basketFaderOut()}, 5000);
    
  });


  function basketFaderOut() {
    var basketParent = $("#basket").parent();
    if(!hoverBasket) {
      $("#basket").fadeOut(400);
      basketParent.find("i").fadeOut(400);
      setTimeout(function(){ 
        $("#basket").css({"display":""}); 
        basketParent.find("i").css({"display":""});
      }, 400);
    }
  }




  // /Hide table col

  // Delete adress from LK

  // $(document).on("click", ".site-settings .cart-item-remove", function(e){
  //   e.preventDefault();
  //   $(this).closest("li").remove();
  // })

// deleteAdressSiteSettingsObject
// #delete_el
  $(document).on("click", "#delete_el", function(e){
    e.preventDefault();
    deleteAdressSiteSettingsObject.remove();
    $.fancybox.close();
  })

  $(document).on("click", "#close_fancy", function(e){
    e.preventDefault();
    $.fancybox.close();
  })

  // /Delete adress from LK

  // Add new adress LK

  function addNewAdressLK (arrValues) {
    var string = "";
    var string = arrValues.country +  arrValues.area +  arrValues.city + arrValues.street  + arrValues.house  + arrValues.korpus + arrValues.flat + arrValues._index;

    var htmlString = '<li><input type="radio" name="delivery_adress" id="">'+
                      '<label for="">'+ string +'</label>'+
                      '<a href="#" class="cart-item-remove modal-viewer" data-key="#adress_delete"><img src="/img/svg/remover.svg"></a></li>';
    $("#additional_adresses ul").append(htmlString);
    $("#additional_adresses input").styler();
  }



  // /Add new adress LK

  //Пара фиксов
  $(".equality").on("click", function(e) {
    e.preventDefault();
  })

  $(".slide-content-h .what").on("click", function(e){
    e.stopPropagation();
  })

  $(".under-btn").on("click", function(e) {
    e.preventDefault();
  })


  // /фиксы
  $(".this-btn.back").off();
  // $(".flag-thanks").click();
  // $("#msg-form .continue.send-form").off();
   $("input[name='next-step'].continue.active.send-form").off();

  $(".off .continue.active").off();
});



