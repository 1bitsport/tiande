<?
require_once('header.php');
?>
<div class="reports-page">
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
					<div class="report-menu-icon report-menu-score"></div>
					<a href="#"><span>М</span>ои счета</a>
				</li>
				<li class="">
					<div class="report-corner-container">
						<div class="report-corner">
							<div class="report-menu-up"></div>
						</div>	
					</div>
					<div class="report-menu-icon report-menu-report active"></div>
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
				<p><a href="">БОНУСНАЯ ПРОГРАММА</a></p>
				<ul>
					<li><a href="">FASTER-BONUS УП OSC</a></li>
					<li><a href="">FASTER-BONUS БП OSC</a></li>
					<li><a href="">МАРКЕТИНГ ПЛАН OSC</a></li>
					<li><a href="">ФОНД OSC</a></li>			
				</ul>
				<p><a href="">МОЯ СТРУКТУРА OSC*</a></p>
				<ul>
					<li><a href="">СТРУКТУРА ПО УРОВНЯМ OSC</a></li>
					<li><a href="">ЗАКАЗЫ OSC* МОЕЙ СТРУКТУРЫ</a></li>
					<li class="selected"><a href="">РЕЙТИНГ БП OSC</a></li>
					<li><a href="">АВТОРЕКРУТИНГ</a></li>			
				</ul>
			</div>
		</div>
		<div class="report-content-in">
			<form action="">
				<h2>ОТЧЕТ: <a href="">РЕЙТИНГ БП OSC</a></h2>
				<div class="report-main-filter">
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
						<li style="padding-left: 5px">или за <span>сегодня</span>  <a href="">неделю</a>  <a href="">месяц</a>  <a href="">квартал</a>  <a href="">полугодие</a>  <a href="">год</a></li>				
					</ul>
					<ul class="report-main-filter-additional">                
						<li>
							<input id="cfirst" type="radio" name="report-filter"/>
							<label for="cfirst">Рейтинг по ЛО OSC</label>
						</li>
						<li>
							<input id="csecond" type="radio" name="report-filter"/>
							<label for="csecond">Рейтинг по СО OSC</label>
						</li>
						<li>
							<input id="cthird" type="radio" name="report-filter"/>
							<label for="cthird">Рейтинг по количеству Бизнес-партнеров OSC в первом уровне</label>
						</li>

						<li>
							<input id="cfour" type="radio" name="report-filter"/>
							<label for="cfour">Рейтинг по количеству Успешных покупателей OSC в первом уровне с ЛО OSC</label>
							<input type="text" placeholder="" class="inputs-focus short-field nums_only" name="num" id="num-anket">
							<label for="cthird">Баллов</label>
						</li>
					</ul>
					<a href="#" class="green-btn uppercase">Показать</a><a href="#" class="this-btn uppercase  printer">Распечатать</a>
					<span class="saver d-inline-block font14 dark-grey">Сохранить: <a href="#"></a></span>
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
						<form action="">
						<div class="inputer">
							<label for="the-place" class="font14 dark-grey">Место</label>
							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="place" id="the-place">
							<span href="#" class="posabsolute font10 reset">сбросить</span>
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
							<label for="num-anket" class="font14 dark-grey">Номер анкеты</label>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="num" id="num-anket">
							<span href="#" class="posabsolute font10 reset">сбросить</span>
						</div>

						<div class="inputer">
							<label for="fio" class="font14 dark-grey">ФИО</label>
							<input type="text" placeholder="Введите значение" class="inputs-focus"  name="fio" id="fio">
							<span href="#" class="posabsolute font10 reset">сбросить</span>
						</div>

						<div class="inputer">
							<label for="sponsor-anket" class="font14 dark-grey">Номер анкеты Спонсора</label>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="spnsr-num" id="sponsor-anket">
							<span href="#" class="posabsolute font10 reset">сбросить</span>
						</div>

						<div class="inputer wrong">
							<label for="sponsor" class="font14 dark-grey">Спонсор</label>
							<input type="text" placeholder="Введите значение" class="inputs-focus wrong" name="spnsr" id="sponsor">
							<span class="wrong">Неверный формат ввода значения</span>
							<span href="#" class="posabsolute font10 reset">сбросить</span>
						</div>

						<div class="inputer">
							<label for="reg-date" class="font14 dark-grey">Дата регистрации</label>
							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="reg-date" id="reg-date">
							<div class="report-datepicker"><img src="/img/report/datepicker.png" /></div>
							<span href="#" class="posabsolute font10 reset">сбросить</span>
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
							<label for="success-clients" class="font14 dark-grey">Успешных покупателей OSC</label>

							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="happy-clients" id="success-clients">
							<span href="#" class="posabsolute font10 reset">сбросить</span>

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
						<div class="cleaner"></div>
						<a href="#" class="green-btn uppercase f-right">Фильтровать</a>
						<div class="cleaner"></div>
						</form>
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
					<div class="cleaner"></div>
					<div class="main-table">
						<table class="report-table font12">
							<thead class="">
								<tr>
									<th width="8.6%" class="uppercase posrelative font12 "><a href="#" class="border-dot-grey">Место</a><a class="down-arrow" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="11%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Номер анкеты</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="16.6%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">ФИО</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="13.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Номер анкеты Спонсора</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="16.6%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Спонсор</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="13.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Дата регистрации</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="20.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Успешных покупателей OSC в 1 уровне</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a>`</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>5</td>
								</tr>

								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>5</td>
								</tr>
								
								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>5</td>
								</tr>

							</tbody>
							<tfoot>
								<tr>
									<td>ИТОГО</td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td>500</td>
								</tr>
							</tfoot>
						</table>

						<table class="report-table font12">
							<thead class="">
								<tr>
									<th width="8.6%" class="uppercase posrelative font12 "><a href="#" class="border-dot-grey">Место</a><a class="down-arrow" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="11%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Номер анкеты</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="16.6%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">ФИО</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="13.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Номер анкеты Спонсора</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="16.6%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Спонсор</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="13.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Дата регистрации</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="20.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Количество Бизнес-партнеров в OSC</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a>`</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>5</td>
								</tr>

								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>5</td>
								</tr>
								
								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>5</td>
								</tr>

							</tbody>
							<tfoot>
								<tr>
									<td>ИТОГО</td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td>500</td>
								</tr>
							</tfoot>
						</table>

						<table class="report-table font12">
							<thead class="">
								<tr>
									<th width="8.6%" class="uppercase posrelative font12 "><a href="#" class="border-dot-grey">Место</a><a class="down-arrow" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="11%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Номер анкеты</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="16.6%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">ФИО</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="13.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Номер анкеты Спонсора</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="16.6%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Спонсор</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="13.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Дата регистрации</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
									<th width="20.4%" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">ЛО OSC,<br><span style="text-transform:lowercase;">балл</span></a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a>`</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>500</td>
								</tr>

								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>500</td>
								</tr>
								
								<tr>
									<td>1</td>
									<td>100</td>
									<td>Иванов Иван</td>
									<td>123 4567</td>
									<td>Петров Антон</td>
									<td>21.10.2014</td>
									<td>500</td>
								</tr>

							</tbody>
							<tfoot>
								<tr>
									<td>ИТОГО</td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td>500</td>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="paginations m-top20">
						<div class="pagination">
							<a class="page current">1</a>
							<a href="#" class="page">2</a>
							<a href="#" class="page">3</a>
							<span class="dots page">...</span>
							<a href="#" class="page">999</a>
							<a href="#" class="next">&#9658;<!-- <img src="img/next-page.png" alt=""> --></a>
						</div>
						<div class="cleaner"></div>
						<!-- <ul class="distributers">
							<li class="first"> - Новый дистрибьютор</li>
							<li class="second"> - Новый бизнес-партнер OSC</li>
							<li class="third"> - Дистрибьютор</li>
						</ul>
						<div class="cleaner"></div>
						<div class="compression-info">
							<span class="d-inline-block pic"></span><span class="text"> - консультанты с компрессией</span>
						</div> -->
					</div>
				</div>
			</form>
		</div>
		<div class="report-clear"></div>
	</div>
</div>


<?
require_once('footer.php');
?>
