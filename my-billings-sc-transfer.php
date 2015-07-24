<?
require_once('header.php');
?>

		<div class="restore restore-password consultant_transfer service-center">
			<div class="page-h">
				<div class="sc_domik"></div>
				<h1>Перевод с бонусного счета на Сервисный центр</h1>
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
						<h2 class="uppercase">Выбор сервисного центра</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>

						<div class="form-content sc_select">
							<p>Не нашли интересующий Вас Сервисный центр - <a href="#">Обратитесь в ЕИАЦ.</a></p>
							
							<div class="input-parent">
								<label for="country">Страна</label>
								<a href="#" class="equality list"><span class="little-arrow"><i></i></span></a>
								<input type="text" id="country" class="form-input ">
								<span class="wrong">Какая нибудь ошибка...</span>
								
								<ul class="dropdown-town">
								   <li>Россия</li>
								   <li>Белоруссия</li>
								   <li>Римская Империя</li>
								</ul>
							</div>
							<div class="input-parent">
								<label for="city">Город/Поселок</label>
								<a href="#" class="equality list"><span class="little-arrow"><i></i></span></a>
								<input type="text" id="city" class="form-input ">
								<span class="wrong">Какая нибудь ошибка...</span>

								<ul class="dropdown-town">
								   <li>Москва</li>
								   <li>Нижние пупки</li>
								   <li>Антананариву</li>
								</ul>
							</div>
							<a href="#" class="green-btn just_show_block" data-show="hidden_sc">НАЙТИ</a>

							<div class="city hidden_sc">
			                  <label class="d-block checker" for="self-adress1"><input type="radio" name="serv_centr" id="self-adress1" value="msk1"><span></span>ДЦ “Коломенское”, г. Москва, ул. Высокая, д.4, стр.2</label>
			                  <label class="d-block checker" for="self-adress2"><input type="radio" name="serv_centr" id="self-adress2" value="msk22"><span></span>ДЦ “Коломенское”, г. Москва, ул. Высокая, д.4, стр.2</label>
			                </div>

							<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">
						</div>
						<div class="infoblock hide m-top15 font14 ">
							<table>
								<tr>
									<td>Сервисный центр:</td>
									<td>ДЦ “Коломенское”, ул. Высокая, д.4, стр.2</td>
								
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
								<label for="valuta">Валюта</label>
								<a href="#" class="equality list"><span class="little-arrow"><i></i></span></a>
								<input type="text" id="transfer_valuta" readonly class="form-input short importantField">
								
								<ul class="dropdown-town">
								   <li data-val="евро">EUR</li>
								   <li data-val="руб.">RUB</li>
								   <li data-val="долл.">USD</li>
								</ul>
							</div>
							<div class="input-parent">
								<label for="summa">Сумма</label>
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
		<a href="#" class="autoclicker modal-viewer" data-key="#good_transfer_2">...</a>
		<div id="good_transfer_2" class="not-wide" style="display: none; position: relative;">
		<div class="expander">
			<p class="uppercase">Ваша заявка на перевод принята!</p>
			<p class="small">Ваш перевод будет обработан в течение 24 часов.</p>
		</div>
		</div>



<?
require_once('footer.php');
?>