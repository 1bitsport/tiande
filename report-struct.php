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
					<li class="selected"><a href="">ФОНД OSC</a></li>			
				</ul>
				<p><a href="">МОЯ СТРУКТУРА OSC*</a></p>
				<ul>
					<li><a href="">СТРУКТУРА ПО УРОВНЯМ OSC</a></li>
					<li><a href="">ЗАКАЗЫ OSC* МОЕЙ СТРУКТУРЫ</a></li>
					<li><a href="">РЕЙТИНГ БП OSC</a></li>
					<li><a href="">АВТОРЕКРУТИНГ</a></li>			
				</ul>
			</div>
		</div>
		<div class="report-content-in">
			<h2>ОТЧЕТ: <a href="">Заказы OSC моей структуры</a></h2>
			<div class="report-main-filter">
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
				<ul class="report-main-filter-additional">                
					<li>
						<input id="cfirst" type="checkbox" name="" hidden />
						<label for="cfirst">Показать структуру деревом</label>
					</li>
					<li>
						<input id="csecond" type="checkbox" name="" hidden />
						<label for="csecond">Показать только новых Дистрибьюторов</label>
					</li>
					<li>
						<input id="cthird" type="checkbox" name="" hidden />
						<label for="cthird">Показать только новых Бизнес-партнеров OSC</label>
					</li>
				</ul>
				<a href="#" class="green-btn uppercase">Показать</a><a href="#" class="this-btn uppercase">Распечатать</a>
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
						<form>
						<div class="inputer">
							<label for="ordersball" class="font14 dark-grey">Уровень:</label>
							<a href="#" class="equality"><span class="any-icon">=</span><span class="little-arrow"><i></i></span>
							</a>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="ordersball" id="ordersball">
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
							<label for="lvl" class="font14 dark-grey">Номер анкеты:</label>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="lvl" id="lvl">
							<span href="#" class="posabsolute font10 reset">сбросить</span>
						</div>

						<div class="inputer">
							<label for="percent" class="font14 dark-grey">ФИО:</label>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="percent" id="percent">
							<span href="#" class="posabsolute font10 reset">сбросить</span>
						</div>

						<div class="inputer">
							<label for="bonusball" class="font14 dark-grey">Статус OSC:</label>
							<a href="#" class="equality list"><span class="little-arrow"><i></i></span>					
							</a>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="bonusball" id="bonusball">
							<span href="#" class="posabsolute font10 reset">сбросить</span>

							<ul class="dropdown-town">
							   <li data-value="Бизнес-Партнер OSC">Бизнес-Партнер OSC</li>
							   <li data-value="Успешный покупатель OSC">Успешный покупатель OSC</li>
							</ul>
						</div>

						<div class="inputer">
							<label for="bonusrub" class="font14 dark-grey">Номер спонсора:</label>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="bonusrub" id="bonusrub">
							<span href="#" class="posabsolute font10 reset">сбросить</span>
						</div>

						<div class="inputer">
							<label for="bonusrub" class="font14 dark-grey">ЛО OSC, балл:</label>
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
							<label for="bonusrub" class="font14 dark-grey">СО OCS, балл:</label>
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
							<label for="bonusrub" class="font14 dark-grey">Неоплач. ЛО OSC	, балл:</label>
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
						<a href="#" class="green-btn uppercase f-right">Фильтровать</a>
					</form>
					<div class="cleaner"></div>
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
								<th width="1%" class="uppercase posrelative font12 "><span class="center"><img src="img/black-distr.png" alt=""></span><img src="img/little-arrow.png" alt=""></th>
								<th width="10%" class="uppercase posrelative font12"><span class="border-dot-grey">Уровень</span><img src="img/table-arrows.png" alt=""></th>
								<th width="8%" class="uppercase posrelative font12"><span class="border-dot-grey">Номер анкеты</span><img src="img/table-arrows.png" alt=""></th>
								<th width="10%" class="uppercase posrelative font12"><span class="border-dot-grey">ФИО</span><img src="img/table-arrows.png" alt=""></th>
								<th width="10.6%" class="uppercase posrelative font12"><span class="border-dot-grey">Статус OSC</span><img src="img/table-arrows.png" alt=""></th>
								<th width="5%" class="uppercase posrelative font12"><span class="border-dot-grey">!</span><img src="img/table-arrows.png" alt=""></th>
								<th width="8%" class="uppercase posrelative font12"><span class="border-dot-grey">Номер спонсора</span><img src="img/table-arrows.png" alt=""></th>
								<th width="8.4%" class="uppercase posrelative font12"><span class="border-dot-grey">ЛО OSC,<br><span style="text-transform:lowercase;">балл</span></span><img src="img/table-arrows.png" alt=""></th>
								<th width="8.4%" class="uppercase posrelative font12"><span class="border-dot-grey">СО OSC,<br><span style="text-transform:lowercase;">балл</span></span><img src="img/table-arrows.png" alt=""></th>
								<th width="8.4%" class="uppercase posrelative font12"><span class="border-dot-grey">Неоплач. ЛО OSC,<br><span style="text-transform:lowercase;">балл</span></span><img src="img/table-arrows.png" alt=""></th>
								<th width="4.4%" class="uppercase posrelative font12">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img src="img/orange-distr.png" alt=""></td>
								<td>1</td>
								<td>555 555</td>
								<td>Голубь И.П.</td>
								<td>Бмзнес - партнер OSC</td>
								<td>
									<span class="what">
							            <span>!</span>
							            <i></i>
							            <div class="popup">
							              <div class="content">
							                <h4 class="font14">История изменения статуса</h4>
							                <p class="font12">
							                	<span class="black">01.01.2014</span> - Успешный покупатель
							                	<span class="black">01.01.2014</span> - Бизнес-Партнер OSC (покупка 1ND набора)
							                </p>
							              </div>
							            </div>
						          	</span>
								</td>
								<td>565 789</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="detailed modal-viewer" data-key="#msg-form"><img src="/img/letter.png" alt=""></a></td>
							</tr>

							<tr>
								<td><img src="img/green-distr.png" alt=""></td>
								<td>1</td>
								<td>555 555</td>
								<td>Голубь И.П.</td>
								<td>Бмзнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>565 789</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="detailed modal-viewer" data-key="#msg-form"><img src="/img/letter.png" alt=""></a></td>
							</tr>
									
							<tr>
								<td><img src="img/grey-distr.png" alt=""></td>
								<td>1</td>
								<td>555 555</td>
								<td>Голубь И.П.</td>
								<td>Бмзнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>565 789</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="detailed modal-viewer" data-key="#msg-form"><img src="/img/letter.png" alt=""></a></td>
							</tr>
							

						</tbody>
						<tfoot>
							<tr class="report-separator">
								<td colspan="11">&nbsp;</td>
							</tr>
							<tr>
								<td>ИТОГО:</td>
								<td></td>
								<td> </td>
								<td></td>
								<td> </td>
								<td></td>
								<td> </td>
								<td>500</td>
								<td></td>
								<td>500</td>
								<td> </td>
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
					<ul class="distributers">
						<li class="first"> - Новый дистрибьютор</li>
						<li class="second"> - Новый бизнес-партнер OSC</li>
						<li class="third"> - Дистрибьютор</li>
					</ul>
					<div class="cleaner"></div>
					<!-- <div class="compression-info">
						<span class="d-inline-block pic"></span><span class="text"> - консультанты с компрессией</span>
					</div> -->
				</div>
			</div>
			
		</div>
		<div class="report-clear"></div>
	</div>
</div>


</main>
</div>
    <!--(/Основное содержание страницы)-->

    <footer>
    </footer>


</body>
</html>