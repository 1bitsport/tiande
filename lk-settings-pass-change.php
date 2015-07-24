<?
require_once('header.php');
?>

<div class="reports-page site-settings pass-change">
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
					<div class="report-corner-container">
						<div class="report-corner">
							<div class="report-menu-up"></div>
						</div>	
					</div>
					<div class="report-menu-icon report-menu-settings active"></div>
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
					<div class="report-menu-icon report-menu-feedback"></div>
					<a href="#"><span>О</span>братная связь</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-info"></div>
					<a href="#"><span>И</span>нформация</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-office"></div>
					<a href="#"><span>О</span>нлайн офис</a>
				</li>
			</ul>
		</div>	
	</div>
	<div class="report-content">
		<form action="">
			<div class="report-left-menu">
				<div class="report-left-content">
					<p><a href="#">МОИ НАСТРОЙКИ</a></p>
					<ul>
						<li><a href="#">ЛИЧНЫЕ ДАННЫЕ</a></li>
						<li class="selected"><a href="#">СМЕНА ПАРОЛЯ</a></li>
						<li><a href="#">УВЕДОМЛЕНИЯ</a></li>
						<li><a href="#">НАСТРОЙКИ САЙТА</a></li>			
					</ul>
				</div>
			</div>
			<div class="report-content-in dark-placeholder">
				<form action="">
					<h2>СМЕНА ПАРОЛЯ</h2>
					<div class="marginer validator last-step">
						<div class="input-parent">
							<input type="password" placeholder="Введите старый пароль" name="m_old_pass" id="m_old_pass" class="form-input">
							<span class="wrong">Ошибка</span>
						</div>
						<div class="input-parent">
							<p>
								ПАРОЛЬ ДОЛЖЕН СОДЕРЖАТЬ ТОЛЬКО БУКВЫ ЛАТИНСКОГО АЛФАВИТА И ЦИФРЫ. 
								МИНИМАЛЬНАЯ ДЛИНА ПАРОЛЯ: 8 СИМВОЛОВ
							</p>
							<input type="password" placeholder="Введите новый пароль" name="m_new_pass" id="m_new_pass" class="form-input reg_password itsPass">
							<span class="wrong">Ошибка</span>
						</div>
						<div class="input-parent">
							<input type="password" placeholder="Повторите ввод нового пароля" name="m_repeat_pass" id="m_repeat_pass" class="form-input reg_password repeater itsPass">
							<span class="wrong">Ошибка</span>
						</div>
						<div class="positioner">
							<input type="submit" value="СОХРАНИТЬ" class="continue active send-form">
						</div>
					</div>
				</form>
				<form action="">
					<h2 class="m-top20">СМЕНА ФИНАНСОВОГО ПАРОЛЯ</h2>
					<div class="marginer validator last-step">
						<div class="input-parent">
							<input type="password" placeholder="Введите старый пароль" name="f_old_pass" id="f_old_pass" class="form-input">
							<span class="wrong">Ошибка</span>
						</div>
						<div class="input-parent">
							<p>
								ПАРОЛЬ ДОЛЖЕН СОДЕРЖАТЬ ТОЛЬКО БУКВЫ ЛАТИНСКОГО АЛФАВИТА И ЦИФРЫ. 
								МИНИМАЛЬНАЯ ДЛИНА ПАРОЛЯ: 8 СИМВОЛОВ
							</p>
							<input type="password" placeholder="Введите новый пароль" name="f_new_pass" id="f_new_pass" class="form-input reg_password itsPass">
							<span class="wrong">Ошибка</span>
						</div>
						<div class="input-parent">
							<input type="password" placeholder="Повторите ввод нового пароля" name="f_repeat_pass" id="f_repeat_pass" class="form-input reg_password repeater itsPass">
							<span class="wrong">Ошибка</span>
						</div>
						<div class="positioner">
							<input type="submit" value="СОХРАНИТЬ" class="continue active send-form">
						</div>
					</div>

				</form>
			</div>
			<div class="report-clear"></div>
		</form>
	</div>
</div>

<?
require_once('footer.php');		
?>