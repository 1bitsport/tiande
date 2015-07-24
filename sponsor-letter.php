<?
require_once('header.php');
?>
		<div class="sponsor_letter">
			<div class="left_avatar">
				<img src="/temp/sponsor_avatar1.jpg" alt="">
				<div class="sponsor_name">
					Белякова Лилия Владимировна и Колесников Денис Владимирович
				</div>
				<div class="sponsor_country_city">
					Россия, г. Махачкала
				</div>
			</div>

			<div class="right_form validator last-step">
				<h1>Чем я могу Вам помочь?</h1>
				<p>
					Позвольте мне помочь Вам найти ваш путь к прекрасному.<br>
					Используйте форму ниже для отправки сообщений.
				</p>
				<form action="">
					<div class="input-parent">
						<input type="text" placeholder="Фамилия" class="form-input long itsName importantField" name="">
						<span class="wrong">Поле не может быть пустым</span>
					</div>

					<div class="input-parent">
						<input type="text" placeholder="Имя" class="form-input long itsName importantField" name="">
						<span class="wrong">Поле не может быть пустым</span>
					</div>

					<div class="input-parent">
						<a href="#" class="equality list"><span class="little-arrow"><i></i></span></a>
						<input type="text" placeholder="Страна" class="form-input long importantField" name=""> <!-- Селект и дропдаун -->
						<span class="wrong">Поле не может быть пустым</span>
						<ul class="dropdown-town">
						   <li>Россия</li>
						   <li>Белоруссия</li>
						</ul>
					</div>
					
					<div class="input-parent">
						<input type="text" placeholder="Телефон" class="form-input long itsPhone importantField" name="">
						<span class="wrong">Поле не может быть пустым</span>
					</div>

					<div class="input-parent">
						<input type="text" placeholder="E-mail" class="form-input long itsEmail importantField" name="">
						<span class="wrong">Поле не может быть пустым</span>
					</div>

					<div class="input-parent">
						<textarea name="" placeholder="Текс сообщения" class="importantField"></textarea>
						<span class="wrong">Поле не может быть пустым</span>
					</div>

					<div class="input-parent">
						<input type="checkbox" name="" id="love_text">
						<label for="love_text">Я предпочитаю текстовые сообщения звонкам</label>
					</div>

					<input type="submit" value="ОТПРАВИТЬ" class="continue active">
				</form>
				<div class="cleaner"></div>
			</div>
		</div>
<?
require_once('footer.php');
?>