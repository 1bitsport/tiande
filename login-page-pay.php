<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Вход</title>
	<!-- <meta name="viewport" content="height=device-height, width=device-width" /> -->
	<meta name="format-detection" content="telephone=no">
  	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	
	<link href="/css/login.css" rel="stylesheet" type="text/css">
	  <link href="/js/jquery.scrollbar.css" rel="stylesheet" type="text/css">

	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	  <script src="/js/idangerous.swiper.js"></script>
	  <script src="/js/jquery.scrollbar.min.js"></script>
	  <script src="/js/scripts.js"></script>

	<!--[if lt IE 9]>
		<script src="http://css3-pie.googlecode.com/svn/trunk/PIE_IE678.js"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> 
	<![endif]-->

	<!--[if IE 9]>
		<script src="http://css3-pie.googlecode.com/svn/trunk/PIE_IE9.js"></script>
	<![endif]-->

	<!--[if IE 8]>
  <link href="/css/style_ie8.css" rel="stylesheet" type="text/css">
  <style>
    @import("/css/style_ie8.css");
  </style>
  <![endif]-->

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="login-main">
		<div id="header">
			<div class="headText"><span>Оформление заказа</span></div>
		</div>
		<div class="vertical-mid">
				<div class="left-main">
					<div class="right-wrap">
						<form class="static-login" action="">
							<div class="login-text"><span>Войти с учетной записью TianDe</span></div>
							<div class="cleaner"></div>
							<input class="text-field" type="text" name="login" placeholder="Номер регистрационной анкеты или e-mail">
							<div class="wrong"><span>Неправильный номер регистрационной анкеты или e-mail</span></div> 	<!-- Поставить диву display: block -->
							<input class="text-field" type="password" name="password" placeholder="Пароль">	
							<div class="wrong"><span>Неправильный пароль</span></div> 									<!-- Поставить диву display: block -->
							<label class="square-checker"><input type="checkbox" name="remember"><span></span><span class="remember">Запомнить</span></label>
							<span class="forgot"><a href="" title="Забыли пароль">Забыли пароль?</a></span>
							<div class="cleaner"></div>
							<a href="" class="personal-cab" title="Зарегистрировать личный кабинет">Зарегистрировать<br> личный кабинет</a>
							<input type="submit" class="login-btn" value="ВОЙТИ" name="login">
						</form>
						<div class="cleaner"></div>

						<p class="after-login"><span class="instead-what-img">?</span>Вы зарегистрированы в корпорации с помощью бумажной регистрационной анкеты? Чтобы получать самую актуальную информацию корпорации, зарегистрируйте свой Online-office.</p>
					</div>
				</div>	
				<div class="right-main">
					<div class="left-wrap">
						<p class="login-text">Если Вы не являетесь Консультантом корпорации TianDe, нажмите кнопку <span class="warning">“Регистрация”</span></p>
						<a href="" class="reg-btn">Регистрация</a>
						<p class="login-text">Получайте бонусы, экономьте деньги и время<br>при следующих покупках.<br><span class="warning">Регистрация займет всего 1 минуту</span></p>
					</div>
				</div>
		</div>
		<div class="cleaner"></div>
		<div class="wrap">
		</div>
		<div class="line"></div>
			<div class="copyr-new">Есть вопросы? Звони <a href="">+7 965 137 0181</a></div>

	</div>
</body>
</html>