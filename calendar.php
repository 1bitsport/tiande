<?
require_once('header.php');
?>
<link rel="stylesheet" href="/css/calendar.css">
<link rel="stylesheet" href="/css/style-filter.css">

<div id="calendar" class="searcher">
	<div class="report-content">
		<div class="report-left-menu">
			<div id="catalog-filter">
                    <div class="item gray cb">
                        <div class="title">Год события:</div>
                        <ul>
                            <li>
                                <input id="ch1" value="none" type="checkbox"/>
                                <label for="ch1">2014</label>
                            </li>
                            <li>
                                <input id="ch2" value="none" type="checkbox"/>
                                <label for="ch2">2013</label>
                            </li>
                            <li>
                                <input id="ch5" value="none" type="checkbox"/>
                                <label for="ch5">2012</label>
                            </li>
                            <li>
                                <input id="ch3" value="none" type="checkbox"/>
                                <label for="ch3">2011</label>
                            </li>
                        </ul>  
                        <div class="control">
                            <a class="clear">сбросить</a>
                        </div>
                    </div>
                    <div class="item gray cb">
                        <div class="title">Событие:</div>
                        <ul>
                            <li>
                                <input id="cs1" value="none" type="checkbox"/>
                                <label for="cs1">День TianDe</label>
                            </li>
                            <li>
                                <input id="cs2" value="none" type="checkbox"/>
                                <label for="cs2">Мотивационные семинары</label>
                            </li>
                            <li>
                                <input id="cs5" value="none" type="checkbox"/>
                                <label for="cs5">Бизнес-школа</label>
                            </li>
                            <li>
                                <input id="cs3" value="none" type="checkbox"/>
                                <label for="cs3">Путешествия</label>
                            </li>
                            <li>
                                <input id="cs4" value="none" type="checkbox"/>
                                <label for="cs4">Праздники</label>
                            </li>
                            <li>
                                <input id="cs6" value="none" type="checkbox"/>
                                <label for="cs6">Презентации</label>
                            </li>
                            <li>
                                <input id="cs7" value="none" type="checkbox"/>
                                <label for="cs7">Другое</label>
                            </li>
                        </ul>  
                        <div class="control">
                            <a class="clear">сбросить</a>
                        </div>
                    </div>
            </div>
            <div class="actually-calendar">
            	<table class="cal">
			      <caption>
			        <span class="prev"><a href="index.html">&#9668;</a></span>
			        <span class="next"><a href="index.html">&#9658;</a></span>
			        СЕНТЯБРЬ 2014
			      </caption>
			      <thead>
			        <tr>
			          <th>пн</th>
			          <th>вт</th>
			          <th>ср</th>
			          <th>чт</th>
			          <th>пт</th>
			          <th>сб</th>
			          <th>вс</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="off"><a href="index.html">26</a></td>
			          <td class="off"><a href="index.html">27</a></td>
			          <td class="off"><a href="index.html">28</a></td>
			          <td class="off"><a href="index.html">29</a></td>
			          <td class="off"><a href="index.html">30</a></td>
			          <td class="off"><a href="index.html">31</a></td>
			          <td><a href="index.html">1</a></td>
			        </tr>
			        <tr>
			          <td><a href="index.html">2</a></td>
			          <td><a href="index.html">3</a></td>
			          <td><a href="index.html">4</a></td>
			          <td><a href="index.html">5</a></td>
			          <td><a href="index.html">6</a></td>
			          <td><a href="index.html">7</a></td>
			          <td><a href="index.html">8</a></td>
			        </tr>
			        <tr>
			          <td class="green"><a href="index.html">9</a></td>
			          <td class="green"><a href="index.html">10</a></td>
			          <td class="green"><a href="index.html">11</a></td>
			          <td class="green"><a href="index.html">12</a></td>
			          <td class="green"><a href="index.html">13</a></td>
			          <td class="green"><a href="index.html">14</a></td>
			          <td class="green"><a href="index.html">15</a></td>
			        </tr>
			        <tr>
			          <td class="green"><a href="index.html">16</a></td>
			          <td><a href="index.html">17</a></td>
			          <td><a href="index.html">18</a></td>
			          <td><a href="index.html">19</a></td>
			          <td><a href="index.html">20</a></td>
			          <td><a href="index.html">21</a></td>
			          <td><a href="index.html">22</a></td>
			        </tr>
			        <tr>
			          <td><a href="index.html">23</a></td>
			          <td><a href="index.html">24</a></td>
			          <td><a href="index.html">25</a></td>
			          <td><a href="index.html">26</a></td>
			          <td><a href="index.html">27</a></td>
			          <td class="active"><a href="index.html">28</a></td>
			          <td><a href="index.html">29</a></td>
			        </tr>
			        <tr>
			          <td><a href="index.html">30</a></td>
			          <td><a href="index.html">31</a></td>
			          <td class="off"><a href="index.html">1</a></td>
			          <td class="off"><a href="index.html">2</a></td>
			          <td class="off"><a href="index.html">3</a></td>
			          <td class="off"><a href="index.html">4</a></td>
			          <td class="off"><a href="index.html">5</a></td>
			        </tr>
			      </tbody>
			    </table>
            </div>
		</div>
		<div class="search-content-in">
            <div class="breadcrumbs">
                <ul>
                  <li><a href="">бизнес-возможности</a></li>
                  <li><a href="">календарь событий</a></li>
                </ul>
            </div>
			<ul class="month">
				<li>Январь</li>
				<li>Февраль</li>
				<li>Март</li>
				<li>Апрель</li>
				<li>Май</li>
				<li>Июнь</li>
				<li>Июль</li>
				<li>Август</li>
				<li class="selected">Сентябрь</li>
				<li>Октябрь</li>
				<li>Ноябрь</li>
				<li>Декабрь</li>
			</ul>
			<h1 class="name uppercase">Календарь событий</h1>
			<table class="events">
				<thead>
					<tr>
						<th class="green-td">09</th>
						<th class="second-td">ДАТА ПРОВЕДЕНИЯ</th>
						<th class="third-td">ГОРОД, СТРАНА</th>
						<th>ОПИСАНИЕ</th>
					</tr>
				<tbody>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия</td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия</td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия</td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия</td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия</td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия</td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия</td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия</td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
					<tr>
						<td class="green-td"></td>
						<td>12-20 сентября</td>
						<td class="third-td">Бали, Индонезия Бали, Индонезия Бали, Индонезия Бали, Индонезия Бали, Индонезия </td>
						<td class="last-td"><a href="">Мотивационный семинар</a></td>
					</tr>
				</tbody>
				</thead>
			</table>
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