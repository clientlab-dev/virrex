<?php include('includes/header.php'); ?>

<?php 
$headerOptions = array(
		'pageColor' => 'header__wrap_transparent',
		'headerTheme' => 'header-dark'
	);

insert_header($headerOptions); 
?>



<div class="hero hero-fill hero-skew hero-fill_gray-dark-blue">
	<div class="wrap">
		<div class="hero-text-content hero-text-content--center">
			<div class="heading heading_h1">
				<div class="heading__text">
					О компании
				</div><!-- /.heading__text -->
				<div class="heading__sub">
					При создании Virrex.io мы руководстовались принципами максимального комфорта, удобства и качественного обслуживания своих клиентов, путем предоставления различных по функционалу сервисов и услуг в рамках Единой Системы
				</div><!-- /.heading__sub -->
			</div><!-- /.heading heading_h1 -->
			<div class="cols-2">
				<div class="col">
					<ul class="ul-check ul-check--blue-transparent">
						<li>Выгодный обменный сервис</li>
						<li>Многозадачная платежная система</li>
						<li>Перспектива выхода на ICO</li>
					</ul><!-- /.ul-check -->
				</div><!-- /.col -->
				<div class="col">
					<ul class="ul-check ul-check--blue-transparent">
						<li>Нет аналогов на рынке</li>
						<li>Нет аналогов на рынке</li>
						<li>Скорость и удобство сервисов</li>
					</ul><!-- /.ul-check -->
				</div><!-- /.col -->
			</div><!-- /.cols-2 -->
		</div><!-- /.hero-center-text-content -->
	</div><!-- /.wrap -->
	<div class="hero-skew__polygon">
		<div class="hero-skew__polygon__left-grad"></div><!-- /.hero-skew__polygon__left-grad -->
		<div class="hero-skew__polygon__right-grad"></div><!-- /.hero-skew__polygon__rigth-grad -->
	</div><!-- /.hero-skew__polygon -->
</div><!-- /.hero -->
 

<section class="white-content">
<div class="wrap">
	<div class="heading heading_center heading_h2">
		<div class="heading__text">
			Отзывы наших пользователей
		</div><!-- /.heading__text -->
		<div class="heading__sub">
			Мы стремимся создать максимально комфортный сервис для наших пользователей и с благодарностью примем ваши пожелания и предложения. 
		</div><!-- /.heading__sub -->
	</div><!-- /.heading heading_h2 -->

	<div class="reviews">

		<div class="reviews__slider js-reviews__slider reviews__slider--one-el">
			<ul>
				<?php for ($i=0; $i < 3; $i++) { ?>
				<li>
					<div class="reviews__item reviews__item--has-avatar">
						<div class="reviews__item__avatar" style="background-image:url('assets/img/content/review1.jpg');" ></div><!-- /.avatar -->
						<div class="reviews__item__bio">
							<div class="reviews__item__bio__name">Мария Ширяева</div><!-- /.bio__name -->
							<div class="reviews__item__bio__position">Профессия, компания <?php echo $i; ?></div><!-- /.reviews__item__position -->
						</div><!-- /.bio -->
						<div class="reviews__item__body">
							<div class="reviews__item__body__text">
								При выборе компании для меня первое и самое важное, это надежность компании, на втором месте прибыль и ликвидность. Для себя я открыла мир криптовалют и поэтому предпочитаю инвестировать в нее большее количество средств, пообщавшись с админом проекта Virrex.io вопрос о надежности и долгосрочности проекта подтвержден. Так что, буду инвестировать
							</div><!-- /.reviews__item__body__text -->
						</div><!-- /.reviews__item__body -->
					</div><!-- /.reviews__item -->
				</li>
				<?php } ?>

				<li>
					<div class="reviews__item ">
						<div class="reviews__item__avatar" style="background-image:url('assets/img/content/review1.jpg');" ></div><!-- /.avatar -->
						<div class="reviews__item__bio">
							<div class="reviews__item__bio__name">Мария Ширяева</div><!-- /.bio__name -->
							<div class="reviews__item__bio__position">Профессия, компания <?php echo $i; ?></div><!-- /.reviews__item__position -->
						</div><!-- /.bio -->
						<div class="reviews__item__body">
							<div class="reviews__item__body__text">
								При выборе компании для меня первое и самое важное, это надежность компании, на втором месте прибыль и ликвидность. Для себя я открыла мир криптовалют и поэтому предпочитаю инвестировать в нее большее количество средств, пообщавшись с админом проекта Virrex.io вопрос о надежности и долгосрочности проекта подтвержден. Так что, буду инвестировать
								При выборе компании для меня первое и самое важное, это надежность компании, на втором месте прибыль и ликвидность. Для себя я открыла мир криптовалют и поэтому предпочитаю инвестировать в нее большее количество средств, пообщавшись с админом проекта Virrex.io вопрос о надежности и долгосрочности проекта подтвержден. Так что, буду инвестировать
								При выборе компании для меня первое и самое важное, это надежность компании, на втором месте прибыль и ликвидность. Для себя я открыла мир криптовалют и поэтому предпочитаю инвестировать в нее большее количество средств, пообщавшись с админом проекта Virrex.io вопрос о надежности и долгосрочности проекта подтвержден. Так что, буду инвестировать
							</div><!-- /.reviews__item__body__text -->
						</div><!-- /.reviews__item__body -->
					</div><!-- /.reviews__item -->
				</li>
			</ul><!-- /.reviews__slider -->
		</div><!-- /.js-reviews__slider -->
	</div><!-- /.reviews -->
	<hr />

	<div class="crypto-centers-info">
		<div class="heading heading_h2">
			<div class="heading__text">
				Криптоинформационные центры:
			</div><!-- /.heading__text -->
		</div><!-- /.heading heading_h2 -->

		<div class="crypto-centers-info__text">
			<p>
				Республика Башкартостан, г.Стерлитамак ул. Мира 1Б
			</p>
			<p>
				Республика Башкартостан, г.Уфа Проспект октября 4/3 офис 401<br />
			</p>
			<p>
				Россия, г. Челябинск, проспект им. Ленина, 81, оф. 410<br />
			</p>
			<p>
				Чувашская республика, г. Чебоксары, улица Карла Маркса 52, оф. 14<br />
			</p>
		</div><!-- /.crypto-centers-info__text -->

		<div class="crypto-centers-info__social">
			<div class="social-links">
			    <a href="#"><img src="assets/img/youtube.svg" width="34" alt=""></a>
			    <a href="#"><img src="assets/img/telegram.svg" width="34" alt=""></a>
			    <a href="#"><img src="assets/img/facebook.svg" width="34" alt=""></a>
			    <a href="#"><img src="assets/img/vk.svg" width="34" alt=""></a>
			    <a href="#"><img src="assets/img/bitcoin.svg" width="34" alt=""></a>
			</div>
		</div><!-- /.crypto-centers-info__social -->

	</div><!-- /.crypto-centers-info -->


</div><!-- /.wrap -->
</section><!-- /.white-content -->


<?php include('includes/footer.php'); ?>