<?
require_once('header.php');
?>
<script>
$(document).ready(function(){
	// $('.report-left-menu-toggle').on('click', function(){
	// 	$(this).toggleClass('report-left-menu-toggle-clicked');
	// 	$('.report-left-content').toggle('slow');
 //    	$('.report-left-menu').css({'width':'auto'}); 

	
	// });
});
</script>
<style>
.report-clear{
	clear: both;
}
.report-menu{	
	position: relative;
	height: 110px;
	width: 100%;
	border-bottom: 1px solid #E8E8E9;
	padding-bottom: 20px;
	text-align: center;
}
.report-menu-container{
	min-width: 980px;
	width: 980px;
	margin: 0 auto;	
}
.report-menu ul{
	
	list-style: none;	
}
.report-menu ul li{
	margin: 15px;
	position: relative;
	height: 79px;
	min-width: 79px;
	text-transform: uppercase;
	float: left;
	list-style: none;
	font-size: 12px;
}
.report-menu ul li a span{
	font-size: 17px;
}
.report-menu ul li a{
	color: #414042;
	text-decoration: none;
}
.report-menu ul li a:hover{
	color: #000;
	text-decoration: none;
	border-bottom: 1px solid #666666;
}
.report-menu-profile{
	background-image: url(/img/report/report-sprite.png);
	background-position: 0 0;
	background-repeat: none;
}
.report-menu-profile:hover{
	background-position: 77px 0;
}
.report-menu-orders{
	background-image: url(/img/report/report-sprite.png);
	background-position: 0 -79px;
	background-repeat: none;
}
.report-menu-orders:hover{
	background-position: 77px -79px;
}
.report-menu-settings{
	background-image: url(/img/report/report-sprite.png);
	background-position: 0 -158px;
	background-repeat: none;
}
.report-menu-settings:hover{
	background-position: 77px -158px;
}
.report-menu-score{
	background-image: url(/img/report/report-sprite.png);
	background-position: 0 -237px;
	background-repeat: none;
}
.report-menu-score:hover{
	background-position: 79px -237px;
}
.report-menu-report{
	background-image: url(/img/report/report-sprite.png);
	background-position: 0 -316px;
	background-repeat: none;
}
.report-menu-report.active{
	background-position: 79px -316px;
}
.report-menu-report:hover{
	background-position: 79px -316px;
}
.report-menu-tool{
	background-image: url(/img/report/report-sprite.png);
	background-position: 0 -395px;
	background-repeat: none;
}
.report-menu-tool:hover{
	background-position: 77px -395px;
}
.report-menu-feedback{
	background-image: url(/img/report/report-sprite.png);
	background-position: 0 -474px;
	background-repeat: none;
}
.report-menu-feedback:hover{
	background-position: 77px -474px;
}
.report-menu-office{
	background-image: url(/img/report/report-sprite.png);
	background-position: 0 -553px;
	background-repeat: none;
}
.report-menu-office:hover{
	background-position: 77px -553px;
}
.report-menu-icon{
	margin: 0 auto 5px;
	width: 79px;
	min-width: 79px;
	height: 79px;
}
.report-corner-container{
	position: absolute;
	width: 100%;
	height: 13px;
	z-index: 10;
	bottom: -37px;	
}
.report-menu-up{
	background: url(/img/report/menu_up.png) center center no-repeat;
	margin: 0 auto;
	height: 13px;
	width: 31px;
}
.report-corner{
	position: relative;
	height: 13px;
}
.report-content{
	margin-top: 20px;
	padding: 0 20px;	
}
.report-left-menu{
	min-width: 2px;
	min-height: 150px;
	position: relative;
	float: left;
	padding-right: 40px;	
}
.report-left-menu-toggle{
	position: absolute;
	right: 18px;
	top: 0;
	width: 7px;
	height: 11px;
	background-image: url(/img/report/menu-sprite.png);
	background-position: 0 0;	
}
.report-left-menu-toggle-clicked{
	background-position: 7px 0;	
}
.report-left-content{
	text-transform: uppercase;
}
.report-left-content p a{
	font-size: 14px;
	margin-bottom: 10px;
	color: #58595B;
}
.report-left-content p a:hover{	
	color: #000;
}
.report-left-content ul{
	list-style: none;
	margin: 0 0 0 15px;
}
.report-left-content ul li{
	list-style: none;
	margin: 0 0 14px 0;
}
.report-left-content ul li a{
	font-size: 12px;	
	color: #58595B;
}
.report-left-content ul li a:hover{	
	color: #000;
}
.report-content-in{
	position: relative;
	min-height: 300px;
	float: left;
	border-left: 1px solid #E8E8E9;
	padding: 0 20px;
}
.report-content-in h2{
	font-size: 18px;
	color: #000;	
}
.report-content-in h2 a{
	border-bottom: 1px solid #fff;
}	
.report-content-in h2 a:hover{
	border-bottom: 1px solid #adadad;	
}
.report-main-filter{
	margin: 5px 0 10px;
}
.report-main-filter-stroke{
	list-style: none;	
}
.report-main-filter-stroke li{
	font-size: 14px;
	color: #58595B;
	display: inline;
	display: inline-block;	
	zoom: 1;
	position: relative;
}
.report-main-filter-stroke input{	
	width: 91px;
	font-size: 14px;
	height: 18px;
	border: 1px solid #E8E8E9;
	padding: 0 0 0 6px;
	font-family: 'PT Sans';
}
.report-datepicker{
	position: absolute;
	right: 3px;
	top: 4px;
	width: 13px;
	height: 13px;
}
.report-main-filter-stroke span{
	background: #E6E7E8;
	padding: 1px 2px;
}
.report-main-filter-stroke li a{
	margin-left: 4px;
	color: #58595B;
	border-bottom: 1px dotted #58595B;
}
.report-main-filter-stroke li a:hover{
	color: #000;
	border-bottom: 1px dotted #000;
}
.report-main-filter-additional{
	margin: 15px 0 5px 0;
}
.report-main-filter-additional li{
	margin: 0 0 10px;
	font-size: 14px;
	color: #58595B;
}
</style>

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
				<li><a href="">ФОНД OSC</a></li>			
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
		<h2>ОТЧЕТ: <a href="">ЗАКАЗЫ OSC МОЕЙ СТРУКТУРЫ</a></h2>
		<div class="report-main-filter">
			<ul class="report-main-filter-stroke">
				<li style="padding-right: 5px">Период:</li>
				<li>
					<input type="text" value="02.02.2014" name="" />
					<div class="report-datepicker"><img src="/img/report/datepicker.png" /></div>					
				</li>
				<li>&mdash;</li>
				<li>
					<input type="text" value="02.02.2014" name="" />
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
		</div>
		
	</div>
	<div class="report-clear"></div>
</div>