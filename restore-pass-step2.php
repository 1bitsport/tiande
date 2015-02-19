<?
require_once('header.php');
if(!isset($_GET['num-form'])){
	$step1 = true;
	$step2 = false;
	$step3 = false;
} elseif(!isset($_GET['radio-restore'])) {
	$step1 = false;
	$step2 = true;
	$step3 = false;
} elseif(isset($_GET['radio-restore']) && isset($_GET['num-form'])){
	$step1 = false;
	$step2 = false;
	$step3 = true;
}
if($_GET['step1'] == y) {
	$step1 = true;
	$step2 = false;
	$step3 = false;
}

if($_GET['step2'] == y) {
	$step1 = false;
	$step2 = true;
	$step3 = false;
}
$email = "E-MAIL";
$eiac = "обращения в ЕИАЦ";
?>
<div class="restore">
	<div class="page-h">
		<h1>Восстановление пароля</h1>
	</div>
	<form class="restore-password" action="" method="GET">
		<ul class="general-restore">
			<li class="restore-step first <?if($step1):?>active<?endif?><?if($step2):?>done<?endif?><?if($step3):?>done<?endif?>">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Анкета для восстановления доступа</h2>
				<a href="restore-pass-step2.php?step1=y" class="this-btn change <?if($step1):?> hide <?endif?> uppercase posabsolute">ИЗМЕНИТЬ</a>
				<div class="form-content one <?if(!$step1):?> hide <?endif?> active marginer">
					<label for="number-form">Для восстановления доступа к аккаунту укажите номер Вашей анкеты.</label>
					<input type="text" name="num-form" id="number-form" placeholder="Введите номер анкеты" class="for-change number" value="<?=$_GET['num-form']?>">
					<input type="submit" value="ПРОДОЛЖИТЬ" class="continue active uppercase">
				</div>
				<?if(!$step1):?>
				<div class=" uppercase color-d-grey from-form marginer">
					<span>Анкета: </span><span class="updating"><?=$_GET['num-form']?></span>
				</div>
				<?endif?>
			</li>


			<li class="restore-step second <?if($step2):?>active<?endif?><?if($step3):?>done<?endif?>">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Выбор способа восстановления</h2>
				<a href="restore-pass-step2.php?step2=y&num-form=<?=$_GET['num-form']?>" class="this-btn change <?if($step1 || $step2):?> hide <?endif?> uppercase posabsolute">ИЗМЕНИТЬ</a>
				<div class="form-content one marginer <?if(!$step2):?> hide <?endif?>">
					<input class="for-change radio" type="radio" name="radio-restore" value="email" id="radio-email" data-texttitle="E-MAIL"><label class="radio-label" for="radio-email" onclick=""></label>
					<input class="for-change radio" type="radio" name="radio-restore" value="eiac" id="radio-eiac" data-texttitle="обращения в ЕИАЦ"><label class="radio-label" for="radio-eiac" onclick=""></label>
					<label>*Единый информационно-аналитический центр</label>
					<input type="submit" value="ПРОДОЛЖИТЬ" class="continue active uppercase">
				</div>
				<?if(!$step2):?>
				<div class="uppercase color-d-grey from-form marginer">
					<span>Восстановление с помощью </span><span class="updating"><?if($_GET['radio-restore'] == 'email') echo $email; else echo $eiac;?></span>
				</div>
				<?endif?>
			</li>


			<li class="restore-step third <?if($step3):?>active<?endif?>">
				<div class="restore-circle"></div>				
				<h2 class="uppercase">Процедура восстановления</h2>
				<? if($_GET['radio-restore'] == 'email'):?>
				<div class="form-content email marginer">
					<label for="number-form">На адрес электронной почты будет отправлена инструкция по восстановлению пароля.</label>
					<input type="text" name="user-email" id="user-email" placeholder="Введите ваш e-mail" class="for-change email">
					<a href="#next" class="continue active uppercase">Восстановить</a>
				</div>
				<?endif;?>
				<?if($_GET['radio-restore'] == 'eiac'):?>
				<div class="form-content eiac marginer">
					<input type="text" name="user-email" id="user-email-eiac" placeholder="Введите ваш e-mail" class="for-change email">
					<textarea class="comment-field" placeholder="Введите Ваш комментарий"></textarea>
					<label>Загрузите отсканированную страницу Вашего паспорта (разворот с фотографией)</label>

					<div class="type_file">
					    <input type="file" size="28" class="inputFile" />
					    <div class="fonTypeFile"><a href="" class="uppercase browse send-form">ОБЗОР</a></div>
					    <input type="text" class="inputFileVal" readonly="readonly" id="fileName" />
					</div>
					<a href="restore-pass-after-form.php" class="continue active uppercase">Восстановить</a>
				</div>
				<?endif?>
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