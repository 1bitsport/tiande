<?
require_once('header.php');
?>

<div class="reports-page calculator site-settings">
	<div class="report-content">
		<div class="report-left-menu">
			<div class="report-left-content">
				<p><a href="#">НАШИ СЕРВИСЫ</a></p>
				<ul>
					<li class="selected"><a href="#">Доставка</a></li>
					<li><a href="#">Калькулятор доставки</a></li>
					<li><a href="#">Моя скидка</a></li>			
					<li><a href="#">Программа лояльности</a></li>			
					<li><a href="#">Мой профиль</a></li>			
					<li><a href="#">Бонусная программа</a></li>			
					<li><a href="#">Онлайн-оплата</a></li>			
					<li><a href="#">ТианДе бокс</a></li>			
					<li><a href="#">Подарочные сертификаты</a></li>			
					<li><a href="#">Обратная связь</a></li>			
				</ul>
			</div>
		</div>
		<div class="report-content-in">
			<h2>КАЛЬКУЛЯТОР ДОСТАВКИ</h2>
			<div class="righter validator last-step">
				<form action="">
					<p class="small">Калькулятор расчета стоимости предназначен для получения информации о стоимости доставки вашего заказа</p>
					<h3>ВВОД ИСХОДНЫХ ДАННЫХ ДЛЯ РАСЧЕТА</h3>
					<p>Для расчета стоимости доставки Вашего заказа заполните пожалуйста все пункты.</p>
					<div class="adress-block">
						<div class="input-parent">
							<label for="">Страна:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input long-adress importantField" id="">
							<span class="wrong">Пустое поле</span>
							<span class="wrong"></span>
							<ul class="dropdown-town">
							   <li>Россия</li>
							   <li>Белоруссия</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Область/Край:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input long-adress importantField" id="">
							<span class="wrong">Пустое поле</span>
							<ul class="dropdown-town">
							   <li>Московская область</li>
							   <li>Краснодарский край</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Город/Поселок:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input long-adress importantField" id="">
							<span class="wrong">Пустое поле</span>
							<ul class="dropdown-town">
							   <li>Москва</li>
							   <li>Ровеньки</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Улица:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input long-adress" id="">
							<span class="wrong">Пустое поле</span>
							<ul class="dropdown-town">
							   <li>Подзаболотная</li>
							   <li>Изподтишковая</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">№ Дома:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input short-adress" id="">
							<span class="wrong">Пустое поле</span>
							<ul class="dropdown-town">
							   <li>12</li>
							   <li>10</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Корпус:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input short-adress" id="">
							<span class="wrong">Пустое поле</span>
							<ul class="dropdown-town">
							   <li>2</li>
							   <li>3</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">№ Кв.:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input short-adress" id="">
							<span class="wrong">Пустое поле</span>
							<ul class="dropdown-town">
							   <li>15</li>
							   <li>33</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Индекс:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input short-adress" id="">
							<span class="wrong">Пустое поле</span>
							<ul class="dropdown-town">
							   <li>115422</li>
							   <li>566331</li>
							</ul>
						</div>
						<div class="cleaner"></div>
					</div>

					<p>Укажите вес и объем отправления</p>
					<div class="must-fill-fields">
						<div class="input-parent">
							<label for="">Вес отправки:</label>
							<input type="text" name="mass" id="" class="form-input importantField">
							<span class="wrong">Пустое поле</span>
							<span class="inf">кг</span>
						</div>
						<div class="input-parent">
							<label for="">Объем отправки:</label>
							<input type="text" name="obyom" id="" class="form-input importantField">
							<span class="wrong">Пустое поле</span>
							<span class="inf">м<sup>3</sup></span>
						</div>
						<div class="input-parent">
							<label for="">Оценочная стоимость:</label>
							<input type="text" name="ocen_stoimost" id="" class="form-input importantField">
							<span class="wrong">Поле пустое</span>
							<span class="inf">руб</span>
						</div>
					</div>
					<div class="cleaner"></div>
					<input type="submit" value="РАССЧИТАТЬ" class="continue active send-form">
				</form>
				<div class="cleaner"></div>
				<h3 class="m-top20">ВАРИАНТЫ ДОСТАВКИ</h3>
				<div>
	              <div class="variant-head">
	                <span class="type-of-delivery black"><span class="uppercase border-solid-black">Самовывоз: </span> 150-1020 руб. ~ 3-7 дней</span>
	                <div class="pics">
	                  <img src="/img/ems.jpg" alt="">
	                  <img src="/img/dpd.jpg" alt="">
	                </div>
	                <span class="hint">Самостоятельное получение посылки заказа в пункте выдачи</span>
	              </div>

	              <div class="variant-body">

	                <span class="d-block checker" style="padding: 0px;">Самовывоз EMS, ул. Баррикад, д. 51 (1 058 руб., ~ 3-5 рабочих дней)</span>
	                <span class="d-block checker" style="padding: 0px;">Самовывоз DPD, ул. Баррикад, д. 51 (149 руб., ~ 7-9 рабочих дней)</span>
	                <span class="d-block checker" style="padding: 0px;">Самовывоз DPD Consumer, ул. Розы Люксембург, д. 198в (1 058 руб., ~ 3-5 рабочих дней)</span>
	              </div>

	              <div class="variant-head">
	                <span class="type-of-delivery black"><span class="uppercase border-solid-black">Курьерская доставка: </span> 480-2250 руб. ~ 2-5 дней</span>
	                <div class="pics">
	                  <img src="/img/dhl.jpg" alt="">
	                  <img src="/img/ems.jpg" alt="">
	                  <img src="/img/dpd.jpg" alt="">
	                </div>
	                <span class="hint">Экспресс доставка "от двери до двери" Экспресс доставка "от двери до двери" Экспресс доставка "от двери до двери" Экспресс доставка "от двери до двери" Экспресс доставка "от двери до двери" Экспресс доставка "от двери до двери" Экспресс доставка "от двери до двери" Экспресс доставка "от двери до двери"</span>
	              </div>
	              <div class="variant-body">
	                <label class="d-block checker" for="type-of-d4" style="padding: 0px;">Наземная доставка DPD Consumer (2100 руб., ~ 3-5 рабочих дней)</label>
	                <label class="d-block checker" for="type-of-d5" style="padding: 0px;">Экспресс доставка DHL (300 руб., ~ 7-9 рабочих дней)</label>
	              </div>

	              <div class="variant-head">
	                <span class="type-of-delivery black"><span class="uppercase border-solid-black">Посылка: </span> 140-620 руб. ~ 15-20 дней</span>
	                <div class="pics">
	                  <img src="/img/rus-post.jpg" alt="">
	                </div>
	                <span class="hint">Стандартная почтовая посылка</span>
	              </div>
	              <div class="variant-body">
	                <label class="d-block checker" for="type-of-d6" style="padding: 0px;">Посылка Почта России 1 класс (250 руб., ~ 10-15 дней)</label>
	              </div>
            </div>

			</div>
		</div>
		<div class="report-clear"></div>
	</div>
</div>

<?
require_once('footer.php');
?>