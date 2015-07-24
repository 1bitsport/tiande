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
				<a href="#" class="green-btn uppercase">Показать</a><a href="#" class="this-btn uppercase printer">Распечатать</a>
				<span class="saver d-inline-block font14 dark-grey">Сохранить: <a href="#" ></a></span>
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
							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
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

							<ul class="dropdown-town select">
							   <li data-value="Бизнес-Партнер OSC">Бизнес-Партнер OSC</li>
							   <li data-value="Успешный покупатель OSC">Успешный покупатель OSC</li>
							</ul>
							<select name="" id="" class="equality-select nojs-sort" >
								<option value="0">&nsbp;</option>
								<option value="1">Бизнес-Партнер OSC</option>
								<option value="2">Успешный покупатель OSC</option>
							</select>
						</div>

						<div class="inputer">
							<label for="bonusrub" class="font14 dark-grey">Номер спонсора:</label>
							<input type="text" placeholder="Введите значение" class="inputs-focus" name="bonusrub" id="bonusrub">
							<span href="#" class="posabsolute font10 reset">сбросить</span>
						</div>

						<div class="inputer">
							<label for="bonusrub" class="font14 dark-grey">ЛО OSC, балл:</label>
							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
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
							<label for="bonusrub" class="font14 dark-grey">СО OCS, балл:</label>
							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
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
							<label for="bonusrub" class="font14 dark-grey">Неоплач. ЛО OSC	, балл:</label>
							<input type="text" class="equality any-icon no-js" readonly value="="><span class="little-arrow"><i></i></span>
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
					</form>
					<div class="cleaner"></div>
				</div>
				<div class="paginations m-top20 m-bot20">
					<ul class="expand-toggler">
						<li class="open-all"><div></div><a href="#">Развернуть все</a></li>
						<li class="close-all"><div></div><a href="#">Свернуть все</a></li>
					</ul>
				</div>
				<div class="cleaner"></div>
				<div class="main-table tree">
					<table class="report-table font12" >
						<thead class="">
							<tr>
								<th style="min-width: 110px;" class="uppercase posrelative font12 tree-num-anket">Номер анкеты<br>(уровень)<a class="down-arrow" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th style="min-width: 100px;" width="" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">ФИО</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th style="min-width: 100px;" width="" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Статус OSC</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th style="min-width: 40px;" width="" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">!</a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th style="min-width: 70px;" width="" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">ЛО OSC,<br><span style="text-transform:lowercase;">балл</span></a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th style="min-width: 70px;" width="" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">СО OSC,<br><span style="text-transform:lowercase;">балл</span></a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th style="min-width: 100px;" width="" class="uppercase posrelative font12"><a href="#" class="border-dot-grey">Неоплач. ЛО OSC,<br><span style="text-transform:lowercase;">балл</span></a><a class="two-arrows" href="#"><div class="arrow"></div><div class="arrow"></div></a></th>
								<th style="min-width: 50px;" width="" class="uppercase posrelative font12">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr data-level="0">
								<td>
									<div class="tree-element has-child" data-level="0"> <!-- padding-left = n*40px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
											<div class="green-distr"></div>
											555 555 (0)
										
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>
									<span class="what" style="">
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
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="1">
								<td>
									<div style="padding-left:20px;" class="tree-element has-parent" data-level="1"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle none">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-bis">
    										<div class="orange-distr"></div>
											555 556 (1)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>
									
							<tr data-level="1">
								<td>
									<div style="padding-left:20px;" class="tree-element has-child has-parent" data-level="1"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (1)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="2">
								<td>
									<div style="padding-left:40px;" class="tree-element has-child has-parent" data-level="2"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="3">
								<td>
									<div style="padding-left:60px;" class="tree-element has-child has-parent" data-level="3"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="4">
								<td>
									<div style="padding-left:80px;" class="tree-element has-parent" data-level="3"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle none">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="3">
								<td>
									<div style="padding-left:60px;" class="tree-element has-child has-parent" data-level="3"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="4">
								<td>
									<div style="padding-left:80px;" class="tree-element has-parent" data-level="3"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle none">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="3">
								<td>
									<div style="padding-left:60px;" class="tree-element has-child has-parent" data-level="3"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>
							
							<tr data-level="4">
								<td>
									<div style="padding-left:80px;" class="tree-element has-child has-parent" data-level="4"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="5">
								<td>
									<div style="padding-left:100px;" class="tree-element has-child has-parent" data-level="5"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>

							<tr data-level="6">
								<td>
									<div style="padding-left:120px;" class="tree-element has-child has-parent" data-level="6"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle take-up">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>
							
							<tr data-level="7">
								<td>
									<div style="padding-left:140px;" class="tree-element has-parent no-line-y" data-level="7"> <!-- padding-left = n*20px. Где n - уровень вложенности. Отсчёт с нуля)) -->
										<div class="toggle none">  <!-- take-down | none | take-up -->
											<span class="minus">-</span><span class="plus">+</span>
											<!-- <div class="lines"></div> -->
											<div class="line-x"></div>
											<div class="line-y"></div>
										</div>  
										<div class="person new-distr">
    										<div class="green-distr"></div>
											555 557 (2)
										</div>
									</div>
								</td>
								<td>Голубь И.П.</td>
								<td>Бизнес - партнер OSC</td>
								<td>&nbsp;</td>
								<td>50</td>
								<td>50</td>
								<td>50</a></td>
								<td><a href="#" class="green-letter modal-viewer" data-key="#msg-form"></a></td>
							</tr>
							
						</tbody>	
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
						<li class="first"><div class="green-distr"></div> - Новый дистрибьютор</li>
						<li class="second"><div class="orange-distr"></div> - Новый бизнес-партнер OSC</li>
						<li class="third"><div class="grey-distr"></div> - Дистрибьютор</li>
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


<?
require_once('footer.php');
?>
