<?
	require_once("header.php");
?>
<div class="report-modal">
	<div class="report-content">
			<h2>РАСШИФРОВКА: <a href="">ФОНД OSC</a> (1 УРОВЕНЬ МАЙ 2014)</h2>
			<div class="report-main-filter">
			<form action="">
				<ul class="report-main-filter-stroke m-bot20">
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
				</form>
				<a href="#" class="green-btn uppercase">Показать</a><a href="#" class="this-btn uppercase">Распечатать</a><a href="#" class="this-btn uppercase">Показать в отдельном окне</a>
				<span class="saver d-inline-block font14 dark-grey">Сохранить: <a href="#" ><img src="img/saver.gif" alt=""></a></span>
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
						<label for="date" class="font14 dark-grey">Дата:</label>
						<a href="#" class="equality"><span class="any-icon">=</span><span class="little-arrow"><i></i></span>
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="" id="date">
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
					</div>

					<div class="inputer">
						<label for="numank" class="font14 dark-grey">Номер анкеты:</label>
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="numank" id="numank">
						<span href="#" class="posabsolute font10 reset">сбросить</span>
					</div>

					<div class="inputer">
						<label for="fio" class="font14 dark-grey">ФИО:</label>
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="" id="fio">
						<span href="#" class="posabsolute font10 reset">сбросить</span>
					</div>

					<div class="inputer">
						<label for="numspnsr" class="font14 dark-grey">Номер спонсора:</label>				
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="bonusball" id="numspnsr">
						<span href="#" class="posabsolute font10 reset">сбросить</span>
					</div>

					<div class="inputer">
						<label for="spnsr" class="font14 dark-grey">Спонсор:</label>
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="spnsr" id="spnsr">
						<span href="#" class="posabsolute font10 reset">сбросить</span>
					</div>

					<div class="inputer">
						<label for="ordball" class="font14 dark-grey">Заказы, балл:</label>
						<a href="#" class="equality"><span class="any-icon">=</span><span class="little-arrow"><i></i></span>					
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="ordball" id="ordball">
						<span href="#" class="posabsolute font10 reset">сбросить</span>

						<ul class="dropdown-town">
						   <li data-btn="=" data-value="Равно (=)">Равно (=)</li>
						   <li data-btn=">" data-value="Больше (>)">Больше (&gt;)</li>
						   <li data-btn="<" data-value="Меньше (<)">Меньше (&lt;)</li>
						   <li data-btn="<=" data-value="Меньше или равно (<=)">Меньше или равно (&lt; =)</li>
						   <li data-btn=">=" data-value="Больше или равно (>=)">Больше или равно (&gt; =)</li>
						   <li data-btn="<>" data-value="Не равно (<>)">Не равно (&lt;&gt;)</li>
						</ul>
					</div>

					<div class="inputer">
						<label for="pc" class="font14 dark-grey">%:</label>
						<a href="#" class="equality"><span class="any-icon">=</span><span class="little-arrow"><i></i></span>					
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="pc" id="pc">
						<span href="#" class="posabsolute font10 reset">сбросить</span>

						<ul class="dropdown-town">
						   <li data-btn="=" data-value="Равно (=)">Равно (=)</li>
						   <li data-btn=">" data-value="Больше (>)">Больше (&gt;)</li>
						   <li data-btn="<" data-value="Меньше (<)">Меньше (&lt;)</li>
						   <li data-btn="<=" data-value="Меньше или равно (<=)">Меньше или равно (&lt; =)</li>
						   <li data-btn=">=" data-value="Больше или равно (>=)">Больше или равно (&gt; =)</li>
						   <li data-btn="<>" data-value="Не равно (<>)">Не равно (&lt;&gt;)</li>
						</ul>
					</div>

					<div class="inputer">
						<label for="bonusrub" class="font14 dark-grey">Фонд OSC, балл:</label>
						<a href="#" class="equality"><span class="any-icon">=</span><span class="little-arrow"><i></i></span>					
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="bonusrub" id="bonusrub">
						<span href="#" class="posabsolute font10 reset">сбросить</span>

						<ul class="dropdown-town">
						   <li data-btn="=" data-value="Равно (=)">Равно (=)</li>
						   <li data-btn=">" data-value="Больше (>)">Больше (&gt;)</li>
						   <li data-btn="<" data-value="Меньше (<)">Меньше (&lt;)</li>
						   <li data-btn="<=" data-value="Меньше или равно (<=)">Меньше или равно (&lt; =)</li>
						   <li data-btn=">=" data-value="Больше или равно (>=)">Больше или равно (&gt; =)</li>
						   <li data-btn="<>" data-value="Не равно (<>)">Не равно (&lt;&gt;)</li>
						</ul>
					</div>

					<div class="inputer">
						<label for="bonusrub" class="font14 dark-grey">Фонд OCS, руб:</label>
						<a href="#" class="equality"><span class="any-icon">=</span><span class="little-arrow"><i></i></span>					
						</a>
						<input type="text" placeholder="Введите значение" class="inputs-focus" name="bonusrub" id="bonusrub">
						<span href="#" class="posabsolute font10 reset">сбросить</span>

						<ul class="dropdown-town">
						   <li data-btn="=" data-value="Равно (=)">Равно (=)</li>
						   <li data-btn=">" data-value="Больше (>)">Больше (&gt;)</li>
						   <li data-btn="<" data-value="Меньше (<)">Меньше (&lt;)</li>
						   <li data-btn="<=" data-value="Меньше или равно (<=)">Меньше или равно (&lt; =)</li>
						   <li data-btn=">=" data-value="Больше или равно (>=)">Больше или равно (&gt; =)</li>
						   <li data-btn="<>" data-value="Не равно (<>)">Не равно (&lt;&gt;)</li>
						</ul>
					</div>
					<div class="cleaner"></div>
					<input type="submit"  class="green-btn-addit uppercase f-right" value="Фильтровать"> 
					<!-- <a href="#" class="green-btn uppercase f-right">Фильтровать</a> -->
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
					<table class="report-table font12 need-scroll" style="">
						<thead>
							<tr>
								<th width="6%"  class="uppercase posrelative font12 "><span class="border-dot-grey">Дата</span><img src="img/little-arrow.png" alt=""></th>
								<th width="8%"  class="uppercase posrelative font12"><span class="border-dot-grey">Номер анкеты</span><img src="img/table-arrows.png" alt=""></th>
								<th width="10%"  class="uppercase posrelative font12"><span class="border-dot-grey">ФИО</span><img src="img/table-arrows.png" alt=""></th>
								<th width="6%" class="uppercase posrelative font12"><span class="border-dot-grey">Номер спонсора</span><img src="img/table-arrows.png" alt=""></th>
								<th width="10.6%" class="uppercase posrelative font12"><span class="border-dot-grey">Спонсор</span><img src="img/table-arrows.png" alt=""></th>
								<th width="7%"  class="uppercase posrelative font12"><span class="border-dot-grey">Заказы,<br><span style="text-transform:lowercase;">балл</span></span><img src="img/table-arrows.png" alt=""></th>
								<th width="3%" class="uppercase posrelative font12"><span class="border-dot-grey">%</span><img src="img/table-arrows.png" alt=""></th>
								<th width="5%" class="uppercase posrelative font12"><span class="border-dot-grey">РАСЧЕТ</span><img src="img/table-arrows.png" alt=""></th>
								<th width="6%" class="uppercase posrelative font12"><span class="border-dot-grey">ФОНД OSC,<br><span style="text-transform:lowercase;">балл</span></span><img src="img/table-arrows.png" alt=""></th>
								<th width="6%" class="uppercase posrelative font12"><span class="border-dot-grey">ФОНД OSC,<br><span style="text-transform:lowercase;">руб</span></span><img src="img/table-arrows.png" alt=""></th>
								<!-- <th style="width: 16px;" class="empty-td"></th> -->
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>

							<tr class="compression">
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>
									
							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>

							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>

							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>

							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>

							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>

							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>

							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>

							<tr>
								<td>01.01.2014</td>
								<td>100</td>
								<td>Иванов И.И.</td>
								<td>99999</td>
								<td>Петров И.П.</td>
								<td>9 999 999</td>
								<td>100</td>
								<td>41Б*100%</td>
								<td>5</td>
								<td>200</td>
								<!-- <td></td> -->
							</tr>
							<tr class="report-separator">
								<td colspan="10">&nbsp;</td>
							</tr>

						</tbody>
						<tfoot>
							<tr>
								<td>ИТОГО:</td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td> </td>
								<td></td>
								<td>500</td>
								<td> </td>
								<td>500</td>
								<td>500</td>
								<!-- <td></td> -->
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="paginations m-top20">
					
					<div class="cleaner"></div>
					<!-- <ul class="distributers">
						<li class="first"> - Новый дистрибьютор</li>
						<li class="second"> - Новый бизнес-партнер OSC</li>
						<li class="third"> - Дистрибьютор</li>
					</ul> -->
					<!-- <div class="cleaner"></div> -->
					<div class="compression-info">
						<span class="d-inline-block pic"></span><span class="text"> - консультанты с компрессией</span>
					</div>
				</div>
			</div>
		</div>
	</div>