<?
require_once('header.php');
?>
<div class="reports-page my-orders order stages">
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
	<div class="stages-content">
		<div class="order-num">
			<h2>ЗАКАЗ <span>№ 9 999 999</span> от 07.10.2014</h2>
			<div class="buttons">
				<div class="left">
					<a href="#" class="this-btn small">НАЗАД К СПИСКУ</a>	
				</div>
				<div class="right">
					<a href="#" class="this-btn printer uppercase">РАСПЕЧАТАТЬ</a>
          <a href="#" class="green-btn uppercase">ОПЛАТИТЬ</a>
					<a href="#" class="green-btn small uppercase">ПОВТОРИТЬ ЗАКАЗ</a>
				</div>
				<div class="cleaner"></div>
			</div>
		</div>
		
		<div class="line"></div>

		<div class="stage-process">
			<div class="order-step active">
				<span>В РЕЗЕРВЕ</span>
				<div class="restore-circle"></div>
				<div class="stage-line"></div>
			</div>
			<div class="order-step empty">
				<span>ОПЛАЧЕН</span>
				<div class="restore-circle"></div>
				<div class="stage-line"></div>
			</div>
			<div class="order-step empty">
				<span>ПРИНЯТ</span>
				<div class="restore-circle"></div>
				<div class="stage-line"></div>
			</div>
			<div class="order-step empty">
				<span>СОБРАН</span>
				<div class="restore-circle"></div>
				<div class="stage-line"></div>
			</div>
			<div class="order-step empty">
				<span>В ПУТИ</span>
				<div class="restore-circle"></div>
				<div class="stage-line"></div>
			</div>
			<div class="order-step empty">
				<span>ЗАВЕРШЕН</span>
				<div class="restore-circle"></div>
				<div class="stage-line"></div>
			</div>
		</div>
		<div class="take-post">
      <p>Зарезервирован до: 15.10.2014 <a class="toLong" href="#">Продлить на 1 день</a></p>
			<p>Способ получения: Самовывоз, Москва, м. Коломенское, ул. Высокая, д.4, стр.2</p>
		</div>

		<ul class="ul-balls">
          <li class="pay-element done">
            <div class="restore-circle"></div>  
            <h2 class="uppercase d-block">Товары</h2>
            <div class="order-inner marginer">
              	<table class="width-100 cart-table m-top20">
                    <thead>
                      <tr>

                        <th width="25%">НАИМЕНОВАНИЕ</th>
                        <th width="7%">КОЛ-ВО</th>
                        <th width="10%">ЦЕНА БАЛЛ</th>
                        <th width="15%">ЦЕНА</th>
                        <th width="10%">СУММА БАЛЛ</th>
                        <th width="15%">СУММА</th>
                      </tr>       
                    </thead>
                    <tbody>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>
                              <span class="dopinfo">Объём: 50мл</span>
                            </div>
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>52</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>99 999</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                      </tr>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Интенсивный крем-уход от морщин</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>
                            </div>
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>52</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>99 999</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                      </tr>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Фитокорректор</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>
                              <span class="dopinfo">Объём: 50мл</span>
                            </div>
                            
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>52</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>99 999</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>

                      </tr>       
                    </tbody>
                    <tfoot>
                      <tr class="cart-table-separator">
                        <td colspan="8">&nbsp;</td>         
                      </tr>
                      <tr>

                        <td class="cart-result">
                          <strong>ИТОГО:</strong>       
                        </td>
                        <td class="count-sum cart-bold">3</td>
                        <td class="color-orange cart-font-14 cart-bold">&nbsp;</td>
                        <td class="cart-font-14 cart-bold">&nbsp;</td>
                        <td class="color-orange cart-font-14 cart-bold">15 Б.</td>
                        <td class="cart-font-14 cart-bold">350 руб.</td>
                      </tr>
                    </tfoot> 
          		</table>
            </div>
          </li>

          <li class="pay-element done">
            <div class="restore-circle"></div>  
            <h2 class="uppercase d-block">НАБОРЫ И АКЦИИ</h2>
            <div class="order-inner marginer">
              <!-- И сюда -->

                  <table class="width-100 cart-table m-top20">
                    <thead>
                      <tr>

                        <th width="25%">НАИМЕНОВАНИЕ</th>
                        <th width="7%">КОЛ-ВО</th>
                        <th width="10%">ЦЕНА БАЛЛ</th>
                        <th width="15%">ЦЕНА</th>
                        <th width="10%">СУММА БАЛЛ</th>
                        <th width="15%">СУММА</th>
                      </tr>       
                    </thead>
                    <tbody>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>
                              <span class="dopinfo">Объём: 50мл</span>
                            </div>
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>52</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>99 999</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                      </tr>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Интенсивный крем-уход от морщин</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>
                            </div>
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>52</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>99 999</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                      </tr>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Фитокорректор</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>

                            </div>
                            
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>52</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>99 999</span>&nbsp;Б.
                        </td>
                        <td class="cart-font-14 ">
                          <span>123 456 78</span>&nbsp;руб.
                        </td>
                      </tr>       
                    </tbody>
                    <tfoot>
                      <tr class="cart-table-separator">
                        <td colspan="8">&nbsp;</td>         
                      </tr>
                      <tr>

                        <td class="cart-result">
                          <strong>ИТОГО:</strong>       
                        </td>
                        <td class="count-sum cart-bold">3</td>
                        <td class="color-orange cart-font-14 cart-bold">&nbsp;</td>
                        <td class="cart-font-14 cart-bold">&nbsp;</td>
                        <td class="color-orange cart-font-14 cart-bold">15 Б.</td>
                        <td class="cart-font-14 cart-bold">350 руб.</td>
                      </tr>
                    </tfoot> 
                  </table>
            </div>
         
          </li>

          <li class="pay-element done">       
            <div class="restore-circle"></div>  
            <h2 class="uppercase d-block">Подарки</h2>          
            <div class="order-inner marginer off">
              <!-- И ещё одну сюда -->

                  <table class="cart-table width-100 m-top20">
                    <thead>
                      <tr>

                        <th width="25%">НАИМЕНОВАНИЕ</th>
                        <th width="13%">КОЛ-ВО</th>
                        <th width="15%">CТОИМОСТЬ БАЛЛ</th>
                        <th width="15%">ИТОГО БАЛЛ</th> 

                      </tr>         
                    </thead>
                    <tbody>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>
                              <span class="dopinfo">Объём: 50мл</span>
                            </div>
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>5</span>&nbsp;Б.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>10</span>&nbsp;Б.
                        </td>         
                        <td></td>
                      </tr>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>

                            </div>
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>5</span>&nbsp;Б.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>10</span>&nbsp;Б.
                        </td>         
                        <td></td>
                      </tr>
                      <tr>

                        <td class="cart-vert-top">
                          <div class="cart-text-left">
                            <div class="cart-item-name">
                              <a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a>
                              <div class="cart-clear"></div><span class="dopinfo">Код: 229039</span>
                              <span class="dopinfo">Объём: 50мл</span>
                            </div>
                            <div class="cart-clear"></div>
                          </div>            
                        </td>
                        <td>
                          1
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>5</span>&nbsp;Б.
                        </td>
                        <td class="color-orange cart-font-14">
                          <span>10</span>&nbsp;Б.
                        </td>         
                        <td style="empty-cells: hide; border-collapse: collapse;"></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr class="cart-table-separator">
                        <td colspan="4">&nbsp;</td>       
                      </tr>
                      <tr>

                        <td class="cart-result">
                          <strong>ИТОГО:</strong>       
                        </td>
                        <td class="count-sum cart-bold">3</td>         
                        <td class="color-orange cart-font-14 cart-bold">15 Б.</td>
                        <td class="cart-font-14 color-orange cart-bold">350 Б.</td>
                      </tr>
                    </tfoot>  
                  </table>

                  <div class="cart-summary">
                  
                  <div class="cart-summary-right">
                    <table align="right">
                      <tr>
                        <td class="cart-summary-tbl-left">СУММА:</td>
                        <td class="cart-summary-tbl-right cart-bold">9 999 300 руб</td>         
                      </tr>
                      
                      <tr>
                        <td class="cart-summary-tbl-left">СКИДКА ПО ЗАКАЗУ:
                          <span class="cart-summary-info">
                            <span class="instead-what-img">?</span>
                            <i></i>
                            <div class="cart-popup">
                              <div class="cart-info-content">
                                <h4>СЕРВИС «МОЯ СКИДКА»</h4>
                                <div class="cart-info-list">
                                  <p>
                                  <span>10% (ваша скидка)</span>
                                  — скидка, при покупке суммарного количества балов от 20б и до 50Б (Не включая 50Б);
                                  </p>
                                  <p>
                                  <span>15%</span>
                                  — скидка, при покупке суммарного количества балов от 50б и до 100Б (Не включая 100б);
                                  </p>
                                  <p>
                                  <span>20%</span>
                                  — скидка, при покупке суммарного количества балов от 100 до 500 (не включая 500);
                                  </p>
                                  <p>
                                  <span>25%</span>
                                  — скидка, при покупке суммарного количества балов от 500б, а также для участника Партнерской программы
                                  </p>
                                </div>                  
                              </div>
                            </div>
                          </span>
                        </td>
                        <td class="cart-summary-tbl-right cart-bold">123 456 руб (5%)</td>         
                      </tr> 

                      <tr>
                        <td class="cart-summary-tbl-left tbl-border">ДОСТАВКА:</td>
                        <td class="cart-summary-tbl-right tbl-border cart-bold">9 999 300 руб</td>         
                      </tr>
                      <tr>
                        <td class="cart-summary-tbl-left tbl-after-border">ИТОГО СУММА:</td>
                        <td class="cart-summary-tbl-right tbl-after-border cart-bold">500 000 руб</td>         
                      </tr> 
                      <tr>
                        <td class="cart-summary-tbl-left">ИТОГО БАЛЛОВ:</td>
                        <td class="cart-summary-tbl-right color-orange cart-bold">500 999 999 Б</td>          
                      </tr>
                      <tr>
                        <td class="cart-summary-tbl-left">ИТОГО ПОДАРКИ:</td>
                        <td class="cart-summary-tbl-right color-orange cart-bold">500 999 999 Б</td>          
                      </tr>
                    </table>
                </div>
        
              </div>
              <div class="cleaner"></div>
            </div>

          </li>
        </ul>

        <div class="line"></div>

        <div class="buttons">
			<div class="left">
				<a href="#" class="this-btn small">НАЗАД К СПИСКУ</a>	
			</div>

			<div class="right">
				<a href="#" class="this-btn printer uppercase">РАСПЕЧАТАТЬ</a>
        <a href="#" class="green-btn uppercase">ОПЛАТИТЬ</a>
				<a href="#" class="green-btn small uppercase">ПОВТОРИТЬ ЗАКАЗ</a>
			</div>
		</div>
		<div class="cleaner"></div>
	</div>
</div>


<?
require_once('footer.php');
?>
