<?
require_once('header.php');
?>
<div id="reg-cab" class="restore">
	<div class="page-h">
		<h1>Регистрация личного кабинета</h1>
	</div>
	<form class="restore-password" action="reg-cab-final.php">
		<ul class="general-restore">
			<li class="restore-step first active">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Анкета для регистрации</h2>
				<a href="" class="this-btn change hide uppercase posabsolute">ИЗМЕНИТЬ</a>
				<div class="form-content one active marginer">
					<label for="number-form">Для регистрации личного кабинета укажите номер Вашей анкеты.</label>
					<input type="text" name="num-form" id="number-form" placeholder="Введите номер анкеты" class="for-change number">
					<a href="" class="continue active uppercase">Продолжить</a>
				</div>
				<div class="hide uppercase color-d-grey from-form marginer">
					<span>Анкета: </span><span class="updating"></span>
				</div>
			</li>


			<li class="restore-step third">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Процедура регистрации</h2>

				<div class="form-content one hide">
					<div class="input-parent">
						<input type="text" name="last-name" id="" placeholder="Фамилия" class="for-change form-input mid">
					</div>
					<div class="input-parent">
						<input type="text" name="first-name" id="" placeholder="Имя" class="for-change form-input mid">
					</div>
					<div class="input-parent">
						<input type="text" name="middle-name" id="" placeholder="отчество" class="for-change form-input mid">
					</div>
					
					<div class="cleaner"></div>

					<div class="input-parent mid">
						<input type="text" name="birthday" id="" placeholder="Дата рождения" class="for-change form-input short d-inline-block">
						<span class="calendarik"><img src="/img/calendarik.png" alt=""></span>
					</div>

					<div class="cleaner"></div>

					<div class="input-parent">
						<input type="text" name="email" id="" placeholder="E-mail" class="for-change form-input mid">
					</div>
					<div class="input-parent">
						<input type="text" name="phone" id="" placeholder="Телефон: +x (xxx) xxx xxx xx xx" class="for-change form-input mid">
					</div>

					<div class="cleaner"></div>

					<div class="input-parent">
						<textarea class="comment-field" placeholder="Введите Ваш комментарий"></textarea>
					</div>
					<div class="cleaner"></div>
					<label>Загрузите отсканированную страницу Вашего паспорта (разворот с фотографией)</label>

					<div class="type_file wrong">
					    <input type="file" size="28" class="inputFile" onchange='document.getElementById("fileName").value=this.value' />
					    <div class="fonTypeFile"><a href="" class="uppercase browse send-form">ОБЗОР</a></div>
					    <input type="text" class="inputFileVal" readonly="readonly" id="fileName" />

					</div>
					<span class="wrong">Необходимо загрузить файл</span>
					<div class="cleaner"></div>
					<input type="submit" value="ЗАРЕГИСТРИРОВАТСЬЯ" class="m-top20 send-form green-btn active uppercase">
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