<?
require_once('header.php');
?>
<div class="restore">
	<div class="page-h">
		<div class="lock_svg"></div>
		<h1>Восстановление пароля</h1>
	</div>
	<form class="restore-password" action="" method="POST">
		<div class="inputs wrong">
		<h2>АНКЕТА: 101001 Иванов Иван Иванович</h2>
			<label>Для восстановления доступа укажите ваш новый пароль.</label>
			<input class="form-input" type="password" name="pass" placeholder="Введите новый пароль" id="">
			<span class="wrong posabsolute">Длина пароля минимум 6 символов</span>
			<input class="form-input" type="password" name="repeat-pass" placeholder="Подтвердите новый пароль" id="">
			<span class="wrong posabsolute">Введенные вами пароли не совпадают</span>
			<input type="submit" value="ПРОДОЛЖИТЬ" class="continue active uppercase">
		</div>
	</form>
</div>
<?
require_once('footer.php');
?>
