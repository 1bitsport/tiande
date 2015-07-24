<?
require_once('header.php');
?>
<div class="restore restore-password settings-eiac dark-placeholder">
	<div class="page-h">
		<div class="user_eiac"></div>
		<h1>Запрос на изменение личных данных</h1>
	</div>
	<form action="">
		<ul class="general-restore">
			<li class="restore-step active">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Процедура изменения данных</h2>
				<div class="form-content active marginer validator last-step">
					<div class="input-parent">
						<input type="text" name="email" placeholder="Введите Ваш e-mail" class="form-input mid itsEmail importantField" id="">
						<span class="wrong">Ошибка ошибка ошибка ошибка</span>
					</div>
					<div class="input-parent">
						<textarea name="datas" class="form-input importantField" placeholder="Введите данные, которые Вы хотите изменить" id=""></textarea>
						<span class="wrong">Ошибка ошибка ошибка ошибка</span>
					</div>
					<div class="input-parent">
						<label>Загрузите отсканированную страницу Вашего паспорта (разворот с фотографией)</label>

						<div class="type_file">
						    <input type="file" size="28" class="inputFile not-styler" onchange='document.getElementById("fileName").value=this.value; document.getElementById("fileName").focus(); document.getElementById("fileName").blur()' />
						    <div class="fonTypeFile"><a href="#" class="uppercase browse send-form">ОБЗОР</a></div>
						    <input type="text" class="inputFileVal importantField" readonly="readonly" id="fileName" />
							<span class="wrong" style="margin-top: 30px;">Ошибка какая-то ошибочка...</span>
						</div>
					</div>
					<div class="input-parent">
						<input type="submit" class="continue green-btn active" value="ОТПРАВИТЬ ЗАПРОС">
					</div>
				</div>
			</li>
		</ul>
		
	</form>
</div>
<?
require_once('footer.php');
?>
