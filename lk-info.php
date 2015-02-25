<?
require_once('header.php');
?>

<?
require_once('header.php');
?>
<div class="reports-page main-tools">
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
					<div class="report-menu-icon report-menu-settings"></div>
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
					<div class="report-menu-icon report-menu-tool active"></div>
					<a href="#"><span>М</span>ои инструменты</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-feedback"></div>
					<a href="#"><span>О</span>братная связь</a>
				</li>
				<li class="">
					<div class="report-corner-container">
						<div class="report-corner">
							<div class="report-menu-up"></div>
						</div>	
					</div>
					<div class="report-menu-icon report-menu-info active"></div>
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
		<div class="report-left-menu">
			<div class="report-left-content">
				<p><a href="#">ИНФОРМАЦИЯ</a></p>
				<ul>
					<li><a href="#">О КОМПАНИИ</a></li>
					<li><a href="#">ГЕОГРАФИЯ</a></li>
					<li class="has-child"><a href="#">ПРАВОВАЯ ИНФОРМАЦИЯ</a>
						<ul>
							<li><a href="#">КОНТАКТЫ</a></li>
						</ul>
					</li>
					<li><a href="#">КОНТАКТЫ</a></li>			
				</ul>
			</div>
		</div>
		<div class="report-content-in">
			<h2>ГЕОГРАФИЯ СЕРВИСНЫХ ЦЕНТРОВ</h2>
			<div class="the-map" id="ya-map" style="width: 100%;">
				<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=1MmmrzoFF2cPjcZLCTQ5vEAsDBv9VUBA&height=450"></script>
			</div>
			<div class="additional-filters map-searcher">
				<div class="inputer">
					<label class="font14 dark-grey">Страна:</label>
					<a href="#" class="equality list"><span class="little-arrow"><i></i></span>					
					</a>
					<input type="text" placeholder="Введите страну" class="inputs-focus" name="country">

					<ul class="dropdown-town">
					   <li data-value="Россия">Россия</li>
					   <li data-value="Украина">Украина</li>
					   <li data-value="Белоруссия">Белоруссия</li>
					</ul>
				</div>

				<div class="inputer">
					<label class="font14 dark-grey">Область/Край:</label>
					<a href="#" class="equality list"><span class="little-arrow"><i></i></span>					
					</a>
					<input type="text" placeholder="Введите область" class="inputs-focus" name="area">

					<ul class="dropdown-town">
					   <li data-value="Алтайский край">Алтайский край</li>
					   <li data-value="Московская область">Московская область</li>
					   <li data-value="Краснодарский край">Краснодарский край</li>
					</ul>
				</div>

				<div class="inputer">
					<label class="font14 dark-grey">Область/Край:</label>
					<a href="#" class="equality list"><span class="little-arrow"><i></i></span>					
					</a>
					<input type="text" placeholder="Введите город" class="inputs-focus" name="city">

					<ul class="dropdown-town">
					   <li data-value="Барнаул">Барнаул</li>
					   <li data-value="Москва">Москва</li>
					   <li data-value="Краснодар">Краснодар</li>
					</ul>
				</div>
					<label class="font14 dark-grey">&nbsp;</label>
					<a href="#" class="green-btn active find">НАЙТИ</a>
				<div class="cleaner"></div>
			</div>

			<div class="result-search">
				<div class="search-string modal-viewer" data-key="#sc">
					<span>ДЦ “Коломенское”, Москва, ул. Высокая, д. 4, стр. 2</span>
				</div>
				<div class="search-string modal-viewer" data-key="#sc">
					<span>ДЦ “Цветной бульвар”, Москва, ул. Большая Никитская, д.2, оф.918</span>
				</div>
				<div class="search-string modal-viewer" data-key="#sc">
					<span>ДЦ Иванов ИП, Москва, ул. Люберецкая, д.9</span>
				</div>
			</div>
		</div>
		<div class="report-clear"></div>
	</div>
</div>
<div id="sc" style="display: none; position: relative; min-width: 530px; min-height: 230px;">
	<h2>СЕРВИСНЫЙ ЦЕНТР</h2>
	<h3>СЦ "Коломенская"</h3>
	<table width="100%">
		<tr>
			<td>Адрес:</td>
			<td>Москва, ул. Высокая д.4, стр.2</td>
			<td></td>
		</tr>
		<tr>
			<td>Телефон:</td>
			<td>+7(495)451-92-19</td>
			<td></td>
		</tr>
		<tr>
			<td>Часы работы:</td>
			<td>
				понедельник-пятница, с 10:00 до 21:00. <br>
				суббота с 11:00 до 18:00<br>
				воскресенье выходной
			</td>
			<td class="img-td" colspan="3"><img src="/img/photo_info.png" alt="Наше здание"></td>
		</tr>
	</table>
</div>


<?
require_once('footer.php');
?>