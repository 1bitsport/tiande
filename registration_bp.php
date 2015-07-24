<?
require_once('header.php');
?>
	</main>
</div>

<section id="main-slider" class="registration-slider swiper-container">
    <a href="#" class="arrow arrow-left"></a>
    <a href="#" class="arrow arrow-right"></a>
    <div class="swiper-wrapper">

        <div class="swiper-slide">
	        <div class="slide-container">
	            <a href="#1">
		          <img src="http://www.ejin.ru/uploads/posts/2012-03/3b4a1c1cc0c2af8e8522e3ad4c71e1a4cc3cb8ae.jpg" />
		          <div class="slide-content">
		            
		          </div>
	            </a>
	        </div>
        </div>

        <div class="swiper-slide">
	        <div class="slide-container">
	            <a href="#2">
		          <img src="http://www.ejin.ru/uploads/posts/2012-03/3b4a1c1cc0c2af8e8522e3ad4c71e1a4cc3cb8ae.jpg" />
		          <div class="slide-content">
		            
		          </div>
	            </a>
	        </div>
        </div>

        <div class="swiper-slide">
	        <div class="slide-container">
	            <a href="#3">
		          <img src="http://www.ejin.ru/uploads/posts/2012-03/3b4a1c1cc0c2af8e8522e3ad4c71e1a4cc3cb8ae.jpg" />
		          <div class="slide-content">
		            
		          </div>
	            </a>
	        </div>
        </div>

    </div>
    <div class="swiper_pagination"></div>
</section>

