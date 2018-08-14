<?php include('includes/header.php'); ?>

<?php 
$headerOptions = array(
        'pageColor' => 'header__wrap_transparent header__wrap_transparent_green',
        'headerTheme' => 'header-dark'
    );

insert_header($headerOptions); 
?>



<div class="hero hero-fill hero-skew hero-fill_gray-green hero--trade">
	<div class="wrap">
		<div class="text-with-right-illustration js-svg-lines svg-lines_green-2">
				<h1 class="text-with-right-illustration__title">Торговля</h1><!-- /.title -->
				<div class="text-with-right-illustration__description">
					Торговый сервис, позволяющий Вам обменивать, покупать и продавать криптовалюту по самому выгодному курсу
				</div><!-- /.description -->
				<div class="text-with-right-illustration__action-b">
					<a href="" class="btn btn_fill btn_fill_green btn_shadow"><span class="btn__text">НАЧАТЬ ТОРГОВЛЮ</span></a>
				</div><!-- /.action-b -->

				<div class="text-with-right-illustration__illustration text-with-right-illustration__illustration--video">
					<img src="assets/img/ilustrations/trade.svg" alt="" />
					<a href="#" class="text-with-right-illustration__illustration--video__play text-with-right-illustration__illustration--video__play--green"></a>
				</div><!-- /.text-with-right-illustration__illustration -->
		</div><!-- /.text-with-right-illustration -->
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
			 Торговля - удобна и доступна как для новичков,  
так и для профессионалов
		</div><!-- /.heading__text -->
	</div><!-- /.heading heading_h2 -->

	<div class="text-with-left-illustration">

		<div class="text-with-left-illustration__illustration">
			<img src="assets/img/ilustrations/trade2.png" alt="" />
		</div><!-- /.text-with-right-illustration__illustration -->
			<div class="text-with-left-illustration__description">
				<ul class="ul-check ul-check--green">
					<li>Простой и интуитивно понятный интерфейс, удобное управление сделками</li>
					<li>Сделки между участниками происходят среди всех валют, представленных на платформе</li>
					<li>P2P обмен между участниками в режиме реального времени</li>
					<li>Функции stop loss и take profit позволят обезопасить Ваши сделки коррекции курса</li>
					<li>Фиксированный курс обмена по одной из ведущих криптовалютных бирж</li>
				</ul><!-- /.ul_check -->
			</div><!-- /.description -->
	</div><!-- /.text-with-right-illustration -->
</div><!-- /.wrap -->
</section><!-- /.white-content -->

<section class="gradient-before-footer gradient-before-footer--green">
	<div class="wrap">
		<div class="gradient-before-footer__content">
			<p class="gradient-before-footer__title">Простое решение для торговли и получения прибыли</p>
			<a href="" class="btn btn_fill btn_fill_green btn_shadow">
				<span class="btn__text">НАЧАТЬ ТОРГОВЛЮ</span>
			</a>
		</div>
	</div>
</section>


<?php include('includes/footer.php'); ?>