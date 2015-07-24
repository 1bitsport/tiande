<?
require_once('header.php');
?>
<div class="reports-page my-orders now-pay">
	<div class="report-menu">
		<div class="report-menu-container">
			<ul>
				<li class="">
					<div class="report-menu-icon report-menu-profile"></div>
					<a href="#"><span>М</span>ой профиль</a>
				</li>
				<li class="">
					<div class="report-corner-container">
						<div class="report-corner">
							<div class="report-menu-up"></div>
						</div>	
					</div>
					<div class="report-menu-icon report-menu-orders active"></div>
					<a href="#"><span>М</span>ои заказы</a>
				</li>
				<li class="">
					<div class="report-menu-icon report-menu-settings"></div>
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
		<div class="report-left-menu">
			<div class="report-left-menu-toggle report-left-menu-toggle-clicked"></div>
			<div class="report-left-content">
				<div id="catalog-filter">
					<form action="">
	                    <div class="item gray cb">
	                        <div class="title">ТИПЫ ЗАКАЗОВ:</div>
	                        <ul>
	                            <li>
	                                <input id="cs1" value="Y" type="checkbox"/>
	                                <label for="cs1">ПРОДУКЦИЯ</label>
	                            </li>
	                            <li>
	                                <input id="cs2" value="Y" type="checkbox"/>
	                                <label for="cs2">УСЛУГИ</label>
	                            </li>
	                            <li>
	                                <input id="cs5" value="Y" type="checkbox"/>
	                                <label for="cs5">БИЗНЕС-ИНСТРУМЕНТЫ</label>
	                            </li>
	                        </ul>  
	                        <div class="control">
	                            <a class="clear">сбросить</a>
	                        </div>
	                    </div>
	            	</form>
            	</div>
			</div>
	
		</div>
		<div class="report-content-in">
			<h2>ТЕКУЩИЕ ЗАКАЗЫ ДЛЯ ОПЛАТЫ</h2>
			<div class="report-main-filter">
				<form action="">
					<ul class="report-main-filter-stroke">
						<li style="padding-right: 5px">Период:</li>
						<li>
							<input type="text" placeholder="Введите значение"value="02.02.2014" name="" class="inputs-focus"/>
							<div class="report-datepicker"><img src="/img/report/datepicker.png" /></div>					
						</li>
						<li>&mdash;</li>
						<li>
							<input type="text" placeholder="Введите значение"value="02.02.2014" name="" class="inputs-focus" />
							<div class="report-datepicker"><img src="/img/report/datepicker.png" /></div>	
						</li>
						<!-- <li style="padding-left: 5px">или за <span>сегодня</span>  <a href="">неделю</a>  <a href="">месяц</a>  <a href="">квартал</a>  <a href="">полугодие</a>  <a href="">год</a></li>				 -->
						<li style="padding-left: 5px">или за <input class="not-styler" type="radio" checked name="period" id="today"><label for="today">сегодня</label><input class="not-styler" type="radio" name="period" id="week"><label for="week">неделю</label><input class="not-styler" type="radio" name="period" id="month"><label for="month">месяц</label><input class="not-styler" type="radio" name="period" id="quarter"><label for="quarter">квартал</label><input class="not-styler" type="radio" name="period" id="halfyear"><label for="halfyear">полугодие</label><input class="not-styler" type="radio" name="period" id="year"><label for="year">год</label></li>				<!-- Запилить скрипт на checked радио кнопок на ie8  -->
					</ul>
					<ul class="report-main-filter-additional">                
					</ul>
					<input type="submit" class="green-btn" value="ПОКАЗАТЬ"><a href="#" class="this-btn uppercase printer">Распечатать</a>
					<span class="saver d-inline-block font14 dark-grey">Сохранить: <a href="#" ></a></span>
				</form>
				<div class="cleaner m-bot20"></div>
				<div class="paginations m-top20">
					<div class="pagination  m-bot20">
						<a class="page current">1</a>
						<a href="#" class="page">2</a>
						<a href="#" class="page">3</a>
						<span class="dots page">...</span>
						<a href="#" class="page">999</a>
						<a href="#" class="next">&#9658;<!-- <img src="img/next-page.png" alt=""> --></a>
					</div>

					<div class="count-tr font14 light-grey">
						<span>Показывать по: </span>
						<a class="font14 current" href="#">10</a>
						<a class="font14" href="#">20</a>
						<a class="font14" href="#">30</a>
						<a class="font14" href="#">50</a>
						<a class="font14" href="#">ВСЕ</a>
					</div>

				</div>
				<!-- <div class="cleaner"></div> -->
				<div class="main-table">
					<table class="report-table">
						<thead class="">
							<tr>
								<th width="8%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Дата</a><a class="down-arrow" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="11%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">В резерве до</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="11%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">№ Заказа</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="14%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Сумма</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="14%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Сумма балл</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="24%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Получение</a></th>
								<th width="18%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Действие</a></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>21.10.2014</td>
								<td>02.09.2014</div></td>
								<td><a href="#">999 999 999</a></td>
								<td>9 999 999 999 руб</td>
								<td><span class="bonus-orange">9 999 999 Б</span></td>
								<td class="take_place">
									Доставка: 105006, <br>
									г. Усть-Длиннногорск<br>
									ул. Длиннноеоченьназвание<br>
									д. 9999, кв. 6666	
								</td>
								<td><a href="#" class="green-btn">ОПЛАТИТЬ</a></td>
							</tr>

							<tr>
								<td>21.10.2014</td>
								<td>02.09.2014</div></td>
								<td><a href="#">999 999 999</a></td>
								<td>9 999 999 999 руб</td>
								<td><span class="bonus-orange">9 999 999 Б</span></td>
								<td class="take_place">
									Доставка: 105006, <br>
									г. Усть-Длиннногорск<br>
									ул. Длиннноеоченьназвание<br>
									д. 9999, кв. 6666	
								</td>
								<td><a href="#" class="green-btn">ОПЛАТИТЬ</a></td>
							</tr>

							<tr>
								<td>21.10.2014</td>
								<td>02.09.2014</div></td>
								<td><a href="#">999 999 999</a></td>
								<td>9 999 999 999 руб</td>
								<td><span class="bonus-orange">9 999 999 Б</span></td>
								<td class="take_place">
									Доставка: 105006, <br>
									г. Усть-Длиннногорск<br>
									ул. Длиннноеоченьназвание<br>
									д. 9999, кв. 6666	
								</td>
								<td><a href="#" class="green-btn">ОПЛАТИТЬ</a></td>
							</tr>

							<tr>
								<td>21.10.2014</td>
								<td>02.09.2014</div></td>
								<td><a href="#">999 999 999</a></td>
								<td>9 999 999 999 руб</td>
								<td><span class="bonus-orange">9 999 999 Б</span></td>
								<td class="take_place">
									Доставка: 105006, <br>
									г. Усть-Длиннногорск<br>
									ул. Длиннноеоченьназвание<br>
									д. 9999, кв. 6666	
								</td>
								<td><a href="#" class="green-btn">ОПЛАТИТЬ</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table_itog m-top20 f_right">
					<table>
						<tr>
							<td>ИТОГО ПО СТРАНИЦЕ:&nbsp;</td>
							<td>9 999 999 руб</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td class="bonus-orange">9 999 999 Б</td>
						</tr>
					</table>
				</div>
				

				<!-- <div class="paginations m-top20">
					<div class="pagination">
						<a href="#" class="page next">&#9668;</a>
						<a class="page no-border">1</a>
						<span class="dots page">...</span>
						<a href="#" class="page">100499</a>
						<a class="page current">100500</a>
						<a href="#" class="page">100501</a>
						<span class="dots page">...</span>
						<a href="#" class="page">999</a>
						<a href="#" class="page next">&#9658; --> <!-- <img src="img/next-page.png" alt=""> --> <!-- </a>
					</div>
					<div class="cleaner"></div>
				</div> -->

				<button class="btn-show-next">ПОКАЗАТЬ ЕЩЁ</button>
			</div>
			
		</div>
		<div class="report-clear"></div>
	</div>
</div>


<?
require_once('footer.php');
?>
