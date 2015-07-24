<?
require_once('header.php');
?>
<div class="reg-final uspesh">
	<div class="left-final">
		<h1 class="uppercase">Поздравляем с успешной регистрацией в корпорации TianDe!</h1>
		<p>Желаете воспользоваться Online Service Center?</p>
		<p>Хотите купить продукцию по специальной цене?</p>
		<p class="bold remember">Запомните, сохраните, запишите:</p>
		<div class="inputs-block">
			<div class="num-one">1</div>
			<div class="num-two">2</div>
			<div class="input-parent">
				<label>Логин для входа в Online Office:</label>
				<input class="form-input" type="text" name="" value="sobaka@sobaka.sobaka">
			</div>

			<div class="cleaner"></div>

			<div class="input-parent">
				<input class="form-input" type="text" name="" value="111111111">
			</div>

			<div class="cleaner"></div>

			<div class="input-parent your-pass">
				<label>Ваш пароль для входа в Online Office:</label>
				<input class=" form-input" type="text" name="" value="111111111">
			</div>

			<div class="cleaner"></div>
		</div>
		<a class="go_to_buy">ПЕРЕЙТИ К ПОКУПКАМ</a>
	</div>
	<div class="right-final">
		<a href="/lk-info.php">
			<img src="/img/find_service.jpg">
			<div class="cleaner"></div>
			НАЙТИ СЕРВИСНЫЙ ЦЕНТР
		</a>
	</div>
	<div class="cleaner"></div>
	<div class="reg-anketa">
		<h2>Ваша регистрационная анкета:</h2>
		<div class="anketa-slider">
			<p>Регистрационная анкета – основной документ корпорации. При обращении в Сервисный или Дилерский центры необходимо назвать регистрационный номер, а в некоторых случаях – предъявить распечатанную анкету.</p>
			<div class="swiper-container">
				<div class="arrow-wrapper left"><a href="#" class="arrow arrow-left"></a></div>
              	<div class="arrow-wrapper right"><a href="#" class="arrow arrow-right"></a></div>
              	<div class="swiper-wrapper">
              		<div class="swiper-slide">
              			<img src="/temp/anketa_front.jpg" alt="">
              		</div>

              		<div class="swiper-slide">
              			<img src="/temp/anketa_back.jpg" alt="">
              		</div>
              	</div>
			</div>
			<div class="cleaner"></div>
			<div class="anketa-buttons">
				<a href="#" class="green-btn print-anketa">ПЕЧАТЬ АНКЕТЫ</a>
				<a href="#" class="green-btn">СОХРАНИТЬ АНКЕТУ</a>
				<div class="cleaner"></div>
			</div>
		</div>
	</div>
</div>
<?
require_once('footer.php');
?>