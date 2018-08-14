<?php include('includes/header.php'); ?>

<?php 
$headerOptions = array(
        'pageColor' => 'header__wrap_transparent header__wrap_transparent_blue',
        'headerTheme' => 'header-dark'
    );

insert_header($headerOptions); 
?>



<div class="hero hero-fill hero-skew hero-fill_gray-dark-blue hero--wallet">
	<div class="wrap">
		<div class="text-with-right-illustration js-svg-lines svg-lines_blue-2">
				<h1 class="text-with-right-illustration__title">Кошелёк</h1><!-- /.title -->
				<div class="text-with-right-illustration__description">
				Универсальный электронный кошелек нового поколения, поддерживающий 19 цифровых валют
				</div><!-- /.description -->


				<div class="text-with-right-illustration__action-b __desktop">
					<a href="#" class="btn btn_fill btn_fill_green btn_shadow"><span class="btn__text">СОЗДАТЬ БЕЗОПАСНЫЙ КОШЕЛЕК</span></a>
				</div><!-- /.action-b -->

				<div class="text-with-right-illustration__action-b __mobile">
					<a href="#" class="btn btn_fill btn_fill_green btn_shadow"><span class="btn__text">СОЗДАТЬ КОШЕЛЕК</span></a>
				</div><!-- /.action-b -->


				<div class="text-with-right-illustration__illustration">
					<img src="assets/img/ilustrations/wallet.png" alt="" />
				</div><!-- /.text-with-right-illustration__illustration -->
		</div><!-- /.text-with-right-illustration -->
	</div><!-- /.wrap -->
	<div class="hero-skew__polygon">
		<div class="hero-skew__polygon__left-grad"></div><!-- /.hero-skew__polygon__left-grad -->
		<div class="hero-skew__polygon__right-grad"></div><!-- /.hero-skew__polygon__rigth-grad -->
	</div><!-- /.hero-skew__polygon -->
</div><!-- /.hero -->
 




	<div class="blue-lines">
		<div class="blue-lines__right-side"></div>
		<div class="blue-lines__left-side"></div>
	</div>
<div class="wrap white-content">

<div class="heading heading_center heading_h2">
		<div class="heading__text">
		Наслаждайтесь финансовой гибкостью при использовании  
интегрированных функций в одном&nbsp;месте
		</div><!-- /.heading__text -->
	</div>

<div class="benefits-list">
		<div class="cols-3">
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/chart.png" alt="">
					</div><!-- /.img -->
					<div class="title">
					Отсутствие комиссии внутри сервиса.
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/credit.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Возможность привязки дебетовых карт к кошельку.
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/shield.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Высокоуровневая защита и безопасность для всех системных транзакций.
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<!-- /.col -->

		</div><!-- /.cols-3 -->

		<div class="wrap"><div class="white-space--sm"></div></div>
		<div class="cols-3">
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/wallets.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Вы можете принимать платежи в любой из кошельков и выгодно обменивать внутри системы.
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/safe.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Цифровая валюта для обеспечения сохранности средств защищена автономным хранилищем (оффлайн хранилище)
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/folders.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Возможность создавать неограниченное число кошельков для упорядочивания ваших доходов от одного или нескольких бизнесов.
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<!-- /.col -->

		</div><!-- /.cols-3 -->

	</div>
	<hr>
	<div class="wrap">
<div class="heading heading_center heading_h2">
		<div class="heading__text">

			Актуальные криптовалюты, представленные на сайте

		</div><!-- /.heading__text -->
	</div>

<?php include('includes/wallets_inside_wallet_page.php') ?>

<div class="heading heading_center heading_h2">
		<div class="heading__text">

			Ожидаемый листинг криптовалют

		</div><!-- /.heading__text -->
	</div>
</div>
<?php include('includes/wallets_grayed_out.php'); ?>
	</div>
<section class="gradient-before-footer gradient-before-footer--light-blue">
	<div class="wrap">
		<div class="gradient-before-footer__content">
			<p class="gradient-before-footer__title">Зарегистрируйтесь, чтобы получить онлайн-кошелек прямо сейчас</p>
			<a href="#" class="btn btn_fill btn_fill_green btn_shadow __desktop">
				<span class="btn__text">СОЗДАТЬ БЕЗОПАСНЫЙ КОШЕЛЕК</span>
			</a>
			<a href="#" class="btn btn_fill btn_fill_green btn_shadow __mobile">
				<span class="btn__text">СОЗДАТЬ КОШЕЛЕК</span>
			</a>
		</div>
	</div>
</section>

<?php include('includes/footer.php'); ?>