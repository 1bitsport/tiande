<?
require_once('header.php');
?>
<div class="restore restore-password">
	<div class="page-h">
		<div class="lock_svg"></div>
		<h1>Восстановление пароля</h1>
	</div>
	<form action="restore-pass-after-form.php">
		<ul class="general-restore">
			<li class="restore-step first active">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Анкета для восстановления доступа</h2>
				<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>
				<div class="form-content one active marginer validator">
					<label for="number-form">Для восстановления доступа к аккаунту укажите номер Вашей анкеты.</label>
					<input type="text" name="num-form" id="number-form" placeholder="Введите номер анкеты" class="nums_only importantField ">
					<span class="wrong">Ошибка какая-то ошибочка...</span>
					<!-- <a href="" class="continue active uppercase">Продолжить</a> -->
					<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">

				</div>
				<div class="infoblock dark-grey hide m-top20 font14">
					<table>
						<tr>
							<td>АНКЕТА: 999999</td>
						</tr>
					</table>
				</div>
			</li>


			<li class="restore-step second">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Выбор способа восстановления</h2>
				<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>
				<div class="form-content one hide marginer validator">
					<div class="radio-block">
						<input class="for-change radio" type="radio" name="radio-restore" id="radio-email" data-texttitle="E-MAIL" data-show="email"><label class="radio-label overlay-text" for="radio-email" onclick="">C ПОМОЩЬЮ E-MAIL</label>
						<input class="for-change radio" type="radio" name="radio-restore" id="radio-eiac" data-texttitle="обращения в ЕИАЦ" data-show="eiac"><label class="radio-label overlay-text" for="radio-eiac" onclick="">ОБРАЩЕНИЕ В ЕИАЦ*</label>
					</div>
					<label>*Единый информационно-аналитический центр</label>
					<!-- <a href="" class="continue active uppercase">Продолжить</a> -->
					<input type="submit" value="ПРОДОЛЖИТЬ" class="m-top20 send-form green-btn continue active">

				</div>
				<div class="infoblock dark-grey hide m-top20 font14">
					<table>
						<tr>
							<td>ВОССТАНОВЛЕНИЕ С ПОМОЩЬЮ C ПОМОЩЬЮ E-MAIL</td>
						</tr>
					</table>
				</div>
			</li>


			<li class="restore-step third">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Процедура восстановления</h2>
				<div class="form-content hide marginer">
					<div class="must_show email hide validator last-step">
						<label for="number-form">На адрес электронной почты будет отправлена инструкция по восстановлению пароля.</label>
						<input type="text" name="user-email" id="user-email" placeholder="Введите ваш e-mail" class="for-change email itsEmail importantField">
						<span class="wrong">Ошибка какая-то ошибочка...</span>
						<!-- <a href="#next" class="continue active uppercase">Восстановить</a> -->
						<!-- <input type="submit" class="continue send-form active uppercase" value="Восстановить"> -->
						<input type="submit" value="ВОССТАНОВИТЬ" class="m-top20 send-form green-btn continue active">

					</div>

					<div class="must_show eiac hide validator last-step">
						<input type="text" name="user-email" id="user-email-eiac" placeholder="Введите ваш e-mail" class="importantField itsEmail not-styler email">
						<span class="wrong">Ошибка какая-то ошибочка...</span>
						<textarea class="importantField not-styler tenSim comment-field" placeholder="Введите Ваш комментарий"></textarea>
						<span class="wrong">Ошибка какая-то ошибочка...</span>
						<label>Загрузите отсканированную страницу Вашего паспорта (разворот с фотографией)</label>

						<div class="type_file">
						    <input type="file" size="28" class="inputFile not-styler" onchange='document.getElementById("fileName").value=this.value; document.getElementById("fileName").focus(); document.getElementById("fileName").blur()' />
						    <div class="fonTypeFile"><a href="" class="uppercase browse send-form">ОБЗОР</a></div>
						    <input type="text" class="inputFileVal importantField" readonly="readonly" id="fileName" />
							<span class="wrong" style="margin-top: 30px;">Ошибка какая-то ошибочка...</span>
						</div>
						<!-- <a href="restore-pass-after-form.php" class="kadum_vonap_button continue active uppercase">Восстановить</a> -->
						<!-- <input type="submit" class="continue send-form active uppercase" value="Восстановить"> -->
						<input type="submit" value="ВОССТАНОВИТЬ" class="m-top20 send-form green-btn continue active">

					</div>
				</div>
			</li>
		</ul>
		
	</form>
</div>
<?
require_once('footer.php');
?>
