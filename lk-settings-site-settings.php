<?
require_once('header.php');
?>

<div class="reports-page site-settings">
	<div class="report-menu">
		<div class="report-menu-container">
			<ul>
				<li class="">
					<div class="report-menu-icon report-menu-profile"></div>
					<a href="#"><span>М</span>ой профиль</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-orders"></div>
					<a href="#"><span>М</span>ои заказы</a>
				</li>
				<li class="">
					<div class="report-corner-container">
						<div class="report-corner">
							<div class="report-menu-up"></div>
						</div>	
					</div>
					<div class="report-menu-icon report-menu-settings active"></div>
					<a href="#"><span>М</span>ои настройки</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-score"></div>
					<a href="#"><span>М</span>ои счета</a>
				</li>
				<li class="">
					
					<div class="report-menu-icon report-menu-report"></div>
					<a href="#"><span>М</span>ои отчеты</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-tool"></div>
					<a href="#"><span>М</span>ои инструменты</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-feedback"></div>
					<a href="#"><span>О</span>братная связь</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-info"></div>
					<a href="#"><span>И</span>нформация</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-office"></div>
					<a href="#"><span>О</span>нлайн офис</a>
				</li>
			</ul>
		</div>	
	</div>
	<div class="report-content">
		<form action="">
			<div class="report-left-menu">
				<div class="report-left-content">
					<p><a href="#">МОИ НАСТРОЙКИ</a></p>
					<ul>
						<li><a href="#">ЛИЧНЫЕ ДАННЫЕ</a></li>
						<li><a href="#">СМЕНА ПАРОЛЯ</a></li>
						<li><a href="#">УВЕДОМЛЕНИЯ</a></li>
						<li><a href="#">НАСТРОЙКИ САЙТА</a></li>			
					</ul>
				</div>
			</div>
			<div class="report-content-in">
				<form action="">
					<h2>ЛИЧНЫЕ ДАННЫЕ</h2>
					
					<div class="settings-inner">

						<h3>ВИД КАТАЛОГА ПО УМОЛЧАНИЮ:</h3>
						<ul class="catalog-type">
							<li>
								<input type="radio" name="catalog_type" id="plitka">
								<label for="plitka">Плитка</label>
								<img src="/img/plitka.png" alt="">
							</li>
							<li>
								<input type="radio" name="catalog_type" id="image_list">
								<label for="image_list">Список с фото</label>
								<img src="/img/img_list.png" alt="">
							</li>
							<li>
								<input type="radio" name="catalog_type" id="list">
								<label for="list">Список без фото</label>
								<img src="/img/list.png" alt="">
							</li>
						</ul>

						<h3>СОРТИРОВКА КАТАЛОГА ПО УМОЛЧАНИЮ:</h3>
						<div class="default-sort">
							<div class="sorter">
			                    <input type="text" value="Рейтингу" class="input-sort drop" name="catalog_sort" id="catalog_sort">
			                    <div class="sort-arrow clickable"></div>
			                    <ul class="dropdown-sort">
			                       <li>Рейтингу</li>
			                       <li>Цены по убыванию</li>
			                       <li>Цены по возрастанию</li>
			                       <li>Названию</li>
			                       <li>Новизне</li>
			                    </ul>
			                </div>

			                <select name="ww" id="ww" class="styled nojs-sort">
			                    <option value="0">Рейтингу</option>
			                    <option value="1">Цены по убыванию</option>
			                    <option value="2">Цены по возрастанию</option>
			                    <option value="3">Названию</option>
			                    <option value="4">Новизне</option>
			                </select>
		           		</div>
						
						<h3>АДРЕС ПРИ ОФОРМЛЕНИИ ПО УМОЛЧАНИЮ:</h3>
						<div class="adresses-block">
							<div class="self-delivery">
								<span>Магазин для самовывоза</span>

								<div class="sorter">
				                    <input type="text" value="Москва, ДЦ Коломенское" class="input-sort drop" name="self_delivery" id="self_delivery">
				                    <div class="sort-arrow clickable"></div>
				                    <ul class="dropdown-sort">
				                       <li>Москва, ДЦ Коломенское</li>
				                       <li>Не Москва, Не ДЦ Не Коломенское</li>
				                       <li>Чёт там ещё</li>
				                       <li>Ещё какое то там место</li>
				                       <li>и ещё</li>
				                    </ul>
				                </div>

				                <select name="ww" id="ww" class="styled nojs-sort">
				                    <option value="0">Москва, ДЦ Коломенское</option>
				                    <option value="1">Не Москва, Не ДЦ Не Коломенское</option>
				                    <option value="2">Чёт там ещё</option>
				                    <option value="3">Ещё какое то там место</option>
				                    <option value="4">и ещё</option>
				                </select>
							</div>

							<div class="delivery">
								<span>Мои адреса доставки</span>
								<div id="additional_adresses" class="select-adress">
									<ul>
										<li>
											<input type="radio" name="delivery_adress" id="msk">
											<label for="msk">Москва, ул. Академика Королева, д. 81, кв. 82</label>
											<a href="#" class="cart-item-remove modal-viewer" data-key="#adress_delete"><img src="/img/svg/remover.svg"></a>
										</li>
										<li>
											<input type="radio" name="delivery_adress" id="spb">
											<label for="spb">Санкт-Петербург, ул. Московская, д. 12, кв. 102</label>
											<a href="#" class="cart-item-remove modal-viewer" data-key="#adress_delete"><img src="/img/svg/remover.svg"></a>
										</li>
									</ul>
								</div>
								
								<span class="slide-content-h slide-up"><span class="border-dot-black">Показать дополнительные фильтры</span>
									<span class="slider-arrow"></span>
								</span>
								<div class="add-new-adress">
									<div class="adress-block validator new-adress-adder-block">
										<div class="input-parent">
											<label for="">Страна:</label>
											<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
											<input type="text" name="" class="form-input long-adress importantField" id="lk_country">
											<span class="wrong">Пустое поле</span>
											<ul class="dropdown-town simple">
											   <li>Россия</li>
											   <li>Белоруссия</li>
											</ul>
										</div>

										<div class="input-parent">
											<label for="">Область/Край:</label>
											<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
											<input type="text" name="" class="form-input long-adress importantField" id="lk_area">
											<span class="wrong">Пустое поле</span>
											<ul class="dropdown-town simple">
											   <li>Московская область</li>
											   <li>Краснодарский край</li>
											</ul>
										</div>

										<div class="input-parent">
											<label for="">Город/Поселок:</label>
											<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
											<input type="text" name="" class="form-input long-adress importantField" id="lk_city">
											<span class="wrong">Пустое поле</span>
											<ul class="dropdown-town simple">
											   <li>Москва</li>
											   <li>Ровеньки</li>
											</ul>
										</div>

										<div class="input-parent">
											<label for="">Улица:</label>
											<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
											<input type="text" name="" class="form-input long-adress importantField" id="lk_street">
											<span class="wrong">Пустое поле</span>
											<ul class="dropdown-town simple">
											   <li>Подзаболотная</li>
											   <li>Изподтишковая</li>
											</ul>
										</div>

										<div class="input-parent">
											<label for="">№ Дома:</label>
											<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
											<input type="text" name="" class="form-input short-adress importantField" id="lk_house">
											<span class="wrong">Пустое поле</span>
											<ul class="dropdown-town simple">
											   <li>12</li>
											   <li>10</li>
											</ul>
										</div>

										<div class="input-parent">
											<label for="">Корпус:</label>
											<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
											<input type="text" name="" class="form-input short-adress" id="lk_korpus">
											<ul class="dropdown-town simple">
											   <li>2</li>
											   <li>3</li>
											</ul>
										</div>

										<div class="input-parent">
											<label for="">№ Кв.:</label>
											<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
											<input type="text" name="" class="form-input short-adress importantField" id="lk_flat">
											<span class="wrong">Пустое поле</span>
											<ul class="dropdown-town simple">
											   <li>15</li>
											   <li>33</li>
											</ul>
										</div>

										<div class="input-parent">
											<label for="">Индекс:</label>
											<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
											<input type="text" name="" class="form-input short-adress importantField" id="lk_index">
											<span class="wrong">Пустое поле</span>
											<ul class="dropdown-town simple">
											   <li>115422</li>
											   <li>566331</li>
											</ul>
										</div>
										<div class="cleaner"></div>
										<input type="submit" value="СОХРАНИТЬ" id="add_adress" class="continue active send-form">
									</div>
								</div>

							</div>
						</div>

						<h2>СПОСОБ ПОЛУЧЕНИЯ ЗАКАЗА ПО УМОЛЧАНИЮ: </h2>
						<div class="delivery-type">
				            <input type="radio" name="deliver" checked="" value="someone-else" id="radio-someone-else" class="radio">
				            <label class="radio-label overlay-text" for="radio-someone-else" onclick="">ДОСТАВКА</label>
				            <input type="radio" name="deliver" value="self" id="radio-self" class="radio">
				            <label class="radio-label overlay-text" for="radio-self" onclick="">САМОВЫВОЗ</label>
				        </div>
						
						<div class="cleaner"></div>

						<input type="submit" value="СОХРАНИТЬ НАСТРОЙКИ" class="continue green-btn send-form sbm" name="sbm_settings">
					</div>
				</form>
			</div>
			<div class="report-clear"></div>
		</form>
	</div>
</div>

<div id="adress_delete" class="modal hide posrelative not-wide">
	<form action="">
	<p>
		Вы уверены, что хотите удалить сохраненный адрес доставки?
	</p>

	<div>
		<input type="submit" value="ДА" class="green-btn" id="delete_el">
		<input type="button" value="НЕТ" class="green-btn orange" id="close_fancy">
	</div>
	

	</form>
</div>

<?
require_once('footer.php');		
?>