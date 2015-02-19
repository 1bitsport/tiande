<?
require_once('header.php');
?>
<div class="restore">
	<div class="page-h">
		<h1>Восстановление пароля</h1>
	</div>
	<form class="restore-password" action="restore-pass-after-form.php">
		<ul class="general-restore">
			<li class="restore-step first active">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Анкета для восстановления доступа</h2>
				<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>
				<div class="form-content one active marginer">
					<label for="number-form">Для восстановления доступа к аккаунту укажите номер Вашей анкеты.</label>
					<input type="text" name="num-form" id="number-form" placeholder="Введите номер анкеты" class="for-change number">
					<a href="" class="continue active uppercase">Продолжить</a>
				</div>
				<div class="hide uppercase color-d-grey from-form marginer">
					<span>Анкета: </span><span class="updating"></span>
				</div>
			</li>


			<li class="restore-step second">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Выбор способа восстановления</h2>
				<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>
				<div class="form-content one hide marginer">
					<input class="for-change radio" type="radio" name="radio-restore" id="radio-email" data-texttitle="E-MAIL"><label class="radio-label" for="radio-email" onclick=""></label>
					<input class="for-change radio" type="radio" name="radio-restore" id="radio-eiac" data-texttitle="обращения в ЕИАЦ"><label class="radio-label" for="radio-eiac" onclick=""></label>
					<label>*Единый информационно-аналитический центр</label>
					<a href="" class="continue active uppercase">Продолжить</a>
				</div>
				<div class="hide uppercase color-d-grey from-form marginer">
					<span>Восстановление с помощью </span><span class="updating"></span>
				</div>
			</li>


			<li class="restore-step third">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Процедура восстановления</h2>
				<div class="form-content email hide marginer">
					<label for="number-form">На адрес электронной почты будет отправлена инструкция по восстановлению пароля.</label>
					<input type="text" name="user-email" id="user-email" placeholder="Введите ваш e-mail" class="for-change email">
					<a href="#next" class="continue active uppercase">Восстановить</a>
				</div>

				<div class="form-content eiac hide marginer">
					<input type="text" name="user-email" id="user-email-eiac" placeholder="Введите ваш e-mail" class="kadum_vonap not-styler email">
					<textarea class="kadum_vonap not-styler comment-field" placeholder="Введите Ваш комментарий"></textarea>
					<label>Загрузите отсканированную страницу Вашего паспорта (разворот с фотографией)</label>

					<div class="type_file">
					    <input type="file" size="28" class="inputFile kadum_vonap not-styler" onchange='document.getElementById("fileName").value=this.value' />
					    <div class="fonTypeFile"><a href="" class="uppercase browse send-form">ОБЗОР</a></div>
					    <input type="text" class="inputFileVal" readonly="readonly" id="fileName" />
					</div>
					<a href="restore-pass-after-form.php" class="kadum_vonap_button continue active uppercase">Восстановить</a>
				</div>
			</li>
		</ul>
		
	</form>
</div>
</main>
    <!--(/Основное содержание страницы)-->

    <footer>
    </footer>

  <!-- </div> -->



</body>
</html>