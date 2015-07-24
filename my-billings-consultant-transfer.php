<?
require_once('header.php');
?>

		<div class="restore restore-password consultant_transfer">
			<div class="page-h">
				<div class="cons_transfer_hand"></div>
				<h1>Перевод с бонусного счета консультанту OSC</h1>
			</div>
			<div class="infoblock font14 ">
				<table>
					<tr>
						<td>Текущее состояние счета:</td>
						<td>500 руб.</td>
					</tr>
				</table>
			</div>
			<form action="">
				<ul class="general-restore">

					<li class="restore-step active">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Выбор консультанта OSC</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>

						<div class="form-content validator">
							<div class="input-parent">
							<label for="consultant">Номер консультанта</label>
								<input type="text" name="" id="consultant" class="importantField form-input mid">
								<span class="wrong">Поле не может быть пустым</span>

							</div>
							<a href="#" class="green-btn find_consultant just_show_block" data-show="the_consultant">НАЙТИ</a>
							
							<div class="the_consultant hide dinamick_block">
								<div class="sponsor-container">
									<div class="sponsor-block">
										<div class="avatar">
											<img src="/temp/sponsor_avatar.jpg" alt="Фото спонсора">
										</div>

										<div class="user-info">
											<span class="fio">Бострем</span>
											<span class="fio">Виктор</span>
											<span class="fio">Глебович</span>
											<span class="user-adress">Россия</span>
											<span class="user-adress">г. Москва</span>
											<span class="web-site"><a href="#">Мой сайт</a></span>
										</div>
									</div>
								</div>
							</div>

							<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">
						</div>
						<div class="infoblock hide m-top15 font14 ">
							<table>
								<tr>
									<td>Консультант:</td>
									<td>000001 Иванов Иван Иванович</td>
								
							</table>
						</div>
        				<!-- <a href="" class="this-btn change hide uppercase m-top15">ИЗМЕНИТЬ</a> -->
					</li>

					<li class="restore-step">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Сумма перевода</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>
						<div class="form-content validator hide">
							<p>Укажите сумму для перевода и выберите валюту</p>
							
							<div class="input-parent">
								<label>Валюта</label>
								<a href="#" class="equality list"><span class="little-arrow"><i></i></span></a>
								<input type="text" id="transfer_valuta" readonly class="form-input short importantField">
								
								<ul class="dropdown-town">
								   <li data-val="евро">EUR</li>
								   <li data-val="руб.">RUB</li>
								   <li data-val="долл.">USD</li>
								</ul>
							</div>
							<div class="input-parent">
								<label>Сумма</label>
								<input type="text" id="transfer_summa" class="form-input itsNumber importantField">
								<span class="wrong">Ошибка на остаток суммы</span>
								<span class="yellow_info hide"><span class="digit"></span>&nbsp;<span class="valuta"></span></span>
							</div>

							<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">
						</div>
						<div class="infoblock dark-grey hide m-top15 font14 ">
							<table>
								<tr>
									<td>Сумма:</td>
									<td>100 руб. (3 EUR)</td>
								</tr>
							</table>
						</div>
					</li>

					<li class="restore-step">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Подтверждение перевода</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>

						<div class="form-content validator last-step hide">
							<p>Для подтверждения перевода введите Ваш финансовый пароль</p>
							<div class="input-parent m-top15">
								<input type="password" class="form-input importantField">
								<span class="wrong">Ещё какая нибудь ошибка...</span>
							</div>
							<input type="submit" value="ПЕРЕВЕСТИ" class="m-top20 send-form green-btn continue active">
						</div>
					</li>

				</ul>
				
			</form>
		</div>
		<a href="#" class="autoclicker modal-viewer" data-key="#good_transfer">...</a>
		<div id="good_transfer" class="not-wide" style="display: none; position: relative;">
			<p class="uppercase">Ваш перевод успешно завершен!</p>
		</div>



<?
require_once('footer.php');
?>