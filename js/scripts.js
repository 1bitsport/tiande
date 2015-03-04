$(document).ready(function()
{

  $("html.no-js").removeClass("no-js");



  var sixOrSeven = 6;
  var fiveOrSix = 5;
  var fourOrFive = 4;
  var threeOrFour = 3;

  

  function resizeForSlider() {
    var winWidth = $(window).width();
    if(winWidth > 1155) {
        sixOrSeven = 7;
        fiveOrSix = 6;
        fourOrFive = 5;
        threeOrFour = 4;
    } else {
        sixOrSeven = 6;
        fiveOrSix = 5;
        fourOrFive = 4;
        threeOrFour = 3;
    }
  }
  resizeForSlider();

  $(window).on('resize', function(e){
    resizeForSlider();
    if(prod_3_5or6) prod_3_5or6.params.slidesPerView = fiveOrSix;
    if(prod_4_5or6) prod_4_5or6.params.slidesPerView = fiveOrSix;
    if(ourRecomends_5or6) ourRecomends_5or6.params.slidesPerView = fiveOrSix;
    if(bonusslides_5or6) bonusslides_5or6.params.slidesPerView = fiveOrSix;
    if(cartSpecials) cartSpecials.params.slidesPerView = fiveOrSix;
    if(videos_3or4) videos_3or4.params.slidesPerView = threeOrFour;
    if(master_c_3or4) master_c_3or4.params.slidesPerView = threeOrFour;
    if(print_p_5or6) print_p_5or6.params.slidesPerView = fiveOrSix;
    if(special_p_5or6) special_p_5or6.params.slidesPerView = fiveOrSix;
    if(recent_p_5or6) recent_p_5or6.params.slidesPerView = fiveOrSix;
    if(gooddeal) gooddeal.params.slidesPerView = sixOrSeven;

  })

    // Слайдеры

      var slider1 = $('.tovar-slides-modal .swiper-container').swiper({
        createPagination: false,
        tabs: false,
        slidesPerView: fourOrFive,
        loopAdditionalSlides: 12,
        slideWidth: 160,
        speed: 800, 
        updateonInit: true,
        updateOnImagesReady: true,
        resizeReInit: true,
        onImagesReady : function(swiper) {
          
          swiper.reInit();
          swiper.resizeFix();
        }
      });
      // slider1.reInit();


      var slider2 = $('.bonus-slides-modal .swiper-container').swiper({
        createPagination: false,
        tabs: true,
        slidesPerView: fourOrFive,
        slideWidth: 160,
        speed: 800, 
        updateonInit: true,
        updateOnImagesReady: true,
        resizeReInit: true,
        onImagesReady : function(swiper) {
          
          swiper.reInit();
          swiper.resizeFix();
        }
      });

    var gooddeal = $("#gooddeal .gooddeal.slider .swiper-container").swiper({
      createPagination: false,
      tabs: false,
      slidesPerView: sixOrSeven,
      slideWidth: 148,
      speed: 800, 
      updateonInit: true,
      resizeReInit: true,
      onImagesReady : function(swiper) {
          
          swiper.reInit();
          swiper.resizeFix();
        }
    });
    $('#main-slider').swiper({
      pagination: '.pagination',
      paginationClickable: true,
      autoplay: 5000,
      speed: 1000
    });

    $('#products-1 .swiper-container').swiper({
      createPagination: false,
      tabs: true,
      slidesPerView: 'auto',
      slideWidth: 148,
      speed: 800, 
      updateonInit: true,
      resizeReInit: true,
      onInit : function() {
        
      }
    });

    $('#products-2 .swiper-container').swiper({
      createPagination: false,
      tabs: true,
      slidesPerView: 'auto',
      slideWidth: 148,
      speed: 800, 
      updateonInit: true,
      resizeReInit: true,
      onInit : function() {
        
      }
    });

    var prod_3_5or6 = $('#products-3 .swiper-container').swiper({
      createPagination: false,
      tabs: false,
      slidesPerView: fiveOrSix,
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

      

    var bonusslides_5or6 = $('.bonus-slides .swiper-container').swiper({
      createPagination: false,
      tabs: true,
      slidesPerView: fiveOrSix,
      slideWidth: 148,
      resizeReInit: true,
      speed: 800, 
    });

    var cartSpecials = $('.cart-specials .swiper-container').swiper({
      createPagination: false,
      slidesPerView: fiveOrSix,
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

  var print_p_5or6 = $('#print-p .swiper-container').swiper({
      createPagination: false,
      slidesPerView: fiveOrSix,
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
    loopAdditionalSlides: fiveOrSix,
    slidesPerView: fiveOrSix,
    slidesPerViewFit: false,
    resizeReInit: true,
    onInit : function() {
        
      }
  });

  var recent_p_5or6 = $('#recent-p .swiper-container').swiper({
    loop:true,
    speed:800,
    loopAdditionalSlides: fiveOrSix,
    slidesPerView: fiveOrSix,
    slidesPerViewFit: false,
    resizeReInit: true,
    onInit : function() {
        
      }
  });

  //Swiper Content Sertificat
    var contentSwiper = $("#one-sertif .swiper-container").swiper({
      loop : false,
      speed: 400,
      initialSlide : -1,
      slidesPerView: 1,
      onSlideChangeStart: function(){
        updateNavPosition(contentSwiper, navSwiper)
      },
      onSlideNext : function(){
        navSwiper.swipeNext();
      },
      onInit : function(){
        sertificationFullScreenLink();
        if(contentSwiper.activeIndex == 0) { 
          $("#one-sertif").find(".arrow-left").hide();  
        }
      },
      onSlideChangeEnd : function(){
        sertificationFullScreenLink();
        if(contentSwiper.activeIndex == 0) { 
          $("#one-sertif").find(".arrow-left").hide();  
        }else if (contentSwiper.activeIndex == (contentSwiper.slides.length)-1) {
          $("#one-sertif").find(".arrow-right").hide();            
        } else {
          $("#one-sertif").find(".arrow-left").show();
          $("#one-sertif").find(".arrow-right").show();                        
        }
      },
      onSlidePrev : function(){
        navSwiper.swipePrev();
        
      }
      
    });

    

    var contentSwiper2 = $("#poly .swiper-container").swiper({
      loop : false,
      speed: 400,
      initialSlide : -1,
      slidesPerView: 1,
      onSlideChangeStart: function(){
        updateNavPosition(contentSwiper2, navSwiper2)
      },
      onSlideNext : function(){
        navSwiper2.swipeNext();
        
      },
      onSlidePrev : function(){
        navSwiper2.swipePrev();
        
      },
      onInit : function(){
        polygraphyTitlerAndLink();
        if(contentSwiper2.activeIndex == 0) { 
          $("#poly").find(".arrow-left").hide();  
        }
      },
      onSlideChangeEnd : function(){
        polygraphyTitlerAndLink();
        if(contentSwiper2.activeIndex == 0) { 
          $("#poly").find(".arrow-left").hide();  
        }else if (contentSwiper2.activeIndex == (contentSwiper2.slides.length)-1) {
          $("#poly").find(".arrow-right").hide();            
        } else {
          $("#poly").find(".arrow-left").show();
          $("#poly").find(".arrow-right").show();                        
        }
      }
      
    });

    //Nav
    var navSwiper = $('.swiper-nav').swiper({
      visibilityFullFit: true,
      slidesPerView: 5,
      loop: false,
      onInit : function(){
        if(navSwiper.activeIndex == 0) { 
          $(".swiper-nav").find(".arrow-left").hide();  
        }
      },
      
      //Thumbnails Clicks
      onSlideClick: function(){
        contentSwiper.swipeTo( navSwiper.clickedSlideIndex )
        updateNavPosition(contentSwiper, navSwiper)
      },
      onSlideChangeEnd : function(){
        if(navSwiper.activeIndex == 0) { 
          $(".swiper-nav").find(".arrow-left").hide();  
        }else if (navSwiper.activeIndex == (navSwiper.slides.length)-1) {
          $(".swiper-nav").find(".arrow-right").hide();            
        } else {
          $(".swiper-nav").find(".arrow-left").show();
          $(".swiper-nav").find(".arrow-right").show();                        
        }
      }
    });
    $('#polygraphy .arrow-wrapper.left,').on('click', function(e){
        e.preventDefault();
        navSwiper2.swipePrev();    
    })

    $('#polygraphy .arrow-wrapper.right').on('click', function(e){
        e.preventDefault();
        navSwiper2.swipeNext();  
    })

    var navSwiper2 = $('.swiper-nav2').swiper({
      visibilityFullFit: true,
      slidesPerView: 7,
      loop: false,
      mode : 'horizontal',
      onInit : function(){
        if(navSwiper2.activeIndex == 0) { 
          $(".swiper-nav2").find(".arrow-left").hide();  
        }
      },
      onSlideChangeEnd : function(){
        if(navSwiper2.activeIndex == 0) { 
          $(".swiper-nav2").find(".arrow-left").hide();  
        }else if (navSwiper2.activeIndex == (navSwiper2.slides.length)-1) {
          $(".swiper-nav2").find(".arrow-right").hide();            
        } else {
          $(".swiper-nav2").find(".arrow-left").show();
          $(".swiper-nav2").find(".arrow-right").show();                        
        }
      },
      //Thumbnails Clicks
      onSlideClick: function(){
        contentSwiper2.swipeTo( navSwiper2.clickedSlideIndex )
        updateNavPosition(contentSwiper2, navSwiper2)
      }
    });


    
    $('#sertif-modal .arrow-wrapper').on("click", function(e){
      e.preventDefault();
      if(contentSwiper.activeIndex == 0) {
            contentSwiper.swipePrev(false);
      }else if (contentSwiper.activeIndex >= (contentSwiper.slides.length)-1) {
            contentSwiper.swipeNext(false);
      }
        
    });

    $('#sertif-modal .arrow-wrapper.left,').on('click', function(e){
        e.preventDefault();
        navSwiper.swipePrev();    
    });

    $('#sertif-modal .arrow-wrapper.right').on('click', function(e){
        e.preventDefault();
        navSwiper.swipeNext();  
    });

    //Update Nav Position
    function updateNavPosition(contentSwiper11, navSwiper11){
      if(navSwiper == navSwiper11) {
        $('.swiper-nav .active-nav').removeClass('active-nav')
        var activeNav = $('.swiper-nav .swiper-slide').eq(contentSwiper11.activeIndex).addClass('active-nav')
      } else {
        $('.swiper-nav2 .active-nav').removeClass('active-nav')
        var activeNav = $('.swiper-nav2 .swiper-slide').eq(contentSwiper11.activeIndex).addClass('active-nav')
      }
      if (!activeNav.hasClass('swiper-slide-visible')) {
        if (activeNav.index()>navSwiper11.activeIndex) {
          var thumbsPerNav = Math.floor(navSwiper11.width/activeNav.width())-1
          navSwiper11.swipeTo(activeNav.index()-thumbsPerNav)
        }
        else {
          navSwiper11.swipeTo(activeNav11.index())
        } 
      }
    }

    function polygraphyTitlerAndLink() {
      var altForTitle = $("#polygraphy .swiper-slide-active > img").attr("alt"); // Забираем имя листовки из альта.
      $("#polygraphy .will-added").replaceWith("<span class='will-added'>" + altForTitle + "</span>"); // Заменяем предыдущий спан на новый.
      //Теперь ниже займёмся подстановкой ссылки на скаичвание
      var linkForDownload = $("#polygraphy .swiper-slide-active > img").data("link"); // Взяли линк из пользовательского атрибута
      $("#polygraphy .downl > a").replaceWith("<a href='" + linkForDownload + "'><img src='img/download.png' alt=''><span>Скачать " + altForTitle + "</span></a>"); // Воткнули линк из пользовательского атрибута + поменяли текст ссылки.
    }

    function sertificationFullScreenLink() {
      var hrefSert = $.trim($("#one-sertif .swiper-slide-active > img").attr("src"));
      $("#sertif-modal .dop-block .full-screen a").attr("href", hrefSert);
    }

    $(".up a.link").on("click", function(e){
      e.preventDefault();
    })

   $(".modal-viewer").on("click", function (e){
      e.preventDefault();
      
      $.fancybox( $(this).data("key"), {
        onStart :  function(e) {
        $.fancybox.showActivity();
        $.fancybox.resize();
        },
      });
      if($(this).data("key") == "#replacer-tovar") {
        slider1.reInit();
      } else if ($(this).data("key") == "#replacer") {
        slider2.reInit();
      } else if ($(this).data("key") == "#gooddeal") {
        gooddeal.reInit();
      } else if($(this).data("key") == "#big-pic") {
        verticalMiddlerPic();
      }
    });
    var hrefPicture = $("a#single_image").attr("href");
    $("#big-pic .big-pic").append("<img src='"+hrefPicture+"'>");

    function verticalMiddlerPic(){
        var block = $("#big-pic .big-pic");
        var blockHeight = block.height();
        block.css({"line-height":blockHeight + "px"});
    }
    $(window).on("resize", verticalMiddlerPic);

    // Стилизация кнопок переключателей (radio buttons, checkbox, etc)

    $('input:not(.not-styler)').styler();


    // Стилизация скролл-бара
    $('#basket .items, #add-popup .items').scrollbar();


    function hitTheTable(dataAttr) {
        if($(dataAttr + " .report-table").hasClass("need-scroll")){
        $(dataAttr + " .need-scroll").tableScroll(); //{height:100}
        $(dataAttr + " .need-scroll").removeClass("need-scroll");
      }
      var anyEl = $("*");
// Ещё одна стилизация скроллбара. Стилизация к блоку с таблицей
        $(".tablescroll_wrapper").mCustomScrollbar({
          theme : "tiande",
          setHeight : 150,
          scrollbarPosition: "outside",
          scrollButtons:{ 
            enable: true
          }
        });

    }

    $("a.table-hit").on("click", function(){
      var dataAttr = $(this).data("key");
      hitTheTable(dataAttr);
    });

    $(".main-table.tree").mCustomScrollbar({
      theme : "tiande-x",
      setWidth: "100%",
      axis: "x",
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
    });

    $('#overlay, #overlay .modal .close').on("click",function (e) {
      e.stopPropagation()
      $('body').removeClass('modal-active');
      $('#overlay .modal').hide();
    });

    $('#overlay .modal').on("click",function(e){
      e.stopPropagation()
    });



    // Всплывающие блоки

    function openPopup(e, obj)
    {
      e.stopPropagation();
      var wasActive = obj.hasClass('active');

      $('.has-popup.active').removeClass('active');

      if( ! wasActive)
        obj.addClass('active')
    }

    $('.has-popup').on("click",function(e){
      if( ! $(this).hasClass('open-arrow') && ! $(this).hasClass('open-hover'))
        openPopup(e, $(this))
    });

    $('.has-popup.open-arrow s').on("click",function(e){
      openPopup(e, $(this).parent('.has-popup'))
    });

    $('body').on("click",function(){
      $('.has-popup.active').removeClass('active')
    });

    $('.popup .content').on("click",function(e){
      e.stopPropagation();
    });
    $('.has-popup').hover(function (e){
      $('.has-popup.active').removeClass('active');
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


    $('.share-content').hide();

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
    $("*").removeClass("no-js");
    $(".nojs-sort").hide();
    $(".sorter").css({"display":"inline-block"});
    $(".sort-arrow").on("click",function(e){
      e.stopPropagation();
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
    $("ul li.has-child a").on("click", function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).parent().toggleClass("selected");
    })

    // /SIDE Catalog MENU


    // Сворачивание слайдеров


   $(".slide-up").on("click",function(){
      var h3Active = $(this).next(); 
      $(this).toggleClass("active");
      h3Active.slideToggle();
   });


  //DOM element:
  
  
  setTimeout(function(){$(".autoclicker").hide().click();}, 1);

  // Restore Pass
  // Change Field -> ActiveButtonContinue
  $(".continue, .this-btn").on("click", function (e){
    e.preventDefault();
  });

  $(".restore-password .continue.active").removeClass("active").addClass("no-active");

  $(".change").live("click", function(){
    var liRestoreStep = $(this).closest(".restore-step");
    if(liRestoreStep.hasClass("done")) {
      $(this).addClass("hide");
      liRestoreStep.find(".form-content").slideDown();
      liRestoreStep.find(".from-form").addClass("hide");
      liRestoreStep.parent().find(".restore-step.active").removeClass("active").find(".form-content").slideUp();
      liRestoreStep.removeClass("done").addClass("active");
    }
  })

  $(".continue.active").live("click", function (e){
    var liRestoreStep = $(this).closest(".restore-step");
    var whatSlide = "one";
    liRestoreStep.find(".form-content").slideUp();
    liRestoreStep.removeClass("active").addClass("done");
    liRestoreStep.next().addClass("active");
    if(!liRestoreStep.hasClass("third")){    
      var forUpdatingSpanNumber = liRestoreStep.find("input.number").val();
      var forUpdatingSpanRadio = liRestoreStep.find(".for-change.radio.checked input").data("texttitle");      
      
      liRestoreStep.find(".change").removeClass("hide");
      if(liRestoreStep.hasClass("first")) { 
        liRestoreStep.find(".updating").text(forUpdatingSpanNumber); 
      } else {
        liRestoreStep.find(".updating").text(forUpdatingSpanRadio); 
      }
      liRestoreStep.find(".from-form").removeClass("hide");
      if(liRestoreStep.hasClass("second")) {    
        whatSlide = (forUpdatingSpanRadio == "E-MAIL") ? "email" : "eiac";
        liRestoreStep.next().find(".form-content." + whatSlide).slideDown();
      } else {
        liRestoreStep.next().find(".form-content.one").slideDown();
      }
    } 
  });

    $(".restore-password .for-change.number").live('input', function(){
      $(this).parent().find(".continue.no-active").removeClass("no-active").addClass("active");
      var thisText = $(this).val();
      var regExp = /^\d+$/;
      if(!regExp.test($.trim(thisText))) {
        $(this).parent().find("a.continue.active").removeClass("active").addClass("no-active");
      }
    });
  

  $(".for-change.radio").on('click', function(){
    thisRadioBtn = $(this);
    if(thisRadioBtn.hasClass("checked") || thisRadioBtn.checked) {
      $(this).closest(".form-content").find(".continue.no-active").removeClass("no-active").addClass("active");
    }
  });

	// $(".restore-password .for-change").live("input", function(){
 //      $(this).parent().find(".continue.no-active").removeClass("no-active").addClass("send-form");
 //      $(".continue.send-form").off();
	  
	// });
  
	$('.kadum_vonap').on('keyup change', function(e){		
		var error = 0;
		var err_count = 0;
		
		$('.kadum_vonap').each(function(){			
			if(jQuery.trim($(this).val()) == ""){				
				err_count = err_count + 1;
			}	else {err_count = 0;}
		});		
		if(err_count == 0){			
			$('.kadum_vonap_button').removeClass("no-active").addClass('send-form');	
      $('.kadum_vonap_button').off();
		}else{			
			$('.kadum_vonap_button').removeClass("send-form").addClass('no-active');	
		}	
	});					
  
  
  // $(".restore-password .for-change.email").live("input", function(){
  //   $(this).parent().find(".continue.no-active").removeClass("no-active").addClass("send-form");
  //   $(".continue.send-form").off();
  //   var thisText = $(this).val();
  //   if(thisText == '') {
  //     $(this).parent().find(".continue.send-form").removeClass("send-form").addClass("no-active");
  //   }
  // });

  $(".restore-password input[name='repeat-pass']").live("input", function(){
    var justFirstTry = $(".restore-password input[name='pass']");
    if(justFirstTry.val() != "") {
      $("input.continue.no-active").removeClass("no-active").addClass("active");
      $(".continue").off();
    }
    
  });

  $(".pay-page .payer").css("visibility", "hidden");

  $(".pay-checkbox").on("click", function(){
    var isChecked = $(this).hasClass("checked");
    if(isChecked) {
      $(this).parent().find(".payer").css("visibility", "visible");
    } else {
      $(this).parent().find(".payer").css("visibility", "hidden");
    }
  });

   $(".payer input[type='submit'].continue").removeClass("active").addClass("no-active");
  
  $(".payer input[name='pay-pass']").live("input", function(){
    $("input[type='submit'].continue.no-active").removeClass("no-active").addClass("active");
    $("input.continue").off();  
  });

  $(".send-wrap .send-form, .order-link").off(); 
  // CART QUANTITY

  $('.cart-quantity-action').on('click', function(){
      var quantity = parseInt($(this).parent().find('input').val());
      var action = $(this).data('action');
      if(action == '-' && quantity > 1){
        $(this).parent().find('input').val(quantity - 1);
      }else if(action == '+'){
        $(this).parent().find('input').val(quantity + 1);
      }   
    });
  $(".cart-quantity-input input").on("keyup change input", function(e){
    var regExp = /^\d+$/;
    if(!regExp.test($(this).val())) {
      $(this).attr("value", 1);
    }
  })

    $('.cart-color-select img').hover(function(){
      $(this).next('.cart-color').toggle();   
    }, function(){
      $(this).next('.cart-color').toggle();
    });
    $('.cart-item-remove').on('click', function(){
      $(this).parent().parent().hide('slow');
    });

  // END CART QUANTITY

    $('.cart-arrow').on('click',function(){
      $(this).parent().next('.cart-li').toggle();
      $(this).find('span:last').toggleClass('up');
      $(this).find('span:last').toggleClass('down');
      if(!$('.cart-li').length){
        $('.dd').show();
      } 
    });

    $('.cart-item-remove').on('click', function(e){
      e.preventDefault();
      $(this).closest("tr").hide('slow');
      $.ajax({
       type: "GET",
       statusCode: {
          404: function() {
            alert( "С ajax'ом ошибочка вышла (404) :))" );
          }
        },
       url: "somewhere.php",
       data: "isDeleted=Y",
       success: function(msg){
         alert("Success!");
       }
     });
    });



  $(".order .pay-element .continue.active").on("click", function(e){
    e.stopPropagation();
    if(!$(this).hasClass("no-slide-up")) {
      var liElement = $(this).closest("li.pay-element");
      liElement.find(".order-inner").slideUp();
      liElement.removeClass("active").addClass("done");
      liElement.find(".infoblock, .change").show();
      liElement.next().removeClass("empty").addClass("active").find(".order-inner").slideDown();
      cartSpecials.reInit();
      cartSpecials.swipeNext();
    }
  });

  $(".order .pay-element .change").on("click", function(){
    var liElement = $(this).closest("li.pay-element");
    liElement.find(".order-inner").slideDown();
    liElement.find(".infoblock, .change").hide();

  });


  var forRadioPadding = $("label.checker div").hasClass("jq-radio");
  if(forRadioPadding) {
    $("label.checker").closest("label.checker").css({"padding" : 0});
  }

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
    } else if(dataLink == "var2") {
      $(this).closest(".delivery-show-up").find(".var2").show();
      $(this).closest(".delivery-show-up").find(".var1").hide();
      $(this).addClass("active");
      $(this).prev().removeClass("active");
    }
  });

  $(".nojs-select").hide();
  $(".js-select").css({"display":"inline-block"});
  $(".select-arrow").on("click",function(e){
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
    $(this).parent().hide();
  });
  

  $("body, .order, body").on("click",function(e){
      $(".dropdown-town").hide();
  });

  $("#radio-someone-else-styler").on("click", function(e){
    e.stopPropagation();
    $(".delivery-show-up").show();
    $(".self-show-up").hide();
  });

  $("#radio-self-styler").on("click", function(e){
    e.stopPropagation();
    $(".delivery-show-up").hide();
    $(".self-show-up").show();
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

  $('.report-left-menu-toggle').on('click', function(){
    $(this).toggleClass('report-left-menu-toggle-clicked');
    $('.report-left-content').toggle('slow');
    $('.report-left-menu').css({'width':'auto'}); 
    $('.report-left-menu').toggleClass('auto-width');
  });
  $('.report-left-menu-toggle').toggle(function(){
        $(".report-content-in").animate({'width':'90%'}, 600);
    },function(){
        $(".report-content-in").animate({'width':'74%'}, 600);
        setTimeout(function(){
          $('.report-left-menu').css({'width':'17%'});
        }, 700)
    });


  $(".little-arrow").on("click",function(e){
    e.stopPropagation();
    e.preventDefault();
    $(this).parent().nextAll(".dropdown-town").show();
  });

  $(".report-content .dropdown-town li").on("click", function(e){
    e.stopPropagation();
    var liText = $(this).data("value");
    var forBtn = $(this).data("btn");
    var ourInput = $(this).parent().prevAll("input");
    var ourBtn = $(this).parent().prevAll(".equality");
    ourBtn = ourBtn.find(".any-icon");
    ourInput.val(liText);
    ourBtn.text(forBtn);
    $(this).parent().hide();
  });

  $(".additional-filters .inputer input[type='text']").on("input",function(e){
    e.stopPropagation();
    $(this).parent().find(".reset").show();
  });


  setTimeout(function(){$(".additional-filters .inputer .reset").hide()},1); // for IE

  $(".additional-filters .inputer .reset").on("click", function(e){
    e.stopPropagation();
    e.preventDefault();
    $(this).parent().find("input[type='text']").val("");
    $(this).hide();
  });

  // Cart and Order  tabs at end of  page

  $(".another.tabs a").on("click", function(e){
    e.stopPropagation();
    e.preventDefault();
    var dataGroup = $(this).data("group");
    $(".tab").fadeOut();
    $(".another.tabs a").removeClass("active");
    $(this).parent().nextAll(".tab[data-group='"+dataGroup+"']").fadeIn();
    $(this).addClass("active");
  });

  $(".cart-adder-input").on("input", function(){
      var thisCode = $(this).val();
      if(!Number(thisCode)) {
        return false;
      } else {
        $(this).nextAll("#add-popup").show();
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
  $(".this-btn[data-key='#refer-change']").on("click", function(){
    var inputReferValue = $(this).prevAll("#refer").val();
    var needSubString = "ref=";
    var charLength = inputReferValue.length;
    var positionInString = inputReferValue.indexOf(needSubString)+needSubString.length;
    var resultString = "";
    for (i=positionInString;i<charLength;i++) {
        resultString += inputReferValue[i];
    }
    $("#edit-refer").val(resultString);

  });



  $(".this-btn.save").on("click", function(e){
    e.preventDefault();
    var linkTextPrefix = $(".refer-prefix").html();
    $("#refer").val(linkTextPrefix + $(this).prevAll("#edit-refer").val());
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
      

    }else if(that.hasClass("take-down")) {
      var thisTr = that.closest('tr');
      var thisTrLevel = that.closest('tr').data("level");
      var thisFuckingTBody = that.closest("tbody");
			
		thisTr.nextUntil("tr[data-level='"+thisTrLevel+"']").each(function(){							
			if(parseInt($(this).data('level')) == parseInt(thisTrLevel)+1){					
				$(this).show();				
			}
		});
		that.removeClass("take-down").addClass("take-up");
    }else if(that.hasClass("none")) {
      return false;
    }
    tableResizer();
  })

  
  function loaderAdder(theElement) {  // Аргумент принимается ввиде DOM-элемента. Просто селектор не прокатит))
    if (!theElement.hasClass("loader-overlay")){ // Проверка на наличие у элемента класса. Если нету, то присвается класс и в конец блока добавляется блок-overlay с гифкой.
      theElement.addClass("loader-overlay");
      theElement.append("<div class='loader-overlay-block'></div>");
    } else {
      theElement.removeClass("loader-overlay") // Иначе если класс есть, то убирается класс и удаляется оверлэй блок. 
      theElement.find(".loader-overlay-block").remove();
    }
  }

  $(".check-the-loader").on("click", function (e) { // ПРостейший пример(!!!) использования лоадера к предыдущему элементу относительно ссылки. Но использовать надо к блоку, в который будет подгружаться информация
    e.preventDefault();
    var el = $(this).prev();  // В переменную кладётся уже выбранный DOM-элемент, НЕ СЕЛЕКТОР!!!!! 
    loaderAdder(el); // Собственно, вызов функции, определённой выше.
  })


  $(".map-searcher .find").on("click", function (e){
    e.preventDefault();
  }) 

  // 
  //Валидация форм RegExp
  var regExpName = /^[a-zA-Zа-яА-Я ]+$/;
  var regExpEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-zA-Z]{2,6})+$/;
  var regExpPhone = /^[0-9()+ -]+$/;
  var regExpNum = /^\d+$/;

  $(".validator").find("input[type='submit']").addClass("no-active").removeClass("active"); // Кнопка неактивна
  $(".validator input[type='submit'].no-active").on("click", function (e){ //Снимаем с неактивной визуально кнопки действие по умолчанию
    e.preventDefault();
  })


  function isEmptyFields(classForValidateEmpty, thisValidator) { // Проверка всех обязательных полей на заполненность.
    var err_count = 0;

    $(thisValidator).find("." + classForValidateEmpty).each(function(e){
    
      if(jQuery.trim($(this).val()) == ""){      
        err_count = err_count + 1;
      }   
    })

    if(err_count == 0){     
      $(thisValidator).find("input[type='submit']").removeClass("no-active").addClass('active');  
    }else{      
      $(thisValidator).find(".active.send-form").removeClass("active").addClass('no-active'); 
      $("input[type='submit'].no-active").on("click",function(e){ 
        e.preventDefault();
      });
    } 
  }
  function chekAllTextAreas(classForValidate, thisValidator){    
    var tenSim;
    $(thisValidator).find("." + classForValidate).each(function(e){
      tenSim = $(this).val().length;
      if(tenSim >= 10) {
        $(this).removeClass("wrong");
      } else {
        $(this).addClass("wrong");
      }
    })
  }


  function isEmptyFieldsWrong(classForValidateEmpty, thisValidator) { // Проверка всех обязательных полей на заполненность.
    var err_count = 0;

    $(thisValidator).find("." + classForValidateEmpty).each(function(e){
    
      if(jQuery.trim($(this).val()) == ""){    
        $(this).addClass("wrong");   
        err_count = err_count + 1;
      }   
    })

    if(err_count == 0){     
      $(thisValidator).find("input[type='submit']").removeClass("no-active").addClass('active');  
    }else{      
      $(thisValidator).find(".active.send-form").removeClass("active").addClass('no-active'); 
      $("input[type='submit'].no-active").on("click",function(e){ 
        e.preventDefault();
      });
    } 
  }
  function validationFormForAll(regExp, elementVal) {

    return regExp.test(jQuery.trim(elementVal)); 

  }

  $(".validator input[type='text'], .validator textarea, .validator input[type='password']").on("keyup change blur", function(e){ // Проверка текущего обязательного поля на заполненность.
    if($(this).hasClass("importantField")) {
      if(jQuery.trim($(this).val()) == "") { $(this).addClass("wrong"); }
      else { $(this).removeClass("wrong"); }
    }
    if($(this).hasClass("tenSim")) {
      var tenSim = $(this).val().length;
      if(tenSim >= 10) {
        $(this).removeClass("wrong");
      } else {
        $(this).addClass("wrong");
      }
    }
    var parentValidator = $(this).closest(".validator");
    var classEmpty = "importantField";
    isEmptyFields(classEmpty, parentValidator); // Проверка всех обязательных полей на заполненность.

  })

  $(".validator input[type='submit']").on("click", function(e){
    var parentValidator = $(this).closest(".validator");
    var classEmpty = "importantField";
    var classTenSim = "tenSim";
    isEmptyFieldsWrong(classEmpty, parentValidator);
    chekAllTextAreas(classTenSim, parentValidator);
    $(this).closest(".validator").find("input").each(function(){
      if($(this).hasClass("itsName")) {
        if(!validationFormForAll(regExpName, $(this).val())) {
          $(this).addClass("wrong");
          $(".validator input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(".validator input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
      if($(this).hasClass("itsEmail")) {
        if(!validationFormForAll(regExpEmail, $(this).val())) {
          $(this).addClass("wrong");
          $(".validator input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(".validator input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
      if($(this).hasClass("itsPhone")) {
        if(!validationFormForAll(regExpPhone, $(this).val())) {
          $(this).addClass("wrong");
          $(".validator input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(".validator input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
      if($(this).hasClass("itsNumber")) {
        if(!validationFormForAll(regExpNum, $(this).val())) {
          $(this).addClass("wrong");
          $(".validator input[type='submit']").removeClass("active").addClass("no-active");
        } else { 
          $(this).removeClass("wrong");
          $(".validator input[type='submit']").removeClass("no-active").addClass("active");  
        }
      }
    })

    var wrongChecker = false;
    var textareaChecker = false;
    $(this).closest(".validator").find("input").each(function(){
      if($(this).hasClass("wrong")){
        wrongChecker = false;
        return false;
      } else {
        wrongChecker = true;
      }
    })
    $(this).closest(".validator").find("textarea").each(function(){
      if($(this).hasClass("wrong")){
        textareaChecker = false;
        return false;
      } else {
        textareaChecker = true;
      }
    })
    if(wrongChecker && textareaChecker) {
      $(this).closest("form").submit(); 
    }

  })
  // /Валидация форм
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
    $(this).closest(".swiper-slide").find("a.modal-viewer").find("img").attr("src", hrefPic);
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
  $(".printer").on("click", function(e) {
    e.preventDefault();
    window.print();
  })
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

  //Пара фиксов
  $(".equality").on("click", function(e) {
    e.preventDefault();
  })

  // /фиксы
  $(".this-btn.back").off();
  $("#msg-form .continue.send-form").off();


  $(".off .continue.active").off();
});



