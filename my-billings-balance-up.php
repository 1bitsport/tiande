<?
require_once('header.php');
?>

		<div class="restore restore-password consultant_transfer service-center">
			<div class="page-h">
				<div class="portmone"></div>
				<h1>Пополнение персонального счета (EUR)</h1>
			</div>
			<div class="infoblock font14 ">
				<table>
					<tr>
						<td>Текущее состояние счета:</td>
						<td>500 руб.</td>
					</tr>
				</table>
			</div>
			<form action="">
				<ul class="general-restore">

					<li class="restore-step active">
						<div class="restore-circle"></div>				
						<h2 class="uppercase">Сумма операции</h2>

						<div class="form-content validator last-step">
							<p>Укажите сумму для пополнения счёта</p>
							<div class="input-parent balance_up m-top15">
								<label for="" class="">Сумма</label>
								<input type="text" class="form-input importantField itsNumber d-inline-block">
								<span class="wrong">Ещё какая нибудь ошибка...</span>
								<label for="" class="d-inline-block bold">EUR</label>
							</div>
							<div class="cleaner"></div>
							<input type="submit" value="ПОПОЛНИТЬ" class="f_left m-top20 send-form green-btn continue active">
							<div class="pay-methods">
				  				<ul>
				  					<li><img src="/img/pay/qiwi.png" alt=""></li>
				  					<li><img src="/img/pay/yand.png" alt=""></li>
				  					<li><img src="/img/pay/evro.png" alt=""></li>
				  					<li><img src="/img/pay/mastercard.png" alt=""></li>
				  				</ul>
				  				<ul>
				  					<li><img src="/img/pay/abank.png" alt=""></li>
				  					<li><img src="/img/pay/psbank.png" alt=""></li>
				  					<li><img src="/img/pay/vtb.png" alt=""></li>
				  					<li><img src="/img/pay/visa.png" alt=""></li>
				  				</ul>
				  			</div>
						</div>
					</li>

				</ul>
				
			</form>
		</div>
		<a href="#" class="autoclicker modal-viewer" data-key="#good_transfer_2">...</a>
		<div id="good_transfer_2" class="not-wide" style="display: none; position: relative;">
		<div class="expander">
			<p class="uppercase">ПОПОЛНЕНИЕ СЧЕТА ПРОШЛО УСПЕШНО!</p>
		</div>
		</div>



<?
require_once('footer.php');
?>