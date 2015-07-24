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
		<div class="restore-password registration uspesh">
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
								<input type="text" name="birthday" id="" placeholder="Дата рождения" class="form-input  importantField short itsDate d-inline-block">
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
							<p>Спонсор – это Дистрибьютор TianDe, который лично пригласил вас в корпорацию.<br>Если у вас еще нет Спонсора, вы можете воспользоваться нашим поиском.</p>
							<div class="radio-block">
								<input class="reg-change radio" type="radio" name="radio-select-sponsor" checked id="have-sponsor" data-texttitle="Have" data-show="sponsor-number"><label class="radio-label overlay-text" for="have-sponsor" onclick="">У МЕНЯ ЕСТЬ СПОНСОР</label>
								<input class="reg-change radio" type="radio" name="radio-select-sponsor" id="havent-sponsor" data-texttitle="havent" data-show="find-sponsor"><label class="radio-label overlay-text" for="havent-sponsor" onclick="">У МЕНЯ НЕТ СПОНСОРА</label>
							</div>

							<div class="sponsor-number dinamick_block">
								<div class="input-parent">
									<input type="text" class="form-input" name="sponsor-number" id="reg_sponsor_id" placeholder="Регистрационный номер спонсора">
									<span class="wrong">Спонсора с таким номером не существует</span>
								</div>
								<a href="?no-js-single-sponsor=y" class="green-btn check-sponsor check-single-sponsor">ПРОВЕРИТЬ</a>
							</div>
							
							

							<div class="single-sponsor dinamick_block <?if(!isset($_GET['no-js-single-sponsor'])):?>hide<?endif;?>">
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
							
							<div class="find-sponsor hide dinamick_block">
								<div class="input-parent">
									<a href="#" class="equality list"><span class="little-arrow"><i></i></span></a>
									<input type="text" placeholder="Выберите страну" class="form-input" readonly name="sponsor-country" id="sponsor-country">

									<ul class="dropdown-town">
									   <li>Россия</li>
									   <li>Белоруссия</li>
									</ul>
								</div>
								<a href="?no-js-sponsors=y" class="green-btn check-sponsor modal-viewer" data-key="#sponsors-list">НАЙТИ СПОНСОРА</a>
							</div>

							<div class="cleaner"></div>

							

							<div class="new-sponsor <?if(!isset($_GET['no-js-sponsors'])):?>hide <?endif;?>">
								<div class="paginations m-top20">
									<div class="sponsors-pagination  m-bot20">
										<a class="page current">1</a>
										<a href="#" class="page">2</a>
										<a href="#" class="page">3</a>
										<span class="dots page">...</span>
										<a href="#" class="page">999</a>
										<a href="#" class="next">&#9658;<!-- <img src="img/next-page.png" alt=""> --></a>
									</div>

									<div class="count-tr font14 light-grey">
										<span>Показывать по: </span>
										<a class="font14 current" href="#">10</a>
										<a class="font14" href="#">20</a>
										<a class="font14" href="#">30</a>
										<a class="font14" href="#">50</a>
										<a class="font14" href="#">ВСЕ</a>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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

										<p>Пришел в TianDe</p>
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="sponsor-container">
									<div class="sponsor-block sponsor-select">
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
										<div class="two_buttons">
											<a href="#" class="this-btn modal-viewer" data-key="#write-to-sponsor">НАПИСАТЬ</a>
											<a href="#" class="green-btn select-sponsor" data-idsponsor="9292">ВЫБРАТЬ</a>
											
										</div>
									</div>
								</div>

								<div class="paginations m-top20">
									<div class="sponsors-pagination  m-bot20">
										<a class="page current">1</a>
										<a href="#" class="page">2</a>
										<a href="#" class="page">3</a>
										<span class="dots page">...</span>
										<a href="#" class="page">999</a>
										<a href="#" class="next">&#9658;<!-- <img src="img/next-page.png" alt=""> --></a>
									</div>

									<div class="count-tr font14 light-grey">
										<span>Показывать по: </span>
										<a class="font14 current" href="#">10</a>
										<a class="font14" href="#">20</a>
										<a class="font14" href="#">30</a>
										<a class="font14" href="#">50</a>
										<a class="font14" href="#">ВСЕ</a>
									</div>
								</div>
							</div>

							<div class="cleaner"></div>

							<div class="selected-new-sponsor">
								<!-- Js сюда запихивает блок спонсора -->
							</div>

							<div class="cleaner"></div>
							<input type="hidden" name="sponsor-id" value="">
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
						<h2 class="uppercase">Безопасность</h2>
						<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>

						<div class="form-content safe validator hide">
							<div class="input-parent">
								<input type="password" name="reg_pass" placeholder="Введите ваш пароль" class="reg_password importantField form-input">
								<span class="wrong">Пароли не совпадают либо короче 6 символов</span>
							</div>
							<div class="cleaner"></div>
							<div class="input-parent">
								<input type="password" name="reg_pass_repeat" placeholder="Подтвердите ввод пароля" class="reg_password repeater importantField form-input">
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