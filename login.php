<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Вход</title>
	<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" />
	<meta name="format-detection" content="telephone=no">
	<link href="css/login.css" rel="stylesheet" type="text/css">
	  <link href="js/jquery.scrollbar.css" rel="stylesheet" type="text/css">

	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	  <script src="js/idangerous.swiper.js"></script>
	  <script src="js/jquery.scrollbar.min.js"></script>
	  <script src="js/scripts.js"></script>

	<!--[if lt IE 9]>
		<script src="http://css3-pie.googlecode.com/svn/trunk/PIE_IE678.js"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if IE 9]>
		<script src="http://css3-pie.googlecode.com/svn/trunk/PIE_IE9.js"></script>
	<![endif]-->

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="login-main">
		<div id="header">
			<div class="headText"><span>Вход</span></div>
		</div>
		<div class="wrap">
			<form class="static-login" action="">
				<div class="left"><label class="checker"><input type="radio" name="service"><span></span><span class="service">Оnline Service Center</span></label></div>
				<div class="right"><label class="checker"><input type="radio" name="service"><span></span><span class="service">Оnline Office</span></label></div>
				<div class="cleaner"></div>
				<input class="text-field" type="text" name="login" placeholder="Номер регистрационной анкеты или e-mail">
				<div class="wrong"><span>Неправильный номер регистрационной анкеты или e-mail</span></div> 	<!-- Поставить диву display: block -->
				<input class="text-field" type="password" name="password" placeholder="Пароль">	
				<div class="wrong"><span>Неправильный пароль</span></div> 									<!-- Поставить диву display: block -->
				<label class="square-checker"><input type="checkbox" name="remember"><span></span><span class="remember">Запомнить</span></label>
				<span class="forgot"><a href="" title="Забыли пароль">Забыли пароль?</a></span>
				<div class="cleaner"></div>
				<a href="" class="personal-cab" title="Зарегистрировать личный кабинет">Зарегистрировать личный кабинет</a>
				<input type="submit" class="login-btn" value="ВОЙТИ" name="login">
			</form>
			<div class="cleaner"></div>

			<p class="after-login"><span class="instead-what-img">?</span>Вы зарегистрированы в корпорации с помощью бумажной регистрационной анкеты? Чтобы получать самую актуальную информацию корпорации, зарегистрируйте свой Online-office.</p>
			<span class="copyr"><a href="" title="Регистрация">Регистрация</a>, если у вас еще нет учетной записи TianDe</span>
		</div>	
		<div class="line"></div>
		<div class="wrap">
			<div class="copyr">Есть вопросы? Звони <span>+7 965 137 0181</span></div>
		</div>
	</div>
</body>
</html>