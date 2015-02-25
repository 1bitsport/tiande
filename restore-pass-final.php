<?
require_once('header.php');
?>
<div class="restore">
	<div class="page-h">
		<h1>Восстановление пароля</h1>
	</div>
	<form class="restore-password" action="" method="POST">
		<div class="inputs">
		<h2>АНКЕТА: 101001 Иванов Иван Иванович</h2>
			<label>Для восстановления доступа укажите ваш новый пароль.</label>
			<input class="form-input" type="password" name="pass" placeholder="Введите новый пароль" id="">
			<input class="form-input" type="password" name="repeat-pass" placeholder="Подтвердите новый пароль" id="">
			<input type="submit" value="ПРОДОЛЖИТЬ" class="continue active uppercase">
		</div>
	</form>
</div>

<?
require_once('footer.php');
?>