<div class="container main-container">
	<main>
		<div class="restore-password registration bussiness">
			<form action="">
				<ul class="general-restore">

					<li class="restore-step dark-placeholder active">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Ваши личные данные</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>

						<div class="form-content validator">
							<div class="input-parent">
								<input type="text" name="last-name" id="" placeholder="Фамилия" class="itsName importantField form-input mid">
								<span class="wrong">Поле не может быть пустым</span>
							</div>
							<div class="input-parent">
								<input type="text" name="first-name" id="" placeholder="Имя" class="itsName importantField form-input mid">
								<span class="wrong">Поле не может быть пустым</span>
							</div>
							<div class="input-parent">
								<input type="text" name="middle-name" id="" placeholder="Отчество" class="form-input mid">
							</div>
							
							<div class="cleaner"></div>

							<div class="input-parent mid">
								<input type="text" name="birthday" id="" placeholder="Дата рождения" class="form-input itsNumber importantField short  d-inline-block">
								<span class="wrong">Поле не может быть пустым</span>
								<span class="calendarik"><img src="/img/calendarik.png" alt=""></span>
							</div>

							<div class="cleaner"></div>

							<div class="input-parent">
								<input type="text" name="email" id="" placeholder="E-mail" class="itsEmail importantField form-input mid">
								<span class="wrong">Поле не может быть пустым</span>
							</div>
							<div class="input-parent">
								<input type="text" name="phone" id="" placeholder="Телефон: +x (xxx) xxx xxx xx xx" class="itsPhone importantField form-input mid">
								<span class="wrong">Поле не может быть пустым</span>
							</div>

							<div class="cleaner"></div>

							<div class="input-parent">
								<label for=""><input type="checkbox" id="read_the_rules" class="wrong importantField">Я принимаю условия <a href="#" target="_blank">пользовательского соглашения</a></label>
							</div>
							
							<div class="cleaner"></div>

							<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">
						</div>
						<div class="infoblock hide m-top15 font14 ">
							<table>
								<tr>
									<td>ФИО:</td>
									<td>Иванов Иван Иванович</td>
								</tr>
								<tr>
									<td>Дата рождения:</td>
									<td>10.10.1990</td>
								</tr>
								<tr>
									<td>E-mail:</td>
									<td>blabla@bla.bla</td>
								</tr>
								<tr>
									<td>Телефон:</td>
									<td>+7 (985) 999 01 10</td>
								</tr>
							</table>
						</div>
        				<!-- <a href="" class="this-btn change hide uppercase m-top15">ИЗМЕНИТЬ</a> -->
					</li>

					<li class="restore-step">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Ваш спонсор</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>
						<div class="form-content sponsor hide">
							<p>Спонсор – это Дистрибьютор TianDe, который лично пригласил вас в корпорацию.</p>

							<div class="sponsor-number dinamick_block">
								<div class="input-parent">
									<input type="text" class="form-input" name="sponsor-number" id="reg_sponsor_id" placeholder="Регистрационный номер спонсора">
									<span class="wrong">Спонсора с таким номером не существует</span>
								</div>
								<a href="?no-js-single-sponsor=y" class="green-btn check-sponsor check-single-sponsor">ПРОВЕРИТЬ</a>
							</div>
							
							

							<div class="single-sponsor <?if(!isset($_GET['no-js-single-sponsor'])):?>hide<?endif;?>">
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

										<div class="cleaner"></div>

										<p>Пришел в TianDe, чтобы покупать товары со скидкой, и построил успешный бизнес на территории всей России. Виктор утверждает: "Берите все, что дает вам жизнь!"</p>
									</div>
								</div>
							</div>
							

							<div class="cleaner"></div>
							<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">
						</div>
						<div class="infoblock dark-grey hide m-top15 font14 ">
							<table>
								<tr>
									<td>Данные спонсора:</td>
									<td>000001 Абрамова Анна Викторовна</td>
								</tr>
							</table>
						</div>
					</li>

					<li class="restore-step">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Адрес проживания</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>
						<div class="form-content hide validator">
							<div class="adress-block">
								<div class="input-parent">
									<label for="">Страна:</label>
									<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" name="" class="form-input long-adress importantField" id="">
									<ul class="dropdown-town">
									   <li>Россия</li>
									   <li>Белоруссия</li>
									</ul>
								</div>

								<div class="input-parent">
									<label for="">Область/Край:</label>
									<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" name="" class="form-input long-adress importantField" id="">
									<ul class="dropdown-town">
									   <li>Московская область</li>
									   <li>Краснодарский край</li>
									</ul>
								</div>

								<div class="input-parent">
									<label for="">Город/Поселок:</label>
									<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" name="" class="form-input long-adress importantField" id="">
									<ul class="dropdown-town">
									   <li>Москва</li>
									   <li>Ровеньки</li>
									</ul>
								</div>

								<div class="input-parent">
									<label for="">Улица:</label>
									<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" name="" class="form-input long-adress importantField" id="">
									<ul class="dropdown-town">
									   <li>Подзаболотная</li>
									   <li>Изподтишковая</li>
									</ul>
								</div>

								<div class="input-parent">
									<label for="">№ Дома:</label>
									<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" name="" class="form-input short-adress importantField" id="">
									<ul class="dropdown-town">
									   <li>12</li>
									   <li>10</li>
									</ul>
								</div>

								<div class="input-parent">
									<label for="">Корпус:</label>
									<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" name="" class="form-input short-adress" id="">
									<ul class="dropdown-town">
									   <li>2</li>
									   <li>3</li>
									</ul>
								</div>

								<div class="input-parent">
									<label for="">№ Кв.:</label>
									<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" name="" class="form-input short-adress importantField" id="">
									<ul class="dropdown-town">
									   <li>15</li>
									   <li>33</li>
									</ul>
								</div>

								<div class="input-parent">
									<label for="">Индекс:</label>
									<a href="#" tabindex="-1" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" name="" class="form-input short-adress importantField" id="">
									<ul class="dropdown-town">
									   <li>115422</li>
									   <li>566331</li>
									</ul>
								</div>
							</div>
							<div class="cleaner"></div>
							<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">
						</div>
						<div class="infoblock hide m-top15 font14 ">
							<table>
								<tr>
									<td>Ваш адрес:</td>
									<td>105555, Россия, Алтайский край, г. СложноеНазвание, ул. ОченьДлинноеНазваниеУлицыПоКитайски, д.999, корпус 999, кв. 999</td>
								</tr>
							</table>
						</div>
					</li>

					<li class="restore-step">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Безопасность</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>

						<div class="form-content validator hide">
							<div class="input-parent">
								<input type="password" name="reg_pass" placeholder="Введите ваш пароль" class="reg_password importantField form-input">
								<span class="wrong">Пароли не совпадают либо короче 6 символов</span>
							</div>
							<div class="cleaner"></div>
							<div class="input-parent">
								<input type="password" name="reg-pass_repeat" placeholder="Подтвердите ввод пароля" class="reg_password repeater importantField form-input">
								<span class="wrong">Пароли не совпадают либо короче 6 символов</span>
							</div>
							<div class="cleaner"></div>
							<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">
						</div>
					</li>

					<li class="restore-step">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Подтверждение регистрации</h2>
						<div class="form-content validator last-step captcha hide">
							<p>Для завершения регистрации введите проверочный код и нажмите кнопку “Зарегистрироваться”</p>
							<div class="captcha-container">
								<div class="captcha-block">
									<div class="captcha-pic"><img src="/temp/captcha.jpg" alt="Каптча"></div>
									<a href="#" class="another-captcha">Другой код</a>
								</div>
								<div class="captcha-arrow">
									<span></span>
								</div>
								<div class="input-parent">
									<input type="text" placeholder="Введите код" class="form-input captcha-input importantField">
									<span class="wrong">Введённый код неверен</span>
								</div>
							</div>
							<input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ" class="m-top20 send-form green-btn no-slide-up continue active">
						</div>
					</li>
				</ul>
				
			</form>
		</div>



<?
require_once('footer.php');
?>