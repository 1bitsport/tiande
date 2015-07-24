<?
require_once('header.php');
?>

	<div class="review">
		<div class="left-image">
			<div class="image-inner">
				<a id="single_image" data-key="#big-pic" class="detailed modal-viewer" href="http://kasstorg.ru/bitrix/templates/ecomercepro_s1/images/map4.png">
					<span class="increaser"></span>
					<img src="/img/prod-img.png" alt="">
				</a>
			</div>
		</div>
		<div class="right-content validator last-step">
			<div class="content-inner">
				<h1 class="uppercase">Мой отзыв о товаре: <a href="#">Лосьон для тела «Шелковая роза»</a></h1>
				<h2 class="uppercase">Правила публикации отзывов:</h2>
				<p>
					Спасибо, что решили поделиться опытом! <br><br>
					Ваш отзыв будет опубликован через некоторое время после проверки модератором.<br><br>
					Обратите внимание, мы не публикуем отзывы:
				</p>
				<ul>
				 	<li>— написанные ЗАГЛАВНЫМИ буквами, </li>
				 	<li>— содержащие ненормативную лексику или оскорбления, </li>
				 	<li>— не относящиеся к потребительским свойствам конкретного товара,</li>
				 	<li>— рекламного характера (содержащие контактную информацию и ссылки на <br>другие сайты).</li>
				 </ul> 	 
				<br><br>
				<p>
					Пожалуйста, учтите, что публикуя отзыв вы принимаете некоторую <br>
					ответственность перед покупателями, поэтому <br>
					на странице отзывов будет указно ваше имя. <br>
				</p>
				<form action="review-final.php">
					<div class="rate-it">
						<span class="uppercase text">Оцените товар: </span>
						<!-- <ul>
							<li><a href="" class="star1"></a></li>
							<li><a href="" class="star2"></a></li>
							<li><a href="" class="star3"></a></li>
							<li><a href="" class="star4"></a></li>
							<li><a href="" class="star5"></a></li>
						</ul> -->

						<span class="stars-rating" id="rating-stars">
						  <input type="radio" name="rating" class="not-styler" value="1"><i></i>
						  <input type="radio" name="rating" class="not-styler" value="2"><i></i>
						  <input type="radio" name="rating" class="not-styler" value="3"><i></i>
						  <input type="radio" name="rating" class="not-styler" value="4"><i></i>
						  <input type="radio" name="rating" class="not-styler" value="5"><i></i>
						</span>
					</div>
					<textarea name="comment" id="" class="form-input importantField" placeholder="Комментарий"></textarea>
					<span class="wrong">Поле не может быть пустым</span>
					<input type="submit" value="ОСТАВИТЬ ОТЗЫВ" class="green-btn continue active">
				</form>
			</div>
		</div>
	</div>


<a href="" class="modal-viewer hide" data-key="#new-msg">opener</a>
<div id="new-msg" class="following modal hide posrelative not-wide">
	<h1>РАССЫЛКА НОВОСТЕЙ</h1>
	<p>
		Хотите ежедневно получать информацию о новинках,<br> акциях и подарках нашего Online Service Center?
	</p>
		<br>	
	<p>Подпишитесь на нашу рассылку!</p>
	<form action="">
	<div>
	  	<input type="text" placeholder="Выберите ваше имя" class="form-input" name="follow-name" id="the-follow-name">
	</div>
	
	<div class="wrong">
		<input type="text" name="follow-email" placeholder="Введите ваш e-mail" id="follow-email" class="form-input">
		<span class="wrong">неверный формат почтового ящика</span>
	</div>
	<a href="#" class="send-form continue active modal-viewer" data-key="#follower">ПОДПИСАТЬСЯ</a>
	</form>
</div>

<div id="follower" class="following modal hide posrelative">
	<h1>РАССЫЛКА НОВОСТЕЙ</h1>
	<p class="big-top-padding">
		Спасибо за подписку на новости<br> корпорации TianDe
	</p>
		<br>	
	<p class="big-bottom-padding">
		На ваш почтовый ящик отправлено сообщение, содержащее ссылку подтверждения. Пожалуйста, перейдите по ссылке из письма для завершения процесса подписки.
	</p>
</div>
<?
require_once('footer.php');
?>
