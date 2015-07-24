<?
require_once('header.php');
?>

<div class="reports-page personal-data">
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
				<h2>ЛИЧНЫЕ ДАННЫЕ</h2>
				<div class="personal-data-list">
					<div class="left photo">
						<div class="personal-photo">
							<img src="/img/pers-data.jpg" alt="">
						</div>
						<div class="cleaner"></div>
						<div class="input-parent">
							<input type="file" name="download_photo" id="download_photo" class="not-styler">
							<a href="#" class="overlay green-btn">ЗАГРУЗИТЬ ФОТО</a>
						</div>
					</div>
					<div class="right data-table">
						<table>
							<tr>
								<td>Фамилия:</td>
								<td>Иванов</td>
							</tr>
							<tr>
								<td>Имя:</td>
								<td>Иван</td>
							</tr>
							<tr>
								<td>Отчество:</td>
								<td>Иванович</td>
							</tr>
							<tr>
								<td>Дата рождения:</td>
								<td>01.02.1999</td>
							</tr>
							<tr>
								<td>Дата регистрации:</td>
								<td>01.02.1999</td>
							</tr>
							<tr>
								<td>Ваш спонсор:</td>
								<td>Иванов И.В. (рег. номер 000001)</td>
							</tr>
						</table>
						<div class="cleaner"></div>
						<div class="create-query">
							<span class="bonus-orange">Для смены личных данных создайте запрос с ЕИС</span>
							<a href="#" class="green-btn">СОЗДАТЬ ЗАПРОС</a>
							<div class="cleaner"></div>
						</div>
					</div>
				</div>
				<div class="cleaner"></div>
				<h2>ОБО МНЕ:</h2>

				<div class="personal-about-me">
					<p>Данное сообщение будет отображено в разделе регистрации &laquo;Выбор Спонсора&raquo;</p>
					<div class="input-parent">
						<textarea name="" id="" placeholder="Введите текст сообщения" class="form-input"></textarea>
						<span class="hint">*Максимальная длина сообщения 150 символов</span>
					</div>
				</div>
				<div class="cleaner"></div>

				<h2>КОНТАКТЫ:</h2>

				<div class="personal-contacts">
					<div class="main-contacts">
						<div class="input-parent">
							<label for="">E-mail</label>
							<input type="text" name="c_email" class="form-input" id="">
							<input type="checkbox" name="" id="show_all_1">
							<label for="show_all_1">Показать всем</label>
						</div>
						<div class="input-parent">
							<label for="">Телефон (мобильный)</label>
							<input type="text" name="c_mob_tel" class="form-input" id="">
							<input type="checkbox" name="" id="show_all_2">
							<label for="show_all_2">Показать всем</label>
						</div>
						<div class="input-parent no-margin-right">
							<label for="">Телефон (стационарный)</label>
							<input type="text" name="c_stac_tel" class="form-input" id="">
							<input type="checkbox" name="" id="show_all_3">
							<label for="show_all_3">Показать всем</label>
						</div>

						<div class="input-parent">
							<label for="">Skype:</label>
							<input type="text" name="c_skype" class="form-input" id="">
							<input type="checkbox" name="" id="show_all_4">
							<label for="show_all_3">Показать всем</label>
						</div>

						<div class="input-parent">
							<label for="">Мой сайт:</label>
							<input type="text" name="c_stac_tel" class="form-input" id="">
							<input type="checkbox" name="" id="show_all_5">
							<label for="show_all_3">Показать всем</label>
						</div>

					</div>
				</div>
				<div class="cleaner"></div>

				<h2>СОЦИАЛЬНЫЕ СЕТИ:</h2>

				<div class="personal-contacts">
					<div class="main-contacts">
						<div class="input-parent">
							<label for="">Вконтакте</label>
							<input type="text" name="c_vk" class="form-input" id="">
							<input type="checkbox" name="" id="show_all_6">
							<label for="show_all_1">Показать всем</label>
						</div>
						<div class="input-parent">
							<label for="">FaceBook</label>
							<input type="text" name="c_fb" class="form-input" id="">
							<input type="checkbox" name="" id="show_all_7">
							<label for="show_all_2">Показать всем</label>
						</div>
						<div class="input-parent no-margin-right">
							<label for="">Одноклассники</label>
							<input type="text" name="c_ok" class="form-input" id="">
							<input type="checkbox" name="" id="show_all_8">
							<label for="show_all_3">Показать всем</label>
						</div>
					</div>
				</div>
				<div class="cleaner"></div>

				<h2>АДРЕС ПРОЖИВАНИЯ:</h2>
				<div class="personal-adress">
					<div class="adress-block">
						<div class="input-parent">
							<label for="">Страна:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input long-adress" id="">
							<ul class="dropdown-town" style="display: none;">
							   <li>Россия</li>
							   <li>Белоруссия</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Область/Край:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input long-adress" id="">
							<ul class="dropdown-town" style="display: none;">
							   <li>Московская область</li>
							   <li>Краснодарский край</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Город/Поселок:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input long-adress" id="">
							<ul class="dropdown-town" style="display: none;">
							   <li>Москва</li>
							   <li>Ровеньки</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Улица:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input long-adress" id="">
							<ul class="dropdown-town" style="display: none;">
							   <li>Подзаболотная</li>
							   <li>Изподтишковая</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">№ Дома:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input short-adress" id="">
							<ul class="dropdown-town" style="display: none;">
							   <li>12</li>
							   <li>10</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Корпус:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input short-adress" id="">
							<ul class="dropdown-town" style="display: none;">
							   <li>2</li>
							   <li>3</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">№ Кв.:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input short-adress" id="">
							<ul class="dropdown-town" style="display: none;">
							   <li>15</li>
							   <li>33</li>
							</ul>
						</div>

						<div class="input-parent">
							<label for="">Индекс:</label>
							<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" name="" class="form-input short-adress" id="">
							<ul class="dropdown-town" style="display: none;">
							   <li>115422</li>
							   <li>566331</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="cleaner"></div>

				<input type="submit" value="СОХРАНИТЬ" class="green-btn sbm" name="sbm_pers_data">
			</div>
			<div class="report-clear"></div>
		</form>
	</div>
</div>

<?
require_once('footer.php');		
?>