<?
require_once('header.php');
?>
<div class="reports-page main-tools">
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
					
					<div class="report-menu-icon report-menu-report"></div>
					<a href="#"><span>М</span>ои отчеты</a>
				</li>
				<li class="">
					<div class="report-corner-container">
						<div class="report-corner">
							<div class="report-menu-up"></div>
						</div>	
					</div>
					<div class="report-menu-icon report-menu-tool active"></div>
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
			<div class="report-left-content">
				<p><a href="">МОИ ИНСТРУМЕНТЫ</a></p>
				<ul>
					<li><a href="">РЕФЕРАЛЬНЫЕ ССЫЛКИ</a></li>
					<li><a href="">ОДНОСТРАНИЧНЫЙ САЙТ</a></li>
					<li><a href="">ИНТЕРНЕТ КОНФЕРЕЦНИЯ</a></li>
					<li><a href="">РАССЫЛЬЩИК</a></li>			
				</ul>
			</div>
		</div>
		<div class="report-content-in">
			<h2>РЕФЕРАЛЬНЫЕ ССЫЛКИ</h2>
			<div class="report-main-filter">
				<h3 class="subhead">Адрес Вашей реферальной ссылки:</h3>
				<div class="wrap-refer">
					<input type="text" name="referal" id="refer" readonly class="form-input" value="http://www.tiande.ru/ref=partner_001029311">
					<a href="#" class="this-btn m-zero uppercase modal-viewer" data-key="#refer-change">Изменить</a>
					<a href="#" class="this-btn m-zero uppercase" id="copy-refer">Скопировать</a>
				</div>
				<h3 class="stats uppercase font14">Список и статистика реферальных ссылок</h3>
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
				
				<a href="#" class="green-btn uppercase">Показать</a><a href="#" class="this-btn uppercase">Распечатать</a>
				<span class="saver d-inline-block font14 dark-grey">Сохранить: <a href="#" ><img src="img/saver.gif" alt=""></a></span>
				<div class="cleaner m-bot20"></div>
				
				<div class="paginations m-top20">
					<div class="pagination  m-bot20">
						<a href="#" class="page current">1</a>
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
								<th width="32.6%" class="uppercase posrelative font12"><span>АДРЕС РЕФЕРАЛЬНОЙ ССЫЛКИ</span></th>
								<th width="28%" class="uppercase posrelative font12"><span>АДРЕС ПЕРЕХОДА</span></th>
								<th width="7%" class="uppercase posrelative font12"><span class="border-dot-grey">ДАТА</span><img src="img/table-arrows.png" alt=""></th>
								<th width="13.4%" class="uppercase posrelative font12"><span class="border-dot-grey">КОЛ-ВО ПЕРЕХОДОВ</span><img src="img/table-arrows.png" alt=""></th>
								<th width="20.4%" class="uppercase posrelative font12"><span class="border-dot-grey">КОЛ-ВО РЕГИСТРАЦИЙ</span><img src="img/table-arrows.png" alt="">`</th>
							</tr>
						</thead>
						<tbody>
							<tr>								
								<td>
									
									<div class="has-popup has-icon ref">
								        <a class="ref-link" href="http://www.tiande.ru/partner_001029311">http://www.tiande.ru/partner_001029311</a>
								        <i></i>
								        <div class="popup center" id="partnership2">
								          <div class="content">

								            <h4>ПРОМО-ССЫЛКА</h4>
								            <a href="#1" class="what-is-it">Что это?</a>
								            <input type="text" class="copy-text" value="https://cloud.mail.ru/public/" onclick="this.select()" readonly />
								            <a href="#1" class="copy-button">КОПИРОВАТЬ</a>
								            <hr>
								            <div class="social">
								              <a href="#1"  class="share border-dotted">Поделиться</a>
								              <a href="#1"><img src="img/social/vk.gif"/></a>
								              <a href="#1"><img src="img/social/tweeter.gif"/></a>
								              <a href="#1"><img src="img/social/youtube.gif"/></a>
								              <a href="#1"><img src="img/social/ok.gif"/></a>
								              <a href="#1"><img src="img/social/facebook.gif"/></a>
								            </div>
								            <div class="social share-content" >
								              <a href="#1"><img src="img/social/1.gif"/></a>
								              <a href="#1"><img src="img/social/12.gif"/></a>
								              <a href="#1"><img src="img/social/13.gif"/></a>
								              <a href="#1"><img src="img/social/11.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/7.gif"/></a>
								              <a href="#1"><img src="img/social/8.gif"/></a>
								              <a href="#1"><img src="img/social/9.gif"/></a>
								              <a href="#1"><img src="img/social/10.gif"/></a>
								              <a href="#1"><img src="img/social/2.gif"/></a>
								              <a href="#1"><img src="img/social/3.gif"/></a>
								              <a href="#1"><img src="img/social/4.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/13.gif"/></a>
								              <a href="#1"><img src="img/social/11.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/7.gif"/></a>
								              <a href="#1"><img src="img/social/8.gif"/></a>
								              <a href="#1"><img src="img/social/9.gif"/></a>
								              <a href="#1"><img src="img/social/10.gif"/></a>
								            </div>
								            <div style="clear:both"></div>
								          </div>
								        </div>
								      </div>
								</td>
								<td><a href="http://www.tiande.ru/katalog/wellnes/home/krem_102032">http://www.tiande.ru/katalog/wellnes/home/krem_102032</a></td>
								<td>01.02.2001</td>
								<td>2</td>
								<td>2</td>
							</tr>

							<tr>								
								<td>
									
									<div class="has-popup has-icon ref">
								        <a class="ref-link" href="http://www.tiande.ru/partner_001029311">http://www.tiande.ru/partner_001029311</a>
								       	<i></i>
								        <div class="popup center" id="partnership2">
								          <div class="content">

								            <h4>ПРОМО-ССЫЛКА</h4>
								            <a href="#1" class="what-is-it">Что это?</a>
								            <input type="text" class="copy-text" value="https://cloud.mail.ru/public/" onclick="this.select()" readonly />
								            <a href="#1" class="copy-button">КОПИРОВАТЬ</a>
								            <hr>
								            <div class="social">
								              <a href="#1"  class="share border-dotted">Поделиться</a>
								              <a href="#1"><img src="img/social/vk.gif"/></a>
								              <a href="#1"><img src="img/social/tweeter.gif"/></a>
								              <a href="#1"><img src="img/social/youtube.gif"/></a>
								              <a href="#1"><img src="img/social/ok.gif"/></a>
								              <a href="#1"><img src="img/social/facebook.gif"/></a>
								            </div>
								            <div class="social share-content" >
								              <a href="#1"><img src="img/social/1.gif"/></a>
								              <a href="#1"><img src="img/social/12.gif"/></a>
								              <a href="#1"><img src="img/social/13.gif"/></a>
								              <a href="#1"><img src="img/social/11.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/7.gif"/></a>
								              <a href="#1"><img src="img/social/8.gif"/></a>
								              <a href="#1"><img src="img/social/9.gif"/></a>
								              <a href="#1"><img src="img/social/10.gif"/></a>
								              <a href="#1"><img src="img/social/2.gif"/></a>
								              <a href="#1"><img src="img/social/3.gif"/></a>
								              <a href="#1"><img src="img/social/4.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/13.gif"/></a>
								              <a href="#1"><img src="img/social/11.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/7.gif"/></a>
								              <a href="#1"><img src="img/social/8.gif"/></a>
								              <a href="#1"><img src="img/social/9.gif"/></a>
								              <a href="#1"><img src="img/social/10.gif"/></a>
								            </div>
								            <div style="clear:both"></div>
								          </div>
								        </div>
								      </div>
								</td>
								<td><a href="http://www.tiande.ru/katalog/wellnes/home/krem_102032">http://www.tiande.ru/katalog/wellnes/home/krem_102032</a></td>
								<td>01.02.2001</td>
								<td>2</td>
								<td>2</td>
							</tr>
							
							<tr>								
								<td>
									
									<div class="has-popup has-icon ref">
								        <a class="ref-link" href="http://www.tiande.ru/partner_001029311">http://www.tiande.ru/partner_001029311</a>
								        <i></i>
								        <div class="popup center" id="partnership2">
								          <div class="content">

								            <h4>ПРОМО-ССЫЛКА</h4>
								            <a href="#1" class="what-is-it">Что это?</a>
								            <input type="text" class="copy-text" value="https://cloud.mail.ru/public/" onclick="this.select()" readonly />
								            <a href="#1" class="copy-button">КОПИРОВАТЬ</a>
								            <hr>
								            <div class="social">
								              <a href="#1"  class="share border-dotted">Поделиться</a>
								              <a href="#1"><img src="img/social/vk.gif"/></a>
								              <a href="#1"><img src="img/social/tweeter.gif"/></a>
								              <a href="#1"><img src="img/social/youtube.gif"/></a>
								              <a href="#1"><img src="img/social/ok.gif"/></a>
								              <a href="#1"><img src="img/social/facebook.gif"/></a>
								            </div>
								            <div class="social share-content" >
								              <a href="#1"><img src="img/social/1.gif"/></a>
								              <a href="#1"><img src="img/social/12.gif"/></a>
								              <a href="#1"><img src="img/social/13.gif"/></a>
								              <a href="#1"><img src="img/social/11.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/7.gif"/></a>
								              <a href="#1"><img src="img/social/8.gif"/></a>
								              <a href="#1"><img src="img/social/9.gif"/></a>
								              <a href="#1"><img src="img/social/10.gif"/></a>
								              <a href="#1"><img src="img/social/2.gif"/></a>
								              <a href="#1"><img src="img/social/3.gif"/></a>
								              <a href="#1"><img src="img/social/4.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/13.gif"/></a>
								              <a href="#1"><img src="img/social/11.gif"/></a>
								              <a href="#1"><img src="img/social/5.gif"/></a>
								              <a href="#1"><img src="img/social/6.gif"/></a>
								              <a href="#1"><img src="img/social/7.gif"/></a>
								              <a href="#1"><img src="img/social/8.gif"/></a>
								              <a href="#1"><img src="img/social/9.gif"/></a>
								              <a href="#1"><img src="img/social/10.gif"/></a>
								            </div>
								            <div style="clear:both"></div>
								          </div>
								        </div>
								      </div>
								</td>
								<td><a href="http://www.tiande.ru/katalog/wellnes/home/krem_102032">http://www.tiande.ru/katalog/wellnes/home/krem_102032</a></td>
								<td>01.02.2001</td>
								<td>2</td>
								<td>2</td>
							</tr>
							<tr class="green-line">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td>ИТОГО</td>
								<td> </td>
								<td> </td>
								<td>6</td>
								<td>6</td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="paginations m-top20">
					<div class="pagination">
						<a href="#" class="page current">1</a>
						<a href="#" class="page">2</a>
						<a href="#" class="page">3</a>
						<span class="dots page">...</span>
						<a href="#" class="page">999</a>
						<a href="#" class="next">&#9658;<!-- <img src="img/next-page.png" alt=""> --></a>
					</div>										
				</div>
				<div class="cleaner"></div>
				<a href="" class="this-btn centered m-top20 m-bot20">ПОКАЗАТЬ ЕЩЁ</a>
				<div class="cleaner"></div>
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


<script type="text/javascript" src="/js/clipboard/jquery.zclip.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#copy-button").zclip({
		path: "/js/clipboard/ZeroClipboard.swf",
		copy: function(){return $(this).prevAll("#refer").val();}
	});

	$('a#copy-refer').zclip({
		path:'/js/ZeroClipboard.swf',
		copy:function(){return $('#refer').val();}
	});


});
</script>
<div id="refer-change" class="modal" style="display: none; position: relative;">
      <a href="#1" class="close posabsolute"></a>
      <h1>ИЗМЕНЕНИЕ РЕФЕРАЛЬНОЙ ССЫЛКИ</h1>
      <span>Введите или отредактируйте реферальную ссылку по вашему желанию</span>
      <div class="edit-ref">
      	<span class="refer-prefix">http://www.tiande.ru/ref=</span>
      	<input type="text" name="edit-ref" id="edit-refer" class="form-input">
      	<a href="" class="this-btn save">СОХРАНИТЬ</a>
      </div>
      <p>
      	Введите название персональной реферальной ссылки. Данное название 
		так же является Вашим промокодом для регистрации клиентов. Допускается
		использовать символы латинского алфавита, цифры 1-9. 
      </p>
</div>
</body>
</html>