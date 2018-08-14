<?php include('includes/header.php'); ?>

<?php 
$headerOptions = array(
		'pageColor' => 'header__wrap_transparent',
		'headerTheme' => 'header-dark'
	);

insert_header($headerOptions); 
?>


	
	<div class="hero hero--vicash hero-fill_gray-dark-blue">
		<div class="wrap">
			<div class="hero-text-content hero-text-content--center hero-text-content--minor">
				<div class="heading heading_h1">
					<div class="heading__text">
						VICASH
					</div><!-- /.heading__text -->
					<div class="heading__sub">
						Доступная интеграция нашего платёжного модуля для приема и отправки платежей в вашем интернет-магазине
					</div><!-- /.heading__sub -->
				</div><!-- /.heading heading_h1 -->
			</div><!-- /.hero-center-text-content -->
		</div><!-- /.wrap -->

		<div class="hero-skew vicash-illustration hero-fill_light-blue">
				<div class="hero-skew__polygon--top">
					<div class="hero-skew__polygon--top__left-grad"></div><!-- /.hero-skew__polygon__left-grad -->
					<div class="hero-skew__polygon--top__right-grad"></div><!-- /.hero-skew__polygon__rigth-grad -->
				</div><!-- /.hero-skew__polygon--top -->
		
			<div class="wrap">
				<img src="assets/img/ilustrations/vicash_illustration.jpg" alt="" />
			</div><!-- /.wrap -->
		
				<div class="hero-skew__polygon">
					<div class="hero-skew__polygon__left-grad"></div><!-- /.hero-skew__polygon__left-grad -->
					<div class="hero-skew__polygon__right-grad"></div><!-- /.hero-skew__polygon__rigth-grad -->
				</div><!-- /.hero-skew__polygon -->
		</div><!-- /.hero -->
	</div><!-- /.hero -->

	<section class="white-content">
	<div class="wrap">

		<div class="text-with-right-illustration text-with-right-illustration--vicash">

			<div class="text-with-right-illustration__description">

				<!-- <div class="text-with-right-illustration__description__title">
					Принимайте платежи с использованием готового функционала всех электронных кошельков, присутствующих в Virrex Digital Bank
				</div> --><!-- /.title -->

				<div class="heading heading_h2">
													<div class="heading__text">
														Принимайте платежи с использованием готового функционала всех электронных кошельков, присутствующих в Virrex Digital Bank
													</div><!-- /.heading__text -->
												</div>


				<ul class="ul-check ul-check--blue-transparent ul-check--minor">
					<li>Бесплатная помощь в подключении и работе с модулем</li>
					<li>Отчет всех транзакций</li>
					<li>Быстрая и простая настройка подключения сервиса</li>
				</ul><!-- /.ul_check -->
			</div><!-- /.description -->
			<div class="text-with-right-illustration__illustration ">
				<img src="assets/img/ilustrations/vicash_illustration2.jpg" alt="" />
			</div><!-- /.text-with-right-illustration__illustration -->
		</div><!-- /.text-with-right-illustration -->
	</div><!-- /.wrap -->
	</section><!-- /.white-content -->
 


	<section class="gradient-before-footer gradient-before-footer--light-dark-blue">
		<div class="wrap">
			<div class="gradient-before-footer__content">
				<p class="gradient-before-footer__title">Создайте учетную запись и начните работу <br />с модулем VICASH уже сейчас</p>

				<a href="#" class="btn btn_fill btn_fill_blue btn_shadow">
					<span class="btn__text">СОЗДАТЬ УЧТЕНУЮ ЗАПИСЬ</span>
				</a>

			</div>
		</div>
	</section>

<?php include('includes/footer.php'); ?>