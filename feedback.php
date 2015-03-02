<?
require_once('header.php');
?>

	<div class="feedback">
	<div class="report-content">
		<div class="report-left-menu">
			<div class="report-left-content">
				<p><a href="">НАШИ СЕРВИСЫ</a></p>
				<ul>
					<li><a href="">Доставка</a></li>
					<li><a href="">Калькулятор доставки</a></li>
					<li><a href="">Моя скидка</a></li>
					<li><a href="">Программа лояльности</a></li>			
					<li><a href="">Мой профиль</a></li>
					<li><a href="">Бонусная программа</a></li>
					<li><a href="">Онлайн-оплата</a></li>
					<li><a href="">ТианДе бокс</a></li>			
					<li><a href="">Подарочные сертификаты</a></li>			
					<li><a href="" class="current-menu">Обратная связь</a></li>			
				</ul>
			</div>
		</div>

		<h2 class="feedback">ОБРАТНАЯ СВЯЗЬ</h2>
		<div class="report-content-in">
			
			<div class="feedback-inner">
				<p>
					Мы очень дорожим вашим мнением и готовы выслушать все ваши пожелания, отзывы и жалобы. Оставьте свое сообщение
					и мы обязательно ответим на него.  Для более опреативного получения информации оставьте в сообщении свои 
					контактные данные. 
				</p>
				<form action="" class="validator">
					<input type="text" placeholder="ФИО" name="fio" class="long fio form-input importantField">
                    <span class="wrong">Поле не может быть пустым</span>
					<div class="cleaner"></div>
					<input type="text" placeholder="E-mail" name="email" class="short form-input importantField">
                    <span class="wrong">Поле не может быть пустым</span>
					<div class="js-select">
                      	<input type="text" placeholder="Страна" class="input-select short form-input drop importantField" name="country" id="the-country">
                      	<span class="wrong">Выбор страны обязателен</span>
                      	<div class="select-arrow clickable"></div>
                    	<ul class="dropdown-select short">
                    		<li>Россия</li>
                			<li>Украина</li>
	                        <li>Белоруссия</li>
	                        <li>Польша</li>
	                        <li>Румыния</li>
	                    </ul>
                    </div>
					<select name="country" class="country short form-input nojs-select">                           <!-- Добавить текстовый инпут + блок dropdown при включенном джава скрипте и скрыть селект(будет показан при отключеном js) -->
						<option style="display:none" value="" selected default>Страна</option> 
						<option value="Россия">Россия</option>
						<option value="Украина">Украина</option>
						<option value="Белоруссия">Белоруссия</option>
						<option value="Польша">Польша</option>
						<option value="Румыния">Румыния</option>
					</select>
                    <span class="wrong">Выбор страны обязателен</span>

					
					<div class="cleaner"></div>
					<div class="js-select">
                      	<input type="text" placeholder="Тема сообщения" class="input-select form-input mid drop importantField" name="topic" id="the-topic">
                      	<span class="wrong">Выбор темы обязателен</span>
                      	<div class="select-arrow clickable"></div>
                    	<ul class="dropdown-select mid">
                    		<li>Бизнес</li>
                			<li>Продукция</li>
	                        <li>Обучение</li>
	                        <li>Online office</li>
	                        <li>Бухгалтерский и налоговый учет</li>
	                    </ul>
                    </div>
					<select name="msg-topic" class="msg-topic form-input mid nojs-select"> <!-- Добавить текстовый инпут + блок dropdown при включенном джава скрипте и скрыть селект(будет показан при отключеном js) -->
						<option style="display:none" value="" selected default>Тема сообщения</option>
						<option value="Бизнес">Бизнес</option>
						<option value="Продукция">Продукция</option>
						<option value="Обучение">Обучение</option>
						<option value="Online office">Online office</option>
						<option value="Бухгалтерский и налоговый учет">Бухгалтерский и налоговый учет</option>
					</select>
                    <span class="wrong">Выбор темы обязателен</span>
					<div class="cleaner"></div>
					<textarea name="msg-text" placeholder="Текст сообщения" class="form-input importantField" id=""></textarea>
                    <span class="wrong">Поле должно содержать минимум 10 символов</span>

					<input type="submit" name="send" class="green-btn continue active" value="ОТПРАВИТЬ">
				</form>
			</div>
			
		</div>
		<div class="report-clear"></div>
	</div>
</div>

<?
require_once('footer.php');
?>