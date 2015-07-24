<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <title>Главная страница</title>
  
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
 
 


  <noscript>
    <style>
    .has-popup:hover .popup,  .has-popup:hover > i { display: block }
    .swiper-container .swiper-slides[data-group='1'] { display: block; }
    .products .tabs a:first-child { color: #000; border-bottom: 1px solid #000; }
    #top-submenu { position: fixed !important; top: 0 !important;}
    </style>
  </noscript>

  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/jquery.textPlaceholder.js"></script>
    <script>
    $(document).ready(function()
    {
      $("input[placeholder]").textPlaceholder();
    })
    </script>
  <![endif]-->

  <!--[if IE]>
    <style>
    #copy-button { display: block !important }
    </style>
  <![endif]-->

</head>
<body>


  <!--(Верхнее подменю)-->
  <nav id="top-submenu">

    <div class="container">

    <div class="left">
      <a href="#1" class="border-solid">БИЗНЕС-ВОЗМОЖНОСТИ</a>
      <a href="#1" class="border-solid">КАТАЛОГ</a>

      <div class="has-popup">
        <a href="#1" class="border-dotted">Ваш консультант: Петр Петрович</a>
        <s></s><i></i>
        <div class="popup center" id="consultation">
          <div class="content">
            <h4>ПЕТР ПЕТРОВИЧ СЕРДЮКОВ <span>Консультант по красоте TianDe</span></h4>
            <span class="description">
            Хотите получать бесплатные личные советы по красоте и продукции TianDe?
            Консультант TianDe Петр Петрович поможет вам найти нужный продукт, расскажет
            о последних тенденциях в мире красоты и о выгодных предложениях компании.
            </span>
            <span class="contact">Связаться <br> с Петром Петровичем:</span>
            <span><i>e-mail:</i> <a href="#1">petrov_tiande@mail.ru</a></span>
            <span><i>скайп:</i> petov.tiande14</span>
            <span><i>телефон:</i> <a href="#1" class="phone">+7 956 661 75 28</a></span>
            <span><i>Мой промосайт:</i> <a href="#1">www.petrov.tiande.ru</a></span>
          </div>
        </div>
      </div>

    </div>

    <div class="right">

      <div class="has-popup has-icon ref">
        <a href="#1" class="border-dotted"><img src="img/ref.gif" />ПРОДВИЖЕНИЕ</a>
        <s></s><i></i>
        <div class="popup center" id="partnership">
          <div class="content">

            <h4>ПРОМО-ССЫЛКА</h4>
            <a href="#1" class="what-is-it">Что это?</a>
            <input type="text" id="copy-text" value="https://cloud.mail.ru/public/" onclick="this.select()" readonly />
            <a href="#1" id="copy-button">КОПИРОВАТЬ</a>
            <hr>
            <div class="social">
              <a href="#1" id="share" class="border-dotted">Поделиться</a>
              <a href="#1"><img src="img/social/vk.gif"/></a>
              <a href="#1"><img src="img/social/tweeter.gif"/></a>
              <a href="#1"><img src="img/social/youtube.gif"/></a>
              <a href="#1"><img src="img/social/ok.gif"/></a>
              <a href="#1"><img src="img/social/facebook.gif"/></a>
            </div>
            <div class="social" id="share-content">
              <a href="#1"><img src="img/social/1.gif"/></a>
              <a href="#1"><img src="img/social/12.gif"/></a>
              <a href="#1"><img src="img/social/13.gif"/></a>
              <a href="#1"><img src="img/social/11.gif"/></a>
              <a href="#1"><img src="img/social/5.gif"/></a>
              <a href="#1"><img src="img/social/6.gif"/></a>
              <a href="#1"><img src="img/social/7.gif"/></a>
              <a href="#1"><img src="img/social/8.gif"/></a>
              <a href="#1"><img src="img/social/9.gif"/></a>
              <a href="#1"><img src="img/social/10.gif"/></a>
              <a href="#1"><img src="img/social/2.gif"/></a>
              <a href="#1"><img src="img/social/3.gif"/></a>
              <a href="#1"><img src="img/social/4.gif"/></a>
              <a href="#1"><img src="img/social/5.gif"/></a>
              <a href="#1"><img src="img/social/6.gif"/></a>
              <a href="#1"><img src="img/social/13.gif"/></a>
              <a href="#1"><img src="img/social/11.gif"/></a>
              <a href="#1"><img src="img/social/5.gif"/></a>
              <a href="#1"><img src="img/social/6.gif"/></a>
              <a href="#1"><img src="img/social/7.gif"/></a>
              <a href="#1"><img src="img/social/8.gif"/></a>
              <a href="#1"><img src="img/social/9.gif"/></a>
              <a href="#1"><img src="img/social/10.gif"/></a>
            </div>
            <div style="clear:both"></div>
          </div>
        </div>
      </div>

      <a href="#1" class="border-solid">РЕГИСТРАЦИЯ</a>

      <div class="has-popup has-icon open-arrow" id="sign-in">
        <a href="login.php" class="border-dotted has-modal" data-id="sign-in"><img src="img/user.png"/>ВХОД</a>
        <s></s><i></i>
        <div class="popup center menu">
          <div class="content">
            <h3>Статус: Бизнес-партнер</h3>
            <span>ЛО OSC: <b>40Б</b></span>
            <span>Баллы лояльности: <b>100Б</b></span>
            <span>Персональный счет (руб): <b>35000000</b></span>
            <span>Бонусный счет  (руб): <b>100000000</b></span>
            <a href="#1" class="green"><span>ONLINE OFFICE</span></a>
            <a href="#1"><span>Мой профиль</span></a>
            <a href="#2"><span>Мои заказы (4)</span></a>
            <a href="#3"><span>Мои настройки</span></a>
            <a href="#4"><span>Мои счета</span></a>
            <a href="#4"><span>Мои отчеты</span></a>
            <a href="#4"><span>Мои инструменты</span></a>
            <a href="#4"><span>Выход</span></a>
          </div>
        </div>
      </div>

      <div class="has-popup has-icon open-hover">
        <a href="#1" class="border-dotted"><img src="img/basket.gif"/>КОРЗИНА (7)</a>
        <s></s><i></i>
        <div class="popup right" id="basket">
          <div class="content">

            <div class="items scrollbar-inner">

              <a href="#1" class="item has-bonus">
                <img src="temp/basket-item-1.png" class="image"/>
                <div class="description">
                  <span class="name">Гель для умывания «Естественная красота»</span>
                  <img src="img/basket-gift.png" class="bonus"/>
                  <table>
                    <tr>
                      <td class="col-1">код: 33508</td>
                      <td class="col-2">10Б</td>
                      <td class="col-3">скидка 400 руб.</td>
                    </tr>
                    <tr>
                      <td>350 руб.</td>
                      <td>5 шт</td>
                      <td>15 203 руб.</td>
                    </tr>
                  </table>
                </div>
              </a>

              <a href="#1" class="item">
                <img src="temp/basket-item-2.png" class="image"/>
                <div class="description">
                  <span class="name">Увлажняющий крем с питательной основой, цветущий вид и здоровье</span>
                  <table>
                    <tr>
                      <td class="col-1">код: 33508</td>
                      <td class="col-2">10Б</td>
                      <td class="col-3">скидка 400 руб.</td>
                    </tr>
                    <tr>
                      <td>350 руб.</td>
                      <td>5 шт</td>
                      <td>15 203 руб.</td>
                    </tr>
                  </table>
                </div>
              </a>

              <a href="#1" class="item has-bonus">
                <img src="temp/basket-item-3.png" class="image"/>
                <div class="description">
                  <span class="name">Гель для умывания «Естественная красота»</span>
                  <img src="img/basket-discount.png" class="bonus"/>
                  <table>
                    <tr>
                      <td class="col-1">код: 33508</td>
                      <td class="col-2">10Б</td>
                      <td class="col-3">скидка 400 руб.</td>
                    </tr>
                    <tr>
                      <td>350 руб.</td>
                      <td>5 шт</td>
                      <td>15 203 руб.</td>
                    </tr>
                  </table>
                </div>
              </a>

              <a href="#1" class="item has-bonus">
                <img src="temp/basket-item-1.png" class="image"/>
                <div class="description">
                  <span class="name">Гель для умывания «Естественная красота»</span>
                  <img src="img/basket-gift.png" class="bonus"/>
                  <table>
                    <tr>
                      <td class="col-1">код: 33508</td>
                      <td class="col-2">10Б</td>
                      <td class="col-3">скидка 400 руб.</td>
                    </tr>
                    <tr>
                      <td>350 руб.</td>
                      <td>5 шт</td>
                      <td>15 203 руб.</td>
                    </tr>
                  </table>
                </div>
              </a>

              <a href="#1" class="item">
                <img src="temp/basket-item-2.png" class="image"/>
                <div class="description">
                  <span class="name">Увлажняющий крем с питательной основой, цветущий вид и здоровье</span>
                  <table>
                    <tr>
                      <td class="col-1">код: 33508</td>
                      <td class="col-2">10Б</td>
                      <td class="col-3">скидка 400 руб.</td>
                    </tr>
                    <tr>
                      <td>350 руб.</td>
                      <td>5 шт</td>
                      <td>15 203 руб.</td>
                    </tr>
                  </table>
                </div>
              </a>

            </div>

            <div>

              <div>

              </div>
              <table class="total">
                <tr class="row-1">
                  <td><a href="#1" class="show">ПОКАЗАТЬ ВСЕ <br> товары в корзине</a></td>
                  <td colspan="2" class="col-2">
                    <p>Всего товаров: <b>25 шт</b></p>
                    <p>Сумма без скидки: <b>215 000 670 руб.</b></p>
                  </td>
                </tr>
                <tr class="row-2">
                  <td class="col-1">Скидка на заказ:</td>
                  <td colspan="2" class="col-2">670 руб. (10%)</td>
                </tr>
                <tr  class="row-3">
                  <td class="col-1">Итого сумма:</td>
                  <td class="col-2">баллы:</td>
                  <td class="col-3">подарки:</td>
                </tr>
                <tr  class="row-4">
                  <td class="col-1">215 000 670 руб.</td>
                  <td class="col-2">450Б</td>
                  <td class="col-3">150Б</td>
                </tr>
              </table>
            </div>

            <span>До бесплатной доставки не хватает 500 руб.</span>
            <span>До скидки «20%» не хватает 600 руб.</span>
            <span>Для входа в парнерскую программу «TianDe OSC» необходимо докупить на 5000 руб.</span>
            <span>Для получения статуса «Бизнес-Парнер» необходимо докупить на 250 баллов или купить набор 1ND</span>

            <div class="buy">
              <a href="#1">ОФОРМИТЬ ЗАКАЗ</a>
            </div>

          </div>
        </div>
      </div>

      <div class="has-popup" id="lang">
        <img src="img/flags/ru.gif"/>
        <i></i>
        <div class="popup center menu">
          <div class="content">
            <a href="#1"><img src="img/flags/ru.gif"/></a>
            <a href="#1"><img src="img/flags/hg.gif"/></a>
            <a href="#1"><img src="img/flags/it.gif"/></a>
            <a href="#1"><img src="img/flags/bl.gif"/></a>
            <a href="#1"><img src="img/flags/en.gif"/></a>
            <a href="#1"><img src="img/flags/cz.gif"/></a>
          </div>
        </div>
      </div>

    </div>

    </div>

  </nav>
  <!--(/Верхнее подменю)-->

  <div class="container">

    <!--(Шапка)-->
    <header>

      <a href="#1" class="logo"></a>

      <section class="col-1">

        <div class="has-icon has-popup" id="countries">
          <img src="img/place.gif"/>
          <a href="#1" class="border-dotted">РОССИЯ</a>
          <s></s><i></i>
          <div class="popup">
            <div class="content">
              <h3>выбор страны</h3>
              <table>
              <tr>
              <td>
                <a href="#1">Belarus</a>
                <a href="#1">Bulgaria</a>
                <a href="#1">Czech republic</a>
                <a href="#1">Denmark</a>
                <a href="#1">Estonia</a>
                <a href="#1">Finland</a>
                <a href="#1">Germany</a>
                <a href="#1">Grecee</a>
                <a href="#1">Чешская республика</a>
                <a href="#1">Ireland</a>
                <a href="#1">Latvia</a>
                <a href="#1">Lithuania</a>
                <a href="#1">Luxembourg</a>
                <a href="#1">Macedonia</a>
              </td>
              <td>
                <a href="#1">Moldova</a>
                <a href="#1">Montenegro</a>
                <a href="#1">Netherlands</a>
                <a href="#1">Ukraine</a>
                <a href="#1">Poland</a>
                <a href="#1" class="active">Россия</a>
                <a href="#1">Armenia</a>
                <a href="#1">Azerbaijan</a>
                <a href="#1">China</a>
                <a href="#1">Georgia</a>
                <a href="#1">India</a>
                <a href="#1">Indonesia</a>
                <a href="#1">Kazakhstan</a>
                <a href="#1">Чешская республика</a>
              </td>
              <td>
                <a href="#1">Moldova</a>
                <a href="#1">Montenegro</a>
                <a href="#1">Netherlands</a>
                <a href="#1">Ukraine</a>
                <a href="#1">Poland</a>
              </td>

            </tr>
            </table>
            </div>
          </div>
        </div>

        <br>
        <a class="has-icon" id="phone">
          <img src="img/phone.gif"/>
          8(495)372-50-93
        </a>

        <span class="small">с 9-00 до 18-00 /московское время/</span>

        <a href="#1" class="border-solid green">УЗНАВАЙТЕ ВСЕ ПЕРВЫМИ! ПОДРОБНЕЕ</a>

      </section>


      <section class="col-2">
        <a href="#1"><img src="img/notification.jpg"></a>
      </section>

      <section class="col-3">

        <div class="has-popup">
          <a href="#1" class="border-dotted">Помощь</a>
          <s></s><i></i>
          <div class="popup center menu">
            <div class="content">
              <a href="#1">Как заказать</a>
              <a href="#2">Как получить</a>
              <a href="#3">Как оплатить</a>
              <a href="#4">Как зарабатывать</a>
            </div>
          </div>
        </div>

        <div class="has-popup">
          <a href="#1" class="border-dotted">Наши сервисы</a>
          <s></s><i></i>
          <div class="popup right menu" id="services-menu">
            <div class="content">
              <a href="#1" class="service-1">Доставка</a>
              <a href="#1" class="service-2">Моя скидка</a>
              <a href="#1" class="service-3">Накопительная скидка</a>
              <a href="#1" class="service-4">Online оплата</a>
              <a href="#1" class="service-5">Личный кабинет</a>
              <a href="#1" class="service-6">TianDe Box</a>
              <a href="#1" class="service-7">Подарочные сертификаты</a>
              <a href="#1" class="service-8">Бонусы</a>
              <a href="#1" class="service-9">Бизнес-инструменты</a>
            </div>
          </div>
        </div>
        <br>

        <span class="small">Региональная доставка от 2500 р. БЕСПЛАТНО!</span>

        <form class="search">
          <input type="text" placeholder="Поиск" />
          <input type="submit" value="" />
        </form>
      </section>

    </header>
    <!--(/Шапка)-->


    <!--(Главное меню)-->
    <nav id="main-menu">
      <ul>
      <li>
        <a href="#1">ДЛЯ ЛИЦА</a>
        <i></i>
        <div class="popup">
          <div class="content">
            <table class="columns">
              <tr>
                <td>
                  <div>
                  <h4>Категории:</h4>
                  <a href="#1">Очищение и тонизирование</a>
                  <a href="#1">Увлажнение и питание</a>
                  <a href="#1">Антивозрастной уход</a>
                  <a href="#1">Проблемная кожа</a>
                  <a href="#1">Отшелушивание и маски</a>
                  <a href="#1">Специальные средства и массажеры</a>
                  <a href="#1">Уход за кожей губ, глаз</a>
                  </div>
                </td>
                <td>
                  <div>
                  <h4>Потребности:</h4>
                  <a href="#1">Коррекция морщин</a>
                  <a href="#1">Лифтинг</a>
                  <a href="#1">Молодая кожа</a>
                  <a href="#1">Обезвоженная кожа</a>
                  <a href="#1">Питание и восстановление</a>
                  <a href="#1">Антиакне</a>
                  <a href="#1">Свежесть и сияние</a>
                  <a href="#1">Упругость и эластичность</a>
                  <a href="#1">Уход за кожей вокруг глаз</a>
                  </div>
                </td>
                <td>
                  <div>
                  <h4>Серии:</h4>
                  <a href="#1">Pro Comfort</a>
                  <a href="#1">Pro Botanic</a>
                  <a href="#1">Pro Visage</a>
                  <a href="#1">Skin Triumph</a>
                  <a href="#1">Snail Secret</a>
                  <a href="#1">Solution</a>
                  <a href="#1">SPA technology</a>
                  <a href="#1">Talasso</a>
                  <a href="#1">Tibetan Herbs</a>
                  <a href="#1">Vitamin C</a>
                  </div>
                </td>
              </tr>
            </table>

            <table class="items">
              <tr>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-discount.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-gift.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              </tr>
            </table>

          </div>
        </div>
      </li>
      <li>
        <a href="#1">ДЛЯ ТЕЛА</a>
        <i></i>
        <div class="popup">
          <div class="content">
            <table class="columns">
              <tr>
                <td>
                  <div>
                  <h4>Категории:</h4>
                  <a href="#1">Очищение и тонизирование</a>
                  <a href="#1">Увлажнение и питание</a>
                  <a href="#1">Антивозрастной уход</a>
                  <a href="#1">Проблемная кожа</a>
                  <a href="#1">Отшелушивание и маски</a>
                  <a href="#1">Специальные средства и массажеры</a>
                  <a href="#1">Уход за кожей губ, глаз</a>
                  </div>
                </td>
                <td>
                  <div>
                  <h4>Потребности:</h4>
                  <a href="#1">Коррекция морщин</a>
                  <a href="#1">Лифтинг</a>
                  <a href="#1">Молодая кожа</a>
                  <a href="#1">Обезвоженная кожа</a>
                  <a href="#1">Питание и восстановление</a>
                  <a href="#1">Антиакне</a>
                  <a href="#1">Свежесть и сияние</a>
                  <a href="#1">Упругость и эластичность</a>
                  <a href="#1">Уход за кожей вокруг глаз</a>
                  </div>
                </td>
                <td class="with-icons">
                  <div>
                  <h4>Рекомендуем:</h4>
                  <a href="#1" class="hit">Хиты продаж</a>
                  <a href="#1" class="new">Новинки</a>
                  <a href="#1" class="company">Акции</a>
                  <a href="#1" class="package">Наборы</a>
                  <a href="#1" class="gift">Подарки</a>
                  <a href="#1" class="superprice">СуперЦена</a>
                  </div>
                </td>
              </tr>
            </table>

            <table class="items">
              <tr>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-discount.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-gift.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              </tr>
            </table>

          </div>
        </div>
      </li>

      <li><a href="#1">ДЛЯ ВОЛОС</a></li>
      <li>
        <a href="#1">МАКИЯЖ</a>
        <i></i>
        <div class="popup">
          <div class="content">
            <table class="columns">
              <tr>
                <td>
                  <div>
                  <h4>Категории:</h4>
                  <a href="#1">Очищение и тонизирование</a>
                  <a href="#1">Увлажнение и питание</a>
                  <a href="#1">Антивозрастной уход</a>
                  <a href="#1">Проблемная кожа</a>
                  <a href="#1">Отшелушивание и маски</a>
                  <a href="#1">Специальные средства и массажеры</a>
                  <a href="#1">Уход за кожей губ, глаз</a>
                  </div>
                </td>
                <td>
                  <div>
                  <h4>Потребности:</h4>
                  <a href="#1">Коррекция морщин</a>
                  <a href="#1">Лифтинг</a>
                  <a href="#1">Молодая кожа</a>
                  <a href="#1">Обезвоженная кожа</a>
                  <a href="#1">Питание и восстановление</a>
                  <a href="#1">Антиакне</a>
                  <a href="#1">Свежесть и сияние</a>
                  <a href="#1">Упругость и эластичность</a>
                  <a href="#1">Уход за кожей вокруг глаз</a>
                  </div>
                </td>
                <td>
                  <div>
                  <h4>Серии:</h4>
                  <a href="#1">Pro Comfort</a>
                  <a href="#1">Pro Botanic</a>
                  <a href="#1">Pro Visage</a>
                  <a href="#1">Skin Triumph</a>
                  <a href="#1">Snail Secret</a>
                  <a href="#1">Solution</a>
                  <a href="#1">SPA technology</a>
                  <a href="#1">Talasso</a>
                  <a href="#1">Tibetan Herbs</a>
                  <a href="#1">Vitamin C</a>
                  </div>
                </td>
                <td class="with-icons">
                  <div>
                  <h4>Рекомендуем:</h4>
                  <a href="#1" class="hit">Хиты продаж</a>
                  <a href="#1" class="new">Новинки</a>
                  <a href="#1" class="company">Акции</a>
                  <a href="#1" class="package">Наборы</a>
                  <a href="#1" class="gift">Подарки</a>
                  <a href="#1" class="superprice">СуперЦена</a>
                  </div>
                </td>
              </tr>
            </table>

            <table class="items">
              <tr>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-discount.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-gift.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              </tr>
            </table>

          </div>
        </div>
      </li>
      <li>
        <a href="#1">ПАРФЮМ</a>
        <i></i>
        <div class="popup">
          <div class="content">
            <table class="columns">
              <tr>
                <td>
                  <div>
                  <h4>Категории:</h4>
                  <a href="#1">Очищение и тонизирование</a>
                  <a href="#1">Увлажнение и питание</a>
                  <a href="#1">Антивозрастной уход</a>
                  <a href="#1">Проблемная кожа</a>
                  <a href="#1">Отшелушивание и маски</a>
                  <a href="#1">Специальные средства и массажеры</a>
                  <a href="#1">Уход за кожей губ, глаз</a>
                  </div>
                </td>
                <td class="with-icons">
                  <div>
                  <h4>Рекомендуем:</h4>
                  <a href="#1" class="hit">Хиты продаж</a>
                  <a href="#1" class="new">Новинки</a>
                  <a href="#1" class="company">Акции</a>
                  <a href="#1" class="package">Наборы</a>
                  <a href="#1" class="gift">Подарки</a>
                  <a href="#1" class="superprice">СуперЦена</a>
                  </div>
                </td>
                <td class="with-banner">
                  <a href="#1"><img src="temp/menu-banner.jpg"/></a>
                </td>
              </tr>
            </table>

            <table class="items">
              <tr>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-discount.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-gift.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              </tr>
            </table>

          </div>
        </div>
      </li>
      <li><a href="#1">АКСЕССУАРЫ</a></li>
      <li><a href="#1">ДЛЯ МУЖЧИН</a></li>
      <li>
        <a href="#1">ДЛЯ ДОМА</a>
        <i></i>
        <div class="popup">
          <div class="content">
            <table class="columns">
              <tr>
                <td>
                  <div>
                  <h4>Категории:</h4>
                  <a href="#1">Очищение и тонизирование</a>
                  <a href="#1">Увлажнение и питание</a>
                  <a href="#1">Антивозрастной уход</a>
                  <a href="#1">Проблемная кожа</a>
                  <a href="#1">Отшелушивание и маски</a>
                  <a href="#1">Специальные средства и массажеры</a>
                  <a href="#1">Уход за кожей губ, глаз</a>
                  </div>
                </td>
                <td class="with-icons">
                  <div>
                  <h4>Рекомендуем:</h4>
                  <a href="#1" class="hit">Хиты продаж</a>
                  <a href="#1" class="new">Новинки</a>
                  <a href="#1" class="company">Акции</a>
                  <a href="#1" class="package">Наборы</a>
                  <a href="#1" class="gift">Подарки</a>
                  <a href="#1" class="superprice">СуперЦена</a>
                  </div>
                </td>
              </tr>
            </table>

            <table class="items">
              <tr>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-3.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-discount.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
              </tr>
            </table>

          </div>
        </div>
      </li>
      <li>
        <a href="#1">СПЕЦПРЕДЛОЖЕНИЯ</a>
        <i></i>
        <div class="popup">
          <div class="content">
            <table class="columns">
              <tr>
                <td class="with-icons">
                  <div>
                  <h4>Рекомендуем:</h4>
                  <a href="#1" class="hit">Хиты продаж</a>
                  <a href="#1" class="new">Новинки</a>
                  <a href="#1" class="company">Акции</a>
                  <a href="#1" class="package">Наборы</a>
                  </div>
                </td>
                <td class="with-banner">
                  <a href="#1"><img src="temp/menu-banner-2.jpg"/></a>
                </td>
              </tr>
            </table>

            <table class="items">
              <tr>
              <td>
              <table>
                <tr>
                  <td class="image" rowspan="2"><a href="#1"><img src="temp/item-1.jpg"/></a></td>
                  <td class="bonus"><img src="img/bonus-discount.png"/></td>
                  <td class="description"><a href="#1">Гель для умывания «Естественная красота»</a> <span>код: 33508</span></td>
                </tr>
                <tr>
                  <td class="price"><s>350 руб.</s><b>270 руб.</b></td>
                  <td class="buy"><a href="#1">КУПИТЬ</a></td>
                </tr>
              </table>
              </td>
            </table>

          </div>
        </div>
      </li>
      <li><a href="#1">УЗНАТЬ БОЛЬШЕ</a></li>
      </ul>
    </nav>
    <!--(/Главное меню)-->
	<!--(Модальные окна)-->
<div id="overlay">


  <div class="modals">

    <!--(Форма входа)-->
    <div id="sign-in" class="modal" style="display: none">
      <a href="#1" class="close"></a>
      <h3>Вход</h3>

      <form>
      <div class="radio-group-lg">
        <div>
          <input type="radio" name="name" id="first" checked />
          <label for="first">Оnline Service Center</label>
        </div>
        <div>
          <input type="radio" name="name" id="second" />
          <label for="second">Оnline Office</label>
        </div>
        <div>
          <input type="radio" name="name" id="third" />
          <label for="third">Master De Mail</label>
        </div>
      </div>

      <hr>

      <div class="modal-container">

        <div class="inputs">
          <div class="input has-error">
            <input type="text" name="login" placeholder="Номер регистрационной анкеты" />
            <div class="error">
              <i></i>
              <span>Неправильный номер регистрационной анкеты. Попробуйте еще раз.</span>
            </div>
          </div>

          <div class="input">
            <input type="password" name="password" placeholder="Пароль" />
            <div class="error">
              <i></i>
              <span>Неправильный пароль.</span>
            </div>
          </div>

          <div class="checkbox">
            <input type="checkbox" name="remember" id="remember"/>
            <label for="remember">Запомнить</label>
          </div>

          <a href="#1" class="forget-password">Забыли пароль?</a>
        </div>

        <div class="buttons">
          <a href="#1" class="sign-up">Зарегистрировать личный кабинет</a>
          <input type="submit" value="ВОЙТИ" />
        </div>

        <div class="help">
          <img src="img/help.gif"/>
          <i></i>
          <div>
            <span>
            Вы зарегистрированы в корпорации
            с помощью бумажной регистрационной анкеты?
            Чтобы получать самую актуальную
            информацию корпорации, зарегистрируйте
            свой Online-office.
            </span>
          </div>
        </div>

        <span class="sign-up-details"><a href="#1">Регистрация</a>, если у вас еще нет учетной записи TianDe</span>

      </div>

      <hr>

      <div class="modal-container">
        <span class="info">Есть вопросы? Звони +7 965 137 0181</span>
      </div>

      </form>

    </div>
    <!--(/Форма входа)-->
    
    <!-- Быстрая покупка -->
    <div id="fast-buy" class="modal" style="display: none; position: relative;">
      <a href="#1" class="close"></a>
      <div class="general-modal">
        <div class="product-left"> 
          <div class="fast-img">
            <a  href=""><img src="temp/headWasher.jpg" alt="" class="product-face"><img class="over-ton" src="img/ton-on-img.png" alt=""></a><br>
            <span class="t-name">004 Шампунь "Шампунь"</span>
            <span class="code-p">Код 39922, </span><span class="obyom-p">Объем: 200 мл</span>
            <div class="info-icons">
          <ul>
            <li class="icon-1"><a href=""></a>
                <i></i>
                <div class="popup">
                  <div class="content">
                    <h4>СЕРВИС «МОЯ СКИДКА»</h4>
                    <p><span>10% (ваша скидка)</span> — скидка, при покупке суммарного количества балов от 20б и до 50Б (Не включая 50Б);</p>
                    <p><span>15%</span> — скидка, при покупке суммарного количества балов от 50б и до 100Б (Не включая 100б);</p>
                    <p><span>20%</span> — скидка, при покупке суммарного количества балов от 100 до 500 (не включая 500);</p>
                    <p><span>25%</span> — скидка, при покупке суммарного количества балов от 500б, а также для участника Партнерской программы</p>

                  </div>
                </div>
            </li>
            <li class="icon-2"><a href=""></a>
                  <i></i>
                <div class="popup">
                  <div class="content">
                    <h4>СЕРВИС «МОЯ СКИДКА»</h4>
                    <p><span>10% (ваша скидка)</span> — скидка, при покупке суммарного количества балов от 20б и до 50Б (Не включая 50Б);</p>
                    <p><span>15%</span> — скидка, при покупке суммарного количества балов от 50б и до 100Б (Не включая 100б);</p>
                    <p><span>20%</span> — скидка, при покупке суммарного количества балов от 100 до 500 (не включая 500);</p>
                    <p><span>25%</span> — скидка, при покупке суммарного количества балов от 500б, а также для участника Партнерской программы</p>

                  </div>
                </div>
            </li>
            <li class="icon-3"><a href=""></a>
                <i></i>
                <div class="popup">
                  <div class="content">
                    <h4>СЕРВИС «МОЯ СКИДКА»</h4>
                    <p><span>10% (ваша скидка)</span> — скидка, при покупке суммарного количества балов от 20б и до 50Б (Не включая 50Б);</p>
                    <p><span>15%</span> — скидка, при покупке суммарного количества балов от 50б и до 100Б (Не включая 100б);</p>
                    <p><span>20%</span> — скидка, при покупке суммарного количества балов от 100 до 500 (не включая 500);</p>
                    <p><span>25%</span> — скидка, при покупке суммарного количества балов от 500б, а также для участника Партнерской программы</p>

                  </div>
                </div>
            </li>
            <li class="icon-4"><a href=""></a>
              <i></i>
                <div class="popup">
                  <div class="content">
                    <h4>СЕРВИС «МОЯ СКИДКА»</h4>
                    <p><span>10% (ваша скидка)</span> — скидка, при покупке суммарного количества балов от 20б и до 50Б (Не включая 50Б);</p>
                    <p><span>15%</span> — скидка, при покупке суммарного количества балов от 50б и до 100Б (Не включая 100б);</p>
                    <p><span>20%</span> — скидка, при покупке суммарного количества балов от 100 до 500 (не включая 500);</p>
                    <p><span>25%</span> — скидка, при покупке суммарного количества балов от 500б, а также для участника Партнерской программы</p>

                  </div>
                </div>
            </li>
            <li class="icon-5"><a href=""></a>
              <i></i>
                <div class="popup">
                  <div class="content">
                    <h4>СЕРВИС «МОЯ СКИДКА»</h4>
                    <p><span>10% (ваша скидка)</span> — скидка, при покупке суммарного количества балов от 20б и до 50Б (Не включая 50Б);</p>
                    <p><span>15%</span> — скидка, при покупке суммарного количества балов от 50б и до 100Б (Не включая 100б);</p>
                    <p><span>20%</span> — скидка, при покупке суммарного количества балов от 100 до 500 (не включая 500);</p>
                    <p><span>25%</span> — скидка, при покупке суммарного количества балов от 500б, а также для участника Партнерской программы</p>

                  </div>
                </div>
            </li>
          </ul>
        </div>
          </div>
          <div class="product-text">
            <h1>Набор "Золотой имбирь"</h1>
            <h2>"Золотой имбирь" для золота волос!</h2>
            <div class="rating"><img src="img/big-stars.png"> <span class="count-rate">(5)</span> 
              <div class="price-block">
                <div><span class="bonus">20 Б</span><span class="i">3 007 руб.</span><span class="now-price">2 700 000 руб.</span>
                <span class="what" style="display:none">
                  <i></i>
                  <div class="popup">
                    <div class="content">
                      <h4>СЕРВИС «МОЯ СКИДКА»</h4>
                      <p><span>10% (ваша скидка)</span> — скидка, при покупке суммарного количества балов от 20б и до 50Б (Не включая 50Б);</p>
                      <p><span>15%</span> — скидка, при покупке суммарного количества балов от 50б и до 100Б (Не включая 100б);</p>
                      <p><span>20%</span> — скидка, при покупке суммарного количества балов от 100 до 500 (не включая 500);</p>
                      <p><span>25%</span> — скидка, при покупке суммарного количества балов от 500б, а также для участника Партнерской программы</p>

                    </div>
                  </div>
                </span></div>
              </div>
              <div class="buy-block">
                <span>Кол-во: </span><input type="button" value='-'>
                <input type="text" name="count" id="tov-count" value="1">
                <input type="button" value='+'>
                <a href="#1" class="buy">КУПИТЬ</a>
                <div class="other-info">
                    <b class="have">в наличии</b>
                </div>
              </div>
            <div class="ton">
              <span class="title">Тон:</span>
              <ul class="color">
                  <li>
                      <a href="#">
                          <img width="20" height="20" src="img/tons/white.jpg" alt=""/>
                      </a>
                      <span class="hint"> 003 </span>
                  </li>
                  <li>
                      <a href="#">
                          <img width="20" height="20" src="img/tons/violet-4.jpg" alt=""/>
                      </a>
                      <span class="hint"> 022 </span>
                  </li>
                  <li>
                      <a href="#">
                          <img width="20" height="20" src="img/tons/siren.jpg" alt=""/>
                      </a>
                      <span class="hint"> 007 </span>
                  </li>
                  <li>
                      <a href="#">
                          <img width="20" height="20" src="img/tons/violet-2.jpg" alt=""/>
                      </a>
                      <span class="hint"> 005 </span>
                  </li>
                  <li>
                      <a href="#">
                          <img width="20" height="20" src="img/tons/violet-3.jpg" alt=""/>
                      </a>
                      <span class="hint"> 005 </span>
                  </li>
              </ul>
              <div class="moreitems has-popup"> <span>&gt;&gt;</span>
                  <div class="popup">
                      <div class="content">
                          <ul class="color">
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-3.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 003 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-2.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 022 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/bezh.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 007 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-4.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 005 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-4.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 005 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-3.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 003 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-2.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 022 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/bezh.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 007 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-4.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 005 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-4.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 005 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-3.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 003 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-2.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 022 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/bezh.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 007 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-4.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 005 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-4.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 005 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-3.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 003 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-2.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 022 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/bezh.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 007 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-4.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 005 </span>
                              </li>
                              <li>
                                  <a href="#">
                                      <img width="20" height="20" src="img/tons/violet-4.jpg"
                                           alt=""/>
                                  </a>
                                  <span class="hint"> 005 </span>
                              </li>

                          </ul>
                      </div>
                  </div>
              </div>
              <div class="border-solid"></div>
              
            </div>
            <div class="description">
              <h2>ОПИСАНИЕ:</h2>
              <p>Молочко нежно очищает кожу, деликатно и эффективно удаляя загрязнения. Благодаря сбалансированному составу увлажняет и смягчает кожу, способствует нормализации ее физиологического баланса. Тонизирует и успокаивает кожу, повышает эластичность, замедляет ее старение. Стимулирует обновление клеток, устраняет шелушение, возвращает коже лица гладкость и шелковистость. 
                Кремовая текстура средства обеспечивает мягкое и комфортное воздействие. После применения не оставляет ощущения стянутости и сухости.</p>
                <span class="nextread"><a href="">Подробнее...</a></span>
            </div>

          </div>
      </div>
      </div>
    </div>
  </div>
      

    
    <!-- /Быстрая покупка -->
    <!-- Видео -->
    <div id="video-modal" style="display: none; position: relative;">
        <div class="general-modal">
          <div class="top-modal">
            <div class="dl-btn">
                      <a href="#123321"><span class="download-btn"></span><span class="d-link">Скачать</span></a>
            </div>
            <div class="social">
              <div class="href">
                <a href="#1" id="share" class="border-dotted">Поделиться</a>
                <i></i>
                <div class="social-b popup" id="share-content">
                  <div class="content">
                    <a href="#1"><img src="img/social/1.gif"/></a>
                    <a href="#1"><img src="img/social/12.gif"/></a>
                    <a href="#1"><img src="img/social/13.gif"/></a>
                    <a href="#1"><img src="img/social/11.gif"/></a>
                    <a href="#1"><img src="img/social/5.gif"/></a>
                    <a href="#1"><img src="img/social/6.gif"/></a>
                    <a href="#1"><img src="img/social/7.gif"/></a>
                    <a href="#1"><img src="img/social/8.gif"/></a>
                    <a href="#1"><img src="img/social/9.gif"/></a>
                    <a href="#1"><img src="img/social/10.gif"/></a>
                    <a href="#1"><img src="img/social/2.gif"/></a>
                    <a href="#1"><img src="img/social/3.gif"/></a>
                    <a href="#1"><img src="img/social/4.gif"/></a>
                    <a href="#1"><img src="img/social/5.gif"/></a>
                    <a href="#1"><img src="img/social/6.gif"/></a>
                    <a href="#1"><img src="img/social/13.gif"/></a>
                    <a href="#1"><img src="img/social/11.gif"/></a>
                    <a href="#1"><img src="img/social/5.gif"/></a>
                    <a href="#1"><img src="img/social/6.gif"/></a>
                    <a href="#1"><img src="img/social/7.gif"/></a>
                    <a href="#1"><img src="img/social/8.gif"/></a>
                    <a href="#1"><img src="img/social/9.gif"/></a>
                    <a href="#1"><img src="img/social/10.gif"/></a>
                  </div>
                </div>
              </div>
              

              <a href="#1"><img src="img/social/vk.gif"/></a>
              <a href="#1"><img src="img/social/tweeter.gif"/></a>
              <a href="#1"><img src="img/social/youtube.gif"/></a>
              <a href="#1"><img src="img/social/ok.gif"/></a>
              <a href="#1"><img src="img/social/facebook.gif"/></a>

            </div>
            <h3>МАСТЕР-КЛАСС ОТ TIANDE</h3><br>
            <h4>«Макияж с эффектом обнаженной кожи»</h4>

                  
              </div>
              <div class="cleaner"></div>
              <div class="player">
                <iframe width="600" height="350" src="//www.youtube.com/embed/qVyX26ynKAc" frameborder="0" allowfullscreen></iframe> <!-- Для примера поставил фрейм из ютуба! Также любой код сюда спокойно вставляется -->
              </div>
        </div>
  </div>
    <!-- /Видео -->
    <!-- Мастер классы -->
    <div id="master-modal" style="display: none; position: relative;">
      <div class="general-modal">
        <div class="top-modal">
          <div class="dl-btn">
              <a href="#123321"><span class="download-btn"></span><span class="d-link">Скачать</span></a>
          </div>
          <div class="social">
            <div class="href">
              <a href="#1" id="share" class="border-dotted">Поделиться</a>
              <i></i>
              <div class="social-b popup" id="share-content">
                <div class="content">
                  <a href="#1"><img src="img/social/1.gif"/></a>
                  <a href="#1"><img src="img/social/12.gif"/></a>
                  <a href="#1"><img src="img/social/13.gif"/></a>
                  <a href="#1"><img src="img/social/11.gif"/></a>
                  <a href="#1"><img src="img/social/5.gif"/></a>
                  <a href="#1"><img src="img/social/6.gif"/></a>
                  <a href="#1"><img src="img/social/7.gif"/></a>
                  <a href="#1"><img src="img/social/8.gif"/></a>
                  <a href="#1"><img src="img/social/9.gif"/></a>
                  <a href="#1"><img src="img/social/10.gif"/></a>
                  <a href="#1"><img src="img/social/2.gif"/></a>
                  <a href="#1"><img src="img/social/3.gif"/></a>
                  <a href="#1"><img src="img/social/4.gif"/></a>
                  <a href="#1"><img src="img/social/5.gif"/></a>
                  <a href="#1"><img src="img/social/6.gif"/></a>
                  <a href="#1"><img src="img/social/13.gif"/></a>
                  <a href="#1"><img src="img/social/11.gif"/></a>
                  <a href="#1"><img src="img/social/5.gif"/></a>
                  <a href="#1"><img src="img/social/6.gif"/></a>
                  <a href="#1"><img src="img/social/7.gif"/></a>
                  <a href="#1"><img src="img/social/8.gif"/></a>
                  <a href="#1"><img src="img/social/9.gif"/></a>
                  <a href="#1"><img src="img/social/10.gif"/></a>
                </div>
              </div>
            </div>
            

            <a href="#1"><img src="img/social/vk.gif"/></a>
            <a href="#1"><img src="img/social/tweeter.gif"/></a>
            <a href="#1"><img src="img/social/youtube.gif"/></a>
            <a href="#1"><img src="img/social/ok.gif"/></a>
            <a href="#1"><img src="img/social/facebook.gif"/></a>

          </div>
          <h3>ПРЕЗЕНТАЦИЯ</h3><br>
          <h4>«Макияж с эффектом обнаженной кожи»</h4>
          
                
            </div>
            <div class="cleaner"></div>
            <div class="player">
              <!-- <iframe width="600" height="350" src="//www.youtube.com/embed/2IIPwlhuVSE" frameborder="0" allowfullscreen></iframe> --> <!-- Здесь всё идентично видео-блоку. Просто воткнуть код, но уже презентации -->
            </div>
      </div>
  </div>
    <!-- /Мастер классы -->
    <!-- Сертификаты -->
    <div id="sertif-modal" style="display: none; position: relative;">
      <div class="general-modal">
        <div class="top-modal">
          <div id="one-sertif">
            <div class="swiper-container">
              <div class="arrow-wrapper left"><a href="#" class="arrow arrow-left"></a></div>
              <div class="arrow-wrapper right"><a href="#" class="arrow arrow-right"></a></div>
              <div class="swiper-wrapper">
                  
                <div class="swiper-slide"> 
                  <h2>ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ
                № ТО ОО-С.ФИ25.Б.АИ987</h2>
                <span>срок действия с 15 октября 2008 г по 12 ноября 2018 г</span>
                    <img src="temp/ser.jpg" alt="">
                  </div>

                <div class="swiper-slide"> 
                  <h2>ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ
                № ТО ОО-С.ФИ25.Б.АИ987</h2>
                <span>срок действия с 15 октября 2008 г по 12 ноября 2018 г</span>
                    <img src="temp/ser.jpg" alt="">
                  </div>

                <div class="swiper-slide"> 
                  <h2>ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ
                № ТО ОО-С.ФИ25.Б.АИ987</h2>
                <span>срок действия с 15 октября 2008 г по 12 ноября 2018 г</span>
                    <img src="temp/ser.jpg" alt="">
                </div> 

                <div class="swiper-slide"> 
                  <h2>ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ
                № ТО ОО-С.ФИ25.Б.АИ987</h2>
                <span>срок действия с 15 октября 2008 г по 12 ноября 2018 г</span>
                    <img src="temp/ser.jpg" alt="">
                </div> 

                <div class="swiper-slide"> 
                  <h2>ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ
                № ТО ОО-С.ФИ25.Б.АИ987</h2>
                <span>срок действия с 15 октября 2008 г по 12 ноября 2018 г</span>
                    <img src="temp/ser.jpg" alt="">
                </div> 

                <div class="swiper-slide"> 
                  <h2>ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ
                № ТО ОО-С.ФИ25.Б.АИ987</h2>
                <span>срок действия с 15 октября 2008 г по 12 ноября 2018 г</span>
                    <img src="temp/ser.jpg" alt="">
                </div> 
                <div class="swiper-slide"> 
                  <h2>ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ
                № ТО ОО-С.ФИ25.Б.АИ987</h2>
                <span>срок действия с 15 октября 2008 г по 12 ноября 2018 г</span>
                    <img src="temp/ser.jpg" alt="">
                </div> 
              </div>

            </div>  
          </div>
          <div class="swiper-container swiper-nav">
            <div class="arrow-wrapper left"><a href="#" class="arrow arrow-left"></a></div>
              <div class="arrow-wrapper right"><a href="#" class="arrow arrow-right"></a></div>
            <div class="swiper-wrapper">
              
                <div class="swiper-slide active-nav">
                  <img src="temp/serm.jpg" alt="">
                  <div class="title">ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ № ТО ОО-С.ФИ25.Б.АИ987</div>
                  
                </div>
                <div class="swiper-slide">
                  <img src="temp/serm.jpg" alt="">
                  <div class="title">ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ № ТО ОО-С.ФИ25.Б.АИ987</div>
                  
                </div>
                <div class="swiper-slide">
                  <img src="temp/serm.jpg" alt="">
                  <div class="title">ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ № ТО ОО-С.ФИ25.Б.АИ987</div>
                  
                </div>
                <div class="swiper-slide">
                  <img src="temp/serm.jpg" alt="">
                  <div class="title">ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ № ТО ОО-С.ФИ25.Б.АИ987</div>
                  
                </div>
                <div class="swiper-slide">
                  <img src="temp/serm.jpg" alt="">
                  <div class="title">ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ № ТО ОО-С.ФИ25.Б.АИ987</div>
                  
                </div>
                <div class="swiper-slide">
                  <img src="temp/serm.jpg" alt="">
                  <div class="title">ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ № ТО ОО-С.ФИ25.Б.АИ987</div>
                  
                </div>
                <div class="swiper-slide">
                  <img src="temp/serm.jpg" alt="">
                  <div class="title">ТАМОЖЕННЫЙ СОЮЗ. СЕРТИФИКАТ СООТВЕТСТВИЯ № ТО ОО-С.ФИ25.Б.АИ987</div>
                  
                </div>
              
            </div>
          </div>
          
        </div>
            <div class="dop-block">
              <div class="full-screen"><a href=""><img src="img/full-view.png" alt=""><span>Показать на весь экран</span></a></div>
              <div class="downl"><a href=""><img src="img/download.png" alt=""><span>Скачать сертификат</span></a></div>
            </div>

      </div>
    </div>
    <!-- /Сертификаты -->
     
      <!-- Активные компоненты -->
      <div id="active-components" style="display: none; position: relative;">
      <div class="general-modal">
        <div class="top-modal">
          <div class="social">
                  <div class="href">
                    <a href="#1" id="share" class="border-dotted">Поделиться</a>
                    <i></i>
                    <div class="social-b popup" id="share-content">
                      <div class="content">
                        <a href="#1"><img src="img/social/1.gif"/></a>
                        <a href="#1"><img src="img/social/12.gif"/></a>
                        <a href="#1"><img src="img/social/13.gif"/></a>
                        <a href="#1"><img src="img/social/11.gif"/></a>
                        <a href="#1"><img src="img/social/5.gif"/></a>
                        <a href="#1"><img src="img/social/6.gif"/></a>
                        <a href="#1"><img src="img/social/7.gif"/></a>
                        <a href="#1"><img src="img/social/8.gif"/></a>
                        <a href="#1"><img src="img/social/9.gif"/></a>
                        <a href="#1"><img src="img/social/10.gif"/></a>
                        <a href="#1"><img src="img/social/2.gif"/></a>
                        <a href="#1"><img src="img/social/3.gif"/></a>
                        <a href="#1"><img src="img/social/4.gif"/></a>
                        <a href="#1"><img src="img/social/5.gif"/></a>
                        <a href="#1"><img src="img/social/6.gif"/></a>
                        <a href="#1"><img src="img/social/13.gif"/></a>
                        <a href="#1"><img src="img/social/11.gif"/></a>
                        <a href="#1"><img src="img/social/5.gif"/></a>
                        <a href="#1"><img src="img/social/6.gif"/></a>
                        <a href="#1"><img src="img/social/7.gif"/></a>
                        <a href="#1"><img src="img/social/8.gif"/></a>
                        <a href="#1"><img src="img/social/9.gif"/></a>
                        <a href="#1"><img src="img/social/10.gif"/></a>
                      </div>
                    </div>
                  </div>
                  

                  <a href="#1"><img src="img/social/vk.gif"/></a>
                  <a href="#1"><img src="img/social/tweeter.gif"/></a>
                  <a href="#1"><img src="img/social/youtube.gif"/></a>
                  <a href="#1"><img src="img/social/ok.gif"/></a>
                  <a href="#1"><img src="img/social/facebook.gif"/></a>

          </div>
          <h3>АКТИВНЫЕ КОМПОНЕНТЫ</h3><br>
          <h4>Лимонник Китайский — «плод Пяти Вкусов»</h4>
          
                
            </div>
            <div class="cleaner"></div>
            <div class="comp-info">
              <p><img src="temp/active-comp.png" alt="">ЛИМОННИК КИТАЙСКИЙ — «ПЛОД ПЯТИ ВКУСОВ»
          Лимонник имеет репутацию придворного растения китайских императоров
          Как упоминают древнекитайские свидетельства,  лимонник  никогда не переводился в рационе императоров-долгожителей, поэтому, по преданиям,  китайские  императоры обладали чудесной выносливостью, могли обходиться без сна во время дальних походов и не теряли при этом бодрости и внутреннего равновесия. Жены  китайских  императоров исчислялись тысячами — правители сохраняли до глубокой старости невероятную потенцию. Императоры Древнего Китая продлевали свою молодость и жизнь благодаря великому лечебному потенциалу красно-оранжевой ягоды. Не зря  лимонник  издавна называют в Китае придворным растением  китайских  императоров. 
          ЛИМОННИК КИТАЙСКИЙ — это деревянистая лиана семейства лимонниковых. Ветвящиеся побеги лимонника обвивают стволы деревьев и кустарники, вращаясь по ходу часовой стрелки. Стебли нередко достигают 10-15 м в длину.
          Свое название лимонник получил, по всей видимости, благодаря характерному лимонному запаху, который издают практически все части растения при растирании. В переводе с китайского название лимонника «у-вей-цзы» означает — «плод пяти вкусов». Кому довелось попробовать плоды этого растения, согласятся с утверждениями древних китайских книг, что они действительно имеют именно пять вкусов: кислый, горький, солоноватый, едкий и сладкий. И число пять здесь не случайно. Дело в том, что  при   лечении  болезней и изготовлении лекарств  китайскими  целителями учитывалась система взаимодействия человека и Вселенной, а в этой системе важная роль принадлежала магическим числам, в том числе и числу пять: учение о пяти стихиях, о пяти категориях человеческого характера, о пяти темпераментах, о пяти главных растениях для правильного питания и гармонии организм. И все лекарственные препараты изготовлялись так, чтобы в них правильно сочетались пять вкусов.
          Лимонник – по своей мощной полезности — в восточной медицине находится на втором месте после женьшеня, в Китае в старину его даже включали в список податей, которые обязательно выплачивались императору. А охотники Дальнего Востока, где  лимонник  и по сей день, к счастью, растет в диком виде, отправляясь в тайгу, съедали горсть целебных ягод и могли идти по следу зверя целый день, не чувствуя изнурительной усталости. К тому же ночью они начинали лучше видеть. Это свойство  лимонника  использовалось во время Великой Отечественной войны советскими летчиками: они употребляли перед ночными вылетами препараты  лимонника  в качестве средства, которое отгоняло сон и обостряло зрение в темноте.
          Современные ученые установили, что в лимоннике содержатся лигнаны – вещества, которые возбуждающе действует на нервную систему, примерно так же, как бразильский орех «кола». Благодаря лигнанам  лимонник  усиливает физическую активность, стимулирует мужскую энергию и повышает сопротивляемость организма любым негативным факторам. 
          Один из  китайских  императоров Цао Пи, живший 18 веков назад и покровительствовавший литературе, образно воспел лимонник в строках: «С лимонником можно спускаться в преисподнюю, не испачкав при этом носков туфель».
        </p>
            </div>
        </div>
    </div>
    <!-- /Активыне компоненты -->
    <!-- Печатная -->
    <div id="polygraphy" style="display: none; position: relative;">
      <div class="general-modal">
        <div class="top-modal">
          <div id="poly">
            <div class="swiper-container">
              <div class="arrow-wrapper left"><a href="#" class="arrow arrow-left"></a></div>
              <div class="arrow-wrapper right"><a href="#" class="arrow arrow-right"></a></div>
              <div class="swiper-wrapper">
                  
                <div class="swiper-slide"> 
                    <img src="temp/poly-big.jpg" alt="Листовка Глинтвейн 23х23" data-link="#link-to-download">
                  </div>

                <div class="swiper-slide"> 
                    <img src="temp/poly-big.jpg" alt="Глинтовка Листвейн 32х32" data-link="#link-to-download">
                  </div>

                <div class="swiper-slide"> 
                    <img src="temp/poly-big.jpg" alt="А это что за покемон?" data-link="#link-to-download">
                </div> 

                <div class="swiper-slide"> 
                    <img src="temp/poly-big.jpg" alt="Ещё листовки! Ещёё111!" data-link="#link-to-download">
                </div> 

                <div class="swiper-slide"> 
                    <img src="temp/poly-big.jpg" alt="Печатная продукция рулит!" data-link="#link-to-download">
                </div> 

                <div class="swiper-slide"> 
                    <img src="temp/poly-big.jpg" alt="И ещё!" data-link="#link-to-download">
                </div> 
                <div class="swiper-slide"> 
                    <img src="temp/poly-big.jpg" alt="И напоследок" data-link="#link-to-download">
                </div> 
              </div>

            </div>  
          </div>
          <div class="swiper-container swiper-nav2">
            <div class="arrow-wrapper left"><a href="#" class="arrow arrow-left"></a></div>
              <div class="arrow-wrapper right"><a href="#" class="arrow arrow-right"></a></div>
            <div class="swiper-wrapper">
              
                <div class="swiper-slide active-nav">
                  <img src="temp/poly-smal-1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="temp/poly-smal-2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="temp/poly-smal-3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="temp/poly-smal-4.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="temp/poly-smal-3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="temp/poly-smal-2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="temp/poly-smal-1.jpg" alt="">
                </div>
              
            </div>
          </div>
          
        </div>
          <span class="will-added">Листовка Глинтвейн 23х23</span>
            <div class="dop-block">
              <div class="full-screen"><a href=""><img src="img/full-view.png" alt=""><span>Показать на весь экран</span></a></div>
              <div class="downl"><a href=""><img src="img/download.png" alt=""><span>Скачать сертификат</span></a></div>
            </div>

      </div>
    </div>
    <!-- /Печатная -->
</div>


</div>
<!--(/Модальные окна)-->

    <!--(Основное содержание страницы)-->
    <main>