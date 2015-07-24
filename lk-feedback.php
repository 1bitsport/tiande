<?
require_once('header.php');
?>
<div class="reports-page">
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
					<div class="report-menu-icon report-menu-tool"></div>
					<a href="#"><span>М</span>ои инструменты</a>
				</li>
				<li class="">
					<div class="report-corner-container">
						<div class="report-corner">
							<div class="report-menu-up"></div>
						</div>	
					</div>
					<div class="report-menu-icon report-menu-feedback active"></div>
					<a href="#"><span>О</span>братная связь</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-office"></div>
					<a href="#"><span>О</span>нлайн офис</a>
				</li>
			</ul>
		</div>	
	</div>
	<div class="lk-feedback-content">
		<div class="lk-feedback-inner">
			<h1>ОБРАТНАЯ СВЯЗЬ</h1>
			<a href="" class="green-btn uppercase slide-msg">НОВОЕ СООБЩЕНИЕ</a>
			<div class="modal posrelative new-msg down">
				<p>
					Мы дорожим вашим мнением и готовы  выслушать всё, что вы хотите сообщить. <br>
					Ответим в течение суток с момента отправки сообщения.
				</p>
				<form action="" class="validator last-step">
					<div class="js-select">
					  	<input type="text" placeholder="Выберите тему сообщения" class="input-select long form-input drop importantField" name="topic-msg" id="the-topic-msg">
						<span class="wrong">Выбор темы обязателен</span>

					  	<div class="select-arrow clickable"></div>
						<ul class="dropdown-select short">
							<li>Технические проблемы с доступом</li>
							<li>Ошибки в расчетах</li>
		        			<li>Смена личных данных</li>
					    </ul>
					</div>
					<select name="topic" class="country short form-input nojs-select">        <!-- Добавить текстовый инпут + блок dropdown при включенном джава скрипте и скрыть селект(будет показан при отключеном js) -->
						<option style="display:none" value="" selected default>Страна</option> 
						<option value="Технические проблемы с доступом">Технические проблемы с доступом</option>
						<option value="Ошибки в расчетах">Ошибки в расчетах</option>
						<option value="Смена личных данных">Смена личных данных</option>
					</select>
					<textarea name="text-msg" placeholder="Введите текст сообщения" id="" class="form-input importantField tenSim"></textarea>
					<span class="wrong">Минимальный размер сообщения 10 символов</span>
					<input type="submit" value="ОТПРАВИТЬ" class="send-form continue active">
					<div class="cleaner"></div>
				</form>
			</div>
		</div>
	</div>
	<div class="lk-under-content">
	<h2>Обращения:</h2>
		<div class="queries">
			<table class="query-list">
				<thead>
					<tr class="uppercase">
						<th width="9.2%"><span class="border-dot-grey">Дата</span><img src="img/little-arrow.png" alt=""></th>
						<th width="9.2%">№ Заявки</th>
						<th width="58%">Сообщение</th>
						<th width="25.5%">Статус сообщения</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="black">01.02.2001</td>
						<td class="black">01028328</td>
						<td class="msg-td">
							<h3>ВОПРОС ПО ЛИЧНОМУ КАБИНЕТУ</h3>
							<h4>Заголовок</h4>
							<p>Не получается войти в личный кабинет (Online office) с логином lariska@tiande.ru. Помогите </p>
						</td>
						<td>
							<span class="bg-img one uppercase">Получен ответ</span>
						</td>
					</tr>
					<tr>
						<td class="black">01.02.2001</td>
						<td class="black">01028213</td>
						<td class="msg-td">
							<h3>СМЕНА ЛИЧНЫХ ДАННЫХ</h3>
							<h4>Заголовок</h4>
							<p>Подскажите пожалуйста, как сменить почтовый адрес в настройках личного кабинета. </p>
						</td>
						<td>
							<span class="bg-img two uppercase">Заявка закрыта</span>
						</td>
					</tr>
					<tr>
						<td class="black">01.02.2001</td>
						<td class="black">01028301</td>
						<td class="msg-td">
							<h3>ОШИБКИ В РАСЧЕТАХ</h3>
							<h4>Заголовок</h4>
							<p>Почему у меня в отчетах нет баллов по Петровой Ларисе? Она мой дистрибъютор лин ...</p>
						</td>
						<td>
							<span class="bg-img three uppercase">В обработке</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>


<a href="" class="modal-viewer hide" data-key="#new-msg">opener</a>
<div id="new-msg" class="modal hide posrelative not-wide">
	<h1>ОБРАТНАЯ СВЯЗЬ</h1>
	<p>
		Мы дорожим вашим мнением и готовы  выслушать всё, что вы хотите сообщить. <br>
		Ответим в течение суток с момента отправки сообщения.
	</p>
	<form action="" class="validator">
		<div class="js-select">
		  	<input type="text" placeholder="Выберите тему сообщения" class="input-select long form-input drop importantField" name="topic-msg" id="the-topic-msg">
		  	<span class="wrong">Выбор темы обязателен</span>
		  	<div class="select-arrow clickable"></div>
			<ul class="dropdown-select short">
				<li>Технические проблемы с доступом</li>
				<li>Ошибки в расчетах</li>
		        <li>Смена личных данных</li>
		    </ul>
		</div>
		<select name="topic" class="country short form-input nojs-select">        <!-- Добавить текстовый инпут + блок dropdown при включенном джава скрипте и скрыть селект(будет показан при отключеном js) -->
			<option style="display:none" value="" selected default>Страна</option> 
			<option value="Технические проблемы с доступом">Технические проблемы с доступом</option>
			<option value="Ошибки в расчетах">Ошибки в расчетах</option>
			<option value="Смена личных данных">Смена личных данных</option>
		</select>
		<div class="">
			<textarea name="text-msg" placeholder="Введите текст сообщения" id="" class="form-input importantField tenSim"></textarea>
			<span class="wrong">Минимальный размер сообщения 10 символов</span>
		</div>
		<input type="submit" value="ОТПРАВИТЬ" class="send-form continue active">
	</form>
</div>
<?
require_once('footer.php');
?>









