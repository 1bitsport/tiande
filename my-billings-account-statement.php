<?
require_once('header.php');
?>
<div class="reports-page my-billings">
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
					<div class="report-menu-icon report-menu-settings"></div>
					<a href="#"><span>М</span>ои настройки</a>
				</li>
				<li class="">
					<div class="report-corner-container">
						<div class="report-corner">
							<div class="report-menu-up"></div>
						</div>	
					</div>
					<div class="report-menu-icon report-menu-score active"></div>
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

		<div class="report-content-in account-statement">
			<h2 class="dop-functional">
				<span>ВЫПИСКА ПО СЧЕТУ: </span>
				<div class="inputer">
					<a href="#" class="equality list"><span class="little-arrow"><i></i></span></a>
					<input type="text" placeholder="Введите значение" class="inputs-focus" name="type_check" id="type_chek">

					<ul class="dropdown-town select">
					   <li data-value="Персональный счёт (РУБ)">Персональный счёт (РУБ)</li>
					   <li data-value="Персональный счёт (EUR)">Персональный счёт (EUR)</li>
					   <li data-value="Бонусный счёт (РУБ)">Бонусный счёт (РУБ)</li>
					</ul>
					<select name="" id="" class="equality-select nojs-sort" >
						<option value="1">=</option>
						<option value="2">&gt;</option>
					</select>
				</div>
				<div class="wallet personal">
					<div class="operations">
						<div class="has-popup">
							<a href="#" class="">Добавить операцию</a><span class="arrow"></span>
							<i></i>
							<div class="popup">
								<div class="content">
									<a class="pay" href="#">Оплатить заказ</a>
									<a class="up_balance" href="#">Пополнить счет</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</h2>
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
				<span class="slide-content-h slide-up"><span class="border-dot-black">Показать дополнительные фильтры</span>
					<span class="what">
			            <span class="instead-what-img">?</span>
			            <i></i>
			            <div class="popup">
			              <div class="content">
			                <h4 class="uppercase font12">Строка отборов</h4>
			                <p class="font12">Для поиска или отбора введите в появившемся поле значение по интереующему параметру.</p>
			              </div>
			            </div>
		          	</span>
					<span class="slider-arrow"></span>
				</span>
				<div class="additional-filters">
					<form>
						<div class="inputer">
							<label for="the-place" class="font14 dark-grey">Приход:</label>
							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="prihod" id="prihod">
							<span class="posabsolute font10 reset">сбросить</span>
							<ul class="dropdown-town">
							   <li data-btn="=" data-value="Равно (=)">Равно (=)</li>
							   <li data-btn=">" data-value="Больше (>)">Больше (&gt;)</li>
							   <li data-btn="<" data-value="Меньше (<)">Меньше (&lt;)</li>
							   <li data-btn="<=" data-value="Меньше или равно (<=)">Меньше или равно (&lt; =)</li>
							   <li data-btn=">=" data-value="Больше или равно (>=)">Больше или равно (&gt; =)</li>
							   <li data-btn="<>" data-value="Не равно (<>)">Не равно (&lt;&gt;)</li>
							</ul>
							<select name="" id="" class="equality-select nojs-sort" >
								<option value="1">=</option>
								<option value="2">&gt;</option>
								<option value="3">&lt;</option>
								<option value="4">&lt; =</option>
								<option value="5">&gt; =</option>
								<option value="6">&lt;&gt;</option>
							</select>
						</div>

						<div class="inputer">
							<label for="the-place" class="font14 dark-grey">Расход:</label>
							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="rashod" id="rashod">
							<span class="posabsolute font10 reset">сбросить</span>
							<ul class="dropdown-town">
							   <li data-btn="=" data-value="Равно (=)">Равно (=)</li>
							   <li data-btn=">" data-value="Больше (>)">Больше (&gt;)</li>
							   <li data-btn="<" data-value="Меньше (<)">Меньше (&lt;)</li>
							   <li data-btn="<=" data-value="Меньше или равно (<=)">Меньше или равно (&lt; =)</li>
							   <li data-btn=">=" data-value="Больше или равно (>=)">Больше или равно (&gt; =)</li>
							   <li data-btn="<>" data-value="Не равно (<>)">Не равно (&lt;&gt;)</li>
							</ul>
							<select name="" id="" class="equality-select nojs-sort" >
								<option value="1">=</option>
								<option value="2">&gt;</option>
								<option value="3">&lt;</option>
								<option value="4">&lt; =</option>
								<option value="5">&gt; =</option>
								<option value="6">&lt;&gt;</option>
							</select>
						</div>

						<div class="inputer">
							<label for="success-clients" class="font14 dark-grey">Операция</label>

							<a href="#" class="equality list"><span class="little-arrow"><i></i></span></a>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="operation" id="operat">
							<span class="posabsolute font10 reset">сбросить</span>

							<ul class="dropdown-town select">
							   <li data-value="Перевод консультанту">Перевод консультанту</li>
							   <li data-value="Оплата заказа">Оплата заказа</li>
							   <li data-value="Перевод на Сервисный центр">Перевод на Сервисный центр</li>
							</ul>
							<select name="" id="" class="equality-select nojs-sort" >
								<option value="1">=</option>
								<option value="2">&gt;</option>
							</select>
						</div>

						
						<div class="cleaner"></div>
						
						<input type="submit" class="green-btn uppercase f-right" value="Фильтровать">
					</form>
					<div class="cleaner"></div>
				</div>
				
				<div class="balance_statistic">
					<div class="statistic_container">
						<div class="start_period">
							<h4>Баланс на начало периода</h4>
							<span>9 999 999 999 руб.</span>
						</div>
					</div>

					<div class="statistic_container">
						<div class="general_take">
							<h4>Общий приход за период</h4>
							<span>0 руб.</span>
						</div>
					</div>

					<div class="statistic_container">	
						<div class="general_give">
							<h4>Общий расход за период</h4>
							<span>9 999 999 999 руб.</span>
						</div>
					</div>

					<div class="statistic_container">
						<div class="end_period">
							<h4>Баланс на конец периода</h4>
							<span>100 руб.</span>
						</div>
					</div>
				</div>

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
				<div class="main-table hoverable">
					<table class="report-table font12">
						<thead class="">
							<tr>
								<th width="10%" class="uppercase posrelative font12 "><a href="#" class="border-dot-grey">Дата</a><a class="down-arrow" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="40%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Описание</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="15%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Приход</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="15%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Расход</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th width="20%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Операции</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>21.10.2014</td>
								<td><a href="#">Пополнение счета QIWI</a></td>
								<td></td>
								<td>1000</td>
								<td>Оплата заказа</td>
							</tr>

							<tr>
								<td>21.10.2014</td>
								<td>Пополнение счета QIWI</td>
								<td>9 999 999 999</td>
								<td></td>
								<td>Оплата заказа</td>
							</tr>

							<tr>
								<td>21.10.2014</td>
								<td><a href="#">Пополнение счета QIWI</a></td>
								<td>9 999 999 999</td>
								<td></td>
								<td>Оплата заказа</td>
							</tr>

							<tr>
								<td>21.10.2014</td>
								<td><a href="#">Перевод на сервисный центр ДЦ Коломенское №22 ...</a></td>
								<td></td>
								<td>500</td>
								<td>Оплата заказа</td>
							</tr>
						</tbody>
						<tfoot>
							<tr class="report-separator">
								<td colspan="5">&nbsp;</td>
							</tr>
							<tr>
								<td>Итого:</td>
								<td></td>
								<td>500</td>
								<td>500</td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="paginations m-top20">
					<div class="pagination">
						<a href="#" class="page next">&#9668;</a>
						<a class="page no-border">1</a>
						<span class="dots page">...</span>
						<a href="#" class="page">100499</a>
						<a class="page current">100500</a>
						<a href="#" class="page">100501</a>
						<span class="dots page">...</span>
						<a href="#" class="page">999</a>
						<a href="#" class="page next">&#9658;<!-- <img src="img/next-page.png" alt=""> --></a>
					</div>
					<div class="cleaner"></div>
				</div>
			</div>
			
		</div>
		<div class="report-clear"></div>
	</div>
</div>


<?
require_once('footer.php');
?>
