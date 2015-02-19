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

  })

    // Слайдеры
    // var elSlidesCount = $('.swiper-container > .swiper-wrapper > .swiper-slide').length;

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
          //fancyModal();
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
          //fancyModal();
          swiper.reInit();
          swiper.resizeFix();
        }
      });

    $('#main-slider').swiper({
      pagination: '.pagination',
      paginationClickable: true,
      // autoplay: 5000,
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
        //fancyModal();
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
        //fancyModal();
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
        //fancyModal();
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
        //fancyModal();
      }
  });

  var master_c_3or4 = $('#master-c .swiper-container').swiper({
      createPagination: false,
      slidesPerView: threeOrFour,
      loopAdditionalSlides: 3,
      speed: 800, 
      // updateonInit: true,
      loop: true,
      slidesPerViewFit: false,
      resizeReInit: true,
      onInit : function() {
        //fancyModal();
      }
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
        //fancyModal();
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
        //fancyModal();
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
        //fancyModal();
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
        if(contentSwiper.activeIndex == 0) { 
          $("#one-sertif").find(".arrow-left").hide();  
        }
      },
      onSlideChangeEnd : function(){
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
      // resistance : false,
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
      // mode : 'horizontal',
      
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
      var linkForDownload = $("#polygraphy .swiper-slide-active > img").attr("data-link"); // Вляли линк из пользовательского атрибута
      $("#polygraphy .downl > a").replaceWith("<a href='" + linkForDownload + "'><img src='img/download.png' alt=''><span>Скачать " + altForTitle + "</span></a>"); // Воткнули линк из пользовательского атрибута + поменяли текст ссылки.
    }

    $(".up a.link").on("click", function(e){
      e.preventDefault();
    })

   $(".modal-viewer").on("click", function (e){
      // e.stopPropagation();
      e.preventDefault();
      
      $.fancybox( $(this).attr("data-key"), {
        onStart :  function(e) {
        $.fancybox.showActivity();
        $.fancybox.resize();
        },
      });
      if($(this).attr("data-key") == "#replacer-tovar") {
        slider1.reInit();
      } else if ($(this).attr("data-key") == "#replacer") {
        slider2.reInit();
      }
    });
    var hrefPicture = $("a#single_image").attr("href");
    $("#big-pic .big-pic").append("<img src='"+hrefPicture+"'>");
  

    // Стилизация кнопок переключателей (radio buttons)
    // if($(".not-styler").length){}else{
    //   $('input:not([type="file"])').styler();
    // }

    $('input:not(.not-styler)').styler();


    // Стилизация скролл-бара
    $('#basket .items, #add-popup .items').scrollbar();


    function hitTheTable(dataAttr) {
        if($(dataAttr + " .report-table").hasClass("need-scroll")){
        $(dataAttr + " .need-scroll").tableScroll(); //{height:100}
        $(dataAttr + " .need-scroll").removeClass("need-scroll");
      }
      var anyEl = $("*");

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
      var dataAttr = $(this).attr("data-key");
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

    $(document).scroll(function(event){
      $('#top-submenu').css('top', $(window).scrollTop() + 'px');
    });


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

    $('.has-modal').click(function(e){
      e.preventDefault();
      e.returnValue = false;
      $('body').addClass('modal-active');

      var id = $(this).attr('data-id');
      $('#overlay #' + id).show();
    });

    $('#overlay, #overlay .modal .close').click(function (e) {
      e.stopPropagation()
      $('body').removeClass('modal-active');
      $('#overlay .modal').hide();
    });

    $('#overlay .modal').click(function(e){
      e.stopPropagation()
    });



    // Всплывающие блоки

    function openPopup(e, obj)
    {
      e.stopPropagation();
      //$(this).removeClass('.hover-nojs');
      var wasActive = obj.hasClass('active');

      $('.has-popup.active').removeClass('active');

      if( ! wasActive)
        obj.addClass('active')
    }

    $('.has-popup').click(function(e){
      if( ! $(this).hasClass('open-arrow') && ! $(this).hasClass('open-hover'))
        openPopup(e, $(this))
    });

    $('.has-popup.open-arrow s').click(function(e){
      openPopup(e, $(this).parent('.has-popup'))
    });

    $('body').click(function(){
      $('.has-popup.active').removeClass('active')
    });

    $('.popup .content').click(function(e){
      e.stopPropagation();
    });


    // Блок продвижение (соц. кнопки)

    $('#share-content').hide();

    $('#share').click(function(e){
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

    $('.share').click(function(e){
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

    countries.find('a').click(function(e){
      countries.find('a.active').removeClass('active')
      $(this).addClass('active')
      var text = $(this).text()
      $('#countries > a').text(text)
      $('#countries').removeClass('active')
    });


    // Сортировка каталога (при js дизайнерский элемент, при отсутствии - стандартный select)

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
    $("body").click(function(e){
      // e.stopPropagation()
        $(".dropdown-sort").hide();
    });


    //Кол-во товара
    
    $("input[value='+'], input[value='-'] ").show();
    $("input[value='+']").click(function(){
      var thisTextInput = $(this).parent().find("input[type='text']");
      var tmp = thisTextInput.attr("value");
      tmp++;
      thisTextInput.attr("value", tmp);
    });

    $("input[value='-']").click(function(){
      var thisTextInput = $(this).parent().find("input[type='text']");
      var tmp = thisTextInput.attr("value");
      tmp--;
      if(tmp < 1) tmp = 1;
      thisTextInput.attr("value", tmp);
    });

    // SIDE Catalog MENU
    $("#menu_catalog ul li.has-child").removeClass("selected");
    $("#menu_catalog ul li.has-child a").on("click", function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).parent().toggleClass("selected");
    })

    // /SIDE Catalog MENU


    // Сворачивание слайдеров


   $(".slide-up").click(function(){
      var h3Active = $(this).next(); 
      $(this).toggleClass("active");
      h3Active.slideToggle();
   });


  //DOM element:
  
  
  $(".autoclicker").hide().click();

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
      var forUpdatingSpanRadio = liRestoreStep.find(".for-change.radio.checked input").attr("data-texttitle");      
      
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
      if(!Number(thisText)) {
        $(this).parent().find(".continue.active").removeClass("active").addClass("no-active");
      }
    });
  

  $(".for-change.radio").on('click', function(){
    thisRadioBtn = $(this);
    if(thisRadioBtn.hasClass("checked") || thisRadioBtn.checked) {
      $(this).closest(".form-content").find(".continue.no-active").removeClass("no-active").addClass("active");
    }
  });

	$(".restore-password .for-change").live("input", function(){
      $(this).parent().find(".continue.no-active").removeClass("no-active").addClass("send-form");
      $(".continue.send-form").off();
	  
	});
  
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
  
  
  $(".restore-password .for-change.email").live("input", function(){
    $(this).parent().find(".continue.no-active").removeClass("no-active").addClass("send-form");
    $(".continue.send-form").off();
    var thisText = $(this).val();
    if(thisText == '') {
      $(this).parent().find(".continue.send-form").removeClass("send-form").addClass("no-active");
    }
  });

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
  // $("div.order .continue").off();
  // CART QUANTITY

  $('.cart-quantity-action').on('click', function(){
      var quantity = parseInt($(this).parent().find('input').val());
      var action = $(this).attr('data-action');
      if(action == '-' && quantity > 1){
        $(this).parent().find('input').val(quantity - 1);
      }else if(action == '+'){
        $(this).parent().find('input').val(quantity + 1);
      }   
    });
    // $('.cart-arrow').on('click',function(){
    //   $(this).parent().next('.cart-li').toggle();
    //   $(this).find('span:last').toggleClass('up');
    //   $(this).find('span:last').toggleClass('down');
    //   if(!$('.cart-li').length){
    //     $('.dd').show();
    //   } 
    // });
    $('.cart-color-select img').hover(function(){
      $(this).next('.cart-color').toggle();   
    }, function(){
      $(this).next('.cart-color').toggle();
    });
    $('.cart-item-remove').on('click', function(){
      $(this).parent().parent().hide('slow');
    });

  // END CART QUANTITY

  $(".order .pay-element .continue").on("click", function(){
    var liElement = $(this).closest("li.pay-element");
    liElement.find(".order-inner").slideUp();
    liElement.removeClass("active").addClass("done");
    // liElement.find(".infoblock").addClass("d-inline-block");
    liElement.find(".infoblock, .change").show();
    liElement.next().removeClass("empty").addClass("active").find(".order-inner").slideDown();
    cartSpecials.reInit();
    cartSpecials.swipeNext();
  });

  $(".order .pay-element .change").on("click", function(){
    var liElement = $(this).closest("li.pay-element");
    liElement.find(".order-inner").slideDown();
    liElement.find(".infoblock, .change").hide();

  });

  $(".order .clickable").live("input", function(){
    
  });

  var forRadioPadding = $("label.checker div").hasClass("jq-radio");
  if(forRadioPadding) {
    $("label.checker").closest("label.checker").css({"padding" : 0});
  }

  $(".order ul.variants li a").on("click", function(e){
    e.preventDefault();
  });

  $(".order ul.variants li").on("click", function(e){
    var dataLink = $(this).attr("data-link");
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
    $(this).parent().hide();
  });
  $("body").click(function(e){
    // e.stopPropagation()
      $(".dropdown-select").hide();
  });



  $(".order-arrow").show();
  $(".order-arrow").click(function(e){
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
  
  // $(".order-arrow").toggle(function() {
  //     $(this).next().show();
  //   });
  $("body, .order, body").click(function(e){
    // e.stopPropagation()
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
    // setTimeout(function(){
    // $(".report-content-in").toggleClass('width-90');
    // }, 700)
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
    var liText = $(this).attr("data-value");
    var forBtn = $(this).attr("data-btn");
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
    var dataGroup = $(this).attr("data-group");
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
    // result = Number(result);  
    $(this).closest("#add-popup").prevAll(".cart-adder-input").val(result);
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
  var reg = /^[a-zA-Z1-9]{1,}$/;

  // $("#edit-refer").on("keyup", function(){
  //   var checkInput = $(this).val().search(reg);
  //   var value = $(this).val();
  //   if(reg.test(value)) {
  //     value = $(this).val().replace(reg, "");
  //     $(this).val(value);
  //   } 
    // else {
    //   var str = $(this).val();
    //   str.slice(0, -1);
    //   $(this).val(str);
    // }
  // });

  $(".this-btn.save").on("click", function(e){
    e.preventDefault();
    var linkTextPrefix = $(".refer-prefix").html();
    $("#refer").val(linkTextPrefix + $(this).prevAll("#edit-refer").val());
    $(".fancybox-close").click();
  })

  // onclick="getElementById('edit-refer').value=getElementById('refer').value;"
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
    // $(this).removeClass("take-down").addClass("take-up");
    var that = $(this);
    
    if(that.hasClass("take-up")) {
      var thisTr = that.closest('tr');
      var thisTrLevel = that.closest('tr').attr("data-level");
      var thisFuckingTBody = that.closest("tbody");
      // thisTr.nextUntil("tr[data-level='"+thisTrLevel+"']").find(".toggle.take-up").removeClass("take-up").addClass("take-down");
	    // thisTr.nextUntil("tr[data-level='"+thisTrLevel+"']").hide();

      thisTr.nextUntil("tr[data-level='"+thisTrLevel+"']").each(function(){             
        if(parseInt($(this).attr('data-level')) > parseInt(thisTrLevel)){          
          $(this).hide();
          $(this).find(".toggle.take-up").removeClass("take-up").addClass("take-down");
        }
      });

      that.removeClass("take-up").addClass("take-down");
      

    }else if(that.hasClass("take-down")) {
      var thisTr = that.closest('tr');
      var thisTrLevel = that.closest('tr').attr("data-level");
      var thisFuckingTBody = that.closest("tbody");
      //thisTrLevel++;
      // thisTrLevel++;
      //alert(thisTrLevel);			
		thisTr.nextUntil("tr[data-level='"+thisTrLevel+"']").each(function(){							
			if(parseInt($(this).attr('data-level')) == parseInt(thisTrLevel)+1){					
				$(this).show();				
			}
		});
		that.removeClass("take-down").addClass("take-up");
		//alert(nextItem);	
      
		  
	  		
      //that.removeClass("take-down").addClass("take-up");
    }else if(that.hasClass("none")) {
      return false;
    }
    tableResizer();
  })

  // 



  $(".this-btn.back").off();
  $("#msg-form .continue.send-form").off();


  $(".off .continue").off();
});



