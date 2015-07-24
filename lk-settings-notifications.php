<?
require_once('header.php');
?>

<div class="reports-page site-settings notifications">
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
						<li><a href="#">СМЕНА ПАРОЛЯ</a></li>
						<li class="selected"><a href="#">УВЕДОМЛЕНИЯ</a></li>
						<li><a href="#">НАСТРОЙКИ САЙТА</a></li>			
					</ul>
				</div>
			</div>
			<div class="report-content-in">
				<form action="">
					<h2>УВЕДОМЛЕНИЯ</h2>
					
					<div class="settings-inner">
						<p class="small">
							Отметьте те события, информацию о которых Вы хотите получать по SMS или электронной почте.
						</p>

						<table>
							<thead>
								<tr>
									<th width="200px">&nbsp;</th>
									<th width="70px">E-mail</th>
									<th width="70px">Sms</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Товарные спецпредложения</td>
									<td><input type="checkbox" name="" id=""></td>
									<td><input type="checkbox" name="" id=""></td>
								</tr>
								<tr>
									<td>Рассылка на новости</td>
									<td><input type="checkbox" name="" id=""></td>
									<td><input type="checkbox" name="" id=""></td>
								</tr>
								<tr>
									<td>Срок резерва товара</td>
									<td><input type="checkbox" name="" id=""></td>
									<td><input type="checkbox" name="" id=""></td>
								</tr>
								<tr>
									<td>Создание заказа</td>
									<td><input type="checkbox" name="" id=""></td>
									<td><input type="checkbox" name="" id=""></td>
								</tr>
								<tr>
									<td>Изменения статуса заказа</td>
									<td><input type="checkbox" name="" id=""></td>
									<td><input type="checkbox" name="" id=""></td>
								</tr>
							</tbody>
						</table>

						<div class="language">
							<span>Язык уведомлений</span>
							<div class="has-popup lang">
						        <img src="/img/flags/ru.gif">
						        <i></i>
						        <div class="popup center menu">
									<div class="content">
										<a href="#1"><img src="/img/flags/ru.gif"></a>
										<a href="#1"><img src="/img/flags/hg.gif"></a>
										<a href="#1"><img src="/img/flags/it.gif"></a>
										<a href="#1"><img src="/img/flags/bl.gif"></a>
										<a href="#1"><img src="/img/flags/en.gif"></a>
										<a href="#1"><img src="/img/flags/cz.gif"></a>
									</div>
						        </div>
			      			</div>
			      		</div>
						<div class="cleaner"></div>

						<input type="submit" value="СОХРАНИТЬ" class="continue green-btn send-form sbm" name="sbm_settings">
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