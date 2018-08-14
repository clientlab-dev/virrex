<?php include('includes/header.php'); ?>


<?php 
$headerOptions = array(
		'pageColor' => 'header__wrap_transparent',
		'headerTheme' => 'header-light'
	);

insert_header($headerOptions); 
?>


<div class="hero hero-fill hero-skew hero-fill_dark-blue">
	<div class="wrap">
		<div class="hero-text-content hero-text-content--center hero-text-content--white">
			<div class="heading heading_h1">
				<div class="heading__text">
					Мерчант/API
				</div><!-- /.heading__text -->
				<div class="heading__sub">
					API Virrex позволяют воспользоваться уже полностью готовым функционалом всех электронных кошельков, представленных на платформе
				</div><!-- /.heading__sub -->
			</div><!-- /.heading heading_h1 -->
			<a href="#" class="btn btn_fill btn_fill_blue btn_shadow">
				<span class="btn__text">ПОДКЛЮЧИТЬ API</span>
			</a>
		</div><!-- /.hero-center-text-content -->
	</div><!-- /.wrap -->
	<div class="hero-skew__polygon">
		<div class="hero-skew__polygon__left-grad"></div><!-- /.hero-skew__polygon__left-grad -->
		<div class="hero-skew__polygon__right-grad"></div><!-- /.hero-skew__polygon__rigth-grad -->
	</div><!-- /.hero-skew__polygon -->
</div><!-- /.hero -->
 

<section class="white-content">
	<div class="wrap">

		<div class="text-with-right-illustration text-with-right-illustration--api ">

			<div class="text-with-right-illustration__description">

				<div class="text-with-right-illustration__description__title">
					Мы ведем сотрудничество с компаниями, <br />
цель которых —ведение бизнеса <br />
на криптовалюте.
				</div><!-- /.title -->
				Готовый код API значительно упрощает жизнь программисту при разработке уникального сервиса. Достаточно адаптировать существующий код под свои требования так, чтобы оптимально соответствовать задачам сайта.
				
				<div class="text-with-right-illustration__footer">
					<a href="#">Ознакомится с полной схемой возможно после регистрации </a>
				</div><!-- /.action-b -->

			</div><!-- /.description -->
			<div class="text-with-right-illustration__illustration text-with-right-illustration__illustration--vertical-middle">
				<img src="assets/img/ilustrations/api1.png" alt="" />
			</div><!-- /.text-with-right-illustration__illustration -->
		</div><!-- /.text-with-right-illustration -->
	</div><!-- /.wrap -->
</section><!-- /.white-content -->


<section class="gradient-before-footer gradient-before-footer--blue">
	<div class="wrap">
		<div class="gradient-before-footer__content">
		<p class="gradient-before-footer__title">Подключите готовый API после регистрации <br />бесплатно</p>
		<a href="#" class="btn btn_fill btn_fill_blue btn_shadow"><span class="btn__text">СТАТЬ ПАРТНЕРОМ</span></a>
		</div>
	</div>
</section>


<?php include('includes/footer.php'); ?>