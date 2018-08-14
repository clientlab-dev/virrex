<?php include('includes/header.php'); ?>

<?php 
$headerOptions = array(
        'pageColor' => 'header__wrap_transparent header__wrap_transparent_green',
        'headerTheme' => 'header-dark'
    );

insert_header($headerOptions); 
?>



<div class="hero hero-fill hero-skew hero-fill_gray-green">
	<div class="wrap">
		<div class="text-with-right-illustration js-svg-lines svg-lines_green-2">
				<h1 class="text-with-right-illustration__title">Кошелёк</h1><!-- /.title -->
				<div class="text-with-right-illustration__description">
				Универсальный электронный кошелек нового поколения, поддерживающий 19 цифровых валют
				</div><!-- /.description -->
				<div class="text-with-right-illustration__action-b">
					<button class="btn btn_fill btn_fill_green btn_shadow"><span class="btn__text">СОЗДАТЬ БЕЗОПАСНЫЙ КОШЕЛЕК</span></button>
				</div><!-- /.action-b -->

				<div class="text-with-right-illustration__illustration text-with-right-illustration__illustration--video">
					<img src="assets/img/ilustrations/wallet.png" alt="" />
					<a href="#" class="text-with-right-illustration__illustration--video__play text-with-right-illustration__illustration--video__play--green"></a>
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
		Наслаждайтесь финансовой гибкостью при использовании <br>
интегрированных функций в одном месте
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
						11 карьерных статусов, ведущих к финансовым высотам
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/credit.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Традиционный многоуровневый линейный маркетинг
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/shield.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Щедрые партнерские вознаграждения за активное участие в продвижении и развитии нашего банка
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
						11 карьерных статусов, ведущих к финансовым высотам
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/safe.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Традиционный многоуровневый линейный маркетинг
					</div><!-- /.title -->
				</div><!-- /.benefits-list__item -->
			</div><!-- /.col -->
			<div class="col">
				<div class="benefits-list__item">
					<div class="img">
						<img src="assets/img/benefits/folders.png" alt="">
					</div><!-- /.img -->
					<div class="title">
						Щедрые партнерские вознаграждения за активное участие в продвижении и развитии нашего банка
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
		Наслаждайтесь финансовой гибкостью при использовании <br>
интегрированных функций в одном месте
		</div><!-- /.heading__text -->
	</div>

<?php include('includes/wallets.php') ?>

<div class="heading heading_center heading_h2">
		<div class="heading__text">
		Наслаждайтесь финансовой гибкостью при использовании <br>
интегрированных функций в одном месте
		</div><!-- /.heading__text -->
	</div>
</div>
	</div>
<?php include('includes/wallets_grayed_out.php'); ?>
<section class="gradient-before-footer gradient-before-footer--light-blue">
	<div class="wrap">
		<div class="gradient-before-footer__content">
			<p class="gradient-before-footer__title">Зарегистрируйтесь, чтобы получить онлайн-кошелек прямо сейчас</p>
			<button class="btn btn_fill btn_fill_green btn_shadow">
				<span class="btn__text">СОЗДАТЬ БЕЗОПАСНЫЙ КОШЕЛЕК</span>
			</button>
		</div>
	</div>
</section>

<?php include('includes/footer.php'); ?>